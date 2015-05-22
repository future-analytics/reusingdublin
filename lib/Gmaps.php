<?php
namespace ReusingDublin;
use ReusingDublin;

class Gmaps extends Controller{

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