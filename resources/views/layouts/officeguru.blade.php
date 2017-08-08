<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/hamburgers.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="<?php echo (isset($bodyClass) ? $bodyClass : ''); ?>">

        <header>    
            <!--<div> class="container group"-->
                <!--<div class="row">-->
                    <div class="header-menu col-sm-12">
                        <!--<div class="menus group container">-->
                            <nav class="header-main-nav ">
                                <div class="header-logo">
                                    <h1 class="logo">Office Gurú<a href="index.php"><img src="img/logo.png" alt="Office Guru"></a></h1>
                                </div>

                                <div id="headernav-menu" class="headernav-menu">    
                                    <ul>
                                        <li class="menu-item-host"><a href="register.php">Convertite en gurú</a></li>
                                        <li class="menu-item-faq"><a href="faq.php">FAQ</a></li>
                                        <?php //if ($isLoggedIn) { ?>
                                        <li class="menu-item-user">
                                            <a href="profile.php">
                                                <img class="avatar avatar-sm" src="<?php //echo USERS_IMAGES_PATH . $myUser->getImage(); ?>" alt="<?php //echo $myUser->getFirstName(); ?>">
                                                <?php //echo $myUser->getFirstName(); ?>
                                            </a>
                                        </li>
                                        <li class="menu-item-user"><a href="logout.php"><i class="icon-lock"></i> Salir</a></li>
                                        <?php //} else { ?>
                                        <li class="menu-item-register"><a href="register.php">Registrate</a></li>
                                        <li class="menu-item-login"><a href="login.php">Ingresá</a></li>
                                        <?php //} ?>
                                    </ul>
                                </div>
                                
                                
                                <button id="menu-mobile" class="hamburger menu-mobile" type="button">
                                  <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                  </span>
                                </button>
                            </nav>
                        <!--</div>-->
                    </div>
                <!--</div>-->
            <!--</div>-->

            <script type="text/javascript" src="js/example.js"></script>

        </header>
        
        <main>
            @yield('content')
        </main>

        <footer>

        <section class="footernav pad-bottom pad-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 txt-center w-100">
                        <nav class="footernav-menu d-inlineblock">
                            <ul>
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="faq.php">Preguntas</a></li>
                                <li><a href="register.php">Conviértete en anfitrión</a></li>
                                <li><a href="register.php">Regístrate</a></li>
                                <li><a href="login.php">Iniciar sesión</a></li>
                            </ul>
                        </nav>              
                    </div>
                </div>
            </div>          
        </section>

        <section class="footersocial pad-bottom pad-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 txt-center w-100">
                        <nav class="menu-social d-inlineblock">
                            <ul>
                                <li><a href="https://facebook.com" target="_blank"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="icon-twitter"></i></a></li>
                                <li><a href="https://linkedin.com" target="_blank"><i class="icon-linkedin"></i></a></li>
                                <li><a href="https://instagram.com" target="_blank"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="footercopy pad-bottom pad-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 imgfooter">
                        <img src="img/logo-1.png" alt="Office Guru">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="copy">&copy; Copyright <?php echo date('Y'); ?> <em>Escuchame chiquito</em>, todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </section>  

    </footer>
</body>
</html>