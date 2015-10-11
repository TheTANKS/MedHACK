<?php
	include 'template.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="css/patient_list.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Page Title</title>
	</head>
	
	<body>
		<div id="site_wrapper">
			<div id="top_logo">
				Med<span id="top_logo_s">Hack</span>
			</div>
			<nav id="main_nav">
				<ul>
					<?php
						nav_print();
					?>
				</ul>
			</nav>
			
			<div id="main_content">
				<h1 class="main_header">List of registered patients</h1><div class="line_separator_small"></div>
				<ol>
					<!--<a href="#"><div class="i_row p_row"><li class="p_name">Lili Ivanova</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">Oreh Juladov</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">John Smith</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">Osum Asam</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">Nina Mitova</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">Vejdi Ihchev</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">Asen-Ivan Petrov</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">Hu Jass</li></div></a><div class="line_separator"></div>	
					<a href="#"><div class="i_row p_row"><li class="p_name">Simaon Jackobs</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">John Smith</li></div></a><div class="line_separator"></div>
					<a href="#"><div class="i_row p_row"><li class="p_name">John Cena</li></div></a><div class="line_separator"></div>-->
					<?php
						
					?>
				</ol>
			</div>
			
		</div>
	</body>
</html>