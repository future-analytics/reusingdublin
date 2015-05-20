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
 * Configuration
 */
new Config(require_once(REUSINGDUBLIN_DIR . '/config.php'));

$config = Config::getInstance();
$query = (isset($_GET['q'])) ?
	$_GET['q'] :
	null;
$config->set('query', $query);
// end Configuration


/**
 * boostrap
 */
require_once('bootstrap.php');
// end bootstrap


/**
 * Print View
 */
ReusingDublin\View::getView($config->routes[0]);
// end Print View