<?php



function serverGenerator(){
	$adjectives=["bad", "good", "long", "little", "awesome", "anarchic", "flaming", "frosting", "shocking"];

	$nouns=["hydra", "orc", "fairy", "dragon", "ghoul", "owlbear", "gorgon", "elf", "demon", "roper"];

	$randAdjective=array_rand($adjectives, 1);

	$randNouns=array_rand($nouns, 1);

    return $final=$adjectives[$randAdjective] . " " . $nouns[$randNouns] . PHP_EOL;

}

$answer=serverGenerator();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Random Server Generator</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">


</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-1-offset-3">
				<h1><?= $answer; ?></h1>
			</div>
		</div>
	</div>

  <script src="js/scripts.js"></script>
</body>
</html>
