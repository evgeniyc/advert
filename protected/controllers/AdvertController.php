<?php

class AdvertController extends Controller
{
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','delete'),
				'roles'=>array('author'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Advert('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Advert']))
		{
			$model->attributes=$_POST['Advert'];
			$model->uphoto=CUploadedFile::getInstance($model,'uphoto');
			if(!empty($model->uphoto)) $model->photo=1;
			if($model->save())
			{
				if($model->photo)
				{
					$names=explode('.',$model->uphoto->name);
					$count=count($names);
					$count--;
					$type=$names[$count];
					unset($names);
					$names[]=$model->id;
					$names[]=$type;
					$name=implode('.',$names);
					$path=Yii::getPathOfAlias('webroot').'/images/uploads/'.$name;
					$model->uphoto->saveAs($path);
				}
				$owner = $model->owner;
				if($owner->role == 1)
				{
					$owner->role = 2;
					$owner->save();
					$auth = Yii::app()->authManager;
					$auth->revoke('reader',$owner->id);
					$auth->assign('author',$owner->id);
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('create',array('model'=>$model));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		
		$model=$this->loadModel($id);
		if(Yii::app()->user->checkAccess('updateOwn',array('author'=>$model->author)) || Yii::app()->user->checkAccess('update'))
		{
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Advert']))
			{
				$model->attributes=$_POST['Advert'];
				$model->uphoto=CUploadedFile::getInstance($model,'uphoto');
				if(!empty($model->uphoto)) $model->photo=1;
				if($model->save())
				{
					if($model->uphoto)
					{
						$names=explode('.',$model->uphoto->name);
						$count=count($names);
						$count--;
						$type=$names[$count];
						unset($names);
						$names[]=$id;
						$names[]=$type;
						$name=implode('.',$names);
						$path=Yii::getPathOfAlias('webroot').'/images/uploads/'.$name;
						$model->uphoto->saveAs($path);
					}
					$this->redirect(array('view','id'=>$model->id));
				}
			}

			$this->render('update',array(
				'model'=>$model,
			));
		}
		else throw new CHttpException(404,'Access denied.');
		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model = $this->loadModel($id);
		if(Yii::app()->user->checkAccess('updateOwn',array('author'=>$model->author)) || Yii::app()->user->checkAccess('update'))
			$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Advert');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Advert('search');
		$model->author = Yii::app()->user->id;
		if(Yii::app()->user->checkAccess('update'))
			$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Advert']))
			$model->attributes=$_GET['Advert'];
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Advert the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Advert::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Advert $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='advert-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	protected function datum($dat){
		$old_date=explode('-',$dat);
		$i=$old_date[0];
		$j=$old_date[2];
		$old_date[0]=$j;
		$old_date[2]=$i;
		$new_date=implode('.',$old_date);
		return $new_date;
	}
}
