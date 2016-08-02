"use strict";

function moneyControl(name,number,discount,breakpoint) {
    var finalMoney=number*discount;
    if (number>=breakpoint){
        number=number-number*discount;
        return name+" spent "+number+" discount was applied. Total purchase was "+finalMoney+"."
    } else{
        return name+" spent "+number+" discount was applied. Total purchase was "+number+"."
    }
}

function threeGradeAverage(number,numberTwo,numberThree) {
    var answer=(number+numberTwo+numberThree)/3;
    return answer

}

function buyCarHouse(flipCoin) {
    var flipCoin=Math.floor(Math.random()* 2);
    if (flipCoin==1){
        return "Buy a Car"
    }else
        return "Buy a House"

}

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

moneyControl("Luis",100,.35,200);

moneyControl("Zach",220,.35,200);

moneyControl("Cameron",180,.35,200);

moneyControl("Ryan",250,.35,200);

moneyControl("George",320,.35,200);

var answer=threeGradeAverage(70,80,95);
console.log(answer)

// Car Exercise

var flipACoin = Math.floor(Math.random()* 2)

var message=(flipACoin==1) ? "Buy a car!" : "Buy a house!"
console.log(message)