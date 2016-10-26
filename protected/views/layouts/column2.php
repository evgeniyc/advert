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
								<!-- 2. Add images to <div class="fotorama"></div>. -->
								<div id="vidget-img" class="fotorama"
									data-width="100%"
									data-autoplay="true"
									data-nav="false">
									<?php 	for($i=1; $i<11; $i++):
												echo CHtml::image(Yii::app()->baseUrl.'/images/uploads/'.rand(1,10).'.jpg', 'Изображение');
											endfor; 
									?>
								  <!--<img src="http://s.fotorama.io/1.jpg">
								  <img src="http://s.fotorama.io/2.jpg"> -->
								</div>
								<!-- 3. Enjoy! -->
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
<!-- fotorama.css & fotorama.js. -->
<?php 	Yii::app()->clientScript->registerCssFile('http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css');
		Yii::app()->clientScript->registerScriptFile('http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js'); ?>
