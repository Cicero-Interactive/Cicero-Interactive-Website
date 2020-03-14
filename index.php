---
layout:	wrapper
title:	Cicero Interactive
nav_absolute: true
---

{% assign page.galleries = site.data.galleries | process_galleries %}

<main>
	<div class="card card-slideshow">
		{% for gallery in site.data.galleries %}
			{% if gallery.name == "slideshow" %}
				{% for image in gallery.images %}
					<span class="mySlides 
						{% if image.direction == "ltr" %}
							w3-animate-left
						{% else %}
							w3-animate-right
						{% endif %}">
						<span style="background-image: url('{{ image.path }}');"></span>
						<span></span>
						<span style="background-image: url('{{ image.path }}');"></span>
					</span>
				{% endfor %}
			{% endif %}
		{% endfor %}
		<!-- <span class="mySlides w3-animate-left">
			<span style="background-image: url(assets/img/01.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/01.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/02.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/02.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/03.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/03.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/04.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/04.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/05.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/05.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/06.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/06.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/07.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/07.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/08.png)"></span>
			<span style="background-position: center bottom; top: unset; bottom: 5px"></span>
			<span style="background-image: url(assets/img/08.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/09.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/09.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/10.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/10.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/11.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/11.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/12.png)"></span>
			<span style="background-position: center bottom; top: unset; bottom: 5px"></span>
			<span style="background-image: url(assets/img/12.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/13.png)"></span>
			<span style="background-position: center bottom; top: unset; bottom: 5px"></span>
			<span style="background-image: url(assets/img/13.png)"></span>
		</span>
		<span class="mySlides w3-animate-right">
			<span style="background-image: url(assets/img/14.png)"></span>
			<span></span>
			<span style="background-image: url(assets/img/14.png)"></span>
		</span> -->
	</div>
	<script src="assets/js/slideshow.js"></script>
	<div class="card">
			<div class="showOnBigScreen">
				<div class="table main">
					<div class="tr" style="height: 30px"></div>
					<div class="tr">
						<div style="max-width: 1100px; margin: auto; display: flex">
							<div class="td" style="width: 35%; padding: 0px 20px 0px 5%">
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
							<div class="td" style="width: 65%; padding: 0px 5% 0px 20px">
								<div class="news" style="max-width: 750px">
									<font size="6" color="#ddd">News</font>
									<a href="news/20190424.php">
										<div style="border-top: none">
											<div><div style="background-image: url(assets/img/01.png)"></div></div>
											<div>
												<div>Our Website - Completely Redesigned!</div>
												<div>April 24, 2019</div>
											</div>
										</div>
									</a>
									<a href="news/20190414.php">
										<div>
											<div><div style="background-image: url(assets/img/news/LPResponsive.png)"></div></div>
											<div id="newsText">
												<div>New Responsive Design for the Lateinparadies</div>
												<div>April 14, 2019</div>
											</div>
										</div>
									</a>
									<a href="news/20190203.php">
										<div>
											<div><div style="background-image: url(assets/img/scrCIN.png)"></div></div>
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
					<div class="tr" style="height: 50px"></div>
				</div>
			</div>
			<div class="showOnSmallScreen">
				<div class="table main">
					<div class="tr" style="height: 30px"></div>
					<div class="tr">
						<div class="td" style="padding: 0px 5% 0px 5%">
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
					<div class="tr" style="height: 50px"></div>
					<div class="tr">
						<div class="td" style="padding: 0px 5% 0px 5%">
							<div class="news" style="max-width: 750px">
								<font size="6" color="#ddd">News</font>
								<a>
									<div style="border-top: none">
										<div><div style="background-image: url(assets/img/01.png)"></div></div>
										<div>
											<div>Our Website - Completely Redesigned!</div>
											<div>April 24, 2019</div>
										</div>
									</div>
								</a>
								<a>
									<div>
										<div><div style="background-image: url(assets/img/news/LPResponsive.png)"></div></div>
										<div id="newsText">
											<div>New Responsive Design for the Lateinparadies</div>
											<div>April 14, 2019</div>
										</div>
									</div>
								</a>
								<a>
									<div>
										<div><div style="background-image: url(assets/img/scrCIN.png)"></div></div>
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
					<div class="tr" style="height: 50px"></div>
				</div>
			</div>
	</div>
</main>