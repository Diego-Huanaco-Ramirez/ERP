<?php

function modalatencion(){ $idb= "2";?>
    <!-- INICIO Modal body  BUSCADO PACIENTE en otros--> 
<div class="modal fade modeless" id="Modalatencion" >
<div class="modal-dialog modal-xl">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header" >
        <h6 class="modal-title" id="fichapaciente2" >Atencion de Pacientes</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->
       <?  formatencion($idb);?>
    
          <!-- fin contenido tabla modal-->
          <div class="modal-footer" hidden>
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
</div>
</div>
</div>       
<?} ?>
