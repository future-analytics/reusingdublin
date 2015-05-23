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
class Model{

	/** @var PDO The PDO object */
	protected $db;

	/**
	 * Factory method.
	 * Tries to return instance of db in global space, if exists
	 * @return \PDO Returns a singleton PDO instance ($db).
	 */
	public static function factory()
	{

		global $db;

		if(isset($db) && is_object($db) && get_class($db)==__CLASS__)
			return $db;

		$config = Config::getInstance()->get('db');

		$pdo = new \PDO("mysql:host={$config['host']};dbname={$config['name']}", $config['user'], $config['pass']);
		$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		$obj = new Model();
		return $obj->setDb($pdo);
	}

	/**
	 * Set the database object.
	 * @param PDO $db The database object.
	 * @return Model Returns this for chaining.
	 */
	public function setDb(\PDO $db)
	{

		$this->db = $db;
		return $this;
	}

	public function query($qry)
	{

		try{
			$res = $this->db->query($qry);
		}catch(\PDOException $e){
			return new Error($e->getMessage());
		}

		while($row = $result->fetch()){
			$results[] = $row;
		}

		return $results;
	}
}