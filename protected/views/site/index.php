<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->layout='//layouts/column1';
$this->panelTitle = 'Категории:';
 
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
	