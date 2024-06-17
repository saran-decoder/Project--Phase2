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
    let scrollPosition = window.scrollY + window.innerHeight;
    // console.log(`ScrollY: ${scrollPosition}`);

    sections.forEach(section => {
        let sectionTop = section.offsetTop;
        let sectionHeight = section.offsetHeight;

        // console.log(`Section: ${section.id}, SectionTop: ${sectionTop}, Height: ${sectionHeight}, scrollPosition: ${scrollPosition}`);

        // Check if the section is within the viewport
        if (scrollPosition >= sectionTop && scrollPosition <= sectionTop + sectionHeight) {
            section.classList.add('show-animate');
            // console.log(`Adding class to section: ${section.id}`);
        } else {
            section.classList.remove('show-animate');
            // console.log(`Removing class from section: ${section.id}`);
        }
    });
}


// Reviews JavaScript
$(document).ready(function() {
    var $carouselItems = $('.carousel-item');
    var currentIndex = 0;

    function updateActiveItem() {
        $carouselItems.removeClass('active');
        $carouselItems.eq(currentIndex).addClass('active');
    }

    $('.carousel-control-next').click(function() {
        currentIndex = (currentIndex + 1) % $carouselItems.length;
        updateActiveItem();
    });

    $('.carousel-control-prev').click(function() {
        currentIndex = (currentIndex - 1 + $carouselItems.length) % $carouselItems.length;
        updateActiveItem();
    });

    updateActiveItem();
});


// Contact Form Validation
$(document).ready(function() {
    // Function to display invalid feedback message
    function displayInvalidFeedback(field, message) {
        field.addClass('is-invalid');
        field.next('.invalid-feedback').text(message).show();
    }

    // Function to validate a field with regex and custom message
    function validateField(field, regex, message) {
        if (field.val().trim() === "" || (regex && !regex.test(field.val().trim()))) {
            displayInvalidFeedback(field, message);
            return false;
        } else {
            field.removeClass('is-invalid');
            field.next('.invalid-feedback').hide();
            return true;
        }
    }

    // Handle form submission
    $('#contactForm').on('submit', function(e) {
        let isValid = true;

        // Validation regex patterns
        const emailRegex = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        const phoneRegex = /^\d+$/;

        // Validate fields
        isValid &= validateField($('#name'), null, 'Please enter your full name.');
        isValid &= validateField($('#phone'), phoneRegex, 'Please enter a valid phone number.');
        isValid &= validateField($('#email'), emailRegex, 'Please enter a valid email address.');
        isValid &= validateField($('#message'), null, 'Please enter a message.');

        if (!isValid) {
            e.preventDefault();
        }
    });
});

// Contact Send TO Email Server
