<?php
	require 'login_logout.php';
	function nav_not_logged(){
		echo '
			<li><a href="index.php" class="main_nav_element"><span class="a">Home</span></a></li>
			<li><a href="about.php" class="main_nav_element"><span class="a">About</span></a></li>
			<li><a href="faq.php" class="main_nav_element"><span class="a">FAQ</span></a></li>
			<li><a href="register.php" class="main_nav_element" id="nav_last"><span class="a">Register</span></a></li>
			<li><a href="login.php" class="main_nav_element" id="nav_last"><span class="a">Login</span></a></li>';
	}
	
	function nav_logged(){
		echo '
			<li><a href="index.php" class="main_nav_element"><span class="a">Home</span></a></li>
			<li><a href="about.php" class="main_nav_element"><span class="a">About</span></a></li>
			<li><a href="faq.php" class="main_nav_element"><span class="a">FAQ</span></a></li>
			<li><a href="patient_list.php" class="main_nav_element"><span class="a">Patient List</span></a></li>
			<li><a href="account.php" class="main_nav_element" id="nav_last" ><span class="a">Account</span></a></li>
			<li><a href="logout.php" class="main_nav_element" id="nav_last" ><span class="a">Logout</span></a></li>';
	}

	function nav_print(){
		if(logged_in())
		{
			nav_logged();
		} else {
			nav_not_logged();
		}

	}


?>