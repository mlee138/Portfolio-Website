<?php
session_start();

if (!empty($_GET)) {
    $_SESSION[$_GET['new_session_variable']] = 1;   
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Matt Lee That's Me</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link href="learn-more.css" rel="stylesheet">
</head>
<body>
<div id="img-wrapper">
	<container id="img-box">
		<a id="link1" href="learn-more/about-me.html"><img class="gray" src="Background-images/Background-1.png"></a>
		<a id="link2" href="learn-more/portfolio.html"><img class="gray" src="Background-images/Background-2.png"></a>
		<a id="link3" href="learn-more/resume.html"><img class="gray" src="Background-images/Background-3.png"></a>
		<a id="link4" href="learn-more/contact.php"><img class="gray" src="Background-images/Background-4.png"></a>
	</container>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="learn-more.js"></script>
	<script type="text/javascript">
	    
	    var about = "<?php echo $_SESSION['about']; ?>";
        var portfolio = "<?php echo $_SESSION['portfolio']; ?>";
	    var resume = "<?php echo $_SESSION['resume']; ?>";
	    var contact = "<?php echo $_SESSION['contact']; ?>";
	     
        if(about == 1){
            $("#link1 img").removeClass("gray");
        }
        if(portfolio == 1){
            $("#link2 img").removeClass("gray");
        }
        if(resume == 1){
            $("#link3 img").removeClass("gray");
        }
        if(contact == 1){
            $("#link4 img").removeClass("gray");
        }
	    
	</script>
</div>
</body>
</html>