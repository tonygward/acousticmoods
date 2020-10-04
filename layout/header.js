$(document).ready(function() {
    $.get({
        url: "layout/header.html",
        cache: false
    }).then(function(data) {
        $("#header-content").html(data);
    });
});