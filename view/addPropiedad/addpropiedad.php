<?php 
 require_once("../../config/conexion.php");
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-ES" lang="es-ES">

<?php require_once("../MainHead/head.php"); ?>

</head>
<body class="body bg-surface">

    <div class="preload preload-container">
        <div class="boxes ">
            <div class="box">
                <div></div> <div></div> <div></div> <div></div>
            </div>
            <div class="box">
                <div></div> <div></div> <div></div> <div></div>
            </div>
            <div class="box">
                <div></div> <div></div> <div></div> <div></div>
            </div>
            <div class="box">
                <div></div> <div></div> <div></div> <div></div>
            </div>
        </div>
    </div>
    
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="layout-wrap">
                
            <?php require_once("../MainHeader/header.php"); ?>
                
                <!-- sidebar dashboard -->
            <?php require_once("../SidebarMenu/sidebarMenu.php"); ?>
                <!-- end sidebar dashboard -->

                <div class="main-content">
                    <div class="main-content-inner">
                    <form method="post" id="inmueble_form">
                        <div class="button-show-hide show-mb">
                            <span class="body-1">Mostrar Tablero</span>
                        </div>
                        <!-- Ubicación del Inmueble -->
                        <div class="widget-box-2">
                            <h6 class="title">¿Dónde está ubicado tu inmueble?</h6>
                            <div class="box-info-property">
                                <div class="box grid-1 gap-30">
                                    <fieldset class="box-fieldset">
                                        <label for="address">
                                            Ingresa Calle y Número:<span>*</span>
                                        </label>
                                        <input type="text" id="address" name="address" placeholder="Ingresa Calle y Número Completo" required>
                                    </fieldset>
                                </div>
                                <div class="box grid-3 gap-30">
                                    <fieldset class="box-fieldset">
                                            <label for="department">
                                                Departamento:<span>*</span>
                                            </label>
                                            <select name="department_id" id="department_id" class="nice-select nice-select-custom"  required>
                                                <option value="">*</option>
                                            </select>
                                    </fieldset>
                                    <fieldset class="box-fieldset">
                                        <label for="province">
                                            Provincia<span>*</span>
                                        </label>
                                        <select name="province_id" id="province_id" class="nice-select nice-select-custom"  required>
                                            <option value="">*</option>
                                        </select>
                                    </fieldset>
                                    <fieldset class="box-fieldset">
                                        <label for="district">
                                            Distrito:<span>*</span>
                                        </label>
                                        <select name="districts_id" id="districts_id" class="nice-select nice-select-custom"  required>
                                        <option value="">*</option>
                                        </select>
                                    </fieldset>
                                </div>
                                
                                <input type="hidden" id="latitude" name="latitude">
                                 <input type="hidden" id="longitude" name="longitude">

                                <div class="box box-fieldset">
                                    <label for="urbanization">Urbanización:<span>*</span></label>
                                    <div class="box-ip">
                                        <input type="text" id="urbanization" name="urbanization" required>
                                       <a onclick="geocodeAddress()" class="btn-location" ><i class="icon icon-location"></i></a>
                                    </div>
                                    <br>
                                    <h4>¿Cómo quieres mostrar tu ubicación?</h4>
                                    <input type="radio" id="exact" name="locationType" value="exact" checked>
                                    <label for="exact">Exacta</label><br>
                                    <input type="radio" id="approximate" name="locationType" value="approximate">
                                    <label for="approximate">Aproximada</label><br><br>
                                    <br>

                                    <div id="map" class="map"  data-map-zoom="16" data-map-scroll="true"></div>

                                </div>
                            </div>
                        </div>
                        <!-- Ubicación del Inmueble -->
                        <!-- Ingreso del Precio del Inmueble -->
                        <div class="widget-box-2">
                            <h6 class="title">Precio</h6>
                            <div class="box-price-property">
                                <div class="box grid-1 gap-30">
                                    <fieldset class="box-fieldset">
                                        <label for="price">
                                            Precio:<span>*</span>
                                        </label>
                                        <input type="text" class="form-control style-1" placeholder="Ingresar el precio">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <!-- Ingreso del Precio del Inmueble -->
                        <!-- Información Adicional del Inmueble -->
                        <div class="widget-box-2">
                            <h6 class="title">Información Adicional</h6>
                            <div class="box grid-3 gap-30">
                                <fieldset class="box-fieldset">
                                    <label for="type">
                                        Tipo de Propiedad:<span>*</span>
                                    </label>
                                    <select name="tipprod_id" id="tipprod_id" class="nice-select nice-select-custom"  required>
                                        <option value="">*</option>
                                    </select>
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="status">
                                       Subtipo de Propiedad:<span>*</span>
                                    </label>
                                    <select name="tipsubprop_id" id="tipsubprop_id" class="nice-select nice-select-custom"  required>
                                        <option value="">Seleccionar</option>
                                    </select>
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="status">
                                        Tipo de Operación:<span>*</span>
                                    </label>
                                    <select name="tipopera_id" id="tipopera_id" class="nice-select nice-select-custom"  required>
                                        <option value="">Seleccionar</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="box grid-3 gap-30">
                                <fieldset class="box-fieldset">
                                    <label for="size">
                                        Tamaño (pies cuadrados):<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1">
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="land">
                                        Area del terreno (pies cuadrados):<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1">
                                </fieldset>
                            </div>
                            <div class="box grid-3 gap-30">
                                <fieldset class="box-fieldset">
                                    <label for="rom">
                                        Habitaciones:<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1">
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="bedrooms">
                                        Dormitorios:<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1">
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="bathrooms">
                                        Baños:<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1"> 
                                </fieldset>
                            </div>
                            <div class="box grid-3 gap-30">
                                <fieldset class="box-fieldset">
                                    <label for="garages">
                                        Garajes:<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1">
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="garages-size">
                                        Tamaño del Garaje (pies cuadrado):<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1">
                                </fieldset>
                                <fieldset class="box-fieldset">
                                    <label for="year">
                                        Año de Construcción:<span>*</span>
                                    </label>
                                    <input type="text" class="form-control style-1"> 
                                </fieldset>
                            </div>
                        </div>
                        <!-- Información Adicional del Inmueble -->
                        <!-- Subir Imagenes de la Propiedad -->
                        <div class="widget-box-2">
                            <h6 class="title">Subir Medios</h6>
                            <div class="box-uploadfile text-center">
                                <label class="uploadfile">
                                    <span class="icon icon-img-2"></span>
                                    <div class="btn-upload">
                                        <a href="#" class="tf-btn primary">Elegir Imagen</a>
                                        <input type="file" class="ip-file">
                                    </div>
                                    <p class="file-name fw-5">O arrastra la imagen aquí para subirla</p>
                                </label>
                            </div>
                        </div>
                        <!-- Subir Imagenes de la Propiedad -->

                        <a href="#" class="tf-btn primary">Subir Propiedad</a>
                        </form>
                    </div>
                    <div class="footer-dashboard">
                        <p class="text-variant-2">©2024 Homzen. All Rights Reserved.</p>
                    </div>
                </div>

                <div class="overlay-dashboard"></div>

            </div>
        </div>
        <!-- /#page -->

    </div>
    <!-- go top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    <!-- <script type="text/javascript" src="../../assets/js/jquery.min.js"></script> -->
    <script src="../../assets/js/jquery-config.js" async></script>
    <script>
    // Verificación de jQuery
    if (typeof jQuery === 'undefined') {
        console.error('jQuery no está cargado correctamente');
    } else {
        console.log('jQuery version:', jQuery.fn.jquery);
    }
    </script>
    <script type="text/javascript" src="../../assets/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../assets/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../../assets/js/carousel.js"></script>
    <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByjWMGHSx4zHH2A2X1ISaskZxE0FcQfnU&v=weekly&libraries=marker&callback=initMap" ></script>
    <script type="text/javascript" src="../addPropiedad/maps.js"></script>
    <script type="text/javascript" src="../addPropiedad/addPropiedad.js"></script>


<?php require_once ("../MainJs/js.php") ?>

</body>

</html>

