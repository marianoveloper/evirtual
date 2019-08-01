@extends('layouts.base')
@section('content')
   <!-- Header -->
   <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center p-0">
      <div class="container">
        <div class="row">
          
          <div class="col-md-8">
            <div class="widget m-0 pull-right sm-pull-none sm-text-center">
              <ul class="list-inline pull-right">
               
               
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
            <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="{{asset('assets/images/marca2.png')}}" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
       
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu ">
              <li class="active"><a href="http://www.uccuyosj.edu.ar/">HOME</a></li>
              <li><a href="#informacion">INFORMACION</a></li>   
              <li><a href="#Novedades">NOVEDADES</a></li>                      
              <li><a href="{{ url('/home') }}">CURSOS</a></li>
              <li><a target="_blank" href="https://virtual.uccuyo.edu.ar">CAMPUS</a></li> 
              
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home">
        <div class="container-fluid p-0">
          
          <!-- Slider Revolution Start -->
          <div class="rev_slider_wrapper">
            <div class="rev_slider" data-version="5.0">
              <ul>
  
                <!-- SLIDE 1 -->
                <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('assets/images/portada1.png')}}" data-rotate="0" data-saveperformance="off" data-title="Estudia a distancia" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('assets/images/portada1.png')}}" alt=""  data-bgposition="center 10%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                  <!-- LAYERS -->
  
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                    id="rs-1-layer-1"
  
                    data-x="['left']"
                    data-hoffset="['30']"
                    data-y="['middle']"
                    data-voffset="['-110']" 
                    data-fontsize="['100']"
                    data-lineheight="['110']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap; font-weight:700;">Estudiar
                  </div>
  
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                    id="rs-1-layer-2"
  
                    data-x="['left']"
                    data-hoffset="['35']"
                    data-y="['middle']"
                    data-voffset="['-25']" 
                    data-fontsize="['35']"
                    data-lineheight="['54']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap; font-weight:600;">A Distancia
                  </div>
  
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-white" 
                    id="rs-1-layer-3"
  
                    data-x="['left']"
                    data-hoffset="['35']"
                    data-y="['middle']"
                    data-voffset="['35']"
                    data-fontsize="['16']"
                    data-lineheight="['28']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1400" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Comienza a estudiar en una modalidad que se adapta a tus tiempos!.
                  </div>
  
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme" 
                    id="rs-1-layer-4"
  
                    data-x="['left']"
                    data-hoffset="['35']"
                    data-y="['middle']"
                    data-voffset="['100']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1400" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 5; white-space: nowrap; letter-spacing:1px;"> 
                  </div>
                </li>
  
                <!-- SLIDE 2 -->
                <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('assets/images/portada1.png')}}" data-rotate="0" data-saveperformance="off" data-title="Vos Podés" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('assets/images/portada1.png')}}"  alt=""  data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                  <!-- LAYERS -->
  
                  <!-- LAYER NR. 1 --> 
                  <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                    id="rs-2-layer-1"
                  
                    data-x="['left']"
                    data-hoffset="['0']"
                    data-y="['middle']"
                    data-voffset="['-90']" 
                    data-fontsize="['28']"
                    data-lineheight="['54']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Cursos online a tu alcance
                  </div>
  
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                    id="rs-2-layer-2"
  
                    data-x="['left']"
                    data-hoffset="['0']"
                    data-y="['middle']"
                    data-voffset="['-20']"
                    data-fontsize="['48']"
                    data-lineheight="['70']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;s:500"
                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"> Vos Podés
                  </div>
  
                  
                </li>
  
                <!-- SLIDE 3 -->
               
  
              </ul>
            </div>
            <!-- end .rev_slider -->
          </div>
          <!-- end .rev_slider_wrapper -->
          <script>
            $(document).ready(function(e) {
              $(".rev_slider").revolution({
                sliderType:"standard",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 5000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                  }
                },
                responsiveLevels: [1240, 1024, 778],
                visibilityLevels: [1240, 1024, 778],
                gridwidth: [1170, 1024, 778, 480],
                gridheight: [650, 768, 960, 720],
                lazyType: "none",
                parallax: {
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                    type: "scroll"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
              });
            });
          </script>
          <!-- Slider Revolution Ends -->
  
        </div>
      </section>
