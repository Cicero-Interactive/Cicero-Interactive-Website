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