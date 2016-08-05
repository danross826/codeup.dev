// (function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;



    // TODO: Create firstName and lastName properties in your person object; assign your name to them


    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();

    var person={};
    person.firsName="Dan";
    person.lastName="Ross";
    person.sayHello=function(){
        return alert("Hello from "+person.firsName+" "+person.lastName+"!")
    };

var car={
    "make":
    "model":{
    "name": "sonata",
    "suspension": "sport"
    "trim": null
    },
    "year": 1998,
    "miles": 200000,
    "mpg": 19,
    "currentOwner":{
        "firstName": "Ryan",
        "lastName": "Orsinger",
    },
    "previousOwners": []

}

var world={
    "nations":[
       "Allemain": {},
        "Atticus":{},
        "Bretonia":{},
        "Capet":{}
        {}
    ]
}

// })();