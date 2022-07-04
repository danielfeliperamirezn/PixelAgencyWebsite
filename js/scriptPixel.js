var scriptPixel = {};

(function () {

    /* btn para poner el menu */

    scriptPixel.openMenu = function() {
        $(".menu_principal").addClass("widthMenu");
    };

     /* btn para cerrar el menu */

    scriptPixel.closeMenu = function() {
        $(".menu_principal").removeClass("widthMenu");
    };

    /* FUNCTION PARA MOSTRAR POPUPCOTIZACION */

    scriptPixel.funcionCoti = function () {
        $(".containerCotization").css(
            'top',"0",
            "transition", ".5s all"
        )
    }

    scriptPixel.closeCoti = function () {
        $(".containerCotization").css(
            'top',"-100%",
            "transition", ".5s all"
        )
    }

    scriptPixel.sendCoti = function () {
        var URL = "https://wa.me/573024560360?text=";
        var nombre = $("#nombre").val();
        var celular = $("#cel").val();
        var bussines = $("#nameBussiness").val();
        var formPortafolio = document.getElementById("portafolioPixel");
        Portafolio = formPortafolio.value;
        var formPresupuesto = document.getElementById("presupuesto");
        Presupuesto = formPresupuesto.value;
        var observation = $("#observation").val();
        var MensajeFinal = "Hola mi nombre es " + nombre + ", mi empresa es " + bussines + " y estamos interesados en " +  Portafolio + celular + Presupuesto + observation;

        window.location = URL + MensajeFinal;

        return window.location;

    }

    scriptPixel.preload = function () {
        $(".containerPreloader").css({'display': ""}).fadeOut("slow"); 
    }

    scriptPixel.preloadera = function () {
        $(window).load(function() {
            scriptPixel.preload();
        });
    }

}) ();

$(function() {
    $(window).load(function() {
        scriptPixel.preload();
    });
    $("a").click(scriptPixel.preloadera);
    $("#btn_menu").click(scriptPixel.openMenu);
    $("#close_menu").click(scriptPixel.closeMenu);
    $("#coti_proyect").click(scriptPixel.funcionCoti);
    $("#closeCoti").click(scriptPixel.closeCoti);
    $("#SendCoti").click(scriptPixel.sendCoti);
    $("#close_me").click(scriptPixel.closeMi);
    $("main").click(function () {
        $(".menu_principal").removeClass("widthMenu");
    });

    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var width = $(window).width();
		var posicion =  (barra * 0.15);
        
        if(width > 480) {
            $(".containerProducts").css ({
                'transform' : `translate3d( 0, -${posicion}px, 0 )`
                /*'margin-top' : posicion + "px"*/
            })
        }
	});
    

    $(".right_content_services").slick({
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 3,
        autoplay: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
    
    $('.container_slider').slick({
        slidesToShow: 1,
        autoplay: true,
        speed: 700,
        dots: false
    });

    $(".container_coments").slick({
        slidesToShow: 1,
        autoplay: true,
        speed: 2000
    });

    $(".comentsBio").slick({
        slidesToShow: 1,
        autoplay: true,
        speed: 2000
    });
});

