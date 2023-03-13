<!-- BEGIN: Body-->
@extends('layouts.header-link')

@section('menu')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            
            <ul class="nav navbar-nav align-items-center ms-auto">
                
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{Auth::user()->name}}</span>
                       @if (Auth::user()->hasRole('admin'))
                       <span class="user-status">Administrador</span>
                       @elseif (Auth::user()->hasRole('operario'))
                       <span class="user-status">Operario</span>
                       @elseif (Auth::user()->hasRole('gerente'))
                       <span class="user-status">Gerente</span>
                       @endif
                    </div>
                        {{-- <span class="avatar">
                            <img class="round" 
                            src="{{asset('app-assets/images/portrait/small/avatar-s-11.jpg')}}" 
                            alt="avatar" height="40" width="40"><span class="avatar-status-online"></span>
                        </span> --}}
                        @if (Auth::user()->hasRole('admin'))
                        <div class="avatar bg-light-success avatar-lg">
                            <span class="avatar-content">AD</span>
                        </div>
                        @elseif (Auth::user()->hasRole('operario'))
                        <div class="avatar bg-light-warning avatar-lg">
                            <span class="avatar-content">OP</span>
                        </div>
                        @elseif (Auth::user()->hasRole('gerente'))
                        <div class="avatar bg-light-info avatar-lg">
                            <span class="avatar-content">GR</span>
                        </div>
                        @endif
                       
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                                <a class="dropdown-item" href="{{route('logout')}}">
                                    <i class="me-50" data-feather="power"></i> Salir</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <button type="button" class="btn btn-outline-danger waves-effect">GONZALES TRANSPORT <br> S.A.C</button>
                <li class="nav-item me-auto">
                    
                        <h2 class="brand-text"></h2>
                   </li>
                   <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Estadisticas</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{route('admin.estadisticas')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{route('admin.usuarios')}}">
                            <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Usuarios</span></a>
                        </li>
                        {{-- <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a> --}}
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.index')}}"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Email">Solicitudes</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.operarios')}}"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Registros <br> Operarios</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.vehiculos')}}"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Registros <br> Vehiculares</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.choferes')}}"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Gestión <br> de Guías</span></a>
                    
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html">
                    <i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Choferes <br> y Ayudantes</span></a>
                    
                </li>
                
                
             
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
           @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    @endsection