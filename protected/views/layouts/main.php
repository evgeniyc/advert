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
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">
	<link rel="stylesheet" href="plugins/slicknav/slicknav.css" />
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
			<div id="header" class="row">
				<div id="logo" class="col-md-2 col-xs-2"><?php echo CHtml::image(Yii::app()->baseUrl.'/images/logo.png','Логотип'); ?></div>
				<div id="title"class="col-md-8 col-xs-10"><h1><?php echo CHtml::encode(Yii::app()->name); ?></h1></div>
				<div id="gerb" class="col-md-2"><?php echo CHtml::image(Yii::app()->baseUrl.'/images/vilniansk.gif','Герб',array('width'=>'70')); ?></div>
			</div>
		</header>
		<div id="main-menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Войти', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Контакты', 'url'=>array('/site/contact')),
				array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Главная', 'url'=>array('/site/index')),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
		<footer>Бесплатные объявления Вольнянска<br>&#169;Webmake 2016</footer>
	</div><!--container-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="plugins/slicknav/slicknav.js"></script>
	<script>
		$(function(){
			$('#main-menu').slicknav({
				label: '',
				duration: 300,
				prependTo:'section'
			});
		});
	</script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	
</body>
</html>