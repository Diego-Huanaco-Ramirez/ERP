<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formusuario($value){ $hidden= "hidden";$hidden2= "hidden"; ?>
<label id="<? echo  "lblid_paciente".$value;?>">0</label>
<div class="row form-group"></div>
        <div class="row form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
          <div class="col-xs-1 col-sm-1  col-lg-1" ></div>
               
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <button class="btn btn-info btn-sm" id="btnsearchpaciente" data-toggle="modal" data-target="#ModalBusqueda2" title="Buscador de pacientes" hidden> <i class="fas fa-search" ></i></button>
               
            <button class="btn btn-info btn-sm"    onclick="historial('',3)"  title="Historial clinico paciente" hidden> <i class="fas fa-history"></i></button>
        <? if($value == 2){ $hidden=""; ?>
            <button type="button"   class="btn btn-info btn-sm" onclick="agregarpac('',2);" title="Agregar paciente a la agenda" hidden><i class="far fa-hand-point-right" ></i></button>           
            <button type="button1"   class="btn btn-success btn-lg" onclick="nuevopaciente(1,2)" title="Nuevo "><i class="fas fa-eraser"></i></button>
        <? }else {?> 
               <button type="button1"   class="btn btn-success btn-lg" onclick="nuevopaciente(1,1)" title="Nuevo Paciente"><i class="far fa-file"></i></button>
        <? } ?>                     
               <button type="button" id="<? echo  "btnsavepaciente".$value;?>"  class="btn btn-success btn-lg" onclick="GuardarPaciente(<? echo  $value;?>)" title="Grabar"><i class="far fa-save"></i></button>
            <button type="button" id="<? echo  "btnanularpaciente".$value;?>"  class="btn btn-danger btn-sm"    onclick="AnulaPaciente(<? echo  $value;?>)"  title="ANULAR PACIENTE" hidden> <i class="fas fa-eraser"></i></button>
          </div>     
        </div>
     
   <div class="card-body" style=" width: 100%;  height: 80%;overflow-y: auto ;//background-color:#ED90B3;">  

  <div class="row form-group">
                                       
        <div class="col-1 col-sm-4 col-md-2 col-lg-2">
            <label style="font-size: x-small;">RUT</label> 
         </div>
         <div class="col-6 col-sm-4 col-md-4  col-lg-4">
             <input type="number" style="font-size: small;" id="<? echo  "txt_rut".$value;?>" onblur="validarut2(<? echo  $value;?>);generapass(prefid);" maxlength="8"   class="form-control small"   placeholder="99999999" > 
         </div> 
          <div class="col-4 col-sm-2 col-md-2  col-lg-2">
              <input type="text" style="font-size: small;"  id="<? echo  "txt_dverificador".$value;?>" class="form-control small" placeholder="9"   onblur="validarut(<? echo  $value;?>)"  >  
         </div>  
        <div class="col-6 col-sm-4 col-md-4  col-lg-4" <?echo $hidden2;?>>
              <label class="switch small" style="font-size: xx-small;" title="Rut nacional"  >
                <input type="checkbox" class="form-check-inline small"  id="<? echo  "check1".$value;?>" onchange="estado_check(this);" checked>
                <span class="slider round small"  ></span>
            </label>
         </div> 
                                        
       </div>
     <div class="row form-group">
                                       <!-- <div class="col-12 col-sm-12 col-lg-4">
                                            <label class="control-label " for="rut">Nombres :</label> 
                                        </div> -->
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
             <input type="text" id="<? echo  "txt_nombres".$value;?>" class="form-control" title="Nombre"  placeholder="Nombre.." > 
         </div>
         <div class="col-6 col-sm-12 col-md-4 col-lg-4">
            <input type="text" id="<? echo  "txt_apellidop".$value;?>" title="Apellido paterno"  placeholder="Apellido paterno.." class="form-control"  > 
         </div> 
         <div class="col-6 col-sm-12 col-md-4 col-lg-4">
             <input type="text" id="<? echo  "txt_apellidom".$value;?>" title="Apellido materno"  placeholder="Apellido materno.." class="form-control"  > 
         </div>                              
       </div>
        <div class="row form-group" <?echo $hidden2;?>>
                                         

          <div class="col-8 col-sm-12 col-md-6 col-lg-6 ">
               <input type="date" id="<? echo  "txt_fechanac".$value;?>" style="font-size: medium;" title="Fecha de nacimiento" class="form-control small"   placeholder="" value="" onchange="calculaedad2(this, 1,<? echo  $value;?>)" onblur="calculaedad2(this, 1,<? echo  $value;?>)"  > 
           </div>
           <div class="col-4   col-sm-3 col-md-6 col-lg-6">
                  <input type="text" id="<? echo  "txt_edad".$value;?>" class="form-control small" style="font-size: small;" title="Edad"  placeholder="Edad" value="" readonly   > 
           </div>


        </div>

        <div class="row form-group">
                                        
             
             <div class="col-4 col-sm-12 col-md-6 col-lg-4">
                 <input type="text" id="<? echo  "txt_movil".$value;?>" title="Teléfono movil" maxlength="12"  placeholder="Teléfono movil.." class="form-control"   maxlength="12" value="+569" > 
             </div>
              <div class="col-4 col-sm-12 col-md-6 col-lg-4">
                 <input type="text" id="<? echo  "txt_movil".$value;?>" title="Teléfono movil" maxlength="12"  placeholder="Teléfono movil.." class="form-control"   maxlength="12" value="+569" > 
             </div>
            <div class="col-4 col-sm-12 col-md-6 col-lg-6" <?echo $hidden2;?>>
                 <input type="text" id="<? echo  "txt_fijo".$value;?>" title="Teléfono fijo"  placeholder="Teléfono fijo.." class="form-control" maxlength="12"  value="+565" > 
             </div>
            <div class="col-xs-12 col-md-6 col-lg-4" >
                    <div class="form-group">
                        <label for="sel_regiones" hidden>Regiones</label>
                        <select class="form-control" name="sel_comunas" id="<? echo  "sel_comunas".$value;?>" onchange="selcomuna(this.value)">
                            <option value="0">Comuna</option>
                            <option value="1">ARICA</option>
                            <option value="2">ALTO HOSPICIO</option>
                            <option value="3">IQUIQUE</option>
                            
                        </select>
                    </div>
            </div>
        </div>
       <div class="row form-group">
            
            <div class="col-xs-12 col-md-6 col-lg-6">
                    <label for="direccion" hidden>Domicilio</label>
                    <input type="text" name="direccion" id="<? echo  "direccion".$value;?>" class="form-control" placeholder="Domicilio" title="dirección">
            </div>
           <div class="col-xs-12 col-md-6 col-lg-6">
                    <label for="Rerencia" hidden></label>
                    <input type="text" name="Rerencia" id="<? echo  "Rerencia".$value;?>" class="form-control" placeholder="Rerencia" title="Rerencia">
            </div>
       </div>
        <div class="row form-group" <?echo $hidden2;?>>
                                         
            <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                <input type="text" id="<? echo  "txt_nacionalidad".$value;?>" title="Nacionalidad" class="form-control"  value="chilena"  > 
            </div>
            <div class="col-6 col-sm-12 col-md-6 col-lg-6">
                 <input type="text" id="<? echo  "txt_profesion".$value;?>"  title="Profesión"  placeholder="Profesión.." class="form-control"    > 
            </div>
        </div>
       <div class="row form-group" <?echo $hidden;?> <?echo $hidden2;?>>
                                         
            <div class="col-6 col-sm-12 col-md-5 col-lg-6">
                <select class="form-control btn-primary"   name=<? echo "sel_accion".$value;?> id=<? echo "sel_accion".$value;?>>  
                  <option value='0'>ACCION</option>
                      <?// listaprestaciones2(); ?>
               </select> 
            </div>
            <div class="col-6 col-sm-12 col-md-5 col-lg-6">
                  <select class="form-control btn-primary" name=<? echo "sel_pago".$value;?> id=<? echo "sel_pago".$value;?>>  
                  <option value='0'>PAGO</option>
                      <? //listapago2(); ?>
               </select> 
            </div>
        </div>
       <div class="row form-group" <?echo $hidden;?> <?echo $hidden2;?>>
                                         
             <div class="col-4 col-sm-12 col-md-12 col-lg-12">
                 <input type="text" id="<? echo  "txt_motivopaciente".$value;?>" title="Motivo paciente"  placeholder="Motivo paciente.." class="form-control" > 
             </div>
              
        </div>
       <div class="row form-group" <?echo $hidden2;?>>
                                         
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <textarea  id="<? echo  "txt_observacion_paciente".$value;?>" style="font-size: small;"  title="Registro medico" placeholder="Escribir registro medico..." class="form-control" rows="3"  name="comment" form="usrform" onfocus="this.rows = '8';" onblur="this.rows = '3';" hidden></textarea>
            </div>
            
        </div>  
       <div class="row form-group" >
             <div class="col-12 col-md-6 col-lg-6">
                 <label for="email" hidden>Email</label>
                    <input type="emai1" name="email" id="<? echo  "email".$value;?>"  class="form-control" placeholder="email" required title="email valido" >
            </div>
        <div class="col-12 col-md-6 col-lg-6">
                    <label for="email2" hidden>Email</label>
                    <input type="email" name="email2" id="<? echo  "email2".$value;?>"  class="form-control" placeholder="email" required title="email valido">
            </div>
       </div>
       
       <div class="row form-group-sm" >
         
          <div class="col-xs-12 col-md-6 col-lg-6" hidden>
                    <div class="form-group">
                        <label for="sel_regiones" hidden>Regiones</label>
                        <select class="form-control" name="sel_regiones" id="<? echo  "sel_regiones".$value;?>" onchange="selcomuna(this.value)">
                            <option value="0">Región</option>
                            <option value="1">R.Tarapaca</option>
<option value="2">R.Antofagasta</option>
<option value="3">R.Atacama</option>
<option value="4">R.Coquimbo</option>
<option value="5">R.Valparaiso</option>
<option value="6">R.Libertador General Bernardo O Higgins</option>
<option value="7">R.Maule</option>
<option value="8">R.Bio-Bi­o</option>
<option value="9">R.Araucania</option>
<option value="10">R.Los Lagos</option>
<option value="11">R.Aysen del General Carlos Ibanez del Campo</option>
<option value="12">R.Magallanes y la Antartica Chilena</option>
<option value="13">R.Metropolitana</option>
<option value="14">R.Los Rios</option>
<option value="15">R.Arica y Parinacota</option>
                        </select>
                    </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4" hidden>
                    <div class="form-group">
                        <label for="sel_comunas" hidden>Comunas</label>
                       
                        <div id="comunas">
                            <select class='form-control' name='sel_comunas' id='sel_comunas'> <option value='0'>Comunas</option></select> 
                        </div>
                       
                    </div>
          </div>
       </div>
        
        <div class="row form-group" >
             <div class="col-12 col-md-6 col-lg-6">
                 <label for="password1" hidden>Email</label>
                 <input type="text" name="password1" id="<? echo  "password1".$value;?>"  class="form-control" placeholder="password" required title="email valido" >
            </div>
        <div class="col-12 col-md-6 col-lg-6">
                    <label for="password2" hidden>Email</label>
                    <input type="text" name="password2" id="<? echo  "password2".$value;?>"  class="form-control" placeholder="repetir password" required title="email valido">
            </div>
       </div>
   </div>       

<?}
?>

