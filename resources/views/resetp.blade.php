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
	<title>Rocker - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body>
<!-- wrapper -->
<div class="wrapper">
    <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="my-4 text-center">
                        <img src="../assets/images/logo.png" width="250" alt="" />
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h4 class="mt-5 font-weight-bold">Generar nueva contraseña</h4>
                                    <p class="text-muted">Recibimos su solicitud de restablecimiento de contraseña. ¡Introduce tu nueva contraseña!‎

                                    </p>
                                    <div class="mb-3 mt-5" style="text-align-last: left;">
                                        <label class="form-label">Nueva contraseña</label>
                                        <input type="password" class="form-control" placeholder="Ingresar nueva contraseña" required/>
                                    </div>
                                    <div class="mb-3" style="text-align-last: left;">
                                        <label class="form-label">Confirmar contraseña</label>
                                        <input type="password" class="form-control" placeholder="Confirmar nueva contraseña" required/>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Cambiar contraseña</button> <a href="{{ url('login') }}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Finalizar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
