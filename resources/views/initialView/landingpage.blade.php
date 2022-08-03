@extends('layoutsLanding.indexLanding')

@section('landing')


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- SLIDER DE IMAGENES -->
  
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
    <!-- <button type="button"  id="botoninfo"class="btn btn-primary">Primary</button> -->
    
  </div>
  
  <div  class="carousel-inner">
    <div class="carousel-item active">
      <img class="heaven" src="assets/images/fondo-banner-01-min.jpg" class="d-block w-100" alt="...">
      <img class="eye" src="assets/images/serendipity-banner-home-enero-2022-autismo.png" class="d-block w-100" alt="...">
      
      <div id="text" class="carousel-caption d-none d-md-block">
        <h5 id="mes" width:50% >Inicio 05 de marzo</h5>
        <p id="tipodiplo" align="left">DIPLOMADO ONLINE EN:</p>
        <p id="curs" align="left">Intervención <br> multidisciplinaria <br> en la educación <br> especial</p>
      </div>
    </div>
    <div class="carousel-item">
      <img  class="heaven" src="assets/images/fondo-banner-01-min.jpg" class="d-block w-100" alt="...">
      <img class="eye" src="assets/images/serendipity-banner-home-integracion-sensorial.png" class="d-block w-100" alt="">
      <div id="text2" class="carousel-caption d-none d-md-block">
        <h5 id="mes" align="left">Inicio 05 de marzo</h5>
        <p id="tipodiplo" align="left">DIPLOMADO ONLINE EN:</p>
        <p id="curs" align="left">Psicoterapia Infantil</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="heaven" src="assets/images/fondo-banner-01-min.jpg" class="d-block w-100" alt="...">
      <img class="eye" src="assets/images/serendipity-banner-home-psicodiagnostico-clinico-infantil.png" class="d-block w-100" alt="">
      <div id="text" class="carousel-caption d-none d-md-block">
        <h5 id="mes" align="left">Inicio 05 de marzo</h5>
        <p id="tipodiplo" align="left">DIPLOMADO ONLINE EN</p>
        <p id="curs" align="left">Prevencion y manejo <br> de adicciones con <br> enfoque cognitivo <br>conductal</p>
      </div>
    </div>
  </div>
  <button id="prev" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button id="next" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- SLIDER DE IMAGENES -->
  <main id="main">
          <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
      <div class="row">
          <div class="col-lg-12 d-flex justify-content-left">
            <ul id="portfolio-flters">
            </ul>
          </div>
        </div>
        <h2 style="color: #223175; font-weight: bold;"> Diplomados que inician próximamente</h2>
          <!-- <li> -->
        <div class="row portfolio-container">
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/images/banner-interior-diplomado-psicoterapia-gestalt-para-adolescentes-300x300.png"width="300px" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            <br>
            <h4>
            <a id="unico" href="https://serendipitydiplomados.com/product/trastorno-del-espectro-autista-diagnostico-y-estrategias-de-intervencion-en-la-infancia-y-adolescencia/" tabindex="0">Trastorno del espectro <br> autista. Diagnóstico y <br> estrategias de
            <br> intervención en la <br> infancia y adolescencia</a>
            </h4>
            <h5 style="color:#223175; font-size:18px; font-weight: bold;">Inicio 05 de febrero</h5>
            </h4>
            <bdi><span style="color:#223175; font-size:20px; class="woocommerce-Price-currencySymbol">$6,600.00</span> </bdi>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/images/banner-interior-diplomado-autismo-02-300x300.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                 
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            <br>
            <h4>
            <a id="unico" href="https://serendipitydiplomados.com/product/tanatologia-pediatrica-2/" tabindex="0">Tanatología Pediátrica</a>
            <h5 style="color:#223175; font-size:20px; font-weight: bold;">Inicio 05 de febrero</h5>
            </h4>
            <bdi><span style="color:#223175; font-size:18px; class="woocommerce-Price-currencySymbol">$6,100.00</span> </bdi>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/images/banner-interior-diplomado-autismo-02-300x300.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            <br>
            <h4>
            <a id="unico" href="https://serendipitydiplomados.com/product/psicodiagnostico-clinico-infantil/" tabindex="0">Psicodiagnóstico en la <br> Infancia</a>
            <h5 style="color:#223175; font-size:18px; font-weight: bold;">Inicio 05 de febrero</h5>
            </h4>
            <bdi><span style="color:#223175; font-size:20px; class="woocommerce-Price-currencySymbol">$6,100.00</span> </bdi>
            </div>
          </div>
        </div>
      </div>
      

    <div class="section mcb-section mcb-section-ak9ohb4pm hide-tablet hide-mobile rocket-lazyload lazyloaded" style="background-repeat: no-repeat; background-position: center center; background-image: url(&quot;https://serendipitydiplomados.com/wp-content/uploads/2021/01/fnd-gris-min.jpg&quot;);" data-ll-status="loaded">
    <!-- <div class="section_wrapper mcb-section-inner"> -->
      <div class="wrap mcb-wrap mcb-wrap-8997u9tdr one  column-margin-0px valign-top clearfix" style="">
        <div class="mcb-wrap-inner">
          <div class="column mcb-column mcb-item-rrmxripp3 one-sixth column_column">
          <div class="column_attr clearfix align_right" style="">
          <div class="image_frame image_item no_link scale-with-grid no_border">
          </div>
    </div>
  </div>
  
