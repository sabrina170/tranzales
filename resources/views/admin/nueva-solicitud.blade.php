@extends('layouts.head')
<!-- MENU -->
@section('content')
            
            <div class="content-body">
                <!-- Bootstrap Select start -->
               
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">SOLICITUD Y DETALLE DEL CLIENTE:</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="basicInput">COD. SOLICITUD:</label>
                                                <input type="text" class="form-control" id="basicInput" value="UID{{ date("mdHis");}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helpInputTop">FECHA SOLITUD:</label>
                                                <input type="date" class="form-control"  id="helpInputTop">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="disabledInput">CANT. TOTAL</label>
                                                <input type="number" class="form-control" id="disabledInput">
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helperText">CLIENTE (GRANJA):</label>
                                                <select class="select2 form-select" id="select2-basic">
                                                    {{-- @if (isset($clientes)) --}}
                                                        @foreach ($clientes as $doc)
                                                        <option value="{{$doc->id}}"> {{$doc->nombre}}-{{$doc->distrito}}-{{$doc->provincia}}-{{$doc->departamento}}</option>
                                                       
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1 mb-md-0">
                                            <label class="form-label" for="disabledInput">FECHA DE TRASLADO:</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="helperText">ORIGEN:</label>
                                                <select class="select2 form-select" id="select2-basic2">
                                                    @foreach ($destinos as $doc)
                                                    <option value="{{$doc->id}}"> {{$doc->razon_social}}</option>
                                                   
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12 mb-1 mb-md-0">
                                            <label class="form-label" for="disabledInput">HORA EN GRANJA:</label>
                                            <input type="time" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-12">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Bootstrap Select end -->
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                 {{-- inicio table --}}
                        <div ng-app="NewRows">
                            <div ng-controller="Table">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th></th>
                                          <th>Datos Origen</th>
                                          {{-- <th>Datos Guia</th> --}}

                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr ng-repeat="row in rows">
                                          <td align="center"><input type="checkbox" ng-model="row.delete"></td>
                                          <td>
                                            <select class="form-select" id="select2-basic3">
                                                @foreach ($destinos as $doc2)
                                                <option value="{{$doc2->id}}"> {{$doc2->razon_social}}</option>
                                                @endforeach
                                            </select>
                                          </td>
                                        <td>
                                            
                                            <div class="row">
                                                <div class="col-6">
                                                    Destinos
                                                    <select class="select2 form-select" id="select2-basic2">
                                                        @foreach ($destinos as $doc2)
                                                        <option value="{{$doc2->id}}"> {{$doc2->razon_social}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    Cantidad
                                                     <input class="form-control" type="number" ng-model="row.cantidad" 
                                                     name="datos_cantidad[]" placeholder="5 cerditos">
                                                 </div>
                                            </div>
                                        </td>
                                        
                                        </tr>
                                      </tbody>
                                    </table>
                                    
                                    <button type="button" class="btn btn-success mt-12" ng-click="AddRow()">Agregar</button>
                                    <button type="button" class="btn btn-danger mt-12" ng-click="RemoveRow()" ng-class="">Eliminar Filas</button>
                                </div>
                            </div>
                        </div>
                        {{-- fin de tabla --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
@section('js')
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js" type="text/javascript"></script>
<script>

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
    
        });
      };
    }]);
        </script>
    