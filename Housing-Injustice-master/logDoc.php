
<?php
	include 'dbcon.php';
	ini_set('memory_limit', '256M');
	$username=(isset($_GET['uname']) ? $_GET['uname'] : 'hi');
	$pwd=(isset($_GET['psw']) ? $_GET['psw'] : 'yo');
	
	$db=mysqli_query($con, "SELECT Password FROM `users` Where Username = '$username'") or die(mysqli_error($con));
	if($db->num_rows){
		while($row = mysqli_fetch_array($db))
		{
			if($pwd == $row['Password']){
				exit(0);
			}
		}
		$error='Username or Password does not match!';
		echo json_encode($error);
		mysqli_free_result($db);
	}
	else{
		$error="Username or Password does not match!";
		echo json_encode($error);
	}
	$_GET['s']="";
	mysqli_close($con);
	
?>