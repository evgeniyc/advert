<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="clearfix"></div>
		<section>
			<article>
				<div id="content">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								<?php echo $this->panelTitle; ?>
								<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
							</h3>
						</div>
						<div class="panel-body">
							<?php echo $content; ?>
						</div>
					</div>
				</div><!-- content -->
			</article>
		</section>
		<div class="clearfix"></div>
<?php $this->endContent(); ?>

