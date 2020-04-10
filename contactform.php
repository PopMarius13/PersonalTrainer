<?php

		$name = $_GET['name'];
		$mail = $_GET['mail'];
		$number = $_GET['number'];
		$subject = $_GET['subject'];
		$message = $_GET['message'];
		
		$txt = "You have received an email from: " . $name . "\n\nMail is: " . $mail . "\n\nNumber is: " . $number . "\n\n" . $message;
		
		mail("popmariusionut13@gmail.com",$subject,$txt);
		header("Location: Contact.php");

?>
