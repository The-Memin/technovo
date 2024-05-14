jQuery(document).ready(function($) {

    let step = 0;
    let steps = [];
    let itemSelected = false;
    let computer=[];
    let compatibilidades = []
    const pages = ['Procesador', 'Tarjeta Madre', 'Memoria Ram', 'Enfriamiento','Gabinetes']
    
    $(".js-next-step").click(function (e) { 
        
        $(this).addClass('add-limit')
        
        if (step == 0 && itemSelected) {
            $(".js-previous-step").removeClass("previous-limit");
        }
        if( itemSelected) {
            setNewStep(compatibilidades, step);
            if (step<4) 
                step++;
            $(".js-pagina").html(step+1);
            $(".js-tituloCat").html(pages[step]);
        }
        if (computer[step] != null) {
            setDataInrow(step);
        }
        itemSelected = (computer[step] != null);
        if (itemSelected) {
            $(".js-next-step").removeClass("add-limit");
        }
    });

    $(".js-previous-step").click(function (e) { 
        if (step != 0) {
            elements = compatibilidades[step-1];
            if (step-1 == 0) {
                elements = JSON.parse(localStorage.getItem('procesadores'));
                $(".js-previous-step").addClass('previous-limit');
            }
            $(".m-products").empty();
            $(".m-row-two__inactive").removeClass('none');
            $(".m-row-two__active").removeClass('active');
            makeCards(elements)
            $(".js-pagina").html(step);
            $(".js-tituloCat").html(pages[step]);
            
            setDataInrow(step-1);
            step--;
            itemSelected = (computer[step] != null);
            if (itemSelected) {
                $(".js-next-step").removeClass("add-limit");
            }
        }
    });

    function setNewStep(compatibilidades, step) {
        $(".m-products").empty();
        $(".m-row-two__inactive").removeClass('none');
        $(".m-row-two__active").removeClass('active');
        makeCards(compatibilidades[step+1])
        itemSelected=false;
    }


    $(".m-products").on('click', '.js-select-product', function(e) {
        const name = $(this).data('name');
        const type = $(this).data('type');
        if ($(this).hasClass('selected')) {
            $(this).parent('.m-products__item').removeClass('selected');
            $(this).removeClass('selected');
            $(".m-row-two__inactive").removeClass('none');
            $(".m-row-two__active").removeClass('active');
        } else {
            $('.m-products .js-select-product').parent('.m-products__item').removeClass('selected');
            $(this).parent('.m-products__item').addClass('selected');
            $('.m-products .js-select-product').removeClass('selected');
            $(this).addClass('selected');
            $(".m-row-two__inactive").addClass('none');
            $(".m-row-two__active").addClass('active');
            setDataProduct(name, type)
        }

    });

    function setDataProduct(name, other) {
        $(".m-row-two__nombre").html(name);
        $(".m-row-two__other").html(other);
    }

    $(".js-add-product").click(function (e) { 
        const cardSelected = $(".js-select-product.selected")
        const cardId = cardSelected.data('id');
        const productId = cardSelected.data('productid');
        $(".js-select-product").removeClass("this");
        $(cardSelected).addClass("this");
        $(".js-next-step").removeClass("add-limit");
        $(".l-catalogo__container__rows--three").addClass("show");
        $(".js-open-resumen").addClass("abierto");
        $(".background").css('display', 'block');

        if (step == 0) {
            let confirmacion = false;
            if (computer[0] != null && computer[0].id!= productId && computer[1]!= null) {
                confirmacion = confirm('Todos sus componentes dependen de la eleccion del procesador, al cambiar de procesador, se borrara su lista de componentes. ¿Esta seguro de realizar esta accion?')
            }
            if (confirmacion || computer[1] == null) {
                if (confirmacion) {
                    deleteComponents();
                }
                var data = {
                    'action': 'get_gbi_compatibles',
                    'id': cardId,
                };
                $.post(ajax_object.ajax_url, data, function(response) {
                    compatibilidades = JSON.parse(response);
                    addProductToList(cardSelected);
                    console.log(compatibilidades)
                });
            }
            
        }
        else{
            addProductToList(cardSelected);
        }
        
        itemSelected= true;
    });

    function addProductToList(product) {
        let precio = product.data('precio');

        $(`#item-${step}`).addClass('selected');
        $(`#item-${step} h3.product .product__name`).html(product.data('name'));
        $(`#item-${step} h3.product .product__price`).html(formatearNumero(precio));
        const cardId = product.data('productid');
        const productPrecio = product.data('precio');
        computer[step] = {id: cardId, precio: productPrecio};
        $('.m-component__precioTotal').html(formatearNumero(calcPrecio()));
    }

    function deleteComponents() {
        computer = []
        $('.m-item-list').removeClass('selected');
        $('.m-item-list h3.product span').html('');
    }

    function calcPrecio() {
        let precio = 0;
        computer.forEach(element =>{
            console.log(element.precio)
            precio += parseFloat(element.precio);
        })
        return precio;
    }

    function makeCards(arr) {
        arr.forEach( (item, index )=> {
            let cardProduct = ` 
            <div class='m-products__item' data-type='procesador' data-id='${item.ID}'> 
                <div class='m-products__item__info'> 
                    <div class='m-products__item__info__img' style='background-image: url("${item.ImageUrl}")'> </div> 
                    <p class='m-products__item__info__nombre'>  ${item.Titulo} </p> 
                    <p class='m-products__item__info__precio'> ${formatearNumero(item.Precio)} </p> 
                </div>  
                <div class= 'm-products__item__btn js-select-product' 
                    data-name='${item.Titulo}' }
                    data-precio='${item.Precio}' 
                    data-imgurl='${item.ImagenUrl}' 
                    data-type='${item.type}' 
                    data-productid='${item.productid}'
                    data-id="${item.ID}"> 
                        <span>Ver Info </span>
                        <span>Visualizando</span> 
                </div>  
            </div> `;

            $(".l-catalogo__container__rows--one .m-steps .step-1 .m-products").append(cardProduct);
        })
    }

    function formatearNumero(cadenaNumero) {
        let numero = parseFloat(cadenaNumero);
        if (isNaN(numero)) {
            return 'Sin precio aun'
        }

        let opciones = {
            style: 'currency',
            currency: 'MXN',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        };
        let formateador = new Intl.NumberFormat('en-US', opciones);
        return formateador.format(numero).replace('MX', '').trim() + ' MN';
    }

    $(".js-close-catalogo").click(function (e) { 
        step = 0;
        $(".m-row-two__inactive").removeClass('none');
        $(".m-row-two__active").removeClass('active');
        $(".js-pagina").html("1");
        $(".js-tituloCat").html("Procesador");
        deleteComponents();
    });


    $('.m-item-list').click(function (e) { 
        if ($(this).hasClass('selected')) {
            console.log($(this).data('step'))
            const currentStep = $(this).data('step');
            let stepProducts = compatibilidades[currentStep]
            if (currentStep == 0) {
                stepProducts = JSON.parse(localStorage.getItem('procesadores'));
                $(".js-previous-step").addClass('previous-limit');
            }
            $(".m-products").empty();
            $(".m-row-two__inactive").removeClass('none');
            $(".m-row-two__active").removeClass('active');
            $(".l-catalogo__container__rows--three").removeClass("show");
            $(".js-open-resumen").removeClass("abierto");
            $(".background").css('display', 'none');
            
            makeCards(stepProducts);
            
            step = currentStep;
            setDataInrow(step);
            if (step > 0) {
                $('.js-previous-step').removeClass('previous-limit');
            }
            itemSelected = (computer[step] != null);
            if (itemSelected) {
                $(".js-next-step").removeClass("add-limit");
            }
            $(".js-pagina").html(step+1);
            $(".js-tituloCat").html(pages[step]);
        }
    });

    function setDataInrow(currentStep) {
        const currentItem = $(`.m-products__item__btn[data-productid="${computer[currentStep].id}"]`)
        const currentItemParent = currentItem.parent('.m-products__item');
        const name = currentItem.data('name');
        const type = currentItem.data('type');
        $(currentItem).addClass('selected');
        $(currentItemParent).addClass('selected');

        $(".m-row-two__inactive").addClass('none');
        $(".m-row-two__active").addClass('active');
        setDataProduct(name, type)
    }
});