<?php 
include_once("../login/security.php");   
   ?>
      <!-- Solicitudes Acptadas-->
<div class="row justify-content-center">
    <div class="col-md-10">
      <div class="shadow p-3 mb-5 bg-white rounded text-center"><h2>Solicitudes realizadas</h2></div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <table class="table" id="MostrarSolicitudesAceptadas">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Lider</th>
            <th scope="col">Nombre Equipo</th> 
            <th scope="col">Proyecto</th> 
            <th scope="col">Vertical</th> 
            <th scope="col">+</th> 
            <th scope="col">Eliminar</th> 
          </tr>
        </thead>
        <tbody>
           
        </tbody>
      </table>
    </div>
    <div class="col-md-1">
    </div>
  </div>
</div>
 
  

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="DetallesLider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label><h2>Proyecto</h2></label>
        <div class="form-row">
          <div class="col-md-12">
            <label >Descripción</label>
            <textarea type="text" class="form-control" id="DescProyecto" name="DescProyecto" disabled="" rows="1"></textarea>
          </div>
        </div>
        <label><h2>Vertical</h2></label>
        <div class="form-row">
          <div class="col-md-12">
            <label >Descripción</label>
            <textarea type="text" class="form-control" id="VerticalDesc" name="VerticalDesc" disabled="" rows="1"></textarea>
          </div>
        </div>
        <label><h2>Lider</h2></label>
        <div class="form-row">
          <div class="col-md-12">
            <label >Telefono</label>
            <input type="text" class="form-control" id="TelefonoHacker" name="TelefonoHacker" disabled="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12">
            <label>Correo</label>
            <input type="text" class="form-control" id="CorreoHacker" name="CorreoHacker"  disabled="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12">
            <label for="Institucion">Institución</label>
            <input type="text" class="form-control" id="Institucionhacker" name="Institucionhacker" disabled="">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12">
            <label for="Carrera">Carrera</label>
            <input type="text" class="form-control" id="Carrerahacker" name="Carrerahacker"  disabled="">
          </div>
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
      </div>
    </div>
  </div>
</div>
</div>

  <div class="modal fade" id="ConfirmarEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Editar" align="center"><i class="fas fa-trash-alt"></i>Eliminar</h5>        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="modal-body">            
    <h1>Estás a punto de eliminar tu solicitud</h2>

    Quiere proceder?
          
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" onclick="Eliminar()">Continuar</button>
        </div>
      </div>
    </div>
  </div> 
 
 <script src="modulos/MisProyectos/EnEspera.js"></script>