<div class="modal fade" id="detcierre{{$doc->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Descargar PDFS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <form action="{{ route('crear-cierre') }}"  method="post" enctype="multipart/form-data">
                @csrf --}}
            <div class="modal-body">
                        <div class="row">
                            @php
                                $datos_destinos = json_decode($doc->datos_destinos, true);   
                                $cont = count($datos_destinos);
                            @endphp
                            <div class="col-md-6">
                                <label class="form-label" for="first-name-column">
                                <strong>  Destino</strong>
                                </label>
                            {{-- <input type="hidden" name="datos_destinos" value="{{$doc->datos_destinos}}" readonly> --}}
                            @foreach ($datos_destinos as $item)
                                @foreach ($destinos as $des)
                                    @if ($des->id==$item)
                                    <div class="col">
                                                    <span class="badge bg-primary">{{$des->referencia}}
                                                    </span>
                                    </div>
                                    <br>
                                    @else
                                    @endif
                                @endforeach
                            @endforeach
                            </div>  
                            <div class="col-md-6">
                                <label class="form-label" for="first-name-column">
                                  <strong> Documentos</strong>
                                </label>
                            @foreach ($cierres as $item)
                                {{-- @foreach ($item->datos_guias as $des) --}}
                                    @if ($doc->id_cierre==$item->id)
                                    @php
                                        $datos_destinos = json_decode($item->datos_guias, true); 
                                    @endphp
                                    @foreach ($datos_destinos as $des)
                                   
                                    <div class="col">
                                        <a href="{{asset('pdfs-guias/'.$des)}}" download="{{$des}}">
                                            Descargar
                                        </a>
                                    </div>
                                    <br>
                                    @endforeach
                                    
                                    @else
                                    @endif
                            @endforeach
                            </div>
                        </div>
            </div>

            {{-- <div class="modal-footer">
                <input type="hidden" name="id_soli" value="{{$doc->id}}" readonly>
               <button type="submit" class="btn btn-success  waves-effect waves-float waves-light" name="accion" value="finalizar">Finalizar</button>
              </div> --}}
            {{-- </form> --}}
        </div>
    </div>
</div>