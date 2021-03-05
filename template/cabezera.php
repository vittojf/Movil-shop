<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <link rel="stylesheet" href="style/bootstrap.min.css" />

    <link rel="stylesheet" href="style/style.css" />
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="js/into.js" type="text/javascript"></script>

    <script src="https://kit.fontawesome.com/c928b353cd.js" crossorigin="anonymous"></script>
    <title>Document</title>




</head>

<body class="bg-warning ">
    


</div>
<script>
$(window).on("load",function(){
    $("body").fadeIn(1000);
});

</script>
    <!--CABEZERA -->


    <header class=" bg-primary stickyheader shadow " id="header">

        <nav class=" container navbar navbar-expand-lg navbar-dark bg-primary ">
            <a class="navbar-brand font" href="#">
                <h1>Móvil Shop</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">

                    <li class="nav-item mr-5 ">
                        <a class="nav-link text-light" href="index.php">Inicio <span
                                class="sr-only">(current)</span></a>
                    </li>


                    <li class="nav-item dropdown mr-4" id="mydropdown">
                        <a class="nav-link dropdown-toggle text-light"  data-toggle="dropdown"  href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Productos</a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="bajar">
                            <a class="dropdown-item dropdown-item-perso" href="productos.php?modulo=telefonos">Teléfonos</a>
                            <a class="dropdown-item dropdown-item-perso" href="accesorio.php">Accesorios</a>

                        </div>
                    </li>

                    <li class="nav-item mr-5  ">
                        <a class="nav-link text-light" href="index.php?modulo=nosotros">Sobre Nosotros</a>
                    </li>
             
                    <li class="nav-item mr-5">


                        <div class="dropdown">
                            <button class="btn text-light " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg width="2em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-fill"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                                <span class="badge badge-danger position-absolute" style="margin-right:50px;"
                                    id="badgeproducto"></span>

                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="listaCarrito">

                            </div>
                        </div>




                    
                    </li>
                </ul>
            </div>
        </nav>
    </header>


