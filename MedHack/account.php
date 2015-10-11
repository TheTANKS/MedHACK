<?php
	include 'template.php';
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
				<h1 class="main_header">Change account info</h1>
				<form id="form">
					<div class="form_line_wrapper">
						<input type="text" placeholder="New Email"/>
						<span class="popup_parent">
							<a class="form_tooltip" href="#">i</a>
							<div class="form_tooltip_popup">Enter valid email address.<br>Example: example@something.com</div>
						</span>
					</div>
					<div class="form_line_wrapper">
						<input type="text" placeholder="New Username"/>
						<span class="popup_parent">
							<a class="form_tooltip tooltip_hidden" href="#">i</a>
							<div class="form_tooltip_popup">Must contain only characters</div>
						</span>
					</div>
					<div class="form_line_wrapper">
						<input type="password" placeholder="Current Password"/>
						<span class="popup_parent">
							<a class="form_tooltip tooltip_hidden" href="#">i</a>
							<div class="form_tooltip_popup">Must be between 8 and 16 characters long.</div>
						</span>
					</div>
					<div class="form_line_wrapper">
						<input type="password" placeholder="New Password"/>
						<span class="popup_parent">
							<a class="form_tooltip" href="#">i</a>
							<div class="form_tooltip_popup">Must be between 8 and 16 characters long.</div>
						</span>
					</div>
					<button id="form_submit">Sumit</button>
				</form>	
			</div>
			
		</div>
	</body>
</html>