<?php

session_start();

require_once('../Input.php');

require_once('../Auth.php');



function pageController(){
	$url="Location: login.php";
	// check to see if the user is not logged in
	if (Auth::check()==false) {
		// send them back to login
		Auth::redirect($url);
	}
	$data=[];
	$data['username']=$_SESSION['username'];
	
	return $data;
}

extract(pageController());



?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Authorized</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link href="CSS/bootstrap.css" rel="stylesheet">



</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-5">
				<h1>Authorized</h1>
				<h2><?php echo "Hello, " . $username . PHP_EOL; ?></h2>
				<a href="logout.php">Logout</a>
			</div>
		</div>
	</div>

  
</body>
</html>