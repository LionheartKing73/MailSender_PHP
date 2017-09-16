<?php

error_reporting(-1);

//require_once dirname(__FILE__) . '/PHPMailer-master/src/PHPMailer.php';
//require_once __DIR__ . "/mail/autoload.php";
//use PHPMailer\PHPMailer;
require 'phpmailer/PHPMailerAutoload.php';



$name = (!empty($_POST['name'])) ? $_POST['name'] : '';
$email = (!empty($_POST['email'])) ? $_POST['email'] : '';
$category = (!empty($_POST['category'])) ? $_POST['category'] : '';
$message = (!empty($_POST['message'])) ? $_POST['message'] : '';

$adminEmail = 'contact@intelligentea.com';//'contact@intelligentea.com';
$adminName = 'Admin';
//$username = "contact@intelligentea.com"; //you can set here your gmail also
//$password = "RF74ZaINtel28EA"; // you can set above gmail password

$username = "support@intelligentea.com";
$password = "qwerty1050"; 

if (isset($_POST) && !empty($_POST['email'])) {

    $mail = new PHPMailer;

//Enable SMTP debugging. 
  //  $mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
    $mail->isSMTP();
//Set SMTP host name                          
    $mail->Host = "mail.intelligentea.com";
//Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
//Provide username and password     
    $mail->Username = $username;  
    $mail->Password = $password;           
//If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "lws";//"ssl"  tls;
//Set TCP port to connect to 
    $mail->Port = 587;//465  587;

    $mail->From = $username;
    $mail->FromName = $name."  <".$email.">";

    $mail->addAddress($adminEmail, $adminName);
    

    $mail->isHTML(FALSE);

    $mail->Subject = "Contact Us";
    $mail->Body = 'Category : '.$category."\n\r".$message."\n\r"."From ".$name."  <".$email.">";

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent successfully";
    }
}

?>

<?php  session_start(); ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact Us | Intelligent Expert Advisors | Best Forex Robots For Automated Trading in 2017 for MT4 | Intelligent Scalper EA - Chart Scanner EA - Advanced Hedging EA - Pips Hunter EA</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
					<header class="major special">
						<h2>Contact Us</h2>
					</header>

					<!-- Text -->
						<section>
							<p>Please feel free to contact us if you have any question. We will be happy to answer you.</p>

							<hr />
                         </section>

					<!-- Form -->
						<section>
							<h3>Form</h3>
							<form method="post" action="#">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="category" id="category">
												<option value="">- Category -</option>
												<option value="1">Genenal questions</option>
												<option value="1">Sales</option>
												<option value="1">Support</option>

											</select>
										</div>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="human" name="human">
										<label for="human">I am a human and not a robot</label>
									</div>
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

					<!-- Image -->
						

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>