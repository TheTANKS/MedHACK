<?php
	require 'template.php';	
	
	session_destroy();
	header('Location: index.php');
?>