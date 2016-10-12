<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="plugins/slicknav/slicknav.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	</head>
<body>
	<div id="body" class="container">
		<header>
			<div id="header" class="row">
				<div id="logo" class="col-md-2"><img src="img/logo.png" alt="logotip"></div>
				<div id="title"class="col-md-8"><h1>Сайт бесплатных объявлений г.Вольнянск</h1></div>
				<div class="col-md-2"></div>
			</div>
		</header>
		<nav>
			<ul id="main-menu">
				<li><a href="#">+ Добавить объявление</a></li>
				<li><a href="#">О нас</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="#">Главная</a></li>
			</ul>
		</nav>
		<div class="clearfix"></div>
		<section>
			<div id="breadcrumbs">Главная>>Недвижимость>>Частный сектор</div>
			<div class="row">
				<div class="col-sm-3 col-xs-12">
					<aside>
						<div id="menu" class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Разделы:</h3>
							</div>
							<div class="panel-body">
								<ul id="side-menu">
									<li><a href="#">Недвижимость</a></li>
									<li><a href="#">Электроника</a></li>
									<li><a href="#">Техника</a></li>
									<li><a href="#">Общие объявления</a></li> 
									<li><a href="#">Организационные</a></li>
									<li><a href="#">Реклама</a></li> 
									<li><a href="#">События</a></li>
									<li><a href="#">Общая информация</a></li>
									<li><a href="#">Галерея</a></li> 
									<li><a href="#">Nam ut magna quis tortor lacinia efficitur</a></li>
									<li><a href="#">Nam at fringilla nunc, et gravida augue</a></li> 
									<li><a href="#">Aenean blandit vel quam non vulputate</a></li> 
								</ul>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-sm-9 col-xs-12">
					<article>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">
									Содержание:
									<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
								</h3>
							</div>
							<div class="panel-body">
								<div id="sort">Сортировка по: | цене | названию | дате</div>
								<?php 
								$j=0;
								for($i=0; $i<25; $i++): $j++;?>
									<a href="#">
										<div class="advert">
											<div class="advert_head">Продам дом в Вольнянске</div>
											<div class="advert_body"><img src="img/houses/<?php echo $j.'.jpg'; ?>" width="100%" height="100%"></div>
											<div class="advert_footer">
											<div class="advert-price">Цена: $20000</div>
											</div>
										</div>
									</a>
								<?php if($j==10) 
										$j=0;
								endfor; ?>
							</div>
						</div>
					</article>
				</div>
			</div>	
		</section>
		<div class="clearfix"></div>
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
//==========================================================================================================================================
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
