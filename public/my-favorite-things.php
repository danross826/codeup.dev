<?php

// function favoriteThingGenerator(){

// $favoriteThings=["roleplaying", "comics", "sci-fi", "fantasy", "good food"];

// $randomFavoriteThing=array_rand($favoriteThings, 1);

// $result="One of my favorite things is " . $favoriteThings[$randomFavoriteThing] . "." . PHP_EOL;

// return $result;
// }

$favoriteThings=["roleplaying", "comics", "sci-fi", "fantasy", "good food"];





?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My Favorite Things</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <style>
.greyBackground {background-color: grey};
</style>


</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-1-offset-3">
				<ul>
				<?php foreach ($favoriteThings as $i=>$thing): ?>
					<?php if($i%2==0):?>
				    <li><?= $thing; ?></li>
					<?php else: ?>
					<li class="greyBackground"><?= $thing; ?></li>
				<?php endif; ?>
				<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

  <script src="js/scripts.js"></script>
</body>
</html>