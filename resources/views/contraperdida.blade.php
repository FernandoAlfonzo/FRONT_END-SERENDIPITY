<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
		<!-- loader-->
		<link href="../assets/css/pace.min.css" rel="stylesheet" />
		<script src="../assets/js/pace.min.js"></script>
		<!-- Bootstrap CSS -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="../assets/css/app.css" rel="stylesheet">
		<link href="../assets/css/icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<title>Rocker - Multipurpose Bootstrap5 Admin Template</title>
	</head>

<body class="bg-login">


<body class="bg-forgot">
<!-- wrapper -->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="mb-4 text-center">
                        <img src="../assets/images/logo.png" width="250" alt="" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center" style="font-family: Roboto, sans-serif;">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success alert-dismissible" style="color: black; background-color: #ffb5b5;">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{Session::get('message')}}
                                        </div>
                                        @endif
                    <h4 class="mt-5 font-weight-bold" style="text-align: center">¿Olvidaste tu contraseña?</h4>
                    <p class="text-muted">Ingresa tu correo electrónico para recuperar tu contraseña</p>
                    <form id="loginForm" class="row g-3" method="POST" action="{{ url('resetpassSend')}}">
                        @csrf
                    <div class="col-12" style="text-align: left">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@usuario.com" required>
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary"><i class='fadeIn animated bx bx-reset'></i>Enviar correo de recuperación</button>
                        <br>
                        <a href="{{ url('login') }}" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Finalizar</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
</body>


</html>
