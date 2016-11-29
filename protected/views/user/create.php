<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	'Создать',
);

if(Yii::app()->user->checkAccess('admin'))
{
	$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
	);
}
else
{
	$this->menu = Category::createMenu();	
}
$this->panelTitle = 'Регистрация пользователя:';

$this->renderPartial('_form', array('model'=>$model)); ?>

