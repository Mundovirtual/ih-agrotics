<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="shadow p-3 mb-5 bg-white rounded text-center">PROYECTO : Sistema de registros y evaluación de proyectos InnovaHack</div>
		</div>
</div>
	<table class="table">
  <thead>
		<th scope="col">Nombre</th> 
		<th scope="col">Email</th>
		<th scope="col">Detalles</th>
		<th scope="col">Aceptar</th>
		<th scope="col">Rechazar</th>				
    </tr>
  </thead>
  <tbody>
 
      	<th scope="row">1</th>
		<td>Ian Alejandro</td> 
		<td>ian@gmail.com</td>
			<button class="btn btn-success">Aceptar</button>
		</th>
		<th scope="col">
			<button class="btn btn-danger">Rechazar</button>
		</td>
  </tbody>
</table>
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
            <th scope="col">Aceptar</th>
            <th scope="col">Rechazar</th> 
          </tr>
        </thead>
        <tbody>
           <tr>
              <th scope="row">1</th>
              <td>Ian Alejandro</td> 
              <th>953 562 132 </th>
              <td>ian@gmail.com</td>
              <td>
                   <button type="button" class="btn btn-info fas fa-ellipsis-h" data-toggle="modal" data-target="#DetallesSolicitud" onclick="Detalles()">                     
                  </button>
              </td>
              <td>
                <button class="btn btn-success fa fa-check" onclick="Aceptar()"></button>
              </th>
              <th>
                <button class="btn btn-danger fas fa-trash-alt" onclick="Eliminar()"></button>
              </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-1">
    </div>
  </div>
</div>
 
  

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="DetallesSolicitud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="modulos/solicitudes/solicitudes.js"></script>