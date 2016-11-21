<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->pageTitle=Yii::app()->name . ' - Обновить объявление';
$this->breadcrumbs=array(
	'Объявления'=>array('index','id'=>1),
	'Обновить',
);
?>

<h1>Update Advert <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>