'use strict';

$(document).ready(function () {









$('h1').click(function () {
    $('h1').css("background-color","salmon")
});

    $('p').dblclick(function () {
        $('p').css("font-size","18px")
    });










    $("li").hover(function(){
        $(this).css("color", "red");
    }, function(){
        $(this).css("color", "white");
    });


});