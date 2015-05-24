<?php

$config = require_once 'config.php';
require_once 'lib/Config.php';
require_once 'lib/Model.php';

$config 	= new \ReusingDublin\Config($config);
$db 		= \ReusingDublin\Model::factory();
$results 	= $db->query("SELECT * FROM SiteOld");

foreach($results as $field=>$result){

	$row = array(
		'address1' 	=> $result['adress'],
		'lat'		=> $result['lat'],
		'lng'		=> $result['lon'],
		'ip'		=> $result['ip'],
	);

	$db->insert('Site', $row);
}