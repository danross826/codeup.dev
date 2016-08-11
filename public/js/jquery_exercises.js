'use strict';

$(document).ready(function () {









    setTimeout(function(){ alert($('h1').text()); }, 3000);




    $(".codeup").css("border-style","solid");

    $(".codeup").css("border-width","1 px");


    $("button").hover(function () {
        $('button').css("position","relative");
        $('button').css("left","20px")
    });




    $('li').css("font-size","20px");
    $('h1,p,li').css('background-color','yellow');







});