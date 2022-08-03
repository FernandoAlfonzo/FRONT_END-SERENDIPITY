@extends("layouts.app")

@section("style")
	<link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="../assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
@endsection

		@section("wrapper")

            <div class="page-wrapper">
                <div class="page-content">
                    
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            
                            </div>
                        </div>
                    </div>

                    @if(Session::has('messageError'))
                        <div class="alert alert-success alert-dismissible" style="color: black; background-color: #ffb5b5;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('messageError')}}
                        </div>
                    @endif
                    @if(Session::has('messageSuccess'))
                        <div class="alert alert-success alert-dismissible" style="color: black;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('messageSuccess')}}
                        </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <h6 class="mb-0 text-uppercase">Datos de compra</h6>
                            <hr/>
                            <div class="card">
                            @if($dataUser!=null)
                                <div class="">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-4">
                                                <label for="validationCustom01" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" value="{{ $dataUser->name }}" id="validationCustom01" value="" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="{{ $dataUser->last_father_name }}" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="validationCustom02" value="{{ $dataUser->last_mother_name }}" required>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">País</label>
                                                <input type="text" class="form-control" id="validationCustom03" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label">Estado</label>
                                                <select class="form-select" id="validationCustom04" required>
                                                    <option selected disabled value="">Selecciona tu estado</option>
                                                    <option>Chiapas</option>
                                                </select>
                                                
                                            </div> -->
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Telefono</label>
                                                <input type="text" class="form-control" id="validationCustom05" value="{{ $dataUser->phone }}" required>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom06" class="form-label">Dirección de correo electronico</label>
                                                <input type="text" class="form-control" id="validationCustom05" value="{{ $dataUser->email }}" required>
                                            </div>

                                            {{-- <div class="col-md-4">
                                                <input class="form-check-input name="chec" type="checkbox" id="chec" onchange="comprobar();"/>
                                                <label class="form-check-label" for="chec">¿Requiere factura?</label>
                                                <br>
                                                <input placeholder="RFC" class="form-control" name="text" id="boton" readonly />
                                            </div> --}}

                                            <!-- <div class="radio col-xs-12">
                                                <label for="payment_method_bacs" style= "font-weight:700">
<<<<<<< HEAD
                                                  <input type="checkbox" name="radios" class="track-order-change" id="rfcpicture" value="" require>
=======
                                                  <input type="checkbox" class="track-order-change" id="pictureTarifa" value="" >
