<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->breadcrumbs=array(
	'Объявления'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'List Advert', 'url'=>array('index')),
	array('label'=>'Manage Advert', 'url'=>array('admin')),
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