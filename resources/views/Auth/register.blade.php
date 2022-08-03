<!doctype html>
<html lang="en">
    

<!-- Enrutar botón con permisos para mostrar solo lo que pueden ver del index(maestro, alumno, empleado) -->

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
		<!-- loader-->
		<link href="assets/css/pace.min.css" rel="stylesheet" />
		<script src="assets/js/pace.min.js') }}"></script>
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="assets/css/app.css" rel="stylesheet">
		<link href="assets/css/icons.css" rel="stylesheet">
		<title>Rocker - Multipurpose Bootstrap5 Admin Template</title>
	</head>

    <body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="row align-items-center my-5 my-lg-0" style="justify-content: end;">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            <img src="assets/images/logo.png" width="250" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Bienvenido</h3>
                                        <p>¿Ya tienes una cuenta? <a href="{{ url('login') }}">Inicia sesión</a>
                                        </p>
                                   </div>
                            <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="login-google"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                          <span>Regístrate con Google</span>
											</span>
                                        </a>
                                    </div> 
                                    <div class="login-separater text-center mb-4"> <span>O regístrate con tu correo</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form id="loginForm" class="row g-3" method="POST" action="{{ url('register/store')}}">
                                            @csrf
                                            <div class="col-xl-12 col-sm-12">
                                                <label for="name" class="form-label">Nombre</label>
                                                <input type="name" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                            </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="last_father_name" class="form-label">Apellido paterno</label>
                                                        <input type="fistname" class="form-control" id="last_father_name" name="last_father_name" placeholder="Primer Apellido" required>
                                                    </div> 
                                                    <div class="col-sm-6">
                                                        <label for="last_mother_name" class="form-label">Apellido materno</label>
                                                        <input type="lastname" class="form-control" id="last_mother_name" name="last_mother_name" placeholder="Segundo apellido" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="email" class="form-label">Correo electrónico</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@usuario.com" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Contraseña</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Ingrese una contraseña" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <br>
                                            
                                            {{-- <div class="col-12">
                                                <label for="inputSelectCountry" class="form-label">Country</label>
                                                <select class="form-select" id="inputSelectCountry" aria-label="Default select example">
                                                    <option selected>India</option>
                                                    <option value="1">United Kingdom</option>
                                                    <option value="2">America</option>
                                                    <option value="3">Dubai</option>
                                                </select>
                                            </div> --}}
                                            <div  id="gwd-reCAPTCHA_2" class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6LebJhEUAAAAAOgztebEPyr6sWoJHWa6s3mUGkVn" style="text-align: -webkit-center;">
                                            </div>
                                            <div id="Error"></div>
                                            <br>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" required>           <!-- Redirigir a los terminos y condiciones -->
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Acepto los</label> <a href="{{ url('privacy') }}">Políticas de privacidad</a>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" required>           <!-- Redirigir a los terminos y condiciones -->
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Acepto los</label> <a href="{{ url('termn') }}">Terminos y condiciones</a>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Registrarme</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->

    <!--Password show & hide js -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
        grecaptcha.ready(function () {
            var $form = $("#Error");
            document.getElementById('loginForm').addEventListener("submit", function (event) {
                event.preventDefault();
                console.log("Entro");
                var response = grecaptcha.getResponse();
                if (response.length != 0) {
                    document.getElementById('loginForm').submit();
                   
                } else {
                    $form.find("#Error").remove();
                    $form.prepend('<br> <div id="Error" class="alert alert-danger" style="text-align: -webkit-center;">Verifique el captcha</div>');
                }

            }, false);
        });
    </script>
    <!--app JS-->
    {{-- <img src="assets/js/app.js"></script> --}}
    </body>

</html>
