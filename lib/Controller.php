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
	 * Install scripts for reference only.
	 */
	public static function install()
	{
		$sql = "
			CREATE TABLE IF NOT EXISTS `_files` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`file` varchar(254) NOT NULL,
				`type` enum('photos','files') NOT NULL DEFAULT 'photos',
				`site_id` int(11) NOT NULL,
				PRIMARY KEY (`id`)
			)
		";
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

	public static function uniqueName($test)
	{
		$path = pathinfo($test);
		$count = 0;

		while(file_exists($test)){
			$test = "{$path['dirname']}/{$path['filename']}-{$count}.{$path['extension']}";
			$count++;
		}

		return $test;
	}

	/**
	 * Upload a files and write records to db.
	 * @param  array $data    An array of file data.
	 * @param  integer $site_id The site to link up with the uploaded file.
	 * @param  string $type    Default photos. (photos|files).
	 * @return array          Returns an array of results.
	 */
	public static function upload($data, $site_id, $type='photos')
	{

		$res = array();
		$db = Model::factory();

		foreach($data as $file){

			if($file['error']!=0)
				continue;

			$orig = $file['tmp_name'];
			$dest = self::uniqueName(REUSINGDUBLIN_UPLOADS . '/' . $type . '/' . $file['name']);
			if(!move_uploaded_file($orig, $dest)){
				$res[] = new Error('Unable to move uploaded file: '.$file['name']);
				continue;
			}

			//insert record into db
			$db->insert('file', array(
				'file' => $dest,
				'type' => $type,
				'site_id' => $site_id,
			));

			$res[] = pathinfo($dest);
		}

		return $res;
	}
}