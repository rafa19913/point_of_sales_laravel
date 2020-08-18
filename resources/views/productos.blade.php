


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
                        Agregar nuevo producto
                                        </button>
           


                                        <br><br>

                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nombres</th>
                                                <th class="text-center">Precios</th>
                                                <th class="text-center">Cantidad en stock</th>
                                                <th class="text-center">Categorias</th>
                                            <th width="280px" class="text-center">Acción</th>
                                            </tr>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td> ${{ $product->price }}</td>
                                                <td>{{ $product->quantity_inventory }}</td>
                                                <td>
                                                
                                                    @foreach ($categories as $categorie)
                                                        @if($product->id_category_product == $categorie->id)
                                                            {{$categorie->name}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>

                                                <a href="javascript:;" class="edit-modal mr-2 btn-icon btn-icon-only btn btn-outline-warning" data-id="{{$product->id}}" onClick="editData({{$product["id"]}}, '{{$product["first_name"]}}', '{{$product["last_name"]}}', '{{$product["email"]}}', '{{$product["phone_number"]}}')" data-first_name="{{$product->first_name}}" data-last_name="{{$product->last_name}}" data-email="{{$product->email}}" data-phone_number="{{$product->phone_number}}">
                                                    <i class="pe-7s-pen btn-icon-wrapper"> </i>
                                                </a>

                                                <a href="javascript:;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="modal" onclick="deleteData({{$product->id}})" data-target="#DeleteModal" > <i class="pe-7s-trash btn-icon-wrapper"> </i> </a>


                                  
                                  
                                                

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
        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form action="{{ route('products.store') }}" method="POST">

@csrf
 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

        <strong>Nombre:</strong>
            <input type="text" name="name" class="form-control" placeholder="Nombre">
        
        
        <strong>Precio:</strong>
            <input type="text" name="price" class="form-control" placeholder="Precio">
        
            <strong>Cantidad en stock:</strong>
            <input type="number" name="quantity_inventory" class="form-control" placeholder="Cantidad en stock">

            
        <strong>Categoria:</strong>

        <select class="form-control" name="id_category_product" id="id_category_product">
        @foreach ($categories as $categorie)
            <option value={{$categorie->id}}>{{$categorie->name}}</option>
        @endforeach  
        </select>

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






<!-- Modal delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="" id="deleteForm" method="post">
            <div >
              <div >
                <button type=button data-dismiss="modal">&times;</button>
              
              </div>
              <div >
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <p >Are You Sure Want To Delete ?</p>
              </div>
              <div >
                <button type=button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type=submit class="btn btn-primary" name="" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
               
              </div>
            </div>



   </form>



      </div>
      <div class="modal-footer">
      
 
      </div>
    </div>
  </div>
</div>



<script>


function deleteData(id){
    var id = id;
    var url = '{{ route("products.destroy", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url);
}

function formSubmit(){
    $("#deleteForm").submit();
}


</script>



    <!-- Bootstrap and necessary plugins -->
    
    <script src="resources/js/app.js"></script>
    <script src="js/app.js"></script>
    <script src="js/all.js"></script>

<script type="text/javascript" src="./assets/scripts/main.js"></script>

