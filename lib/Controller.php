<?php
namespace ReusingDublin;
use ReusingDublin;

/**
 * Main controller
 * @package ReusingDublin
 * @author daithi coombes <webeire@gmail.com>
 */
class Controller{

	public $action;
	public $class;
	public $data = array();
	public $result;

	/**
	 * Factory method.
	 * @param  array  $routes An array of routes paramaters returned from 
	 * Config::getRoutes()
	 * @return Controller         Returns a child class that extends this.
	 */
	public static function factory(array $routes)
	{

		$class 		= '\\ReusingDublin\\' . ucfirst($routes[0]);
		$action 	= self::parseAction($routes);
		$method		= 'action'.$action;

		if(class_exists($class)){

			$obj 			= new $class();
			$obj->action 	= $action;
			$obj->class 	= ucfirst($routes[0]);

			return $obj->$method();
		}
		else
			return new Error('Controller::factory(): '.$class.' not found');
	}

	/**
	 * Get the data property
	 * @param  string $dataType Default OBJECT. The dataType to return
	 * @return mixed
	 */
	public function getData($dataType = 'ARRAY')
	{

		if($dataType=='OBJECT')
			return (object) $this->data;

		return $this->data;
	}

	/**
	 * Get the action name from an array of routes.
	 * @param  array  $routes An array of routes @see Config::getRoutes()
	 * @return string         Returns the action.
	 */
	public static function parseAction(array $routes)
	{

		//get controller
		$controller = $routes[0];

		//get action
		$action = '';
		if(isset($routes[1]) && $routes[1]!=''){
			foreach(explode("-", $routes[1]) as $route)
				$action .= ucfirst($route);
		}
		return $action;
	}

	public static function parseUpload(array $files)
	{

		$ret = array();

		foreach($files['name'] as $index=>$name){
			$ret[$index] = array(
				'name' 		=> $name,
				'type' 		=> $files['type'][$index],
				'tmp_name' 	=> $files['tmp_name'][$index],
				'error' 	=> $files['error'][$index],
				'size' 		=> $files['size'][$index],
			);
		}

		return $ret;
	}
}