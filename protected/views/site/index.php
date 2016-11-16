<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Объявления:
			<form id="search" name="search"><input type="text" size=25><input type="submit" value="Поиск"></form>
		</h3>
	</div>
	<div class="panel-body">
		<?php 
			$j=0;
			for($i=0; $i<25; $i++): $j++;
				$this->renderPartial('advert',array('j'=>$j));
				if($j==10) 
				$j=0;
			endfor; 
		?>
	</div>
</div>
