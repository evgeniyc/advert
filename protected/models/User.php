<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $login
 * @property string $passw
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $reg_date
 * @property integer $role
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, passw, name, phone, email', 'required', 'on'=>'create'),
			array('login, passw', 'required', 'on'=>'login'),
			array('role', 'numerical', 'integerOnly'=>true),
			array('login, name', 'length', 'max'=>12),
			array('login','unique', 'on'=>'create'),
			array('passw', 'length', 'max'=>32),
			array('phone', 'length', 'max'=>18),
			array('email', 'email'),
			array('email', 'length', 'max'=>24),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, login, name, phone, email, reg_date, role', 'safe', 'on'=>'search'),
			array('login, passw, name, phone, email', 'safe', 'on'=>'create'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Идентификатор',
			'login' => 'Логин',
			'passw' => 'Пароль',
			'name' => 'Имя',
			'phone' => 'Телефон',
			'email' => 'email',
			'reg_date' => 'Дата регистрации',
			'role' => 'Роль',
		);
	}
	public function beforeSave()
	{
		if($this->isNewRecord)
		{
			$this->reg_date=date("Y-m-d");
			$this->passw=md5($this->passw);
			$this->role=1;
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
		$criteria->compare('login',$this->login,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('reg_date',$this->reg_date,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
