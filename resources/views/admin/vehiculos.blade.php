
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
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Unidades</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="INTER" name="fname-column">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="last-name-column">Marca</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="INTERNACIONAL" name="lname-column">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="city-column">Placa</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="AKJ888" name="city-column">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="country-floating">N° Tarjeta Circulacion</label>
                                        <input type="text" id="country-floating" class="form-control" name="country-floating"
                                         placeholder="151729858">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">N° Certificado de  CITV</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                         placeholder="C-2022-204-309-010614">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-column">Fecha. Ven. CITV</label>
                                        <input type="date" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">Compañia SOAT</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                         placeholder="Mapfre Perú">
                                    </div>
                                </div>
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">Fech. Venc. SOAT</label>
                                        <input type="date" id="company-column" class="form-control" name="company-column"
                                         placeholder="C-2022-204-309-010614">
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">Categoría</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                         placeholder="A1">
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">Serie Chasis</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                         placeholder="3HAMMAAR4FL678363">
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">Año Fabricación</label>
                                        <input type="text" id="company-column" class="form-control" name="company-column"
                                         placeholder="2023">
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">N° Ejes</label>
                                        <input type="number" id="company-column" class="form-control" name="company-column"
                                         placeholder="3">
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">Carga Util</label>
                                        <input type="number" id="company-column" class="form-control" name="company-column"
                                         placeholder="17500">
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="company-column">Peso Seco</label>
                                        <input type="number" id="company-column" class="form-control" name="company-column"
                                         placeholder="7500">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="reset" class="btn btn-danger me-1 waves-effect waves-float waves-light">Agregar</button>
                                    {{-- <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>


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
                                {{-- <th>ID</th> --}}
                                <th>Unidades</th>
                                <th>Marca</th>
                                <th>Placa</th>
                                <th>Fecha. Ven. CITV</th>
                                <th>Fech. Venc. SOAT</th>
                                <th>Categoría</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>M1</td>
                                <td>MERCEDEZ BENZ</td>
                                <td>ASE740 </td>
                                <td>151910561</td>
                                <td>22/07/2023</td>
                                <td>N3</td>
                                <td><a href=""><i data-feather='eye'></i>Detalles</a>
                                    <a href=""><i data-feather='edit'></i>Editar</a></td>
                            </tr>
                            <tr> 
                                <td>M1</td>
                                <td>MERCEDEZ BENZ</td>
                                <td>ASE740 </td>
                                <td>151910561</td>
                                <td>22/07/2023</td>
                                <td>N3</td>
                                <td><a href=""><i data-feather='eye'></i>Detalles</a>
                                    <a href=""><i data-feather='edit'></i>Editar</a></td>
                            </tr>
                            <tr> 
                                <td>M1</td>
                                <td>MERCEDEZ BENZ</td>
                                <td>ASE740 </td>
                                <td>151910561</td>
                                <td>22/07/2023</td>
                                <td>N3</td>
                                <td><a href=""><i data-feather='eye'></i>Detalles</a>
                                    <a href=""><i data-feather='edit'></i>Editar</a></td>
                            </tr>
                            <tr> 
                                <td>M1</td>
                                <td>MERCEDEZ BENZ</td>
                                <td>ASE740 </td>
                                <td>151910561</td>
                                <td>22/07/2023</td>
                                <td>N3</td>
                                <td><a href=""><i data-feather='eye'></i>Detalles</a>
                                    <a href=""><i data-feather='edit'></i>Editar</a></td>
                            </tr>
                            <tr> 
                                <td>M1</td>
                                <td>MERCEDEZ BENZ</td>
                                <td>ASE740 </td>
                                <td>151910561</td>
                                <td>22/07/2023</td>
                                <td>N3</td>
                                <td><a href=""><i data-feather='eye'></i>Detalles</a>
                                    <a href=""><i data-feather='edit'></i>Editar</a></td>
                            </tr>
                            <tr> 
                                <td>M1</td>
                                <td>MERCEDEZ BENZ</td>
                                <td>ASE740 </td>
                                <td>151910561</td>
                                <td>22/07/2023</td>
                                <td>N3</td>
                                <td><a href=""><i data-feather='eye'></i>Detalles</a>
                                    <a href=""><i data-feather='edit'></i>Editar</a></td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
        <!-- list and filter start -->
        <div class="card">
            
            <!-- Modal to add new user starts-->
            <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                <div class="modal-dialog">
                    <form class="add-new-user modal-content pt-0" novalidate="novalidate">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-fullname">Nombres</label>
                                <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="user-fullname">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-uname">Apellido Paterno</label>
                                <input type="text" id="basic-icon-default-uname" class="form-control dt-uname"
                                 placeholder="Web Developer" name="user-name">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-email">Apellido Materno</label>
                                <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                                 placeholder="Developer" name="user-email">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-contact">Telefono</label>
                                <input type="number" id="basic-icon-default-contact" class="form-control dt-contact" placeholder="+1 (609) 933-44-22" name="user-contact">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-company">DNI</label>
                                <input type="number" id="basic-icon-default-company" class="form-control dt-contact"
                                 placeholder="76232414" name="user-company">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="user-role">Rol de Usuario</label>
                                <select class="form-select" id="basicSelect">
                                    <option>Operario</option>
                                    <option>Gerente</option>
                                    <option>Administrador</option>
                                </select>  </div>
                           
                            <button type="submit" class="btn btn-danger me-1 data-submit waves-effect waves-float waves-light">Agregar</button>
                            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal to add new user Ends-->
        </div>
        <!-- list and filter end -->
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
