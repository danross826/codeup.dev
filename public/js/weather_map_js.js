


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

var locationChanger=function (event) {
    lat=$("#lat").val();
    lon=$('#lon').val();
    console.log(lat);
    console.log(lon);

    $.get('http://api.openweathermap.org/data/2.5/forecast/daily?',{
        APPID:myAPIKey,
        lat:lat,
        lon:lon,
        cnt:3,
        units:"imperial"
    }).done(function (data) {
        $('#forecasts').empty();
        console.log(data);
        temperature(data);
        weather(data);
        humidity(data);
        wind(data);
        pressure(data);
        var position={lat:parseFloat(lat),lng:parseFloat(lon)};
        var mapOptions = {

            zoom: 10,

            center: {
                lat: parseFloat(lat),
                lng: parseFloat(lon)
            }
        };
        var lonlat = new OpenLayers.LonLat(parseFloat(lon), parseFloat(lat));
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            // for OSM layer
        var mapnik = new OpenLayers.Layer.OSM();
    // Make weather station layer. Client clastering of markers is using. 
    var stations = new OpenLayers.Layer.Vector.OWMStations("Stations");
    // Make weather layer. Server clastering of markers is using.
    var city = new OpenLayers.Layer.Vector.OWMWeather("Weather");

    // Add weather layers to map
    map.addLayers([mapnik, stations, city]);
        var marker = new google.maps.Marker({
            position: position,
            map: map
        });

    }).fail(function (xhr,err,msg) {
        alert('Something went wrong!')
    });

};

$('#submit').click(locationChanger);




