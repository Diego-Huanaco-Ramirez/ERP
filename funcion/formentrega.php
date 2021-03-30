<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formentrega($value){ $hidden='hidden'; ;
$required0='';
$required1='';
$visiblenoservicio = '';
$visiblecoloryotro = '';
$visiblecat= 'hidden'; // cat y checkbox codigo
$visiblecodigobarra= '';
$visible_elemento= 'hidden';
$visible_input_codigo= '';
$modal = "Modalproducto";
$prod_tipo= "200";
if($value == '551'  ) {
$visible1row  = ''; 
$visible2row  = 'hidden';  //zf
$visible3row  = '';  
$visible4row = 'hidden'; //zf
$visible5row  = ''; 
$visiblecat= '';
$required1='';
$required0='required';
$esservicio = 0;
$prod_tipo= "100";
 // $visible = '';

}else {
  $esservicio  = 0;
   
  $checked = '';
}
$modal3 = "modalequiv";
$nombre_marco="livesearch8";
?>

 

 

                       
                      


                                <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="control-label "> ¿Quien recibira el producto? :</label> 
                                    </div> 
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0px !important;">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio1"  value="0" checked="true">yo
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio1" value="1" >Un tercero
                                            </label>

                                        </div> 
                                    </div>             
                                </div>


                                <div id="receptor" class="col-sm-12 col-12 col-md-12" style="padding-right: 0px !important;">

                                    <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label class="control-label " for="rut"><i class="far fa-address-card"></i> RUT :</label> 
                                        </div> 
                                        <div class="col-8 col-sm-8 col-md-8  col-lg-4">
                                            <input  type="number" style="font-size: small;" id="<? echo "txt_rut" . $value; ?>" onblur="validarut2(<? echo $value; ?>);
                                                        generapass(prefid);" maxlength="8"   class="form-control small"   placeholder="99999999" > 
                                        </div> 
                                        <div class="col-4 col-sm-4 col-md-4  col-lg-2">
                                            <input type="text" style="font-size: small;"  id="<? echo "txt_dverificador" . $value; ?>" class="form-control small" placeholder="9"   onblur="validarut(<? echo $value; ?>)"  >  
                                        </div>  
                                        <div class="col-6 col-sm-4 col-md-4  col-lg-4" <? echo $hidden2; ?>>
                                            <label class="switch small" style="font-size: xx-small;" title="Rut nacional"  >
                                                <input type="checkbox" class="form-check-inline small"  id="<? echo "check1" . $value; ?>" onchange="estado_check(this);" checked>
                                                <span class="slider round small"  ></span>
                                            </label>
                                        </div> 
                                    </div>
                                    <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-12 col-sm-12 col-lg-12">
                                            <label class="control-label "><i class="far fa-user-circle"></i> Nombres :</label> 
                                        </div> 
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                            <input type="text" id="<? echo "txt_nombres" . $value; ?>" class="form-control" title="Nombre"  placeholder="Nombre.." > 
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                            <input type="text" id="<? echo "txt_apellidop" . $value; ?>" title="Apellido paterno"  placeholder="Apellido paterno.." class="form-control"  > 
                                        </div> 
                                        <div class="col-12col-sm-12 col-md-12 col-lg-4">
                                            <input type="text" id="<? echo "txt_apellidom" . $value; ?>" title="Apellido materno"  placeholder="Apellido materno.." class="form-control"  > 
                                        </div>                              
                                    </div>
                                    <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label class="control-label " ><i class="fas fa-phone"></i> Telefono :</label> 
                                        </div> 
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <input type="text" id="<? echo "txt_movil" . $value; ?>" title="Teléfono movil" maxlength="12"  placeholder="Teléfono movil.." class="form-control"   maxlength="12" value="+569" > 
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="control-label "> ¿Direccion de envio? :</label> 
                                    </div> 
                                    <div class="col-12col-sm-6 col-md-6 col-lg-6" style="padding-right: 0px !important;">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio" checked="" value="0">registrada
                                            </label>
                                        </div>
                                        <div class="form-check-inline">

                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio" value="1">nueva
                                            </label>

                                        </div> 
                                    </div>             
                                </div>

                                <div id="direccion" class="col-xs-12 col-md-12 col-md-12" style="padding-right: 0px !important;">
                                    <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                                         <div class="col-xs-6 col-md-6 col-lg-6">
                                            <label class="control-label "><i class="fas fa-home"></i> Domicilio :</label> 
                                        </div> 
                                         <div class="col-xs-6 col-md-6 col-lg-6">
                                               <label class="control-label "> Comuna :</label> 
                                        </div> 
                                        <div class="col-xs-12 col-md-12 col-lg-6">

                                            <input type="text" name="direccion" id="<? echo "direccion" . $value; ?>" class="form-control" placeholder="Domicilio" title="dirección">
                                        </div>
                                        <div class="col-xs-6 col-md-6 col-lg-6">
                                            <select class="form-control" name="sel_comunas" id="<? echo "sel_comunas" . $value; ?>" onchange="selcomuna(this.value)">
                                                <option value="0">Comuna</option>
                                                <option value="1">ARICA</option>
                                                <option value="2">ALTO HOSPICIO</option>
                                                <option value="3">IQUIQUE</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                    <div class="row col-xs-12 col-md-12 col-lg-12 form-group" style="padding-right: 0px !important;">
                                         <input type="text" name="Referencia" id="<? echo "Referencia" . $value; ?>" class="form-control" placeholder="Referencia" title="Referencia">
                                   
                                    </div>
                                </div>

                                <div class="col-md-12" style="padding-right: 0px !important;">
                                    <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-xs-12 col-md-12 col-lg-12">
                                            <button class="col-md-12 btn-info form-control">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                      
                   
                     
              
                    
    

<?}
?>

