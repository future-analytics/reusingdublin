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

		$obj 			= new $class();
		$obj->action 	= $action;
		$obj->class 	= ucfirst($routes[0]);

		return $obj->$method();
	}

	/**
	 * Get the data property
	 * @param  string $dataType Default OBJECT. The dataType to return
	 * @return mixed
	 */
	public function getData($dataType = 'OBJECT')
	{

		if($dataType=='OBJECT')
			return $this->data;

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
}