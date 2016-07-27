"use strict";

// Grade Exercise

var gradeOne=70
var gradeTwo=80
var gradeThree=95

if(((gradeOne+gradeTwo+gradeThree)/3)>80){
    console.log("You're awesome!");
} else {
    console.log("You need to practice more.")
}

// HEB Exercise

var luisAmount=100
var zachAmount=220
var cameronAmount=180
var ryanAmount=250
var georgeAmount=320

if(luisAmount>200){
    var luisFinalAmount=luisAmount-(luisAmount*.35)
    console.log("Luis bought $"+luisAmount+", discount was applied. Final payment:$"+luisFinalAmount)
} else if(luisAmount<=200){
    console.log("Luis bought $"+luisAmount+", discount wasn't applied. Final payment:$"+luisAmount)
}
if(zachAmount>200){
    var zachFinalAmount=zachAmount-(zachAmount*.35)
    console.log("Zach bought $"+zachAmount+", discount was applied. Final payment:$"+zachFinalAmount)
} else if(zachAmount<=200){
    console.log("Zach bought $"+zachAmount+", discount wasn't applied. Final payment:$"+zachAmount)
}
if(cameronAmount>200){
    var cameronFinalAmount=cameronAmount-(cameronAmount*.35)
    console.log("Cameron bought $"+cameronAmount+", discount was applied. Final payment:$"+cameronFinalAmount)
} else if(cameronAmount<=200){
    console.log("Cameron bought $"+cameronAmount+", discount wasn't applied. Final payment:$"+cameronAmount)
}
if(ryanAmount>200){
    var ryanFinalAmount=ryanAmount-(ryanAmount*.35)
    console.log("Ryan bought $"+ryanAmount+", discount was applied. Final payment:$"+ryanFinalAmount)
} else if(ryanAmount<=200){
    console.log("Ryan bought $"+ryanAmount+", discount wasn't applied. Final payment:$"+ryanAmount)
}
if(georgeAmount>200){
    var georgeFinalAmount=georgeAmount-(georgeAmount*.35)
    console.log("George bought $"+georgeAmount+", discount was applied. Final payment:$"+georgeFinalAmount)
} else if(zachAmount<=200){
    console.log("George bought $"+zachAmount+", discount wasn't applied. Final payment:$"+zachAmount)
}

// Car Exercise

var flipACoin = Math.floor(Math.random()* 2)

var message=(flipACoin==1) ? "Buy a car!" : "Buy a house!"
console.log(message)