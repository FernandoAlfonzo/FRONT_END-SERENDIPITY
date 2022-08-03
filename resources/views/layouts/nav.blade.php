<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div><a href="{{ url('/') }}">
                    <img class="toggle-icon ms-auto" src="../assets/images/logo.png"  style="height: 28px;"></a>
                </div>

                <div class="toggle-icon ms-auto"><i class='fadeIn animated bx bx-pin'></i>
                </div>
            </div>
            <!--navigation-->
            
            <ul class="metismenu" id="menu">
                
                <li>
                    <a href="{{ url('/') }}">
                        <div class="parent-icon"><i class="lni lni-home"></i>
                        </div>
                        <div class="menu-title">Inicio</div>
                    </a>
                </li>
                

                @if(Session::get('userRol') == 'Maestro' or Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
                <li>
                    <a href="{{ url('Alumnos') }}">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-group"></i>
                        </div>
                        <div class="menu-title">Alumnos</div>
                    </a>
                </li>
                @endif

                @if(Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
                <li>
                
                    <a href="{{ url('/') }}">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-detail"></i>
                        </div>
                        <div class="menu-title">Reglas de Pago</div>
                    </a>
                </li>
                @endif

                 @if(Session::get('userRol') == 'Alumno')
                <li>
                    <a href="{{ url('aprendizaje') }}">
                        <div class="parent-icon"><i class="lni lni-certificate"></i>
                        </div>
                        <div class="menu-title">Mi Aprendizaje</div>
                    </a>
                </li>
                @endif

                @if(Session::get('userRol')  == 'Alumno')
                <li>
                    <a href="{{ url('saldosypagos') }}">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-dollar"></i>
                        </div>
                        <div class="menu-title">Saldo y pagos</div>
                    </a>
                </li>
                @endif
            
                <ul>
                    <li>
                        <a class="has-arrow" href="javascript:;">
                            <div class="parent-icon"><i class="fadeIn animated bx bx-book-bookmark"></i></div>
                            <div class="menu-title">Oferta Acádemica</div>
                        </a>
                        <ul id="listOffert">

                        <li v-if="lts_offerts" v-for="lts_offert in lts_offerts"> <a :href="'/EducativeOffer/' + lts_offert.id" ><i class="fadeIn animated bx bx-bookmark"></i>@{{ lts_offert.name }}</a></li>
                        
                        <!--<li> <a href="{{ url('maestria') }}"><i class="fadeIn animated bx bx-bookmark"></i>Maestría</a></li>
                        <li> <a href="{{ url('diplomado') }}"><i class="fadeIn animated bx bx-award"></i>Diplomado</a></li>
                        <li> <a href="{{ url('seminario') }}"><i class="fadeIn animated bx bx-body"></i></i>Seminario</a></li>
                        <li> <a href="{{ url('curso') }}"><i class="fadeIn animated bx bx-pen"></i>Curso</a></li>
                        <li> <a href="{{ url('taller') }}"><i class="fadeIn animated bx bx-task"></i>Taller</a></li>-->
                    </li>
                </ul>
                
            </ul>

                
                <li>
                    <a href="{{ url('bandeja') }}">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-envelope"></i>
                        </div>
                        <div class="menu-title">Mensajes</div>
                    </a>
                </li>
                

                
                
                <li>
                    <a href="{{ url('checkout') }}">
                        <div class="parent-icon"><i class="lni lni-cart-full"></i>
                        </div>
                        <div class="menu-title">Carro de compra</div>
                    </a>
                </li>
                
                                    {{-- INICIO OFERTA ACADEMICA --}}
                                    
                                    {{-- FIN OFERTA ACADEMICA --}}
            <!--end navigation-->
                                    </div>
        <!--end sidebar wrapper -->

        