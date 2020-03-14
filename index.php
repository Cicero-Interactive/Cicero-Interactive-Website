<?php
	session_start();
	$page = "./";
	$active = "";
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>Cicero Interactive</title>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/stylesheet.css">
		<!--<link rel="stylesheet" href="css/progress.css">-->
		<link rel="icon" type="image/png" href="images/favicon.ico">
		<!-- <script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/progress.js"></script> -->
		<script src="js/sidepnl.js"></script>
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
					<!--<div class="linear-progress" id="Progressbar">
						<div class="progBar bar1"></div>
   						<div class="progBar bar2"></div>
					</div>-->

					<?php include('components/lvl1/nav.php'); ?>

					<div class="slideshow">
						<span class="mySlides w3-animate-left">
							<span style="background-image: url(images/01.png)"></span>
							<span></span>
							<span style="background-image: url(images/01.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/02.png)"></span>
							<span></span>
							<span style="background-image: url(images/02.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/03.png)"></span>
							<span></span>
							<span style="background-image: url(images/03.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/04.png)"></span>
							<span></span>
							<span style="background-image: url(images/04.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/05.png)"></span>
							<span></span>
							<span style="background-image: url(images/05.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/06.png)"></span>
							<span></span>
							<span style="background-image: url(images/06.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/07.png)"></span>
							<span></span>
							<span style="background-image: url(images/07.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/08.png)"></span>
							<span style="background-position: center bottom; top: unset; bottom: 5px"></span>
							<span style="background-image: url(images/08.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/09.png)"></span>
							<span></span>
							<span style="background-image: url(images/09.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/10.png)"></span>
							<span></span>
							<span style="background-image: url(images/10.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/11.png)"></span>
							<span></span>
							<span style="background-image: url(images/11.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/12.png)"></span>
							<span style="background-position: center bottom; top: unset; bottom: 5px"></span>
							<span style="background-image: url(images/12.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/13.png)"></span>
							<span style="background-position: center bottom; top: unset; bottom: 5px"></span>
							<span style="background-image: url(images/13.png)"></span>
						</span>
						<span class="mySlides w3-animate-right">
							<span style="background-image: url(images/14.png)"></span>
							<span></span>
							<span style="background-image: url(images/14.png)"></span>
						</span>
					</div>
					<script src = "js/slideshow.js"></script>
				</td>
			</tr>
			<tr>
				<td>
					<div class="ShowOnBigScreen">
						<div class="table main">
							<div class="row" style="height: 30px"></div>
							<div class="row">
								<div style="max-width: 1100px; margin: auto; display: flex">
									<div class="cell" style="width: 35%; padding: 0px 20px 0px 5%">
										<div style="max-width: 350px; float: right">
											<font size="6" color="#ddd">About us</font>
											<br>
											<div>
												Who is Cicero Interactive, you may ask? Well, we are the developing team known for our Romans vs. French games, founded by Julian Burner in 2015, when he first started with developing small useful windows tools.<br>
												One to two years later, as this was getting boring, he decided to start making games. Some of his friends - espacially one called Friedl - helped him a lot with inventing creative stories, and due to some "Romans against French" fights they had back in school, the ideas of Latin Wars and French Invaders were born.<br><br>
												Our first  project was a 2D space game inspired by '90s titles but with cutting-edge graphics and innovative features. Now, however, we're working on Latin Wars: Call of Rupert, a real-time strategy game and first part in a planned series of three games. <br><br>
												Through the stars, our dream is coming true, step by step.<br>
												New ideas, passion, tenacity and the desire to prove to everyone that anyone who has a dream can make it happen.
											</div>
											<br><br>
											<a class="button" href="about.php">Read More</a>
										</div>
									</div>
									<div class="cell" style="width: 65%; padding: 0px 5% 0px 20px">
										<div class="news" style="max-width: 750px">
											<font size="6" color="#ddd">News</font>
											<a href="news/20190424.php">
												<div style="border-top: none">
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
											<a href="news/20190203.php">
												<div>
													<div><div style="background-image: url(images/scrCIN.png)"></div></div>
													<div>
														<div>Cicero Interactive News v1.0.2 Released</div>
														<div>February 3, 2019</div>
													</div>
												</div>
											</a>
											<br><br>
											<a class="button" href="news.php">View All News</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row" style="height: 50px"></div>
						</div>
					</div>
					<div class="ShowOnSmallScreen">
						<div class="table main">
							<div class="row" style="height: 30px"></div>
							<div class="row">
								<div class="cell" style="padding: 0px 5% 0px 5%">
									<font size="6" color="#ddd">About us</font>
									<br>
									<div>
										Who is Cicero Interactive, you may ask? Well, we are the developing team known for our Romans vs. French games, founded by Julian Burner in 2015, when he first started with developing small useful windows tools.<br>
										One to two years later, as this was getting boring, he decided to start making games. Some of his friends - espacially one called Friedl - helped him a lot with inventing creative stories, and due to some "Romans against French" fights they had back in school, the ideas of Latin Wars and French Invaders were born.<br><br>
										Our first  project was a 2D space game inspired by '90s titles but with cutting-edge graphics and innovative features. Now, however, we're working on Latin Wars: Call of Rupert, a real-time strategy game and first part in a planned series of three games. <br><br>
										Through the stars, our dream is coming true, step by step.<br>
										New ideas, passion, tenacity and the desire to prove to everyone that anyone who has a dream can make it happen.
									</div>
									<br><br>
									<a class="button" href="about.php">Read More</a>
								</div>
							</div>
							<div class="row" style="height: 50px"></div>
							<div class="row">
								<div class="cell" style="padding: 0px 5% 0px 5%">
									<div class="news" style="max-width: 750px">
										<font size="6" color="#ddd">News</font>
										<a>
											<div style="border-top: none">
												<div><div style="background-image: url(images/01.png)"></div></div>
												<div>
													<div>Our Website - Completely Redesigned!</div>
													<div>April 24, 2019</div>
												</div>
											</div>
										</a>
										<a>
											<div>
												<div><div style="background-image: url(images/news/LPResponsive.png)"></div></div>
												<div id="newsText">
													<div>New Responsive Design for the Lateinparadies</div>
													<div>April 14, 2019</div>
												</div>
											</div>
										</a>
										<a>
											<div>
												<div><div style="background-image: url(images/scrCIN.png)"></div></div>
												<div>
													<div>Cicero Interactive News v1.0.2 Released</div>
													<div>February 3, 2019</div>
												</div>
											</div>
										</a>
										<br>
										<a class="button" href="news.php">View All News</a>
									</div>
								</div>
							</div>
							<div class="row" style="height: 50px"></div>
						</div>
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