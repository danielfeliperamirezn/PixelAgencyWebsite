var scriptAudiovisual = {};

(function () {

    scriptAudiovisual.openMenu = function() {
        $(".menu_principal").addClass("widthMenu");
    };

     /* btn para cerrar el menu */

     scriptAudiovisual.closeMenu = function() {
        $(".menu_principal").removeClass("widthMenu");
    };


}) ();