<?php
namespace ReusingDublin;
use ReusingDublin;

class View{

	/**
	 * Prints a view file.
	 */
	public static function getView(Controller $controller)
	{
		global $data;

		$config = Config::getInstance();
		$data 	= $controller->getData();
		$action = $controller->action;
		$class 	= $controller->class;

		$head = true;
		$header = true;
		$footer = true;


		if(defined('REUSINGDUBLIN_API')){
			$head = false;
			$header = false;
			$footer = false;
		}
		elseif(isset($_GET['modal'])){
			$head = true;
			$header = false;
			$footer = true;
		}


		if($head)
			require_once(REUSINGDUBLIN_DIR . '/view/head.php');
		if($header)
			require_once(REUSINGDUBLIN_DIR . '/view/header.php');
		require_once(REUSINGDUBLIN_DIR . '/view/' . lcfirst($class) . $action . '.php');
		if($footer)
			require_once(REUSINGDUBLIN_DIR . '/view/footer.php');
	}
}
