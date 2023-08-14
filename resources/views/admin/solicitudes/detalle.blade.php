
@extends('layouts.head')
<!-- MENU -->
@section('content')


<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Enviar</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Solicitud</a>
                        </li>
                    </ol>
                </div>
            </div>
           
            {{-- <button class="btn btn-primary">Volver</button> --}}
        </div>
        <a href="{{route('admin.solicitudes.index')}}" type="button" class="btn btn-icon btn-outline-primary waves-effect mt-2">
            <i data-feather='arrow-left'></i>Volver
        </a>
    </div>
    
        <div class="card mt-2">
                <div class="specific card-body">
                        <div class="">
                            <div class="text-center">
                                <h1 class="mb-1 text-danger"><strong>GONZALES <br> TRANSPORT S.A.C</strong></h1>
                            </div>
                            @foreach ($solicitudes as $doc)
                            @php
                                                    $datos_destinos2 = json_decode($doc->datos_destinos, true);   
                                                    $datos_cantidad2 = json_decode($doc->datos_cantidad, true);   
                                                   $cont = count($datos_destinos2);
                                                    @endphp
                            <div class="divider divider-danger"><div class="divider-text">Solicitud</div></div>
                            <div class="row">
                                <div class="col-xl-4 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-6 fw-bolder mb-1">CODIGO DE SOLICITUD:</dt>
                                        <dd class="col-sm-6 mb-1">PIXINVENT</dd>

                                        <dt class="col-sm-6 fw-bolder mb-1">FECHA:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->fecha}}</dd>
                                        <dt class="col-sm-6 fw-bolder mb-1">FECHA TRANSLADO:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->fecha_traslado}}</dd>
                                        <dt class="col-sm-6 fw-bolder mb-1">HORA:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->hora}}</dd>
                                        <dt class="col-sm-6 fw-bolder mb-1">HORA EN COCHERA:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->hora_cochera}}</dd>
                                    </dl>
                                </div>
                                <div class="col-xl-4 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-6 fw-bolder mb-1">CLIENTE:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->nombre_cli}}</dd>
                                        <dt class="col-sm-6 fw-bolder mb-1">ORIGEN:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->referencia_cli}}</dd>
                                        <dt class="col-sm-6 fw-bolder mb-1">DESTINOS:</dt>
                                        <dd class="col-sm-6 mb-1">
                                            @foreach ($datos_destinos2 as $item)
                                                @foreach ($destinos as $des)
                                                    @if ($des->id==$item)
                                                    {{$des->referencia}} <br>
                                                    @else
                                                    @endif
                                                @endforeach
                                            @endforeach</dd>
                                        <dt class="col-sm-6 fw-bolder mb-1">CANTIDAD TOTAL:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->cantidad}}</dd>
                                    </dl>
                                </div>
                                <div class="col-xl-4 col-12">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-6 fw-bolder mb-1">LAVADO:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->lavado}}</dd>

                                        <dt class="col-sm-6 fw-bolder mb-1">COMPROBANTE:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->comprobante}}</dd>

                                        <dt class="col-sm-6 fw-bolder mb-1">COSTO:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->costo}}</dd>
                                        <dt class="col-sm-6 fw-bolder mb-1">OBSERVACIONES:</dt>
                                        <dd class="col-sm-6 mb-1">{{$doc->observaciones}}</dd>
                                    </dl>
                                </div>
                            </div> 
                                    
                                    <div class="divider divider-danger"><div class="divider-text">Transporte</div></div>
                          
                                    <div class="row">
                                        <div class="col-xl-4 col-12">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-6 fw-bolder mb-1">UNIDAD:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->codigo}}</dd>

                                                <dt class="col-sm-6 fw-bolder mb-1">MARCA:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->fecha}}</dd>
                                                <dt class="col-sm-6 fw-bolder mb-1">PLACA:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->fecha_traslado}}</dd>
                                                <dt class="col-sm-6 fw-bolder mb-1">N° DE INSCRIPCIÓN:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->hora}}</dd>
                                            </dl>
                                        </div>
                                        <div class="col-xl-4 col-12">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-6 fw-bolder mb-1">CONDUCTOR:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->nombre_cli}}</dd>
                                                <dt class="col-sm-6 fw-bolder mb-1">BREVETE:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->referencia_cli}}</dd>
                                                <dt class="col-sm-6 fw-bolder mb-1">DNI:</dt>
                                                <dd class="col-sm-6 mb-1">
                                                    @foreach ($datos_destinos2 as $item)
                                                        @foreach ($destinos as $des)
                                                            @if ($des->id==$item)
                                                            {{$des->referencia}} <br>
                                                            @else
                                                            @endif
                                                        @endforeach
                                                    @endforeach</dd>
                                                <dt class="col-sm-6 fw-bolder mb-1">CELULAR:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->cantidad}}</dd>
                                            </dl>
                                        </div>
                                        <div class="col-xl-4 col-12">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-6 fw-bolder mb-1">AYUDANTE:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->lavado}}</dd>

                                                <dt class="col-sm-6 fw-bolder mb-1">INDICACIONES ESPECIALES:</dt>
                                                <dd class="col-sm-6 mb-1">{{$doc->comprobante}}</dd>
                                            </dl>
                                        </div>
                                    </div>
                           
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm"
                                             style="color: black; font-size: 19px">
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>FECHA</strong>
                                                        </td>
                                                        <td colspan="{{$cont}}"><strong>{{$doc->fecha}}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-warning">
                                                            <strong>HORA EN COCHERA</strong>
                                                        </td>
                                                        <td class="table-warning" colspan="{{$cont}}"><strong>{{$doc->hora}}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>HORA EN ORIGEN</strong>
                                                        </td>
                                                        <td colspan="{{$cont}}"><strong>{{$doc->hora}}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>GRANJA</strong>
                                                        </td>
                                                        <td colspan="{{$cont}}"><strong>{{$doc->nombre_cli}}</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>ORIGEN</strong>
                                                        </td>
                                                        <td class="table-warning" colspan="{{$cont}}">
                                                            <strong>{{$doc->referencia_cli}}</strong></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>LUGAR DESTINOS</strong>
                                                        </td>
                                                                        @foreach ($datos_destinos2 as $item)
                                                                            @foreach ($destinos as $des)
                                                                                @if ($des->id==$item)
                                                                                  <td class="table-danger">
                                                                                   <strong>{{$des->referencia}}</strong></td>
                                                                                @else
                                                                                    
                                                                                @endif
                                                                            @endforeach
                                                                            
                                                                            @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>CANTIDADES</strong>
                                                        </td>
                                                        @for($i=0; $i<count($datos_destinos2); $i++)
                                                        {{-- {{$i}}  --}}
                                                        <td class="table-warning" >
                                                            <strong>
                                                                @foreach ($datos_cantidad2 as $key => $valor)
                                                                    @if ($valor[$i]==0)
                                                                    @else
                                                                        @if ($key!== 'sub')
                                                                            @if ($key=='cant1')
                                                                            {{$valor[$i]}}
                                                                            @else
                                                                            + {{$valor[$i]}}
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                            </strong>
                                                        </td> 
                                                      @endfor   
                                                        </tr>  
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>SUBTOTATES</strong>
                                                        </td>
                                                        @for($i=0; $i<count($datos_destinos2); $i++)
                                                        {{-- {{$i}}  --}}
                                                        <td class="table-secondary">
                                                            <strong>
                                                                @foreach ($datos_cantidad2 as $key => $valor)
                                                                    @if ($valor[$i]==0)
                                                                    @else
                                                                        @if ($key=='sub')
                                                                         {{$valor[$i]}}
                                                                        @else
                                                                        @endif
                                                                    @endif
                                                                @endforeach
                                                            </strong>
                                                        </td> 
                                                      @endfor  
                                                    </tr>
                                                    <tr>
                                                        <td class="table-light">
                                                            <strong>TOTAL</strong>
                                                        </td>
                                                        <td class="table-success" colspan="{{$cont}}">
                                                          <strong>  {{$doc->cantidad}}</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm"
                                            style="color: black; font-size: 19px">
                                                <tbody>
                                                @foreach ($planificaciones as $pla)
                                                     @if ($pla->id ==$doc->id_plani)
                                                        @foreach ($vehiculos as $uni)
                                                            @if ($uni->id==$pla->id_unidad)
                                                                <tr>
                                                                    <td class="table-light">
                                                                        <strong>UNIDAD</strong>
                                                                    </td>
                                                                    <td>
                                                                        <strong> {{$uni->unidad}}</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="table-light">
                                                                        <strong>MARCA</strong>
                                                                    </td>
                                                                    <td>
                                                                        <strong> {{$uni->marca}}</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="table-light">
                                                                        <strong>PLACA</strong>
                                                                    </td>
                                                                    <td>
                                                                        <strong> {{$uni->placa}}</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="table-light">
                                                                        <strong>N° DE INSCRIPCIÓN</strong>
                                                                    </td>
                                                                    <td>
                                                                        <strong> {{$uni->seria_chasis}}</strong>
                                                                    </td>
                                                                </tr>
                                                            @else
                                                            @endif
                                                        @endforeach
                                                        @foreach ($choferes as $ch)
                                                            @if ($ch->id==$pla->id_chofer)
                                                            <tr>
                                                                <td class="table-light">
                                                                    <strong>CONDUCTOR</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>{{$ch->nombres_cho}} {{$ch->apellidos_cho}}</strong> 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-light">
                                                                    <strong>BREVETE</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>{{$ch->brevete_cho}}</strong> 
                                                                </td>
                                                            </tr>
                                                            @else
                                                            @endif
                                                        @endforeach
                                                        @foreach ($ayudantes as $ayu)
                                                            @if ($ayu->id==$pla->choferes)
                                                            <tr>
                                                                <td class="table-light">
                                                                    <strong>AYUDANTE</strong>
                                                                </td>
                                                                <td>
                                                                    <strong> {{$ayu->nombres_cho}} {{$ayu->apellidos_cho}}</strong> 
                                                                </td>
                                                            </tr>
                                                            @else
                                                            @endif
                                                        @endforeach
                                                        <tr>
                                                            <td class="table-light">
                                                                <strong class="text-danger">Indicaciones Especiales</strong>
                                                            </td>
                                                            <td>
                                                                <strong> {{$pla->observaciones}}</strong> 
                                                            </td>
                                                        </tr>
                                                    @else
                                                    @endif
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                </div>

                <div class="card-footer">
                        <button id="btnImg" class="btn btn-danger me-1 waves-effect
                         waves-float waves-light" onclick="f()">Descargar imagen</button>
                </div>
                {{-- diseño del Detalle --}}

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                                <ul class="timeline">
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>12 Invoices have been paid</h6>
                                                <span class="timeline-event-time">12 min ago</span>
                                            </div>
                                            <p>Invoices have been paid to the company.</p>
                                            <div class="d-flex flex-row align-items-center">
                                                <img class="me-1" src="../../../app-assets/images/icons/file-icons/pdf.png" alt="invoice" height="23">
                                                <span>invoice.pdf</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-secondary timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Client Meeting</h6>
                                                <span class="timeline-event-time">45 min ago</span>
                                            </div>
                                            <p>Project meeting with john @10:15am.</p>
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar" height="38" width="38">
                                                </div>
                                                <div class="ms-50">
                                                    <h6 class="mb-0">John Doe (Client)</h6>
                                                    <span>CEO of Infibeam</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Financial Report</h6>
                                                <span class="timeline-event-time">2 hours ago</span>
                                            </div>
                                            <p class="mb-50">Click the button below to read financial reports</p>
                                            <button class="btn btn-outline-primary btn-sm waves-effect" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                                                Show Report
                                            </button>
                                            <div class="collapse" id="collapseExample">
                                                <ul class="list-group list-group-flush mt-1">
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span>Last Year's Profit : <span class="fw-bold">$20000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> This Year's Profit : <span class="fw-bold">$25000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> Last Year's Commission : <span class="fw-bold">$5000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> This Year's Commission : <span class="fw-bold">$7000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> This Year's Total Balance : <span class="fw-bold">$70000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6 class="mb-50">Interview Schedule</h6>
                                                <span class="timeline-event-time">03:00 PM</span>
                                            </div>
                                            <p>Have to interview Katy Turner for the developer job.</p>
                                            <hr>
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="avatar me-1">
                                                        <img src="../../../app-assets/images/avatars/1-small.png" alt="Avatar" height="32" width="32">
                                                    </div>
                                                    <span>
                                                        <p class="mb-0">Katy Turner</p>
                                                        <span class="text-muted">Javascript Developer</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex align-items-center cursor-pointer mt-sm-0 mt-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Online Store</h6>
                                                <span class="timeline-event-time">03:00PM</span>
                                            </div>
                                            <p>
                                                Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                                                version of it. The must be compatible with any CMS.
                                            </p>
                                            <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column">
                                                <div>
                                                    <p class="text-muted mb-50">Developers</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-primary avatar-sm me-50">
                                                            <span class="avatar-content">A</span>
                                                        </div>
                                                        <div class="avatar bg-light-success avatar-sm me-50">
                                                            <span class="avatar-content">B</span>
                                                        </div>
                                                        <div class="avatar bg-light-danger avatar-sm">
                                                            <span class="avatar-content">C</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-sm-0 mt-1">
                                                    <p class="text-muted mb-50">Deadline</p>
                                                    <p class="mb-0">20 Dec 2077</p>
                                                </div>
                                                <div class="mt-sm-0 mt-1">
                                                    <p class="text-muted mb-50">Budget</p>
                                                    <p class="mb-0">$50000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between align-items-center mb-50">
                                                <h6>Designing UI</h6>
                                                <div>
                                                    <span class="badge rounded-pill badge-light-primary">Design</span>
                                                </div>
                                            </div>
                                            <p>
                                                Our main goal is to design a new mobile application for our client. The customer wants a clean &amp; flat
                                                design.
                                            </p>
                                            <div>
                                                <span class="text-muted">Participants</span>
                                                <div class="avatar-group mt-50">
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Vinnie Mostowy">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                                    </div>
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Elicia Rieske">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                                    </div>
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Julee Rossignol">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" height="30" width="30">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Icons</h4>
                            </div>
                            <div class="card-body">
                                <ul class="timeline">
                                    <li class="timeline-item">
                                        <span class="timeline-point">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                        </span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>12 Invoices have been paid</h6>
                                                <span class="timeline-event-time">12 min ago</span>
                                            </div>
                                            <p>Invoices have been paid to the company.</p>
                                            <div class="d-flex flex-row align-items-center">
                                                <img class="me-1" src="../../../app-assets/images/icons/file-icons/pdf.png" alt="invoice" height="23">
                                                <span>invoice.pdf</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Client Meeting</h6>
                                                <span class="timeline-event-time">45 min ago</span>
                                            </div>
                                            <p>Project meeting with john @10:15am.</p>
                                            <div class="d-flex flex-row align-items-center">
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar" height="38" width="38">
                                                </div>
                                                <div class="ms-50">
                                                    <h6 class="mb-0">John Doe (Client)</h6>
                                                    <span>CEO of Infibeam</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Financial Report</h6>
                                                <span class="timeline-event-time">2 hours ago</span>
                                            </div>
                                            <p class="mb-50">Click the button below to read financial reports</p>
                                            <button class="btn btn-outline-primary btn-sm waves-effect" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample2">
                                                Show Report
                                            </button>
                                            <div class="collapse" id="collapseExample2">
                                                <ul class="list-group list-group-flush mt-1">
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span>Last Year's Profit : <span class="fw-bold">$20000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> This Year's Profit : <span class="fw-bold">$25000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> Last Year's Commission : <span class="fw-bold">$5000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> This Year's Commission : <span class="fw-bold">$7000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                                        <span> This Year's Total Balance : <span class="fw-bold">$70000</span></span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 cursor-pointer font-medium-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        </span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6 class="mb-50">Interview Schedule</h6>
                                                <span class="timeline-event-time">03:00 PM</span>
                                            </div>
                                            <p>Have to interview Katy Turner for the developer job.</p>
                                            <hr>
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <div class="d-flex flex-row align-items-center">
                                                    <div class="avatar me-1">
                                                        <img src="../../../app-assets/images/avatars/1-small.png" alt="Avatar" height="32" width="32">
                                                    </div>
                                                    <span>
                                                        <p class="mb-0">Katy Turner</p>
                                                        <span class="text-muted">Javascript Developer</span>
                                                    </span>
                                                </div>
                                                <div class="d-flex align-items-center cursor-pointer mt-sm-0 mt-50">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square me-1"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        </span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                                <h6>Online Store</h6>
                                                <span class="timeline-event-time">03:00PM</span>
                                            </div>
                                            <p>
                                                Develop an online store of electronic devices for the provided layout, as well as develop a mobile
                                                version of it. The must be compatible with any CMS.
                                            </p>
                                            <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column">
                                                <div>
                                                    <p class="text-muted mb-50">Developers</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-primary avatar-sm me-50">
                                                            <span class="avatar-content">A</span>
                                                        </div>
                                                        <div class="avatar bg-light-success avatar-sm me-50">
                                                            <span class="avatar-content">B</span>
                                                        </div>
                                                        <div class="avatar bg-light-danger avatar-sm">
                                                            <span class="avatar-content">C</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-sm-0 mt-1">
                                                    <p class="text-muted mb-50">Deadline</p>
                                                    <p class="mb-0">20 Dec 2077</p>
                                                </div>
                                                <div class="mt-sm-0 mt-1">
                                                    <p class="text-muted mb-50">Budget</p>
                                                    <p class="mb-0">$50000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <span class="timeline-point timeline-point-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                                        </span>
                                        <div class="timeline-event">
                                            <div class="d-flex justify-content-between align-items-center mb-50">
                                                <h6>Designing UI</h6>
                                                <div>
                                                    <span class="badge rounded-pill badge-light-primary">Design</span>
                                                </div>
                                            </div>
                                            <p>
                                                Our main goal is to design a new mobile application for our client. The customer wants a clean &amp; flat
                                                design.
                                            </p>
                                            <div>
                                                <span class="text-muted">Participants</span>
                                                <div class="avatar-group mt-50">
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Vinnie Mostowy">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                                    </div>
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Elicia Rieske">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                                    </div>
                                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Julee Rossignol">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Avatar" height="30" width="30">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>
@endsection

@section('js')

  <script>
    function f() {
    html2canvas(document.querySelector('.specific'), {
    onrendered: function(canvas) {
      // document.body.appendChild(canvas);
      return Canvas2Image.saveAsPNG(canvas);
    }
  });
}

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
