<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Class file for handling API requests
 * @package ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

class Api{

	public $hal = array(
		'_links' => array(
			'self' => array(),
			'curies' => array() // array of documentation resource for links.
		),
	);

	public static function factory()
	{
		return new Api();
	}
}