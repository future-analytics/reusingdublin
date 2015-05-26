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

		try{
			$pdo = new \PDO("mysql:host={$config['host']};dbname={$config['name']}", $config['user'], $config['pass']);
			$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			var_dump($e);
		}

		$obj = new Model();
		return $obj->setDb($pdo);
	}

	/**
	 * Insert row into the database
	 * @param  string $table The table name.
	 * @param  array  $row   An array of column=>value pairs.
	 * @return integer        Returns the last insert id.
	 */
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

		foreach($row as $field=>$value){
			${$field} = $value;
		}
		$stmt->execute();

		return $this->getDb()->lastInsertId();
	}

	/**
	 * Get the db instance.
	 * @return PDO
	 */
	public function getDb()
	{

		return $this->db;
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
	 * Update a row.
	 * @param  string $table The table name
	 * @param  array $data  An array of column=>value pairs
	 * @param  string $where The column to check against
	 */
	public function update($table, $data, $where)
	{

		$where_value = $data[$where];
		unset($data[$where]);

		$db = Model::factory();
		$sql = "UPDATE {$table} SET ";
		$sets = array();

		//build statement
		foreach($data as $key => $value){
			$sets[] = "{$key}=:{$key}";
		}
		$stmt = $this->db->prepare($sql . implode(", ", $sets));

		//bind values
		foreach($data as $field=>$value){
			$stmt->bindParam(":{$field}", $$field);
			${$field} = $value;
		}

		$stmt->execute();
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