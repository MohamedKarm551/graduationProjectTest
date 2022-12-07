/*global $, alert, console*/
$(()=>{
    "use strict";
    // remove page loader
    $(".page-loader").remove();

    let swiper = new Swiper(".mySwiper", {
        loop: false,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,

        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 300,
            modifier: 0.5,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

})