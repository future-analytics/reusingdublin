<?php
/**
 * View head elements.
 *
 * @todo  move all head> elements to this file.
 * @author  daithi coombes <webeire@gmail.com>
 */
?>

        <link href="css/reusingdublin.css" type="text/css" rel="stylesheet" />
	    <script src="js/global.js" type="text/javascript"></script>
	</head>
	<body onLoad="initialize()" <?php if(isset($bodyBG)) echo 'style="background-color:'.$bodyBG.'"'; ?>>
