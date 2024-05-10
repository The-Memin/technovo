jQuery(document).ready(function($) {

    let step = 0;
    let steps = [];
    let itemSelected = false;
    const computer={
        'procesador':"",
        'motherboard':"",
        'ram':""
    }
    let elementsSelected = [];
    let compatibilidades = {}
    const pages = ['Procesador', 'Tarjeta Madre', 'Memoria Ram', 'Enfriamiento']
    $(".js-next-step").click(function (e) { 
        
        const cardSelected = $(".js-select-product.this")
        const cardType = cardSelected.data('type');
        const cardId = cardSelected.data('id');
        $(this).addClass('add-limit')
        if (step == 0 && itemSelected) {
            var data = {
                'action': 'get_gbi_compatibles',
                'type': cardType,
                'id': cardId,
            };
            $.post(ajax_object.ajax_url, data, function(response) {
                compatibilidades = JSON.parse(response);
                steps = [
                    compatibilidades.motherboard.tarjeta_madre, 
                    compatibilidades.ram.memoria_ram,
                    compatibilidades.enfriamientos.enfriamiento
                ]
                setNewStep(step, steps[step]);
                step++;
                $(".js-pagina").html(step+1);
                $(".js-tituloCat").html(pages[step]);
                $(".js-previous-step").removeClass("previous-limit");
            });
        }
        else if(step>0 && itemSelected) {
            setNewStep(step, steps[step]);
            if (step<3) 
                step++;
            $(".js-pagina").html(step+1);
            $(".js-tituloCat").html(pages[step]);
        }
    });

    $(".js-previous-step").click(function (e) { 
        elements = elementsSelected[step-1];
        if (step-1 == 0) {
            elements = JSON.parse(localStorage.getItem('procesadores'));
        }
        gsap.to(".m-products__item", {
            duration: .5, 
            opacity: 0,
            stagger: .4,
            onComplete:()=>{
                $(".m-products").empty();
                $(".m-row-two__inactive").removeClass('none');
                $(".m-row-two__active").removeClass('active');
                makeCards(elements)
                step--;
                itemSelected=false;
            }
        })
        $(".js-pagina").html(step);
        $(".js-tituloCat").html(pages[step-1]);
    });

    function setNewStep(step, items) {
        
        gsap.to(".m-products__item", {
            duration: .5, 
            opacity: 0,
            stagger: .4,
            onComplete:()=>{
                $(".m-products").empty();
                $(".m-row-two__inactive").removeClass('none');
                $(".m-row-two__active").removeClass('active');
                getNextStep(items, step)
            }
        })
        itemSelected=false;
    }

    function getNextStep(arrIds, step) {
        var data = {
            'action': 'get_items_from_wc',
            'ids': arrIds,
        };
        $.post(ajax_object.ajax_url, data, function(response) {
            makeCards(JSON.parse(response));
            elementsSelected[step+1]=JSON.parse(response); 
        });
    }


    $(".m-products").on('click', '.js-select-product', function(e) {
        const name = $(this).data('name');
        const type = $(this).data('type');
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $(".m-row-two__inactive").removeClass('none');
            $(".m-row-two__active").removeClass('active');
        } else {
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
        $(".js-select-product").removeClass("this");
        $(cardSelected).addClass("this");
        itemSelected= true
        $(".js-next-step").removeClass("add-limit");
    });

    function makeCards(arr) {
        arr.forEach( (item, index )=> {
            let cardProduct = ` 
            <div class='m-products__item' data-type='procesador' data-id='${item.ID}'> 
                <div class='m-products__item__info'> 
                    <div class='m-products__item__info__img' style='background-image: url("${item.ImageUrl}")'> </div> 
                    <p class='m-products__item__info__nombre'>  ${item.Titulo} </p> 
                    <p class='m-products__item__info__precio'> ${item.Precio} </p> 
                </div>  
                <div class= 'm-products__item__btn js-select-product' 
                    data-name='${item.Titulo}' }
                    data-precio='${item.Precio}' 
                    data-imgurl='${item.ImagenUrl}' 
                    data-modelo='Modelo' 
                    data-id="${item.ID}"
                    data-type="${item.type}"> 
                        <span>Ver Info</span>
                        <span>Visualizando</span> 
                </div>  
            </div> `;

            $(".l-catalogo__container__rows--one .m-steps .step-1 .m-products").append(cardProduct);
        })
        gsap.from('.m-products__item',{
            duration: 1,
            y:20,
            opacity:0,
            stagger: .3,
        })
    }

    $(".js-close-catalogo").click(function (e) { 
        step = 0;
        $(".m-row-two__inactive").removeClass('none');
        $(".m-row-two__active").removeClass('active');
        $(".js-pagina").html("1");
        $(".js-tituloCat").html("Procesador");
    });
});