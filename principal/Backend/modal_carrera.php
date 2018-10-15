<form id="guardarDatoscarrera" method="post">
                  <div class="modal fade" id="ca" tabindex="-1" role = "dialog" aria-LabelLedby = "myModalLabel1" aria-hidden = "true">
                    <div class="modal-dialog" role = "document">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel1"><i class="fas fa-sign-out-alt"></i> Registrar Carrera</h4>
                          <button type = "button" class="close" data-dismiss = "modal" arial-label = "Close"><span aria-hidden = "true">&times;</span></button>
                        </div>

                        <div class="modal-body">
                          <div class="form-group">
                            <div id="datos-registrado-a">
                              
                            </div>
                            <label class="control-label text-danger">Carrera</label>
                            <input type="text" class="form-control text-dark" id="ca" name="ca" placeholder="Ingresar Carrera">
                          </div>
                        </div>

                        <div class="modal-footer">
                            <button type = "button" class="btn btn-danger" id="cerrar" data-dismiss = "modal"><i class="fas fa-times"> Cerrar</i> </button>
                            <button type = "submit" id="h" class="btn btn-danger"><i class="fas fa-check"> Guardar datos</i> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                 </form>
<!--Fin del modal-->

<!--Ajax para guardar datos del modal-->
<script type="text/javascript">
$('#h').click(function(){
  var datos = $('#guardarDatoscarrera').serialize();
   $.ajax({
        type: 'post',
        url: 'Backend/guardarcarrera.php',
        data: datos,
        beforeSend:function(c){
         $("#datos-registrado-a").html('<div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i><strong> Procesando..... !</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        },
        success: function(respuesta) {
         $("#datos-registrado-a").html(respuesta);
         visualizarCarrera();
        }
    })
 });
</script>
