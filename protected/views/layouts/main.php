<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
	<?php 	Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/styles.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/form.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/print.css','print');
			Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/assets/plugins/slicknav/slicknav.css');
	?>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
<body>
	<div id="body" class="container">
		<header>
			<div id="images" class="row">
				<div id="logo" class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
					<div id="logo-left"><?php echo CHtml::image(Yii::app()->baseUrl.'/images/logo.png','Логотип',array('width'=>'100%','class'=>'pull-left')); ?></div>
				</div>
				<div id="middle-part" class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
					<div class="row">
						<?php 	$numbers = range(1,10);
								shuffle($numbers);
								for($i=0; $i < 6; $i++): ?>
							<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
								<?php echo CHtml::image(Yii::app()->baseUrl.'/images/volniansk/'.$numbers[$i].'.jpg','Фото Вольнянск',array('width'=>'100%')); ?>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
								<?php echo CHtml::image(Yii::app()->baseUrl.'/images/volniansk/'.$numbers[++$i].'.jpg','Фото Вольнянск',array('width'=>'100%')); ?>
							</div>
							<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
								<?php echo CHtml::image(Yii::app()->baseUrl.'/images/volniansk/'.$numbers[++$i].'.jpg','Фото Вольнянск',array('width'=>'100%')); ?>
							</div>
						<?php endfor; ?>
					</div>
				</div>
				<div id="gerb" class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
					<?php echo CHtml::image(Yii::app()->baseUrl.'/images/vgerb.jpg','Герб',array('width'=>'100%','class'=>'pull-right')); ?>
				</div>
			</div>
			<?php if(Yii::app()->user->hasFlash('welcome')): ?>
				<div id="welcome" class="pull-right"><?php echo Yii::app()->user->getFlash('welcome'); ?></div>
			<?php endif; ?>
			<div id="title">
					<?php //echo CHtml::image(Yii::app()->baseUrl.'/images/back-advert3.png','Фото Вольнянск'); ?>
					<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
			</div>
		</header>
		<div id="main-menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Мой кабинет <span class="caret"></span>', 'encodeLabel'=>false, 'itemOptions'=>array('class'=>'drops'), 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
					array('label'=>'Добавить объявление', 'url'=>array('advert/create')),
					array('label'=>'Посетить', 'url'=>array('advert/admin')),
				)),
				array('label'=>'Регистрация', 'url'=>array('/user/create'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Войти', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Контакты', 'url'=>array('/site/contact')),
				array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Главная', 'url'=>array('site/index')),
			),
		)); ?>
	</div><!-- mainmenu -->
	<div id="date">Сегодня: <?php echo date('d.m.Y, '); echo $this->dayofweek(); ?></div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>
		<footer>Бесплатные объявления Вольнянска<br>&#169;<?php echo CHtml::link('The_Webmake 2016','http://webmake.hol.es',array('style'=>'color:blue')); ?></footer>
	</div><!--container-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php 	Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/plugins/slicknav/slicknav.js');
			Yii::app()->clientScript->registerScript('slicknav',"
				$(function(){
					$('#main-menu').slicknav({
						label: '',
						duration: 300,
						prependTo:'#date'
					});
				});"
			);
			Yii::app()->clientScript->registerScript('drops',"
				var timeout;
				$('.drops').hover(
					function(){
						timeout = setTimeout(function(){
							$('.drops ul').slideDown('slow');},
						100);
					},
					function(){
						$('.drops ul').slideUp('slow');
						clearTimeout(timeout);
					}
				);
					
			");
			
	?>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
</body>
</html>