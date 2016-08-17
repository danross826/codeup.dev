


// variables//////////////////////////////////////////////
var lat='';
var lon='';

//weatherFunctions/////////////////////////////////////

var temperature=function (data) {
    for (var i = 0; i <= 2; i++) {
        var date=data.list[i].dt;
        date=new Date(date*1000);
        date=date.toLocaleDateString();
        var content = '';
        content += '<div class="col-lg-3 col-lg-offset-1 days"' + 'id="day' + (i + 1) + '">';
        content += '<h3>Day ' + (i + 1) + '</h3>';
        content +=date;
        content += '<h4>Temperature Min/Max</h4>' + '<br>';
        content += (data.list[0].temp.min);
        content += '/';
        content += (data.list[0].temp.max);
        content += '</div>';
        $('#forecasts').append(content)
    }
};
var weather=function (data) {
        for(var i=0;i<=2;i++){
            var content='';
            content+='<h4>Weather</h4>';
            content+='<img src="http://openweathermap.org/img/w/'+(data.list[i].weather[0].icon)+'.png"</img>';
            content+='<div>'+(data.list[i].weather[0].description);
            content+='</div>';
            var day='#day'+(i+1);
            $(day).append(content);
        }
};

var humidity=function (data) {
    for(var i=0;i<=2;i++){
        var content='';
        content+='<h4>Humidity</h4>';
        content+='<div>'+(data.list[i].humidity);
        content+='%</div>';
        var day='#day'+(i+1);
        $(day).append(content);
    }
};

var wind=function (data) {
    for(var i=0;i<=2;i++){
        var content='';
        content+='<h4>Wind Speed</h4>';
        content+='<div>'+(data.list[i].speed);
        content+='</div>';
        var day='#day'+(i+1);
        $(day).append(content);
    }
};

var pressure=function (data) {
    for(var i=0;i<=2;i++){
        var content='';
        content+='<h4>Pressure</h4>';
        content+='<div>'+(data.list[i].pressure);
        content+='</div>';
        var day='#day'+(i+1);
        $(day).append(content);
    }
};

//mapConstant////////////////////////////////////////////////////////////////

const myAPIKey='7d51793cacce60ea7f282432725c6e5b';

//APIfunction///////////////////////////////////////////////////


    var lat=-25.363882;
    var lon=131.044922;

        var position={lat:parseFloat(lat),lng:parseFloat(lon)};
        var mapOptions = {

            zoom: 1,

            center: {
                lat: parseFloat(lat),
                lng: parseFloat(lon)
            }
        };

        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
        
$('#map-canvas').one("click",function(){
        var marker = new google.maps.Marker({
        position: myLatlng, 
        map: map,
        draggable:true
        });

    google.maps.event.addListener(marker,'dragend',function() {
        lat= marker.position.lat();
        lon= marker.position.lng();


    $.get('http://api.openweathermap.org/data/2.5/forecast/daily?',{
        APPID:myAPIKey,
        lat:lat,
        lon:lon,
        cnt:3,
        units:"imperial"

    }).done(function (data) {
        if(data.cod=="404"){
            alert("No Data Found")
        }
        console.log(data);
        $('#forecasts').empty();
        temperature(data);
        weather(data);
        humidity(data);
        wind(data);
        pressure(data);
        for (var i =0; i <= 2; i++) {
            var weatherList=data.list[i].weather[0].id;
           if (200<=weatherList&&weatherList<=232) {
            $('#day'+(i+1)).css('background-image','url("../movies/thunderstorm.gif")')
           }if (300<=weatherList&&weatherList<=321) {
            $('#day'+(i+1)).css('background-image','url("../movies/drizzle.gif")')
           }if (500<=weatherList&&weatherList<=531) {
            $('#day'+(i+1)).css('background-image','url("../movies/rainumbrella.gif")')
           }if (600<=weatherList&&weatherList<=622) {
            $('#day'+(i+1)).css('background-image','url("../movies/snowing.gif")')
           }if (701<=weatherList&&weatherList<=781) {
            $('#day'+(i+1)).css('background-image','url("../movies/mist.gif")')
        };
    };


    }).fail(function (xhr,err,msg) {
        alert('Something went wrong!')
    });
        });    
            });







