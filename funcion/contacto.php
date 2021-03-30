<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
function formcontacto(){ $visible=' '; 

 
?>



     
   <div class="card-body was-validated" style=" width: 100%; height: 100%;  overflow-y: auto ;"> 
    <div class="row form-group">
        <div class="col-md-4 col-12 col-lg-4">   
              <label for="nombre" class=" control-label" >Nombre completo:</label>
         </div>
        <div class="col-md-8 col-8 col-lg-8">     
               <input type="text" class="form-control " id="nombre" placeholder="Nombre completo" name="nombre"   required>
               <div class="valid-feedback">Valido.</div>
               <div class="invalid-feedback">Porfavor llenar este campo.</div>
        </div>
     
    </div>
    <div class="row form-group">
       <div class="col-md-4 col-12 col-lg-4"> 
              <label for="email">E-mail:</label> </div>
        <div class="col-md-8 col-8 col-lg-8"> 
            <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
            <div class="valid-feedback">Valido.</div>
            <div class="invalid-feedback">Porfavor llenar este campo.</div>
      </div>
    </div>
     <div class="row form-group">
      <div class="col-md-4 col-12 col-lg-4">
             <label for="telefono">Telefono:</label></div>
       <div class="col-md-8 col-8 col-lg-8"> 
            <input type="tel" class="form-control" id="telefono" placeholder="Telefono" name="telefono" required>
              <div class="valid-feedback">Valido.</div>
              <div class="invalid-feedback">Porfavor llenar este campo.</div>
      </div>
      
    </div>
     <div class="row form-group">
        <div class="col-md-4 col-12 col-lg-4">  
             <label for="asunto">Asunto:</label></div>
         <div class="col-md-8 col-8 col-lg-8">
                    <input type="text" class="form-control" id="asunto" placeholder="Asunto" name="asunto" required>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Porfavor llenar este campo.</div>
      </div>
     
    </div>
    <div class="row form-group">
        <div class="col-md-4 col-12 col-lg-4">  
                 <label for="asunto">Mensaje:</label></div>
         <div class="col-md-8 col-8 col-lg-8">
                    <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
                     <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Porfavor llenar este campo.</div>
      </div>
     
    </div>

                                <div class="row">
                                    <div class="col-sm-4 col-md-6  col-md-offset-4 col-xs-12">
                                        <div class="form-group ">   
                                                <button type="button"  class="btn btn-info was-validated" id="btn_clear"   title="Aceptar" onclick="ingresarcontacto();"><i class="far fa-envelope"  ></i></button>
                                           
                                            <button type="button"  class="btn btn-success" id="btn_clear"   title="Aceptar" onclick="limpiarcontacto()"><i class="fas fa-eraser"  ></i></button>
                                          
                                        </div>           
                                    </div>

                                </div>
                            </div>
                           
              

            <!-- Modal -->
          
 
<?}
?>     