<!doctype html>
<html lang="en">

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
		<title>Serendipity</title>
	</head>

<body class="bg-login">

	<!--wrapper-->
    <div class="wrapper">
        <div class="row align-items-center justify-content-center my-5 my-lg-0" style="justify-content: end">
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
                                    @if(Session::has('message'))
                                        <div class="alert alert-success alert-dismissible" style="color: black;">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            {{Session::get('message')}}
                                        </div>
                                    @endif
                                        <h3 class="">Bienvenido</h3>
                                        <p>¿No tienes una cuenta? <a href="{{ url('register') }}">Registrate aquí</a>
                                        </p>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>O inicia sesión con tu cuenta de Gmail</span>
                                        <hr/>
                                    </div>
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="login-google"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                          <span>Iniciar sesión con Google</span>
											</span>
                                        </a>
                                    </div> 
                                    <div class="login-separater text-center mb-4"> <span>O inicia sesión con tu correo electrónico</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form id="loginForm" class="row g-3" method="GET" action="{{ url('loginUser')}}">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Correo electrónico</label>
                                                <input type="email" class="form-control" id="inputEmailAddress" name="email" placeholder="ingresa tu correo" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Contraseña</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Ingrese una contraseña" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div  id="gwd-reCAPTCHA_2" class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6LebJhEUAAAAAOgztebEPyr6sWoJHWa6s3mUGkVn" style="text-align: -webkit-center;">
                                            </div>
                                            <div id="Error"></div>
                                            <div class="text-right">	<a href="{{ url('resetpass') }}">¿Olvidaste tu contraseña?</a>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Iniciar sesión</button>
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

	<!--plugins-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="assets/js/jquery.min.js"></script>

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
                    $form.prepend('<br> <div id="Error" class="alert alert-danger" text-align: -webkit-center; style="text-align: center;">Verifique el captcha</div>');
                }

            }, false);
        });
    </script>
</body>

</html>
