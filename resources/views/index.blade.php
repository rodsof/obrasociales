<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Cobertura de salud</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/hands.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{  asset('css/LineIcons.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{  asset('css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{  asset('css/slick.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{  asset('css/animate.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{  asset('css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{  asset('css/style.css') }}">


</head>

<body>
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR PART START ======-->

    <section class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="{{  asset('images/medico.png') }}" style="height:100px" alt="Logo">
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarEight" aria-controls="navbarEight" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarEight">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">INICIO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">OBRAS SOCIALES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">MEDICINA PREPAGA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">RANKING</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">RECURSOS</a>
                                    </li>
                                    <li class="nav-item">
                                    <div class="navbar-btn d-lg-inline-block">
                                    <a class="menu-bar" href="#side-menu-right">CONTACTO</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="slider-area">
            <div class="bd-example">
                <div id="carouselOne" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOne" data-slide-to="0" class="active"></li>
                        
                    </ol>

                    <div class="carousel-inner">
                    <div class="carousel-item bg_cover active" style="background-image: url( images/slider-2.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
                                   
                                        <div class="col-xl-5 col-lg-5 col-sm-6">
                                        <h1 class="carousel-title"> COTIZÁ YA! </h1>
                                            <h2 class="carousel-title">Todas las Coberturas Médicas</h2>
                                        </div>
                                        <div class="contact-form form-style-one mt-35 wow fadeIn col-xl-7 col-lg-7 col-sm-6" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form  id="contact-form" action="{{url('sendemail/send')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-input mt-15">
                                <label>Nombre</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="¿Cuál es su nombre?" name="nombre" required>
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Por ejemplo: ipsum@gmail.com" name="email" required />
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Mensaje</label>
                                <div class="input-items default">
                                    <textarea placeholder="¿Cuál es su consulta?" name="mensaje" required></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" class="main-btn rounded-three">ENVIAR</button>
                            </div> <!-- form input -->
                            <!-- messages from server -->
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
	@endif <!-- end of messages from server -->
                        </form>
                    </div> <!-- contact form -->
                                    </div> <!-- row -->
                                </div> <!-- container -->
                            </div> <!-- carousel caption -->
                        </div> <!-- carousel-item -->

                       

                       <!-- <div class="carousel-item bg_cover" style="background-image: url( images/osecac.jpg)">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row justify-content-center">
    
                                    </div>  row -->
                               <!-- </div> container -->
                           <!-- </div> carousel caption -->
                        <!--</div>  carousel-item -->   
                    </div> <!-- carousel-inner -->

                    <!-- <a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev">
                        <i class="lni-arrow-left-circle"></i>
                    </a>

                    <a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next">
                        <i class="lni-arrow-right-circle"></i>
                    </a> -->
                </div> <!-- carousel -->
            </div> <!-- bd-example -->
        </div>

    </section>

    <!--====== NAVBAR PART ENDS ======-->

    <!--====== SAIDEBAR PART START ======-->

    <div class="sidebar-right">
        <div class="sidebar-close">
            <a class="close" href="#close"><i class="lni-close"></i></a>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-logo text-center">
                <a href="#"><img src="{{  asset('images/medico.png') }}" alt="Logo"></a>
            </div> <!-- logo -->
            <div class="sidebar-menu">
            <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form  id="contact-form" action="/" method="post">
                            <div class="form-input mt-15">
                                <label>Nombre</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="¿Cuál es su nombre?" name="name">
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Por ejemplo: ipsum@gmail.com" name="email">
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Mensaje</label>
                                <div class="input-items default">
                                    <textarea placeholder="¿Cuál es su consulta?" name="mensaje"></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" class="main-btn rounded-three">ENVIAR</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
            </div> <!-- menu -->
            <div class="sidebar-social d-flex align-items-center justify-content-center">
                <span>Teléfonos</span>
                <ul>
                    <li><a href="#"><i class="lni-phone">+54 23423423</i></a></li>
                </ul>
            </div> <!-- sidebar social -->
        </div> <!-- content -->
    </div>
    <div class="overlay-right"></div>

    <!--====== SAIDEBAR PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="about-image text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="100">
                        <img src="{{  asset('images/healinsurance.png') }}" alt="services">
                    </div>
                    <div class="section-title text-center mt-30 pb-40">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">OBRAS SOCIALES</h4>
                        <p class="text wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                        Las Obras Sociales son organizaciones que tienen a su cargo la prestación de servicios de salud a las personas en relación de dependencia de Argentina.
Somos expertos en obras sociales en Argentina. 
                        </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="about-icon">
                            <img src=" images/hands.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Menos de 24 hs</h4>
                            <p class="text">Accedé a una prestación de salud alta de forma simplificada, sin salir de tu casa y en 24 horas</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.4s">
                        <div class="about-icon">
                            <img src=" images/price-icon-7334.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Mejor precio</h4>
                            <p class="text">Comparamos Obras Sociales para conseguirte un mejor precio</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="about-icon">
                            <img src=" images/communications.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Sos más que un número</h4>
                            <p class="text">La opinión de cada afiliado es muy importante para nosotros</p>
                        </div>
                    </div> <!-- single about -->
                </div>
                <div class="col-lg-6">
                    <div class="single-about d-sm-flex mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.8s">
                        <div class="about-icon">
                            <img src=" images/deportes-y-competicion.png" alt="Icon">
                        </div>
                        <div class="about-content media-body">
                            <h4 class="about-title">Tenemos la mejor selección de planes</h4>
                            <p class="text">Con información de todos los planes de todas las compañías</p>
                        </div>
                    </div> <!-- single about -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== portfolio PART START ======-->

    <section id="portfolio" class="portfolio-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Medicina Prepaga</h3>
                        <p class="text">La oferta de salud privada en nuestro país es amplia, con planes para todos lo gustos y bolsillos. El nivel de precio no es sinónimo de calidad, 
                        por lo que recomendamos revisar en detalle la propuesta de cada prepaga ingresando a su ficha correspondiente.</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu pt-30 text-center">
                        <ul>
                            <li data-filter="*" class="active">MÁS ELEGIDAS</li>
                            <li data-filter=".branding-3">MEJOR ATENCIÓN AL CLIENTE</li>
                            <li data-filter=".marketing-3">MEJORES EN CARTILLA Y PRESTADORES</li>
                            <li data-filter=".planning-3">MEJORES EN COBERTURA GEOGRÁFICA</li>
                            <li data-filter=".research-3">MEJORES EN PRECIO</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
            </div> <!-- row -->
            <div class="row grid">
                <div class="col-lg-4 col-sm-6 branding-3 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src="images/osde.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="{{  asset('images/osde.jpg') }}"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="https://www.osde.com.ar/index.html#!homepage.html"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">OSDE</a></h4>
                            <p class="text">La más amplia red de prestadores y la prepaga más elegida del país.</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 marketing-3 research-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src="images/sucursales-swiss-medical.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="{{  asset('images/sucursales-swiss-medical.jpg')}}"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="https://www.swissmedical.com.ar/smgnewsite/prepaga/"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Swiss Medical</a></h4>
                            <p class="text">Excelentes sanatorios propios y planes para cada necesidad.</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 branding-3 marketing-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src="{{  asset('images/sucursales-Galeno.jpg')}}" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="{{  asset('images/sucursales-Galeno.jpg')}}"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="https://www.e-galeno.com.ar/Pages/default.aspx"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Galeno</a></h4>
                            <p class="text">Altos indices de satisfacción y la red de Sanatorios de la Trinidad.</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 planning-3 research-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="portfolio-image">
                            <img src=" images/sucursales-Medicus.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href="{{  asset('images/sucursales-Medicus.jpg') }}"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="https://medicus.com.ar/#/"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Medicus</a></h4>
                            <p class="text">Gran red médico-asistencial, con centros de atención innovadores y personal de salud.</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 marketing-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="portfolio-image">
                            <img src=" images/sucursales-sancor-salud.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href=" images/sucursales-sancor-salud.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="https://www.sancorsalud.com.ar/"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">SanCor Salud</a></h4>
                            <p class="text">Con fuerte presencia en el interior del país y una agresiva oferta en Capital y GBA, es hoy uno de los grupos más elegidos por los argentinos.</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
                <div class="col-lg-4 col-sm-6 planning-3">
                    <div class="single-portfolio mt-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <div class="portfolio-image">
                            <img src=" images/sucursales-medife.jpg" alt="">
                            <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                <div class="portfolio-content">
                                    <div class="portfolio-icon">
                                        <a class="image-popup" href=" images/sucursales-medife.jpg"><i class="lni-zoom-in"></i></a>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="https://www.medife.com.ar/"><i class="lni-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h4 class="portfolio-title"><a href="#">Medifé</a></h4>
                            <p class="text">Una de las empresas de salud de más crecimiento en los últimos años. 
                            Apunta a un público jóven al que ofrece cobertura nacional, gran cartilla y centros propios.</p>
                        </div>
                    </div> <!-- single portfolio -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== portfolio PART ENDS ======-->
    
    <!--====== PRINICNG STYLE EIGHT START ======-->

    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Ranking de medicina prepaga</h3>
                        <p class="text">Con este top de empresas, buscamos mostrar en forma clara y 
                        transparente cuál es la valoración relativa de una empresa vs. sus principales alternativas. 
                        Sin embargo, tenga en cuenta que el mismo puede no ser suficiente para sacar conclusiones respecto a la calidad de servicio.
Nuestra recomendación es entrar a la página de la prepaga u obra social de su interés y leer tanto la información detallada sobre ella como
 también las opiniones reales de los afiliados a sus servicios. Cuánta más información usted tenga, mejor podrá decidir.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="pricing-icon text-center">
                            <img src=" images/prevencion-salud.jpg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Prevención salud</h5>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i>
Prevención Salud es la empresa de medicina prepaga y cobertura médica del Grupo Sancor Seguros, uno de los grupos empresarios más importantes de la Argentina,
 con más de 70 años de trayectoria en el mercado asegurador
 y que en los últimos años ha diversificado sus negocios hasta hoy en día ofrecer, entre tantos, planes de salud pensados para cada necesidad.</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-three" href="https://www.prevencionsalud.com.ar/">SITIO OFICIAL</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="pricing-icon text-center">
                            <img src=" images/federada-salud.jpg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Federada Salud</h5>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i>Federada Salud nace en el año 1963, por la iniciativa de un grupo de productores agropecuarios de Rosario.
                                 En aquel entonces, estableció precedentes por ser la primer mutual representativa del sector agropecuario de Argentina. Desde 1980,
                                  Federada Salud abre sus puertas a personas de diversos sectores, permitiendo que toda la comunidad pueda acceder a sus servicios.

Como empresa nacida en la provincia de Santa Fe, Federada Salud cuenta con una importante presencia en el interior del país. Su red de prestadores ha crecido año a año,
 llegando a la actual cartilla de profesionales distribuidos por toda Argentina.</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-three" href="https://www.federada.com/">SITIO OFICIAL</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style-one mt-40 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="pricing-icon text-center">
                            <img src=" images/aca.jpg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">AcaSalud</h5>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> 
Aca Salud es una de las organizaciones de medicina asistencial más importantes de todo el interior del país. Con mas de 45 años de permanencia en la asistencia médica privada, mas de 
45 sucursales, 400 centros de atención personalizada y superando los 146.000 asociados, AcaSalud es una de las principales empresas de medicina prepaga de la Argentina.
Es parte de la Asociación de Cooperativas Argentinas (ACA), también integrado por el Grupo Asegurador La Segunda, la Fundación Nodos y Coovaeco Turismo, 
entre los que conforman un grupo empresario gravitante en el interior del país.
</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-three" href="https://www.acasalud.com.ar/home.php">SITIO OFICIAL</a>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG STYLE EIGHT ENDS ======-->
    
   
    
    <!--====== TESTIMONIAL THREE PART START ======-->

    <section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Nuestros clientes tienen mucho que decir</h3>
                        <p class="text">Hemos ayudado a muchas personas tratando a todas de manera igualitaria. Deje de perder tiempo buscando su obra social personalmente. Satisfacción garantizada!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="row testimonial-active">
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src=" images/author-1.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text"> Como empleado temporal, no califico para el plan de salud de la compañía. Pero encontré opciones asequibles en este sitio.</p>
                                    <h6 class="author-name">Juan</h6>
                                    <span class="sub-title">CABA</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src=" images/author-1.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">El plan de mis padres ya no me cubriría por mi edad. Las pocas obras sociales que conocía eran inaccesibles para mí. Estaba desesperada hasta que encontré este sitio.</p>
                                    <h6 class="author-name">Florencia</h6>
                                    <span class="sub-title">Córdoba</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src=" images/author-1.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">Antes no podíamos pagar una obra social, así que asistíamos a hospitales públicos. Ahora tenemos cobertura asequible, gracias.</p>
                                    <h6 class="author-name">Silvia</h6>
                                    <span class="sub-title">CABA</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                        <div class="col-lg-4">
                            <div class="single-testimonial mt-30 mb-30 text-center">
                                <div class="testimonial-image">
                                    <img src=" images/author-1.png" alt="Author">
                                </div>
                                <div class="testimonial-content">
                                    <p class="text">La vida era un poco caótica después de mi divorcio: mudanzas, cambios de trabajo constantes, pago de abogados. No podía pagar mi plan anterior, pero acá encontré opciones accesibles.</p>
                                    <h6 class="author-name">Horacio</h6>
                                    <span class="sub-title">Pehuajó</span>
                                </div>
                            </div> <!-- single testimonial -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL THREE PART ENDS ======-->
    
   
    
    <!--====== CONTACT TWO PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20">
                        <h3 class="title">Llegaste al fin de la página</h3>
                        <p class="text">Si estás buscando asesoramiento para acceder a un plan de salud, estás en el lugar correcto.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-two mt-50 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <h4 class="contact-title">Vamos a ayudarte a encontrar la obra social y el plan más adecuados</h4>
                        <p class="text">Tu salud y tu bienestar son nuestra prioridad. Enviános un mensaje con el tipo de prestación al que te interesaría acceder y nosotros te ayudamos a buscar la compañía y el plan que mejor se ajuste.</p>
                        <ul class="contact-info">
                         
                        </ul>
                    </div> <!-- contact two -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form form-style-one mt-35 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <form  id="contact-form" action="{{url('sendemail/send')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-input mt-15">
                                <label>Nombre</label>
                                <div class="input-items default">
                                    <input type="text" placeholder="Nombre" name="nombre" required>
                                    <i class="lni-user"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Email</label>
                                <div class="input-items default">
                                    <input type="email" placeholder="Email" name="email" required>
                                    <i class="lni-envelope"></i>
                                </div>
                            </div> <!-- form input -->
                            <div class="form-input mt-15">
                                <label>Mensaje</label>
                                <div class="input-items default">
                                    <textarea placeholder="Mensaje" name="mensaje" required></textarea>
                                    <i class="lni-pencil-alt"></i>
                                </div>
                            </div> <!-- form input -->
                            <p class="form-message"></p>
                            <div class="form-input rounded-buttons mt-20">
                                <button type="submit" class="main-btn rounded-three">Enviar</button>
                            </div> <!-- form input -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT TWO PART ENDS ======-->
    
    <!--====== FOOTER FOUR PART START ======-->

    <footer id="footer" class="footer-area">
       
        
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright text-center text-lg-left mt-10">
                            <p class="text">Desarrollado por <a style="color: #ff8c8c">Sofía Rodríguez</a> </p>
                        </div> <!--  copyright -->
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo text-center mt-10">
                            <a href="/"><img src="images/medico.png" style="height:50px" alt="logo"></a>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-5">
                     
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>

    <!--====== FOOTER FOUR PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  

    <!--====== PART START ======-->



    <!--====== PART ENDS ======-->










    <!--====== jquery js ======-->
    <script src="{{  asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{  asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{  asset('js/bootstrap.min.js') }}"></script>
    <script src="{{  asset('js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src=" {{  asset('js/slick.min.js') }}"></script>

    <!--====== Isotope js ======-->
    <script src=" {{  asset('js/isotope.pkgd.min.js') }}"></script>

    <!--====== Images Loaded js ======-->
    <script src="{{  asset('js/imagesloaded.pkgd.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{  asset('js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Scrolling js ======-->
    <script src="{{  asset('js/scrolling-nav.js') }}"></script>
    <script src="{{  asset('js/jquery.easing.min.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{  asset('js/wow.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{  asset('js/main.js') }}"></script>

</body>

</html>
