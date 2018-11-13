  <?php 
include_once("../login/securityLider.php");  
  ?>
 <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="shadow p-3 mb-5 bg-white rounded text-center"><h2>Integrantes</h2></div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <table class="table" id="MostrarSolicitudes">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th> 
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Detalles</th> 
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
 
  
  

<!-- Modal -->
<div class="modal fade" id="DetallesSolicitud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información Hacker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
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
        <div class="form-group">
              <label for="Habilidades">Habilidades</label>
              <textarea class="form-control" id="Habilidadeshacker" name="Habilidadeshacker" rows="2" disabled=""></textarea>
        </div>
        <div class="form-group">
              <label for="Hobbies">Hobbies</label>
              <textarea class="form-control" id="Hobbieshacker" name="Hobbieshacker" rows="2" disabled=""></textarea>
        </div>
        <div class="form-row">
          <div class="col-md-5">
            <label for="FechaNacimiento">Fecha de nacimiento</label>
            <input type="text" class="form-control" id="FechaNacimientohacker" name="FechaNacimientohacker" disabled="">
          </div>                   
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
      </div>
    </div>
  </div>
</div>


 <div class="modal fade" id="ConfirmarAceptar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Editar" align="center"><i class="fas fa fa-check"></i>Agregar</h5>        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <div class="modal-body">            
    <h1>Estás a punto de agregar al Hacker al proyecto</h2>

    Quiere proceder?
          
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success" onclick="AgregarHack()">Continuar</button>
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
    <h1>Estás a punto de eliminar al Hacker del proyecto</h2>

    Quiere proceder?
          
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" onclick="EliminarHack()">Continuar</button>
        </div>
      </div>
    </div>
  </div> 

<script src="modulos/Equipo/Integrantes.js"></script>