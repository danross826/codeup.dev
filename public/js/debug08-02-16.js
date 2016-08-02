'use strict';

function sayHello (name) {
    var answer='hello ' + name;
    return answer;
}

console.log(sayHello('zach'));

// expect to see 'hello zach' in the console

// ----------------------------------------------------------------------------

function sayHelloToEveryoneExceptZach (name) {
    if (name == 'zach') {
        return'goodbye';
    } else {
        return'hello ' + name;
    }
}

console.log(sayHelloToEveryoneExceptZach('Ryan'));

// expect to see 'hello Ryan' in the console

// ----------------------------------------------------------------------------

// returns a random number between 1 and 100
function getRandomNumber () {
    return Math.floor(Math.random() * 100) + 1;
}

// returns true if number is odd, otherwise false
function isOdd (number) {
    if (number % 2 !== 0){
        return true
    }else return false
}

var rand = getRandomNumber();

if (isOdd(4)) {
    console.log(4 + ' is odd');
} else {
    console.log(4 + ' is not odd');
}

// expect to see '4 is not odd'

// ----------------------------------------------------------------------------

for (var i = 1; i <= 10; i = i+1) {
    console.log(i);
}

// expect to see 1 through 10

// ----------------------------------------------------------------------------

for (var i = 10; i >= 1; i =i-1) {
    console.log(i);
}

// expect to see 10 through 1

// ----------------------------------------------------------------------------

function sum(x, y) {
    return x + y;
}

var x = 3;
var y = 5;

console.log(sum(x,y));

// expect to see 8

