'use strict';

var whatAmI=true;

switch (typeof whatAmI){
	case 'boolean':
		console.log("You are a boolean.");
		break;
	case 'string':
		console.log("You are a string.");
		break;
	case 'number':
		console.log("You are a number!");
		break;
	default:
		console.log("I don't know what you are!");
}

