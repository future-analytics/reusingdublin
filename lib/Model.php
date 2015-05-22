<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * MySql database class file.
 * @package ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

/**
 * Databse class.
 * @todo have as singleton (means not extending PDO, but instead referencing it internally?).
 */
class Model extends \PDO{

	/**
	 * Factory method.
	 * Tries to return instance of db in global space, if exists
	 * @return Model
	 */
	public static function factory()
	{

		global $db;

		if(isset($db) && is_object($db) && get_class($db)==__CLASS__)
			return $db;

		$config = Config::getInstance()->get('db');

		return new Model("mysql:host={$config['host']};dbname={$config['name']}", $config['user'], $config['pass']);
	}

	public function query($qry)
	{

		try{
			$res = parent::query($qry);
		}catch(\PDOException $e){
			throw $e;
		}

		return $res;
	}
}