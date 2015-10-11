<?php
	include 'template.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
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
				<p></p>
			</div>
			
		</div>
	</body>
</html>