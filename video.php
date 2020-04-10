<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/main.css">
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
		<!-- NAVbAR-->
		<nav>
			<ul>
			  <li><a  href="index.php">Home</a></li>
			  <li><a class="active" href="video.php">Video</a></li>
			  <li><a href="contact.php">Contact</a></li>
			  <li><a href="about.php">About</a></li>
			</ul>
		</nav>
		<!-- Video-->
		<video class="videoclass" width="400" controls>
		  <source src="video/video.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>

		<div class="footer">
			<p>Footer</p>
		</div>
	</body>