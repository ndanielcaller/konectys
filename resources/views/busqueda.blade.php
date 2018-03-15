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
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/page_search_inner.css') }}">

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

 <!--=== Breadcrumbs v3 ===-->
    <div class="breadcrumbs-v3">
        <div class="container">
            <h1 class="pull-left">Resultados de Búsqueda</h1>
        </div>
    </div>
    <!--=== End Breadcrumbs v3 ===-->

    <!--=== Search Block Version 2 ===-->
    <div class="search-block-v2">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <h2>Buscar otra vez</h2>
                <div class="row job-img-inputs">
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
                        <button type="button" class="btn-u btn-block btn-lg rounded">
                            Encontrar
                        </button>
                    </div>
                </div>
            </div>
        </div>    
    </div><!--/container-->     
    <!--=== End Search Block Version 2 ===-->


<!--=== Content Part ===-->
<div class="container s-results margin-bottom-50">  
    <div class="col-md-2 hidden-xs related-search">
        <div class="row">
            <div class="col-md-12 col-sm-4">
                <h3>Relacionados</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Web design company</a></li>     
                    <li><a href="#">Web design tutorials</a></li>   
                    <li><a href="#">Self designing</a></li>
                    <li><a href="#">Web design company</a></li>     
                    <li><a href="#">Web design tutorials</a></li>   
                    <li><a href="#">Self designing</a></li>
                    <li><a href="#">Web design company</a></li>     
                    <li><a href="#">Web design tutorials</a></li>   
                    <li><a href="#">Self designing</a></li>   
                </ul>
                <hr>
            </div>    

            <div class="col-md-12 col-sm-4">
                <h3>En Tendencia</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Bootstrap</a></li>     
                    <li><a href="#">Wrapbootstrap</a></li>     
                    <li><a href="#">Codrops</a></li>     
                    <li><a href="#">Wrapbootstrap</a></li>     
                    <li><a href="#">Codrops</a></li>     
                </ul>
                <hr>
            </div>                            
            
        </div>        
    </div><!--/col-md-2-->
    <div class="col-md-10">
        <span class="results-number">Se encontraron 384,907 resultados</span>
        <!-- Begin Inner Results -->
        <div class="inner-results">
            <h3><a href="{{ url('busqueda-detalle') }}">Web design</a></h3>
            <ul class="list-inline up-ul">
                <li>en.wikipedia.org/wiki/Web_design‎</li>
                <li class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                        More<i class="fa fa-caret-down"></i>
                        <span class="sr-only">Toggle Dropdown</span>                            
                    </button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Share</a></li>
                        <li><a href="#">Similar</a></li>
                        <li><a href="#">Advanced search</a></li>
                    </ul>
                </li>
                <li><a href="#">Wrapbootstrap</a></li>
                <li><a href="#">Dribbble</a></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut orci urna. Morbi blandit enim eget risus posuere dapibus. Vestibulum velit nisi, tempus in placerat non, auctor eu purus. Morbi suscipit porta libero, ac tempus tellus consectetur non. Praesent eget consectetur nunc. Aliquam erat volutpat. Suspendisse ultrices eros eros, consectetur facilisis urna posuere id.</p>
            <ul class="list-inline down-ul">
                <li>
                    <ul class="list-inline star-vote">
                        <li><i class="color-green fa fa-star"></i></li>
                        <li><i class="color-green fa fa-star"></i></li>
                        <li><i class="color-green fa fa-star"></i></li>
                        <li><i class="color-green fa fa-star"></i></li>
                        <li><i class="color-green fa fa-star-half-o"></i></li>
                    </ul>
                </li>
                <li>3 years ago - By Anthon Brandley</li>
                <li>234,034 views</li>
                <li><a href="#">Web designer</a></li>
            </ul>    
        </div>
        <!-- Begin Inner Results -->

        <hr>

        <!-- Begin Inner Results -->
        <div class="inner-results">
            <h3><a href="{{ url('busqueda-detalle') }}">Web Design - 1 - Introduction to Web Design</a></h3>
            <ul class="list-inline up-ul">
                <li>thenewboston.org‎/webdesign-tutorials</li>
                <li class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                        More<i class="fa fa-caret-down"></i>
                        <span class="sr-only">Toggle Dropdown</span>                            
                    </button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Share</a></li>
                        <li><a href="#">Similar</a></li>
                        <li><a href="#">Advanced search</a></li>
                    </ul>
                </li>
                <li><a href="#">HTML/CSS</a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">PHP</a></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut orci urna. Morbi blandit enim eget risus posuere dapibus. Vestibulum velit nisi, tempus in placerat non, auctor eu purus. Morbi suscipit porta libero, ac tempus tellus consectetur non. Praesent eget consectetur nunc. Aliquam erat volutpat. Suspendisse ultrices eros eros, consectetur facilisis urna posuere id.</p>
            <ul class="list-inline down-ul">
                <li>
                    <ul class="list-inline star-vote">
                        <li><i class="color-green fa fa-star"></i></li>
                        <li><i class="color-green fa fa-star"></i></li>
                        <li><i class="color-green fa fa-star"></i></li>
                        <li><i class="color-green fa fa-star-o"></i></li>
                        <li><i class="color-green fa fa-star-o"></i></li>
                    </ul>
                </li>
                <li>2 years ago - By Bucky Roberts</li>
                <li>594,184 views</li>
                <li><a href="#">Videos &amp; Tutorials</a></li>
            </ul>   
        </div>
        <!-- Begin Inner Results -->

        <hr>

        <!-- Begin Inner Results -->
        <div class="inner-results">
            <h3><a href="{{ url('busqueda-detalle') }}">WrapBootstrap - Bootstrap Themes &amp; Templates</a></h3>
            <ul class="list-inline up-ul">
                <li>https://wrapbootstrap.com/‎</li>
                <li class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                        More<i class="fa fa-caret-down"></i>
                        <span class="sr-only">Toggle Dropdown</span>                            
                    </button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Share</a></li>
                        <li><a href="#">Similar</a></li>
                        <li><a href="#">Advanced search</a></li>
                    </ul>
                </li>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Template</a></li>
                <li><a href="#">OnePage Template</a></li>
                <li><a href="#">Joomla</a></li>
            </ul>
            <div class="overflow-h">
                <img src="{{ asset('konectystheme/assets/img/testimonials/img1.jpg') }}" alt="">
                <div class="overflow-a">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut orci urna. Morbi blandit enim eget risus posuere dapibus. Vestibulum velit nisi, tempus in placerat non, auctor eu purus. Morbi suscipit porta libero, ac tempus tellus consectetur non. Praesent eget consectetur nunc. Aliquam erat volutpat. Suspendisse ultrices eros eros, consectetur facilisis urna posuere id.</p>
                    <ul class="list-inline down-ul">
                        <li>
                            <ul class="list-inline star-vote">
                                <li><i class="color-green fa fa-star"></i></li>
                                <li><i class="color-green fa fa-star"></i></li>
                                <li><i class="color-green fa fa-star"></i></li>
                                <li><i class="color-green fa fa-star"></i></li>
                                <li><i class="color-green fa fa-star-half-o"></i></li>
                            </ul>
                        </li>
                        <li>11 months ago - By WrapBootstrap</li>
                        <li>2,092,675 views</li>
                    </ul>
                </div>       
            </div>    
        </div>
        <!-- Begin Inner Results -->

        <hr>

        <!-- Begin Inner Results -->
        <div class="inner-results">
            <h3><a href="{{ url('busqueda-detalle') }}">Web Design - Website Design Tutorials, Articles</a></h3>
            <ul class="list-inline up-ul">
                <li>www.webdesign.org/</li>
                <li class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                        More<i class="fa fa-caret-down"></i>
                        <span class="sr-only">Toggle Dropdown</span>                            
                    </button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Share</a></li>
                        <li><a href="#">Similar</a></li>
                        <li><a href="#">Advanced search</a></li>
                    </ul>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut orci urna. Morbi blandit enim eget risus posuere dapibus. Vestibulum velit nisi, tempus in placerat non, auctor eu purus. Morbi suscipit porta libero, ac tempus tellus consectetur non. Praesent eget consectetur nunc. Aliquam erat volutpat. Suspendisse ultrices eros eros, consectetur facilisis urna posuere id.</p>
            <ul class="list-inline down-ul">
                <li>By Alice Emilsson</li>
                <li>98,298 views</li>
            </ul>
        </div>
        <!-- Begin Inner Results -->

        <div class="margin-bottom-30"></div>

        <div class="text-left">
            <ul class="pagination">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">157</a></li>
                <li><a href="#">158</a></li>
                <li><a href="#">»</a></li>
            </ul>                                                            
        </div>
    </div><!--/col-md-10-->
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
    });
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('konectystheme/assets/plugins/respond.js') }}"></script>
<![endif]-->

</body>
</html> 