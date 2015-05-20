<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * Site index view file
 * @package  ReusingDublin
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

$config = Config::getInstance();
$site = Site::factory($_POST['data']);

$data = (object) array(
	'title' => $site->name,
);

require_once(REUSINGDUBLIN_DIR . '/view/head.php');
require_once(REUSINGDUBLIN_DIR . '/view/header.php');
?>
		<h1>The main site view file</h1>
<?php
require_once(REUSINGDUBLIN_DIR . '/view/footer.php');