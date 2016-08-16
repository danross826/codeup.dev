(function() {
    "use strict";






    function addPosts (data) {
        data.forEach(function (object) {
            var content = '';
            content += '<h2>'+object.title+'</h2>';
            content += '<p>'+object.content+'</p>';
            content += '<h3>'+'categories: '+object.categories+'</h3>';
            content += '<h3>'+object.date+'</h3>';
            console.log(content);
            $('#posts').append(content);
        });
    }

    var url='/data/blog.json';
        $.ajax(url).done(function (data) {
            alert("Everything went great!");
            $('#posts').html("");
            addPosts(data)
        }).fail(function () {
            alert("There was an error.")
        }).always(function () {
            alert('We\'re done')
    });
























})();