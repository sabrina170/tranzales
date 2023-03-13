
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
                        <li class="breadcrumb-item"><a href="index.html">Usuarios</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-left text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-left">
            <a href="" type="button" class="dt-button add-new btn btn-danger"
            type="button" data-bs-toggle="modal" data-bs-target="#modals-slide-in">Agregar +</a>
        </div>
        
    </div>
</div>
<div class="content-body">
    <section class="app-user-list">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">6</h3>
                            <span>Total Usuarios</span>
                        </div>
                        <div class="avatar bg-light-primary p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">2</h3>
                            <span>Administradores</span>
                        </div>
                        <div class="avatar bg-light-danger p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                 width="14" height="14" viewBox="0 0 24 24" fill="none"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                  stroke-linejoin="round" class="feather feather-user-plus font-medium-4">
                                  <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5"
                                   cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">3</h3>
                            <span>Operarios</span>
                        </div>
                        <div class="avatar bg-light-success p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">1</h3>
                            <span>Gerentes</span>
                        </div>
                        <div class="avatar bg-light-warning p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line></svg>
                            </span>
                        </div>
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
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Celular</th>
                                <th>DNI</th>
                                <th>Estado</th>
                                <th>Tipo</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td>Admin</td>
                                <td>Admin Admin</td>
                                <td>987327262</td>
                                <td>76243536</td>
                                <td><span class="badge badge-light-success">Activo</span></td>
                                <td><strong>Administrador</strong></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>Admin2</td>
                                <td>Admin2 Admin</td>
                                <td>987327262</td>
                                <td>76243536</td>
                                <td><span class="badge badge-light-danger">Desactivo</span></td>
                                <td><strong>Administrador</strong></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>Monica</td>
                                <td>Sanchez Medina</td>
                                <td>9873123262</td>
                                <td>79999536</td>
                                <td><span class="badge badge-light-success">Activo</span></td>
                                <td><strong>Administrador</strong></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>Augusta</td>
                                <td>Fernandez Llata</td>
                                <td>987227262</td>
                                <td>799243536</td>
                                <td><span class="badge badge-light-success">Activo</span></td>
                                <td><strong>Administrador</strong></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>Fernando</td>
                                <td>Lucas Rzabal</td>
                                <td>987327202</td>
                                <td>76243576</td>
                                <td><span class="badge badge-light-success">Activo</span></td>
                                <td><strong>Administrador</strong></td>
                                <td><i data-feather='edit'></i>Editar</td>
                            </tr>
                            <tr> 
                                <td>Juan</td>
                                <td>Marquez de Silva</td>
                                <td>987300002</td>
                                <td>76241234</td>
                                <td><span class="badge badge-light-success">Activo</span></td>
                                <td><strong>Gerente</strong></td>
                                <td><i data-feather='edit'></i>Editar</td>
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
