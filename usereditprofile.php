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
                <!-- header -->
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
                <!-- end header -->
                <!-- sidebar dashboard -->
                <div class="sidebar-menu-dashboard">
                    <ul class="box-menu-dashboard">
                        <li class="nav-menu-item"><a class="nav-menu-link" href="dashboard.html"><span class="icon icon-dashboard"></span> Dashboards</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="my-property.html"><span class="icon icon-list-dashes"></span>Mis Avisos</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="my-invoices.html"><span class="icon icon-file-text"></span> Interesados</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="my-favorites.html"><span class="icon icon-heart"></span>Mi Actividad</a></li>
                        <li class="nav-menu-item active"><a class="nav-menu-link" href="usereditprofile.php"><span class="icon icon-profile"></span> Mi Perfil</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="view/addPropiedad/addpropiedad.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 3H4.5C4.10218 3 3.72064 3.15804 3.43934 3.43934C3.15804 3.72064 3 4.10218 3 4.5V19.5C3 19.8978 3.15804 20.2794 3.43934 20.5607C3.72064 20.842 4.10218 21 4.5 21H19.5C19.8978 21 20.2794 20.842 20.5607 20.5607C20.842 20.2794 21 19.8978 21 19.5V4.5C21 4.10218 20.842 3.72064 20.5607 3.43934C20.2794 3.15804 19.8978 3 19.5 3ZM19.5 19.5H4.5V4.5H19.5V19.5ZM16.5 12C16.5 12.1989 16.421 12.3897 16.2803 12.5303C16.1397 12.671 15.9489 12.75 15.75 12.75H12.75V15.75C12.75 15.9489 12.671 16.1397 12.5303 16.2803C12.3897 16.421 12.1989 16.5 12 16.5C11.8011 16.5 11.6103 16.421 11.4697 16.2803C11.329 16.1397 11.25 15.9489 11.25 15.75V12.75H8.25C8.05109 12.75 7.86032 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86032 11.329 8.05109 11.25 8.25 11.25H11.25V8.25C11.25 8.05109 11.329 7.86032 11.4697 7.71967C11.6103 7.57902 11.8011 7.5 12 7.5C12.1989 7.5 12.3897 7.57902 12.5303 7.71967C12.671 7.86032 12.75 8.05109 12.75 8.25V11.25H15.75C15.9489 11.25 16.1397 11.329 16.2803 11.4697C16.421 11.6103 16.5 11.8011 16.5 12Z" fill="#A3ABB0"/>
                            </svg>
                             Publicar Propiedad</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="index.html"><span class="icon icon-sign-out"></span> Cerrar Sesión</a></li>
                    </ul>
                </div>
                <!-- end sidebar dashboard -->
                <div class="main-content">
                    <div class="main-content-inner wrap-dashboard-content-2">
                        <div class="button-show-hide show-mb">
                            <span class="body-1">Show Dashboard</span>
                        </div>
                        <form method="post" id="mnt_editprofile">
                            <div class="widget-box-2">
                                <div class="box">
                                    <h6 class="title">Configuración de la cuenta</h6>
                                </div>
                                <div class="box">
                                    <h6 class="title">Edita tu Perfil</h6>
                                    <div class="box-agent-avt">
                                        <div class="avatar">
                                            <img src="images/avatar/account.jpg" alt="avatar" loading="lazy" width="128" height="128">
                                        </div>
                                        <div class="content uploadfile">
                                            <p>Subir foto</p>
                                            <div class="box-ip">
                                                <input type="file" class="ip-file">
                                            </div>
                                            <p>Tamaño maximo de Archivo : 1 MB</p>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="title">Información</h6>
                                <div class="box grid-8 gap-30 box-info-2">
                                <div class="box box-fieldset">
                                    <label for="name">Nombre Completo:<span>*</span></label>
                                    <input type="text" type="usu_nom" id="usu_nom_edit" name="usu_nom_edit" value="" class="form-control style-1">
                                </div>
                                <div class="box box-fieldset">
                                    <label for="name">Apellido Completo:<span>*</span></label>
                                    <input type="text" id="usu_ape_edit" name="usu_ape_edit" value="" class="form-control style-1">
                                </div>
                                </div>
                                <div class="box grid-4 gap-30 box-info-2">
                                    <div class="box-fieldset">
                                        <label for="email">Correo Electronico:<span>*</span></label>
                                        <input type="email"  id="usu_email_edit" name="usu_email_edit" value="" class="form-control style-1" readonly>
                                    </div>
                                    <div class="box-fieldset">
                                        <label for="name">Tu teléfono:<span>*</span></label>
                                        <input type="text" id="usu_telf_edit" name="usu_telf_edit" value="" class="form-control style-1">
                                    </div>
                                    <div class="box-fieldset">
                                        <label for="name">Tu Celular:<span>*</span></label>
                                        <input type="text" id="usu_cel_edit" name="usu_cel_edit" value="" class="form-control style-1">
                                    </div>
                                    <div class="box-fieldset">
                                        <label for="name">Tu DNI:<span>*</span></label>
                                        <input type="text" id="usu_dni_edit" name="usu_dni_edit" value="" class="form-control style-1" readonly>
                                    </div>
                                </div>
                                <button type="submit" class="tf-btn primary">Guardar & Actualizar</button>
                                <br>
                            </form>
                                <br>
                                <h6 class="title">Cambiar contraseña</h6>
                                <div class="box grid-3 gap-30">
                                    <div class="box-fieldset">
                                        <label for="old-pass">Contraseña antigua:<span>*</span></label>
                                        <div class="box-password">
                                            <input type="password" class="form-contact style-1 password-field" placeholder="Password">
                                            <span class="show-pass">
                                                <i class="icon-pass icon-eye"></i>
                                                <i class="icon-pass icon-eye-off"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="box-fieldset">
                                        <label for="new-pass">Contraseña nueva:<span>*</span></label>
                                        <div class="box-password">
                                            <input type="password" class="form-contact style-1 password-field2" placeholder="Password">
                                            <span class="show-pass2">
                                                <i class="icon-pass icon-eye"></i>
                                                <i class="icon-pass icon-eye-off"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="box-fieldset">
                                        <label for="confirm-pass">Confirmar contraseña:<span>*</span></label>
                                        <div class="box-password">
                                            <input type="password" class="form-contact style-1 password-field3" placeholder="Password">
                                            <span class="show-pass3">
                                                <i class="icon-pass icon-eye"></i>
                                                <i class="icon-pass icon-eye-off"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <a href="#" class="tf-btn primary">Actualizar contraseña</a>
                                </div>
                            </div>
                    </div>
                    <div class="footer-dashboard">
                        <p class="text-variant-2">©2024 Groupascual. Todos los derechos reservados.</p>
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
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/carousel.js"></script>
    <script type="text/javascript" src="assets/js/plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="assets/js/tinymce/tinymce-custom.js"></script>
    <script type="text/javascript" src="assets/js/shortcodes.js"></script>
    <script src="assets/js/map-single.js"></script>
    <script src="assets/js/marker.js"></script>
    <script src="assets/js/infobox.min.js"></script>

    <script type="text/javascript" src="assets/js/animation_heading.js"></script>
    <script type="text/javascript" src="assets/js/rangle-slider.js"></script>
    <script type="text/javascript" src="assets/assets/js/shortcodes.js"></script>

    <script type="text/javascript" src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type ="text/javascript" src="usereditprofile.js"></script>
   
</body>

</html>