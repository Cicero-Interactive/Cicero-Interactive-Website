<?php
	session_start();
	$page = "{{ page.title }}";
	$active = "";
?>

<!DOCTYPE html>
<html lang="{{ site.lang }}">
<html>
	<head>
		<title>
			{% if page.title == "Cicero Interactive" %}
				{{ page.title }}
			{% else %}
				{{ page.title }} | Cicero Interactive
			{% endif %}
		</title>
		<link rel="stylesheet" href="{{ site.baseurl_root }}/assets/css/stylesheet.css">
		<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
		<link rel="icon" href="{{ site.baseurl_root }}/assets/img/favicon.ico">
		<script src="{{ site.baseurl_root }}/assets/js/jquery.js"></script>
		<script src="{{ site.baseurl_root }}/assets/js/progress.js"></script>
		<script src="{{ site.baseurl_root }}/assets/js/sidepnl.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=0.70">
		<meta name="theme-color" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta charset="utf-8">
	</head>

	<body>
		<header>
			{% include nav.php %}
		</header>
		{{ content }}
		<footer>
			{% include footerTop.php %}
			{% include footerBottom.php %}
		</footer>
	</body>
</html>