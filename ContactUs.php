<!DOCTYPE html>
<html>
<head>
	<title>Elite Residences</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<meta name="description" content="Elite Residences is a luxury serviced property management business, specialising in luxury serviced apartments, full property management, corporate leasing and relocation services.">
	<meta name="keywords" content="Elite Residences, luxury, elite, property management, serviced apartments, corporate leasing">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700" rel="stylesheet">
	<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

	<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
	<link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="./manifest.json">
	<link rel="mask-icon" href="./safari-pinned-tab.svg" color="#a78b2c">
	<meta name="apple-mobile-web-app-title" content="Elite Residences">
	<meta name="application-name" content="Elite Residences">
	<meta name="msapplication-TileColor" content="#00a300">
	<meta name="msapplication-TileImage" content="./mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

</head>
<body>
<!--Set id for back to top div-->
	<div id="Top"></div>
<!--Main nav bar and logo for 3 different screen sizes-->
	<div class="navBar">
		<div class="logoBig logo">
			<a href="./index.html"><img src="images/EliteCrown-I-2.png" class="elitelogo"></a>
		</div>

		<div class="logoSmall logo">
			<a href="./index.html"><img src="images/EliteCrown-I-3.png" class="elitelogo"></a>
		</div>

		<div class="logoXSmall logo">
			<a href="./index.html"><img src="images/ERSmall2.png" class="elitelogo"></a>
		</div>

		<div class="mainNav">
			<a href="./index.html">Home</a>
			<a href="./LuxuryRental.html">Luxury Rental</a>
			<a href="./PropertyManagement.html">Property Management</a>
			<a href="./CorporateLeasing.html">Corporate Leasing</a>
			<a href="./LondonMaps.html">London Maps</a>
			<a href="#Top">Contact Us</a>
		</div>

	<!--Menu dropbutton in 2 sizes, and dropdown menu -->
		<div class="dropdown">
			<div onclick="dropClick()" id="dropBig" class="dropbtn">
				Menu
			</div>

			<div onclick="dropClick()" id="dropSmall" class="dropbtn">
				Menu
			</div>

		    <div id="myDropdown" class="dropdown-content">
		        <a href="./index.html">Home</a>
		        <a href="./LuxuryRental.html">Luxury Rental</a>
				<a href="./PropertyManagement.html">Property Management</a>
			    <a href="./CorporateLeasing.html">Corporate Leasing</a>
				<a href="./LondonMaps.html">London Maps</a>
				<a href="#Top" class="underline">Contact Us</a>
		    </div>
		</div>
	</div>

	<div class="gap"></div>

	<header class="body">
		<p>Get in contact!</p>
    </header>

    <section class="body">

    <?php
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $phone = $_POST['phone'];
	    $message = $_POST['message'];
	    $from = 'From: '.$_POST['email']; 
	    $to = 'info@eliteresidences.co.uk'; 
	    $subject = 'Customer Query';
	    $human = $_POST['human'];
				
	    $body = "From: $name\n E-Mail: $email\n Phone Number: $phone\n Message:\n $message";
					
		if ($_POST['submit']) {
		    if ($name != '' && $email != '' && $message != '') {
		        if ($human == '4') {				 
		            if (mail ($to, $subject, $body, $from)) { 
			        echo '<p class="sent">Your message has been sent!</p>';
			    } else { 
			        echo '<p class="sent">Something went wrong, go back and try again!</p>'; 
			    } 
			} else if ($_POST['submit'] && $human != '4') {
			    echo '<p class="sent">You answered the anti-spam question incorrectly!</p>';
			}
		    } else {
		        echo '<p class="sent">You need to fill in all required fields!!</p>';
		    }
		}
	?>

		<form method="post" action="ContactUs.php">
		    <h3>Fields marked with a * must be filled in.</h3>   
		    <label>Name*</label>
		    <input name="name" placeholder="Type Here">
		            
		    <label>Email*</label>
		    <input name="email" type="email" placeholder="Type Here">

		    <label>Phone Number</label>
		    <input name="phone" placeholder="Type Here">
		            
		    <label>Message*</label>
		    <textarea id="mainmessage" name="message" placeholder="Type Here"></textarea>

		    <label>*Prove you are not a robot! Answer this:</label>
			<input name="human" placeholder="What is 2 + 2?"><br />
		            
		    <input id="submit" name="submit" type="submit" value="Submit">		        
		</form>

		<div class="rightside">
			<p>Call us direct on: +44 (0)203 086 8200</p>
			<p>Our E-mail: info@eliteresidences.co.uk</p>
			<p>Our mailing address:</p>
			<p>No. 3, 59-60 Jermyn Street</p>
			<p>Mayfair, London</p>
			<p>SW1Y 6LX</p>
		</div>
    </section>

	<footer class="clear">
		<h4><a href="#Top">Back to Top</a></h4>

		<div class="footer-links">
			<div class="foot-link1">
				<p>See what Elite Residences can do for you today!</p>
				<a href="./index.html">Home/About Elite Residences </a> |
				<a href="./LuxuryRental.html"> Luxury Rental </a> |
				<a href="./PropertyManagement.html"> Property Management </a> |
				<a href="./CorporateLeasing.html"> Corporate Leasing </a> |
				<a href="./LondonMaps.html"> London Maps </a> |
				<a href="./ContactUs.php"> Contact Us</a>
			</div>
			<div class="foot-link2">
				<img src="images/ERBlack.png" alt="Small Elite Residences logo">
			</div>
		</div>

		<h5>Website design &copy; <a href="http://chrismuster.co.uk/">Chris Muster 2017</a></h5>

		<h6>Note: All pictures used are for illustrative purposes only, and are meant to represent the quality of the actual properties available.</h6>
	</footer>

	<script src="jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="eliteResidences.js"></script>

</body>
</html>