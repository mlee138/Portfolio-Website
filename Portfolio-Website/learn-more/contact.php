<?php
	$error = "";
	$sentmsg = "";
	if ($_POST) {
		if(!$_POST["email-address"]){
			$error .= "Please enter an email-address.<br>";
		}
		if(!$_POST["subject"]){
			$error .= "Please add a subject.<br>";
		}
		if(!$_POST["content"]){
			$error .= "Please include some content.<br>";
		}

		if ($_POST['email-address'] && filter_var($_POST["email-address"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";   
        }
		

		if($error != "") {
			
		} else {
			$emailTo = "mlee2197@gmail.com";

			$subject = $_POST['subject'];

			$content = $_POST['content'];

			$headers = "From: ".$_POST['email-address'];

			if (mail($emailTo, $subject, $content, $headers)) {
				$sentmsg .= "<div class='success-msg'>Your message was sent, I will get back to you ASAP!</div>";
			} else {
				$sentmsg .= "message failed to send.";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Matt Lee That's Me</title>
	<link href="https://fonts.googleapis.com/css?family=Manjari|Amatic+SC&display=swap" rel="stylesheet">
	<link href="img-container.css" rel="stylesheet">
	<link href="contact.css" rel="stylesheet">
	<link href="back-btn.css" rel="stylesheet">
	<link href="footer.css" rel="stylesheet">
</head>
<body>
<div id="content-container">
	<div id="img-container">
		<img src="Background-images/Background-4.png">
		<div id="back-btn-container">
			<a href="../learn-more.php?new_session_variable=contact">&lt;&lt;</a>
			<span>Back</span>
		</div>
	</div>

	<div id="body-wrapper">
		<div id="body-container">
			<h2>Get in touch!</h2>
			<div class="success-msg"><? echo $sentmsg; ?></div>
			<div class="error-msg"><? echo $error; ?></div>
			<form method="post">
				<fieldset>
					<legend for="email-address">Email Address:</legend>
					<input name="email-address" type="email" placeholder="Enter email">
				</fieldset>

				<fieldset>
					<legend for="subject">Subject:</legend>
					<input name="subject" type="text">
				</fieldset>

				<fieldset>
					<legend for="content">Content:</legend>
					<textarea name="content"></textarea>
				</fieldset>

				<input id="submit-btn" type="submit" value="Submit">
			</form>
		</div>
	</div>
	<footer id="copyright" class="clear">&copy; MATTHEW LEE</footer>
</div>
	<script type="text/javascript" src="copyright.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="contact.js"></script>
</body>
</html>