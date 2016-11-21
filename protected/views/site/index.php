<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->layout='//layouts/column1';

/* @var $this AdvertController */
/* @var $dataProvider CActiveDataProvider */


?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Категории:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php 
			foreach($data as $category)
			{
			echo CHtml::link('
					<div class="cat">
						<div class="cat-img">'.
							CHtml::image(Yii::app()->baseUrl.'/images/cat'.$category->id.'.jpg', 'Категория '.$category->name, array('width'=>'100%','height'=>140)).
						'</div>
						<div class="cat-name">'.$category->name.'</div>
					</div>', array('advert/index/'.$category->id));
			}
		?>
	</div>
</div>
