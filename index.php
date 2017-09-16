<?php  session_start(); ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Intelligent Expert Advisors | Best Forex Robots For Automated Trading in 2017 for MT4 | Intelligent Scalper EA - Chart Scanner EA - Advanced Hedging EA - Pips Hunter EA</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/animate.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/ap-scroll-top.css" type="text/css" media="all" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.php">INTELLIGENT EA</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="see-trades.php">See Trades</a></li>
					<li><a href="learn-more.php">Learn More</a></li>
                    <li><a href="buy-now.php">Buy Now</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                    <?php if(isset($_SESSION['sessData']['userLoggedIn']) && $_SESSION['sessData']['userID'] != "") { ?>
					     <li><a href="logout.php">Logout</a></li>
                                        <?php } else {?>
                                           <li><a href="login.php">Login</a></li>
                                        <?php }?>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<h2 class="wow animated fadeIn" data-wow-duration="3s" data-wow-delay="1s">The Best Forex Robots in 2017 for MT4</h2>
				<p class="wow animated fadeIn" data-wow-duration="3s" data-wow-delay="2s">Fully automated and ready to trade for you night and day</p>
				<ul class="actions">
					<li><a href="learn-more.php" class="button big special">Learn More</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/IS_EA_dr1.jpg" alt="" /></span>
						<div class="content">
							<h2>Intelligent Scalper EA</h2>
							<p>Intelligent Scalpler Expert Advisor is powerful and highly profitable forex robot build for MetaTrader 4 platform that trades completely on autopilot 24/7 without any human intervention whatsoever.</p>
							<ul class="actions">
								<li>
									<a href="learn-more.php" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/IS_EA_dr2.jpg" alt="" /></span>
						<div class="content">
							<h2>Chart Scanner EA</h2>
							<p>This intelligent Expert Advisor Scans many times frames at once to detect huge pip movements early Automatic SL and TP levels are set using an intelligent distance algorithm.</p>
							<ul class="actions">
								<li>
									<a href="learn-more.php" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
                    <article class="feature left">
						<span class="image"><img src="images/IS_EA_dr3.jpg" alt="" /></span>
						<div class="content">
							<h2>Advanced Hedging EA</h2>
							<p>The Advanced Hedging EA makes investments to reduce the risk of adverse price movements in an asset. It makes more profitable pips from the price when it moves in either direction.</p>
							<ul class="actions">
								<li>
									<a href="learn-more.php" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/IS_EA_dr4.jpg" alt="" /></span>
						<div class="content">
							<h2>Pips Hunter EA</h2>
							<p>By waiting for the price to breakout, Pips Hunter EA robot finds explosive trades. It's an intelligent EA that works using the principle "buy cheap, sell high".</p>
							<ul class="actions">
								<li>
									<a href="learn-more.php" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get all our Expert Advisors! The price is discounted -30%!</h2>
						<p>Our Expert Advisors are powerful and highly profitable forex robots build for MetaTrader 4 platform that trade completely on autopilot 24/5.</p>
					</header>
					<div class="image">
						<a href="buy-now.php" class="image"><img src="images/IS_EA_4boxes.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="buy-now.php" class="button big alt">DOWNLOAD</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>test 1</h2>
						<p>test 2</p>
					</header>
					<ul class="actions">
						<li><a href="http://intelligentea.com/buy-now.php" class="button big alt">BUY NOW</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Contact Us</h2>
						<p>Please feel free to get in touch via the form below about any inquires that you might have, and we will get back to you as soon as possible.</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a target="_blank" href="https://www.facebook.com/intelligentea/" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-youtube">
							<span class="label">Youtube</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Intelligent EA. All Rights Reserved.</li>
                        <li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
						<li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="sales-policy.php">Sales Policy</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="support.php">Support</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/wow.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="assets/js/viewportchecker.js"></script>
    <script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.postLeft').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
	jQuery('.postRight').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});            
</script>

	</body>
</html>