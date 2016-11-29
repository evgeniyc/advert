<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->pageTitle=Yii::app()->name . ' - Создать объявление';
$this->breadcrumbs=array(
	'Объявления'=>array('index','id'=>1),
	'Создать',
);
$this->panelTitle = 'Объявление номер '.$model->id;
?>

<h3>Создание объявления</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>