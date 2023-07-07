<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Tarifa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('crear_tarifa')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="first-name-column">Cliente - Referencia</label>
                                <select class="form-select" name="cliente" id="cliente" required>
                                    <option value="">Selecciona un cliente</option>
                                    @foreach ($choferes as $doc)
                                    <option value="{{$doc->id}}"> {{$doc->id}} - {{$doc->id}}</option>
                                    @endforeach
                                </select>

                               
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                                <div class=" mb-1" data-select2-id="133">
                                    <label class="form-label" for="select2-limited"> Destinos (Seleccione 1 o más destinos)</label>
                                    <div class="position-relative" data-select2-id="132">
                                        <select class="select2 form-select select2-hidden-accessible" 
                                        id="select2-multiple" multiple="" 
                                        data-select2-id="select2-multiple" tabindex="-1"
                                        aria-hidden="true" name="datos_destinos[]" required>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="first-name-column">Base</label>
                                <input type="text"  class="form-control cant decimales" onKeyUp="Suma()" name="base" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="first-name-column">IGV</label>
                                <input type="text"  class="form-control cant decimales" onKeyUp="Suma()" name="igv" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Total</label>
                                    <input type="number" id="total" class="form-control"  name="total" readonly>
                                </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button id="add-receta" type="submit" class="btn btn-danger me-1 waves-effect waves-float waves-light">Agregar</button>
    
            </div>
            </form>
      </div>
    </div>
</div>