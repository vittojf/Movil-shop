$(document).ready(function () {

    if ($('.telefono').length) {


        $('.telefono').on('click', 'img', function () {

            const id = $(this).attr('alt');
            const action = 'buscar';
            var datacontact = '';
            $.ajax({
                url: 'class/consulta.php',
                type: "POST",
                async: true,
                data: {
                    action: action,
                    id: id
                },
                beforeSend: function () {
                    $('#jsonconsulta').html('<div class="d-flex justify-content-center">  <div class="spinner-border" role="status">  <span class="sr-only">Loading...</span>  </div> </div>');
                },
                success: function (response) {

                    if (id == '') {
                        datacontact = "No Hay telefono Disponibles"

                    } else {
                        datacontact = JSON.parse(response);

                    }
                    $('#jsonconsulta').html(datacontact);

                },
                error: function (error) {
                    console.log(error);
                }



            });
        });
    }

    if ($('#valuephone').length) {

        $('#valuephone').keyup(function () {

            const valorphone = $('#valuephone').val();
            const action = 'tlfnodata';
            var datainfo = '';
            $.ajax({

                url: 'class/busqueda.php',
                type: "POST",
                async: true,
                data: { action: action, valorphone: valorphone },
                beforeSend: function () {
                    $('#jsonconsulta').html('<div class="d-flex justify-content-center">  <div class="spinner-border" role="status">  <span class="sr-only">Loading...</span>  </div> </div>');

                },
                success: function (response) {
                    if (response == 'nodata') {
                        datainfo = "No Hay telefono Disponibles"

                    } else {
                        var info = JSON.parse(response);
                        datainfo = info;
                    }
                    $('#jsonconsulta').html(datainfo);
                },
                error: function (error) { }
            });
        });


    }


    if ($('.detalles').length) {
        $('.detalles').on('click', function () {
            const detalles = $('.detalles').val();
            const action = 'detalles';
            var shodetalles = '';

            $.ajax({

                url: 'class/consulta.php',
                type: "POST",
                async: true,
                data: {
                    action: action,
                    detalles: detalles,
                },

                beforeSend: function () {

                },


                success: function (response) {
                    if (response == 'nodata') {
                        showdetalles = "No hay descripcion"
                    }


                },
            });
        });
    }




    $('#mydropdown').on('show.bs.dropdown', function () {

        $(this).find('.dropdown-menu').slideDown();

    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN-MENU 
    $('#mydropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').slideUp();
    });










});

