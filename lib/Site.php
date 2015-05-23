<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * The Site controller
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */
class Site extends Controller{

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