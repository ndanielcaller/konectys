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
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/portfolio-v2.css') }}">

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
            <h1 class="pull-left">Administradores de Empresas</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ url('busqueda') }}"><i class="fa fa-arrow-left"></i> Regresar</a></li>
                
            </ul>
        </div>
    </div>
    <!--=== End Breadcrumbs v3 ===-->

    <!--=== Content Part ===-->
    <div class="container content"> 
        <div class="row about-me margin-bottom-40">
            <div class="col-md-5 shadow-wrapper md-margin-bottom-20">
                <div class="box-shadow shadow-effect-2">
                    <img class="img-responsive" src="{{ asset('konectyshtml/assets/img/team/team1.jpg') }}" alt="team1">
                </div>
            </div>
            <div class="col-md-7">
                <div class="overflow-h">
                    <div class="pull-left">
                        <h2>Elizabeta Watson</h2>
                        <span>CEO, Director</span>
                    </div>    
                    <ul class="social-icons pull-right">
                        <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                        <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                        <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                        <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                    </ul>
                </div>    
                <p>Nulla fermentum blandit dolor eu dictum. Nulla faucibus libero eget mi tempus, quis laoreet ante congue. Nullam sed tortor vitae magna auctor vestibulum. Fusce gravida, mauris at vulputate aliquet, arcu nunc scelerisque mi, pellentesque mollis lectus mauris in urna.</p>
                <p>Suspendisse non magna sed justo tincidunt pellentesque. Proin sit amet ligula vel orci tempus viverra. Donec massa justo, sodales in leo pretium, adipiscing dictum mi. Nullam sed eleifend purus. Sed eget lacus eget urna venenatis hendrerit sed sit amet dui. Suspendisse lorem velit, tincidunt nec mattis ut, gravida adipiscing sapien.</p>
                <ul class="list-unstyled">
                    <li><i class="color-green fa fa-check"></i> Nullam sed eleifend purus</li>
                    <li><i class="color-green fa fa-check"></i> Proin sit amet ligula vel orci tempus viverra</li>
                    <li><i class="color-green fa fa-check"></i> Nulla fermentum blandit dolor eu dictum</li>
                    <li><i class="color-green fa fa-check"></i> Donec varius lacus et neque vestibulum hendrerit</li>
                </ul>
            </div>
        </div>
        <!-- About Me -->
        <div class="row about-my-goals margin-bottom-20">
            <div class="col-md-4 md-margin-bottom-20">    
                <h2 class="heading-md">My <span class="color-green">achievements</span></h2>
                <p>Donec bibendum vitae lacus vitae eleifend. Curabitur vitae turpis eget mi vulputate volutpat. Curabitur molestie magna non tellus viverra ornare. Etiam enim sapien, tristique et faucibus et, scelerisque id risus.</p>
                <p>Sed quis tortor metus. Morbi fringilla in mi ac accumsan. Vestibulum in arcu turpis. Donec congue interdum eleifend.</p>
                <a class="btn-u" href="#">View more</a>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 info-blocks">
                        <i class="fa fa-bell-o icon-info-blocks"></i>
                        <div class="info-blocks-in">
                            <h3>New title comes here</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum animi..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 info-blocks">
                        <i class="fa fa-hdd-o icon-info-blocks"></i>
                        <div class="info-blocks-in">
                            <h3>New title comes here</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum animi..</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 info-blocks">
                        <i class="fa fa-lightbulb-o icon-info-blocks"></i>
                        <div class="info-blocks-in">
                            <h3>New title comes here</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum animi..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 info-blocks">
                        <i class="fa fa-thumbs-o-up icon-info-blocks"></i>
                        <div class="info-blocks-in">
                            <h3>New title comes here</h3>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum animi..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- End About Me -->
    </div><!--/container-->     
    <!-- End Content Part -->

    <!--=== Skills ===-->
    <div class="about-skills margin-bottom-20">
        <div class="container">
            <div class="title-box-v2">
                <h2>My <span class="color-green">Skills</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <!-- Pie Charts v2 -->
            <div class="row pie-progress-charts">
                <div class="inner-pchart col-sm-3 col-xs-6">
                    <div class="circle" id="circle-6"></div>
                    <h3 class="circle-title">UI Design</h3>
                </div> 
                <div class="inner-pchart col-sm-3 col-xs-6">
                    <div class="circle" id="circle-7"></div>
                    <h3 class="circle-title">Web Development</h3>
                </div>       
                <div class="inner-pchart col-sm-3 col-xs-6">
                    <div class="circle" id="circle-8"></div>
                    <h3 class="circle-title">JavaScript</h3>
                </div>
                <div class="inner-pchart col-sm-3 col-xs-6">
                    <div class="circle" id="circle-9"></div>
                    <h3 class="circle-title">Web Animation</h3>
                </div>
            </div>    
            <!-- End Pie Charts v2 -->
        </div>
    </div>    
    <!--=== End Skills ===-->

    <!--=== Container Part ===-->
    <div class="container content margin-bottom-20">
        <div class="title-box-v2">
            <h2>Latest <span class="color-green"> projects</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="sorting-block">
            <ul class="sorting-nav sorting-nav-v1 text-center">
                <li data-filter="all" class="filter active">All</li>
                <li data-filter="category_1" class="filter">UI Design</li>
                <li data-filter="category_2" class="filter">Wordpress</li>
                <li data-filter="category_3" class="filter">HTML5/CSS3</li>
                <li data-filter="category_3 category_1" class="filter">Bootstrap 3</li>
            </ul>

            <ul class="row sorting-grid" style="  transform:   ">
                <li data-cat="1" class="col-md-3 col-sm-6 col-xs-12 mix category_1 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/11.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li data-cat="3" class="col-md-3 col-sm-6 col-xs-12 mix category_3 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/12.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li data-cat="2" class="col-md-3 col-sm-6 col-xs-12 mix category_2 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/13.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li data-cat="3" class="col-md-3 col-sm-6 col-xs-12 mix category_3 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/3.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li data-cat="2" class="col-md-3 col-sm-6 col-xs-12 mix category_2 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/2.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li data-cat="1" class="col-md-3 col-sm-6 col-xs-12 mix category_1 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/6.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li data-cat="2" class="col-md-3 col-sm-6 col-xs-12 mix category_2 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/8.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
                <li data-cat="1" class="col-md-3 col-sm-6 col-xs-12 mix category_1 mix_all" style=" display: inline-block; opacity: 1;">
                    <a href="#">
                        <img alt="" src="{{ asset('konectystheme/assets/img/main/1.jpg') }}" class="img-responsive">
                        <span class="sorting-cover">
                            <span>Happy New Year</span>
                            <p>Anim pariatur cliche reprehenderit</p>
                        </span>
                    </a>
                </li>
            </ul>
        
            <div class="clearfix"></div>
        </div>
    </div><!--/container-->
    <!--=== Container Part ===-->

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
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/circles-master/circles.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery.mixitup.min.js') }}"></script>    

<!-- JS Page Level -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/plugins/circles-master.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/pages/page_portfolio.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        PortfolioPage.init(); 
        CirclesMaster.initCirclesMaster1();
    });
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('konectystheme/assets/plugins/respond.js')}}"></script>
<![endif]-->

</body>
</html> 