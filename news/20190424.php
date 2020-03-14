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
							<div style="background-image: url(../images/02.png)"></div>
							<div style="background-image: url(../images/02.png)"></div>
							<div><div class="ShowOnBigScreen" style="max-width: 1060px; margin: auto">Cicero Interactive</div></div>
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
								<font size="6" color="#ddd">Our Website - Completely Redesigned!</font><br>
								<font size="2">April 24, 2019</font>
								<br><br>
								To be honest, the previous design looked quite outdated and was hard to build new features on.
								So we decided to do a complete overhaul and build it up again from scratch - quite some work, but I think it really was worth it.
								With the use of php we can now enable you to create your own Cicero Interactive Accout, enabling the possibility to download upcoming alpha and beta versions,
								subscribe to our soon available newsletter and the ability to get C-Coins, a new currency which in the future can be earned across our platforms by suggesting useful features,
								reporting bugs and submitting translations to the Lateinparadies. They can be used as a sort of super-currency to buy other in-game currencies and special effects.
								<br><br>
								Although this isn't the final version and some features won't be available yet, we're working hard to get these features implemented.
								Until then, have fun testing the new features and feel free to check out our new social media accounts!
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