<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->pageTitle=Yii::app()->name . ' - Создать объявление';
$this->breadcrumbs=array(
	'Объявления'=>array('index','id'=>1),
	'Создать',
);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Создать объявление:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>