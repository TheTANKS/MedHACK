<?php
	$servername = "localhost";
	$db_username = "the";
	$db_password = "1234";
	$db_name = "tanks";

	$user_name = $_GET['username'];
	$user_password = $_GET['password'];
	

	
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
		 echo "OK";
		}
		else
		{
		 
			echo "Ne e OK";
		}
	}
	

  mysql_free_result($result);
?>