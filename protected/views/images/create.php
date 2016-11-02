<?php
/* @var $this ImagesController */
/* @var $model Images */

$this->breadcrumbs=array(
	'Мой кабинет'=>array('admin'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Просмотреть объявление', 'url'=>array('advert/view/'.$model->advert_id)),
	array('label'=>'Управление объявлениями', 'url'=>array('advert/admin')),
);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Добавить изображения к объявлению №<?php echo $model->advert_id; ?>
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php if(Yii::app()->user->hasFlash('addImg')): ?>
			<div class="flash-success">
				<?php echo Yii::app()->user->getFlash('addImg'); ?>
			</div>
		<?php endif; ?>
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>