<div class="fixed-top">
    <header class="topbar">
        <div class="container">
          <div class="row" style="min-height: 35px;">
            <!-- social icon-->
            <div class="col-5 col-sm-5 col-md-5 col-lg-5 divRedes">
                <ul class="social-network">
                  <li><a href="#" class="facebook socialicon"><i class="bx bxl-facebook icon"></i></a></li>
                  <li><a href="#" class="instagram socialicon"><i class="bx bxl-instagram icon"></i></a></li>
                  <li><a href="#" class="linkedin socialicon"><i class="bx bxl-linkedin icon"></i></a></li>
                </ul>
            </div>

            <div class="col-4 col-sm-4 col-md-4 col-lg-4 divInfo" style="font-family: inherit;width: 450px;">
              <span class="textinfo">
                infocapsy@gmail.com &nbsp;&nbsp;
                (961) 1176 570
              </span>
            </div>

            <div class="col-3 col-sm-3 col-md-3 col-lg-3 divBtnAlum" style="font-family: inherit; max-inline-size: min-content;">
              <a class="buttonAl" style="width: max-content"; href="{{ url('/login') }}">Acceso Alumnos</a>
            </div>
          
          
          
          </div>
        </div>
    </header>
    
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear" style="padding-left: 90px;">
    <a href="{{URL::to('/landingpage')}}"><img class="logoini" src="{{ asset('assets/images/logo.png') }}" width="360" alt="" /> </a>
      <ul>
          <li class="dropdown"><a href="#"><span style="font-family: inherit;">Oferta Académica</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach ($type_services as $type_service)
              <li><a href={{url('services', $type_service['id'])}} style="font-family: inherit;">{{ $type_service['name'] }}</a></li>
            @endforeach
            </ul>

            <li class="dropdown"><a href="#"><span style="font-family: inherit;">Nosotros</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/quienesSomos') }}" style="font-family: inherit;">Quienes Somos</a></li>
              <li><a href="" style="font-family: inherit;">Modelo Educativo</a></li>
            </ul>
            
          </li>
          <li><a href="" style="font-family: inherit;">Blog</a></li>
          <li><a href="" style="font-family: inherit;">Contacto</a></li>
      </ul>
      <!-- Actual search box -->
      <div class="form-group has-search" style="height: 41px;">
        <span class="fa fa-search form-control-feedback"></span>
        <input type="text" class="form-control" placeholder="Buscar un diplomado">
      </div>
      <i class="fa fa-shopping-cart"></i>

    </nav>
  </div>
