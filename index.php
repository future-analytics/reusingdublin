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
 * Configuration
 */
new \ReusingDublin\Config(require_once(REUSINGDUBLIN_DIR . '/config.php'));

$config = \ReusingDublin\Config::getInstance();
$query = (isset($_GET['q'])) ?
	$_GET['q'] :
	null;
$config->set('query', $query);
// end Configuration


/**
 * Print View
 */
\ReusingDublin\View::getView();
// end Print View