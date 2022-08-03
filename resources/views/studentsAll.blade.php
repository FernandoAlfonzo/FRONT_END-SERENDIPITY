@extends("layouts.app")
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="col" style="width: 138px;height: 17px;">
						</div>
						<div class="align-items-center mb-4 gap-3" style="width: 250px;margin-left: auto;">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Buscar alumno"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"></div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr style="text-align: center;">
										<th>ID</th>
										<th>Matricula</th>
										<th>Nombres</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Genero</th>
										<th>Telefono</th>
										<th>Profesion</th>
										{{-- <th>Actions</th> --}}
									</tr>
								</thead>
								<tbody style="text-align-last: center;">
									@foreach($listStudents as $respuesta)
									<tr>
										<td>2112</td>
										<td>{{ $respuesta['enrollment'] }}</td>
										<td>{{ $respuesta['name'] }}</td>
										<td>{{ $respuesta['last_father_name'] }}</td>
										<td>{{ $respuesta['last_mother_name'] }}</td>
										<td>{{ $respuesta['gender'] }}</td>
									
										{{-- <td><a class="btn btn-primary btn-sm radius-30 px-4" style="background-color: #74001d!important;" href="detallecompra">Detalle de compra</a></td> --}}
										<td>{{ $respuesta['phone'] }}</td>
										<td>{{ $respuesta['profession'] }}</td>
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
	