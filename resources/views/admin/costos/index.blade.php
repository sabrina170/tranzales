
@extends('layouts.head')
<!-- MENU -->
@section('content')

<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Modulo</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Solicitudes</a>
                        </li>
                        <li class="breadcrumb-item active">Costos
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- --}}
    
</div>


<div class="content-body">
    {{-- @if (Auth::user()->tipo==1 || Auth::user()->tipo==2) --}}
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card p-1">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered dt-responsive table-sm" id="solicitudes">
                        <thead class="text-center">
                            <tr>
                                {{-- <th>ID</th> --}}
                                {{-- <th>CODIGO SOLICITUD</th> --}}
                                <th style="font-size: 10px">FECHA <br> TRASLADO</th>
                                <th style="font-size: 10px">CLIENTE</th>
                                <th style="font-size: 10px">HORA <br> EN GRANJA</th>
                                <th style="font-size: 10px">CANTIDAD <br> TOTAL</th>
                                <th style="font-size: 10px">ORIGEN</th>
                                <th style="font-size: 10px;width: 40px">DESTINOS</th>
                                <th style="font-size: 10px;width: 40px">COSTO FLETE</th>
                                <th style="font-size: 10px;width: 40px">COSTO COMBUSTIBLE</th>
                                <th style="font-size: 10px;width: 40px">COSTO PEAJE</th>
                                <th style="font-size: 10px;width: 40px">COSTO BALANZA</th>
                                <th style="font-size: 10px;width: 40px">COSTO VIATICOS</th>
                                {{-- <th>LAVADO</th>
                                <th>N° COMP.</th> --}}
                                {{-- <th style="font-size: 10px">HORA <br> EN COCHERA</th> --}}
                                <th style="font-size: 10px">ESTADO</th>

                                {{-- <th>CIERRE</th> --}}
                                <th tyle="font-size: 10px;width: 20px">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solicitudes as $doc)
                            
                            <tr style="font-size: 12px;"> 
                                {{-- <td>{{$doc->codigo}}</td> --}}
                                @php
                                $fecha= $doc->fecha_traslado;
                                $date = new DateTime($fecha);    
                                @endphp
                                <td><strong>{{$date->format('d-m-Y')}}</strong></td>
                                <td style="font-size: 12px"><strong>{{$doc->nombre_cli}}</strong></td>
                                <td><strong>{{$doc->hora}}</strong></td>
                                <td>{{$doc->cantidad}}</td>
                                <td>{{$doc->referencia_cli}}</td>
                               
                                <td> 
                                    @foreach (json_decode($doc->destinos) as $item)
                                    @foreach ($destinos as $des)
                                        @if ($des->id==$item)
                                        {{$des->referencia}} <br>
                                       
                                        @else
                                        @endif
                                    @endforeach
                                    @endforeach
                                    @php
                                    @endphp
                                </td>
                                {{-- <td>{{$doc->fecha_traslado}}</td> --}}
                                {{-- <td>{{$doc->origen}}</td> --}}
                                
                               
                                {{-- <td>{{$doc->costo}}</td> --}}
                                
                               <td>S/. <strong>{{$doc->costo}}</strong></td>
                                    <td><button type="button" class="btn btn-secondary btn-icon rounded-circle"
                                        data-bs-toggle="modal" data-bs-target="#crearmodal{{$doc->id}}">
                                        <i data-feather='plus'></i>
                                        </button></td>
                                    <td><button type="button" class="btn btn-secondary btn-icon rounded-circle"
                                        data-bs-toggle="modal" data-bs-target="#crearmodal{{$doc->id}}">
                                        <i data-feather='plus'></i>
                                        </button></td>
                                    <td><button type="button" class="btn btn-secondary btn-icon rounded-circle"
                                        data-bs-toggle="modal" data-bs-target="#crearmodal{{$doc->id}}">
                                        <i data-feather='plus'></i>
                                        </button></td>
                                     <td> <button type="button" class="btn btn-secondary btn-icon rounded-circle"
                                    data-bs-toggle="modal" data-bs-target="#crearmodal{{$doc->id}}">
                                    <i data-feather='plus'></i>
                                    </button></td>
                                {{-- <td>{{$doc->lavado}}</td> --}}
                                <td>
                                    @if ($doc->estado==1)
                                    <span class="badge bg-info">Creado</span>
                                    @elseif ($doc->estado==3)
                                    <span class="badge bg-warning">En proceso</span>
                                    @elseif ($doc->estado==4)
                                    <span class="badge bg-success">Entregado</span>
                                    @elseif ($doc->estado==5)
                                    <span class="badge bg-primary">Facturado</span>
                                    @else 
                                    <span class="badge bg-danger">Pendiente Asig.</span>
                                    @endif
                                </td>
                                
                                <td>
                                    <div class="col-lg-6 col-12">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a type="button" class="btn btn-secondary waves-effect"  href="{{route('detalle-solicitud',$doc->id)}}">
                                                <i data-feather='eye'></i></a>
                                            {{-- <button type="button" class="btn btn-warning waves-effect">
                                                <i data-feather='edit'> </i></button>
                                                <button type="button" class="btn btn-danger waves-effect">
                                                    <i data-feather='trash-2'></i></button> --}}
                                          </div>
                                    </div>
                                   
                                </td>
                            </tr>
                            @include('admin.modals.CrearPlani')
                            @include('admin.modals.EditPlani')
                            @include('admin.modals.CrearCierre')
                            @include('admin.modals.DetCierre')
                           
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@if (session()->get('data'))
<div class="alert alert-success">
    <script>
       var text = '{{session()->get('data')}}';
       Swal.fire(
        'Ok!',
        text,
        'success'
        )       
    </script>
