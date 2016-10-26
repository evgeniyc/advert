<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->breadcrumbs=array(
	'Объявления'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Advert', 'url'=>array('index')),
	array('label'=>'Create Advert', 'url'=>array('create')),
	array('label'=>'Update Advert', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Advert', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Advert', 'url'=>array('admin')),
);
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Объявление номер <?php echo $model->id; ?>:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<h3><?php echo $model->title; ?></h3>
		<div class="row">
			<div class="col-md-6">
				<!-- 2. Add images to <div class="fotorama"></div>. -->
				<div id="single-img" class="fotorama"
					data-width="350"
					data-nav="thumbs"
					data-allowfullscreen="true">
					<?php 	if($model->photo)
								echo CHtml::image(Yii::app()->baseUrl.'/images/uploads/'.$model->id.'.jpg','Изображение дом',array('width'=>'100%','height'=>'100%')); 
							else 
								echo CHtml::image(Yii::app()->baseUrl.'/images/nophoto.jpg','Изображение дом',array('width'=>'100%','height'=>'100%'));
							foreach($model->imgs as $img):
								echo CHtml::image(Yii::app()->baseUrl.'/images/uploads/'.$img->advert_id.'_'.$img->num.'.jpg', 'Изображение');
							endforeach; ?>
				  <!--<img src="http://s.fotorama.io/1.jpg">
				  <img src="http://s.fotorama.io/2.jpg"> -->
				</div>
				<!-- 3. Enjoy! -->
			</div>
			<div class="col-md-6">
				<?php echo $model->content; ?>
				<h4>Контактные данные:</h4>
				<?php
				$this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'owner.name',             
						'owner.phone',        
						'owner.email', 
					),
				)); ?>
			</div>
		</div>
	</div>
</div>

	