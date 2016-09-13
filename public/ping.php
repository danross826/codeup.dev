<?php

require_once('functions.php');


function pageController(){

	if (isset($_GET['counter'])) {
		$counter=$_GET['counter'];
	}else{
		$counter=0;
	}

	$lostGame="";

	if (isset($_GET['ball'])) {
		if ($_GET['ball']=="hit") {
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
  <a href=<?php echo "http://codeup.dev/pong.php?ball=hit&counter=" . $counter?>>Hit</a>
  <a href=<?php echo "http://codeup.dev/pong.php?ball=miss&counter=" . $counter?>>Miss</a>
  <div><?php if ($lostGame!="") {
  	echo $lostGame;
  }?></div>

  <div><?php echo "" . $counter;  ?></div>
</body>
</html>