
<?php
	
	ini_set('memory_limit', '256M');
	$search=(isset($_GET['s']) ? $_GET['s'] : 'hi');
	
	$error="$search: The address you typed was not found. Please try again!";
	echo $error;
	$_GET['s']="";
	
?>
