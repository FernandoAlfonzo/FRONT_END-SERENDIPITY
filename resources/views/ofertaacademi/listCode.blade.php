@extends("layouts.app")

@section("style")
	<link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="../assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
@endsection

		@section("wrapper")

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                @if(Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
                <div class="col-md-12">
                    <label class="form-label">Buscar un Alumno</label>
                    <select id="" name="" class="single-select">
                        <option selected disabled value="">Busca un Alumno</option>
                        
                        <option value=""</option>
                        
                    </select>
                </div>
            @endif
            <br>
            
            @if(Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
            <div class="col-md-12">
                <label class="form-label">Regla de Pago</label>
                <select class="single-select">
                    <option selected disabled value="">Buscar una regla de pago</option>
                    
                    <option value=""</option>
                    
                </select>
            </div>
            @endif
            <br>
            
            @if(Session::get('userRol') == 'Administrador' or Session::get('userRol') == 'Vendedor')
            <div class="col-md-12">
                <label class="form-label">Codigo de Empleado</label>
                <select class="single-select">
                    <option selected disabled value="">Buscar un empleado</option>
                    <option value="">Giovanni</option>
                    <option value="">Misael</option>
                    <option value="">Fernando</option>
                </select>
            </div>
            @endif
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

        @endsection

        @section("script")
        <script src="assets/plugins/select2/js/select2.min.js"></script>
        <script>
            $('.single-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
            $('.multiple-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        </script>
        @endsection