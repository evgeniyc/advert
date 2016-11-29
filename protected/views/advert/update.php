<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->pageTitle=Yii::app()->name . ' - Обновить объявление';
$this->breadcrumbs=array(
	'Объявления'=>array('index','id'=>1),
	'Обновить',
);
$this->panelTitle = 'Объявление номер '.$model->id;
?>

<h3>Редактирование объявления</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>