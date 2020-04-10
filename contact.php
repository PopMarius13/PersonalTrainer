<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/contact.css">
		<title>Vasi Personal Trainer</title>
		<style>
		.footer {
		   position: fixed;
		   left: 0;
		   bottom: 0;
		   width: 100%;
		   background-color: #003300;
		   color: white;
		   text-align: center;
		}
		</style>
	</head>
	
	<body>
		<!-- LOGO-->
		<header>
		<div class = "containerL" >
			<div class = "rowL">
				<div class = "columnL" >
					<img  src="img/Logo.png" alt="Logo" width="110" height="90">
				</div >
				<div class = "columnL" >
					<h1 class = "hL" >Vasi Personal trainer</h1>
				</div>
			</div>
		</div>
		</header>
		
		<nav>
			<ul>
			  <li><a  href="index.php">Home</a></li>
			  <li><a href="video.php">Video</a></li>
			  <li><a class="active" href="contact.php">Contact</a></li>
			  <li><a href="about.php">About</a></li>
			</ul>
		
		</nav>
		
		<!-- CONTACT-->			
		<div class = "contact-form" >
		<form action="contactform.php" method="GET"> 
			<h1>Contact us</h1>
			<div class="txtb">
				<label>Full Name:</label>
				<input type="text" name="name"  placeholder = "Enter Your Name">	
			</div>
			<div class="txtb">
				<label>Email:</label>
				<input type="email" name="mail" value= "" placeholder = "Enter Your Email">	
			</div>
			<div class="txtb">
				<label>Phone Number:</label>
				<input type="text" name="number" value= "" placeholder = "Enter Your Phone Number">	
			</div>
			<div class="txtb">
				<label>Subject:</label>
				<input type="text" name="subject" value= "" placeholder = "Enter Your Subject">	
			</div>
			<div class="txtb">
				<label>Message:</label>
				<textarea name="message" placeholder="Enter Your Message"></textarea>
			</div>
			<button type="submit" class="btn" name="submit" onclick ="sendMail" >Send</button>
		</div>
		</form>
		
		<div class="footer">
			<p>Footer</p>
		</div>
	</body>