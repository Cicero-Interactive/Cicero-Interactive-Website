<?php
	session_start();
	$active = "news";
	$page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>News | Cicero Interactive</title>
		<link rel="stylesheet" href="../css/w3.css">
		<link rel="stylesheet" href="../css/stylesheet.css">
		<link rel="icon" type="image/png" href="../images/favicon.ico">
		<script src="../js/sidepnl.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=0.70">
		<meta name="theme-color" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta charset="utf-8">
	</head>

	<body>
		<table style="width: 100%">
			<tr>
				<td>
					<?php include('../components/lvl2/nav.php'); ?>
					
					<div class="topImage">
						<div>
							<div style="background-image: url(../images/news/bgLP.png);"></div>
							<div style="background-image: url(../images/news/bgLP.png);"></div>
							<div><div class="ShowOnBigScreen" style="max-width: 1060px; margin: auto">Lateinparadies</div></div>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="main">
						<div style="height: 30px"></div>
						<div style="padding: 0px 5% 0px 5%">
							<div class="news" style="max-width: 1000px; margin: auto">
								<font size="6" color="#ddd">New Responsive Design for the Lateinparadies</font><br>
								<font size="2">April 14, 2019</font>
								<br><br>
								The Lateinparadies now has a responsive design. This means that we no longer need a separate mobile page, since the main page adapts dynamically to your screen width!
							</div>
						</div>
						<div style="height: 50px"></div>
					</div>

					<?php 
						include('../components/lvl2/footerTop.php');
						include('../components/lvl2/footerBottom.php');
					?>
				</td>
			</tr>
		</table>
	</body>
</html>