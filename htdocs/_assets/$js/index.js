$(document).ready(function(){
    $(window).on("scroll", function() {
        var header = $("header");
        header.toggleClass("sticky", $(this).scrollTop() > 0);
    });
});