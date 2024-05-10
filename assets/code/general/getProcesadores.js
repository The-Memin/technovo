jQuery(document).ready(function($) {
    
    $('.js-open-catalogo-start').click(function() {
        $(".l-catalogo").addClass("show");
        $("body").addClass("no-scroll");
        let gama = $(this).data('opcion');
        var data = {
            'action': 'get_gbi_pc'
        };
        
        switch (gama) {
            case 'gbi':
                $.post(ajax_object.ajax_url, data, function(response) {
                    // Manejar la respuesta
                    const procesadoresString = JSON.parse(response.procesadores)
                    let procesadores = []

                    procesadoresString.forEach(procesador =>{
                        procesadores.push(JSON.parse(procesador))
                    })
                    makeCards(procesadores)
                    localStorage.setItem('procesadores', JSON.stringify(procesadores));
                });
                break;
        
            default:
                console.log("otra")
                break;
        }

        
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

});
