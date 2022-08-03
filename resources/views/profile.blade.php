@extends("layouts.app")
@section("wrapper")
<style>.no-validate-form{
    border-color: #ced4da !important;
    background-image: none !important;
  }</style>
    
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <!--end breadcrumb-->
            <div class="row row-cols-12 row-cols-md-12 row-cols-lg-1">
                <div class="col">
                    <h6 class="mb-0 text-uppercase">Tus Datos</h6>
                    {{-- @foreach ($CatalogGener as $user)
    <p>This is user {{ $user->label }}</p>
@endforeach --}}

                    @if(Session::has('messageError'))
                        <div class="alert alert-success alert-dismissible" style="color: black; background-color: #ffb5b5;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('messageError')}}
                        </div>
                    @endif
                                        
                   @if(Session::has('messageSuccess'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('messageSuccess')}}
                        </div>
                    @endif


                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-primary" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                                        <div class="d-flex align-items-center">
                                            <div class="tab-icon"><i class="fadeIn animated bx bx-folder-minus font-18 me-1"></i>
                                            </div>
                                            <div class="tab-title">DATOS</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                                        <div class="d-flex align-items-center">
                                            <div class="tab-icon"><i class="fadeIn animated bx bx-map font-18 me-1"></i>
                                            </div>
                                            <div class="tab-title">DIRECCION</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                                        <div class="d-flex align-items-center">
                                            <div class="tab-icon"><i class="lni lni-folder font-18 me-1"></i>
                                            </div>
                                            <div class="tab-title">DOCUMENTACION</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#primaryfacturacion" role="tab" aria-selected="false">
                                        <div class="d-flex align-items-center">
                                            <div class="tab-icon"><i class="lni lni-folder font-18 me-1"></i>
                                            </div>
                                            <div class="tab-title">DATOS DE FACTURACIÓN</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content py-3">
                                <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                                    {{-- PRIMER FORMULARIO --}}
                                    <form class="needs-validation" novalidate action="{{ url('perfilStore') }}" method="POST" class="textprofile" enctype="multipart/form-data">
                                        @csrf
                                        
                                    <div class="row mb-3">
                                        <div class="col-4 col-sm-4 col-lg-4">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="assets/images/user-profile.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                            <div class="mt-3">
                                                    <h4>Perfil de usuario</h4>
                                                    <button class="btn btn-primary">Editar foto</button>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-8 col-sm-8 col-lg-8">
                                            <br>
                                            <div class="row">
                                            <div class="col-md-10">
                                                <label for="validationCustom01" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" value="{{ $DataUserObject->namePerson }}" id="namePerson" name="namePerson"required>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="validationCustom02" class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control"  id="last_father_namePerson" name="last_father_namePerson" value="{{ $DataUserObject->last_father_namePerson }}" required>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="validationCustom03" class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="last_mother_namePerson" name="last_mother_namePerson" value="{{ $DataUserObject->last_mother_namePerson }}" required>
                                            </div>
                                        </div>
                                        </div>
                                        {{-- AQUI ME QUEDE --}}
                                    </div>
                                    
                                    <div class="row mb-3">

                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Matricula:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" id="enrollment" name="enrollment" class="form-control" value="091810073" placeholder="Ingresa tu matricula" required disabled>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Fecha de Nacimiento:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="date" id="birth_datePerson" name="birth_datePerson" class="form-control" value="{{ $DataUserObject->birth_datePerson }}" placeholder="10/22/1999" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-9 col-sm-9 col-lg-3">
                                            <h6 class="mb-0">Género:</h6>
                                        </div>
                                        <div class="col-9 col-sm-3 col-lg-3 text-secondary">
                                            <select id="IdRole" name="genderPerson" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                @foreach($CatalogGener as $item)
                                                    @if($item->is_active != 0)
                                                    <option value="{{ $item->id }}" {{ $item->id == $DataUserObject->genderPerson ? 'selected' : ''}}>{{ $item->label}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6 col-sm-2 col-lg-2">
                                            <h6 class="mb-0">Telefono</h6>
                                        </div>
                                        <div class="col-9 col-sm-3 col-lg-3 text-secondary">
                                            <input type="number" id="phonePerson" name="phonePerson" class="form-control" value="{{ $DataUserObject->phonePerson }}" minlength="5" maxlength="10" placeholder="967 123 7112" required>
                                            
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Correo electrónico:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="email" id="email" name="email" class="form-control" value="{{ $DataUserObject->email }}" placeholder="correo@ejemplo.com" disabled>
                                        </div>
                                    </div>

                                    <!-- CAMPOS NO REQUERIDOS AL REGISTRARSE -->

                                    <div  class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Facebook:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" id="facebookPerson" name="facebookPerson" class="form-control no-validate-form" value="{{ $DataUserObject->facebookPerson }}" placeholder="Ingresa tu facebook">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profesión:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <select id="IdRole" name="professionPerson" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                @foreach($CatalogProfesione as $item)
                                                    @if($item->is_active != 0)
                                                    <option value="{{ $item->id }}" {{ $item->id == $DataUserObject->professionPerson ? 'selected' : ''}}>{{ $item->label}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Listas de intereses:</h6>
                                            </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <table class="form-control" id="interes" name="interest_list" width="100%" border="1px" cellspacing="0" cellpadding="10">
                                                        <tr>
                                                        <td>                                          
                                                        <input type="checkbox" name="" value="" > Terapia de Juego
                                                        <br>                                                            
                                                        <input type="checkbox" name="" value=""> Psicoterapia con enfoque                                                                
                                                        <br>                                                            
                                                        <input type="checkbox" name="" value=""> Terapia de Pareja desde el Enfoque Sistémico</td>                                                                
                                                        <td>                                                                                                                                
                                                        <input type="checkbox" name="" value=""> Psicoterapia y Arte
                                                        <br>
                                                        <input type="checkbox" name="" value=""> Psicoterapia Gestalt para Adolescentes 
                                                        <br>
                                                        <input type="checkbox" name="" value=""> Integración Sensorial
                                                        <br>                                                              
                                                        </td>                                                                
                                                        </tr>                                                                
                                                    </table>
                                                </div>
                                            </div>
                                    <button type="submit" class="btn btn-primary" name="update" id="update">Actualizar</button>
                                </form>
                                </div>
                                <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                                    {{-- SEGUNDO FORMULARIO --}}
                                    <form class="needs-validation" novalidate action="{{ url('addressStore') }}" method="POST" class="textprofile" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">País</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <select id="IdRole" name="countryAddress" class="form-control" required>
                                                    <option value="">Selecciona una opción</option>
                                                    @foreach($CatalogPaise as $item)
                                                        @if($item->is_active != 0)
                                                        <option value="{{ $item->id }}" {{ $item->id == $DataUserObject->countryAddress ? 'selected' : ''}}>{{ $item->label}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Estado:</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="stateAddress" id="stateAddress" class="form-control" placeholder="Ingresa tu estado" value="{{ $DataUserObject->stateAddress }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Ciudad:</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" id="cityAddress" name="cityAddress" class="form-control" placeholder="Ingresa tu ciudad" value="{{ $DataUserObject->cityAddress }}" required>
                                            </div>
                                        </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Domicilio:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" id="full_addressAddress" name="full_addressAddress" class="form-control no-validate-form" maxlength="30" placeholder="Ingresa tu domicilio" value="{{ $DataUserObject->full_addressAddress }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Localidad:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" id="locationAddress" name="locationAddress" class="form-control no-validate-form" placeholder="Ingresa tu localidad" value="{{ $DataUserObject->locationAddress }}" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Codigo Postal:</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="number" id="postalCode" name="postalCode" class="form-control" placeholder="Ingresa tu codigo Postal" value="{{ $DataUserObject->postalCode }}" required>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="update" id="update">Actualizar</button>
                                </form>
                                </div>
                                <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                                    {{-- TERCER FORMULARIO --}}
                                    <form class="needs-validation" novalidate action="{{ url('perfilStore') }}" method="POST" class="textprofile" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 style="font-size:15px" class="mb-0">Curp / ID Extranjeros:</h6>
                                            </div>
                                            
                                            <div class="col-sm-8 text-secondary">
                                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Ingresa tu CURP" required>
                                                
                                            </div>
                                        </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 style="font-size:15px">Documento curp / ID <br> Extranjeros: <a style="color: black" onclick="modalcurp()"><i style="padding-left: 216px" class="fa-solid fa-eye"></i></a></h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                        <input id="DataCurp" type="file" class="form-control" aria-label="file example" required>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-sm-4">
                                            <h6 style="font-size:15px" class="mb-0">INE: <a href="#"><i class="lni lni-question-circle" data-toggle="tooltip" data-placement="left" title="Solo para residentes Mexicanos"></i></a></h6>
                                                                                                        
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                            <input type="text" id="lastname" name="lastname" class="form-control no-validate-form" placeholder="Ingresa tu INE" required>
                                            
                                        </div>
                                    </div>

                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <h6 style="font-size:15px">Documento INE: &nbsp; <a style="color: black" onclick="modalIne()"><i style="padding-left: 178px"class="fa-solid fa-eye"></i></a></h6>
                                    </div>
                                    <div class="col-sm-8 text-secondary">
                                    <input id="DataIne" type="file"class="form-control no-validate-form" aria-label="file example" required>
                                    </div>
                                </div>

                                    {{-- confirmacion de los documentos --}}

                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 style="font-size:15px">Identificacion oficial: &nbsp; <a style="color: black" onclick="modalIdentificacion()"><i style="padding-left: 141px" class="fa-solid fa-eye"></i></a></h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                        <input id="DataIdentificacion" type="file" class="form-control no-validate-form" aria-label="file example" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 style="font-size:15px">Certificado de estudios: &nbsp; <a style="color: black" onclick="modalCertificado()"><i style="padding-left: 121px" class="fa-solid fa-eye"></i></a></h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                        <input id="DataCertificado" type="file" class="form-control no-validate-form" aria-label="file example" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 style="font-size:15px">Cedula profesional: &nbsp; <a style="color: black" onclick="modalCedula()"><i style="padding-left: 154px" class="fa-solid fa-eye"></i></a></h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                        <input id="DataCedula" type="file" class="form-control no-validate-form" aria-label="file example" required>
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 style="font-size:15px">Titulo: &nbsp; <a style="color: black" onclick="modalTitulo()"><i style="padding-left: 247px" class="fa-solid fa-eye"></i></a></h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                        <input id="DataTitulo" type="file" class="form-control no-validate-form" aria-label="file example" required>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <h6 style="font-size:15px">Comprobante de estudios: &nbsp; <a style="color: black" onclick="modalEstudiante()"><i style="padding-left: 104px" class="fa-solid fa-eye"></i></a></h6>
                                        </div>
                                        <div class="col-sm-8 text-secondary">
                                        <input id="DataEstudiante" type="file" class="form-control no-validate-form" aria-label="file example" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="update" id="update">Guardar</button>
                                </form>
                                </div>
                                <div class="tab-pane fade" id="primaryfacturacion" role="tabpanel">
                                    {{-- CUARTO FORMULARIO --}}
                                    <form class="needs-validation" novalidate action="{{ url('addressStore') }}" method="POST" class="textprofile" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Nombre (Emisor):</label>
                                                <input placeholder="Nombre (Emisor)" class="form-control" name="text" id="" />
                                            </div>

                                            {{-- <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Regimen fiscal(Emisor):</label>
                                                <input placeholder="Regimen fiscal(Emisor)" class="form-control" name="text" id="" />
                                            </div> --}}

                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Persona fisica o moral</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    @foreach ($CatalogsPhysical_or_moral_person as $factur)
                                                    <option value="{{ $factur->code }}">{{ $factur->label }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">RFC (Receptor)</label>
                                                <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                            </div>

                                            <div class="col-md-4">
                                            <label for="validationCustom07" class="form-label">Uso de (CFDI)</label>
                                            <select class="form-select" aria-label="Default select example">
                                                @foreach ($CatalogsUse_of_cfdi as $factur)
                                                <option value="{{ $factur->code }}">{{ $factur->label }}</option>
                                                @endforeach
                                            </select>
                                            </div>

                                            {{-- <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Domicilio fiscal</label>
                                                <input placeholder="RFC VECJ880326 XXX" class="form-control" name="text" id="" />
                                            </div> --}}

                                            {{-- <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Metodo de pago</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>D</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div> --}}

                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Forma de Pago</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    @foreach ($CatalogsWayToPay as $factur)
                                                    <option value="{{ $factur->code }}">{{ $factur->label }}</option>
                                                    @endforeach
                                                </select>
                                                </div>

                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Tipo de moneda</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    @foreach ($Catalogcurrency_list as $factur)
                                                    <option value="{{ $factur->code }}">{{ $factur->label }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br><br><br><br><br>
                                            <hr>

                                            <h5>Dirección de facturación</h5>
                                            <br><br>
                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Direccion:</label>
                                                <input placeholder="Direccion completa (Calle, Número, Colonia)" class="form-control" name="text" id="" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Ciudad:</label>
                                                <input placeholder="Ciudad" class="form-control" name="text" id="" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Entidad:</label>
                                                <input placeholder="Estado" class="form-control" name="text" id="" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">Codigo Postal:</label>
                                                <input placeholder="Codigo Postal" class="form-control" name="text" id="" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationCustom07" class="form-label">País:</label>
                                                <input placeholder="País" class="form-control" name="text" id="" />
                                            </div>

                                        </div>
                                    <button type="submit" class="btn btn-primary" name="update" id="update">Actualizar</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Documento de Identificacion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img id="modalGeneric" src="" height="200" width="200" alt="" class="img-fluid mr-3 mx-auto d-block">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                
                            </div>
                        </div>
                    </div>
                </div>

                
                </div>
            </div>
            <!--end row-->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script>
        function modalcurp(){
            const file = $('#DataCurp').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}

        function modalIne(){
            const file = $('#DataIne').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}

        function modalIdentificacion(){
            const file = $('#DataIdentificacion').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}
        function modalCertificado(){
            const file = $('#DataCertificado').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}
    
        function modalExtranjeros(){
            const file = $('#DataExtranjeros').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}
        function modalCedula(){
            const file = $('#DataCedula').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}

    function modalTitulo(){
            const file = $('#DataTitulo').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}

    function modalEstudiante(){
            const file = $('#DataEstudiante').prop('files');
            const reader = new FileReader();

            reader.addEventListener("load", function (){
                $('#modalGeneric').attr('src', reader.result); 
            });
            
            if(file[0]){
                reader.readAsDataURL(file[0]);
                $('#exampleModal').modal('show');
            }
	}
    </script>
    	<script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                  'use strict'
    
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
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