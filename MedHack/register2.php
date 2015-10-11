<?php
	$servername = "localhost";
	$db_username = "the";
	$db_password = "1234";
	$db_name = "tanks";

	$user_email = $_GET['email'];
	$user_name = $_GET['username'];
	$user_password = $_GET['password'];
	
	if (!filter_var($user_email, FILTER_VALIDATE_EMAIL) === false && strlen($user_password) >= 8 && strlen($user_password) <= 16) {
		echo ("$user_email & $user_password is valid email address");
			
			$conn = mysql_connect($servername, $db_username, $db_password);
			if (!mysql_select_db('tanks', $conn)) {
				echo 'Could not select database';
				exit;
			}
			$sql = 'INSERT INTO staff (user_name, user_password, user_email) VALUES ("'. $user_name.'", "' . md5($user_password) . '", "'. $user_email .'")';
			mysql_query($sql);
	}
	
	else 
	{
		echo ("$user_email & $user_password is not valid email address");
	}
	
	
	
	
	
	
	
	
	
	
	
?>