<!-- Section:Informacion-->
<section id="informacion">
    <div class="container pb-60">
      <div class="section-content">
        <div class="row">
          <div class="col-md-8">
            <div class="meet-doctors">
              <h2 class="text mt-0 line-height-1">UCCuyo Educación Virtual </h2>
              
              <p>El departamento de Educación Virtual de la UCCuyo, se enfoca en promover una oferta educativa virtual de calidad que atienda a los requerimientos contextuales e históricos,  a fin de enriquecer la oferta académica, ampliar el alcance de sus propuestas de formación y cumplir con su misión institucional. .</p>
              <h6 class="text-uppercase letter-space-5 line-bottom title font-playfair text-uppercase">Ventajas </h6>
            </div>
            <div class="row mb-sm-30">
              <div class="col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-20">
                 <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                  <i class="pe-7s-timer text-white"></i>
                 </a>
                 <div class="ml-70 ml-sm-0">
                  <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">Flexibilidad</h5>
                  <p class="text-gray">Podes estudiar donde quieras y a tu ritmo, organiza el tiempo a tu manera.</p>
                 </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-20">
                 <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                  <i class="pe-7s-hourglass text-white"></i>
                 </a>
                 <div class="ml-70 ml-sm-0">
                  <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">Autonomia</h5>
                  <p class="text-gray">Estudiar de manera virtual ejercita capacidades de auto-organización y promueve el compromiso y la responsabilidad</p>
                 </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-20">
                 <a class="icon bg-theme-color-2 icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                  <i class="pe-7s-unlock text-white"></i>
                 </a>
                 <div class="ml-70 ml-sm-0">
                  <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">Libertad de elección</h5>
                  <p class="text-gray">Poder escoger exactamente lo que se quiere estudiar, lo que realmente interesa.</p>
                 </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="icon-box p-0 mb-20">
                 <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-sm pull-left sm-pull-none flip" href="#">
                  <i class="pe-7s-cloud text-white"></i>
                 </a>
                 <div class="ml-70 ml-sm-0">
                  <h5 class="icon-box-title mt-10 text-uppercase letter-space-2 mb-10">Acceso a la información de manera ilimitada</h5>
                  <p class="text-gray"> Los Recursos digitales siempre están a disposición las 24 horas al día..</p>
                 </div>
                </div>
              </div>
             
            </div>
          </div>
          <div class="col-md-4">
           <div class="p-30 mt-0 bg-theme-colored">
            <h3 class="title-pattern mt-0"><span class="text-white">Solicitar Informacion</span></h3>
        <!-- verificacion de errores!-->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <ul>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
         </ul>
        </div>
       @endif
       @if ($message = Session::get('success'))
       <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
               <strong>{{ $message }}</strong>
       </div>
       @endif
           <!-- Formulario de Contacto-->
           <form  class="form-group" method="post" action="{{ route('contact') }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group mb-20">
                  <input placeholder="Nombre y Apellido" type="text" id="name" name="name" required="" class="form-control">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-20">
                  <input placeholder="Email" type="email" id="email" name="email" class="form-control" required="">
                </div>
              </div>
             
              <div class="col-sm-12">
                <div class="form-group mb-20">
                  <div class="styled-select">
                    <select id="curso" name="curso"  class="form-control"  
                   data-placeholder="Seleccione curso..." >
                     <option>Seleccionar Curso</option>
                     @foreach ($courses as $item){
                     <option value="{{$item->name}}"> {{ $item->name }} </option>
                     }
                     @endforeach

                   </select>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-12">
                <div class="form-group">
                  <textarea placeholder="Ingrese mensaje" rows="3" class="form-control required" name="msg" id="msg" aria-required="true" ></textarea>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-0 mt-10">
                 
                  <button type="submit" name="submit" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block" data-loading-text="Por favor espere...">Enviar</button>
                </div>
              </div>
            </div>
          </form>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Section: Cursos -->
    <section id="Novedades" class="">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-0">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-uppercase font-28 line-bottom">Novedades <span class="text-theme-color-2 font-weight-400"></span></h2>
             
           </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel-3col" data-dots="true">
                 <div class="item">
                        <article class="post clearfix maxwidth600 mb-sm-30">
                          <div class="entry-header">
                            <div class="post-thumb thumb"> <img src="images/curso-seguridad-paciente.png" alt="" class="img-responsive img-fullwidth"> </div>
                            
                          </div>
                        
                        </article>
                     </div>
                     <div class="item">
                      <article class="post clearfix maxwidth600 mb-sm-30">
                        <div class="entry-header">
                          <div class="post-thumb thumb"> <img src="images/curso-publicacion-de-resultados.png" alt="" class="img-responsive img-fullwidth"> </div>
                          
                        </div>
                      
                      </article>
                    </div>
                    <div class="item">
                      <article class="post clearfix maxwidth600 mb-sm-30">
                        <div class="entry-header">
                          <div class="post-thumb thumb"> <img src="images/curso-aprendizaje-colaborativo.png" alt="" class="img-responsive img-fullwidth"> </div>
                          
                        </div>
                      
                      </article>
                    </div>
                    <div class="item">
                      <article class="post clearfix maxwidth600 mb-sm-30">
                        <div class="entry-header">
                          <div class="post-thumb thumb"> <img src="images/curso-gestion-del-tiempo.png" alt="" class="img-responsive img-fullwidth"> </div>
                          
                        </div>
                      
                      </article>
                    </div>
                    <div class="item">
                      <article class="post clearfix maxwidth600 mb-sm-30">
                        <div class="entry-header">
                          <div class="post-thumb thumb"> <img src="images/curso-tesis-maestriaydoctorado.png" alt="" class="img-responsive img-fullwidth"> </div>
                          
                        </div>
                      
                      </article>
                    </div>
                    <div class="item">
                      <article class="post clearfix maxwidth600 mb-sm-30">
                        <div class="entry-header">
                          <div class="post-thumb thumb"> <img src="images/curso-educacion-superior.png" alt="" class="img-responsive img-fullwidth"> </div>
                          
                        </div>
                      
                      </article>
                    </div>
                    <div class="item">
                      <article class="post clearfix maxwidth600 mb-sm-30">
                        <div class="entry-header">
                          <div class="post-thumb thumb"> <img src="images/curso-interpretacion-proteinograma.png" alt="" class="img-responsive img-fullwidth"> </div>
                          
                        </div>
                      
                      </article>
                    </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/curso-moodle.png" alt="" class="img-responsive img-fullwidth"> </div>
                    
                  </div>
               
                </article>
              </div>
              
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/curso-alzheimer.png" alt="" class="img-responsive img-fullwidth"> </div>
                    
                  </div>
                
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/curso-atlas-ti.png" alt="" class="img-responsive img-fullwidth"> </div>
                    
                  </div>
                
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/curso-spss.png" alt="" class="img-responsive img-fullwidth"> </div>
                    
                  </div>
                
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/curso-cvar.png" alt="" class="img-responsive img-fullwidth"> </div>
                    
                  </div>
                
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/curso-catequesis.png" alt="" class="img-responsive img-fullwidth"> </div>
                    
                  </div>
                
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="images/curso-conicet.png" alt="" class="img-responsive img-fullwidth"> </div>
                    
                  </div>
                 
                </article>
              </div>
              
              <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img src="images/curso-indice.png" alt="" class="img-responsive img-fullwidth"> </div>
                      
                    </div>
                  
                  </article>
                </div>
                <div class="item">
                    <article class="post clearfix maxwidth600 mb-sm-30">
                      <div class="entry-header">
                        <div class="post-thumb thumb"> <img src="images/curso-inmunologia.png" alt="" class="img-responsive img-fullwidth"> </div>
                        
                      </div>
                    
                    </article>
                  </div>
                  <div class="item">
                      <article class="post clearfix maxwidth600 mb-sm-30">
                        <div class="entry-header">
                          <div class="post-thumb thumb"> <img src="images/curso-monografias.png" alt="" class="img-responsive img-fullwidth"> </div>
                          
                        </div>
                      
                      </article>
                    </div>
                    <div class="item">
                        <article class="post clearfix maxwidth600 mb-sm-30">
                          <div class="entry-header">
                            <div class="post-thumb thumb"> <img src="images/curso-proteinograma.png" alt="" class="img-responsive img-fullwidth"> </div>
                            
                          </div>
                        
                        </article>
                      </div>
                   
            </div>
          </div>
        </div>
      </div>
    </section>
     
    
    <!-- Section: Contact -->
   
   

    
    
    
  <!-- end main-content -->
  </div>
 
@endsection