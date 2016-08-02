// (function iffy(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.

    var names=["Dan", "Josh", "Alec", "Danger"];

    // TODO: Create a log statement that will log the number of elements in the names array.

    console.log(names.length);

    // TODO: Create log statements that will print each of the names array elements individually.


// for(var i=0;i<=3;i=i+1){
//         console.log(names[i])
//     }

    // console.log(names.reverse());


var arrayTwo=["Danger", "Alec", "Josh", "Dan"];

// console.log(arrayTwo);

names.forEach(function (element, index, array) {
    console.log(element)
});



// })();