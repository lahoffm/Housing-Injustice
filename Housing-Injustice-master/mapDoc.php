
<?php
	
	ini_set('memory_limit', '256M');
	$search=(isset($_POST['s']) ? $_POST['s'] : 'hi');
	
	$error="$search: The address you typed was not found. Please try again!";
	echo $error;
	$_POST['s']="";
	//mysqli_close($con);
	
?>
