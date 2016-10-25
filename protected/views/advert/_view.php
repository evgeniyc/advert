<?php
/* @var $this AdvertController */
/* @var $data Advert */
?>

<div class="view">
	<div id="photo">
		<?php echo CHtml::image(Yii::app()->getPahtOfAlias('webroot').'/images/uploads/'.$data->id.'.jpg', 'Изображение'); ?>
	</div>
	<?php foreach($data->imgs as $img): ?>
		<div class="lphotos">
			<?php echo CHtml::image(Yii::app()->getPahtOfAlias('webroot').'/images/uploads/'.$img->advert_id.'_'$img->num.'.jpg', 'Изображение'); ?>
		</div>
	<?php endforeach; ?>	
		
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />


</div>