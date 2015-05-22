<?php
/**
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */


/**
 * @constant
 */
define('REUSINGDUBLIN_DIR',		realpath(dirname(__FILE__)));
define('REUSINGDUBLIN_DEBUG',	1);
// end constants


/**
 * boostrap
 */
require_once('bootstrap.php');
// end bootstrap


/**
 * Routing
 */
$config = \ReusingDublin\Config::getInstance();
$query = (isset($_GET['q'])) ?
	$_GET['q'] :
	null;
$config->set('query', $query);
// end Routing


/**
 * Controller
 */
$controller = \ReusingDublin\Controller::factory($config->routes);


/**
 * Ajax.
 * If ajax request then controller should contain json string.
 * @see Config::setQuery() Where ajax routes are defined.
 */
if(defined('REUSINGDUBLIN_AJAX')){
	echo $controller->result;
	die();
}


/**
 * Print View
 */
\ReusingDublin\View::getView($controller);
// end Print View