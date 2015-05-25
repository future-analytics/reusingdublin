<?php

$config = require_once 'config.php';
require_once 'lib/Config.php';
require_once 'lib/Model.php';
require_once 'lib/Error.php';

$config = new \ReusingDublin\Config($config);
$db = \ReusingDublin\Model::factory();

$sql = "CREATE TABLE IF NOT EXISTS `_files` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`file` varchar(254) NOT NULL,
	`type` enum('photos','files') NOT NULL DEFAULT 'photos',
	`site_id` int(11) NOT NULL,
	PRIMARY KEY (`id`))
";

$db->query($sql);

/**
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
*/