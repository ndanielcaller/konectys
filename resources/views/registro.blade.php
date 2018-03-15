<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="es" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->  
<head>
    <title>Konectys</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Konectys">
    
    <link rel="icon" type="image/png" href="{{ asset('konectystheme/assets/img/favicon.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('konectystheme/assets/img/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('konectystheme/assets/img/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('konectystheme/assets/img/favicon.png') }}">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/style.css') }}">

    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/plugins/line-icons/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/plugins/font-awesome/css/font-awesome.css') }}">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/page_log_reg_v1.css') }}">
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/plugins/brand-buttons/brand-buttons-inversed.css') }}">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/themes/purple.css') }}" id="style_color">
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/custom.css') }}">
</head> 

<body>

<div class="wrapper">
    <!--=== Header Version 3 ===-->    
    <div class="header header-v3">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img id="logo-header" src="{{ asset('konectystheme/assets/img/logo.png') }}" alt="Logo" width="206">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="{{ url('registro') }}">
                                    Conviértete en Consultor
                                </a>
                            </li>
                            <li class="hidemobile"><a>/</a></li>

                            <li class="">
                                <a href="{{ url('registro') }}">
                                    Registrate
                                </a>
                            </li>
                            <li class="hidemobile"><a>/</a></li>

                            <li class="">
                                <a href="{{ url('login') }}">
                                    Inicia Sesión
                                </a>
                            </li>
                        </ul>
                    </div><!--/navbar-collapse-->
                </div>    
            </div>            
            <!-- End Navbar -->
        </div>
    <!--=== End Header Version 3 ===-->  

    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <form class="reg-page">
                    <div class="reg-header">
                        <h2>Creando mi cuenta</h2>
                        <p class="">¿Ya tienes una cuenta? Click <a href="{{ url('/login') }}" class="color-green">Login</a> para ingresar a tu cuenta.</p>
                    </div>

                    <label>Nombres <span class="color-red">*</span></label>
                    <input type="text" class="form-control input-lg margin-bottom-20">
                   
                    <label>Apellidos <span class="color-red">*</span></label>
                    <input type="text" class="form-control input-lg margin-bottom-20">

                    <!-- <label>Ciudad <span class="color-red">*</span></label>
                    <select class="form-control input-lg margin-bottom-20">
                        <option value="">Ciudad</option>
                        <option value="Lima">Lima</option>
                        <option value="Arequipa">Arequipa</option>
                        <option value="Tacna">Tacna</option>
                    </select> -->
                   
                    <label>Correo Electrónico <span class="color-red">*</span></label>
                    <input type="text" class="form-control input-lg margin-bottom-20">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Contraseña <span class="color-red">*</span></label>
                            <input type="password" class="form-control input-lg margin-bottom-20">
                        </div>
                        <div class="col-sm-6">
                            <label>Repite Contraseña <span class="color-red">*</span></label>
                            <input type="password" class="form-control input-lg margin-bottom-20">
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button class="btn-u btn-block btn-lg rounded" type="submit">
                                Registrarme
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="col-sm-offset-2 col-sm-8 margin-bottom-30">
                            <button class="btn btn-block btn-facebook-inversed btn-lg rounded">
                              <i class="fa fa-facebook"></i> Registrarme con Facebook
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-offset-2 col-sm-8">
                            <button class="btn btn-block btn-linkedin-inversed btn-lg rounded">
                              <i class="fa fa-linkedin"></i> Registrarme con LinkedIn
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->     
    <!--=== End Content Part ===-->

<!--=== Footer Version 2 ===-->
<div class="footer-v2">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 col-xs-12 md-margin-bottom-40">
                    <a href="{{ url('/') }}">
                        <img class="footer-logo" src="{{ asset('konectystheme/assets/img/logo.png') }}" alt="Logo" width="206">
                    </a>
                    <div class="margin-bottom-30"></div>
                    <!-- Social Links -->
                    <ul class="social-icons">
                        <li>
                            <a href="#" data-original-title="Facebook" class="rounded-x social_facebook"></a>
                        </li>
                        <li>
                            <a href="#" data-original-title="Twitter" class="rounded-x social_twitter"></a>
                        </li>
                        <li>
                            <a href="#" data-original-title="Goole Plus" class="rounded-x social_googleplus"></a>
                        </li>
                        <li>
                            <a href="#" data-original-title="Linkedin" class="rounded-x social_linkedin"></a>
                        </li>
                    </ul>
                    <!-- End Social Links -->

                    
                </div><!--/col-md-4-->
                <!-- End About -->

                <!-- Link List -->
                <div class="col-md-4 col-xs-12 md-margin-bottom-40">
                    <div class="headline"><h2>Regístrate para consultar</h2></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="#">Cómo funciona</a></li>
                        <li><a href="#">Políticas</a></li>
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#">Diversidad e inclusión</a></li>
                    </ul>
                </div><!--/col-md-4-->
                <!-- End Link List -->

                <!-- Address -->
                <div class="col-md-4 col-xs-12 md-margin-bottom-40">
                    <div class="headline"><h2 class="">Conviértete en consultor</h2></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="#">Oportunidades</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Ayuda a las Mypes</a></li>
                        <li><a href="#">Medios</a></li>
                    </ul>
                    
                </div><!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div> 
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <p class="text-center">2018 &copy; <a href="{{ url('/') }}">Konectys</a>. Todos los derechos reservados.</p>
        </div> 
    </div><!--/copyright--> 
</div>
    <!--=== End Footer Version 2 ===-->
</div>

<!-- JS Global Compulsory -->           
<<!-- JS Global Compulsory -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/back-to-top.js') }}"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/app.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('konectystheme/assets/plugins/respond.js') }}"></script>
    <script src="{{ asset('konectystheme/assets/plugins/html5shiv.js') }}"></script>
<![endif]-->

</body>
</html> 