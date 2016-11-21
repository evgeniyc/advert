<?php
/* @var $this AdvertController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Объявления';
$this->breadcrumbs = array('Объявления, категория "'.$name.'"');
?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Объявления:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
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

	</div>
</div>

