<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formproveedor($value){ $hidden='hidden'; 
if($value == '1') 
  $visible = 'hidden';
else 
  $visible = '';


?>
 

     
   <div class="card-body" style=" width: 100%;  height: 80%;overflow-y: auto ;">  
       <div class="col-md-10 col-md-offset-1 col-xs-12 col-lg-12 ">
            
            <label id="" hidden></label>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row">
                        <label class=" col-md-4 col-xs-12 control-label " for="rut">R.U.T :</label>
                        <div class="col-md-5 col-xs-12 row ">
                            <input type="text" id="txt_rut" class="form-control"   placeholder="9999999" pattern="\d{3,8}" required > 
                        </div>
                        <div class="col-md-1 col-xs-12 ">
                           <span class="input-lg ">-</span> 
                        </div>
                        <div class="col-md-3 col-xs-12 ">
                            <input type="text-inline" id="txt_verificador" class="form-control" placeholder="9"    pattern="\d|kK{1}" required >  
                        </div>   
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <button type="button" title="Buscar"  class="btn btn-info "onclick=""> <span  class="glyphicon glyphicon-search small"></span></button>
                    </div>
                    <div class="col-md-4  col-xs-6   ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="razon_social">Rázon social :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_razon_social" class="form-control"   placeholder="" pattern="[A-Za-z]{0,15}" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row ">
                        <span  class="glyphicon glyphicon-asterisk small"></span>               
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                                                <button type="button" title="Aceptar"  class="btn btn-info "onclick=""> <span  class="glyphicon glyphicon-new-window small"></span></button>
                    </div>
                </div><!-- fin la primera fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="giro">Giro :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <input type="text-inline" id="txt_giro" class="form-control"   placeholder="" pattern="[A-Za-z0-9]{0,15}" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6  ">
                        <label class=" col-md-5 l-xs-12 control-label" for="dirrecion">Dirección :</label>
                        <div class="col-md-7 col-xs-12 row">
                            <input type="text-inline" id="txt_direccion" class="form-control"   placeholder="" pattern="[A-Za-z0-9._]{0,15}" required >
                        </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                </div><!-- fin la segunda fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                        <label class=" col-md-4 col-xs-12 control-label" for="ciuda">Ciudad :</label>
                        <div class="col-md-9 col-xs-12 row">
                            <input type="text-inline" id="txt_ciudad" class="form-control"   placeholder="" pattern="[A-Za-z]{0,15}" required >
                        </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">
                            <span  class="glyphicon glyphicon-asterisk small"></span>                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6  ">
                        <label class=" col-md-5 col-xs-12 control-label" for="comuna">Comuna :</label>
                        <div class="col-md-7 col-xs-12 row">
                            <input type="text-inline" id="txt_comuna" class="form-control"   placeholder="" required >
                        </div>
                    </div>
                </div><!-- fin la tercera fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="condicion_pago">Condición de pago :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <select  class="form-control"id="slcondicion" name="slcondicion">
                                        <option value=""></option>
                                        <option value="0">Contado </option>
                                        <option value="1">Tarjeta </option>
                                        <option value="2">Cheque </option>
                                    </select>
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="fecha">Fecha de ingreso :</label>
                                    <div class="col-md-7 col-xs-12 row"> <!-- ojo cambia la id. advertencia al cambia la id se pierde el formato de fecha -->
                                        <input type="text-inline" id="datepicker_rpinicio" class="form-control"   placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>">
                                    </div>
                    </div>
                </div><!-- fin la cuarta fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="fono">Fono :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <input type="text-inline" id="txt_fono" class="form-control"  onKeyPress="return numeros(event)" pattern="[0-9]{0,8}" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="fax"> Fax :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_fax" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div><!-- fin la quinta fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="correo">Email :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <input type="text-inline" id="txt_email" class="form-control"   placeholder="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="contacto"> Contacto :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_contacto" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div><!-- fin la sexta fila -->
               <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="ranking">ranking :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <input type="text-inline" id="txt_ranking" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-6 ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="servicio"> servicio :</label>
                                    <div class="col-md-7 col-xs-12 row">
                                        <input type="text-inline" id="txt_servicio" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div><!-- fin la septima fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-6 row ">
                                    <label class=" col-md-4 col-xs-12 control-label" for="nombref">Nombre de fantasia :</label>
                                    <div class="col-md-9 col-xs-12 row">
                                        <input type="text-inline" id="txt_nombref" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                </div><!-- fin la septima fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-7  col-xs-6">
                        <button type="button" title="Aceptar"  class="btn btn-info "onclick=" validacion()"> <span  class="glyphicon glyphicon-floppy-disk small"></span>  agregar</button>
                        <button type="button" title=Limpiar"  class="btn btn-danger " onclick="limpiar()"> <span  class="glyphicon glyphicon-refresh small"></span>  limpiar</button>
                    </div>
                </div>
                <div class="row">
                    <div id="alert" class="col-md-8 col-xs-8">  </div>
                </div> 
                <div class="panel panel-default">
                <div class="row" >
                <div class="col-xs-12 col-md-12">  
                    <div class="panel-body" runat="server"  style="height: 390px;  overflow-y: scroll;">
                <div id="marcoreportetabla">
                </div>
                </div>
                </div>
                </div>
                </div>
           
            </div>
   </div>       

<?}
?>

