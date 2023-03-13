
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
                        <li class="breadcrumb-item"><a href="index.html">Solicitudes</a>
                        </li>
                        <li class="breadcrumb-item active">Detalle
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-left text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-left">
            <a href="{{route('admin.solicitudes')}}" type="button" class="btn btn-danger waves-effect waves-float waves-light">Agregar +</a>
        </div>
    </div>
</div>
<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
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
                                <th>ID</th>
                                <th>DESTINO ORIGEN</th>
                                <th>HORA DE SALIDA</th>
                                <th>HORA ORIGEN</th>
                                <th>MATRICULA</th>
                                <th>NOMBRE</th>
                                <th>ESTADO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>UID0313194041</td>
                                <td>HUARANGOS</td>
                                <td>12:00 PM</td>
                                <td>15:00 PM</td>
                                <td>B6C754</td>
                                <td>Juan Perez</td>
                                <td><span class="badge bg-warning">Guardado</span></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>UID03131940321</td>
                                <td>ESMERALDA CORP S.A.C.</td>
                                <td>12:00 PM</td>
                                <td>15:00 PM</td>
                                <td>AKJ888</td>
                                <td>Juan Perez</td>
                                <td><span class="badge bg-success">Finalizado</span></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>UID03333194041</td>
                                <td>FRIGORIFICO LA COLONIAL S.A.C.</td>
                                <td>12:00 PM</td>
                                <td>15:00 PM</td>
                                <td>BSO786</td>
                                <td>Juan Perez</td>
                                <td><span class="badge bg-success">Finalizado</span></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>UID0313114041</td>
                                <td>INVERSIONES PECUARIAS LURIN S A</td>
                                <td>12:00 PM</td>
                                <td>15:00 PM</td>
                                <td>AKJ888</td>
                                <td>Juan Perez</td>
                                <td><span class="badge bg-success">Finalizado</span></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>UID0313111041</td>
                                <td>CAMAL CONCHUCOS S A</td>
                                <td>12:00 PM</td>
                                <td>15:00 PM</td>
                                <td>AKJ888</td>
                                <td>Juan Perez</td>
                                <td><span class="badge bg-warning">Guardado</span></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>UID0313166041</td>
                                <td>FRIGORIFICO CAMAL SAN PEDRO S.A.C.</td>
                                <td>12:00 PM</td>
                                <td>15:00 PM</td>
                                <td>AKJ888</td>
                                <td>Juan Perez</td>
                                <td><span class="badge bg-warning">Guardado</span></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>UID0313194001</td>
                                <td>ESMERALDA CORP S.A.C.</td>
                                <td>12:00 PM</td>
                                <td>15:00 PM</td>
                                <td>AZQ855</td>
                                <td>Juan Perez</td>
                                <td><span class="badge bg-warning">Guardado</span></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

   

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
