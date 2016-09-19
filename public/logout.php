<?php
session_start();

require_once('../Auth.php');



Auth::logout();


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