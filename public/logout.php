<?php
session_start();

function logout(){
	// clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();

    header("Location: login.php");
    die();
}

logout();


?>


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
				<h1>You have successfully logged out.</h1>
			</div>
		</div>
	</div>

  
</body>
</html>