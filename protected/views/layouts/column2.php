<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="clearfix"></div>
		<section>
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
								</ul>
							</div>
						</div>
						<div id="popular" class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Самые свежие:</h3>
							</div>
							<div class="panel-body">
								<?php require 'carousel.php' ?>
							</div>
						</div>
					</aside>
				</div>
				<div class="col-sm-9 col-xs-12">
					<article>
						<div id="content">
							<?php echo $content; ?>
						</div><!-- content -->
					</article>
				</div>
			</div>	
		</section>
		<div class="clearfix"></div>
<?php $this->endContent(); ?>