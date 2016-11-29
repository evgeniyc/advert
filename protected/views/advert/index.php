<?php
/* @var $this AdvertController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Объявления';
$this->breadcrumbs = array('Объявления, категория "'.$name.'"');
$this->panelTitle = 'Объявления: ';
?>

<div id="advert-header"><h2>Раздел: "<?php echo $name; ?>"</h2></div>
<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			'sortableAttributes'=>array(
				'price',
				'date',
			),
		)); 
?>

	

