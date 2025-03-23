<?php 
 require_once("config/conexion.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-ES" lang="es-ES">
<head >
    <meta charset="utf-8">
    <title>Inmo Experio</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- font -->
   <link rel="stylesheet" href="assets/fonts/fonts.css">
   <!-- Icons -->
   <link rel="stylesheet" href="assets/fonts/font-icons.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet"type="text/css" href="assets/css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/logo/logo_inicio.png">

</head>

<body class="body">
    
    <!-- /preload -->
    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            <header class="main-header fixed-header">
                <div class="header-lower">
                    <div class="row">                      
                        <div class="col-lg-12">         
                            <div class="inner-container d-flex justify-content-between align-items-center">
                                <!-- Logo Box -->
                                <div class="logo-box flex">
                                    <div class="logo"><a href="index.html"><img src="assets/images/logo/logo_titulo.png" alt="logo" width="174" height="44"></a></div>
                                </div>
                                <div class="nav-outer">
                                    <!-- Main Menu -->
                                    <nav class="main-menu show navbar-expand-md">
                                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li class="dropdown2 home current"><a href="#">Sitio</a>
                                                    <ul>
                                                        <li><a href="index.html">Homepage 01</a></li>
                                                        <li class="current"><a href="home-02.html">Homepage 02</a></li>
                                                        <li><a href="home-03.html">Homepage 03</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown2"><a href="#">Departamento</a>
                                                    <ul>
                                                        <li><a href="property-halfmap-grid.html">Property Half Map Grid</a></li>
                                                        <li><a href="property-halfmap-list.html">Property Half Map List</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <!-- Main Menu End-->
                                </div>
                                <div class="header-account">
                                    <div class="register">
                                        <?php 
                                            if(isset($_SESSION["usu_id"])){
                                                echo 
                                                    '<a href="#" class="box-avatar dropdown-toggle" data-bs-toggle="dropdown">'.
                                                        '<div class="avatar avt-40 round">'.
                                                            '<img src="'. $_SESSION["usu_img"] .'" alt="avt">'.
                                                        '</div>'.
                                                        '<p class="name">'. $_SESSION["usu_nom"] .'<span class="icon icon-arr-down"></span></p>'.
                                                        '<p class="name">'.'<strong>DNI: </strong>'. $_SESSION["usu_dni"] . '</p>'.
                                                        '<div class="dropdown-menu">'.
                                                            '<a class="dropdown-item" href="my-favorites.html">Mis avisos</a>'.
                                                            '<a class="dropdown-item" href="my-invoices.html">Interesados</a>'.
                                                            '<a class="dropdown-item" href="my-favorites.html">Mi Actividad</a>'.
                                                            '<a class="dropdown-item" href="usereditprofile.php">Cuenta</a>'.
                                                            '<a class="dropdown-item" href="my-profile.html">Ayuda</a>'.
                                                            '<a class="dropdown-item" href="view/addPropiedad/addpropiedad.php">Subir Propiedad</a>'.
                                                            '<a class="dropdown-item" href="view/components/logout.php">Cerrar Sesión</a>'.
                                                        '</div>'.
                                                    '</a>';
                                            }else{
                                                echo
                                                '<ul class="d-flex">
                                                    <li><a href="#modalLogin" data-bs-toggle="modal">Acceder</a></li>
                                                    '.'<li>/</li>'.'
                                                    <li><a href="#modalRegister" data-bs-toggle="modal">Registrarse</a></li>
                                                </ul>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="mobile-nav-toggler mobile-button"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>       
            <!-- End Main Header -->
            <!-- Slider -->
            <section class="flat-slider home-2">
                <div class="container relative">
                    <div class="row">    
                        <div class="col-xl-10">
                            <div class="slider-content">
                                <div class="heading">
                                    <h2 class="title wow fadeIn animationtext clip" data-wow-delay=".2s" data-wow-duration="2000ms">Encuentra un hogar que se ajuste a tus sueños
                                        <br>
                                        <span class="tf-text s1 cd-words-wrapper"> 
                                            <span class="item-text is-visible">Perfectamente</span>
                                            <span class="item-text is-hidden">Hogar de ensueño</span>
                                        </span> 
                                    </h2>
                                    <p class="subtitle body-1 wow fadeIn" data-wow-delay=".8s" data-wow-duration="2000ms">Somos una agencia inmobiliaria que te ayudará a encontrar la mejor residencia con la que sueñas.</p>
                                </div>
                                <div class="flat-tab flat-tab-form">
                                    <ul class="nav-tab-form style-2" role="tablist">
                                        <li class="nav-tab-item" role="presentation">   
                                            <a href="#forRent" class="nav-link-item active"  data-bs-toggle="tab">Alquilar</a>
                                        </li>
                                        <li class="nav-tab-item" role="presentation">
                                            <a href="#forSale" class="nav-link-item" data-bs-toggle="tab">Comprar</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show"  role="tabpanel">
                                            <div class="form-sl">
                                                <form method="post">
                                                    <div class="wd-find-select style-2 shadow-st no-left-round">
                                                        <div class="inner-group">
                                                            <div class="form-group-1 search-form form-style">
                                                                <label>Palabra clave</label>
                                                                <input type="text" class="form-control" placeholder="Search Keyword." value="" name="s" title="Search for" required="">
                                                            </div>
                                                            <div class="form-group-2 form-style">
                                                                <label>Ubicación</label>
                                                                <div class="group-ip">
                                                                    <input type="text" class="form-control" placeholder="Search Location" value="" name="s" title="Search for" required="">
                                                                    <a href="#" class="icon icon-location"></a>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-3 form-style">
                                                                <label>Tipo</label>
                                                                <div class="group-select">
                                                                    <div class="nice-select" tabindex="0"><span class="current">All</span>
                                                                        <ul class="list">  
                                                                            <li data-value class="option selected">All</li>                                                        
                                                                            <li data-value="villa" class="option">Villa</li>
                                                                            <li data-value="studio" class="option">Studio</li>
                                                                            <li data-value="office" class="option">Office</li>

                                                                        </ul>
                                                                    </div>
                                                                </div>                                                    
                                                            </div>
                                                            <div class="form-group-4 box-filter">
                                                                <a class="filter-advanced pull-right">
                                                                     <span class="icon icon-faders"></span> 
                                                                     <span class="text-advanced">Advanced</span>                                                                      
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="tf-btn primary" href="#">Search</button>
                                                    </div>
                                                    <div class="wd-search-form">
                                                        <div class="grid-2 group-box group-price">
                                                            <div class="widget-price">
                                                                <div class="box-title-price">
                                                                    <span class="title-price">Price Range</span>
                                                                    <div class="caption-price">
                                                                        <span>from</span>
                                                                        <span id="slider-range-value1" class="fw-7"></span>
                                                                        <span>to</span>
                                                                        <span id="slider-range-value2" class="fw-7"></span>
                                                                    </div>
                                                                </div>
                                                                <div id="slider-range"></div>
                                                                <div class="slider-labels">
                                                                    <div>
                                                                        <input type="hidden" name="min-value" value="">
                                                                        <input type="hidden" name="max-value" value="">                                                                                  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="widget-price">
                                                                <div class="box-title-price">
                                                                    <span class="title-price">Size Range</span>
                                                                    <div class="caption-price">
                                                                        <span>from</span>
                                                                        <span id="slider-range-value01" class="fw-7"></span>
                                                                        <span>to</span>
                                                                        <span id="slider-range-value02" class="fw-7"></span>
                                                                    </div>
                                                                </div>
                                                                <div id="slider-range2"></div>
                                                                <div class="slider-labels">
                                                                <div>                                                                             
                                                                    <input type="hidden" name="min-value2" value="">
                                                                    <input type="hidden" name="max-value2" value="">      
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-2 group-box">
                                                            <div class="group-select grid-2">
                                                                <div class="box-select">
                                                                    <label class="title-select text-variant-1">Rooms</label>
                                                                    <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                        <ul class="list"> 
                                                                            <li data-value="1" class="option">1</li>
                                                                            <li data-value="2" class="option selected">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="4" class="option">4</li>
                                                                            <li data-value="5" class="option">5</li>
                                                                            <li data-value="6" class="option">6</li>
                                                                            <li data-value="7" class="option">7</li>
                                                                            <li data-value="8" class="option">8</li>
                                                                            <li data-value="9" class="option">9</li>
                                                                            <li data-value="10" class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="box-select">
                                                                    <label class="title-select text-variant-1">Bathrooms</label>
                                                                    <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                        <ul class="list"> 
                                                                            <li data-value="1" class="option">1</li>
                                                                            <li data-value="2" class="option selected">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="4" class="option">4</li>
                                                                            <li data-value="5" class="option">5</li>
                                                                            <li data-value="6" class="option">6</li>
                                                                            <li data-value="7" class="option">7</li>
                                                                            <li data-value="8" class="option">8</li>
                                                                            <li data-value="9" class="option">9</li>
                                                                            <li data-value="10" class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="group-select grid-2">
                                                                <div class="box-select">
                                                                    <label class="title-select text-variant-1">Bedrooms</label>
                                                                    <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                        <ul class="list"> 
                                                                            <li data-value="1" class="option">1</li>
                                                                            <li data-value="2" class="option selected">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="4" class="option">4</li>
                                                                            <li data-value="5" class="option">5</li>
                                                                            <li data-value="6" class="option">6</li>
                                                                            <li data-value="7" class="option">7</li>
                                                                            <li data-value="8" class="option">8</li>
                                                                            <li data-value="9" class="option">9</li>
                                                                            <li data-value="10" class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="box-select">
                                                                    <label class="title-select fw-5">Type</label>
                                                                    <div class="nice-select" tabindex="0"><span class="current">2</span>
                                                                        <ul class="list"> 
                                                                            <li data-value="1" class="option">1</li>
                                                                            <li data-value="2" class="option selected">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="4" class="option">4</li>
                                                                            <li data-value="5" class="option">5</li>
                                                                            <li data-value="6" class="option">6</li>
                                                                            <li data-value="7" class="option">7</li>
                                                                            <li data-value="8" class="option">8</li>
                                                                            <li data-value="9" class="option">9</li>
                                                                            <li data-value="10" class="option">10</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                       
                                                        <div class="group-checkbox">
                                                            <div class="text-1">Amenities:</div>
                                                            <div class="group-amenities mt-8 grid-6">
                                                                <div class="box-amenities">
                                                                    <fieldset class="amenities-item">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb1" checked> 
                                                                        <label for="cb1" class="text-cb-amenities">Air Condition</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb2"> 
                                                                        <label for="cb2" class="text-cb-amenities">Cable TV</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb3"> 
                                                                        <label for="cb3" class="text-cb-amenities">Ceiling Height</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb4"> 
                                                                        <label for="cb4" class="text-cb-amenities">Fireplace</label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="box-amenities">
                                                                    <fieldset class="amenities-item">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb5"> 
                                                                        <label for="cb5" class="text-cb-amenities">Disabled Access</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb6" checked> 
                                                                        <label for="cb6" class="text-cb-amenities">Elevator</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb7"> 
                                                                        <label for="cb7" class="text-cb-amenities">Fence</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb8"> 
                                                                        <label for="cb8" class="text-cb-amenities">Garden</label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="box-amenities">
                                                                    <fieldset class="amenities-item">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb9" checked> 
                                                                        <label for="cb9" class="text-cb-amenities">Floor</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb10"> 
                                                                        <label for="cb10" class="text-cb-amenities">Furnishing</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb11" checked> 
                                                                        <label for="cb11" class="text-cb-amenities">Garage</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb12"> 
                                                                        <label for="cb12" class="text-cb-amenities">Pet Friendly</label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="box-amenities">
                                                                    <fieldset class="amenities-item">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb13"> 
                                                                        <label for="cb13" class="text-cb-amenities">Heating</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb14"> 
                                                                        <label for="cb14" class="text-cb-amenities">Intercom</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb15"> 
                                                                        <label for="cb15" class="text-cb-amenities">Parking</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb16"> 
                                                                        <label for="cb16" class="text-cb-amenities">WiFi</label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="box-amenities">
                                                                    <fieldset class="amenities-item">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb17"> 
                                                                        <label for="cb17" class="text-cb-amenities">Renovation</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb18"> 
                                                                        <label for="cb18" class="text-cb-amenities">Security</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb19"> 
                                                                        <label for="cb19" class="text-cb-amenities">Swimming Pool</label>
                                                                    </fieldset>
                                                                    
                                                                </div>
                                                                <div class="box-amenities">
                                                                    <fieldset class="amenities-item">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb20"> 
                                                                        <label for="cb20" class="text-cb-amenities">Window Type</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb21"> 
                                                                        <label for="cb21" class="text-cb-amenities">Search property</label>
                                                                    </fieldset>
                                                                    <fieldset class="amenities-item mt-12">
                                                                        <input type="checkbox" class="tf-checkbox style-1" id="cb22"> 
                                                                        <label for="cb22" class="text-cb-amenities">Construction Year</label>
                                                                    </fieldset>
                                                                </div>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- End Job  Search Form-->
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="wrap-search-link">
                                    <p class="body-1">What are you looking for:</p>
                                    <a href="#" class="current body-1">Apartment,</a>
                                    <a href="#" class="body-1">Villa,</a>
                                    <a href="#" class="body-1">Studio,</a>
                                    <a href="#" class="body-1">House</a>
                                </div>
                                
                            </div>
                        </div>
                         
                            
                    </div>

                </div>
                <div class="img-banner-left">
                    <img src="assets/images/slider/graplic-slider-2.png" alt="img">
                </div>
                <div class="img-banner-right">
                    <div class="swiper slider-sw-home2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slider-home2 img-animation wow">
                                    <img src="assets/images/slider/slider-2.jpg" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-home2">
                                    <img src="assets/images/slider/slider-2-1.jpg" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-home2">
                                    <img src="assets/images/slider/slider-2-2.jpg" alt="images">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-home2">
                                    <img src="assets/images/slider/slider-2-3.jpg" alt="images">
                                </div>
                            </div>
                            
                        </div>

                    </div>
                        
                </div>
            </section> 
            <!-- End Slider -->
            <!-- Categories -->
            <section class="flat-section flat-categories">
                <div class="container">
                    <div class="box-title style-1 wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                        <div class="box-left">
                            <div class="text-subtitle text-primary">Property Type</div>
                            <h4 class="mt-4">Try Searching For</h4>
                        </div>
                        <a href="#" class="btn-view"><span class="text">View All Services</span> <span class="icon icon-arrow-right2"></span> </a>
                    </div>
                    <div class="wrap-categories  wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                        <div class="swiper tf-sw-categories" data-preview-lg="6" data-preview-md="4" data-preview-sm="3" data-space="30">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="homeya-categories">
                                        <div class="icon-box">
                                            <span class="icon icon-apartment"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Apartment</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homeya-categories">
                                        <div class="icon-box">
                                            <span class="icon icon-villa"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Villa</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
    
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homeya-categories active">
                                        <div class="icon-box">
                                            <span class="icon icon-studio"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Studio</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
    
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homeya-categories">
                                        <div class="icon-box">
                                            <p class="icon icon-office"></p>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Office</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
    
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homeya-categories">
                                        <div class="icon-box">
                                            <p class="icon icon-townhouse"></p>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Townhouse</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
    
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homeya-categories">
                                        <div class="icon-box">
                                            <span class="icon icon-commercial"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Commercial</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
    
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="homeya-categories">
                                        <div class="icon-box">
                                            <span class="icon icon-apartment"></span>
                                        </div>
                                        <div class="content text-center">
                                            <h6>Apartment</h6>
                                            <p class="mt-4 text-variant-1">234 Property</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="box-navigation">
                            <div class="navigation style-1 swiper-nav-next nav-next-category"><span class="icon icon-arr-l"></span></div>
                            <div class="navigation style-1 swiper-nav-prev nav-prev-category"><span class="icon icon-arr-r"></span></div> 
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- End Categories -->
            <!-- Service -->
            <section class="flat-section-v3 flat-service-v2 bg-surface">
                <div class="container">
                    <div class="row wrap-service-v2" >
                        <div class="col-lg-6">
                            <div class="box-left wow fadeInLeftSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                                <div class="box-title">
                                    <div class="text-subtitle text-primary">Why Choose Us</div>
                                    <h4 class="mt-4">Discover What Sets Our Real Estate Expertise Apart</h4>
                                </div>
                                <p>At Homeya, our unwavering commitment lies in crafting unparalleled real estate journeys. Our seasoned professionals, armed with extensive market knowledge, walk alongside you through every phase of your property endeavor. We prioritize understanding your unique aspirations, tailoring our expertise to match your vision.</p>
                                <ul class="list-view">
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 15.9947C12.4183 15.9947 16 12.4154 16 8C16 3.58462 12.4183 0.00524902 8 0.00524902C3.58172 0.00524902 0 3.58462 0 8C0 12.4154 3.58172 15.9947 8 15.9947Z" fill="#198754"/>
                                            <path d="M7.35849 12.2525L3.57599 9.30575L4.65149 7.9255L6.97424 9.735L10.8077 4.20325L12.2462 5.19975L7.35849 12.2525Z" fill="white"/>
                                        </svg>
                                        Transparent Partnerships 
                                    </li>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 15.9947C12.4183 15.9947 16 12.4154 16 8C16 3.58462 12.4183 0.00524902 8 0.00524902C3.58172 0.00524902 0 3.58462 0 8C0 12.4154 3.58172 15.9947 8 15.9947Z" fill="#198754"/>
                                            <path d="M7.35849 12.2525L3.57599 9.30575L4.65149 7.9255L6.97424 9.735L10.8077 4.20325L12.2462 5.19975L7.35849 12.2525Z" fill="white"/>
                                        </svg>
                                        Proven Expertise 
                                    </li>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 15.9947C12.4183 15.9947 16 12.4154 16 8C16 3.58462 12.4183 0.00524902 8 0.00524902C3.58172 0.00524902 0 3.58462 0 8C0 12.4154 3.58172 15.9947 8 15.9947Z" fill="#198754"/>
                                            <path d="M7.35849 12.2525L3.57599 9.30575L4.65149 7.9255L6.97424 9.735L10.8077 4.20325L12.2462 5.19975L7.35849 12.2525Z" fill="white"/>
                                        </svg>
                                        Customized Solutions
                                    </li>
                                    <li>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 15.9947C12.4183 15.9947 16 12.4154 16 8C16 3.58462 12.4183 0.00524902 8 0.00524902C3.58172 0.00524902 0 3.58462 0 8C0 12.4154 3.58172 15.9947 8 15.9947Z" fill="#198754"/>
                                            <path d="M7.35849 12.2525L3.57599 9.30575L4.65149 7.9255L6.97424 9.735L10.8077 4.20325L12.2462 5.19975L7.35849 12.2525Z" fill="white"/>
                                        </svg>
                                        Local Area Knowledge
                                    </li>
                                </ul>
                                <a href="contact.html" class="btn-view"><span class="text">Contact Us</span> <span class="icon icon-arrow-right2"></span> </a>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="box-right wow fadeInRightSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                                <div class="box-service style-1 hover-btn-view">
                                    <div class="icon-box">
                                        <span class="icon icon-buy-home"></span>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Buy A New Home</h6>
                                        <p class="description">Explore diverse properties and expert guidance for a seamless buying experience.</p>
                                        <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                                <div class="box-service style-1 hover-btn-view">
                                    <div class="icon-box">
                                        <span class="icon icon-rent-home"></span>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Rent a home</h6>
                                        <p class="description">Explore a diverse variety of listings tailored precisely to suit your unique lifestyle needs.</p>
                                        <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                                <div class="box-service style-1 hover-btn-view">
                                    <div class="icon-box">
                                        <span class="icon icon-sale-home"></span>
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Sell a home</h6>
                                        <p class="description">Showcasing your property's best features for a successful sale.</p>
                                        <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Service -->
            <!-- Testimonial -->
            <section class="flat-section-v2 flat-testimonial-v2  wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="container">
                    <div class="box-title text-center position-relative">
                        <div class="text-subtitle text-white">Our Testimonials</div>
                        <h4 class="mt-4 text-white">What’s people say’s</h4>
                    </div>
                    <div class="swiper tf-sw-testimonial" data-preview-lg="3" data-preview-md="2" data-preview-sm="2" data-space="30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-tes-item style-1">
                                    <ul class="list-star">
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                    </ul>
                                    <p class="note body-1">
                                        "I truly appreciate the professionalism and in-depth knowledge of the brokerage team. They not only helped me find the perfect home but also assisted with legal and financial aspects, making me feel confident and secure in my decision."
                                    </p>
                                    <div class="box-avt d-flex align-items-center gap-12">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/avt-7.jpg" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <div class="h7 fw-7">Liam Anderson</div>
                                            <p class="text-variant-1 mt-4">CEO Digital</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-tes-item style-1">
                                    <ul class="list-star">
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                    </ul>
                                    <p class="note body-1">
                                        "My experience with property management services has exceeded expectations. They efficiently manage properties with a professional and attentive approach in every situation. I feel reassured that any issue will be resolved promptly and effectively."
                                    </p>
                                    <div class="box-avt d-flex align-items-center gap-12">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/avt-5.jpg" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <div class="h7 fw-7">Adam Will</div>
                                            <p class="text-variant-1 mt-4">CEO Agency</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-tes-item style-1">
                                    <ul class="list-star">
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                    </ul>
                                    <p class="note body-1">
                                        "My experience with property management services has exceeded expectations. They efficiently manage properties with a professional and attentive approach in every situation. I feel reassured that any issue will be resolved promptly and effectively."
                                    </p>
                                    <div class="box-avt d-flex align-items-center gap-12">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/avt-5.jpg" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <div class="h7 fw-7">Adam Will</div>
                                            <p class="text-variant-1 mt-4">CEO Agency</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-tes-item style-1">
                                    <ul class="list-star">
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                    </ul>
                                    <p class="note body-1">
                                        "I truly appreciate the professionalism and in-depth knowledge of the brokerage team. They not only helped me find the perfect home but also assisted with legal and financial aspects, making me feel confident and secure in my decision."
                                    </p>
                                    <div class="box-avt d-flex align-items-center gap-12">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/avt-7.jpg" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <div class="h7 fw-7">Liam Anderson</div>
                                            <p class="text-variant-1 mt-4">CEO Digital</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-tes-item style-1">
                                    <ul class="list-star">
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                        <li class="icon icon-star"></li>
                                    </ul>
                                    <p class="note body-1">
                                        "I truly appreciate the professionalism and in-depth knowledge of the brokerage team. They not only helped me find the perfect home but also assisted with legal and financial aspects, making me feel confident and secure in my decision."
                                    </p>
                                    <div class="box-avt d-flex align-items-center gap-12">
                                        <div class="avatar avt-60 round">
                                            <img src="images/avatar/avt-7.jpg" alt="avatar">
                                        </div>
                                        <div class="info">
                                            <div class="h7 fw-7">Liam Anderson</div>
                                            <p class="text-variant-1 mt-4">CEO Digital</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination sw-pagination-testimonial"></div>
                        <!-- <div class="tf-mouse tf-mouse-outer"></div>
                        <div class="tf-mouse tf-mouse-inner"></div> -->
                    </div>
                </div>
            </section>
            <!-- End Testimonial -->
            <!-- footer -->
    <?php require_once ("view/MainFooter/footer.php") ?>            
            <!-- end footer -->
        </div>
        <!-- /#page -->
    </div>
    <!-- go top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- popup login -->
    <?php require_once ("view/AccesoLogin/loginmodal.php") ?>
    <!-- popup register -->
    <?php require_once ("view/AccesoLogin/registermodal.php") ?>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/carousel.js"></script>
    <script type="text/javascript" src="assets/js/plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/tinymce-custom.js"></script>
    <script type="text/javascript" src="assets/js/shortcodes.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA"></script>
    <script src="assets/js/map-single.js"></script>
    <script src="assets/js/marker.js"></script>
    <script src="assets/js/infobox.min.js"></script>

    <script type="text/javascript" src="assets/js/animation_heading.js"></script>
    <script type="text/javascript" src="assets/js/rangle-slider.js"></script>
    <script type="text/javascript" src="assets/js/shortcodes.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>

    <script type="text/javascript" src="index.js"></script>
  
</body>

</html>
