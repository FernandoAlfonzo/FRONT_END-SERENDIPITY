



@extends("layouts.app")
@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <!--end breadcrumb-->
                <div class="row row-cols-lg-auto g-2" style="justify-content: flex-end;height: 18px;">
                        <div class="position-relative">
                            <input type="text" class="form-control ps-5" placeholder="Buscar servicio..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                        </div>
                    </div>
                    {{-- <h6 class="mb-0 text-uppercase" style="color: #223175;font-weight: bold;">Maestrías</h6> --}}
                    <br>
                    <hr/>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                        @foreach($commercialProduct as $list)
                        <div class="col">
                            <div class="card border-primary border-bottom border-3 border-0">
                                <img src="{{env('URL_BACK_IMG').$list['url_image']}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    
                                    <h5 class="card-title" style="color: #223175"></h5>
                                    <h6 class="card-text">{{ $list['name'] }}</h6>
                                    <p class="card-text">{{ $list['description'] }}</p>
                                    <hr>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="{{ asset('download/Learn PHP 7 Object Oriented Modular Programming(z-lib.org).pdf') }}" download class="btn btn-inverse-primary"><i class='fadeIn animated bx bx-detail'></i>Ver PDF</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col">
                            <div class="card border-primary border-bottom border-3 border-0">
                                <img src="assets/images/pruebas.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #223175">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <hr>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="javascript:;" class="btn btn-inverse-primary"><i class='fadeIn animated bx bx-detail'></i>Ver</a>
                                        <a href="javascript:;" class="btn btn-primary"><i class='fadeIn animated bx bx-cart' ></i>Detalle de compra</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <br>
                    {{-- <h6 class="mb-0 text-uppercase" style="color: #223175;font-weight: bold;">Diplomados</h6> --}}
                    {{-- <hr/>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                        <div class="col">
                            <div class="card border-primary border-bottom border-3 border-0">
                                <img src="assets/images/pruebas.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #223175">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <hr>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="javascript:;" class="btn btn-inverse-primary"><i class='fadeIn animated bx bx-detail'></i>Ver</a>
                                        <a href="javascript:;" class="btn btn-primary"><i class='fadeIn animated bx bx-cart' ></i>Detalle de compra</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-primary border-bottom border-3 border-0">
                                <img src="assets/images/pruebas.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #223175">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <hr>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="javascript:;" class="btn btn-inverse-primary"><i class='fadeIn animated bx bx-detail'></i>Ver</a>
                                        <a href="javascript:;" class="btn btn-primary"><i class='fadeIn animated bx bx-cart' ></i>Detalle de compra</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
                    
                
                        
                    @endsection
