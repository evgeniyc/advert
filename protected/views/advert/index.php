<?php
/* @var $this AdvertController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Create Advert', 'url'=>array('create')),
	array('label'=>'Manage Advert', 'url'=>array('admin')),
);
?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Объявления:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_advert',
			)); 
		?>

	</div>
</div>

