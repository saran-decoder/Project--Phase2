$(document).ready(function(){

    let iconOpen = $('button.nav-icon-open');
    let iconClose = $('button.nav-icon-close');

    $(window).on("scroll", function() {
        var header = $("header");
        header.toggleClass("sticky", $(this).scrollTop() > 0);
    });

    $(iconOpen).on('click', function() {
        console.log('clicked');
        $(iconOpen).toggleClass('active');
    });

    $(iconClose).on('click', function() {
        $(iconClose).toggleClass('active');
    });
});