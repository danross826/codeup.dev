// (function() {
    "use strict";

    // Set our map options
    var mapOptions = {
        // Set the zoom level
        zoom: 15,
        center:{
            lat:30.2672,
            lng:-97.7431
        }

    };

    // Render the map
var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

var address = "307 E 5th St, Austin, TX 78701";

var geocoder = new google.maps.Geocoder();

var addressEntry=document.getElementById("address");

var lat="";
var lng="";
var marker="";

var arrayRestraunt=[
    {name:"RussianHouse",
        address:"307 E 5th St, Austin, TX 78701",
        content:"Over 100 flavors of vodka!!"},
    {name:"ChaumaGaucha",
        address:"18318 Sonterra Pl, San Antonio, TX 78258",
        content:"Justin Reich isn't the only one who likes this place."},
    {name:"Pasha's",
        address:"9339 Wurzbach Rd, San Antonio, TX 78240",
        content:"My favorite Mediterranean Place!"}
    ];
var i=0;





var addressChanger=function (event) {
    address=addressEntry.value;

geocoder.geocode({ "address": address }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        lat=results[0].geometry.location.lat();
        lng=results[0].geometry.location.lng();
        var myLatlng = {
            lat:lat,
            lng:lng
        };
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'hello-world',
            animation: google.maps.Animation.DROP
        });
        var infowindow = new google.maps.InfoWindow({
            content: "I don't know where this is!"
        });
        for(i=0;i<arrayRestraunt.length;i++){
            if (address==arrayRestraunt[i].address){
                console.log(infowindow.content);
                infowindow= new google.maps.InfoWindow({
                    content:arrayRestraunt[i].content});
                console.log(infowindow.content);
                // infowindow.open(map, marker);
            }
            console.log(address);
        }
        // if (address=="307 East 5th Street Austin, TX 78701"){
        // infowindow = new google.maps.InfoWindow({
        //     content: "Over 100 flavors of vodka!!"})
        // }else if (address=="18318 Sonterra Pl, San Antonio, TX 78258"){
        //     infowindow = new google.maps.InfoWindow({
        //         content: "Justin Reich isn't the only one who likes this place."})
        // }else if (address=="9339 Wurzbach Rd, San Antonio, TX 78240"){
        //     infowindow = new google.maps.InfoWindow({
        //         content: "My favorite Mediterranean Place!"})
        // }
        infowindow.open(map, marker);
    }else {
        alert("Geocoding was not successful - STATUS: " + status);
    }
})
};


var russianHouseFill=function(){
    addressEntry.value="307 E 5th St, Austin, TX 78701"
    addressChanger()
};

var chamaGauchaFill=function(){
    addressEntry.value="18318 Sonterra Pl, San Antonio, TX 78258"
    addressChanger()
};

var pashasFill=function(){
    addressEntry.value="9339 Wurzbach Rd, San Antonio, TX 78240"
    addressChanger()
};





document.getElementById("submit").addEventListener("click", addressChanger,false);
document.getElementById("eatOne").addEventListener("click", russianHouseFill,false);
document.getElementById("eatTwo").addEventListener("click", chamaGauchaFill,false);
document.getElementById("eatThree").addEventListener("click", pashasFill,false);













// })();