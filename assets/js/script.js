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
            $to_close = $(document).find(".to--close"),
            to_open = $this.attr("data-to-open"),
            $to_open = $(document).find("#"+to_open),
            around_tab = $this.hasClass("around--tab")||"";
        $to_close.addClass("d-none")
        $to_open.removeClass("d-none")
        !around_tab&&!$this.hasClass("active")&&$this.addClass("active").siblings().removeClass("active");
    })

    $(document).on("change", "#paths", function() {
        let value = $("#paths").find(":selected").val(),
            data = JSON.stringify({
                "value": value,
            }),
            form_data = new FormData(),
            feed;
        form_data.append("action", JSON.stringify("get-questions"));
        form_data.append("data", data);


        $.ajax({
            type: "POST",
            url: "/ajax/aj.php",
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend:() => {

            },
            success: (f) => {
                feed = JSON.parse(f);
            },
            complete: () => {
                let html = feed.html
                $("#questions--results").html(html)
            }
        })
    });

})






// link modal
// https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal

// start new editing 
const dataSliderModal =['Dr.Ali Elsemary, Course 1 , Course 2 , Course 3',
                        'Dr.Abdulrahman Nasr, object oriented programming , Probability , software engineering',
                        'Dr.Khalil Mohamed, signals , digital control',
                        'Dr.Ahmed Yousef, communication systems, operating systems',
                        'Dr.Ashraf Elmarakby, Intelligent Systems',
                        'Dr.Ashraf Madkour, Systems And Data Security',
                        'Dr.Ali Mahmoud Rashid, Integrated circuits , Interfacing Systems',
                        'Dr.Mohamed Ali Rohaim, Queue Theory , Computer Aided Design',
                        'Dr.Khaled El Shafey, Electronics , Computer Architecture, Embedded Systems',
                        'Dr.Gamal Tharwat, Measuring Devices , Database Management Engineering And Project Managing',
                        'Dr.Sayed Noah, Computer Networks , Digital Communications',
                        'Dr.AbdelFattah ElSharkawi, Programming Methods , Algorithms And Data Structures , Advanced Programming',
                        'Dr.Ali Halawa, Microprocessors , Numerical Analysis , Project management',
                        'Dr.Mohamed Atef, Automata',
                        'Dr.Ahmed Abdelaziz, Sequential Machines , Compilers',
                        'Dr.Nagdy Mahmoud, logic , Electrical circuits',
                        'Dr.Fawzy Elrefaey, Electromagnetic And Photochemical Fields , Mathematics (Functions And Transform Functions) , Electric Power Systems',
                        'Eng.Ahmed Shokry, Course 1 , Course 2 , Course 3',
                        'Eng.Mohamed Rayan, Course 1 , Course 2 , Course 3',
                        'Eng.Abdulrahman Halawa, Course 1 , Course 2 , Course 3',];

const btns_modal = document.querySelectorAll('.btn-modal');
const PopUpModal = document.querySelector('.modal');
const PopUpModalContent = document.querySelector('.modal-content');


btns_modal.forEach((btn_modal, index) => {
    
    btn_modal.addEventListener('click', () => {
        PopUpModal.style.display = "block";
        
        // const index = Array.from(btns_modal).indexOf(this);
        const dataForClickedText = dataSliderModal[index];
        const separatedData = dataForClickedText.split(', ').map(data => data.trim());
        


        let listItems = '';
        for (let i = 1; i < separatedData.length; i++) {
          listItems += `<li>${i}. ${separatedData[i]}</li>`;
        }

        PopUpModalContent.innerHTML = `
        <button class="close" onclick="closePopupModal()">&times;</button>
        <span class="head-name"> ${separatedData[0]}</span>
        
        <span class="head-course">Courses :</span>
        <ul>
            ${listItems}
        </ul>
        `;
      });
    });

// closePopupModal
function closePopupModal() {
    document.querySelector('.modal').style.display = 'none';
    
  }



// Close modal when clicking on screen around it
PopUpModal.addEventListener('click', function(event) {
    if (event.target === PopUpModal) {
      closePopupModal();
    }
  });
// end new editing 

