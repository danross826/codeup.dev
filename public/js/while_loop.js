'use strict';

var allCones = Math.floor(Math.random() * 50) + 50;

do {
	var cones = Math.floor(Math.random() * 5) + 1;
		if (allCones>=cones){
			allCones=allCones-cones;
			if (allCones>cones) {
				console.log("I have sold you "+cones+" cones. I have "+allCones+" left.");
			} else if (allCones==cones){
				console.log("I have sold you "+cones+" cones. I have "+allCones+" left.");
			} else if (allCones<cones) {
				console.log("I don't have " + cones + " cones to sell you. I have " + allCones + " left.");
			}
		}
		else (console.log("I only have "+cones+" left.  I'll sell you the rest then go home."))

} while (allCones>=cones)

var i=2

while(i<=32768){
	i=i*2
	console.log("My number is "+i)
}