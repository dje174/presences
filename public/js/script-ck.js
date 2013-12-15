/*
 *
 * JS Document - /js/script.js
 *
 * coded by Jérôme Poucet
 * started at 15.09.13
 *//* jshint boss: true, curly: true, eqeqeq: true, eqnull: true, immed: true, latedef: true, newcap: true, noarg: true, browser: true, jquery: true, noempty: true, sub: true, undef: true, unused: true, white: false */// start your work here.
(function(e){"use strict";e(".navigation ul.subMenu").hide();e(".navigation li.toggleSubMenu span").each(function(){e(this).replaceWith('<a href="" id="menu" title="Afficher le sous-menu"><p id="cache">'+e(this).text()+"</p>"+"</a>")});e(".navigation li.toggleSubMenu > a").click(function(){if(e(this).next("ul.subMenu:visible").length!==0)e(this).next("ul.subMenu").slideUp("normal");else{e(".navigation ul.subMenu").slideUp("normal");e(this).next("ul.subMenu").slideDown("normal")}return!1})}).call(this,jQuery);