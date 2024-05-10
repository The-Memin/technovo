jQuery(function ($) {
  //beginning



  $(".show-filter").on("click", function () {
    //$(this).toggleClass("open");
    $("#filter-container").toggleClass("show");
  });

  $(".close-filter-box").on("click", function () {
    //$(this).toggleClass("open");
    $("#filter-container").toggleClass("show");
    $(".close-filters").removeClass("show");
  });

  $("").on("click", function (e) {});

  //handle changes on response of the filters
  $(document).on("ixProductFilterRequestProcessed", function (event) {
    // do your post-processing ...
    console.log("pinguino has ended procesecing his pinguino stuff");

    $(".close-filters").addClass("show");

    if ($(".close-filters").hasClass("updated")) {
      $(".close-filters").removeClass("updated");

      setTimeout(function () {
        $(".close-filters").addClass("updated");
      }, 550);
    } else {
      $(".close-filters").addClass("updated");
    }
  });

  $(".js-open-menu").on("click", function (e) {
    var id = $(this).data("id");
    console.log("#container-" + id);

    if ($(".l-menu-nav").hasClass("show")) {
      setTimeout(function () {
        $(".menu-option").removeClass("show");
      }, 400);
      //console.log("has it");
    } else {
      $("#container-" + id).addClass("show");
      //console.log("doesn't have it");
    }

    $("#menu").toggleClass("open");
    $(".l-menu-nav").toggleClass("show");
    $("body").toggleClass("no-scroll");
  });

  $(".js-mobile-toggle").on("click", function (e) {
    var target = $(this).parent();

    if (target.hasClass("open")) {
      target.toggleClass("show");

      setTimeout(function () {
        target.toggleClass("open");
      }, 200);
    } else {
      target.toggleClass("open");

      setTimeout(function () {
        target.toggleClass("show");
      }, 100);
    }
  });

  //$(window).load(function () {

  var x = 0;

  var flexcontainer2 = $("#destacados").width();

  if ($("#mobile-indicator-destacados").is(":visible")) {
    x = 4;
  } else {
    x = 2;
  }

  var flexslide2 = flexcontainer2 / x;

  $(".flexslider2").flexslider({
    animation: "slide",
    itemWidth: flexslide2,
    controlsContainer: $(
      ".custom-navigation-two .custom-controls-container-two"
    ),
    customDirectionNav: $(".custom-navigation-two a"),
  });

  var slider1 = $(".flexslider2").data("flexslider");

  setTimeout(function () {
    slider1.resize();
  }, 100);

  $(".flexslider").flexslider({
    animation: "slide",
    selector: "div.slides > div.slide", 
    controlsContainer: $(".custom-navigation .custom-controls-container"),
    customDirectionNav: $(".custom-navigation a"),
  });

  /*
    var flexcontainer3 = $(".flexslider3").width();
    var flexslide3 = flexcontainer3 / 6;
    */

  var xx = 0;

  var flexcontainer3 = $("#en-oferta").width();

  if ($("#mobile-indicator-oferta").is(":visible")) {
    xx = 5;
  } else {
    xx = 2;
  }

  var flexslide3 = flexcontainer3 / xx;

  $(".flexslider3").flexslider({
    animation: "slide",
    itemWidth: flexslide3,
    controlsContainer: $(
      ".custom-navigation-three .custom-controls-container-three"
    ),
    customDirectionNav: $(".custom-navigation-three a"),
  });

  var slider2 = $(".flexslider3").data("flexslider");

  setTimeout(function () {
    slider2.resize();
  }, 100);

  /*
    var flexcontainer4 = $(".flexslider4").width();
    var flexslide4 = flexcontainer4 / 3.3;
    */

  var xxx = 0;

  var flexcontainer4 = $("#testimonial").width();

  if ($("#mobile-indicator-testimonial").is(":visible")) {
    xxx = 3;
  } else {
    xxx = 1;
  }

  var flexslide4 = flexcontainer4 / xxx;

  $(".flexslider4").flexslider({
    animation: "slide",
    itemWidth: flexslide4,
    slideshow: false,
    move: 1,
    controlsContainer: $(
      ".custom-navigation-four .custom-controls-container-four"
    ),
    customDirectionNav: $(".custom-navigation-four a"),
  });

  $("#modal-slider").flexslider({
    animation: "slide",
    slideshow: false,
    selector: ".m-flexslider-modal__slides > .m-flexslider-modal__slides__slide",
    animationLoop: false,
  });

  //$('.js-zoom-image').parent().zoom({magnify:2, duration: 220});//init zoom plugin

  $(".js-close-modal-slider").on("click", function (e) {//close modal slider
    
    $(".l-product-modal__container").toggleClass("show");

    setTimeout(function () {
      $(".l-product-modal").toggleClass("show");
      $(".l-product-modal .m-flexslider-modal__slides__slide__container__container-zoom").addClass("disable-hover");
    }, 250);
    
  });

  $(".js-feature-img-product").on("click", function (e) {
    
    var slider = $('#modal-slider').data('flexslider');
    var index = $(this).data('index'); //console.log($index);
    var animationSpeed = slider.vars.animationSpeed; 	//save animation speed to reset later
    slider.vars.animationSpeed = 0;

    $(".l-product-modal").toggleClass("show");
    slider.flexslider(index);
    slider.vars.animationSpeed = animationSpeed;
    slider.resize();

    setTimeout(function () {
      $(".l-product-modal__container").toggleClass("show");
    }, 250);

    setTimeout(function () {
      $(".l-product-modal .m-flexslider-modal__slides__slide__container__container-zoom").removeClass("disable-hover");
    }, 750);

  });

  $(document).ready(function () {
    $(".container").hover(function () {
      // Aquí puedes agregar código adicional para manejar el hover con JavaScript si es necesario.
    });
  });
  // });

  $(".m-tutorial--video").on("click", function () {
    $("body").addClass("no-scroll");
  });

  $(".x").on("click", function () {
    $("body").removeClass("no-scroll");
  });


  /*--------------------------------------------------------------------------*/

  $(".accordion-header.header-1 .accordion_btn").click(function () {
    $(".accordion-content_one").toggleClass("mostrar");
    if ($(".accordion-content_one").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header.header-2 .accordion_btn").click(function () {
    $(".accordion-content_two").toggleClass("mostrar");
    if ($(".accordion-content_two").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header.header-3 .accordion_btn").click(function () {
    $(".accordion-content_three").toggleClass("mostrar");
    if ($(".accordion-content_three").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header.header-4 .accordion_btn").click(function () {
    $(".accordion-content_four").toggleClass("mostrar");
    if ($(".accordion-content_four").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  /*---------------------------------------------------------------------------*/

  $(".accordion-header_faq.header-1 .accordion_btn_faq").click(function () {
    $(".accordion-content_one_faq").toggleClass("mostrar");
    if ($(".accordion-content_one_faq").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header_faq.header-2 .accordion_btn_faq").click(function () {
    $(".accordion-content_two_faq").toggleClass("mostrar");
    if ($(".accordion-content_two_faq").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header_faq.header-3 .accordion_btn_faq").click(function () {
    $(".accordion-content_three_faq").toggleClass("mostrar");
    if ($(".accordion-content_three_faq").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header_faq.header-4 .accordion_btn_faq").click(function () {
    $(".accordion-content_four_faq").toggleClass("mostrar");
    if ($(".accordion-content_four_faq").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header_faq.header-5 .accordion_btn_faq").click(function () {
    $(".accordion-content_five_faq").toggleClass("mostrar");
    if ($(".accordion-content_five_faq").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  $(".accordion-header_faq.header-6 .accordion_btn_faq").click(function () {
    $(".accordion-content_six_faq").toggleClass("mostrar");
    if ($(".accordion-content_six_faq").hasClass("mostrar")) {
      $(this).css({ transform: "rotate(0.5turn)", transition: "0.5s" });
    } else {
      $(this).css("transform", "rotate(0turn)");
    }
  });

  /*-------------------------------Mini Carrito------------------------------------------*/

  $(".js-mini-cart-button").on("click", function(e){
		$(".background-mini-cart").addClass("visible-background");
		$(".mini-cart-visible-1").addClass("visible-1");
		setTimeout(() =>{
			$(".mini-cart").addClass("visible-cart");
		}, 500);
		$("body").addClass("no-scroll");
	});

	$(".background-mini-cart").on("click", function(e){
		$(".mini-cart").removeClass("visible-cart");
		$(".mini-cart-visible-1").removeClass("visible-1");
		$("body").removeClass("no-scroll");
		setTimeout(() =>{
			$(this).removeClass("visible-background");
		}, 300);
	});


	$(".js-close-mini-cart").on("click", function(e){
		$(".mini-cart").removeClass("visible-cart");
		$(".mini-cart-visible-1").removeClass("visible-1");
		$("body").removeClass("no-scroll");
		setTimeout(function() {
			$(".background-mini-cart").removeClass("visible-background");
		}, 300);
	});

   function updateMiniCart() {
        $.ajax({
            type: 'GET',
            url: woocommerce_params.ajax_url,
            data: {
                action: 'update_mini_cart'
            },
            success: function(response) {

                $('.cart-contents').html(response);
				//console.log(response);
            }
        });
    }

	function updateTotalCart() {
        $.ajax({
            type: 'GET',
            url: woocommerce_params.ajax_url,
            data: {
                action: 'update_total_cart'
            },
            success: function(response) {
                $('.cart-total').html(response);
				//console.log(response);
            }
        });
    }


    $(document).on('added_to_cart removed_from_cart', function(){
		updateMiniCart();
		updateTotalCart();
	});

  //ending
});

// Obtener una referencia al elemento de iframe del video
var youtubeVideo = document.querySelector("#video iframe");

// Función para abrir el modal
window.video = {
  showModal: function () {
    var dialog = document.getElementById("video");
    dialog.showModal();
  },

  // Función para cerrar el modal
  close: function () {
    var dialog = document.getElementById("video");
    dialog.close();

    // Detener la reproducción del video al cerrar el modal
    youtubeVideo.src = youtubeVideo.src;
  },
};




const buttons = document.querySelectorAll(".js-show-answer");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const answer = button.nextElementSibling;

    if (answer.style.display === "none") {
      answer.style.display = "block";
    } else {
      answer.style.display = "none";
    }
  });
});
