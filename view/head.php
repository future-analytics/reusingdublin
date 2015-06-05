<?php
/**
 * View head elements.
 *
 * @todo  move all head> elements to this file.
 * @author  daithi coombes <webeire@gmail.com>
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Reusing Dublin <?php if(isset($data) && isset($data->title)): ?>
		- <?php echo $data->title; endif;?></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" type="text/css"/>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="stylesheet" href="/assets/js/bootstrap-fileinput/css/fileinput.min.css" type="text/css"/>
		<link rel="stylesheet" href="/assets/css/reusingdublin.css" type="text/css"/>
	</head>
	<body class="<?php
		echo \ReusingDublin\Config::getInstance()->routes[0];
		if(isset($_GET['modal'])) echo ' view-modal';
		?>"
		data-spy="scroll"
		data-target="#mainNav">
