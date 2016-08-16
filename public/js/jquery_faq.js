$(document).ready(function () {






'use strict';


$("#show").click(function (event) {
event.preventDefault();
    $('dd').slideToggle();
});


$('ul').each(function (index,element) {
    console.log(element);
    $(element).children().first().css('font-weight','bold')
    // $(this).children().first().css('font-weight','bold')
});


    $("li").click(function (event) {
        event.preventDefault();
        $(this).parent().slideUp();
    });





});