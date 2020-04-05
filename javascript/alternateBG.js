'use strict';

//une fonction pour alterner les BG
(function ($) {
    let count = 0;
    let imgArray = new Array();
    imgArray[0] = 'img/fond1.png';
    imgArray[1] = 'img/fond2.png';
    imgArray[2] = 'img/choco1.jpg';
    imgArray[3] = 'img/choco2.jpg';
    imgArray[4] = 'img/choco3.jpg';

    setInterval(function () {
        count++;
        $("#imageBG").fadeOut(800, function () {
            $(this).attr('src', imgArray[count % imgArray.length])
                    .fadeIn(1600);
        });
    }, ); //en ms
})(jQuery);

//fonction de scrolling on click
$(document).ready(function () {
    $('.scroll').on('click', function () { // Au clic sur un élément
        let page = $(this).attr('href'); // Page cible
        let speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        return false;
    });
});

//une fonction pour empecher le scroll  
//$('html, body').css({
//    overflow: 'hidden',
//    height: '100%'
//});