'use strict';

var allCones = Math.floor(Math.random() * 50) + 50;

do {
	var cones = Math.floor(Math.random() * 5) + 1;
	var money = cones*2
	console.log("You want to purchase "+cones+" cones.")
		if (allCones>=cones) {
			console.log("I have sold you "+cones+" cones. That will be $"+money+".");
			allCones=allCones-cones;
			console.log("I have "+allCones+" left.")
		} else {
			console.log("I don't have that many cones to sell you.")
		}

} while (allCones>0)

var beerOnWall=99

console.log("There's "+beerOnWall+" bottles of beer on the wall. "+beerOnWall+" bottles of beer.")

do {
	beerOnWall=beerOnWall-1
	console.log("You take one down. Pass it around.  Now you have "+beerOnWall+" bottles of beer on the wall.")
} while(beerOnWall>0)


