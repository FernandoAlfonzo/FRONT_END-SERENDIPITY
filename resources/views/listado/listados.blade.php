@extends("layoutsLanding.indexLanding")
@section("landing")




<section id="portfolio" class="portfolio">
    {{-- style="margin-top: -89px;" --}}
    {{-- imagenes todas --}}
    <div style="color: #a8a8a8; font-weight: bold; font-size: 18px;  margin-left: 111px;">Mostrando {{$offers->firstItem()}}-{{$offers->lastItem()}} de {{$offers->total()}} resultados</div>
    <div class="" style="font-size: 14px;">
        <select class="form-select" id="inputSelectCountry" aria-label="Default select example">
            <option selected>Ordenar por defecto</option>
            <option value="1">Ordenar por popularidad</option>
            <option value="2">Ordenar por las últimas</option>
            <option value="3">Ordenar por precio: bajo a alto</option>
            <option value="4">Ordenar por precio: alto a bajo</option>
        </select>
    </div>
    <div class="container d-flex" style="min-inline-size: -webkit-fill-available;" >

        {{-- style="margin-right: 175px;" --}}
            
        <div class="row mt-3" style="width: 1050px; margin-right: auto; justify-content: space-evenly;padding-inline: 43px;">
             @if (count($offers) > 0)
             @foreach($offers as $offer)
             

             {{-- {{$offers->firstItem()}} Obtenga el número de resultado del primer elemento de los resultados. --}}
             {{-- {{$offers->lastItem()}} Obtenga el número de resultado del último elemento de los resultados. --}}
             {{-- {{$offers->total()}} Determine el número total de elementos coincidentes en el almacén de datos. --}}
             
             {{-- imagenes --}}
             <div class="col-lg-3 col-md-6 portfolio-item filter-card mx-3">
                 {{-- sombra --}}
                 <div class="portfolio-wrap" style="background: rgb(255 255 255 / 0%); width: 290px;">
                    <div class="contenedores"> 
                         <img src="http://192.168.1.73:8000\{{$offer['url_image']}}" class="img-fluid" alt="image" style="min-height: 290px; max-height: 250px; object-fit: cover;">
                         {{-- <div class="centrado"><strong style="color: rgb(0, 0, 0);font-size: 20px;">Próximamente</strong></div>  Establecer funcion mostrar por fecha de salida--}}
                    </div>
                     <div class="portfolio-info" style="margin: -19px" onclick="location.href='{{ url('resumen/'.$offer['id']) }}'">
                         <div class="portfolio-links d-flex justify-content-between w-100" style="font-size: xx-large; background-color: #c51c1c96;margin: -1px -1px;">
                             <div class="col"><a href="" data-glightbox="type: external" title="Portfolio Details"><i class=" fadeIn animated bx bx-cart-alt" style="color: white"></i></a></div>
                             <div class="col"><a href="/landingpage" data-glightbox="type: external" title="Portfolio Details"><i class=" bx bx-link" style="color: white"></i></a></div>
                         </div>
                     </div>
                 </div>
                 <br>
                 <a id="unico" href="/landingpage" style="font-weight: bold; text-align: inherit;" tabindex="0"> {{$offer['NameOfer']}}</a>
                 <br>
                 <del><a style="color:#a8a8a8; font-size:20px; font-weight: 700;" class="woocommerce-Price-currencySymbol">${{$offer['max_cost']}}</a> </del>
                 <bdi><a style="color:#223175; font-size:20px; font-weight: 700; text-decoration: underline;" class="woocommerce-Price-currencySymbol"> ${{$offer['min_cost']}}</a> </bdi>
                </div>
                 @endforeach 
                 @else
                 <br><br><br>
             <h2 style="color: #a8a8a8; font-weight: bold; font-size: 18px;">No disponemos de estas ofertas actualmente</h2>
             @endif  
             {{-- {{$offers->links()}} --}}
        </div>
        <div class="row" >
            <div class="col-12 col-lg-12">
                <div class="card" style="height: 533px;top: -78px;">
                    <div class="card-body">
                        <h5 class="my-3"><strong style="color:black;">Categorías del producto</strong></h5>
                        <div class="fm-menu" style="margin: -6px; font-size: 17px;">
                            <div class="list-group list-group-flush"> 
                                <a href="javascript:;" class="list-group-item py-1" style="color: white;background-color: #1e2a6f;" ><span>Diplomados online</span></a>
                                <a href="javascript:;" class="list-group-item py-1" style="color: white;background-color: #1e2a6f;"><span>Educación</span></a>
                                <a href="javascript:;" class="list-group-item py-1" style="color: white;background-color: #1e2a6f;"><span>Género</span></a>
                            </div>
                            <br>
                        <h5 class="my-3"><strong style="color:black;">Conoce nuestros<br>Seminarios Online</strong></h5>
                            <a class="btn btn-primary px-4"  href="" style="background-color: #1e2a6f; border-color: #1e2a6f; border-radius: 13px;">Seminarios Online</a>
                            <br>
                            <br>
                        <h5 class="my-3"><strong style="color:black;">Carrito</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
    @endsection