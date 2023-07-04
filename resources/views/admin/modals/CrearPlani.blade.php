<div class="modal fade" id="crearmodal{{$doc->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if ($doc->estado==2)
                
            @else
            {{-- <form action="{{ route('crear-plani') }}" method="post" enctype="multipart/form-data">
                @csrf --}}
            <div class="modal-body">
                    <div class="row">
                        <!-- Basic -->
                        <div class="col-md-6 mb-1">
                            <label class="form-label" for="select2-basic">Unidad</label>
                            <select class="form-select" id="unidad" name="unidad">
                                @foreach ($vehiculos as $doc)
                                <option value="{{$doc->id}}"> {{$doc->unidad}}</option>
                               
                                @endforeach   
                             </select>   
                        </div>
                        <div class="col-md-6 mb-1">
                            <label class="form-label" for="basicInput">Datos de la unidad</label>
                            <input type="text" class="form-control" id="datos_unidad"  readonly>
                        </div>
                        {{-- datos chofer --}}
                        <div class="col-md-6 mb-1">
                            <label class="form-label" for="select2-basic">Chofer</label>
                            <select class="select2 form-select" id="chofer" name="chofer">
                                @foreach ($choferes as $doc)
                                <option value="{{$doc->id}}"> {{$doc->dni_cho}}</option>
                               
                                @endforeach   
                            </select>   
                        </div>
                        <div class="col-md-6 mb-1">
                            <label class="form-label" for="basicInput">Nombres y Apellido</label>
                            <input type="text" class="form-control" id="datos_chofer" readonly>
                        </div>
                        {{-- ayudantes --}}
                        <div class="col-md-6 mb-1">
                            <label class="form-label" for="select2-basic">Ayudantes</label>
                            <select class="select2 form-select" id="select2-multiple" multiple name="ayudantes[]">
                          
                                @foreach ($choferes as $doc)
                                <option value="{{$doc->id}}"> {{$doc->nombres_cho}}- {{$doc->dni_cho}}</option>
                               
                                @endforeach   
                            </select>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="submit" type="Guardar" class="btn btn-primary waves-effect waves-float waves-light">Guardar</button>
                {{-- <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Finalizar</button> --}}
            </div>
            @endif
            
        </div>
    </div>
</div>