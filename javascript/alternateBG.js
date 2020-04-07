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
    }, 7000); //en ms
})(jQuery);
