@extends("layoutsLanding.indexLanding")
@section("landing")



  <!-- SLIDER DE IMAGENES -->

    
    <!-- <button type="button"  id="botoninfo"class="btn btn-primary">Primary</button> -->
    
    
  <div  class="carousel-inner">
      <img class="heaven" src="{{asset('assets/images/fondo-banner-01-min.jpg')}}" class="d-block w-100" alt="...">
      <img class="eye" src="{{asset('assets/images/serendipity-banner-home-enero-2022-autismo.png')}}" class="d-block w-100" alt="...">
      
      <div id="text" class="carousel-caption d-none d-md-block">
        <p id="tipodiplo" align="left" style="margin-left: 111px;"><strong  style="color: #FCA956;font-size: 19px; font-style: oblique;"> Diplomado en:</strong></p>
        <p id="curs" align="left" style="margin-left: 111px;margin-bottom: -4px;">Trastorno del <br>espectro autista. <br>Diagnóstico y <br>estrategias de <br>intervención en <br>la infancia y <br>adolescencia</p>
      </div>
  </div>
<!-- SLIDER DE IMAGENES -->
<div class="container">
    <div class="row5">
        <div class="col-md-4">
            <div class="tarjetaInfo">
              <div style="margin-top: -21px;">
                <h3 class="subtituloProducto">Inicio 05 de febrero</h3>
                <p class="caracteristicas"><img src="{{asset('../assets/images/svg/fecha.svg')}}"><b>20</b> semanas de capacitación</p>
                <p class="caracteristicas"><img src="/assets/images/svg/modulos.svg"><b>10</b> módulos</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tarjetaInfo">
              <div style="margin-top: -21px;">
                <h3 class="subtituloProducto">Asincrónico</h3>
                <p class="caracteristicas"><img src="/assets/images/svg/online.svg"><b>Online</b> y descargable</p>
                <p class="caracteristicas"><img src="/assets/images/svg/certificado.svg"><b>Avalado</b> ante la universidad CEHES con clave ante la <span>SEP 07PSU0210K</span></p>
                <p class="caracteristicas"><img src="/assets/images/svg/certificado.svg"><b>Diploma</b> de finalización</p>
              </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="tarjetaInfo">
                <div class="precioAntes">Antes:<span>$7,500.00mxn</span></div>
                <div class="precioAhora">$6,600.00mxn</div>
                <a href="" class="btnInscribete">Inscríbete ahora</a>
            </div>
        </div>
        <div class="row" style="margin-top: 37px;">
			<div class="col-md-8 col-sm-12">
				<div class="row" style="border-bottom:solid 0.5px #c7c7c7">
					<div class="col-md-12">
						<h3 class="subtituloProducto">Objetivo</h3>
						<p class="caracteristicas">Obtener conocimientos y herramientas para la óptima detección y diagnóstico en pacientes TEA así como poder elaborar planes de trabajo en edades tempranas y adolescencia.</p>
					</div>
				</div>
				<div class="row" style="margin-top: 15px;">
					<div class="col-md-12">
						<h3 class="subtituloProducto">Modelo educativo</h3>
						<div class="row">
							<div class="col-md-4 col-xs-6"><p class="caracteristicasModelo"><img src="/assets/images/svg/libro.svg"><b>T</b>eórico</p></div>
							<div class="col-md-4 col-xs-6"><p class="caracteristicasModelo"><img src="/assets/images/svg/candidatos.svg"><b>H</b>umanista</p></div>
							<div class="col-md-4 col-xs-6"><p class="caracteristicasModelo"><img src="/assets/images/svg/descarga1.svg"><b>D</b>escargable</p></div>
							<div class="col-md-4 col-xs-6"><p class="caracteristicasModelo"><img src="/assets/images/svg/salud-mental.svg"><b>P</b>ráctico</p></div>
							<div class="col-md-4 col-xs-6"><p class="caracteristicasModelo"><img src="/assets/images/svg/reloj.svg"><b>A</b>síncrono</p></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 infopago">
				<div class="row">
					<div class="col-md-12">
						<p class="caracteristicas">Hasta <b>6 meses sin intereses</b> en las<br>formas de pago disponibles</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-6"><img src="/assets/images/svg/visa.svg"></div>
					<div class="col-md-4 col-xs-6"><img src="/assets/images/svg/oxxo.svg"></div>
					<div class="col-md-4 col-xs-6"><img src="/assets/images/svg/mastercard.svg"></div>
					<div class="col-md-4 col-xs-6"><img src="/assets/images/svg/paypal.svg"></div>
					<div class="col-md-4 col-xs-6"><img src="/assets/images/svg/spei.png"></div>
				</div>
			</div>
		</div>
  </div>
    <br>
    <br>
    <div class="d-flex">
    <div class="col-md-12" style="max-width: 644px;">
      {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
      <img src="{{asset('assets/images/descargar-programa.png')}}">
      <h3 class="subtituloProducto" style="color: #161922;font-weight: 500;">Descarga el programa completo</h3>
      <p class="caracteristicas">Llena el formulario con tus datos y te haremos llegar el<br>programa completo.</p>
    </div>
    <div class="">
          <div class="col-sm-3">

              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nombre">

            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Télefono">

            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Email" style="width: 400px;">

            <button id="enviar" name="enviar" type="submit" class="btn btn-danger" style="color: white;background-color: #1e2a6f;">Solicitar programa</button>
          </div>
      </div>
    </div>
    <br>
    <br>
    <h6 class="subtituloProducto" style="color: #223175;font-weight: 500;font-size: 21px;">Facilitadores del diplomado</h6>
    <br>
    <br>

      <div class="vc_row wpb_row vc_inner vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-3">
          <div class="vc_column-inner">
            <div class="wpb_wrapper">
              <div class="wpb_single_image wpb_content_element vc_align_center">
        
                  <figure class="wpb_wrapper vc_figure">
                    <a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="135" height="135" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy" sizes="(max-width: 135px) 100vw, 135px"></a>
                  </figure>
                </div>
                  <h2 style="font-size: 17px;color: #223175;text-align: center" class="vc_custom_heading"><a href="#">Mtra. Ana Luisa Ballinas Niño</a></h2>
              </div>
            </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                    <div class="wpb_single_image wpb_content_element vc_align_center">          
                      <figure class="wpb_wrapper vc_figure">
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="135" height="135" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy" sizes="(max-width: 135px) 100vw, 135px"></div>
                      </figure>
                    </div>
                    <h2 style="font-size: 17px;color: #223175;text-align: center" class="vc_custom_heading">Mtra. Junuen de la Parra Flores</h2>
                </div>
              </div>
            </div>
          <div class="wpb_column vc_column_container vc_col-sm-3">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_center">
                        
                        <figure class="wpb_wrapper vc_figure">
                          <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="133" height="133" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy" sizes="(max-width: 133px) 100vw, 133px"></div>
                        </figure>
                      </div>
                    <h2 style="font-size: 17px;color: #223175;text-align: center" class="vc_custom_heading">Mtra. Blanca Yesenia Burguete Pérez</h2>
              </div>
            </div>
          </div>
      </div>
      <br>
      <br>
      <div class="wpb_wrapper">
        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
      <div class="vc_row wpb_row vc_inner vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
          <div class="vc_column-inner">
            <div class="wpb_wrapper"><h2 style="font-size: 22px;color: #c72128;text-align: left" class="vc_custom_heading">Consulta a nuestro asesor del diplomado</h2><h2 style="font-size: 17px;color: #223175;text-align: left" class="vc_custom_heading">Nuestros asesores te orientarán sobre cualquier duda que tengas y los planes de pago con los que contamos en cada diplomado.</h2></div>
          </div>
        </div>
      </div>
        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
          <div class="wpb_column vc_column_container vc_col-sm-2">
              <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">
                          <figure class="wpb_wrapper vc_figure">
                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="104" height="104" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy" sizes="(max-width: 104px) 100vw, 104px"></div>
                          </figure>
                        </div>
                    </div>
              </div>
          </div>
          <div class="wpb_column vc_column_container vc_col-sm-5">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element ">
                  <div class="wpb_wrapper">
                    <p style="color: #223175;"><strong style="color: #223175;">Lic. Mara Medina</strong><br>
                      <strong style="color: #223175;">Tel.</strong> 961 117 6570 <strong style="color: #223175;">Email.</strong> infocapsy@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="wpb_column vc_column_container vc_col-sm-5">
              <div class="vc_column-inner">
                <div class="wpb_wrapper">
                  <div class="vc_btn3-container vc_btn3-center"><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-icon-left vc_btn3-color-success" href="" title=""><i class="vc_btn3-icon fab fa-whatsapp"></i> Enviar mensaje vía whatsapp</a></div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
          <div class="vc_column-inner">
            <div class="wpb_wrapper"><h2 style="font-size: 22px;color: #223175;text-align: left" class="vc_custom_heading">Te pueden interesar los diplomados en:</h2>
                  <div class="vc_empty_space" style="height: 17px"><span class="vc_empty_space_inner"></span></div>
              <div class="vc_row wpb_row vc_inner vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_left">
                          <figure class="wpb_wrapper vc_figure">
                            <a href="" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="260" height="210" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"  sizes="(max-width: 260px) 100vw, 260px"></a>
                          </figure>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_left">
                        <figure class="wpb_wrapper vc_figure">
                          <a href="" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="260" height="210" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"  sizes="(max-width: 260px) 100vw, 260px"></a>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_left">
                        <figure class="wpb_wrapper vc_figure">
                          <a href="" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="260" height="210" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"  sizes="(max-width: 260px) 100vw, 260px"></a>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_left">
                        <figure class="wpb_wrapper vc_figure">
                          <a href="" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="260" height="210" src="{{asset('assets/images/prueba.jpg')}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"  sizes="(max-width: 260px) 100vw, 260px"></a>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
            </div>
          </div>
        </div>
      </div>

      <!--Section 7: Footer estatico-->

  <div class="footerest" style="z-index: 1000 !important">
    <p class="caracteristicas" style="margin-left: 45px; margin-top: 15px;"><strong style="color: white;" >Transtorno del espectro autista. Diagnóstico<br>y estrategias de intervención en la infancia<br>y adolescencia</strong></p>
    <p class="caracteristicas" style="margin-left: 429px; margin-top: -56px;"><strong style="color: white; font-size: 23px;">$6,600.00</strong></p>
    <a href="" class="btnInscribete" style="margin-left: 955px;margin-top: -43px;"><strong style="font-size: 18px;font-family: 'Raleway';">Inscríbete ahora</strong></a>
  </div>

</div>

  </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

@endsection
