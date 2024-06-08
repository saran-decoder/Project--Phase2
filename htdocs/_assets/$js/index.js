// Scroll Sticky JQuery
$(document).ready(function(){

    $(window).on("scroll", function() {
        var header = $("header");
        header.toggleClass("sticky", $(this).scrollTop() > 0);
    });

});

// Header Navbar JQuery
$(document).ready(function(){
    var iconToggel = $('button.nav-icon-toggel');
    var navHide = $('.res_list a');

    $(iconToggel).on('click', function() {
        console.log('clicked');
        $('.res_nav, .res_list').toggleClass('active');
    });

    $(navHide).on('click', function() {
        $('.res_nav, .res_list').toggleClass('active');
    })
});

// Section Animation JavaScript
let sections = document.querySelectorAll('section');

window.onscroll = () => {
    let top = window.scrollY;
    // console.log(`ScrollY: ${top}`);
    
    sections.forEach(sec => {
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;

        // console.log(`Section: ${sec.id}, Offset: ${offset}, Height: ${height}, Top: ${top}`);

        if (top >= offset && top < offset + height) {
            sec.classList.add('show-animate');
            // console.log(`Adding class to section: ${sec.id}`);
        } else {
            sec.classList.remove('show-animate');
            // console.log(`Removing class from section: ${sec.id}`);
        }
    });
}