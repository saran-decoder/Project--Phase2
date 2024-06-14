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
        let offset = sec.offsetTop - 200;
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


// Reviews JavaScript
const multipleItemCarousel = document.querySelector("#testimonialCarousel");

if (window.matchMedia("(min-width:576px)").matches) {
const carousel = new bootstrap.Carousel(multipleItemCarousel, {
    interval: false
});

var carouselWidth = $(".carousel-inner")[0].scrollWidth;
var cardWidth = $(".carousel-item").width();

var scrollPosition = 0;

$(".carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 3) {
        console.log("next");
        scrollPosition = scrollPosition + cardWidth;
        $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 800);
    }
});
$(".carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
        scrollPosition = scrollPosition - cardWidth;
        $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 800);
    }
});
} else {
    $(multipleItemCarousel).addClass("slide");
}