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
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css')}}">
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/plugins/scrollbar/src/perfect-scrollbar.css') }}">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="{{ asset('konectystheme/assets/css/profile.css') }}">

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

    <!--=== Profile ===-->
    <div class="profile container content">
        <div class="row">
            <!--Left Sidebar-->
            <div class="col-md-3 md-margin-bottom-40">
                <img class="img-responsive profile-img margin-bottom-20" src="{{ asset('konectystheme/assets/img/team/5.jpg') }}" alt="">

                <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                    <li class="list-group-item active">
                        <a href="{{ url('perfil') }}">
                            <i class="fa fa-bar-chart-o"></i> Resumen
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ url('datos') }}">
                            <i class="fa fa-user"></i> Mis Datos
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <i class="fa fa-comments"></i> Inbox
                        </a>
                    </li>                                        
                    <li class="list-group-item">
                        <a href="#">
                            <i class="fa fa-credit-card"></i> Pagos
                        </a>
                    </li>                                       
                    <li class="list-group-item">
                        <a href="#">
                            <i class="fa fa-cog"></i> Configuración
                        </a>
                    </li> 
                </ul>   

                <div class="panel-heading-v2 overflow-h">
                    <h2 class="heading-xs pull-left">
                        <i class="fa fa-bar-chart-o"></i> Habilidades
                    </h2>
                </div>
                <h3 class="heading-xs">
                    Web Design <span class="pull-right">92%</span>
                </h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">
                    </div>
                </div>
                <h3 class="heading-xs">
                    Unify Project <span class="pull-right">85%</span>
                </h3>
                <div class="progress progress-u progress-xxs">
                    <div style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-blue">
                    </div>
                </div>
                <h3 class="heading-xs">
                    Sony Corporation <span class="pull-right">64%</span>
                </h3>
                <div class="progress progress-u progress-xxs margin-bottom-40">
                    <div style="width: 64%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="64" role="progressbar" class="progress-bar progress-bar-dark">
                    </div>
                </div>

                <hr>

                <!--Notification-->
                <div class="panel-heading-v2 overflow-h">
                    <h2 class="heading-xs pull-left">
                        <i class="fa fa-bell-o"></i> Notificaciones
                    </h2>
                </div>
                <ul id="scrollbar5" class="list-unstyled contentHolder margin-bottom-20">
                    <li class="notification">
                        <i class="icon-custom icon-sm rounded-x icon-bg-red icon-line icon-envelope"></i>
                        <div class="overflow-h">
                            <span>
                                <strong>Albert Heller</strong> 
                                has sent you email.
                            </span>
                            <small>Two minutes ago</small>
                        </div>    
                    </li>
                    <li class="notification">
                        <img class="rounded-x" src="{{ asset('konectystheme/assets/img/testimonials/img6.jpg') }}" alt="">
                        <div class="overflow-h">
                            <span><strong>Taylor Lee</strong> started following you.</span>
                            <small>Today 18:25 pm</small>
                        </div>    
                    </li>
                    <li class="notification">
                        <i class="icon-custom icon-sm rounded-x icon-bg-yellow icon-line fa fa-bolt"></i>
                        <div class="overflow-h">
                            <span><strong>Natasha Kolnikova</strong> accepted your invitation.</span>
                            <small>Yesterday 1:07 pm</small>
                        </div>    
                    </li>
                    <li class="notification">
                        <img class="rounded-x" src="{{ asset('konectystheme/assets/img/testimonials/img1.jpg') }}" alt="">
                        <div class="overflow-h">
                            <span><strong>Mikel Andrews</strong> commented on your Timeline.</span>
                            <small>23/12 11:01 am</small>
                        </div>    
                    </li>
                    <li class="notification">
                        <i class="icon-custom icon-sm rounded-x icon-bg-blue icon-line fa fa-comments"></i>
                        <div class="overflow-h">
                            <span><strong>Bruno Js.</strong> added you to group chating.</span>
                            <small>Yesterday 1:07 pm</small>
                        </div>    
                    </li>
                    <li class="notification">
                        <img class="rounded-x" src="{{ asset('konectystheme/assets/img/testimonials/img6.jpg') }}" alt="">
                        <div class="overflow-h">
                            <span><strong>Taylor Lee</strong> changed profile picture.</span>
                            <small>23/12 15:15 pm</small>
                        </div>    
                    </li>
                </ul>    
                <a href="consultor_inbox.html" type="button" class="btn-u btn-u-default btn-u-sm btn-block">Ver Todas</a>
                <!--End Notification-->

                <div class="margin-bottom-50"></div>

            </div>
            <!--End Left Sidebar-->
            
            <div class="col-md-9">
                <!--Profile Body-->
                <div class="profile-body">
                    <!--Service Block v3-->
                    <div class="row margin-bottom-10">
                        <div class="col-sm-6 sm-margin-bottom-20">
                            <div class="service-block-v3 servive-block-u">
                                <i class="icon-users"></i>
                                <span class="service-heading">Overall Visits</span>
                                <span class="counter">52,147</span>
                                
                                <div class="clearfix margin-bottom-10"></div>
                                
                                <div class="row margin-bottom-20">
                                    <div class="col-xs-6 service-in">
                                        <small>Last Week</small>
                                        <h4 class="counter">1,385</h4>
                                    </div>
                                    <div class="col-xs-6 text-right service-in">
                                        <small>Last Month</small>
                                        <h4 class="counter">6,048</h4>
                                    </div>
                                </div>
                                <div class="statistics">
                                <h3 class="heading-xs">Statistics in Progress Bar <span class="pull-right">67%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 67%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="67" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                    <small>11% less <strong>than last month</strong></small>
                                </div>            
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="service-block-v3 servive-block-blue">
                                <i class="icon-screen-desktop"></i>
                                <span class="service-heading">Overall Page Views</span>
                                <span class="counter">324,056</span>
                                
                                <div class="clearfix margin-bottom-10"></div>
                                
                                <div class="row margin-bottom-20">
                                    <div class="col-xs-6 service-in">
                                        <small>Last Week</small>
                                        <h4 class="counter">26,904</h4>
                                    </div>
                                    <div class="col-xs-6 text-right service-in">
                                        <small>Last Month</small>
                                        <h4 class="counter">124,766</h4>
                                    </div>
                                </div>
                                <div class="statistics">
                                <h3 class="heading-xs">Statistics in Progress Bar <span class="pull-right">89%</span></h3>
                                    <div class="progress progress-u progress-xxs">
                                        <div style="width: 89%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="89" role="progressbar" class="progress-bar progress-bar-light">
                                        </div>
                                    </div>
                                    <small>15% higher <strong>than last month</strong></small>
                                </div>            
                            </div>
                        </div>
                    </div><!--/end row-->
                    <!--End Service Block v3-->

                    <hr>

                    <div class="panel panel-profile">
                        <div class="panel-heading overflow-h">
                            <h2 class="panel-title heading-sm pull-left"><i class="fa fa-tasks"></i>Contactos</h2>
                            <a href="consultor_inbox.html" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-xs pull-right">Ver Todos</a>
                        </div>
                        <div class="panel-body">
                            <!--Table Search v2-->
                            <div class="table-search-v2 margin-bottom-20">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>User Image</th>
                                                <th class="hidden-sm">About</th>
                                                <th>Status</th>
                                                <th>Contacts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="rounded-x" src="{{ asset('konectystheme/assets/img/testimonials/img1.jpg') }}" alt="">
                                                </td>
                                                <td class="td-width">
                                                    <h3><a href="#">Sed nec elit arcu</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                                                    <small class="hex">Joined February 28, 2014</small>
                                                </td>
                                                <td>
                                                    <span class="label label-success">Success</span>
                                                </td>
                                                <td>
                                                    <ul class="list-inline s-icons">
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                                            <i class="fa fa-dropbox"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <span><a href="#">info@example.com</a></span>
                                                    <span><a href="#">www.htmlstream.com</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-x" src="{{ asset('konectystheme/assets/img/testimonials/img2.jpg') }}" alt="">
                                                </td>
                                                <td>
                                                    <h3><a href="#">Donec at aliquam est, a mattis mauris</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                                                    <small class="hex">Joined March 2, 2014</small>
                                                </td>
                                                <td>
                                                    <span class="label label-info"> Pending</span>
                                                </td>
                                                <td>
                                                    <ul class="list-inline s-icons">
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                                            <i class="fa fa-dropbox"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <span><a href="#">info@example.com</a></span>
                                                    <span><a href="#">www.htmlstream.com</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-x" src="{{ asset('konectystheme/assets/img/testimonials/img3.jpg') }}" alt="">
                                                </td>
                                                <td>
                                                    <h3><a href="#">Pellentesque semper tempus vehicula</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                                                    <small class="hex">Joined March 3, 2014</small>
                                                </td>
                                                <td>
                                                    <span class="label label-warning">Expiring</span>
                                                </td>
                                                <td>
                                                    <ul class="list-inline s-icons">
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                                            <i class="fa fa-dropbox"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <span><a href="#">info@example.com</a></span>
                                                    <span><a href="#">www.htmlstream.com</a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="rounded-x" src="{{ asset('konectystheme/assets/img/testimonials/img4.jpg') }}" alt="">
                                                </td>
                                                <td>
                                                    <h3><a href="#">Alesuada fames ac turpis egestas</a></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id commodo lacus. Fusce non malesuada ante. Donec vel arcu.</p>
                                                    <small class="hex">Joined March 4, 2014</small>
                                                </td>
                                                <td>
                                                    <span class="label label-danger">Error!</span>
                                                </td>
                                                <td>
                                                    <ul class="list-inline s-icons">
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Facebook" href="#">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Twitter" href="#">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Dropbox" href="#">
                                                            <i class="fa fa-dropbox"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a data-placement="top" data-toggle="tooltip" class="tooltips" data-original-title="Linkedin" href="#">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <span><a href="#">info@example.com</a></span>
                                                    <span><a href="#">www.htmlstream.com</a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <!--End Table Search v2-->
                </div>
                <!--End Profile Body-->
            </div>
        </div><!--/end row-->
    </div><!--/container-->    
    <!--=== End Profile ===-->
    
