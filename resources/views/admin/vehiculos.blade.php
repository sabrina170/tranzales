
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
                        <li class="breadcrumb-item"><a href="index.html">Vehiculos</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="content-header-left text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-left">
            <a href="" type="button" class="dt-button add-new btn btn-danger"
            type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in">Agregar +</a>
        </div>
        
    </div> --}}
</div>
<div class="content-body">
    <section class="app-user-list">

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
           + Agregar
          </button> 
          <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Vehiculo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.crear-vehiculo') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-column">Imagen</label>
                            <input type="file" id="first-name-column" class="form-control" name="vehiculo_img" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-column">Unidades</label>
                            <input type="text" id="first-name-column" class="form-control" placeholder="INTER" name="unidad" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="last-name-column">Marca</label>
                            <input type="text" id="last-name-column" class="form-control" placeholder="INTERNACIONAL" name="marca" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="city-column">Placa</label>
                            <input type="text" id="city-column" class="form-control" placeholder="AKJ888" name="placa" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="country-floating">N° Tarjeta Circulacion</label>
                            <input type="text" id="country-floating" class="form-control" name="tar_circulacion"
                             placeholder="151729858" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">N° Certificado de  CITV</label>
                            <input type="text" id="company-column" class="form-control" name="n_certificado"
                             placeholder="C-2022-204-309-010614" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-column">Fecha. Ven. CITV</label>
                            <input type="date" id="email-id-column" class="form-control" name="fecha_ven_citv" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Compañia SOAT</label>
                            <input type="text" id="company-column" class="form-control" name="soat"
                             placeholder="Mapfre Perú" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Fech. Venc. SOAT</label>
                            <input type="date" id="company-column" class="form-control" name="fecha_ven_soat"
                             placeholder="C-2022-204-309-010614" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Categoría</label>
                            <input type="text" id="company-column" class="form-control" name="categoria"
                             placeholder="A1" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Serie Chasis</label>
                            <input type="text" id="company-column" class="form-control" name="seria_chasis"
                             placeholder="3HAMMAAR4FL678363" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Año Fabricación</label>
                            <input type="number" id="company-column" class="form-control" name="anois_fab"
                             placeholder="2023" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">N° Ejes</label>
                            <input type="number" id="company-column" class="form-control" name="n_ejes"
                             placeholder="3" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Carga Util</label>
                            <input type="number" id="company-column" class="form-control" name="carga_util"
                             placeholder="17500" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="company-column">Peso Seco</label>
                            <input type="number" id="company-column" class="form-control" name="peso_seco"
                             placeholder="7500" required>
                        </div>
                    </div>
                </div>
            
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger me-1 waves-effect waves-float waves-light">Agregar</button>

        </div>
    </form>
      </div>
    </div>
  </div>
        
         <!-- Basic Tables start -->
    <div class="row mt-2" id="basic-table">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    {{-- <p class="card-text">
                        Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                        can use any example of below table for your table and it can be use with any type of bootstrap tables.
                    </p> --}}
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Imagen</th>
                                <th>Unidades</th>
                                <th>Marca</th>
                                <th>Placa</th>
                                <th>Fecha. Ven. CITV</th>
                                <th>Fech. Venc. SOAT</th>
                                <th>Categoría</th>
                                <th>Fecha Creación</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $doc)
                            <tr> 
                                <td>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="" data-bs-original-title="Alberto Glotzbach">
                                        <img src="{{asset('images-vehiculos/'.$doc->imagen)}}" alt="Avatar" height="26" width="26">
                                    </div>
                                </td>
                                <td>{{$doc->unidad}}</td>
                                <td>{{$doc->marca}}</td>
                                <td>{{$doc->placa}} </td>
                                <td>{{$doc->fecha_ven_citv}}</td>
                                <td>{{$doc->fecha_ven_soat}}</td>
                                <td>{{$doc->categoria}}</td>
                                <td>{{$doc->created_at}}</td>
                                <td>
                                    <a type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#view{{$doc->id}}"><i data-feather='eye'></i>Detalles</a>
                                    <a type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$doc->id}}"><i data-feather='edit'></i>Editar</a>
                                </td>
                            </tr>
                            @include('admin.modals.modaldetvehi')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
       
    </section>
</div>
@endsection

@section('js')
  <script>
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
   var table = $('#colegios').DataTable({
    dom: 'Blfrtip',
    // "dom": 'Br<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
    // "lengthMenu": [[5,10,20, -1],[5,10,50,"Mostrar Todo"]],
    // "dom": 'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',
    language: idioma,
    buttons: [
        'excel'
    ],
    exportOptions: {
        modifier: {
          // DataTables core
          order: 'index', // 'current', 'applied',
          //'index', 'original'
          page: 'all', // 'all', 'current'
          search: 'none' // 'none', 'applied', 'removed'
        },
    
            columns: [1, 2, 3, 4, 5, 6, 7,8,9]
      
      }
   });

} );


          

  </script>
@endsection

<!-- MENU -->
