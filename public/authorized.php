<?php





// function pageController(){



// 	$data = array('username' => $username, 'password'=>$password, 'redirect'=>$redirect);

// 	return $data;
// }

// session_start();



// extract(pageController());



// if ($username!=="guest"||$password!=="cat") {
// 	header("Location: $redirect");
// 	clearSession();
//     die;
// }else{
// 	$_SESSION['logged_in_user']=$username;
// 	$_SESSION['user_is_logged_in']=true;
// }

// if ($_SESSION['logged_in_user']=$username&&$_SESSION['user_is_logged_in']=true) {
// 	# code...
// }

// $test=var_dump($_SESSION);





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
			</div>
		</div>
	</div>

	<?php echo $test; ?>
  
</body>
</html>