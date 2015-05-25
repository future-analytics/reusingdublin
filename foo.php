<?php

$config = require_once 'config.php';
require_once 'lib/Config.php';
require_once 'lib/Model.php';
require_once 'lib/Error.php';

$config 	= new \ReusingDublin\Config($config);
$db 		= \ReusingDublin\Model::factory();
$results 	= $db->query("SELECT * FROM SiteOld");

foreach($results as $field=>$result){

	$row = array(
		'address1' 	=> $result['adress'],
		'lat'		=> $result['latitude'],
		'lng'		=> $result['longitude'],
	);

	var_dump($row);
	$db->insert('Site', $row);
}