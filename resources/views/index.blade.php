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
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/plugins/image-hover/css/img-hover.css') }}">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/page_job.css') }}">

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

        <!--=== Job Img ===-->
    <div class="job-img margin-bottom-30">
        <div class="job-banner">
            <h2>Soluciones específicas<br>Profesionales específicos</h2>
        </div>   
        <div class="job-img-inputs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 md-margin-bottom-10">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                            
                            <input type="text" placeholder="Encuentra profesionales" class="form-control input-lg">
                        </div>
                    </div>    
                    <div class="col-sm-4 md-margin-bottom-10">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <select class="form-control input-lg">
                                <option value="">Lugar</option>
                                <option value="Lima">Lima</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Tacna">Tacna</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn-u btn-block btn-lg rounded" id="tolink">
                            Encontrar
                        </button>
                    </div>
                </div>
            </div>    
        </div>    
    </div>    
    <!--=== End Job Img ===-->

<!--=== Content Part ===-->
<div class="container content"> 
    <div class="title-box">
        <div class="title-box-text">Quien busca <span class="color-green">encuentra</span></div>
    </div>
    <!-- Service Blocks -->
    <div class="margin-bottom-40"></div>
    <div class="row margin-bottom-10">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">
                    <i class="icon-custom rounded-x icon-bg-dark fa fa-lightbulb-o"></i>
                    <h2 class="heading-md">Administradores <br> de <br> Empresas</h2>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">            
                    <i class="icon-custom rounded-x icon-bg-dark fa fa-compress"></i>
                    <h2 class="heading-md">Ingenierios <br> Industriales</h2>
                </div>
            </a>
        </div>            
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">            
                    <i class="icon-custom rounded-x icon-bg-dark icon-line icon-rocket"></i>
                    <h2 class="heading-md">Contadores</h2>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">
                    <i class="icon-custom rounded-x icon-bg-dark icon-line icon-support"></i>
                    <h2 class="heading-md">Economistas</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="row margin-bottom-10">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">
                    <i class="icon-custom rounded-x icon-bg-dark fa fa-lightbulb-o"></i>
                    <h2 class="heading-md">Administradores <br> de Negocios <br> Internacionales</h2>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">            
                    <i class="icon-custom rounded-x icon-bg-dark fa fa-compress"></i>
                    <h2 class="heading-md">Abogados</h2>
                </div>
            </a>
        </div>            
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">            
                    <i class="icon-custom rounded-x icon-bg-dark icon-line icon-rocket"></i>
                    <h2 class="heading-md">Comunicadores <br> Sociales</h2>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="" class="service-block-link">
                <div class="servive-block servive-block-default">
                    <i class="icon-custom rounded-x icon-bg-dark icon-line icon-support"></i>
                    <h2 class="heading-md">Administradores <br>de Empresas <br>(Técnicos)</h2>
                </div>
            </a>
        </div>
    </div>
    <!-- End Service Blokcs -->
    <div class="margin-bottom-40"></div>
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>Descubre cuánto podrías ganar en tus tiempos libres</span>
                    <p>Transforma el tiempo que no utilizas y rentabilízalo haciendo lo que más te apasiona</p>
                </div>            
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="#" class="btn-u btn-u-lg"><i class="fa fa-info-circle"></i> Infórmate</a>
                </div>
            </div>
        </div>
    </div>
    <div class="margin-bottom-40"></div>
<!-- Our Clients -->
<div class="owl-carousel-style-v2">
    <div class="headline"><h2>Conéctate con Konectys</h2></div>
    <div class="row margin-bottom-30">
        <div class="col-md-4 col-xs-12">
            <div class="service">
                <i class="fa fa-magic service-icon"></i>
                <div class="desc">
                    <h4>Experiencias</h4>
                </div>
            </div>  
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="service">
                <i class="fa fa-star-o service-icon"></i>
                <div class="desc">
                    <h4>Destacados</h4>
                    
                </div>
            </div>  
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="service">
                <i class="fa fa-rocket service-icon"></i>
                <div class="desc">
                    <h4>Emprende</h4>
                    
                </div>
            </div>  
        </div>              
    </div>
</div>
<!-- End Our Clients -->
</div><!--/container-->     
<!-- End Content Part -->

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
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery.parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/image-hover/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/image-hover/js/touch.js') }}"></script>

<!-- JS Page Level -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/pages/index.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/plugins/owl-carousel.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initParallaxBg();
        $('#tolink').on('click', function(e){
            e.preventDefault();
            window.location.href = "{{ url('/busqueda') }}";
        });        
    });
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('konectystheme/assets/plugins/respond.js') }}"></script>
<![endif]-->

</body>
</html> 