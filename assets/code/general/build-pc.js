jQuery(function ($) {
  //beginning

  $(".js-gamaBaja-selection").on("click", function (e) {
    $(this).addClass("brands");
    $(".intel").hover(function () {
      $(".m-default-pc--product__imagen.gamaBaja").css(
        "background-image",
        "url(https://th.bing.com/th/id/R.413803acfd6d9d7e2e6535f0a5593cae?rik=D2LueErDZa4cXw&riu=http%3a%2f%2fpngimg.com%2fuploads%2fintel%2fintel_PNG16.png&ehk=Ief8e%2fIEqDMIKvgVYe02jNBDNQUum5631aMpaZOnNB0%3d&risl=&pid=ImgRaw&r=0)"
      );
    });
    $(".amd").hover(function () {
      $(".m-default-pc--product__imagen.gamaBaja").css(
        "background-image",
        "url(https://logosmarcas.net/wp-content/uploads/2020/04/AMD-Emblema.png)"
      );
    });
  });

  $(".js-open-catalogo").on("click", function (e) {
    $(".l-catalogo").addClass("show");
    $("body").addClass("no-scroll");

    setTimeout(function () {
      $(".l-catalogo__container").addClass("show");
    }, 500);

    $(".m-component").removeClass("selected");
  });

  $(".js-close-catalogo").on("click", function (e) {
    $(".l-catalogo__container").removeClass("show");
    $(".l-catalogo").removeClass("show");
    $("body").removeClass("no-scroll");

    setTimeout(function () {
      $(".l-catalogo__container__rows--one .m-steps .step-1 .m-products").empty();
    }, 300);

  });
  /*------------------------------------------------*/
  // $(".m-products").on("click", "div.js-select-product", function (e) {
  //   //$("body").addClass("no-scroll");

  //   var contador = $(".m-column-two").data("current-step");

  //   var imgurl = $(this).data("imgurl");
  //   var nombre = $(this).data("name");
  //   var marca = $(this).data("marca");
  //   var modelo = $(this).data("modelo");

  //   var contenedorDestino = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__img"
  //   );
  //   var contenedorDestinoNombre = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__nombre"
  //   );
  //   var contenedorDestinoMarca = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__marca"
  //   );
  //   var contenedorDestinoModelo = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__modelo"
  //   );
  //   var segundaColumna = $(".m-row-two.step-" + contador + " .m-row-two__btn"); //.m-row-two.step-1 .m-row-two__btn
  //   var warningWindow = $("<p></p>").text("Remueve tu selección actual").css({
  //     "margin-top": "0.5vh",
  //     border: "1px solid red",
  //     "font-size": "0.7em",
  //     "border-radius": "0.5vw",
  //     "text-align": "center",
  //     "font-weight": "bold",
  //     color: "white",
  //     "background-color": "red",
  //     "text-transform": "uppercase",
  //     padding: "5px 10px",
  //   });

  //   //console.log(contador);

  //   if (!segundaColumna.hasClass("added")) {
  //     contenedorDestino.attr("src", imgurl);
  //     contenedorDestinoNombre.html(nombre);
  //     contenedorDestinoMarca.html(marca);
  //     contenedorDestinoModelo.html(modelo);

  //     if (!$(this).parent().hasClass("selected")) {
  //       $(
  //         ".l-container-products.step-" + contador + " .m-products__item"
  //       ).removeClass("selected"); //.step-1 .m-products__item
  //       $(this).parent().addClass("selected");
  //       $(".step-" + contador + ".m-row-two").addClass("active"); //.step-1.m-row-two
  //       //console.log("agregado");
  //     } else if ($(this).parent().hasClass("selected")) {
  //       $(this).parent().removeClass("selected");
  //       $(".step-" + contador + ".m-row-two").removeClass("active");
  //       //console.log("retirado");
  //     }
  //   } else {
  //     if ($(this).parent().hasClass("selected")) {
  //       $(this).css({ cursor: "default" });
  //     } else {
  //       if (!warningWindow.is(":visible")) {
  //         $(this).addClass("no-click");
  //         $(this).parent().append(warningWindow);
  //         warningWindow.hide();

  //         warningWindow.fadeIn();

  //         setTimeout(function () {
  //           warningWindow.fadeOut(function () {
  //             warningWindow.remove();
  //             $(".js-select-product").removeClass("no-click");
  //           });
  //         }, 1500);
  //       }
  //     }
  //   }

  //   $(".l-catalogo__container__rows--two").removeClass("close-row-two");
  //   $(".l-catalogo__container__rows--two").addClass("open-row-two");

  //   setTimeout(function () {
  //     $(".l-catalogo__container__rows--two").addClass("open-row-two");
  //     //$("body").removeClass("no-scroll");
  //   }, 300);
  // });

  // $(".js-select-product-mobile").on("click", function (e) {
  //   var contador = $(".m-column-two").data("current-step");

  //   var imgurl = $(this).data("imgurl");
  //   var nombre = $(this).data("name");
  //   var marca = $(this).data("marca");
  //   var modelo = $(this).data("modelo");

  //   var contenedorDestino = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__img"
  //   );
  //   var contenedorDestinoNombre = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__nombre"
  //   );
  //   var contenedorDestinoMarca = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__marca"
  //   );
  //   var contenedorDestinoModelo = $(
  //     ".m-row-two.step-" + contador + " .m-row-two__modelo"
  //   );
  //   var segundaColumna = $(".m-row-two.step-" + contador + " .m-row-two__btn"); //.m-row-two.step-1 .m-row-two__btn
  //   var warningWindow = $("<p></p>").text("Remueve tu selección actual").css({
  //     "margin-top": "0.5vh",
  //     border: "1px solid red",
  //     "font-size": "0.7em",
  //     "border-radius": "0.5vw",
  //     "text-align": "center",
  //     "font-weight": "bold",
  //     color: "white",
  //     "background-color": "red",
  //     "text-transform": "uppercase",
  //     padding: "5px 10px",
  //   });

  //   //console.log(contador);

  //   if (!segundaColumna.hasClass("added")) {
  //     contenedorDestino.attr("src", imgurl);
  //     contenedorDestinoNombre.html(nombre);
  //     contenedorDestinoMarca.html(marca);
  //     contenedorDestinoModelo.html(modelo);

  //     if (!$(this).parent().hasClass("selected")) {
  //       $(
  //         ".l-container-products.step-" + contador + " .m-products__item"
  //       ).removeClass("selected");
  //       $(this).parent().addClass("selected");
  //       $(".step-" + contador + ".m-row-two").addClass("active");
  //     } else if ($(this).parent().hasClass("selected")) {
  //       //$(this).parent().removeClass("selected");
  //       //$(".step-"+contador+".m-row-two").removeClass("active");
  //       $(".l-catalogo__container__rows--two").removeClass("close-row-two");
  //       $(".l-catalogo__container__rows--two").addClass("open-row-two");
  //     }
  //   } else {
  //     if ($(this).parent().hasClass("selected")) {
  //       $(this).css({ cursor: "default" });
  //     } else {
  //       if (!warningWindow.is(":visible")) {
  //         $(this).addClass("no-click");
  //         $(this).parent().append(warningWindow);
  //         warningWindow.hide();

  //         warningWindow.fadeIn();

  //         setTimeout(function () {
  //           warningWindow.fadeOut(function () {
  //             warningWindow.remove();
  //             $(".js-select-product").removeClass("no-click");
  //           });
  //         }, 1500);
  //       }
  //     }
  //   }
  //   setTimeout(function () {
  //     $(".l-catalogo__container__rows--two").addClass("open-row-two");
  //     $("body").removeClass("no-scroll");
  //   }, 300);
  // });

  // $(".js-add-product").on("click", function (e) {
  //   var contador = $(".m-column-two").data("current-step");
    
  //   var target =   $(
  //     ".m-products.step.step-" +
  //     contador +
  //     " .m-products__item.selected .js-select-product"
  //   );

  //   var target_1 = $(
  //     ".m-products.step.step-1 .m-products__item.selected .js-select-product"
  //   );
  //   var target_2 = $(
  //     ".m-products.step.step-2 .m-products__item.selected .js-select-product"
  //   );
  //   var target_3 = $(
  //     ".m-products.step.step-3 .m-products__item.selected .js-select-product"
  //   );
  //   var target_4 = $(
  //     ".m-products.step.step-4 .m-products__item.selected .js-select-product"
  //   );
  //   var target_5 = $(
  //     ".m-products.step.step-5 .m-products__item.selected .js-select-product"
  //   );
  //   var target_6 = $(
  //     ".m-products.step.step-6 .m-products__item.selected .js-select-product"
  //   );
  //   var target_7 = $(
  //     ".m-products.step.step-7 .m-products__item.selected .js-select-product"
  //   );
  //   var target_8 = $(
  //     ".m-products.step.step-8 .m-products__item.selected .js-select-product"
  //   );
  //   var target_9 = $(
  //     ".m-products.step.step-9 .m-products__item.selected .js-select-product"
  //   );
  //   var target_10 = $(
  //     ".m-products.step.step-10 .m-products__item.selected .js-select-product"
  //   );
  //   var target_11 = $(
  //     ".m-products.step.step-11 .m-products__item.selected .js-select-product"
  //   );

  //   var imagen = $(target).data("imgurl");
  //   var nombre = $(target).data("name");
  //   var precio = $(target).data("precio");

  //   var precio_1 = parseFloat($(target_1).data("precio")) || 0;
  //   var precio_2 = parseFloat($(target_2).data("precio")) || 0;
  //   var precio_3 = parseFloat($(target_3).data("precio")) || 0;
  //   var precio_4 = parseFloat($(target_4).data("precio")) || 0;
  //   var precio_5 = parseFloat($(target_5).data("precio")) || 0;
  //   var precio_6 = parseFloat($(target_6).data("precio")) || 0;
  //   var precio_7 = parseFloat($(target_7).data("precio")) || 0;
  //   var precio_8 = parseFloat($(target_8).data("precio")) || 0;
  //   var precio_9 = parseFloat($(target_9).data("precio")) || 0;
  //   var precio_10 = parseFloat($(target_10).data("precio")) || 0;
  //   var precio_11 = parseFloat($(target_11).data("precio")) || 0;

  //   var precioTotal =
  //     precio_1 +
  //     precio_2 +
  //     precio_3 +
  //     precio_4 +
  //     precio_5 +
  //     precio_6 +
  //     precio_7 +
  //     precio_8 +
  //     precio_9 +
  //     precio_10 +
  //     precio_11;
  //   var precioTotalContenedor = $(".m-component__precioTotal");

  //   precioTotalContenedor.text("$" + precioTotal.toFixed(2));

  //   var currentStep = $(".m-column-two").data("current-step");
  //   var targetComponent = $("#step-" + currentStep);
  //   //console.log(targetComponent);
  //   var targetImagen = $("#step-" + currentStep + " .m-component__imagen");
  //   var targetNombre = $("#step-" + currentStep + " .m-component__nombre");
  //   var targetPrecio = $("#step-" + currentStep + " .m-component__precio");

  //   //console.log(targetNombre);
  //   var targetResumen = $(targetComponent);
  //   var columnTarget = $(".m-row-two.step.step-" + contador);

  //   $(targetResumen).toggleClass("selected");
  //   $(this).toggleClass("added");

  //   if ($(this).hasClass("added")) {
  //     targetNombre.html(nombre);
  //     targetImagen.css("background-image", "url('" + imagen + "'");
  //     targetPrecio.html("$" + precio);
  //     $("#resumen").addClass("show");

  //     $(".js-next-step").removeClass("add-limit");
  //   } else {
  //     targetNombre.html();
  //     $(".js-select-product-mobile").parent().removeClass("selected");
  //     columnTarget.removeClass("active");
  //   }

  //   if ($("#resumen").hasClass("show")) {
  //     $(".background").css({ display: "block" });
  //   } else {
  //     $(".background").css({ display: "none" });
  //   }

  //   //var targetStepIndex = $(".l-container-products .step-"+contador + " .m-products .m-products__item.selected .m-products__item__btn");
  //   var targetStepIndex = $(
  //     ".l-container-products.step-1 .m-products .m-products__item.selected .m-products__item__btn"
  //   );
  //   //var targetStepIndex = $(".l-container-products .step-");
  //   console.log(targetStepIndex);

  //   var stepIndex = $(targetStepIndex).data("step-index");
  //   console.log(stepIndex);
  //   //$(".js-next-step").data('next-to-load', stepIndex);
  //   //$(".js-next-step").attr("data-next-to-load", stepIndex);
  //   $(".js-next-step").data("next-to-load", stepIndex);
  // });

  $(".js-open-resumen").on("click", function (e) {
    $("#resumen").toggleClass("show");
    if ($(".l-catalogo__container__rows--three .open").hasClass("abierto")) {
      $(".l-catalogo__container__rows--three .open").removeClass("abierto");
    } else {
      $(".l-catalogo__container__rows--three .open").addClass("abierto");
    }

    if ($("#resumen").hasClass("show")) {
      $(".background").css({ display: "block" });
      $(".l-catalogo__container__rows--three__scroll").css({
        "overflow-y": "auto",
      });
    } else {
      $(".background").css({ display: "none" });
      $(".l-catalogo__container__rows--three__scroll").css({
        "overflow-y": "hidden",
      });
    }
  });

  $(".background").on("click", function (e) {
    $(this).css({ display: "none" });
    $(".js-open-resumen").toggleClass("abierto");
    $(".l-catalogo__container__rows--three__scroll").css({
      "overflow-y": "hidden",
      //height: "auto",
    });
    if ($("#resumen").hasClass("show")) {
      $("#resumen").removeClass("show");
      //$(".l-catalogo__container__rows--three__scroll").css({"overflow-y" : "scroll", "height" : "100%"});
    } else {
    }
  });

  $(".js-btn-edit").on("click", function (e) {
    if ($("#resumen").hasClass("show")) {
      $("#resumen").removeClass("show");
      $(".background").css({ display: "none" });
    } else {
    }

    var currentStep = $(".m-column-two").data("current-step");
    var contador = $(this).data("contador");
    //console.log(currentStep);
    console.log(contador);

    if ($(".m-steps").hasClass("step-" + currentStep)) {
      $(".m-steps").removeClass("step-" + currentStep);
      $(".m-steps").addClass("step-" + contador);
    }

    $(".js-next-step").parent().data("current-step", contador);

    $(".js-previous-step").parent().data("current-step", contador);

    var titulo = $(".js-tituloCat");
    switch (contador) {
      case 1:
        titulo.html("Procesador");
        break;
      case 2:
        titulo.text("Titulo 2");
        break;
      case 3:
        titulo.html("Placa Madre");
        break;
      case 4:
        titulo.text("Gabinete");
        break;
      case 5:
        titulo.text("Memoria RAM");
        break;
      case 6:
        titulo.text("Tarjeta de video");
        break;
      case 7:
        titulo.text("Ventiladores");
        break;
      case 8:
        titulo.text("Tarjeta de Red");
        break;
      case 9:
        titulo.text("Almacenamiento");
        break;
      case 10:
        titulo.text("Fuente de poder");
        break;
      case 11:
        titulo.text("Accesorios");
        break;
      default:
    }

    var pagina = $(".js-pagina");
    pagina.html(contador);

    if (currentStep == 1) {
      $(".js-previous-step").removeClass("previous-limit");
    } else {
      $(".js-previous-step").addClass("previous-limit");
    }
  });

  // $(".js-next-step").on("click", function (e) {
  //   /*
  //   var tarjetasMadreCompatiblesArray = "tarjetasMadreCompatibles";
  //   var memoriasRamArray = "memoriasRamCompatibles";
  //   console.log(productsNextStep);

  //   var targetArray = gamaBajaIntel;
  //   console.log(targetArray);

  //   var targetArrayElement = targetArray[productsNextStep];
  //   console.log(targetArrayElement);

  //   var targetArraySubElement =
  //     targetArrayElement[tarjetasMadreCompatiblesArray];
  //   console.log(targetArraySubElement);

  //   var targetArraySubElement2 = [tarjetasMadreCompatiblesArray][
  //     memoriasRamArray
  //   ];
  //   console.log("Array de memorias ram: " + targetArraySubElement2);
  //   */

  //   var contenedorProductos = $(".m-steps");
  //   var currentStep = $(this).parent().data("current-step");
  //   var pagina = $(".js-pagina");
  //   var titulo = $(".js-tituloCat");

  //   if (!$(this).hasClass("add-limit")) {
  //     $(
  //       ".l-catalogo__container__rows--one .m-steps .step, .l-catalogo__container__rows--two .m-steps .step"
  //     ).removeClass("active-c"); //rest active
  //   }

  //   if (currentStep < 4) {
  //     var nextStep = currentStep + 1;
  //     //console.log(currentStep, nextStep);

  //     contenedorProductos.removeClass("step-" + currentStep);
  //     contenedorProductos.addClass("step-" + nextStep);

  //     if (!$(this).hasClass("add-limit")) {
  //       $(
  //         ".l-catalogo__container__rows--one .m-steps .step-" +
  //           nextStep +
  //           ", .l-catalogo__container__rows--two .m-steps .step-" +
  //           nextStep +
  //           ""
  //       ).addClass("active-c"); //animate the current step
  //     }

  //     $(this).parent().data("current-step", nextStep);
  //     pagina.html(nextStep);

  //     contenedorProductos.data("current-step", nextStep);
  //     if (
  //       !$(
  //         ".l-catalogo__container__rows--one .m-steps .step-" +
  //           nextStep +
  //           " .js-add-product"
  //       ).hasClass("added")
  //     ) {
  //       $(this).addClass("add-limit");
  //     }
  //   }

  //   /*----------------------Cambio de título en cada paso-----------------------*/
  //   switch (nextStep) {
  //     case 1:
  //       titulo.html("Procesador");
  //       break;
  //     case 2:
  //       titulo.text("Titulo 2");
  //       break;
  //     case 3:
  //       titulo.html("Placa Madre");
  //       break;
  //     case 4:
  //       titulo.text("Gabinete");
  //       break;
  //     case 5:
  //       titulo.text("Memoria RAM");
  //       break;
  //     case 6:
  //       titulo.text("Tarjeta de video");
  //       break;
  //     case 7:
  //       titulo.text("Ventiladores");
  //       break;
  //     case 8:
  //       titulo.text("Tarjeta de Red");
  //       break;
  //     case 9:
  //       titulo.text("Almacenamiento");
  //       break;
  //     case 10:
  //       titulo.text("Fuente de poder");
  //       break;
  //     case 11:
  //       titulo.text("Accesorios");
  //       break;
  //     default:
  //   }

  //   /*------------------Límite superior del botón paso siguiente-----------------*/
  //   if (nextStep == 4) {
  //     $(this).addClass("add-limit");
  //   }

  //   /*------------------Límite inferior del botón paso siguiente-----------------*/
  //   if (currentStep > 0) {
  //     $(".js-previous-step").removeClass("previous-limit");
  //   }

  //   if (
  //     !$(
  //       ".l-catalogo__container__rows--one .m-steps .step-" + nextStep
  //     ).hasClass("loaded")
  //   ) {
      

  //     /*Check info has already been loaded */
  //     $(
  //       ".l-catalogo__container__rows--one .m-steps .step-" + nextStep
  //     ).addClass("loaded");

  //     //$(this).attr('data-next-to-load', "");
  //   }



  //   /*----------------------get the array index to load all the compatible components -----------------------*/

  //   var arrayToLoad = '';
  //   var compatibleProductsArrayDepth = $(this).data("next-to-load");
  //   var SelecionMarca = $(".m-steps").data("gama");

  //   switch (nextStep) {
  //     case 1:
  //       arrayToLoad = ''
  //       break;
  //     case 2:
  //       arrayToLoad = SelecionMarca + "['tarjetas_madre'][" + compatibleProductsArrayDepth + "]";
  //       break;
  //     case 3:
  //       titulo.html("Placa Madre");
  //       break;
  //     case 4:
  //       titulo.text("Gabinete");
  //       break;
  //     case 5:
  //       titulo.text("Memoria RAM");
  //       break;
  //     case 6:
  //       titulo.text("Tarjeta de video");
  //       break;
  //     case 7:
  //       titulo.text("Ventiladores");
  //       break;
  //     case 8:
  //       titulo.text("Tarjeta de Red");
  //       break;
  //     case 9:
  //       titulo.text("Almacenamiento");
  //       break;
  //     case 10:
  //       titulo.text("Fuente de poder");
  //       break;
  //     case 11:
  //       titulo.text("Accesorios");
  //       break;
  //     default:
  //   }

  //   console.log('el Array a cargar en el paso siguiente es: ' + arrayToLoad );

  //   $.each( eval(arrayToLoad), function (i, val) {
  //     outputProductCart(i, val, nextStep);
  //   });

  // });

  // $(".js-previous-step").on("click", function (e) {
  //   //var contenedorProductos = $(".l-container-products");
  //   var contenedorProductos = $(".m-steps");
  //   var currentStep = $(this).parent().data("current-step");
  //   var previousStep = currentStep - 1;
  //   var pagina = $(".js-pagina");
  //   //var contenedorDetalles = $(".m-steps");
  //   var titulo = $(".js-tituloCat");

  //   if (!$(this).hasClass("previous-limit")) {
  //     $(
  //       ".l-catalogo__container__rows--one .m-steps .step, .l-catalogo__container__rows--two .m-steps .step"
  //     ).removeClass("active-c"); //rest active
  //   }

  //   //console.log(currentStep, previousStep)

  //   if (currentStep > 1) {
  //     contenedorProductos.removeClass("step-" + currentStep);
  //     contenedorProductos.addClass("step-" + previousStep);

  //     if (!$(this).hasClass("previous-limit")) {
  //       $(
  //         ".l-catalogo__container__rows--one .m-steps .step-" +
  //         previousStep +
  //         ", .l-catalogo__container__rows--two .m-steps .step-" +
  //         previousStep +
  //         ""
  //       ).addClass("active-c"); //animate the current step
  //     }

  //     $(this).parent().data("current-step", previousStep);
  //     pagina.html(previousStep);

  //     /*contenedorDetalles.removeClass("step-"+ currentStep);
  //   contenedorDetalles.addClass("step-"+ previousStep);*/
  //     contenedorProductos.data("current-step", previousStep);
  //   }

  //   if (currentStep <= 11) {
  //     $(".js-next-step").removeClass("add-limit");
  //     //console.log("dentro del limite");
  //   }

  //   if (previousStep === 1) {
  //     $(this).addClass("previous-limit");
  //   }

  //   switch (previousStep) {
  //     case 1:
  //       titulo.text("Procesador");
  //       break;
  //     case 2:
  //       titulo.text("Titulo 2");
  //       break;
  //     case 3:
  //       titulo.text("Placa Madre");
  //       break;
  //     case 4:
  //       titulo.text("Gabinete");
  //       break;
  //     case 5:
  //       titulo.text("Memoria RAM");
  //       break;
  //     case 6:
  //       titulo.text("Tarjeta de video");
  //       break;
  //     case 7:
  //       titulo.text("Ventiladores");
  //       break;
  //     case 8:
  //       titulo.text("Tarjeta de Red");
  //       break;
  //     case 9:
  //       titulo.text("Almacenamiento");
  //       break;
  //     case 10:
  //       titulo.text("Fuente de poder");
  //       break;
  //     case 11:
  //       titulo.text("Accesorios");
  //       break;
  //     default:
  //   }
  // });

  $(".js-open-video").on("click", function (e) {
    $("#contenedorVideo").addClass("mostrar");
    $("body").addClass("no-scroll");

    setTimeout(function () {
      $("#video").addClass("mostrar");
    }, 500);
  });

  $(".js-close-row-two").on("click", function (e) {
    $(".l-catalogo__container__rows--two").removeClass("open-row-two");
    $(".l-catalogo__container__rows--two").addClass("close-row-two");
    if ($(".js-add-product").hasClass("added")) {
    } else {
      $(".js-select-product-mobile").parent().removeClass("selected");
    }

    setTimeout(function () {
      $(".l-catalogo__container__rows--two").addClass("close-row-two");
      $("body").removeClass("no-scroll");
    }, 300);
  });

  $(".js-default-pc-btn.opcion-1").on("click", function (e) {
    $(".l-catalogo").addClass("show");
    $("body").addClass("no-scroll");
    $(".m-products__item").removeClass("selected");

    setTimeout(function () {
      $(".l-catalogo__container").addClass("show");
    }, 500);

    $("#resumen").addClass("show");
    if ($("#resumen").hasClass("show")) {
      $(".background").css({ display: "block" });
    } else {
      $(".background").css({ display: "none" });
    }

    /*-------------------------------------------------------------*/

    $(".l-catalogo__container__rows--three").addClass("show");
    $(".open").addClass("abierto");

    /*------------------------------------------------------------*/

    var contenedorComponente1 = $("#componente1-1").parent();
    var contenedorComponente2 = $("#componente2-1").parent();
    var contenedorComponente3 = $("#componente3-1").parent();
    var contenedorComponente9 = $("#componente9-1").parent();

    var componenteNombre_1 = $("#componente1-1").data("name");
    var componenteNombre_2 = $("#componente2-1").data("name");
    var componenteNombre_3 = $("#componente3-1").data("name");
    var componenteNombre_4 = $("#componente9-1").data("name");

    var componenteMarca_1 = $("#componente1-1").data("marca");
    var componenteMarca_2 = $("#componente2-1").data("marca");
    var componenteMarca_3 = $("#componente3-1").data("marca");
    var componenteMarca_4 = $("#componente9-1").data("marca");

    var componenteModelo_1 = $("#componente1-1").data("modelo");
    var componenteModelo_2 = $("#componente2-1").data("modelo");
    var componenteModelo_3 = $("#componente3-1").data("modelo");
    var componenteModelo_4 = $("#componente9-1").data("modelo");

    var componentePrecio_1 = $("#componente1-1").data("precio");
    var componentePrecio_2 = $("#componente2-1").data("precio");
    var componentePrecio_3 = $("#componente3-1").data("precio");
    var componentePrecio_4 = $("#componente9-1").data("precio");

    var componenteImage_1 = $("#componente1-1").data("imgurl");
    var componenteImage_2 = $("#componente2-1").data("imgurl");
    var componenteImage_3 = $("#componente3-1").data("imgurl");
    var componenteImage_4 = $("#componente9-1").data("imgurl");

    var componentes = [
      (componente1 = {
        imagen: componenteImage_1,
        nombre: componenteNombre_1,
        precio: componentePrecio_1,
        modelo: componenteModelo_1,
        marca: componenteMarca_1,
      }),
      (componente2 = {
        imagen: componenteImage_2,
        nombre: componenteNombre_2,
        precio: componentePrecio_2,
        modelo: componenteModelo_2,
        marca: componenteMarca_2,
      }),
      (componente3 = {
        imagen: componenteImage_3,
        nombre: componenteNombre_3,
        precio: componentePrecio_3,
        modelo: componenteModelo_3,
        marca: componenteMarca_3,
      }),
      (componente4 = {
        imagen: componenteImage_4,
        nombre: componenteNombre_4,
        precio: componentePrecio_4,
        modelo: componenteModelo_4,
        marca: componenteMarca_4,
      }),
    ];

    componentes.forEach(function (componente, index) {
      var nuevoIndex = index + 1;
      var segundaColumna = $(".step-" + nuevoIndex + ".m-row-two");
      var segundaColumnaImg = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__img"
      );
      var segundaColumnaNombre = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__nombre"
      );
      var segundaColumnaMarca = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__marca"
      );
      var segundaColumnaModelo = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__modelo"
      );

      var addButton = $(".js-add-product");

      $("#step-" + nuevoIndex + ".m-component").addClass("selected");
      contenedorComponente1.addClass("selected");
      contenedorComponente2.addClass("selected");
      contenedorComponente3.addClass("selected");
      contenedorComponente9.addClass("selected");

      segundaColumna.addClass("active");
      segundaColumnaImg.attr("src", componente.imagen);
      segundaColumnaNombre.html(componente.nombre);
      segundaColumnaMarca.html(componente.marca);
      segundaColumnaModelo.html(componente.modelo);

      addButton.addClass("added");

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__imagen"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__imagen"
      ).css("background-image", "url(" + componente.imagen + ")");

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__nombre"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__nombre"
      ).html(componente.nombre);

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__precio"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__precio"
      ).html("$" + componente.precio);

      var precio_1 = parseFloat($("#componente1-1").data("precio")) || 0;
      var precio_2 = parseFloat($("#componente2-1").data("precio")) || 0;
      var precio_3 = parseFloat($("#componente3-1").data("precio")) || 0;
      var precio_4 = parseFloat($("#componente9-1").data("precio")) || 0;

      var precioTotal = precio_1 + precio_2 + precio_3 + precio_4;
      var precioTotalContenedor = $(".m-component__precioTotal");

      precioTotalContenedor.text("$" + precioTotal);
    });

    $(".js-close-catalogo").on("click", function (e) {
      $(".m-products__item").removeClass("selected");
      $(".js-add-product").removeClass("added");
      $(".m-row-two").removeClass("active");
    });
  });

  $(".js-default-pc-btn.opcion-2").on("click", function (e) {
    $(".l-catalogo").addClass("show");
    $("body").addClass("no-scroll");
    $(".m-products__item").removeClass("selected");

    setTimeout(function () {
      $(".l-catalogo__container").addClass("show");
    }, 500);

    $("#resumen").addClass("show");
    if ($("#resumen").hasClass("show")) {
      $(".background").css({ display: "block" });
    } else {
      $(".background").css({ display: "none" });
    }

    /*-------------------------------------------------------------*/

    $(".l-catalogo__container__rows--three").addClass("show");
    $(".open").addClass("abierto");

    /*------------------------------------------------------------*/

    var contenedorComponente1 = $("#componente1-2").parent();
    var contenedorComponente2 = $("#componente2-2").parent();
    var contenedorComponente3 = $("#componente3-2").parent();
    var contenedorComponente9 = $("#componente9-2").parent();

    var componenteNombre_1 = $("#componente1-2").data("name");
    var componenteNombre_2 = $("#componente2-2").data("name");
    var componenteNombre_3 = $("#componente3-2").data("name");
    var componenteNombre_4 = $("#componente9-2").data("name");

    var componenteMarca_1 = $("#componente1-2").data("marca");
    var componenteMarca_2 = $("#componente2-2").data("marca");
    var componenteMarca_3 = $("#componente3-2").data("marca");
    var componenteMarca_4 = $("#componente9-2").data("marca");

    var componenteModelo_1 = $("#componente1-2").data("modelo");
    var componenteModelo_2 = $("#componente2-2").data("modelo");
    var componenteModelo_3 = $("#componente3-2").data("modelo");
    var componenteModelo_4 = $("#componente9-2").data("modelo");

    var componentePrecio_1 = $("#componente1-2").data("precio");
    var componentePrecio_2 = $("#componente2-2").data("precio");
    var componentePrecio_3 = $("#componente3-2").data("precio");
    var componentePrecio_4 = $("#componente9-2").data("precio");

    var componenteImage_1 = $("#componente1-2").data("imgurl");
    var componenteImage_2 = $("#componente2-2").data("imgurl");
    var componenteImage_3 = $("#componente3-2").data("imgurl");
    var componenteImage_4 = $("#componente9-2").data("imgurl");

    var componentes = [
      (componente1 = {
        imagen: componenteImage_1,
        nombre: componenteNombre_1,
        precio: componentePrecio_1,
        modelo: componenteModelo_1,
        marca: componenteMarca_1,
      }),
      (componente2 = {
        imagen: componenteImage_2,
        nombre: componenteNombre_2,
        precio: componentePrecio_2,
        modelo: componenteModelo_2,
        marca: componenteMarca_2,
      }),
      (componente3 = {
        imagen: componenteImage_3,
        nombre: componenteNombre_3,
        precio: componentePrecio_3,
        modelo: componenteModelo_3,
        marca: componenteMarca_3,
      }),
      (componente4 = {
        imagen: componenteImage_4,
        nombre: componenteNombre_4,
        precio: componentePrecio_4,
        modelo: componenteModelo_4,
        marca: componenteMarca_4,
      }),
    ];

    componentes.forEach(function (componente, index) {
      var nuevoIndex = index + 1;
      var segundaColumna = $(".step-" + nuevoIndex + ".m-row-two");
      var segundaColumnaImg = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__img"
      );
      var segundaColumnaNombre = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__nombre"
      );
      var segundaColumnaMarca = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__marca"
      );
      var segundaColumnaModelo = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__modelo"
      );

      var addButton = $(".js-add-product");

      $("#step-" + nuevoIndex + ".m-component").addClass("selected");
      contenedorComponente1.addClass("selected");
      contenedorComponente2.addClass("selected");
      contenedorComponente3.addClass("selected");
      contenedorComponente9.addClass("selected");

      segundaColumna.addClass("active");
      segundaColumnaImg.attr("src", componente.imagen);
      segundaColumnaNombre.html(componente.nombre);
      segundaColumnaMarca.html(componente.marca);
      segundaColumnaModelo.html(componente.modelo);

      addButton.addClass("added");

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__imagen"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__imagen"
      ).css("background-image", "url(" + componente.imagen + ")");

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__nombre"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__nombre"
      ).html(componente.nombre);

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__precio"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__precio"
      ).html("$" + componente.precio);

      var precio_1 = parseFloat($("#componente1-2").data("precio")) || 0;
      var precio_2 = parseFloat($("#componente2-2").data("precio")) || 0;
      var precio_3 = parseFloat($("#componente3-2").data("precio")) || 0;
      var precio_4 = parseFloat($("#componente9-2").data("precio")) || 0;

      var precioTotal = precio_1 + precio_2 + precio_3 + precio_4;
      var precioTotalContenedor = $(".m-component__precioTotal");

      precioTotalContenedor.text("$" + precioTotal);
    });

    $(".js-close-catalogo").on("click", function (e) {
      $(".m-products__item").removeClass("selected");
      $(".js-add-product").removeClass("added");
      $(".m-row-two").removeClass("active");
    });
  });

  $(".js-default-pc-btn.opcion-3").on("click", function (e) {
    $(".l-catalogo").addClass("show");
    $("body").addClass("no-scroll");
    $(".m-products__item").removeClass("selected");

    setTimeout(function () {
      $(".l-catalogo__container").addClass("show");
    }, 500);

    $("#resumen").addClass("show");
    if ($("#resumen").hasClass("show")) {
      $(".background").css({ display: "block" });
    } else {
      $(".background").css({ display: "none" });
    }

    /*-------------------------------------------------------------*/

    $(".l-catalogo__container__rows--three").addClass("show");
    $(".open").addClass("abierto");

    /*------------------------------------------------------------*/

    var contenedorComponente1 = $("#componente1-3").parent();
    var contenedorComponente2 = $("#componente2-3").parent();
    var contenedorComponente3 = $("#componente3-3").parent();
    var contenedorComponente9 = $("#componente9-3").parent();

    var componenteNombre_1 = $("#componente1-3").data("name");
    var componenteNombre_2 = $("#componente2-3").data("name");
    var componenteNombre_3 = $("#componente3-3").data("name");
    var componenteNombre_4 = $("#componente9-3").data("name");

    var componenteMarca_1 = $("#componente1-3").data("marca");
    var componenteMarca_2 = $("#componente2-3").data("marca");
    var componenteMarca_3 = $("#componente3-3").data("marca");
    var componenteMarca_4 = $("#componente9-3").data("marca");

    var componenteModelo_1 = $("#componente1-3").data("modelo");
    var componenteModelo_2 = $("#componente2-3").data("modelo");
    var componenteModelo_3 = $("#componente3-3").data("modelo");
    var componenteModelo_4 = $("#componente9-3").data("modelo");

    var componentePrecio_1 = $("#componente1-3").data("precio");
    var componentePrecio_2 = $("#componente2-3").data("precio");
    var componentePrecio_3 = $("#componente3-3").data("precio");
    var componentePrecio_4 = $("#componente9-3").data("precio");

    var componenteImage_1 = $("#componente1-3").data("imgurl");
    var componenteImage_2 = $("#componente2-3").data("imgurl");
    var componenteImage_3 = $("#componente3-3").data("imgurl");
    var componenteImage_4 = $("#componente9-3").data("imgurl");

    var componentes = [
      (componente1 = {
        imagen: componenteImage_1,
        nombre: componenteNombre_1,
        precio: componentePrecio_1,
        modelo: componenteModelo_1,
        marca: componenteMarca_1,
      }),
      (componente2 = {
        imagen: componenteImage_2,
        nombre: componenteNombre_2,
        precio: componentePrecio_2,
        modelo: componenteModelo_2,
        marca: componenteMarca_2,
      }),
      (componente3 = {
        imagen: componenteImage_3,
        nombre: componenteNombre_3,
        precio: componentePrecio_3,
        modelo: componenteModelo_3,
        marca: componenteMarca_3,
      }),
      (componente4 = {
        imagen: componenteImage_4,
        nombre: componenteNombre_4,
        precio: componentePrecio_4,
        modelo: componenteModelo_4,
        marca: componenteMarca_4,
      }),
    ];

    componentes.forEach(function (componente, index) {
      var nuevoIndex = index + 1;
      var segundaColumna = $(".step-" + nuevoIndex + ".m-row-two");
      var segundaColumnaImg = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__img"
      );
      var segundaColumnaNombre = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__nombre"
      );
      var segundaColumnaMarca = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__marca"
      );
      var segundaColumnaModelo = $(
        ".m-row-two.step-" + nuevoIndex + " .m-row-two__modelo"
      );

      var addButton = $(".js-add-product");

      $("#step-" + nuevoIndex + ".m-component").addClass("selected");
      contenedorComponente1.addClass("selected");
      contenedorComponente2.addClass("selected");
      contenedorComponente3.addClass("selected");
      contenedorComponente9.addClass("selected");

      segundaColumna.addClass("active");
      segundaColumnaImg.attr("src", componente.imagen);
      segundaColumnaNombre.html(componente.nombre);
      segundaColumnaMarca.html(componente.marca);
      segundaColumnaModelo.html(componente.modelo);

      addButton.addClass("added");

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__imagen"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__imagen"
      ).attr("src", componente.imagen);

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__nombre"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__nombre"
      ).html(componente.nombre);

      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__precio"
      ).html();
      $(
        "#step-" + nuevoIndex + ".m-component.selected .m-component__precio"
      ).html("$" + componente.precio);

      var precio_1 = parseFloat($("#componente1-3").data("precio")) || 0;
      var precio_2 = parseFloat($("#componente2-3").data("precio")) || 0;
      var precio_3 = parseFloat($("#componente3-3").data("precio")) || 0;
      var precio_4 = parseFloat($("#componente9-3").data("precio")) || 0;

      var precioTotal = precio_1 + precio_2 + precio_3 + precio_4;
      var precioTotalContenedor = $(".m-component__precioTotal");

      precioTotalContenedor.text("$" + precioTotal);
    });

    $(".js-close-catalogo").on("click", function (e) {
      $(".m-products__item").removeClass("selected");
      $(".js-add-product").removeClass("added");
      $(".m-row-two").removeClass("active");
    });
  });

  $(".js-help").on("click", function () {
    $(".l-catalogo__container").removeClass("show");

    setTimeout(function () {
      $(".l-catalogo").removeClass("show");
      $("body").removeClass("no-scroll");
    }, 300);

    var posicionDestino = $(".l-section-pc-tutorials").offset().top;
    $("html, body").animate({ scrollTop: posicionDestino }, "slow");

    $(".back-to").css({ display: "flex" });
  });

  $(".back-to").on("click", function () {
    $(".l-catalogo").addClass("show");
    $("body").addClass("no-scroll");

    setTimeout(function () {
      $(".l-catalogo__container").addClass("show");
    }, 500);

    var posicionDestino = $(".l-section-pc-tutorials").offset().top;
    $("html, body").animate({ scrollTop: posicionDestino }, "slow");

    $(".back-to").css({ display: "none" });
  });

  function outputProductCart(i, val, nextStep) {
    var tarjetaProducto =
      " <div class='m-products__item'> <div class='m-products__item__info'> <div class='m-products__item__info__img' style='background-image: url(" +
      val.ImageUrl +
      ")'> </div> <p class='m-products__item__info__nombre'> " +
      val.Titulo +
      " </p> <p class='m-products__item__info__precio'> " +
      val.Precio +
      " </p> </div>  <div class= 'm-products__item__btn js-select-product' data-name='" +
      val.Titulo +
      "' data-precio='" +
      val.Precio +
      "' data-imgurl='" +
      val.ImagenUrl +
      "' data-modelo='Modelo' data-step-index=" +
      i +
      "> <span>Ver Info</span><span>Visualizando</span> </div>  </div> ";

    $(
      ".l-catalogo__container__rows--one .m-steps .step-" +
      nextStep +
      " .m-products"
    ).append(tarjetaProducto);
  }

  /*var ArregloPrueba = [1, 2, [4, 5, 6]];

  var ArregloPruebaConsola = ArregloPrueba[2][0];
  
  console.log("Arreglo Prueba: "+ArregloPruebaConsola);
  console.log(gamaBajaIntel[0][0]);*/

  //ending
});
