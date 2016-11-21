<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	'Создать',
);

if(Yii::app()->user->checkAccess('admin'))
{
	$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
	);
}
else
{
	$this->menu = Category::createMenu();	
}


?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Регистрация пользователя:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>

