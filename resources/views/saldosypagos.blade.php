@extends("layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

    @section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
			<h6 class="mb-0 text-uppercase" style="color: #223175;font-weight: bold;">Saldo y pagos</h6>
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
			<hr/>
				<div class="card" style="font-size: 13px;">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Núm.Orden</th>
										<th>Servicio</th>
										<th>Total de compra</th>
										<th>Fecha de compra</th>
										<th>Estatus</th>
										<th>Detalle pagos</th>
									</tr>
								</thead>
								<tbody>
									@foreach($listAccount as $respuesta)
									<tr>
										<td>{{ $respuesta['id'] }}</td>
										<td>{{ $respuesta['folio'] }}</td>
										<td>${{ $respuesta['original_amount'] }}</td>
                                        <td>{{ date('d-m-Y', strtotime($respuesta['date_sale']))}}</td>
										<td>
											@if ($respuesta['status'] == 'PENDIENTE')
												<span class="badge badge-success">{{ $respuesta['status'] }}</span>
											@else
												<span class="badge badge-warning">{{ $respuesta['status'] }}</span>
											@endif
										</td>
										<td><a class="btn btn-primary btn-sm radius-30 px-4" style="background-color: #74001d!important; font-weight: bold;" href="{{ url('pagoDetalles/'.$respuesta['id']) }}">DETALLE DE PAGOS</a></td>
									</tr>
									@endforeach
								
								</tbody>

							</table>
						</div>
					</div>
				</div>
				<!-- <div class="col" style="margin-left: auto; width: 138px;">
					<div class="card radius-10 bg-danger bg-gradient" style="height: 69px;">
						<div class="card-body" style="align-self: center;">
							<div class="d-flex align-items-center">
								<div>
									<p class="mb-0 text-white" style="font-size: 12px;">MONTO A PAGAR</p>
									<h4 class="my-1 text-white" style="font-size: 15px;text-align: -webkit-center;">$8245</h4>
								</div>
		
							</div>
						</div>
					</div>
				</div> -->
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
				buttons: ['excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	@endsection