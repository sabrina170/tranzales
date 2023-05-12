
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
                        <li class="breadcrumb-item"><a href="index.html">Clientes</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
{{-- crea soli --}}
        <div class="card">
                <form  action="{{route('crearcliente')}}" method="post">
                    @csrf
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-column">Nombre</label>
                                    <input type="text" class="form-control" id="codigo_solicitud" name="codigo_solicitud"
                                    value="UID{{ date("mdHis");}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="helpInputTop">FECHA SOLITUD:</label>
                                    <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="last-name-column">Departamento</label>
                                    <select  class="form-select info-ob" id="cliente" name="cliente"  @selected(old('cliente'))>

                                        <option value="0">Seleccione un cliente</option>
                                            @foreach ($clientes as $cli)
                                            <option value="{{$cli->id}}">{{$cli->nombre}}- <strong>{{$cli->referencia}}</strong></option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <label class="form-label" for="disabledInput">FECHA DE TRASLADO:</label>
                                <input type="date" class="form-control" id="fecha_traslado" name="fecha_traslado" required>
                            </div>
                            
                            <div class="col-md-3 col-12">
                                <label class="form-label" for="disabledInput">HORA EN GRANJA:</label>
                                <input type="time" class="form-control" name="hora" id="hora" required>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="disabledInput">CANT. TOTAL</label>
                                    <input type="number" class="form-control" name="cantidad" id="cantidad" value="0" readonly>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="disabledInput">Precio TOTAL</label>
                                    <input type="number" class="form-control" name="precio_total" id="precio_total" value="0" readonly>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="company-column">Contactos</label>
                                    {{-- inicio table --}}
                                    <div ng-app="NewRows">
                                        <div ng-controller="Table">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th></th>
                                                    <th>Datos Origen</th>
                                                    <th></th>
                                                    <th scope="3">Cantidad</th>
                                                    <th></th>
                                                    <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="trat" ng-repeat="row in rows">
                                                        <td align="center"><input type="checkbox" ng-model="row.delete"></td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <select  name="destino" class="form-select info-ob" data-type="select" data-msj="Seleccione un distrito" 
                                                                    required>
                                                                    @foreach ($destinos as $des)
                                                                    <option value="{{$des->id}}">{{$des->referencia}}</strong></option>
                                                                    @endforeach
                                                                       </select> 
                                                                </div>

                                                                <?php
                                                                    $datos = "<script>datos</script>";
                                                                    echo $datos;
                                                                    ?>
                                                            </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <div class="col-md-12">
                                                                <input class="price2 form-control" type="number" ng-model="row.cantidad1" 
                                                                name="datos_cantidad1[]"  onKeyUp="Suma()" placeholder="20" value="0" required>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-12">
                                                                <input class="price2 form-control" type="number" ng-model="row.cantidad2" 
                                                                name="datos_cantidad2[]"  onKeyUp="Suma()" placeholder="20" value="0" required>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-12">
                                                                <input class="price2 form-control" type="number" ng-model="row.cantidad3" 
                                                                name="datos_cantidad3[]"  onKeyUp="Suma()" placeholder="20" value="0" required>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="col-md-12">
                                                                <input class="price2 form-control" type="number" ng-model="row.cantidad4" 
                                                                name="datos_cantidad4[]"  onKeyUp="Suma()" placeholder="20" value="0" required>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                                
                                                <button type="button" class="btn btn-success btn-sm mt-12" ng-click="AddRow()">+</button>
                                                <button type="button" class="btn btn-danger btn-sm mt-12" ng-click="RemoveRow()" ng-class="">x</button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- fin de tabla --}}
                                </div>
                            </div>

                        </div>
                </div>
                <div class="card-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="add-receta" type="submit" class="btn btn-danger me-1 waves-effect waves-float waves-light">Agregar</button>
                
                </div>
                </form>
        
        </div>
</div>
@endsection

@section('js')

<script>
     function Suma() {
        var sum = 0;
    $('.price2').each(function() {
        sum += Number($(this).val());
    });
    console.log(sum);
    $('#cantidad').val(sum);

    }


     var app = angular.module("NewRows",[]);
    app.controller("Table",['$scope',function($scope){
      //
      $scope.rows = [
         {
         delete:false,
         names:'',
         last_names:''
         }
       ];
      /**
      * Add table row
      **/
      $scope.AddRow = function(){
        $scope.rows.push({
          delete:false,
          names:'',
          last_names:''
        })
      };
      /**
      * Remove table row
      **/
      $scope.RemoveRow = function(){
        for(var i = $scope.rows.length - 1; i >= 0; i--){
          if($scope.rows[i].delete){
            $scope.rows.splice(i,1);
          }
        }
      };
      /**
      * Send BD
      **/
      $scope.SaveRowsBD = function(){
        angular.forEach($scope.rows,function(value,key){
    console.log(value);
        });
      };
    }]);
</script>
<script>
           $('#cliente').on('change', function(){
                var id = $(this).val();
                // alert(id);
                    $.ajax({
                    url:'{{ route('buscardestino3') }}',
                    type:'GET',
                    data:{'id':id},
                    dataType:'json',
                    success:function (data) {
                        // $('#product_list').html(data);
                        // console.log(data);
                        var datos = data;
                        // $('#destino').html(data.table_data);
                        // alert(data.table_data);
                    }
                })
            });
</script>
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
        var table = $('#clientes').DataTable({
                    dom: '<"border-bottom p-1"<"head-label"><"dt-action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    language: idioma,
                    buttons: [
                    // 'excel'
                        {
                        extend: 'excel',
                        text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [1,2,3, 4, 5, 6,7,8,9,10] }
                        },
                        {
                            extend: 'pdf',
                        text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [1,2,3, 4, 5, 6,7,8,9,10] }
                        },
                        {
                            extend: 'print',
                        text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                        className: 'btn btn-sm btn-info round waves-effect',
                        exportOptions: { columns: [1,2,3, 4, 5, 6,7,8,9,10] }
                        },
                    ],
                    exportOptions: {
                    modifier: {
                    // DataTables core
                    order: 'index', // 'current', 'applied',
                    //'index', 'original'
                    page: 'all', // 'all', 'current'
                    search: 'none' // 'none', 'applied', 'removed'
                    },
                        columns: [1, 2, 3, 4, 5, 6, 7, 8,9,10]
                    }
        });

        } );

  </script>

@endsection

<!-- MENU -->
