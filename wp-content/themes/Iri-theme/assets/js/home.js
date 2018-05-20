$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoHeight:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });

    $('.portfolio-images').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image'
        // other options
    });

    $('.portfolio-images').masonry({
        itemSelector: '.portfolio-images--link'
        // options...
    });
});
