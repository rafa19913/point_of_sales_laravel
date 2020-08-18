


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
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                      
                                    <button class="btn-wide btn btn-success" data-toggle="modal" data-target="#addModal" >
                        <i class="pe-7s-add-user btn-icon-wrapper" > </i>    
                        Agregar nueva categoria
                                        </button>
           


                                        <br><br>

                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nombres</th>
                                            <th width="280px" class="text-center">Acción</th>
                                            </tr>
                                            @foreach ($categories as $categorie)
                                            <tr>
                                                <td>{{ $categorie->id }}</td>
                                                <td>{{ $categorie->name }}</td>
                                          
                                          
                                                <td>

                                                <a href="javascript:;" class="edit-modal mr-2 btn-icon btn-icon-only btn btn-outline-warning" data-id="{{$categorie->id}}" onClick="editData({{$categorie["id"]}}, '{{$categorie["name"]}}')" data-first_name="{{$categorie->first_name}}" data-last_name="{{$categorie->last_name}}" >
                                                    <i class="pe-7s-pen btn-icon-wrapper"> </i>
                                                </a>

                                                <a href="javascript:;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="modal" onclick="deleteData({{$categorie->id}})" data-target="#DeleteModal" > <i class="pe-7s-trash btn-icon-wrapper"> </i> </a>


                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>

                
                            </div>
                       </div>
                </div>
                
            </div>

        </main>


</div>




<!-- Modal Add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form action="{{ route('categories.store') }}" method="POST">

@csrf
 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

        <strong>Nombre:</strong>
            <input type="text" name="name" class="form-control" placeholder="Nombre">
        
            <button type="submit" class="btn btn-primary">Aceptar</button>
            
        </div>

    </div>


</div>



</form>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>



<script>


function deleteData(id){
    alert(id);
    var id = id;
    //var url = '{{ route("categories.destroy", ":id") }}';
    //url = url.replace(':id', id);
    //$("#deleteForm").attr('action', url);
  
   /* $.ajax({
    type: 'post',
    url: '{{ route("categories.destroy", ":id") }}'',
    data: {
      '_token': $('input[name=_token]').val(),
      'id': $('.id').text()
    },
   
  });
    */
}

function formSubmit(){
    $("#deleteForm").submit();
}


</script>



<script type="text/javascript" src="./assets/scripts/main.js"></script>

