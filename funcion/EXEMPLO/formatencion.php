<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formatencion($value){ ?>
 
<div class="row form-group small" hidden>
          
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <label class="control-label" for="rut"><p>Parametros :</p></label> 
            </div>
           
            <div class="col-2 col-sm-2 col-md-1 col-lg-1">
            <!--    <button id="<? echo  "btnparametro".$value;?>" style=" font-size: x-small;" title="Parámetros paciente" class="btn btn-info  btn-sm "data-toggle="modal" data-target="#Mparametros"  onclick="openmodalatencion3();controlInput(2,'','')"><i class='fas fa-id-card-alt'></i></button>-->
            </div>
            <div class="col-2 col-sm-3 col-md-1 col-lg-1">
                <button id="<? echo  "btnfichapaciente".$value;?>" class="btn btn-info btn-sm" style=" font-size: x-small;"   onclick="historial('',4)"  title="Historial clinico paciente" hidden> <i class="fas fa-history"></i></button>
            </div>     
            <div class="col-2 col-sm-3 col-md-1 col-lg-1">
                 <? if($value == 2){  ?>
            <button id="<? echo  "btnfichacerrar".$value;?>"  style=" font-size: x-small;" class="btn btn-danger btn-sm" onclick="cerrarficha(<? echo  $value;?>)" title="Cerrar ficha paciente" ><i class="fas fa-times"></i></button>
        <? }else {?> 
               <button id="<? echo  "btnfichacerrar".$value;?>" data-toggle="collapse" data-target="#collapseThree" style=" font-size: x-small;" class="btn btn-danger btn-sm" onclick="cerrarficha(<? echo  $value;?>)" title="Cerrar ficha paciente" ><i class="fas fa-times"></i></button>
        <? } ?> 
                
            </div>                                 
             <div class="col-2 col-sm-3 col-md-1 col-lg-1">
                <button id="<? echo  "btnnficha".$value;?>"  style=" font-size: x-small;" class="btn btn-success btn-sm" onclick="limpiarfichapaciente()" title="Limpiar ficha paciente"><i class="far fa-file"></i></button>
            </div>                                
            <div class="col-2 col-sm-2 col-md-1 col-lg-1">
               <button id="<? echo  "btnregatencion".$value;?>" type="button" style=" font-size: x-small;"  class="btn btn-success  btn-sm" onclick="regatencion(<? echo  $value;?>);" title="Grabar atencion"><i class="far fa-save"></i></button>
             </div>
          
        </div>
        <div   style="  height: 480px;overflow-y: scroll; overflow-x:  hidden;">
                                  
            <div class="row form-group">
        
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
                <label>MOTIVO</label>
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
           <textarea id="<? echo  "txt_motivo".$value;?>" title="Motivo" placeholder="" class="form-control" rows="1"  name="comment" form="usrform"  onblur="this.rows = '1';regatencion(<? echo  $value;?>);" ></textarea>
       </div>
    </div>  
    
    <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
            <label>ANTECEDENTES</label>
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
          <textarea  id="<? echo  "txt_antecedente".$value;?>" title="Antecedente" placeholder="" class="form-control" rows="1"  name="comment" form="usrform"   onblur="this.rows = '1';regatencion(<? echo  $value;?>);" ></textarea>       
       </div>
    </div> 
  
      <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
           <label>EX. FISICO</label> 
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
            <textarea  id="<? echo  "txt_exfisico".$value;?>" title="Ex. Fisico" placeholder="" class="form-control" rows="1"  name="comment" form="usrform"   onblur="this.rows = '1';regatencion(<? echo  $value;?>);"></textarea>      
       </div>
    </div> 
      <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
            <label>BIOMICROSCOPIA</label>
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
             <textarea  id="<? echo  "txt_biomicroscopia".$value;?>" title="Biomicroscopia" placeholder="" class="form-control" rows="1"  name="comment" form="usrform"  onblur="this.rows = '1';regatencion(<? echo  $value;?>);"></textarea>                 
       </div>
    </div> 
     
    <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
             <label>OFTALMOSCOPIA</label>
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
               <textarea  id="<? echo  "txt_oftalmoscopia".$value;?>" title="Oftalmoscopia" placeholder=""  class="form-control" rows="1"  name="comment" form="usrform"  onblur="this.rows = '1';regatencion(<? echo  $value;?>);"></textarea>    
       </div>
    </div> 
    <div class="row">
       
        <div class="col-3 col-sm-3 col-md-3 col-lg-2">
            
                <button id="<? echo  "Chkpiniciales".$value;?>" style=" font-size: x-small;"   class="btn btn-success  btn-sm" onclick="registra_parametrosiniciales(this, <? echo  $value;?>)"> S</button>
                
       </div>
     
         <div class="col-3 col-sm-3 col-md-3 col-lg-1">   
               
                  <button id="<? echo  "Chkptermino".$value;?>" style=" font-size: x-small;"   class="btn btn-success  btn-sm"  onclick="registra_terminoactividad(this, <? echo  $value;?>)"> M</button>
              
       </div>  
           <div class="col-1 col-sm-1 col-md-1 col-lg-1">   
             <button id="<? echo  "btnparametro".$value;?>" style=" font-size: x-small;" title="Parámetros paciente" class="btn btn-info  btn-sm "data-toggle="modal" data-target="#Mparametros"  onclick="openmodalatencion3();controlInput(2,'','')"><i class='fas fa-id-card-alt'></i></button>
             
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9" hidden>     
             <button id="<? echo  "btnfichapaciente".$value;?>" class="btn btn-info btn-sm" style=" font-size: x-small;"   onclick="historial('',4)"  title="Historial clinico paciente" hidden> <i class="fas fa-history"></i></button>
            <? if($value == 2){  ?>
            <button id="<? echo  "btnfichacerrar".$value;?>"  style=" font-size: x-small;" class="btn btn-danger btn-sm" onclick="cerrarficha(<? echo  $value;?>)" title="Cerrar ficha paciente"><i class="fas fa-times"></i></button>
        <? }else {?> 
               <button id="<? echo  "btnfichacerrar".$value;?>" data-toggle="collapse" data-target="#collapseThree" style=" font-size: x-small;" class="btn btn-danger btn-sm" onclick="cerrarficha(<? echo  $value;?>)" title="Cerrar ficha paciente"><i class="fas fa-times"></i></button>
        <? } ?> 
                <button id="<? echo  "btnnficha".$value;?>"  style=" font-size: x-small;" class="btn btn-success btn-sm" onclick="limpiarfichapaciente()" title="Limpiar ficha paciente"><i class="far fa-file"></i></button>
               <button id="<? echo  "btnregatencion".$value;?>" type="button" style=" font-size: x-small;"  class="btn btn-success  btn-sm" onclick="regatencion(<? echo  $value;?>);" title="Grabar atencion"><i class="far fa-save"></i></button>    
       </div>
    </div>      
    <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
           <label>DIAGNOSTICO</label> 
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
              <textarea  id="<? echo  "txt_diagnostico".$value;?>"  title="Diagnostico" placeholder="" class="form-control" rows="1"  name="comment" form="usrform"  onblur="this.rows = '1';regatencion(<? echo  $value;?>);"></textarea>    
       </div>
    </div> 
    <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
            <label>INDICACIÓN</label> 
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
              <textarea  id="<? echo  "txt_indicacion".$value;?>" title="Indicacion" placeholder="" class="form-control" rows="2"  name="comment" form="usrform"  onblur="this.rows = '1';regatencion(<? echo  $value;?>);"></textarea>    
       </div>
    </div> 
    <div class="row">
       <div class="col-3 col-sm-3 col-md-3 col-lg-3">   
            <label>EVOLUCION</label> 
       </div>
       <div class="col-9 col-sm-9 col-md-9 col-lg-9">     
              <textarea  id="<? echo  "txt_evolucion".$value;?>"  title="Evolucion" placeholder="" class="form-control" rows="1"  name="comment" form="usrform"  onblur="this.rows = '1';regatencion(<? echo  $value;?>);"></textarea>   
       </div>
    </div>     
               
        
                
         
                
          
              
         
                 
   
                
    
                
    </div>
            </div>
          </div>

<?}
?>

