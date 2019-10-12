<?php

session_start();
$_SESSION['about'] = 0;
$_SESSION['portfolio'] = 0;
$_SESSION['resume'] = 0;
$_SESSION['contact'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Matt Lee That's Me</title>
	<!--fonts/css-->
	<link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy|Manjari&display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="index.css">
</head>

<body>
	<div id="ml-body-wrapper">
		<h1 class="animated fadeIn">"Hi there, I'm Matt Lee."</h1>
		<span id="image-shadow">
			<img src="Background-images/Professional_Photo_ML.png">
		</span>
		<p class="animated fadeInUp">I'm a recent graduate from Binghamton University looking to make it in the world of web development.</p><br>
		<a class="animated fadeIn" href="learn-more.php">Learn More</a>
	</div>
</body>
</html>