>>>>>>> b3df0161f5b532862f7fa34f261596219f8b80ba
                                                  ¿Requiere Factura?
                                                </label>
                                              </div>
                                              <div class="col-xs-12 panel-collapse collapse in" id="picturerfc">
                                                <div class="row payment_box payment_method_bacs">
                                                    <p>
                                                    <h5>Datos de factura</h5> <br>
                                                    
                                                    <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">RFC</label>
                                                        <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                                    </div>

                                                    </p>
                                                </div>
                                              </div> -->
                                        </form>
                                    </div>
                                </div>
                                @else
                                <div class="">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-4">
                                                <label for="validationCustom01" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" value="" id="nameStudent" value="" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="namePf" value="" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="namePm" value="" required>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">País</label>
                                                <input type="text" class="form-control" id="validationCustom03" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label">Estado</label>
                                                <select class="form-select" id="validationCustom04" required>
                                                    <option selected disabled value="">Selecciona tu estado</option>
                                                    <option>Chiapas</option>
                                                </select>
                                                
                                            </div> -->
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Telefono</label>
                                                <input type="text" class="form-control" id="phone" value="" required>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom06" class="form-label">Dirección de correo electronico</label>
                                                <input type="text" class="form-control" id="email" value="" required>
                                            </div>

                                            {{-- <div class="col-md-4">
                                                <input class="form-check-input name="chec" type="checkbox" id="chec" onchange="comprobar();"/>
                                                <label class="form-check-label" for="chec">¿Requiere factura?</label>
                                                <br>
                                                <input placeholder="RFC" class="form-control" name="text" id="boton" readonly />
                                            </div> --}}

                                            <div class="radio col-xs-12">
                                                <label for="payment_method_bacs" style= "font-weight:700">
                                                  <input type="checkbox" name="radios" class="track-order-change" id="rfcpicture" value="" require>
                                                  ¿Requiere Factura?
                                                </label>
                                              </div>
                                              <div class="col-xs-12 panel-collapse collapse in" id="picturerfc">
                                                <div class="row payment_box payment_method_bacs">
                                                    <p>
                                                    <h5>Datos de factura</h5> <br>
                                                    
                                                    <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">Nombre (Emisor):</label>
                                                        <input placeholder="ejemplo@ejemplo.com" class="form-control" name="text" id="" />
                                                    </div>

                                                    {{-- <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">Regimen fiscal(Emisor):</label>
                                                        <input placeholder="Nombre completo" class="form-control" name="text" id="" />
                                                    </div> --}}

                                                    <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">Persona fisica o moral</label>
                                                        <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">RFC (Receptor)</label>
                                                        <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                                    </div>

                                                    <div class="col-md-4">
                                                    <label for="validationCustom07" class="form-label">Uso de (CFDI)</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>D</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                      </select>
                                                    </div>

                                                    {{-- <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">Domicilio fiscal</label>
                                                        <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                                    </div> --}}

                                                    <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">Formas de pago</label>
                                                        <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="validationCustom07" class="form-label">Tipo de moneda</label>
                                                        <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                                    </div>

                                                    </p>
                                                </div>
                                              </div>
                                        </form>
                                    </div>
                                </div>
                                @endif

                            </div>

                            @if(Session::get('userRol') == 'Administrador')
                            <h6 class="mb-0 text-uppercase">Datos de vendedor</h6>
                            <hr/>
                                <div class="card">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-4">
                                                <label for="validationCustom01" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" value="" id="nameSalesman" value="" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="PfSalesman" value="" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom02" class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="PmSalesman" value="" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Telefono</label>
                                                <input type="text" class="form-control" id="phoneSalesman" value="" required>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endif

                            
                            <h6 class="mb-0 text-uppercase">Tu Pedido</h6>
						    <hr/>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">producto</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($carbuy as $buycar)
                                    <tr>
                                        <th scope="row">{{ $buycar->nameGeneration }}</th>
                                        <td>{{ $buycar->monto }}</td>
                                        <td> <a class="btn btn-danger" href="{{ url('DeleteItemCarBuy/'.$buycar->idGeneration) }}"> <i class="fadeIn animated bx bx-trash-alt"></i></a> </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                
                            </table>
                            <br><br>
                            <hr/>
                            <form class="needs-validation" novalidate action="{{ url('SaleTypeOfer') }}" method="POST" class="textprofile">
                                @csrf
                                 @foreach($ListPayment as $item)
                                @if($item['code'] == 'SYS_PAYMENT_TRANSBANK' )
                                <div class="radio col-xs-12">
                                    <label for="payment_method_bacs" style= "font-weight:700">
                                      <input type="radio" name="radios" class="track-order-change" id="paymentTransfer" value="{{$item['code']}}" require>
                                      Transferencia bancaria directa
                                      <img src="assets/images/transferencia.jpg"width="90px" alt="">
                                    </label>
                                  </div>
                                  <div class="col-xs-12 panel-collapse collapse in" id="pictureTarifa">
                                    <div class="payment_box payment_method_bacs">
                                        <!-- <p>
                                        Cuenta: José Freddy Estrada Gordillo. <br>
                                        Clabe: 01 41 006 05 83 87 55 326. <br>
                                        Banco: Santander <br>
                                        </p> -->
									<img width="150px" height="120px" name="ticketdata" id="blah" src="../assets/images/datospagos.jpg" alt="Tu imagen" class="img-fluid mr-3 mx-auto d-block" />
                                    </div>
                                  </div>
                                @endif

                                @if($item['code'] == 'SYS_PAYMENT_CARD' )
                                <div class="radio col-xs-12">
                                    <label style= "font-weight:700">
                                      <input type="radio" name="radios" value="{{$item['code']}}" class="track-order-change" id='paymentCard' require>
                                      Pago con Tarjeta de Crédito o Débito
                                      <img src="https://serendipitydiplomados.com/wp-content/plugins/conekta-payment-gateway/images/credits.png" alt="Pago con Tarjeta de Crédito o Débito">
                                    </label>
                                  </div>
                                @endif
                                
                                @if($item['code'] == 'SYS_PAYMENT_OXXO' )
                                <div class="radio col-xs-12">
                                    <label style= "font-weight:700">
                                      <input type="radio" name="radios" class="track-order-change" id="paymentOxxo" value="{{$item['code']}}" require>
                                      Pago en Efectivo en OXXO Pay
                                      <img src="https://serendipitydiplomados.com/wp-content/plugins/conekta-payment-gateway/images/oxxopay.png" alt="Pago en Efectivo en Oxxo Pay">
                                    </label>
                                  </div>
                                  <div class="col-xs-12 panel-collapse collapse in" id="oxxoTarifa">
                                    <div>
                                        Por favor realiza el pago en el OXXO más cercano utilizando la referencia que se encuentra a continuación.
                                    </div>
                                  </div>
                                @endif
                                @endforeach
                                    <hr>



                                {{-- MODAL --}}
                                @if(Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
                                <div class="col">
                                    <!-- Button trigger modal -->
                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleSmallModal">Small Modal</button> --}}
                                    <!-- Modal -->
                                    <div class="modal" id="exampleSmallModal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Completa los datos</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    @if(Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
                                                    <div class="col-md-12">
                                                        <label class="form-label">Alumno</label>
                                                        <select id="selectAlumno" name="enrollment" class="single-select" onchange="selectStudent()">
                                                            <option selected disabled value="">Busca un Alumno</option>
                                                            @foreach($ListStudent as $item)
                                                            <option value="{{ $item['enrollment'] }}">{{ $item['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endif
                                                <br>
                                                
                                                @if(Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
                                                <div class="col-md-12">
                                                    <label class="form-label">Regla de Pago</label>
                                                    <select class="single-select" name="code_rule_payments">
                                                        <option selected disabled value="">Buscar una regla de pago</option>
                                                        @foreach($ListRulePayment as $item)
                                                        <option value="{{ $item['code'] }}"> {{ $item['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                                <br>
                                                
                                                @if(Session::get('userRol') == 'Administrador')
                                                <div class="col-md-12">
                                                    <label class="form-label">Vendedor</label>
                                                    <select id="InputselectSalesman" class="single-select" name="code_employe" onchange="selectSalesman()">
                                                        <option selected disabled value="">Buscar un vendedor</option>
                                                        @foreach($ListSalesMen as $item)
                                                        <option value="{{ $item['collaborator_code'] }}"> {{ $item['collaName'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                @endif
                                {{-- MODAL --}}
                                
                                    <br>
                                    <button  type="submit" class="btn btn-primary px-5 radius-30" id="btnpayment">Realizar el pedido</button>
                                    <br><br>
                                    
                            
                                </form>
                            
                        </row-->
                    </div>
                </div>
		@endsection

        {{-- SCRIPT PARA EL SELECT CON SEARCH --}}
        <script src="../assets/js/jquery.min.js"></script>
        @section("script")
        <script src="../assets/plugins/select2/js/select2.min.js"></script>
        <script>
            $('.single-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
            $('.multiple-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        </script>
        @endsection


        {{-- SCRIPT PARA VALIDACIONES DEL FORMULARIO --}}
	    @section("script")
	    <script>
			(function () {
			  'use strict'

			  var forms = document.querySelectorAll('.needs-validation')

			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}

					form.classList.add('was-validated')
				  }, false)
				})
			})()
        </script>
        @endsection

        

        {{-- SCRIPT PARA ACTIVAR EL RFC --}}
        <script>
            function comprobar()
            {
            document.getElementById('boton').readOnly = !document.getElementById("chec").checked;
            }

            $( document ).ready(function() {
                $('#exampleSmallModal').modal('show')
                //llenado de datos de alumno
                $('#nameStudent').val();
                $('#namePf').val();
                $('#namePm').val();
                $('#phone').val();
                $('#email').val();

                //datos de vendedor
                $('#nameSalesman').val();
                $('#PfSalesman').val();
                $('#PmSalesman').val();
                $('#phoneSalesman').val();
            });
            
            var lisAlumno = <?php echo $ListStudentOther ?>;
            var listSalesman = <?php echo $ListSalesMenOther ?>;

            function selectStudent() {
                var x = document.getElementById("selectAlumno").value;
                lisAlumno.forEach(element => {
                    if(x == element.enrollment){
                        $('#nameStudent').val(element.name);
                        $('#namePf').val(element.pf);
                        $('#namePm').val(element.pm);
                        $('#phone').val(element.phone);
                        $('#email').val(element.email);
                    }
                });
            }

            function selectSalesman() {
                var xsles = document.getElementById("InputselectSalesman").value;
                console.log(listSalesman);
                listSalesman.forEach(element => {
                    if(xsles == element.collaborator_code){
                        $('#nameSalesman').val(element.collaName);
                        $('#PfSalesman').val(element.collaPf);
                        $('#PmSalesman').val(element.collaPm);
                        $('#phoneSalesman').val(element.collaPhone);
                    }
                });
            }

        </script>
        

    



