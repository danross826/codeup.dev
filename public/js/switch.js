'use strict';

// var whatAmI=true;

// switch (typeof whatAmI){
// 	case 'boolean':
// 		console.log("You are a boolean.");
// 		break;
// 	case 'string':
// 		console.log("You are a string.");
// 		break;
// 	case 'number':
// 		console.log("You are a number!");
// 		break;
// 	default:
// 		console.log("I don't know what you are!");
// }

var luckyNumber = Math.floor(Math.random()* 6);

var amountPaid = 60;

	switch (luckyNumber){
	case 0:
		console.log("You pay $"+(amountPaid));
		break;
	case 1:
		console.log("You pay $"+(amountPaid*.1));
		break;
	case 2:
		console.log("You pay $"+(amountPaid*.25));
		break;
	case 3:
		console.log("You pay $"+(amountPaid*.35));
		break;
	case 4:
		console.log("You pay $"+(amountPaid*.5));
		break;
	case 5:
		console.log("You pay $"+(amountPaid*0));
		break;
}

var luckyNumber = Math.floor(Math.random()* (12-1)+1);

	switch (luckyNumber){
	case 1:
		console.log("January");
		break;
	case 2:
		console.log("February");
		break;
	case 3:
		console.log("March");
		break;
	case 4:
		console.log("April");
		break;
	case 5:
		console.log("May");
		break;
	case 6:
		console.log("June");
		break;
	case 7:
		console.log("July");
		break;
	case 8:
		console.log("August");
		break;
	case 9:
		console.log("September");
		break;
	case 10:
		console.log("October");
		break;
	case 11:
		console.log("November");
		break;
	case 12:
		console.log("December");
		break;
}


