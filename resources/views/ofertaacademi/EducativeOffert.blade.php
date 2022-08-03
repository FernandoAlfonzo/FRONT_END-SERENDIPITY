@extends("layouts.app")
		@section("wrapper")
        <div class="page-wrapper">
			<div class="page-content">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-lg-9 col-xl-10">
										<form class="float-lg-end">
											<div class="row row-cols-lg-auto g-2">
												<div class="col-12">
													<div class="position-relative">
														<input type="text" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
													</div>
												</div>
												<div class="col-12">
													<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
														<button type="button" class="btn btn-white">Ordenar por</button>
														<div class="btn-group" role="group">
														  <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
															<i class='bx bx-chevron-down'></i>
														  </button>
														  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
															<li><a class="dropdown-item" href="#">Precio más alto al bajo</a></li>
															<li><a class="dropdown-item" href="#">Precio más bajo al alto</a></li>
														  </ul>
														</div>
													  </div>
												</div>
												<div class="col-12">
													<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
														<button type="button" class="btn btn-white">Ver en forma</button>
														<div class="btn-group" role="group">
														  <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
															<i class='bx bxs-category'></i>
														  </button>
														  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
															<li><a class="dropdown-item" href="#">Cuadriculada</a></li>
															<li><a class="dropdown-item" href="#">Lista</a></li>
														  </ul>
														</div>
													  </div>
												</div>
												<div class="col-12">
													<div class="btn-group" role="group">
														<button type="button" class="btn btn-white">Rango de precio</button>
														<div class="btn-group" role="group">
														  <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
															<i class='bx bx-slider'></i>
														  </button>
														  {{-- <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
															<li><a class="dropdown-item" href="#">Dropdown link</a></li>
															<li><a class="dropdown-item" href="#">Dropdown link</a></li> --}}
														  </ul>
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
				</div>
				
				<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
				@if (count($listOferts) > 0)
					@foreach ($listOferts as $listOfert)
					<form class="needs-validation" novalidate action="{{ url('AddCarBuy') }}" method="POST" class="textprofile" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="id_Generation" value="{{ $listOfert['id'] }}">
						<input type="hidden" name="id_service" value="{{ $listOfert['id_service'] }}">
						<input type="hidden" name="NameOfer" value="{{ $listOfert['NameOfer'] }}">
						<input type="hidden" name="max_cost" value="{{ $listOfert['max_cost'] }}">
					<div class="col">
						<div class="card">
							<img src="{{env('URL_BACK_IMG').$listOfert['url_image']}}" class="card-img-top" alt="...">
							<a rel="nofollow" href="/cart/?add-to-cart=1539" data-quantity="1" data-product_id="1539" class="add_to_cart_button product_type_simple"><i class="icon-basket"></i></a>
							<!--<div class="">
								<div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
							</div>-->
							<div class="card-body">
								<h6 class="card-title cursor-pointer">{{ $listOfert['NameOfer'] }}</h6>
								<div class="clearfix">
                                    <br>
									{{-- <p class="mb-0 float-start"><strong>134</strong> vendidos </p> --}}
									<div class="col" align="right">
										<button type="submit" class="btn btn-primary px-4 radius-30"><i class="fadeIn animated bx bx-cart-alt"></i></button>
										
									</div>

									<br>
									<p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">${{ $listOfert['max_cost'] }}</span>$<span>{{ $listOfert['min_cost'] }}</span></p>
									<!-- <br><p class="mb-0 float-end fw-bold">Proximamente</span></p> -->
									
								</div>
								{{-- <div class="d-flex align-items-center mt-3 fs-6">
								  <div class="cursor-pointer">
									<i class='bx bxs-star text-warning'></i>
									<i class='bx bxs-star text-warning'></i>
									<i class='bx bxs-star text-warning'></i>
									<i class='bx bxs-star text-warning'></i>
									<i class='bx bxs-star text-secondary'></i>
								  </div>	
								  <p class="mb-0 ms-auto">4.2(182)</p>
								</div> --}}
							</div>
						</div>
					</div>
					</form>
					@endforeach
					@else
					<h2 style="font-size: 16px;">No tienes ofertas educativas</h2>
					@endif
				</div><!--end row-->
			</div>
		</div>
        @endsection