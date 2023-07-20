<div class="modal fade" id="crearcierre{{$doc->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Cierre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('crear-cierre') }}"  method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                        <div class="row">
                            @php
                                $datos_destinos = json_decode($doc->datos_destinos, true);   
                                $cont = count($datos_destinos);
                            @endphp
                            {{-- <input type="hidden" name="datos_destinos" value="{{$doc->datos_destinos}}" readonly> --}}
                            @foreach ($datos_destinos as $item)
                                @foreach ($destinos as $des)
                                    @if ($des->id==$item)
                                        <div class="col-md-4 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">
                                                    Destino</label>
                                                    <br>
                                                    <span class="badge bg-primary">{{$des->referencia}}
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">
                                                    Guia Transporte</label>
                                                <input type="file" id="first-name-column"
                                                class="form-control" name="guia{{$des->id}}" required>
                                            </div>
                                        </div>
                                    @else
                                    @endif
                                @endforeach
                            @endforeach
                            
                                <div class="col-md-12 mb-1">
                                    <div class="mb-1">
                                        <label class="d-block form-label"
                                        for="validationBioBootstrap">Indicaciones Especiales</label>
                                        <textarea class="form-control" id="observaciones"
                                        name="observaciones" rows="3"></textarea>
                                    </div>
                                </div>
                        </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" name="id_soli" value="{{$doc->id}}" readonly>
               <button type="submit" class="btn btn-success  waves-effect waves-float waves-light" name="accion" value="finalizar">Finalizar</button>
              </div>
            </form>
        </div>
    </div>
</div>