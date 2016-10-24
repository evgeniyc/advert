<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <?php echo CHtml::image(Yii::app()->baseUrl.'/images/houses/1.jpg','Дом1'); ?>
      <div class="carousel-caption">
        Заголовок первого слайда
      </div>
    </div>
    <div class="item">
      <?php echo CHtml::image(Yii::app()->baseUrl.'/images/houses/2.jpg','Дом2'); ?>
      <div class="carousel-caption">
        Заголовок второго слайда
      </div>
    </div>
	<div class="item">
      <?php echo CHtml::image(Yii::app()->baseUrl.'/images/houses/3.jpg','Дом3'); ?>
      <div class="carousel-caption">
        Заголовок третьего слайда
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>