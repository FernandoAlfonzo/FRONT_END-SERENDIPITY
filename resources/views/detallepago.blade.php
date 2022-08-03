@extends("layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
    <!--start page wrapper -->
<style>
		.badge {
  display: inline-block;
  padding: 3px 7px;
  font-size: 14px;
  /* font-weight: 400; */
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25rem;
}

.badge-success {
  background-color: #21ae41;
  display: inline-block;
  padding: 3px 7px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25rem;
}

.badge-success[href]:focus,
.badge-success[href]:hover {
  color: rgb(255, 255, 255);
  background-color: #21ae41;
  text-decoration: none;
}

.badge-warning {
  background-color: #f3b600;
  color: #2e2f39;
}
</style>

<div class="page-wrapper">
        <div class="page-content">
            <h6 class="mb-0 text-uppercase" style="color: #223175;font-weight: bold;">Detalle de pagos</h6>

			<div class="col">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<span class="font-20 text-primary">
						<i class="lni lni-upload"></i>
						</span>
					</button>
					
					@if(Session::has('messageSuccess'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							{{Session::get('messageSuccess')}}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					@endif

					@if(Session::has('messageError'))
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							{{Session::get('messageError')}}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					@endif
				<!-- Modal -->
				<form class="needs-validation" action="{{ url('sendimg') }}" method="POST" class="textprofile" enctype="multipart/form-data">
					@csrf
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Comprobante de pago/Ticket</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								
									<div class="input-group mb-3">
                                        {{-- <label  id="imgInp" class="input-group-text" for="inputGroupFile01">Upload</label> --}}
                                        <input name="ticketdata" type="file" class="form-control"  id="imgInp">
                                    </div>
									<br>
									<img width="150px" height="120px" name="ticketdata" id="blah" src="../assets/images/NoImage.jpg" alt="Tu imagen" class="img-fluid mr-3 mx-auto d-block" />
								 
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>
				<hr/>
				<div class="card" style="font-size: 14px;">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Id</th>
										<th>Metodo de pago</th>
                                        <th>Cuenta</th>
										<th>Folio</th>
                                        <th>Vendedor</th>
										<th>Fecha pago</th>
										<th>Hora</th>
										<th>Monto</th>
                                        <th>Estatus</th>
									</tr>
								</thead>
								<tbody>
									@foreach($listPayments as $respuesta)
									<tr>
										<td>{{ $respuesta['id']}}</td>
										<td>{{ $respuesta['payment_type_name']}}</td>
										<td></td>
                                        <td></td>
										<td></td>
										<td>{{date('d-m-Y', strtotime($respuesta['date_calendar'])) }}</td>
										<td></td>
										<td></td>
										<td>
											<span class="mr-2">
												@if ($respuesta['status'] == 'PAGADO')
													<span class="badge badge-succes">{{ $respuesta['status']}}</span>
												@else
													<span class="badge badge-warning">{{ $respuesta['status']}}</span>
													
												@endif
											</span>
												
										</td>
									</tr>
									@endforeach
								
								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	
	@section("script")
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>

	<script>
		function readImage (input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#blah').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function () {
    // Código a ejecutar cuando se detecta un cambio de archivO
    readImage(this);
  });
	</script>
	@endsection