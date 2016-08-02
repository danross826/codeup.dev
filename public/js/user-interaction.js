"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

var response=prompt("What's your name?");

while (response==""){
    var response=prompt("What's your name?");
}

// TODO: Show an alert message that welcomes the user based on their input.

alert("Welcome "+response);

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var responseTwo=prompt(response+" do you like pizza?");

alert(response+" just said "+responseTwo+" in regard to whether he/she likes pizza or not.");