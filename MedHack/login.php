<?php
	require 'template.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="css/forms.css">
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
				<h1 class="main_header">Login</h1>
				<form id="form" action="login.php" method="POST">
					<div class="form_line_wrapper">
						<input type="text" placeholder="Username" name="username"/>
						<span class="popup_parent">
							<a class="form_tooltip tooltip_hidden" href="#">i</a>
							<div class="form_tooltip_popup"></div>
						</span>
					</div>
					<div class="form_line_wrapper">
						<input type="password" placeholder="Password" name="password"/>
						<span class="popup_parent">
							<a class="form_tooltip tooltip_hidden" href="#">i</a>
							<div class="form_tooltip_popup"></div>
						</span>
					</div>
					<input id="form_submit" type="submit">Login</button>
				</form>	
			</div>
			
		</div>
	</body>
</html>