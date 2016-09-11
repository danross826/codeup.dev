<?php

session_start();

function pageController(){



	$display="hidden";





	$redirect="http://codeup.dev/login.php";

	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';





	$data = array('display'=>$display, 'username'=>$username, 'password'=>$password);

	return $data;

}

$sessionId = session_id();

extract(pageController());

function clearSession()
{
    session_unset();
    session_destroy();
    session_regenerate_id();
    session_start();
}

if (!empty($_POST)) {
	if ($username=="guest"&&$password=="cat") {
		header('Location: authorized.php');
	}else{
		$display="";

	}
}

$sessionId = session_id();



$test=var_dump($_SESSION);






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

	<?php echo $test; ?>
  
  
</body>
</html>