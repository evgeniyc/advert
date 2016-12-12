<?php
/* @var $this AdvertController */
/* @var $data Advert */
?>
<li>
<a href="<?php echo $this->createUrl('advert/view',array('id'=>$data->id)); ?>">
	<div class="advert">
		<div class="advert_head"><?php echo $data->title; ?></div>
		<div class="advert_body">
			<div class="advert_image">
				<?php 
					if($data->photo)
						echo CHtml::image(Yii::app()->baseUrl.'/images/uploads/'.$data->id.'.jpg','Изображение дом',array('width'=>'100%','height'=>'100%')); 
					else 
						echo CHtml::image(Yii::app()->baseUrl.'/images/nophoto.jpg','Изображение дом',array('width'=>'100%','height'=>'100%'));
				?>
			</div>
		</div>
		<div class="advert_footer">
		<div class="advert-price">Цена: <?php echo $data->price; ?>$</div>
		<div class="advert-date"><?php echo $this->datum($data->date); ?></div>
		</div>
	</div>
</a>
</li>