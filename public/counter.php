<?php


function pageController(){



if (isset($_GET['number'])) {
    $number=$_GET['number'];
}else{

    $number=0;
}


if (isset($_GET['direction'])) {
    $direction=$_GET['direction'];
}else{
    $direction="";
}


if ( $direction=='up') {
    $number++;
}elseif ($direction=='down') {
    $number--;
}





$data = array('number'=>strval($number), ); 

return $data;
}

extract(pageController());   



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    body {background-color:white;}
    body {color:black;}
    </style>
    <title>Counter</title>
</head>
<body>
    <div><?php echo $number; ?></div>
    <a href=<?php echo "http://codeup.dev/counter.php?direction=up&number=" . $number;?>>Up</a>
    <a href=<?php echo "http://codeup.dev/counter.php?direction=down&number=" . $number;?>>Down</a>
</body>
</html>