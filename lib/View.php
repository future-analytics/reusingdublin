<?php
namespace ReusingDublin;
use ReusingDublin;

class View{

	/**
	 * Prints a view file.
	 */
	public static function getView()
	{

		$config = Config::getInstance();

		$data = (object) array(
			'title' => ''
		);

		require_once(REUSINGDUBLIN_DIR . '/view/head.php');
		require_once(REUSINGDUBLIN_DIR . '/view/header.php');
		require_once(REUSINGDUBLIN_DIR . '/view/' . $config->routes[0] . '.php');
		require_once(REUSINGDUBLIN_DIR . '/view/footer.php');
	}
}