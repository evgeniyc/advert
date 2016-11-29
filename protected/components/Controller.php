<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	public $panelTitle;
	
	public function dayofweek()
	{
		$day='';
		switch(date('l'))
		{
			case 'Sunday': $day = 'Воскресенье';break;
			case 'Monday': $day = 'Понедельник';break;
			case 'Tuesday': $day = 'Вторник';break;
			case 'Wednesday': $day = 'Среда';break;
			case 'Thursday': $day = 'Четверг';break;
			case 'Friday': $day = 'Пятница';break;
			case 'Saturday': $day = 'Суббота';break;
		}
		return $day;
	}
}