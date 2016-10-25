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
		<!-- 2. Add images to <div class="fotorama"></div>. -->
		<div id="single-img" class="fotorama"
			data-width="350"
			data-nav="thumbs"
			data-allowfullscreen="true">
			<?php 	echo CHtml::image(Yii::app()->baseUrl.'/images/uploads/'.$model->id.'.jpg', 'Изображение');
					foreach($model->imgs as $img):
						echo CHtml::image(Yii::app()->baseUrl.'/images/uploads/'.$img->advert_id.'_'.$img->num.'.jpg', 'Изображение');
					endforeach; ?>
		  <!--<img src="http://s.fotorama.io/1.jpg">
		  <img src="http://s.fotorama.io/2.jpg"> -->
		</div>
		<!-- 3. Enjoy! -->
	</div>
</div>
<!-- fotorama.css & fotorama.js. -->
<?php 	Yii::app()->clientScript->registerCssFile('http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css');
		Yii::app()->clientScript->registerScriptFile('http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js'); ?>


	