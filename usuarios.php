<!DOCTYPE html>

<html lang="en" class="no-js">
   
    <head>
        <meta charset="utf-8"/>
        <title>Novatech</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description"/>
        <meta content="FairTech" name="author"/>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
   <?php
   if('POST'== $_SERVER['REQUEST_METHOD']){
 header('Location: /ver_productos.php?t1='.$_POST['t1']);
   }
?>
  
    <body id="body" data-spy="scroll" data-target=".header">

          <header class="header navbar-fixed-top">
              <nav class="navbar" role="navigation">
                <div class="container">
                      <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                          <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/nova.png" alt="FlameOnePage Logo">
                                <img class="logo-img logo-img-active" src="img/nova.png" alt="FlameOnePage Dark Logo">
                            </a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse nav-collapse">
					
					<!--div class="language-switcher">
					  <ul class="nav-lang">
                        <li><a class="active" href="#">EN</a></li>
					    <li><a href="#">DE</a></li>
						<li><a href="#">FR</a></li>
					  </ul>
					</div---> 
					
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Inicio</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">Equipo</a></li>
								<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#services">Informacion</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#products">Productos</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="index.php">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
			</header>
       
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Novatech</h1>
                                <p class="color-white">Lo mejor en productos tecnologicos</p>
                            </div>
                            <!-- <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Detalles</a> -->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">Personal Approach</h2>
                                <p class="color-white">Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Take a Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- About -->
        <div id="about">
            <div class="content-lg container">
                <!-- Masonry Grid -->
                <div class="masonry-grid row">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 sm-margin-b-30">
                        <div class="margin-b-60">
                            <h2>Ventas Seguras</h2>
                            <p>Excelencia de personal</p>
                        </div>
                        <img class="full-width img-responsive wow fadeInUp" src="img/vender.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".2s">
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <div class="margin-b-60">
                          <h2>Tecnologia Moderna</h2>
                          <p>Tecnologia de calidad</p>  
                        </div>
						 <img class="full-width img-responsive wow fadeInUp" src="img/tecno.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".3s">
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <div class="margin-t-60 margin-b-60">
                            <h2>Soporte Experto</h2>
                            <p>Los mejores en soporte tecnico</p>
                        </div>
                        <img class="full-width img-responsive wow fadeInUp" src="img/500x500/03.jpg" alt="Portfolio Image" data-wow-duration=".3" data-wow-delay=".4s">
                    </div>
				</div>
                <!-- End Masonry Grid -->
            </div>
            
            <div class="bg-color-sky-light">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 md-margin-b-60">
                            <div class="margin-t-50 margin-b-30">
                                <h2>¿Porque Nosotros?</h2>
                                <p>Nos consideramos el establecimiento mejor preparado con equipo tecnologico en el pais para oferecer lo mejor.</p>
                            </div>
                            <!-- <a href="#" class="btn-theme btn-theme-sm btn-white-bg text-uppercase">More...</a> -->
                        </div>
                        
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Latest Products -->
        <div id="products">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Productos</h2>
                        <p>Productos de alta calidad</p>
                    </div>
                </div>
                <!--// end row -->
                <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="img/accesorios.png" alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Accesorios</a> <span class="text-uppercase margin-l-20">Productos</span></h4>
                        <p>Teclados, Mouse, Pantallas, Camaras y Mas</p>
                        <button type="submit" value="accesorios" name="t1" class="link" method="post">DETALLES</button>
                        
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="img/disco.jpg" alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Partes</a> <span class="text-uppercase margin-l-20">Productos</span></h4>
                        <p>Discos HDD,SSD,Memorias Ram, y Mas</p>
                        <button type="submit" value="partes" name="t1" class="link" method="post">DETALLES</button>
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive" src="img/970x647/03.jpg" alt="Latest Products Image">
                        </div>
                        <h4><a href="#">Computadoras</a> <span class="text-uppercase margin-l-20">Productos</span></h4>
                        <p>PC Gaming , PC Escritorio y Portatiles</p>
                        <button type="submit" value="computadoras" name="t1" class="link" method="post">DETALLES</button>
                    </div>
                    <!-- End Latest Products -->
                </div>
                </form>
                <!--// end row -->
            </div>
        </div>
        <!-- End Latest Products -->
               
           
        <!-- Services -->
        <div id="services">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="content-lg container">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>Servicios</h2>
                            <p>Ofrecemos servicio de reparacion en nuetro local</p>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row row-space-1 margin-b-2">
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Informacion de la compañia</h3>
                                    <p class="margin-b-5">PENSAR INFO</p>
                                </div>
                                <!-- <a href="#" class="content-wrapper-link"></a>     -->
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service bg-color-base" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon color-white icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3 class="color-white">Nuestro Equipo</h3>
                                    <p class="color-white margin-b-5">Personal altamente capacitado para atender sus nesecidades</p>
                                </div>
                                <!-- <a href="#" class="content-wrapper-link"></a>     -->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Vision</h3>
                                    <p class="margin-b-5">
                                    En nuestra visión queremos ser una empresa de referencia, que camina con el cambio de la tecnología y la sociedad, dando a conocer las posibilidades de los estándares y tecnologías libres. Esta labor se debe desempeñar de 
                                    forma ética y satisfactoria para nosotros, nuestros clientes y el resto de la sociedad.
                                    </p>
                                </div>
                                <!-- <a href="#" class="content-wrapper-link"></a>     -->
                            </div>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row row-space-1">
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Seguridad</h3>
                                    <p class="margin-b-5">Nuestro trabajo esta garantizado y asegurado para nuestros clientes</p>
                                </div>
                                <!-- <a href="#" class="content-wrapper-link"></a>     -->
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Hora de atencion de Lunes a Sabado de 9 A.M a 6 P.M</h3>
                                    <p class="margin-b-5">Esperamos su vista</p>
                                </div>
                                <!-- <a href="#" class="content-wrapper-link"></a>     -->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Mision</h3>
                                    <p class="margin-b-5">Proporcionar las tecnologías más innovadoras a medida de las 
                                    necesidades empresariales, con el objetivo de incrementar su competitividad y productividad. 
                                    Para ello implementamos soluciones prácticas adaptadas a sus necesidades y desarrollamos nuevas soluciones creativas. 
                                    Nuestra base parte del aprovechamiento de las nuevas redes.</p>
                                </div>
                                <!-- <a href="#" class="content-wrapper-link"></a>     -->
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Service -->
            
        <!-- Contact -->
      
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#body">Home</a></li>
                                <li class="footer-list-item"><a href="#about">Team</a></li>
                                <li class="footer-list-item"><a href="#work">Credentials</a></li>
                                <li class="footer-list-item"><a href="#contact">Contact</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Twitter</a></li>
                                <li class="footer-list-item"><a href="#">Facebook</a></li>
                                <li class="footer-list-item"><a href="#">Instagram</a></li>
                                <li class="footer-list-item"><a href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                                <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                                <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

          
         
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>