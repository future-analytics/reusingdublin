<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Class file for google maps logic.
 * @author daithi coombes <daithi.coombes@futureanalytics.ie>
 * @package ReusingDublin
 */

/**
 * Google maps class.
 */
class Gmaps extends Controller{

	/**
	 * Ajax method to return list of Sites from database.
	 * @return Gmaps Returns self for chaining.
	 */
	public function actionAjaxGetSites()
	{
		$this->result = json_encode(array(
			'foo' => array(
				'1,2,3',4
				),
			'bar' => 'baz',
		));

		return $this;
	}
}