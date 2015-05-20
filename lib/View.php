<?php
namespace ReusingDublin;
use ReusingDublin;

class View{

	public static function getView($view)
	{
		require_once(REUSINGDUBLIN_DIR . '/view/' . $view . '.php');
	}
}