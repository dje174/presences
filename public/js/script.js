/*
 *
 * JS Document - /js/script.js
 *
 * coded by Jérôme Poucet
 * started at 14.12.13
 */

/* jshint boss: true, curly: true, eqeqeq: true, eqnull: true, immed: true, latedef: true, newcap: true, noarg: true, browser: true, jquery: true, noempty: true, sub: true, undef: true, unused: true, white: false */

// start your work here.
(function( $ ){
	"use strict";

    $(".navigation ul.subMenu").hide();

    // On sélectionne le menu à dérouler classe "toggleSubMenu"
    // et on remplace l'élément span par un lien
    $(".navigation li.toggleSubMenu span").each( function () {
        $(this).replaceWith('<a href="" id="menu" title="Afficher le menu">' + '<p id="cache">'+$(this).text()+'</p>' + '<\/a>') ;
    } ) ;

    // On modifie "click" sur le lien dans le span
    $(".navigation li.toggleSubMenu > a").click( function () {
        // Quand sous-menu est déjà ouvert, on le referme :
        if ($(this).next("ul.subMenu:visible").length !== 0) {
            $(this).next("ul.subMenu").slideUp("normal");
        }
        // Quand le sous-menu est caché, on ferme et on l'affiche :
        else {
            $(".navigation ul.subMenu").slideUp("normal");
            $(this).next("ul.subMenu").slideDown("normal");
        }
        return false;
    } ) ;

}).call(this,jQuery);