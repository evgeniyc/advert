<a href="#">
	<div class="advert">
		<div class="advert_head"><?php echo $data->title; ?></div>
		<div class="advert_body">
			<div class="advert_image"><?php echo CHtml::image(Yii::app()->baseUrl.'/images/uploads/'.$data->author.'.jpg','Изображение дом',array('width'=>'100%','height'=>'100%')); ?></div>
		</div>
		<div class="advert_footer">
		<div class="advert-price">Цена: <?php echo $data->price; ?>$</div>
		<div class="advert-date"><?php echo $data->date; ?></div>
		</div>
	</div>
</a>