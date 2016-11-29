<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->pageTitle=Yii::app()->name . ' - Просмотреть объявление';
$this->breadcrumbs=array(
	'Объявления'=>array('index','id'=>1),
	$model->title,
);
$this->panelTitle = 'Объявление номер '.$model->id;
?>

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
		<p id="single-content"><?php echo $model->content; ?></p><hr>
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
		<div id="add_date">Объявление добавлено: <?php echo $this->datum($model->date); ?></div>
		<div id="price">Цена: <?php echo $model->price; ?>$</div>
	</div>
</div>
	
	