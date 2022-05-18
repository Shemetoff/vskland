$(document).ready(function (){
    $('.js-toggler').on('click', function(){
      $('.header').toggleClass('open');
    });

    $('.js-next').on('click', function(){
        $('.modalM__holder').addClass('op');
    });

    $(".mod").modaal();
    $('.tel').mask("+7 (999) 999 - 99 - 99");

    $('.js-gallery-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<path d="M14 26.5337L15.41 25.1237L7.83 17.5337H28V15.5337H7.83L15.41 7.94369L14 6.53369L4 16.5337L14 26.5337Z" fill="#155AEB"/>\n' +
            '</svg></button>',/* TODO Сделать стрелки */
        nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
            '<path d="M14 26.5337L15.41 25.1237L7.83 17.5337H28V15.5337H7.83L15.41 7.94369L14 6.53369L4 16.5337L14 26.5337Z" fill="#155AEB"/>\n' +
            '</svg></button>', /* TODO Сделать стрелки */
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


});
