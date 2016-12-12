<?php
/* @var $this AdvertController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Объявления';
$this->breadcrumbs = array('Объявления, категория "'.$name.'"');
$this->panelTitle = 'Объявления: ';
Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/assets/plugins/jMosaic/jquery.jMosaic.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/plugins/jMosaic/jquery.jMosaic.min.js');
			Yii::app()->clientScript->registerScript('jMosaic',"
				$(function(){
					$('.items').jMosaic({
						items_type: 'li',
						 min_row_height: 250,
						
						});
				});"
			);
?>

<div id="advert-header"><h2>Раздел: "<?php echo $name; ?>"</h2></div>

<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemsTagName'=>'ul', 
			'itemView'=>'_view',
			'sortableAttributes'=>array(
				'price',
				'date',
			),
		)); 
?>

	

