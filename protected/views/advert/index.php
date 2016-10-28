<?php
/* @var $this AdvertController */
/* @var $dataProvider CActiveDataProvider */

$this->menu = array(
		array('label'=>'Недвижимость', 'url'=>array('/site/index')),
		array('label'=>'Электроника', 'url'=>array('/site/index')),
		array('label'=>'Техника', 'url'=>array('/site/index')),
		array('label'=>'Общие объявления', 'url'=>array('/site/index')),
		array('label'=>'Организационные', 'url'=>array('/site/index')),
		array('label'=>'Реклама', 'url'=>array('/site/index')),
		array('label'=>'События', 'url'=>array('/site/index')),
		array('label'=>'Общая информация', 'url'=>array('/site/index')),
		array('label'=>'Галерея', 'url'=>array('/site/index')),
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
			'itemView'=>'_view',
			'sortableAttributes'=>array(
				'price',
				'date',
			),
			)); 
		?>

	</div>
</div>