</div>
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
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/back-to-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/counter/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/plugins/counter/jquery.counterup.min.js') }}"></script> 
<!-- Datepicker Form -->
<script src="{{ asset('konectystheme/assets/plugins/sky-forms/version-2.0.1/js/jquery-ui.min.js') }}"></script>
<!-- Scrollbar -->
<script src="{{ asset('konectystheme/assets/plugins/scrollbar/src/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('konectystheme/assets/plugins/scrollbar/src/perfect-scrollbar.js') }}"></script>
<!-- Validation Form -->
<script src="{{ asset('konectystheme/assets/plugins/sky-forms/version-2.0.1/js/jquery.validate.min.js') }}"></script>
<!-- Checkout Form -->
<script src="{{ asset('konectystheme/assets/plugins/sky-forms/version-2.0.1/js/jquery.maskedinput.min.js') }}"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/forms/reg.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/forms/checkout.js') }}"></script>
<script type="text/javascript" src="{{ asset('konectystheme/assets/js/plugins/datepicker.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        RegForm.initRegForm();
        Datepicker.initDatepicker();
        CheckoutForm.initCheckoutForm();        
    });
</script>
<script>
    jQuery(document).ready(function ($) {
        "use strict";
        $('.contentHolder').perfectScrollbar();
    });
</script>
<!--[if lt IE 9]>
    <script src="{{ asset('konectystheme/assets/plugins/respond.js') }}"></script>
    <script src="{{ asset('konectystheme/assets/plugins/html5shiv.js') }}"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('konectystheme/assets/plugins/sky-forms/version-2.0.1/js/sky-forms-ie8.js') }}"></script>
<![endif]-->

<!--[if lt IE 10]>
    <script src="{{ asset('konectystheme/assets/plugins/sky-forms/version-2.0.1/js/jquery.placeholder.min.js') }}"></script>
<![endif]-->


</body>
</html> 