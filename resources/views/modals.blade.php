
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
      
      

        <form id="editForm" class="form-horizontal" role="form">
            
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                

            <div class="form-group">
              <label class="control-label col-sm-2" for="id">ID :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="id" disabled>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="first_name">Nombres:</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" name="first_name" id="first_name">
              </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="description">Apellidos:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" name="last_name" id="last_name">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="description">Email:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="email" id="email">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="description">Telefono:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" name="phone_number" id="phone_number">
            </div>
          </div>

          <button type="button" class="btn actionBtn" data-dismiss="modal">Aceptar</button>

          </form>

            <div class="deleteContent">
            Are you Sure you want to delete <span class="title"></span> ?
            <span class="hidden id"></span>
          </div>

        

          <div class="modal-footer">
          
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
          
          </div>
        
        
        </div>
      </div>
    </div>
  </div>


<!-- Modal Add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form action="{{ route('customers.store') }}" method="POST">

@csrf
 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

        <strong>Nombres:</strong>
            <input type="text" name="first_name" class="form-control" placeholder="Nombres">
        
        
        <strong>Apellidos:</strong>
            <input type="text" name="last_name" class="form-control" placeholder="Apellidos">
        
            <strong>Email:</strong>
            <input type="email" name="email" class="form-control" placeholder="Email">

            
        <strong>Telefono:</strong>
            <input type="number" name="phone_number" class="form-control" placeholder="Num. Telefono">
        

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
        <h5 class="modal-title" id="exampleModalLabel">Eliminar cliente</h5>
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





    <!-- Bootstrap and necessary plugins -->
    
    <script src="resources/js/app.js"></script>
    <script src="js/app.js"></script>
    <script src="js/all.js"></script>
