<a href="#">
	<div class="advert">
		<div class="advert_head"><?php echo $model->title; ?></div>
		<div class="advert_body">
			<div class="advert_image"><?php echo CHtml::image(Yii::app()->baseUrl.'/images/houses/'.$model->author.'.jpg','Изображение дом',array('width'=>'100%','height'=>'100%')); ?></div>
		</div>
		<div class="advert_footer">
		<div class="advert-price">Цена: <?php echo $model->price; ?></div>
		<div class="advert-date"><?php echo $model->reg_date; ?></div>
		</div>
	</div>
</a>