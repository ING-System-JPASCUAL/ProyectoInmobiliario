<header class="main-header fixed-header">
    <div class="header-lower">
        <div class="row">                      
            <div class="col-lg-12">         
                <div class="inner-container d-flex justify-content-between align-items-center">
                    <!-- Logo Box -->
                    <div class="logo-box flex">
                        <div class="logo"><a href="index.html"><img src="../../assets/images/logo/logo_titulo.png" alt="logo" width="174" height="44"></a></div>
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
                                                '<img src="../../'. $_SESSION["usu_img"] .'" alt="avt">'.
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
                                                '<a class="dropdown-item" href="../components/logout.php">Cerrar Sesión</a>'.
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