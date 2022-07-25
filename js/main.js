(function ($) {
  "use strict";

  /*----------------------------
   jQuery MeanMenu
  ------------------------------ */
  jQuery("nav#dropdown").meanmenu();

  /*----------------------------
   wow js active
  ------------------------------ */
  new WOW().init();

  /*----------------------------
   owl active
  ------------------------------ */
  $(".featured-project").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    pagination: true,
    navigation: false,
    items: 4,
    autoplayHoverPause: true,
    /* transitionStyle : "fade", */ /* [This code for animation ] */
    navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [980, 3],
    itemsTablet: [768, 2],
    itemsMobile: [479, 1],
  });
  /*----------------------------
   property-listing active
  ------------------------------ */
  $(".total-property-listing").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    pagination: true,
    navigation: false,
    items: 1,
    /* transitionStyle : "fade", */ /* [This code for animation ] */
    navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [980, 1],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
  });

  $(".total-property-listing-movil").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    pagination: true,
    navigation: false,
    items: 4,
    loop: true,
    /* transitionStyle : "fade", */ /* [This code for animation ] */
    navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [980, 3],
    itemsTablet: [768, 2],
    itemsMobile: [479, 1],
  });

  $(".total-agents").owlCarousel({
    autoPlay: true,
    slideSpeed: 2000,
    pagination: true,
    navigation: false,
    items: 2,
    loop: true,
    /* transitionStyle : "fade", */ /* [This code for animation ] */
    navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    itemsDesktop: [1199, 2],
    itemsDesktopSmall: [980, 2],
    itemsTablet: [768, 2],
    itemsMobile: [479, 1],
  });
  /*----------------------------
    Testimonial Section active
   ------------------------------ */
  $(".testimonial-area").owlCarousel({
    autoPlay: true,
    slideSpeed: 1000,
    pagination: false,
    navigation: false,
    items: 1,
    /* transitionStyle : "fade", */ /* [This code for animation ] */
    navigationText: [
      "<div class='nav-btn prev-slide'></div>",
      "<div class='nav-btn next-slide'></div>",
    ],
    itemsDesktop: [1199, 1],
    itemsDesktopSmall: [980, 1],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
  });
  /*----------------------------
    Home two listing Property Section active
   ------------------------------ */
  $(".home-two-listing").owlCarousel({
    autoPlay: false,
    slideSpeed: 2000,
    pagination: true,
    navigation: false,
    items: 3,
    autoHeight: true,
    /* transitionStyle : "fade", */ /* [This code for animation ] */
    navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [980, 2],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
  });
  /*----------------------------
  Featured Property section
  ------------------------------ */
  $(".listing-property").owlCarousel({
    autoPlay: false,
    slideSpeed: 2000,
    pagination: false,
    navigation: true,
    items: 3,
    /* transitionStyle : "fade", */ /* [This code for animation ] */
    navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>",
    ],
    itemsDesktop: [1199, 2],
    itemsDesktopSmall: [980, 1],
    itemsTablet: [768, 1],
    itemsMobile: [479, 1],
  });

  /*------------ Buscador Avanzado Toggle -----------------*/

  $(".flip").on("click", function () {
    $(this).next().slideToggle();
  });

  $("#ModalContact").on("show.bs.modal", function (e) {
    var bookId = $(e.relatedTarget).data("book-id");
    console.log(bookId);
    $("#bookId").val(bookId);

    //$(e.currentTarget).find('input[name="bookId"]').val(bookId);
  });
  /*---------- Fin Toggle ---------*/
  /*-------------------------------------
  Lightslider activation For Single Property
  --------------------------------------*/
  $("#image-gallery").lightSlider({
    adaptiveHeight: true,
    gallery: true,
    item: 1,
    thumbItem: 6,
    slideMargin: 2,
    speed: 500,
    auto: false,
    loop: true,
    controls: true,
    enableTouch: true,
    enableDrag: true,
    prevHtml: "",
    nextHtml: "",
    mode: "fade",
    onSliderLoad: function () {
      $("#image-gallery").removeClass("cS-hidden");
    },
  });

  $("#image-galleryMovil").lightSlider({
    adaptiveHeight: true,
    gallery: true,
    item: 1,
    thumbItem: 6,
    slideMargin: 2,
    speed: 500,
    auto: false,
    loop: true,
    controls: true,
    enableTouch: true,
    enableDrag: true,
    prevHtml: "",
    nextHtml: "",
    mode: "fade",
    onSliderLoad: function () {
      $("#image-galleryMovil").removeClass("cS-hidden");
    },
  });

  $("#image-galleryNosotros").lightSlider({
    adaptiveHeight: true,
    gallery: false,
    item: 1,
    thumbItem: 6,
    slideMargin: 2,
    speed: 500,
    auto: true,
    loop: true,
    controls: false,
    onSliderLoad: function () {
      $("#image-galleryMovil").removeClass("cS-hidden");
    },
  });
  /*--------------------------
   scrollUp
  ---------------------------- */
  $.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: "linear",
    scrollSpeed: 900,
    animation: "fade",
  });
  /*------------------------------------
  jquery Serch Box activation code 
  --------------------------------------*/
  $(".search-button").on("click", function () {
    $(".search-text").slideToggle("slow");
  });

  /*------------------------------------
  SideSlide menu Activation
  -------------------------------------*/
  $("#slideBotton").on("click", function () {
    $("#sideSlide").addClass("highlight");
  });
  $(".close").on("click", function () {
    $("#sideSlide").removeClass("highlight");
  });
  /*---------------------
  Circular Bars - Knob
  --------------------- */
  if (typeof $.fn.knob != "undefined") {
    $(".knob").each(function () {
      var $this = $(this),
        knobVal = $this.attr("data-rel");

      $this.knob({
        draw: function () {
          $(this.i).val(this.cv + "%");
        },
      });

      $this.appear(
        function () {
          $({
            value: 0,
          }).animate(
            {
              value: knobVal,
            },
            {
              duration: 2000,
              easing: "swing",
              step: function () {
                $this.val(Math.ceil(this.value)).trigger("change");
              },
            }
          );
        },
        { accX: 0, accY: -150 }
      );
    });
  }
  /*-------------------------------
  Counter Up
  ---------------------------------*/
  $(".about-counter").counterUp({
    delay: 50,
    time: 3000,
  });

  /*--------------------------
   Sticky Menu Activation Code
  ---------------------------- */
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $(".sticky2").addClass("sticky3");
    } else {
      $(".sticky2").removeClass("sticky3");
    }
  });
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $(".sticky").addClass("stick");
    } else {
      $(".sticky").removeClass("stick");
    }
  });
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $(".mob-sticky").addClass("mob-stick");
    } else {
      $(".mob-sticky").removeClass("mob-stick");
    }
  });
  /*-------------------------------------
  jQuery portfolio activation code
  -------------------------------------*/
  $("#dg-container").gallery({
    autoplay: true,
  });
  /*-------------------------------------
  Single Property Slider
  ---------------------------------------*/
  $(".preview a").on("click", function () {
    $(".selected").removeClass("selected");
    $(this).addClass("selected");
    var picture = $(this).data();

    event.preventDefault(); //prevents page from reloading every time you click a thumbnail

    $(".full img")
      .fadeOut(100, function () {
        $(".full img").attr("src", picture.full);
        $(".full").attr("href", picture.full);
        $(".full").attr("title", picture.title);
      })
      .fadeIn();
  }); // end on click

  $(".full").fancybox({
    helpers: {
      title: {
        type: "inside",
      },
    },
    closeBtn: true,
  });

  $(".formAvanzado").click(function () {
    console.log("Consola:" + urlformavanzado);
    var minarea = $("#minarea").val();
    var maxarea = $("#maxarea").val();
    var money = $("input[name=money]:checked").val();
    var minprice = $("#minprice").val();
    var maxprice = $("#maxprice").val();
    if (minarea) {
      urlformavanzado = urlformavanzado + "&minarea=" + minarea;
    }
    if (maxarea) {
      urlformavanzado = urlformavanzado + "&maxarea=" + maxarea;
    }
    if (money) {
      urlformavanzado = urlformavanzado + "&money=" + money;
    }
    if (minprice) {
      urlformavanzado = urlformavanzado + "&minprice=" + minprice;
    }
    if (maxprice) {
      urlformavanzado = urlformavanzado + "&maxprice=" + maxprice;
    }

    console.log(urlformavanzado);
    window.location = urlformavanzado;
  });

  $("#expand-menu").click(function () {
    alert("Abrio");
    $(".mobile-menu-area").toggle();
  });
})(jQuery);

jQuery.extend(jQuery.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: jQuery.validator.format(
    "Por favor, no escribas más de {0} caracteres."
  ),
  minlength: jQuery.validator.format(
    "Por favor, no escribas menos de {0} caracteres."
  ),
  rangelength: jQuery.validator.format(
    "Por favor, escribe un valor entre {0} y {1} caracteres."
  ),
  range: jQuery.validator.format(
    "Por favor, escribe un valor entre {0} y {1}."
  ),
  max: jQuery.validator.format(
    "Por favor, escribe un valor menor o igual a {0}."
  ),
  min: jQuery.validator.format(
    "Por favor, escribe un valor mayor o igual a {0}."
  ),
});
