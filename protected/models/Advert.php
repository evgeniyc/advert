<?php

/**
 * This is the model class for table "advert".
 *
 * The followings are the available columns in table 'advert':
 * @property string $id
 * @property string $title
 * @property string $content
 * @property integer $photo
 * @property string $date
 * @property integer $price
 * @property integer $category
 * @property string $author
 */
class Advert extends CActiveRecord
{
	public $uphoto;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'advert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, price, category', 'required'),
			array('content','filter','filter'=>array($obj=new CHtmlPurifier(),'purify')),
			array('photo, category, author', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>64),
			array('price','numerical', 'integerOnly'=>true),
			array('price', 'length', 'max'=>12),
			array('uphoto', 'file', 'types'=>'jpg, gif, png', 'maxSize' => 1048576, 'allowEmpty'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, date, price, category, author', 'safe', 'on'=>'search'),
			array('title, content, price, category', 'safe', 'on'=>'create'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			 'owner'=>array(self::BELONGS_TO, 'User', 'author'),
			 'imgs'=>array(self::HAS_MANY, 'Images', 'advert_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Идентификатор',
			'title' => 'Заголовок',
			'content' => 'Содержание',
			'uphoto' => 'Фото',
			'date' => 'Дата публикации',
			'price' => 'Цена',
			'category' => 'Категория',
			'author' => 'Автор',
		);
	}
	
	public function beforeSave()
	{
		if($this->isNewRecord)
		{
			$this->date = date("Y-m-d");
			$this->author = Yii::app()->user->id;
		}
		
		
		return parent::beforeSave();
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('photo',$this->photo);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('author',$this->author);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Advert the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
