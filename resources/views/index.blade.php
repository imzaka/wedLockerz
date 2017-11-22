<!DOCTYPE html>
<html lang="en">
<head>
<title>WedLockerz | Wedding Management System</title>
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Planner Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!-- custom Theme files -->
<link href="{{ url('/') }}/public/assets/front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('/') }}/public/assets/front/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('/') }}/public/assets/front/css/chocolat.css" rel="stylesheet">
<!-- //custom Theme files -->
<!-- js -->
<script src="{{ url('/') }}/public/assets/front/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
<!-- //web-fonts --> 
<link rel="shortcut icon" href="{{ url('/') }}/public/favicon.ico" /> 
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-w3left">
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>  +92-000-1234567</p>
			</div>
			<div class="header-w3right">
				<ul>
					<li><a href="mailto:info@wedlockerz.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@wedlockerz.com</a></li>
					<li>|</li>
					<li><a class="scroll" href="{{ url('/') }}/login">Login</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<div class="agileits-logo">
				<h1><a href="{{ url('/') }}"><span>Wed</span>Lockerz</a></h1> 
			</div>
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hvr-bounce-to-bottom button"><a href="#about" class="scroll">About<span class="sr-only">(current)</span></a></li>
						<li class="hvr-bounce-to-bottom button"><a href="#gallery" class="scroll">Gallery</a></li>
						<li class="hvr-bounce-to-bottom button"><a href="#services" class="scroll">Services</a></li>				
						<li class="hvr-bounce-to-bottom button"><a href="#team" class="scroll">Team</a></li>
					</ul>
					<div class="social-icons">
						<ul>
							<li><a href="#" class="f1"></a></li>
							<li><a href="#" class="f2"></a></li>
							<li><a href="#" class="f3"></a></li>
							<li><a href="#" class="f4"></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<script src="js/responsiveslides.min.js"></script>
			<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider3").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
			});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-agileinfo">
							<h3>WELCOME</h3>
							<h4>Wedding planning & Wedding coordination</h4> 
						</div>
					</li>
					<li>
						<div class="banner-agileinfo">
							<h3>WELCOME</h3>
							<h4>Fallow new ideas for your wedding</h4>							
						</div>
					</li>
					<li>
						<div class="banner-agileinfo">
							<h3>WELCOME</h3>
							<h4>We help you plan your special day</h4>								
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div id="about" class="about">
		<div class="container">
			<h3 class="w3ls-tittle">About</h3>
			<h5>Nam libero tempore, cum soluta nobis est eligendi optio cumque 
				nihil impedit quo minus id quod maxime placeat facere possimus, 
				omnis voluptas assumenda est, omnis dolor repellendus. Temporibus 
				autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe. 
				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
				impedit quo minus id quod maxime placeat facere.</h5>
			<div class="about-grids">
				<div class="col-md-5 abt-left">
					<img src="{{ url('/') }}/public/assets/front/images/g1.jpg" alt="" />
				</div>
				<div class="col-md-7 abt-right">
					<h4>Temporibus autem quibusdam</h4>
					<p>Voluptas assumenda est, omnis dolor repellendus. 
						Temporibus autem quibusdam et aut officiis debitis aut 
						rerum necessitatibus saepe.Nam libero tempore, cum soluta nobis est eligendi optio cumque 
						nihil impedit quo minus id quod maxime placeat facere possimus, 
						omnis voluptas assumenda est, omnis dolor repellendus.</p>
					<p> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe  possimus, 
						omnis voluptas assumenda est, omnis dolor repellendus rerum necessitatibus saepe  possimus, 
						omnis voluptas assumenda est, omnis dolor repellendus</p>
				
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- services -->
	<div id="services" class="services">
		<div class="container">
			<h2 class="w3ls-tittle">Services</h2>
			<div class="services-grids w3layouts-grids">
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-check"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Best Quality</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-music"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Rocking Music</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-picture"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Amazing Themes</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-heart-empty"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Latest Collections</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- gallery -->
	<div id="gallery" class="gallery">
		<div class="container">
			<h3 class="w3ls-tittle">Gallery</h3>
			<div class="gallery-wthreegrids">
				<!-- EIGHTH EXAMPLE -->
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g1.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g1.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g2.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g2.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g3.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g3.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g4.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g4.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g5.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g5.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g6.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g6.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g7.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g7.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g8.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g8.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="{{ url('/') }}/public/assets/front/images/g2.jpg" title="Image Title"><img src="{{ url('/') }}/public/assets/front/images/g2.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<script src="js/jquery.chocolat.js"></script> 
			<!-- light-box-files -->
			<script type="text/javascript">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script> 
		</div>
	</div>
	<!-- //gallery -->
	<!-- team -->
	<div id="team" class="team">
		<div class="container">
			<h3 class="w3ls-tittle t-team">Our Team</h3>
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-1 agileits-w3layouts">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
									<h4>Victoria</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p> 
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-2 agileits-w3layouts">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
									<h4>William</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-3 agileits-w3layouts">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
									<h4>Thompson</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-4 agileits-w3layouts">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"></div>
								<div class="ch-info-back">
									<h4>John Doe</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //team -->
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="w3ls-tittle">Contact</h3>
			<div class="contact-bottom w3-agileits">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.39147015461!2d11.968411315519182!3d51.48768331996591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a66353e6e3b99d%3A0xd664817f7142f654!2sRadio+ Event Planner!5e0!3m2!1sen!2sin!4v1446724465130" ></iframe>
			</div> 
			<div class="col-md-7 contact-left">
				<h3>Contact Form</h3>
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="text" name="Email" placeholder="Email" required="">
					<input type="text" name="Telephone" placeholder="Telephone" required="">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-5 contact-left">
				<h3>Address</h3>
				<p> Event Planner </p>
				<ul>
					<li>Diamond street,</li>
					<li>260-14 City, Country</li>
					<li>+12 000-0000-00</li>
					<li>Phone : +2 333 444 555</li>
					<li>Mail : <a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left agileits-w3layouts">
				<p>&copy; 2017 Event Planner. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
			</div> 
			<div class="footer-right">
				<ul>
					<li><a href="#" class="f1"></a></li>
					<li><a href="#" class="f2"></a></li>
					<li><a href="#" class="f3"></a></li>
					<li><a href="#" class="f4"></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //footer --> 
	<script src="{{ url('/') }}/public/assets/front/js/smoothscroll.min.js"></script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="{{ url('/') }}/public/assets/front/js/move-top.js"></script>
	<script type="text/javascript" src="{{ url('/') }}/public/assets/front/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ url('/') }}/public/assets/front/js/bootstrap.js"></script>
</body>
</html>