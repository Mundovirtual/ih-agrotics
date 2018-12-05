<?php 
include_once("../login/securityHacker.php");  
?>
 <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="shadow p-3 mb-5 bg-white rounded text-center"><h2>Catalogo de proyectos</h2></div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
      <table class="table" id="MostrarProyectos">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Lider</th>
            <th scope="col">Nombre Equipo</th> 
            <th scope="col">Proyecto</th> 
            <th scope="col">Vertical</th> 
            <th scope="col">+</th> 
            <th scope="col">Enviar</th> 
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
 
 <div class="modal fade bd-example-modal-lg" id="Detalles" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="col-md-12">
              
              <div class="row">

                <div class="col-md-6">
                  <label><h2 align="center">Proyecto</h2></label>
                    <div class="form-group">
                      <label>Proyecto</label>
                      <input type="text" class="form-control" id="DProyecto" disabled="">
                    </div>
                    <div class="form-group">
                      <label>Descripción</label>
                       <textarea type="text" class="form-control" id="DDescripción" disabled="" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Vertical</label>
                      <input type="text" class="form-control" id="DVertical" disabled="">
                    </div>
                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea type="text" class="form-control" id="DDescripciónv" disabled="" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <label>+Información</label>
                      <textarea type="text" class="form-control" id="DInformación" disabled="" rows="2"></textarea>
                    </div>
                  </div>
        
                
                <div class="col-md-6">
                  <label><h2 align="center">Lider</h2></label>
                  <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" id="NombreLider" disabled="">
                  </div>
                  <div class="form-group">
                      <label>Correo</label>
                      <input type="text" class="form-control" id="CorreoLider" disabled="">
                  </div>
                  <div class="form-group">
                      <label>Celular</label>
                      <input type="text" class="form-control" id="CelularLider" disabled="">
                  </div>
                  <div class="form-group">
                      <label>Carrera</label>
                      <input type="text" class="form-control" id="CarreraLider" disabled="">
                  </div>
                  <div class="form-group">
                      <label>Institución</label>
                      <input type="text" class="form-control" id="InstituciónLider" disabled="">
                  </div>

                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> 
      </div>
    </div>
  </div>
</div>

<script src="modulos/Registro/verProyectos.js"></script>

 
 
 