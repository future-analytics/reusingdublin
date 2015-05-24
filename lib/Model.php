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

	public function insert($table, array $row)
	{

		$fields = array_keys($row);

		//set query fields
		$qry = "INSERT INTO {$table} (`"
			. implode("`,`", array_keys($row))
			. "`) VALUES ";

		//set query bind placeholders
		foreach($row as $field=>$value)
			$qry_values[] = ":{$field}";
		$stmt = $this->db->prepare($qry . "(".implode(", ", $qry_values).")");

		//bind values
		foreach($row as $field=>$value)
			$stmt->bindParam(":{$field}", $$field);

		var_dump($row);
		foreach($row as $field=>$value){
			${$field} = $value;
		}
		$stmt->execute();
		var_dump($stmt);
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

	/**
	 * Check if db table exists.
	 * @param string $table The table name.
	 * @return boolean Default false.
	 */
	public function tableExists($table)
	{
		
		$test = $this->query("SELECT 1 FROM {$table}");

		if(!Error::isError($test))
			return true;
		else
			return false;
	}

	/**
	 * Query the database WITHOUT preparing statements.
	 * @param string $qry The raw mysql query.
	 * @return array Returns an array of row objects or Error.
	 */
	public function query($qry, $return=\PDO::FETCH_ASSOC)
	{

		try{
			$res = $this->db->query($qry);
		}catch(\PDOException $e){
			return new Error($e->getMessage());
		}

		$results = array();
		while($row = $res->fetch(\PDO::FETCH_ASSOC)){
			$results[] = $row;
		}

		return $results;
	}
}