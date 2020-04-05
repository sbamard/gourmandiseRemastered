//fonction de scrolling on click
$(document).ready(function () {
    $('.scroll').on('click', function () { // Au clic sur un élément
        let page = $(this).attr('href'); // Page cible
        let speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({scrollTop: $(page).offset().top}, speed);
        return false;
    });
});