<div class="column mcb-column mcb-item-h0dkhwp57 five-sixth column_column">
  <div class="column_attr clearfix align_left" style=" ">

<h3 id="diplomados" > <img width="49" height="49" class="scale-with-grid" src="assets/images/ches-icon-min.png" alt="Inicio" title=""/> Todos nuestros diplomados están avalados ante la universidad CEHES con clave ante SEP</h3>
</div>
</div>
</div>
</div>
<div class="wrap mcb-wrap mcb-wrap-odpj4o1ov one  valign-top clearfix" style="">
  <div class="mcb-wrap-inner">
    <div class="column mcb-column mcb-item-m5o7y6vst one column_divider">
    <hr class="no_line" style="margin:0 auto 50px">
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- ESTO ES UN CARD -->
 <div class="container py-3">
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <br><br><br>
          <h4 style="color:#223175; font-weight: bold;" class="card-title">CATEGORÍAS DE CURSOS</h4>
          <p style="color:#223175;" class="card-text">
          Conoce las áreas en las que contamos con <br> diplomados online.
          </p>
          <p style="color:#223175;" class="card-text">Encuentra un catálogo amplio encursos <br> dentro del área Psicológica.</p>
          <br>
        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="assets/images/slider-categ-min.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="assets/images/tx-del-neurodesarrollo.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block" src="assets/images/genero.png" alt="Third slide">
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End of carousel -->
    </div>
  </div>
  <!-- End of card -->
</div>
<!-- AQUI TERMINA EL CARD -->
    <!-- ======= Portfolio Section ======= -->
    <section class="colorfondo" id="portfolio" class="portfolio">
    <!-- <section id="services" class="services"> -->
      <div class="contactoser">
          <div class="col-md-6 mt-8 mt-md-0">
            <br><br>
              <p style = "font-size: 30px;" > <strong> CONTÁCTANOSS </strong> </p>
              <p style = "font-size: 18px;" > Llena el formulario con tus datos y  nos pondremos en contacto a la brevedad posible. </p>
              <p style = "font-size: 18px;"><i class="fa-solid fa-envelope"></i>  info@serendipity.com  </p>
              <p style = "font-size: 18px;"><i class="fa-solid fa-phone-flip"></i>  961) 1176 570 - Oficinas  </p>         
            </div>
          </div>
    <!-- </section>End Services Section -->
    
    <form class="actionform" action="" method="" > <br>
				<input name="nombre" type="text" placeholder="Nombre" maxlength="30" pattern="[a-zA-Z0-9]+" required autofocus/>
				<input name="email" type="email" placeholder="Correo electrónico" required />	
        <input type="tel" name="telefono" placeholder="Telefono" required />
        <input name="nombre" type="text" placeholder="Asunto" maxlength="30" pattern="[a-zA-Z0-9]+" required autofocus/>
				<textarea name="consulta" placeholder="Mensaje" rows="6" required></textarea>
				<button id="enviar" name="enviar" type="submit" class="btn btn-danger">ENVIAR</button>

    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->


@endsection