$(document).ready(function () {
    $.ajax({

        type: "post",
        url: "class/leerCarrito.php",
        dataType: "json",
        success: function (response) {
            llenarCarrito(response);

        }



    });

    $.ajax({
        type: "post",
        url: "class/leerCarrito.php",
        dataType: "json",
        success: function (response) {
            llenarTablaCarrito(response);
        }
    });
    function llenarTablaCarrito(response) {
     
        $("#tablaCarrito").text(" ");
        var TOTAL = 0;
        var CAMBIO = 545394;
        response.forEach(element => {
            var precio = parseFloat(element['precio']);
            var totalProd = element['cantidad'] * precio;

            
           TOTAL = TOTAL + totalProd;
           TOTALBS = TOTAL *CAMBIO;
            $("#tablaCarrito").append(`
            <tr class="bg-white  ">
                <td > <img src="productoimages/${element['img']}"  style="width:100px;" /></td>
                  <td  class="align-middle">${element['nombrep']}</td>
                  <td  class="align-middle">
                  ${element['cantidad']}
                  <button type="button" class="btn-xs btn-primary mas"
                  data-id="${element['id']}"
                  data-tipo="mas">+</button>     
                  
                  <button type="button" class="btn-xs btn-danger menos"
                  data-id="${element['id']}"
                  data-tipo="menos">-</button>  
                  </td>
                  <td  class="align-middle">$${precio.toFixed(2)}</td>
                  <td  class="align-middle">$${totalProd.toFixed(2)}</td>
                  <td  class="align-middle text-danger"><i class="fa fa-trash borrarProducto" type="button"   data-id="${element['id']}"></i></td>
                <tr>
            `);
            
        });
        $("#tablaCarrito").append(`
        <tr >
            <td colspan="4" class="text-right bg-white"> <strong >Total: </strong></td>
            <td class="bg-white ">$${TOTAL}</td>
            
            <tr>
            <tr >
            <td colspan="4" class="text-right bg-white"> <strong >En Bs: </strong></td>
            <td class="bg-white ">Bs.${TOTALBS.toLocaleString('es')}</td>
            
            <tr>
        `);
    }
    $.ajax({
        type: "post",
        url: "class/leerCarrito.php",
        dataType: "json",
        success: function (response) {
            llenarTablaPasarela(response);
        }
    });
    function llenarTablaPasarela(response){
        $("#tablaPasarela").text("");
        var TOTAL=0;
        var CAMBIO = 545394;
        response.forEach(element => {
            var precio=parseFloat(element['precio']);
            var totalProd=element['cantidad']*precio;
            TOTAL=TOTAL+totalProd;
            TOTALBS = TOTAL *CAMBIO;
            
            $("#tablaPasarela").append(
                `
                <tr class="bg-white ">
                    <td><img src="productoimages/${element['img']}"  style="width:100px;"/></td>
                    <td>${element['nombrep']}</td>
                    <td>
                        ${element['cantidad']}
                        <input type="hidden" name="id[]" value="${element['id']}">
                        <input type="hidden" name="cantidad[]" value="${element['cantidad']}">
                        <input type="hidden" name="precio[]" value="${precio.toFixed(2)}">
                    </td>
                    <td>$${precio.toFixed(2)}</td>
                    <td>$${totalProd.toFixed(2)}</td>
                <tr>
                `
            );
        });
        $("#tablaPasarela").append(
            `
            <tr >
            <td colspan="4" class="text-right bg-white"> <strong >Total: </strong></td>
            <td class="bg-white ">$${TOTAL}</td>
            
            <tr>
            <tr >
            <td colspan="4" class="text-right bg-white"> <strong >En Bs: </strong></td>
            <td class="bg-white ">Bs.${TOTALBS.toLocaleString('es')}</td>
            
            <tr>
            `
        );
    }

    $(document).on("click", ".mas, .menos", function(){
       var id=$(this).data('id');
       var tipo=$(this).data('tipo');
       $.ajax({
           type: "post",
           url: "class/cantidadProductos.php",
           data: {"id":id, "tipo":tipo},
           dataType: "json",
           success: function (response) {
               llenarTablaCarrito(response);
               llenarCarrito(response);
               
           }
       });
    });
    $(document).on("click", ".borrarProducto", function(){
        var id=$(this).data('id');
        $.ajax({
            type: "post",
            url: "class/borrarProductoCarrito.php",
            data: {"id":id},
            dataType: "json",
            success: function (response) {
                llenarTablaCarrito(response);
                llenarCarrito(response);
                location.reload();
            }
        });
     });



    //funcion al hacer click al carrito, Agrega el producto en el carrito de compras
    $('#addcart').click(function () {
        var id = $(this).data('id');
        var nombrep = $(this).data('nombrep');
        var img = $(this).data('img');
        var cantidad = $("#cantidad").val();
        var precio = $(this).data('precio');


        $.ajax({
            type: "post",
            url: 'class/agregarCarrito.php',
            data: { "id": id, "nombrep": nombrep, "img": img, "cantidad": cantidad, "precio": precio },
            dataType: "json",
            success: function (response) {
                llenarCarrito(response);
                $("#badgeproducto").hide(200).show(200).hide(200).show(200);
                $("#dropdownMenuButton").click();

            }


        });
    });
    $('.addcart').click(function () {
        var id = $(this).data('id');
        var nombrep = $(this).data('nombrep');
        var img = $(this).data('img');
        var cantidad = $(".cantidad").val();
        var precio = $(this).data('precio');


        $.ajax({
            type: "post",
            url: 'class/agregarCarrito.php',
            data: { "id": id, "nombrep": nombrep, "img": img, "cantidad": cantidad, "precio": precio },
            dataType: "json",
            success: function (response) {
                llenarCarrito(response);
                $("#badgeproducto").hide(200).show(200).hide(200).show(200);
                $("#dropdownMenuButton").click();

            }


        });
    });
    //funcion de la estructura de como se mostrará los productos
    function llenarCarrito(response) {
        var cantidad = Object.keys(response).length;
        if (cantidad > 0) {
            $("#badgeproducto").text(cantidad);
        } else {
            $("#badgeproducto").text("");

        }
        $("#listaCarrito").text("");
        response.forEach(element => {
            $("#listaCarrito").append(
                ` <a class="dropdown-item" href="#">
                  <div class="media">
                  <img src="productoimages/${element['img']}" width="50px" class=" mr-3 img-circle" >
                  <div class="media-body">
                  <h6 class="dropdown-item-title">${element['nombrep']}
                  </h6>
                  <p class="text-sm">Cantidad ${element['cantidad']}</p>
                  </div> 
                  </div>
                  </a>    
                  <div class="dropdown-divider"></div>
         
                  `
            );

        });
        $("#listaCarrito").append(`
        <a href="index.php?modulo=carrito" class="dropdown-item dropdown-footer text-primary text-center" >Ver Carrito
        <i class="fa fa-cart-plus "></i>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer text-danger text-center" id="borrarCarrito" >Borra Carrito
        <i class="fa fa-trash "></i>
        </a>
        `
        );
    }
    $(document).on("click", "#borrarCarrito", function () {

        $.ajax({
            type: "post",
            url: 'class/borrarCarrito.php',
            dataType: "json",
            success: function (response) {
                llenarCarrito(response);
                location.reload();
            }


        });


    });

});


