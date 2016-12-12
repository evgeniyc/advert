<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$this->layout='//layouts/column1';
$this->panelTitle = 'Категории:';
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/assets/plugins/jMosaic/jquery.jMosaic.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/plugins/jMosaic/jquery.jMosaic.min.js');
			Yii::app()->clientScript->registerScript('jMosaic',"
				$(function(){
					$('.category-grid').jMosaic({
						items_type: 'li',
						 min_row_height: 200,
						
						});
				});"
			);
?>
<ul class="category-grid">
<?php 
foreach($data as $category)
{
echo '<li>';
echo CHtml::link('
		<div class="cat">
			<div class="cat-img">'.
				CHtml::image(Yii::app()->baseUrl.'/images/cat'.$category->id.'.jpg', 'Категория '.$category->name, array('width'=>'100%','height'=>140)).
			'</div>
			<div class="cat-name">'.$category->name.'</div>
		</div>', array('advert/index/'.$category->id));
echo '</li>';
}; ?>
</ul>
	