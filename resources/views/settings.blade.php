@extends("layouts.app")
@section("wrapper")


    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="card card-body">
                        <h6>Inicio de sesión</h6>
                        <p>
                            <a class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Cambiar contraseña</a>
                        </p>
                        <div class="">
                            <h6>Se recomienda usar una contraseña segura que no uses en ningún otro sitio.</h6>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="form-body">
                                <form class="row g-3">
                                    <div class="row">
                                        <div class="col-xl-9 mx-auto">
            
                                            <br>
                                            <div class="">
                                                <div class="">
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword" class="form-label">Actual</label>
                                                        <div class="input-group" id="show_hide_password">
                                                        <input type="password" class="form-control border-end-0"" id="inputChoosePassword" placeholder="Contraseña Actual"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword" class="form-label">Nueva</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Nueva contraseña"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword" class="form-label">Repetir contraseña nueva</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Repite la contraseña"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    
                          </div>
                    </div>
                </div>
            </div>
              
              
            <!--end breadcrumb-->
            
            <!--end row-->
        </div>
    </div>

@endsection