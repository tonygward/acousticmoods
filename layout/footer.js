$(document).ready(function() {
    $.get({
        url: "layout/footer.html",
        cache: false
    }).then(function(data) {
        $("#footer-content").html(data);
    });
});