</div>
@endif
  <script>

$( function() {
    $("#ayudantes").change( function() {
        if ($(this).val() !== "") {
            $("#carga").prop("disabled", false);
            $("#descarga").prop("disabled", false);
            $("#descarga2").prop("disabled", false);
        } else {
            $("#carga").prop("disabled", true);
            $("#descarga").prop("disabled", true);
            $("#descarga2").prop("disabled", true);
        }
    });
});

    var idioma=

{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "NingÃºn dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Ãšltimo",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copyTitle": 'Informacion copiada',
        "copyKeys": 'Use your keyboard or menu to select the copy command',
        "copySuccess": {
            "_": '%d filas copiadas al portapapeles',
            "1": '1 fila copiada al portapapeles'
        },

        "pageLength": {
        "_": "Mostrar %d filas",
        "-1": "Mostrar Todo"
        }
    }
};



//Convierte el div a imagen y la descarga
document.querySelector('button').addEventListener('click', function() {
  
});


$('#unidad').on('change', function(){
       
       var id = $(this).val();
       // alert(id);
       // alert(id);
           $.ajax({
           url:'{{ route('buscarunidad') }}',
           type:'GET',
           data:{'id':id},
           dataType:'json',
           success:function (data) {
               console.log(data);
               // $('#product_list').html(data);
               $('#datos_unidad').val(data);
               // alert(data.table_data);
           }
       })
   });

   $('#chofer').on('change', function(){

var id = $(this).val();
// alert(id);
// alert(id);
  $.ajax({
  url:'{{ route('buscarchofer') }}',
  type:'GET',
  data:{'id':id},
  dataType:'json',
  success:function (data) {
      console.log(data);
      // $('#product_list').html(data);
      $('#datos_chofer').val(data);
      // alert(data.table_data);
  }
})
});


var idioma=

        {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "NingÃºn dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Ãšltimo",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copyTitle": 'Informacion copiada',
                "copyKeys": 'Use your keyboard or menu to select the copy command',
                "copySuccess": {
                    "_": '%d filas copiadas al portapapeles',
                    "1": '1 fila copiada al portapapeles'
                },

                "pageLength": {
                "_": "Mostrar %d filas",
                "-1": "Mostrar Todo"
                }
            }
        };

        $(document).ready( function () {
        var table = $('#solicitudes').DataTable({
                    dom: '<"border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    language: idioma,
                    buttons: [
                    // 'excel'
                        {
                        extend: 'excel',
                        text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [0,1,2,3, 4, 5, 6,7,8,9,10,11,12] }
                        },
                        {
                            extend: 'print',
                        text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [0,1,2,3, 4, 5, 6,7,8,9,10,11,12] }
                        },
                    ],
                    "order": [[ 4, 'asc' ], [ 5, 'asc' ]],
                    exportOptions: {
                    modifier: {
                    // DataTables core
                    // 'current', 'applied',
                    //'index', 'original'
                    page: 'all', // 'all', 'current'
                    search: 'none' // 'none', 'applied', 'removed'
                    },
                        columns: [0,1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]
                        
                    }
                })

        } );

        $(document).ready( function () {
        var table = $('#solicitudes2').DataTable({
                    dom: '<"border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    language: idioma,
                    buttons: [
                    // 'excel'
                        {
                        extend: 'excel',
                        text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [0,1,2,3, 4, 5, 6,7,8,9,10,11,12] }
                        },
                        {
                            extend: 'print',
                        text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [0,1,2,3, 4, 5, 6,7,8,9,10,11,12] }
                        },
                    ],
                    "order": [[ 4, 'asc' ], [ 5, 'asc' ]],
                    exportOptions: {
                    modifier: {
                    // DataTables core
                    // 'current', 'applied',
                    //'index', 'original'
                    page: 'all', // 'all', 'current'
                    search: 'none' // 'none', 'applied', 'removed'
                    },
                        columns: [0,1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]
                        
                    }
                })

        } );
        $(document).ready( function () {
        var table = $('#solicitudes3').DataTable({
                    dom: '<"border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    language: idioma,
                    buttons: [
                    // 'excel'
                        {
                        extend: 'excel',
                        text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [0,1,2,3, 4, 5, 6,7,8,9,10,11,12] }
                        },
                        {
                            extend: 'print',
                        text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [0,1,2,3, 4, 5, 6,7,8,9,10,11,12] }
                        },
                    ],
                    "order": [[ 4, 'asc' ], [ 5, 'asc' ]],
                    exportOptions: {
                    modifier: {
                    // DataTables core
                    // 'current', 'applied',
                    //'index', 'original'
                    page: 'all', // 'all', 'current'
                    search: 'none' // 'none', 'applied', 'removed'
                    },
                        columns: [0,1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12]
                        
                    }
                })

        } );
</script>
@endsection
