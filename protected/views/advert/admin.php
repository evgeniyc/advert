<?php
/* @var $this AdvertController */
/* @var $model Advert */

$this->breadcrumbs=array(
	'Объявления'=>array('index'),
	'Мой кабинет',
);
$value = 0;
$this->menu=array(
	array('label'=>'Создать объявление', 'url'=>array('advert/create')),
	array('label'=>'Добавить изобажения', 'url'=>array('index')),
	array('label'=>'Управление пользователями', 'url'=>array('user/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#advert-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Мой кабинет (пользователь - <?php echo Yii::app()->user->name; ?>):
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'advert-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id:text:ID',
				'title',
				'content',
				array(
					'name'=>'photo',
					'type'=>'html',
					'value'=>'CHtml::image(Yii::app()->baseUrl."/images/uploads/$data->id.jpg","Изображение",array("style"=>"width:150px"))',
				),
				'date',
				'price',
				/*
				'category',
				*/
				array(
					'class'=>'CButtonColumn',
					'buttons'=>array(
						'create' => array(
							'label'=>'Добавить изображения',     // text label of the button
							'url'=>'Yii::app()->createUrl("/images/create", array("id" => $data->id))', // a PHP expression for generating the URL of the button
							'imageUrl'=>Yii::app()->baseUrl.'/images/j.jpg',  // image URL of the button. If not set or false, a text link is used
						),
					),
					'template'=>'{view}{update}<br>{delete}{create}',
				),
			),
		)); ?>
	</div>
</div>

