<?php

session_start();

require_once('../Input.php');

require_once('../Auth.php');

function pageController(){


	$display="hidden";


	$redirectIfLoggedIn="Location: authorized.php";

	$username = Input::has('username') ? Input::get('username') : '';
	$password = Input::has('password') ? Input::get('password') : '';


	$data = array('display'=>$display, 
		'username'=>$username, 
		'password'=>$password, 
		'redirectIfLoggedIn'=>$redirectIfLoggedIn);

	return $data;

}

extract(pageController());



if (!empty($_POST)) {
	if (Auth::attempt($username,$password)) {
		Auth::redirect($redirectIfLoggedIn);
	}else{
		$display="";

	}
}

// check if the user is logged in and forward them to authorized page


if (Auth::check()) {
		Auth::redirect($redirectIfLoggedIn);
}










?>








<!doctype html>



<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Login</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link href="CSS/bootstrap.css" rel="stylesheet">
  <link href="CSS/login.css" rel="stylesheet">


</head>

<body>

	<?php var_dump($_SESSION);  ?>

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-5">
				<h1>Login Here</h1>
					<form method="POST" action="login.php">
					  Username:
					  <br>
					  <input type="text" name="username">
					  <br>
					  Password:
					  <br>
					  <input type="text" name="password">
					  <br>
					  <input type="submit">

					</form>
			</div>
		</div>
	</div>

	<div class="container <?php echo $display;?>">
		<div class="row">
			<div class="col-md-3 col-md-offset-5">
				<h1>Login Failed</h1>

			</div>
		</div>
	</div>

	<?php echo var_dump($redirectIfLoggedIn);  ?>


  
  
</body>
</html>