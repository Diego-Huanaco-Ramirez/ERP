<?php
function formlogin($value, $modal){
                
 
?>	
<!--contenido tabla modal-->
     <h2>Acceso Clientes</h2>
     <label id="<? echo  "respuesta".$value;?>"></label>
 <div class="col-12 col-sm-12 col-md-12   col-lg-12">
    <div class="form-group">
        <label for="rut"><h4>E-mail usuario</h4></label>
        <input type="text" class="form-control" id="<? echo  "rut".$value;?>" onblur="//publicar(this)">

        <div id="dvpersonal" hidden></div>

   </div>
  <div class="form-group">
       
      <label for="pwd"><h4>PASSWORD</h4></label>
      <input type="password" class="form-control" id="<? echo  "pwd".$value;?>" onblur="//publicar(this)">
  </div>
</div>
   
     <button id="<? echo  "btnlogin".$value;?>" type="button" onclick="login2('<? echo $value;?>')" class="btn btn-info"><i class="far fa-user-circle"></i>  Iniciar Sesión</button><!-- fin contenido tabla modal-->
     <button type="button" data-toggle="modal" data-target="<? echo  $modal;?>" onclick="hidemodal('<? echo  $modal;?>');cargainicial(); nuevopaciente('','');  // openmodal('Modalcliente')"  class="btn btn-info" data-dismiss="modal">Registrar</button><!-- fin contenido tabla modal-->
  <?php
 
}




?>
