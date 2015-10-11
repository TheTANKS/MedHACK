<?php

	$servername = "localhost";
	$db_username = "the";
	$db_password = "1234";
	$db_name = "tanks";

	ob_start();
	session_start();

	if (isset($_POST['username']) && isset($_POST['password']))
	{
		$user_name = $_POST['username'];
		$user_password = $_POST['password'];
	
		$conn = mysql_connect($servername, $db_username, $db_password);
		if (!mysql_select_db('tanks', $conn)) {
    		echo 'Could not select database';
    		exit;
		}
	
		$sql = 'SELECT user_name, user_password FROM staff WHERE user_name=' . '"'. $user_name .'"';
	
		$result = mysql_query($sql, $conn);
		if(mysql_num_rows($result) ==1)
		{
			$row = mysql_fetch_row($result);
			if(md5($user_password)==$row[1])
			{
		 		//echo "OK";
		 		$_SESSION['username'] = $user_name;
		 		header('Location: index.php');
			}else{
				//echo "Ne e OK";
			}
		}
	

  		mysql_free_result($result);
   	}

	function logged_in(){
		if(!isset($_SESSION)){
			return false;
		} else if(isset($_SESSION['username'])){
			return true;
		} else {
			return false;
		}
	}

?>