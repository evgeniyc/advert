<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Объявления:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php 
		$j=0;
		for($i=0; $i<25; $i++): $j++;?>
			<a href="#">
				<div class="advert">
					<div class="advert_head">Продам дом в Вольнянске</div>
					<div class="advert_body">
						<div class="advert_image"><?php echo CHtml::image(Yii::app()->baseUrl.'/images/houses/'.$j.'.jpg','Изображение дом',array('width'=>'100%','height'=>'100%')); ?></div>
					</div>
					<div class="advert_footer">
					<div class="advert-price">Цена: $20000</div>
					<div class="advert-date">29.02.2016</div>
					</div>
				</div>
			</a>
		<?php if($j==10) 
				$j=0;
		endfor; ?>
	</div>
</div>
