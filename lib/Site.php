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

	public function actionAjaxGetSites()
	{

		$db 		= Model::factory();
		$sites 		= array();
		$query 		= "SELECT * FROM Site";
		$result 	= $db->query($query);
		
		while($row = $result->fetch()){
			$sites[] = $row;
		}

		$this->result = json_encode($sites);

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