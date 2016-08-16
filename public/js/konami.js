'use strict';


$(document).ready(function() {



    function konami() {
        var maxKeyIndex = keys.length;
        if(nextKey >= maxKeyIndex) {
            alert("You have just gained 30 lives!");

            nextKey = 0;
        }
    }





    var keys = [38,38,40,40,37,39,37,39,66,65,13];

    var nextKey = 0;
    $(document).keydown(function(event){
        var key = event.which;
        if (key === keys[nextKey]) {
            nextKey++;
        }else{
            nextKey=0
        }

        konami();
    });


    $(document).keydown()























});




