<div class="modal fade" id="edit{{$doc->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Vehiculo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.update-vehiculo',$doc->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img src="{{asset('images-vehiculos/'.$doc->imagen)}}" class="img-thumbnail" id="img1" height="200" width="200">
                        {{-- <img src="{{asset('images-vehiculos/'.$doc->imagen)}}" alt="" class="img-fluid"> --}}
                               
                        <div class="mb-1">
                            <label class="form-label" for="first-name-column">Imagen</label>
                            <input type="file" id="imagenSeleccionada" class="form-control" name="vehiculo_img">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-column">Unidades</label>
                            <input type="text" id="first-name-column" class="form-control" name="unidad" value="{{$doc->unidad}}" required>
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="city-column">Placa</label>
                            <input type="text" id="city-column" class="form-control" name="placa" value="{{$doc->placa}}" required>
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="country-floating">N° Tarjeta Circulacion</label>
                            <input type="text" id="country-floating" class="form-control" name="tar_circulacion"
                            value="{{$doc->tar_circulacion}}" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="last-name-column">Marca</label>
                            <input type="text" id="last-name-column" class="form-control" name="marca" value="{{$doc->marca}}" required>
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="company-column">N° Certificado de  CITV</label>
                            <input type="text" id="company-column" class="form-control" name="n_certificado"
                            value="{{$doc->n_certificado}}" required>
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="email-id-column">Fecha. Ven. CITV</label>
                            <input type="date" id="email-id-column" class="form-control" name="fecha_ven_citv" 
                            value="{{$doc->fecha_ven_citv}}" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Compañia SOAT</label>
                            <input type="text" id="company-column" class="form-control" name="soat"
                            value="{{$doc->soat}}" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Fech. Venc. SOAT</label>
                            <input type="date" id="company-column" class="form-control" name="fecha_ven_soat"
                            value="{{$doc->fecha_ven_soat}}" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Categoría</label>
                            <input type="text" id="company-column" class="form-control" name="categoria"
                            value="{{$doc->categoria}}" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Serie Chasis</label>
                            <input type="text" id="company-column" class="form-control" name="seria_chasis"
                            value="{{$doc->seria_chasis}}" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Año Fabricación</label>
                            <input type="number" id="company-column" class="form-control" name="anois_fab"
                            value="{{$doc->anois_fab}}" required>
                        </div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">N° Ejes</label>
                            <input type="number" id="company-column" class="form-control" name="n_ejes"
                            value="{{$doc->n_ejes}}" required>
                        </div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Carga Util</label>
                            <input type="number" id="company-column" class="form-control" name="carga_util"
                            value="{{$doc->carga_util}}" required>
                        </div>
                    </div>
                    <div class="col-md-2 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Peso Seco</label>
                            <input type="number" id="company-column" class="form-control" name="peso_seco"
                            value="{{$doc->peso_seco}}" required>
                        </div>
                    </div>
                </div>
            
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger me-1 waves-effect waves-float waves-light">Actualizar</button>

        </div>
    </form>
      </div>
    </div>
  </div>
  