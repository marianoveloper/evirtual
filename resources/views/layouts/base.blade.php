<!DOCTYPE html>
<html lang="es" xml:lang="es">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>


<!-- Page Title -->
<title>UCCuyo Educación Virtual</title>

<!-- Favicon and Touch Icons -->
<link href={{asset('images/Uccvirtual.png')}} rel="shortcut icon" type="image/png">
<link href={{asset('assets/images/apple-touch-icon.png')}} rel="apple-touch-icon">
<link href={{asset('assets/images/apple-touch-icon-72x72.png')}}el="apple-touch-icon" sizes="72x72">
<link href={{asset('assets/images/apple-touch-icon-144x144.png')}} rel="apple-touch-icon" sizes="144x144">
<link href={{asset('assets/images/apple-touch-icon-114x114.png')}} rel="apple-touch-icon" sizes="114x114">

<!-- Stylesheet -->
<link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet" type="text/css">
<link href={{asset('assets/css/jquery-ui.min.css')}} rel="stylesheet" type="text/css">
<link href={{asset('assets/css/animate.css')}} rel="stylesheet" type="text/css">
<link href={{asset('assets/css/css-plugin-collections.css')}} rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href={{asset('../assets/css/menuzord-skins/menuzord-rounded-boxed.css')}} rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href={{asset('assets/css/style-main.css')}} rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href={{asset('assets/css/preloader.css')}} rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href={{asset('assets/js/revolution-slider/css/settings.css')}} rel="stylesheet" type="text/css"/>
<link  href={{asset('assets/js/revolution-slider/css/layers.css" rel="stylesheet')}} type="text/css"/>
<link  href={{asset('assets/js/revolution-slider/css/navigation.css')}} rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href={{asset('assets/css/colors/theme-skin-color-set-1.css')}} rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src={{asset('assets/js/jquery-2.2.4.min.js')}}></script>
<script src={{asset('assets/js/jquery-ui.min.js')}}></script>
<script src={{asset('assets/js/bootstrap.min.js')}}></script>
<!-- JS | jquery plugin collection for this theme -->
<script src={{asset('assets/js/jquery-plugin-collection.js')}}></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src={{asset('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}></script>
<script src={{asset('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>


@yield('content')


<!-- Footer -->
<footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="">
    <div class="container">
      <div class="row border-bottom">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src={{asset('assets/images/marca1.png')}}>
                        
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Contactos</h4>
             <ul class="list-inline mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-color-2 mr-5"></i><a class="text-gray" href="#">Av. José Ignacio de la Roza 1516 Oeste -Rivadavia-San Juan</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">+54 264 4292300</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="#">campusvirtual@uccuyo.edu.ar</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a target="_blank" class="text-gray" href="http://www.uccuyo.edu.ar/">www.uccuyosj.edu.ar</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
           
          <div class="widget dark">
            <h5 class="widget-title mb-10">Seguinos</h5>
            <ul class="styled-icons icon-bordered icon-sm">
                <li><a target="_blank" href="http://www.uccuyosj.edu.ar/"><i class="fa fa-globe"></i></a></li>
              <li><a target="_blank" href="https://www.facebook.com/UCCuyoEducacionVirtual/"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="https://www.instagram.com/uccuyoeducacionvirtual/"><i class="fa fa-instagram"></i></a></li>
               
              
            </ul>
          
        </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Nuestros Horarios</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Lunes a Viernes : Mañana  </span>
                  <div class="value pull-left"> 9.00 am - 12.00 pm </div>
                </li>
                <li class="clearfix"> <span> Lunes a Viernes : Tarde</span>
                  <div class="value pull-left"> 17.00 am - 21.00 pm </div>
                </li>
                                  
              </ul>
            </div>
          </div>
        </div>
      </div>
      >
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright 2019.</p>
          </div>
          <div class="col-md-6 text-right">
         
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src={{asset('assets/js/custom.js')}}></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  -->
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) 
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

</body>
</html>