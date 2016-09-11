<?php



function pageController(){

$favoriteThings=["roleplaying", "comics", "sci-fi", "fantasy", "good food"];

$data = array('favoriteThings' =>$favoriteThings);

return $data;

}

extract(pageController());



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