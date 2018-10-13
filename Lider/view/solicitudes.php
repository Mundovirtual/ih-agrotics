<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="shadow p-3 mb-5 bg-white rounded text-center">PROYECTO : Sistema de registros y evaluación de proyectos InnovaHack</div>
		</div>
</div>

<div class="row">
	<table class="table">
  <thead>
     <tr>
		<th scope="col">#</th>
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
		<td scope="col">
				 
		</td>
		<td scope="col">
			<button class="btn btn-success">Aceptar</button>
		</th>
		<th scope="col">
			<button class="btn btn-danger">Rechazar</button>
		</td>
 
  </tbody>
</table>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>	


  
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
				  <label for="password">password</label>
				  <input type="text" class="form-control" id="PasswordJuez" name="PasswordJuez"  disabled="">
				</div> 
			</div>
			<div class="form-row">
				<div class="col-md-12">
				  <label for="Institucion">Institución</label>
				  <input type="text" class="form-control" id="InstitucionJuez" name="InstitucionJuez" disabled="">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12">
				  <label for="Carrera">Carrera</label>
				  <input type="text" class="form-control" id="CarreraJuez" name="CarreraJuez"  disabled="">
				</div>
			</div>
			<div class="form-group">
				    <label for="Habilidades">Habilidades</label>
				    <textarea class="form-control" id="HabilidadesJuez" name="HabilidadesJuez" rows="2" disabled=""></textarea>
			</div>
			<div class="form-group">
				    <label for="Hobbies">Hobbies</label>
				    <textarea class="form-control" id="HobbiesJuez" name="HobbiesJuez" rows="2" disabled=""></textarea>
			</div>
			<div class="form-row">
				<div class="col-md-5">
				  <label for="FechaNacimiento">Fecha de nacimiento</label>
				  <input type="text" class="form-control" id="FechaNacimientoJuez" name="FechaNacimientoJuez" disabled="">
				</div>			 				     
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         
      </div>
    </div>
  </div>
</div>
		
 