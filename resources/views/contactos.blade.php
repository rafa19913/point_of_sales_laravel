
@extends('modals')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet">
<script src="jquery-3.5.1.min.js"></script>
</head>

<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
                
                <div class="app-header header-shadow">
            
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="app-header__content">
                        <div class="app-header-left">
                            <div class="search-wrapper">
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Type to search">
                                    <button class="search-icon"><span></span></button>
                                </div>
                                <button class="close"></button>
                            </div>
                        </div>
                        
                        <div class="app-header-right">
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <li class="nav-item dropdown">
                                        <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Cerrar sesión') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                        <div class="widget-content-right header-user-info ml-3">
                                            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>   
                
                
                <div class="app-main">
                        <div class="app-sidebar sidebar-shadow">
                            <div class="app-header__logo">
                                <div class="logo-src"></div>
                                <div class="header__pane ml-auto">
                                    <div>
                                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                            <span class="hamburger-box">
                                                <span class="hamburger-inner"></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="app-header__mobile-menu">
                                <div>
                                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="app-header__menu">
                                <span>
                                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                        <span class="btn-icon-wrapper">
                                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                                        </span>
                                    </button>
                                </span>
                            </div>    
                            
                            <div class="scrollbar-sidebar">
                                <div class="app-sidebar__inner">
                                    <ul class="vertical-nav-menu">
                                        <li class="app-sidebar__heading">Menu</li>
                                        
                                        <li>

                                        <a href="home">
                                                <i class="metismenu-icon pe-7s-home"></i>
                                                Home
                                            </a>

                                            <a href="contactos">
                                                <i class="metismenu-icon pe-7s-users"></i>
                                                Contactos
                                            </a>

                                            <a href="productos">
                                                <i class="metismenu-icon pe-7s-box2"></i>
                                                Productos
                                            </a> 
                                            
                                            <a href="categorias">
                                                <i class="metismenu-icon pe-7s-drawer"></i>
                                                categorias
                                            </a>

                                            <a href="ventas">
                                                <i class="metismenu-icon pe-7s-cash"></i>
                                                Ventas
                                            </a> 
                                            
                                            <a href="compras">
                                                <i class="metismenu-icon pe-7s-car"></i>
                                                Compras
                                            </a>
                                                
                                            <a href="reportes">
                                                <i class="metismenu-icon pe-7s-note2"></i>
                                                Reportes
                                            </a>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                        
                        <div class="app-main__outer">

                       

                        


                            <div class="app-main__inner">
                                <div class="app-page-title">
                                    <div class="page-title-wrapper">
                                      
                                    <div class="page-title-actions">
                                        
                                        
                                      
                                    <button class="btn-wide btn btn-success" data-toggle="modal" data-target="#addModal" >
                        <i class="pe-7s-add-user btn-icon-wrapper" > </i>    
                        Agregar nuevo cliente
                                        </button>
           


                                        <br><br>

                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nombres</th>
                                                <th class="text-center">Apellidos</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Teléfono</th>

                                            <th width="280px" class="text-center">Acción</th>
                                            </tr>
                                            @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->id }}</td>
                                                <td>{{ $customer->first_name }}</td>
                                                <td>{{ $customer->last_name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->phone_number }}</td>
                                           
                                           
                                                <td>

                                                <a href="javascript:;" class="edit-modal mr-2 btn-icon btn-icon-only btn btn-outline-warning" data-id="{{$customer->id}}" onClick="editData({{$customer["id"]}}, '{{$customer["first_name"]}}', '{{$customer["last_name"]}}', '{{$customer["email"]}}', '{{$customer["phone_number"]}}')" data-first_name="{{$customer->first_name}}" data-last_name="{{$customer->last_name}}" data-email="{{$customer->email}}" data-phone_number="{{$customer->phone_number}}">
                                                    <i class="pe-7s-pen btn-icon-wrapper"> </i>
                                                </a>

                                                <a href="javascript:;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="modal" onclick="deleteData({{$customer->id}})" data-target="#DeleteModal" > <i class="pe-7s-trash btn-icon-wrapper"> </i> </a>


                                  
                                  
                                                

                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>


                                        </div>    
                                    </div>
                                </div>            
                                
                    
                
                
                            </div>
                            <div class="app-wrapper-footer">
                                <div class="app-footer">
                                    <div class="app-footer__inner">
                                    
                                    
                                    </div>
                                </div>
                            </div>



                        </div>


                </div>
                
            </div>

        </main>


</div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script type="text/javascript">




    // Edit Data (Modal and function edit data)
    $(document).on('click', '.edit-modal', function() {
    $('#footer_action_button').text(" Aceptar");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#id').val($(this).data('id'));
    $('#first_name').val($(this).data('first_name'));
    $('#last_name').val($(this).data('last_name'));
    $('#email').val($(this).data('email'));
    $('#phone_number').val($(this).data('phone_number'));
    $('#myModal').modal('show');
});


//delete function
$(document).on('click', '.delete-modal', function() {
  $('#footer_action_button').text(" Delete");
  $('#footer_action_button').removeClass('glyphicon-check');
  $('#footer_action_button').addClass('glyphicon-trash');
  $('.actionBtn').removeClass('btn-success');
  $('.actionBtn').addClass('btn-danger');
  $('.actionBtn').addClass('delete');
  $('.modal-title').text('');
  $('.id').text($(this).data('id'));
  $('.deleteContent').show();
  $('.form-horizontal').hide();
  $('.title').html($(this).data('title'));
  $('#myModal').modal('show');
});


function editData(id,first_name,last_name,email,phone_number){
    var id = id;
    var first_name = first_name;
    var last_name = last_name;
    var email = email;
    var phone_number = phone_number;

    var url = "asdg";
    //var url = '{{ route("customers.update", ":id",":first_name",":last_name",":email",":phone_number") }}';
    //url = url.replace(':id', id, ':first_name', first_name, ':last_name', last_name, ':email', email, ':phone_number', phone_number);
    $("#editForm").attr('action', url);

}


function editarCliente(){
    $("#editForm").submit();
}



function deleteData(id){
    var id = id;
    var url = '{{ route("customers.destroy", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url);
}

function formSubmit(){
    $("#deleteForm").submit();
}





</script>


<script type="text/javascript" src="./assets/scripts/main.js"></script>
