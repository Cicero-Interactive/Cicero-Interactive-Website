<?php
	session_start();
	$page = "{{ page.title }}";
	$active = "";
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>
			{% if page.title == "Cicero Interactive" %}
				{{ page.title }}
			{% else %}
				{{ page.title }} | Cicero Interactive
			{% endif %}
		</title>
		<link rel="stylesheet" href="assets/css/stylesheet.css">
		<link rel="icon" href="assets/img/favicon.ico">
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/progress.js"></script>
		<script src="assets/js/sidepnl.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=0.70">
		<meta name="theme-color" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta charset="utf-8">
	</head>

	<body>
		{% include nav.php %}
		{{ content }}
		{% include footerTop.php %}
		{% include footerBottom.php %}
	</body>
</html>