<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Error class file
 * @package ReusingDublin
 * @author daithi coombes <daithi.coombes@futureanalytics.ie>
 */

/**
 * Error class
 */
class Error{

	/** @var string The error message */
	protected $msg = '';

	/**
	 * Constructor
	 * @param string $msg The error message.
	 */
	function __construct($msg)
	{
		$this->msg = $msg;
	}

	/**
	 * Test if var is an Error object
	 * @param mixed $test The variable to test.
	 * @return boolean Default false.
	 */
	public static function isError($test)
	{
		if(is_object($test) && get_class($test)==__CLASS__)
			return true;

		return false;
	}

	/**
	 * Get error message if any.
	 * @return string Returns message or null if none.
	 */
	public function getMessage()
	{

		return $this->msg;
	}

}