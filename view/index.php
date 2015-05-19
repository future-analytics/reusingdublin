<?php
/**
 * Homepage view file
 * @package ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

$config = Config::getInstance();

$data = (object) array(
	'title' => 'Home',
);

require_once('head.php');
require_once('header.php');
	?>
	<h1>Index.php</h1>
	<?php
require_once('footer.php');