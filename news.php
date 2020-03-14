<?php
	session_start();
	$active = "news";
	$page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>News | Cicero Interactive</title>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="icon" type="image/png" href="images/favicon.ico">
		<script src="js/sidepnl.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
					<?php include('components/lvl1/nav.php'); ?>
					
					<div class="topImage">
						<div>
							<div style="background-image: url(images/02.png)"></div>
							<div style="background-image: url(images/02.png)"></div>
							<div><div style="max-width: 1060px; margin: auto">All News</div></div>
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
								<font size="6" color="#ddd">2019<hr></font>
								<a href="news/20190527.php">
									<div style="border-top: none">
										<div><div style="background-image: url(images/news/LP.png)"></div></div>
										<div>
											<div>Added Carmina Burana Translation to the Lateinparadies</div>
											<div>May 27, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190424.php">
									<div>
										<div><div style="background-image: url(images/01.png)"></div></div>
										<div>
											<div>Our Website - Completely Redesigned!</div>
											<div>April 24, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190414.php">
									<div>
										<div><div style="background-image: url(images/news/LPResponsive.png)"></div></div>
										<div id="newsText">
											<div>New Responsive Design for the Lateinparadies</div>
											<div>April 14, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190318.html">
									<div>
										<div><div style="background-image: url(images/news/Suetonius.png)"></div></div>
										<div>
											<div>Added Suetonius: Divus Julius Translation to the Lateinparadies</div>
											<div>March 18, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190213.html">
									<div>
										<div><div style="background-image: url(images/news/LPMobile.png)"></div></div>
										<div>
											<div>Mobile Version for the Lateinparadies Finished</div>
											<div>February 13, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190211.html">
									<div>
										<div><div style="background-image: url(images/news/LP.png)"></div></div>
										<div>
											<div>Lateinparadies Design Unified</div>
											<div>February 11, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190203.html">
									<div>
										<div><div style="background-image: url(images/scrCIN.png)"></div></div>
										<div>
											<div>Cicero Interactive News v1.0.2 Released</div>
											<div>February 3, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190129.html">
									<div>
										<div><div style="background-image: url(images/news/HOF.png)"></div></div>
										<div>
											<div>Added Hall of Fame to the Lateinparadies</div>
											<div>January 29, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190116.html">
									<div>
										<div><div style="background-image: url(images/news/LP2000.png)"></div></div>
										<div>
											<div>2000 Clicks on the Lateinparadies</div>
											<div>January 16, 2019</div>
										</div>
									</div>
								</a>
								<a href="news/20190113.html">
									<div>
										<div><div style="background-image: url(images/scrCIN.png)"></div></div>
										<div>
											<div>Cicero Interactive News v1.0.1 Released</div>
											<div>January 13, 2019</div>
										</div>
									</div>
								</a>
								
								<font size="6" color="#ddd"><br>2018<hr></font>
								<a href="news/20181224.html">
									<div style="border-top: none">
										<div><div style="background-image: url(images/scrCIN.png)"></div></div>
										<div>
											<div>Cicero Interactive News Released</div>
											<div>December 24, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20181210.html">
									<div>
										<div><div style="background-image: url(images/CILogoIcon.png)"></div></div>
										<div>
											<div>Added Favicons to Our Homepage And to the Lateinparadies</div>
											<div>December 10, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20181208.html">
									<div>
										<div><div style="background-image: url(images/news/Caesar.png)"></div></div>
										<div>
											<div>Expanded Caesar: De Bello Gallico Translation on the Lateinparadies</div>
											<div>December 8, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20181203.html">
									<div>
										<div><div style="background-image: url(images/news/LP1000.png)"></div></div>
										<div id="newsText">
											<div>1000 Clicks on the Lateinparadies</div>
											<div>December 03, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180729.html">
									<div>
										<div><div style="background-image: url(images/scrCIUS.png)"></div></div>
										<div>
											<div>Cicero Interactive Update Service v1.0.1 Released</div>
											<div>July 29, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180728.html">
									<div>
										<div><div style="background-image: url(images/scrCIUS.png)"></div></div>
										<div>
											<div>Cicero Interactive Update Service Released</div>
											<div>July 28, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180717.html">
									<div>
										<div><div style="background-image: url(images/01.png)"></div></div>
										<div>
											<div>French Invaders Alpha 0.0.3.2 Demo for Insiders Uploaded</div>
											<div>July 17, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180714.html">
									<div>
										<div><div style="background-image: url(images/scrCKMT.png)"></div></div>
										<div>
											<div>Cicero Zufallsgenerator v1.1.0 And Cicero's kleiner Mathe-Trainer v1.2.0 Released</div>
											<div>July 14, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180708.html">
									<div>
										<div><div style="background-image: url(images/CILogoIcon.png)"></div></div>
										<div>
											<div>Updated All Setups</div>
											<div>July 8, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180701.html">
									<div>
										<div><div style="background-image: url(images/news/Caesar.png)"></div></div>
										<div>
											<div>Expanded Caesar: De Bello Gallico Translation on the Lateinparadies</div>
											<div>July 1, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180623.html">
									<div>
										<div><div style="background-image: url(images/news/Caesar.png)"></div></div>
										<div>
											<div>Added Caesar: De Bello Gallico Translation to the Lateinparadies</div>
											<div>June 23, 2018</div>
										</div>
									</div>
								</a>
								<a href="news/20180311.html">
									<div>
										<div><div style="background-image: url(images/news/Ovid.png)"></div></div>
										<div>
											<div>Added Ovid: Ars Amatoria Translation to the Lateinparadies</div>
											<div>March 11, 2018</div>
										</div>
									</div>
								</a>

								<font size="6" color="#ddd"><br>2017<hr></font>
								<a href="news/201701112.html">
									<div style="border-top: none">
										<div><div style="background-image: url(images/news/Nepos.png)"></div></div>
										<div>
											<div>Added Nepos: Hannibal Translation to the Lateinparadies</div>
											<div>November 12, 2017</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div style="height: 50px"></div>
					</div>

					<?php 
						include('components/lvl1/footerTop.php');
						include('components/lvl1/footerBottom.php');
					?>
				</td>
			</tr>
		</table>
	</body>
</html>