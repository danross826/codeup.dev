<?php

echo 'hello from an external file!' . PHP_EOL;

$array = [1,2,3,4,5];
// var_dump($array[3]);

$arrayTwo=['first_name'=>'Dan','last_name'=>'Ross','email'=>'danross826@gmail.com','phone'=>'210-218-3091'];
// var_dump($arrayTwo);

$test=['person1'=>$arrayTwo,'person2','person3'];

// var_dump($test);

$number=10;

// $item1=5;
// $item2=&$item1;

// echo $item1;
// echo $item2;

// $a = 10;

// echo ++$a;

// echo $a++;

// echo $a;

// $b = 20;

// echo --$b;

// echo $b--;

// echo $b;

$x = 0;
$y = 5;
$z = 10;

var_dump($x > $y || !($y < $z));





?>
