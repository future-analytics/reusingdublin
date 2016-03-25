<?php
/**
 * Configuration paramaters array.
 * @see Config::__construct()
 * @var array
 */
$config = array(
    'db' => array(
        'host' => '',
        'user' => '',
        'pass' => '',
        'name' => '',
    ),
    'admin' => array(
    	'name' => 'daithi coombes',
    	'email' => 'daithi.coombes@futureanalytics.ie',
    ),
    'api' => array(
        'column_blacklist' => array(
            'Site' => array('ip'),
            'File' => array('ip'),
            'Comment' => array('ip')
        )
    ) 
);

return $config;
