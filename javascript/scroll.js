'use strict';

//fonction de scrolling on click
$(document).ready(function () {
    $('.scrollFonction').on('click', function () { // Au clic sur un élément
        let page = $(this).attr('href'); // Page cible
        let speed = 800; // Durée de l'animation (en ms)
        $('html, body').animate({scrollTop: $(page).offset().top}, speed); // Go
        return false;
    });
});