<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * The Site controller
 * @todo Implement ORM
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */
class Site extends Controller{

	/**
	 * Install database tables.
	 * @uses \ReusingDublin\Model::query()
	 * @return mixed Returns true on success or Error on fail.
	 */
	public static function install()
	{

		$db = Model::factory();
		$sql = "CREATE TABLE Site (
			id int(11) NOT NULL AUTO_INCREMENT,
			address1 varchar(254) NOT NULL,
			address2 varchar(254) DEFAULT NULL,
			address3 varchar(254) DEFAULT NULL,
			lat decimal(10,8) NOT NULL,
			lng decimal(11,8) NOT NULL,
			PRIMARY KEY (id)
		) ENGINE=InnoDB
		";

		if(!$db->tableExists('Site'))
			$res = $db->query($sql);

		return $res;
	}

	/**
	 * Default action.
	 * Reroute default action to ::actionView()
	 * @return Site Returns this for chaining.
	 */
	public function action()
	{
		return $this->actionView();
	}

	public function actionConnect()
	{
		return $this;
	}

	/**
	 * To edit or update a site.
	 * @return Site Returns this for chaining.
	 */
	public function actionEdit()
	{
		return $this;
	}

	public function actionApiGetSites()
	{

		//vars
		$routes		= Config::getInstance()->routes;
		$db 		= Model::factory();
		$fields		= array_splice($routes, 2);
		$sites 		= array();

		//map title field to address1
		if(in_array('title', $fields)){
			$key = array_search('title', $fields);
			unset($fields[$key]);
			$fields[] = 'address1';
		}

		//query db
		(count($fields)) ?
			$fields = "`".implode("`,`", $fields)."`":
			$fields = "*";
		$query 		= "SELECT {$fields} FROM Site";
		$result 	= $db->query($query);

		//error report
		if(Error::isError($result)){
			$result = array(
				'error' => $result->getMessage(),
			);
		}

		//build & return results
		array_push($result, Api::factory()->hal);

		$this->result = json_encode($result);

		return $this;
	}

	public function actionLetUsKnow()
	{
		return $this;
	}

	public function actionShare()
	{
		return $this;
	}

	public function actionTellUsMore()
	{
		return $this;
	}

	public function actionView()
	{
		return $this;
	}
}