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


    $(document).on("click", "[data-caller='open--tab']", function() {
        let $this = $(this),
            to_close =$this.attr("data-to-close"),
            to_open = $this.attr("data-to-open"),
            $to_open = $(document).find("#"+to_open),
            around_tab = $this.hasClass("around--tab")||"";
        if(is__valid__json(to_close)){ //to detect if multi to close
            to_close = JSON.parse(to_close)
            for(const element in to_close) $("#"+to_close[element]).addClass("d-none")
        } else {
            let $to_close = $(document).find("#"+to_close);
            $to_close.addClass("d-none")
        }
        $to_open.removeClass("d-none")
        !around_tab&&!$this.hasClass("active")&&$this.addClass("active").siblings().removeClass("active");
    })

})