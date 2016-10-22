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
								<a href="#">
									<div class="advert">
										<div class="advert_head">Продам дом в Вольнянске</div>
										<div class="advert_body">
											<div class="advert_image"><?php echo CHtml::image(Yii::app()->baseUrl.'/images/houses/3.jpg','Изображение дом',array('width'=>'100%','height'=>'100%')); ?></div>
										</div>
										<div class="advert_footer">
										<div class="advert-price">Цена: $20000</div>
										<div class="advert-date">29.02.2016</div>
										</div>
									</div>
								</a>
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