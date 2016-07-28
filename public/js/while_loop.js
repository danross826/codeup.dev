'use strict';

var allCones = Math.floor(Math.random() * 50) + 50;

do {
	var cones = Math.floor(Math.random() * 5) + 1;
	console.log("You want to purchase "+cones+" cones.")
		if (allCones>=cones) {
			console.log("I have sold you "+cones+" cones.");
			allCones=allCones-cones;
			console.log("I have "+allCones+" left.")
		} else {
			console.log("I don't have that many cones to sell you.")
	}

} while (allCones>0)
	console.log("I have no cones to sell you.")

var i=2

while(i<=32768){
	i=i*2
	console.log("My number is "+i)
}