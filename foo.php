<?php

$config = require_once 'config.php';
require_once 'lib/Config.php';
require_once 'lib/Model.php';
require_once 'lib/Error.php';

$config = new \ReusingDublin\Config($config);
$db = \ReusingDublin\Model::factory();

$config 	= new \ReusingDublin\Config($config);
$db 		= \ReusingDublin\Model::factory();
$results 	= $db->query("SELECT * FROM SiteOld");

foreach($results as $field=>$result){

	$row = array(
		'address1' 	=> $result['adress'],
		'lat'		=> $result['latitude'],
		'lng'		=> $result['longitude'],
		'info'		=> $result['desription'],
		'planning' 	=> $result['planningistory'],
		'ownership'		=> $result['owner'],
		'zoning' 	=> $result['zoning'],
		'size'		=> $result['size'],
		'heritage'	=> $result['heritage'],
		'derelict' 	=> $result['derelict'],
		'ip'		=> $result['ip']
	);

	var_dump($row);
	$db->insert('Site', $row);
}