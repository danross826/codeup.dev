<?php

require_once('functions.php');

require_once('../input.php');

function pageController(){

	if (input::has('counter')) {
		$counter=input::get('counter');
	}else{
		$counter=0;
	}

	$lostGame="";

	if (input::has('ball')) {
		if (input::get('ball')=="hit") {
			$counter++;
		}else{
			$lostGame="You Lose!";
			if (isset($counter)) {
				$counter=0;
			}
		}
	}


	$data = array('counter' =>$counter ,'lostGame'=>$lostGame );
	return $data;
}






extract(pageController());

// var_dump(escape("cat"));



?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Ping</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <a href=<?php echo escape("http://codeup.dev/pong.php?ball=hit&counter=" . $counter)?>>Hit</a>
  <a href=<?php echo escape("http://codeup.dev/pong.php?ball=miss&counter=" . $counter)?>>Miss</a>
  <div><?php if ($lostGame!="") {
  	escape($lostGame);
  }?></div>

  <div><?php echo escape("" . $counter);  ?></div>
</body>
</html>