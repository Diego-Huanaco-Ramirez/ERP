<?php
require_once('../clases/cls_lente.php');
//lstlentes(1);
function lstlentes($tipo){
    $me = new cls_lente();
    $me->settipo_lente($tipo);
    $me->selectdatatipo();
    for($i=0; $i < count($me->arrlente);$i++){  ?>
        <label class="form-check-label col-lg-12 col-12 ">
            <input id="<? echo "lente".$me->arrlente[$i]['cod_lente'];?>"  type="checkbox" onclick="presentalente(this);" onblur="" class="form-check-input" value="<? echo $me->arrlente[$i]['cod_lente'];?>"  ><? echo $me->arrlente[$i]['nombre_lente'];?>
        </label>
    <? }
}

function objavisual($opc){
    if($opc)
        $direccion = "OD";
    else 
        $direccion = "OI";
    ?>
 
<option value="0" ><? echo $direccion;?></option>
      <option value="1">1.0</option>
      <option value="2">0.9</option>
      <option value="3">0.8</option>
      <option value="4">0.7</option>
      <option value="5">0.6</option>
      <option value="6">0.5</option>
      <option value="7">0.4</option>
      <option value="8">0.3</option>
      <option value="9">0.2</option>
      <option value="10">0.1</option>
      <option value="11" hidden>0.0</option>
     <option value="12">Cuenta dedos</option>
     <option value="13">Movimiento manos</option>
     <option value="14">Percibe luz</option>
     <option value="15">Amaurosis</option>
<?}
function obj($opc){
    if($opc)
        $direccion = "OD";
    else 
        $direccion = "OI";
    ?>
  <option value="0" ><? echo $direccion;?></option>
   <option value="1">J</option>
   <option value="2">J1</option>
   <option value="3">J2</option>
   <option value="4">J3</option>
   <option value="5">J4</option>
   <option value="6">J5</option>
   <option value="7">J6</option>
   <option value="8">J7</option>
   <option value="12">Cuenta dedos</option>
   <option value="13">Cuenta manos</option>
   <option value="14">Percibe luz</option>
   <option value="15">Amaurosis</option>    
<?}
function mparametros(){ ?>
    
          <!-- The Modal PARAMETROS -->
<div class="modal fade modeless" id="Mparametros">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 id="titlemodal" class="modal-title">Parámetros </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- inicio Modal ingreso parametros -->
                    <div class="modal-body ">
                        <!--datos del paciente-->
                      
                        <!--primera fila de datos--> 
    <div class="row  col-lg-12 col-12 col-sm-12 justify-content-center primeraFila fila ">
<!--0 COLUMNA - primera fila de datos-->
<div class="row col-lg-1 col-1 col-sm-1  sinmargen justify-content-center sinpadding">
    <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
    </div> 
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
    </div>
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
    </div>
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding" hidden>
         <button class="btn btn-info btn-sm "  title="Copiar a receta lejos" onclick="copiar('re', 'rl')" ><i class="fas fa-angle-double-down"></i></button>      
         <button class="btn btn-success btn-sm " title="limpiar refracción" onclick="limpiar('re')" hidden><i class="fas fa-eraser"></i></button>
         
    </div>
    
</div>
<!--primer COLUMNA - primera fila de datos-->
        <div class="row col-lg-2 col-12 col-sm-12  sinmargen justify-content-center sinpadding">
           
            <label class="col-lg-12 col-12 col-sm-12 titulo2   "><H5>REFRACCIÓN</h5></label>
            <div class="col-lg-4 col-6 col-sm-4 sinpadding sinmargen ">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">ESF</label>
                                     
                                    <input id="reEsfOD" onchange=""  onclick="formatotextbox(this)"  onkeypress="validador_enter(event,this);"    title="OD" style="font-size: medium; font-weight: bold;"  onfocusout="medidagenerica()" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OD"  onkeydown="incrementa(event,this);medida(1);" onblur='validate(event,this);medidagenerica(1)'   type="text"   step="0.25"  >
                                    <input id="reEsfOI" onchange=""  onclick="formatotextbox(this)"  onkeypress="validador_enter(event,this);"  title="OI" style="font-size: medium; font-weight: bold;"   onfocusout="medidagenerica()" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OI"  onkeydown="incrementa(event,this);medida(1);" onblur='validate(event,this);medidagenerica(1)'   type="text"   step="0.25" value="">
                                     
            </div>
            <div class="col-lg-4 col-6 col-sm-4 sinpadding sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">CIL</label>
                                   
                                    <input id="reCilOD" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OD"  style="font-size: medium; font-weight: bold;"  class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OD"  onkeydown="incrementa(event,this);medida(1);" onblur='validate(event,this);medidagenerica(1)'   type="text"  step="0.25" >
                                    <input id="reCilOI" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OI"  style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OI"  onkeydown="incrementa(event,this);medida(1);" onblur='validate(event,this);medidagenerica(1)'   type="text"   step="0.25" value="">
                                   
            </div>
            <div class="col-lg-4 col-8 col-sm-4 sinpadding sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">EJE</label>
                                    
                                    <input id="reEjeOD" onchange="medida(1);validareje(this)" onkeypress="validareje(this)" title="OD"  onblur="medidagenerica(1)"  style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="1" max="180" >
                                    <input id="reEjeOI" onchange="medida(1);validareje(this)" onkeypress="validareje(this)" title="OI"  onblur="medidagenerica(1)"  style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OI" type="number" step="1" max="180">
                                  
            </div>
            <div class="col-lg-12 col-12 col-sm-12 justify-content-center styleBtn sinpadding">
                                           <label></label>
            </div>
                               
         
        </div>
                   
    <!--SEGUNDA COLUMNA - primera fila de datos-->
        <div class="row col-lg-4 col-12 col-sm-12 justify-content-center sinmargen sinpaddingderecho">
            <div class="row col-lg-7 col-12 col-sm-12 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 col-sm-12 titulo2"><H5>AGUDEZA VISUAL</h5></label>
                                    <div class="col-lg-6 col-6 col-sm-6 sinpadding sinmargen">
                                        <label class="col-lg-12 col-12 col-sm-12 subt">S/C</label>
                                      
                                        <select id="avScOD" style="font-size: medium; font-weight: bold;" title="OD" onchange="medida(0)" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" >
                                        <? objavisual(1);?>
                                        </select>
                                      
                                         
                                        <select id="avScOI" style="font-size: medium; font-weight: bold;"  title="OI" onchange="medida(0)" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" >
                                        <? objavisual(0);?>
                                        </select>
                                        
                                      <!--                                        <input id="avEsfOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                                                              <input id="avEsfOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">-->
                                    </div>

                                    <div class="col-lg-6 col-6 col-sm-6 sinpadding sinmargen">
                                        <label class="col-lg-12 col-12 col-sm-12 subt">C/C</label>
                                 
                                        <select id="avCcOD"  style="font-size: medium; font-weight: bold;" title="OD" onchange="medida(0)" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" >
                                          <? objavisual(1);?>
                                        </select>
                                        
                                        <select id="avCcOI"  style="font-size: medium; font-weight: bold;" title="OI" onchange="medida(0)" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" id="avCcOI" >
                                      <? objavisual(0);?>
                                        </select>
                                       
<!--                                        <input id="avCilOD" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OD" type="number" step="0.01" >
 <input id="avCilOI" class="form-control col-lg-12 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="0.01">-->
                                    </div>
                                    <div class="col-lg-12 col-12 col-sm-12 justify-content-center styleBtn sinpadding">
                                        <button class="btn btn-success btn-md " onclick="limpiar('av')" hidden><i class="fas fa-eraser"></i></button>
                                        <label></label>
                                </div>
            </div> </div>
<!--TERCERA COLUMNA - primera fila de datos-->
            <div class="row col-lg-2 col-12 col-sm-12 justify-content-center sinmargen sinpaddingderecho minpaddingizquierdo">
                <label class="col-lg-10 col-12 col-sm-12 titulo2"><H5>TONOMETRIA</h5></label>
                <div class="row col-lg-3  col-12 col-sm-12 sinmargen sinpadding justify-content-center">
                                        <label class="col-lg-12 col-8 col-sm-8 subt">PIO</label>
                                        
                                        <input id="toPioOD" style="font-size: medium; font-weight: bold;" title="OD" onkeypress="validarPio();medida(0)" onchange="validarPio();medida(0)" class="form-control col-lg-12 col-8 col-sm-8 sinpadding " placeholder="OD" type="number" min="0" max="80" step="1" >
                                        <input id="toPioOI" style="font-size: medium; font-weight: bold;" title="OI" onkeypress="validarPio();medida(0)" onchange="validarPio();medida(0)" class="form-control col-lg-12 col-8 col-sm-8 sinpadding " placeholder="OI" type="number" min="0" max="80" step="1" >
                                      
                </div>
                <div class="col-lg-12 col-12 col-sm-12 justify-content-center styleBtn sinpadding">
                                        <label></label>
                </div>
            </div>
       
<!--CUARTA  COLUMNA - primera fila de datos-->
        <div class=" row col-lg-2 col-12 col-sm-12 justify-content-center sinmargen sinpaddingderecho ">
                                <label class="col-lg-12 col-12 col-sm-12 titulo2"><H5>LENSOMETRIA</h5></label>
                                <div class="col-lg-4 col-6 col-sm-4 sinmargen sinpadding">
                                    <label class="col-lg-10 col-12 col-sm-12 subt">ESF</label>
                                    
                                    <input id="leEsfOD" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OD"  style="font-size: medium; font-weight: bold;" class="form-control col-sm-12 col-lg-10 sinpadding col-12 " placeholder="OD"  onkeydown="incrementa(event,this);medida(2)" onblur='validate(event,this);medidagenerica(2)'   type="text"  step="0.25" >
                                    <input id="leEsfOI" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OI"  style="font-size: medium; font-weight: bold;" class="form-control col-sm-12 col-lg-10  sinpadding col-12" placeholder="OI"  onkeydown="incrementa(event,this);medida(2)" onblur='validate(event,this);medidagenerica(2)'   type="text"   step="0.25">
                                    
                                </div>
                                <div class="col-lg-4 col-6 col-sm-4 sinmargen sinpadding">
                                    <label class="col-lg-10 col-sm-12 col-12 subt">CIL</label>
                                
                                    <input id="leCilOD" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OD"  style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-sm-12 sinpadding col-12" placeholder="OD"  onkeydown="incrementa(event,this);medida(2)" onblur='validate(event,this);medidagenerica(2)'   type="text"  step="0.25" >
                                    <input id="leCilOI" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OI"  style="font-size: medium; font-weight: bold;" class="form-control col-lg-10  col-sm-12 sinpadding col-12" placeholder="OI"  onkeydown="incrementa(event,this);medida(2)" onblur='validate(event,this);medidagenerica(2)'   type="text"   step="0.25">
                                   
                                </div>
                                <div class=" row col-lg-4 col-8 col-sm-4 sinmargen sinpadding">
                                    <label class="col-lg-10 col-12 subt">EJE</label>
                                    
                                    <input id="leEjeOD" onchange="medida(2);validareje(this)" onkeypress="validareje(this)"  title="OD" onblur="medidagenerica(2)" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-sm-12 sinpadding col-12" placeholder="OD" type="number" step="1" max="180">
                                    <input id="leEjeOI" onchange="medida(2);validareje(this)" onkeypress="validareje(this)" title="OI" onblur="medidagenerica(2)" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-sm-12 sinpadding col-12" placeholder="OI" type="number"  step="1" max="180">
                                     
                                </div>
                                 <div class="col-lg-12 col-12 col-sm-12 justify-content-center styleBtn sinpadding">
                                           <label></label>
                                    </div>
                             
        </div>
<div class="row col-lg-1 col-1 col-sm-1  sinmargen justify-content-center sinpadding">
     
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         <button type="button" class="btn btn-info" onclick="grabarparametros(1)" title="REGISTRA PARAMETROS INICIALES" ><i class="far fa-save"></i></button>
         <button class="btn btn-success btn-sm " title="Limpiar lensometria" onclick="limpiar('le')" hidden><i class="fas fa-eraser"></i></button>
              
    </div>
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
    </div>
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding" hidden>
         <button class="btn btn-info btn-sm " title="Copiar a receta lejos" onclick="copiar('le', 'rl')" ><i class="fas fa-angle-double-left"></i></button>
    </div>        
    
</div>
    </div>

  <!--RECETA LEJOS -->                       <!--segunda fila de datos--> 

    <div class=" row col-lg-12 col-12 col-sm-12 justify-content-center segundaFila fila">
        
        
 <div class="row col-lg-1 col-1 col-sm-1  sinmargen justify-content-center sinpadding">
    <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         <button class="btn btn-info btn-sm "  title="Copiar a receta lejos1" onclick="copiar('re', 'rl')" ><i class="fas fa-angle-double-down"></i></button>      
         <button class="btn btn-success btn-sm " title="limpiar refracción" onclick="limpiar('re')" hidden><i class="fas fa-eraser"></i></button>
         
    </div>   
    <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
    </div> 
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
    </div>
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
    </div>
   
    
</div>         
<div class=" row col-lg-3 col-12  col-sm-12 sinmargen sinpadding" >
           <button class="btn btn-info btn-sm "  title="Copiar a receta lejos" onclick="copiar('re', 'rl')" hidden><i class="fas fa-angle-double-down"></i></button>      <label class="col-lg-12 col-12  col-sm-12 titulo2" ><h5>RECETA LEJOS</h5></label>
                                <div class=" col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 subt col-12 col-sm-12">ESF</label>
                                    
                                    <input id="rlEsfOD" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OD" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OD"  onkeydown="incrementa(event,this);medida(3)" onblur='validate(event,this);medidagenerica(3)'   type="text"  step="0.25" >
                                    <input id="rlEsfOI" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OI" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OI"  onkeydown="incrementa(event,this);medida(3)" onblur='validate(event,this);medidagenerica(3)'   type="text"   step="0.25">
                                  <div class="form-check">    
<label class="form-check-label col-lg-12 subt2 col-10 col-sm-12 sinpaddingizquierdo sinmargeninferior">
    <input  name="rd1" id="rd11" type="checkbox" class="form-check-input" value="11" onchange="medida(5)" onclick="presentaradio(this,1)" onblur="receta()"  >
 NV</label>
                                  </div>     
                                </div>
                                <div class="col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">CIL</label>
                                    <input id="rlCilOD" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OD" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OD"  onkeydown="incrementa(event,this);medida(3)" onblur='validate(event,this);medidagenerica(3)'   type="text"  step="0.25" >
                                    <input id="rlCilOI" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OI" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OI"  onkeydown="incrementa(event,this);medida(3)" onblur='validate(event,this);medidagenerica(3)'   type="text"  step="0.25">
                                     <input id="vtxOD" style="font-size: medium; font-weight: bold;" title="OD" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OD" type="number" min="0" max="50" step="1" onchange="medida(5)">
                                    <input id="vtxOI" style="font-size: medium; font-weight: bold;" title="OI" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OI" type="number" min="0" max="50" step="1" onchange="medida(5)">
                                </div>
                                <div class="col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 col-12 col-sm-12 subt">EJE</label>
                                    <input id="rlEjeOD" onchange="medida(3);validareje(this)" onkeypress="validareje(this)" title="OD" onblur="medidagenerica(3)" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12  col-sm-12 sinpadding" placeholder="OD" type="number" step="1" max="180">
                                    <input id="rlEjeOI" onchange="medida(3);validareje(this)" onkeypress="validareje(this)" title="OI" onblur="medidagenerica(3)" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OI" type="number"  step="1" max="180">
                                   <div class="form-check">  
<label class="form-check-label col-lg-12 subt2 col-2 col-sm-12 sinpaddingizquierdo sinmargeninferior align-self-center">
<input name="rd1" id="rd12" type="checkbox" class="form-check-input " value="12" onchange="medida(5)" onclick="presentaradio(this,2)" onblur="receta()" >
DP</label>
                                   </div>    
                                </div>
                                <div class="col-lg-3 col-6 col-sm-6 sinmargen sinpadding">
                                    <label class="col-lg-12 sinpadding subt col-10 col-sm-12">AV</label>
                                    
                                    <select id="rlAvOD" style="font-size: medium; font-weight: bold; font-weight: bold;" onblur="receta()" title="OD" onchange="medida(5)" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" >
                                        <? objavisual(1);?>
                                     </select>
                                      
                                         
                                     <select id="rlAvOI" style="font-size: medium; font-weight: bold;" onblur="receta()"  title="OI" onchange="medida(5)" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" >
                                        <? objavisual(0);?>
                                     </select>
                                    
                                    
                                    
                                    
                                    <input id="rlDp" style="font-size: medium; font-weight: bold;" title="milimetros" class="form-control col-lg-11 col-12 col-sm-12" placeholder="mm" type="number" step="1" onchange="medida(5)">
                                    <button class="btn btn-success btn-sm " title="Limpiar receta cerca" onclick="limpiar('rl')" hidden><i class="fas fa-eraser"></i></button>
                                </div>
                                <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
                                  
                                </div>
</div>
                            <div class="col-lg-2 col-12 col-sm-12 styleBtn sinpaddingderecho align-self-center justify-content-center">

                                <button class="col-3 btn btn-info btn-sm" title="Copiar a receta cerca" onclick="copiar('rl', 'rc')"><i class="fas fa-angle-double-right"></i></button>
                            </div>
       <!--RECETA CERCA - SEGUNDA FILA-->
     
<div class="row col-lg-4 col-12 col-sm-12 sinmargen justify-content-center align-self-end sinpaddingderecho minpaddingizquierdo">
                               <button class="btn btn-info btn-sm " title="Copiar a receta lejos" onclick="copiar('le', 'rl')" hidden><i class="fas fa-angle-double-left"></i></button> <label class="col-lg-12 titulo2 col-12 col-sm-12 "><H5>RECETA CERCA</h5></label>
                                 <div class="col-lg-2 sinpadding col-6 col-sm-4 sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 sinpadding subt"></label>
                                     <label class="form-check-label col-lg-12 col-12 col-sm-12 sinpadding">
                                         <input id="rcAdIguales" type="checkbox" class="form-check-input " value="" onchange="medida(6)" onblur="receta()"  >ADD 
                                    </label>
                                 </div>    
                                <div class="col-lg-2 sinpadding col-6 col-sm-4 sinmargen">
                                    <label class="col-lg-12 col-12 col-sm-12 sinpadding subt">ADIC.</label>
                                    <input id="rcAdOD" style="font-size: medium; font-weight: bold;" title="OD" onchange="medida(5);adicionar(1,this.value)" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" placeholder="OD" onkeyup="medida(5);adicionar(1,this.value)" onkeypress="validanumero(event,this)" onkeydown="medida(5);incrementa(event,this)"  onblur='validate(event,this);receta();medidagenerica(4)'   type="text"  step="0.25" value=""  >
                                    <input id="rcAdOI" style="font-size: medium; font-weight: bold;" title="OI" onchange="medida(5);adicionar(0,this.value);" onkeyup="" class="form-control col-lg-10 col-12  col-sm-12 sinpadding" placeholder="OI"   onkeydown="medida(5);incrementa(event,this);adicionar(0,this.value)" onblur='validate(event,this);receta()'   type="text"   step="0.25" >
                                    
                                    
                                </div>
                                <div class="col-lg-2 sinpadding col-6 col-sm-4 sinmargen">
                                    <label class="col-lg-12 col-12 subt col-sm-12">ESF</label>
                                    <input id="rcEsfOD" onchange="resprcEsf(1,this.value);medidagenerica(4)" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);"  title="OD" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OD"  onkeydown="incrementa(event,this);medida(4);" onblur='validate(event,this);medidagenerica(4)'   type="text"  step="0.25" >
                                    <input id="rcEsfOI" onchange="resprcEsf(0,this.value);" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OI" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OI"  onkeydown="incrementa(event,this);medida(4);" onblur='validate(event,this);medidagenerica(4)'   type="text"   step="0.25">
<div class="form-check"> 
    <label class="form-check-label col-lg-12 subt2 col-10 col-sm-12 sinpaddingizquierdo sinmargeninferior">
    <input  name="rd2" id="rd21" type="checkbox" class="form-check-input" value="21" onchange="medida(5)" onclick="presentaradio2(this)" onblur=""  >
    NV2</label>
</div>        
                                </div>
                                    
                                <div class="col-lg-2 sinpadding col-8 col-sm-4 sinmargen">
                                    <label class="col-lg-12 subt col-12 col-sm-12">CIL</label>
                                    <input id="rcCilOD" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OD"  style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OD"  onkeydown="incrementa(event,this);medida(4);" onblur='validate(event,this);medidagenerica(4)'   type="text" step="0.25" >
                                    <input id="rcCilOI" onchange="" onclick="formatotextbox(this)" onkeypress="validador_enter(event,this);" title="OI"  style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OI"  onkeydown="incrementa(event,this);medida(4);" onblur='validate(event,this);medidagenerica(4)'   type="text"  step="0.25">
                                     <input id="vtxOD2" style="font-size: medium; font-weight: bold;"  title="OD" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OD" type="number" min="0" max="50" step="1" onchange="medida(5)" onblur="receta()">
                                    <input id="vtxOI2" style="font-size: medium; font-weight: bold;" title="OI" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OI" type="number" min="0" max="50" step="1" onchange="medida(5)" onblur="receta()">
                                </div>
                                <div class="col-lg-2 sinpadding col-6 col-sm-6 sinmargen">
                                    <label class="col-lg-12 subt col-12 col-sm-12">EJE</label>
                                    <input id="rcEjeOD" onchange="medida(4);validareje(this)"  onkeypress="medida(4);validareje(this)" title="OD" onblur="medidagenerica(4)" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OD" type="number" step="1" max="180">
                                    <input id="rcEjeOI" onchange="medida(4);validareje(this)"  onkeypress="medida(4);validareje(this)" title="OI" onblur="medidagenerica(4)" style="font-size: medium; font-weight: bold;" class="form-control col-lg-10 col-12 sinpadding col-sm-12" placeholder="OI" type="number"  step="1"max="180">
<div class="form-check">   
    <label class="form-check-label col-lg-12 subt2 col-10 col-sm-12 sinpaddingizquierdo sinmargeninferior">
    <input  name="rd2" id="rd22" type="checkbox" class="form-check-input" value="22" onchange="medida(5)" onclick="presentaradio2(this)" onblur="receta()"  >
    DP2</label>
</div>       
                                </div>
                                <div class="col-lg-2 sinpadding col-6 col-sm-6 sinmargen">
                                    <label class="col-lg-12 sinpadding subt col-12">J</label>
                                    <select style="font-size: medium; font-weight: bold;" title="OD" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" id="rcJOD"  onchange="medida(5)" onblur="receta()" >
                                       <? obj(1);?>
                                    </select>
                                    <select style="font-size: medium; font-weight: bold;" title="OI" class="form-control col-lg-10 col-12 col-sm-12 sinpadding" id="rcJOI"  onchange="medida(5)" onblur="receta()" >
                                       <? obj(0);?>
                                    </select>
<!--                                    <input id="rcJOD" class="form-control col-lg-12 col-12 sinpadding" placeholder="OD" type="number" step="0.01" >
                                <input id="rcJOI" class="form-control col-lg-12 col-12 sinpadding" placeholder="OI" type="number"  step="0.01">-->
                                    <input id="rcDp" style="font-size: medium; font-weight: bold;" title="milimetros" class="form-control col-lg-11 col-12 sinpadding" placeholder="mm" type="number" step="1"  onchange="medida(5)" onblur="receta()">
                                    <button class="btn btn-success btn-sm " title="Limpiar receta cerca" onclick="limpiar('rc')" hidden><i class="fas fa-eraser"></i></button>
                                </div>
                                <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
                                    
                            </div>
</div>
<div class="row col-lg-1 col-1 col-sm-1  sinmargen justify-content-center sinpadding">
    <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         <button class="btn btn-info btn-sm " title="Copiar a receta lejos" onclick="copiar('le', 'rl')" ><i class="fas fa-angle-double-left"></i></button>
    </div>  
    <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding" hidden>
         <button type="button" class="btn btn-info" onclick="grabarparametros(1)" title="REGISTRA PARAMETROS INICIALES" ><i class="far fa-save"></i></button>
         <button class="btn btn-success btn-sm " title="Limpiar lensometria" onclick="limpiar('le')" hidden><i class="fas fa-eraser"></i></button>
              
    </div>
     <div class="col-lg-12 col-12 col-sm-12 styleBtn sinpadding">
         
     </div>
          
    
</div>

    </div>
                        <!--tercera fila de datos-->
                           <!--cuarta fila de datos-->
                        <div class="row col-lg-12  justify-content-center fila">
                            <div class="col-lg-3 col-12 sinmargen">
                                <label class="col-lg-12 col-12" hidden>CARACTERÍSTICAS</label>
                                <div id="boxDiv" class="col-lg-12 form-check col-12 inDiv" title="Deslice el Mouse sobre la etiqueta del tipo de lente..." style=" height: 150px;width: 200px; overflow-y: scroll;">

                                    <div class="chkoptico">
                                        <label class=" col-lg-12 col-12 titulo "  >
                                            CARACTERÍSTICAS OPTICO
                                        </label>
                                       <? lstlentes(1);?>
                                    </div>
                                    <div class="chkcontacto">
                                        <label class=" col-lg-12 col-12 titulo">
                                            CARACTERÍSTICAS CONTACTO
                                        </label>
                                      <? lstlentes(2);?>
                                </div>
                            </div> 
                            </div> 
                            <div class="form-check row col-lg-3  col-12 align-self-center sinmargen">
                                 <div class=" col-lg-12 col-6 inDiv">
                                    <label class=" col-12 col-lg-12" title="Deslice el Mouse sobre la etiqueta del tipo de lente..." >
                                        <h5> LENTES</h5>
                                    </label>
                                </div>
                                <div class=" col-lg-12 col-5 inDiv">
                                    <label class="radio-inline col-12 col-lg-12" onmousemove="mostralente2(1);" >
                                        <input  name="chkOptico1" id="chkOptico1" type="checkbox" class="form-check-input" value="1"  onchange="mostralente(this);medida(7)"   >OPTICOS
                                    </label>
                                </div>
                                <div class=" col-lg-12 col-6 inDiv">
                                    <label class="radio-inline col-12 col-lg-12"  onmousemove="mostralente2(2);">
                                        <input name="chkContacto1" id="chkContacto1" type="checkbox" class="form-check-input" value="2"  onchange="mostralente(this);medida(7)" >CONTACTO
                                    </label>
                                </div>
                                <div class=" col-lg-12 col-6 inDiv">
                                    <label class="radio-inline col-12 col-lg-12" >
                                        
                                    </label>
                                </div>
                            </div>


                            <div class="row align-self-center col-lg-4 col-12 sinmargen">
                                <label class="form-check-label col-lg-12 col-6 inDiv">
                                    <input id="rlChk" type="checkbox" class="form-check-input" value="" onchange="medida(7)">RECETA LEJOS 
                                </label>
                                <label class="form-check-label col-lg-12 col-6 inDiv">
                                    <input id="rcChk" type="checkbox" class="form-check-input" value="" onchange="medida(7)">RECETA CERCA
                                </label>
                               <label class="form-check-label col-lg-12 col-6 inDiv">
                                    <input id="riChk" type="checkbox" class="form-check-input" value="" onchange="medida(7)">RECETA INTERMEDIA
                                </label>
                               
                            </div>
            <!-- FOOTER  -->                
                <div class="row align-self-center col-lg-2 col-12 sinmargen">
                    <div id="foo" hidden ></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="grabarparametros(1)" title="Guardar" ><i class="far fa-save"></i></button>
                        <button class="btn btn-info" onclick="impReceta(2)//open_vtna_receta();//" title="IMPRIMIR RECETA">
                            <i class="material-icons"><i class="fas fa-print"></i></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" hidden><i class="fas fa-times"></i></button>
                    </div> 
                </div>
            <div class="row align-self-center col-lg-4 col-12 sinmargen">
                <iframe id="marco_print" class="col-md-12 col-lg-12 col-sm-12 col-xs-12" src="" onbeforeprint="aviso()"  onafterprint="aviso();"  onclick="" width=""  height="0px"  ></iframe>
            </div>
                        </div>
                    </div> <!-- fin Modal ingreso parametros  -->



                    <!-- Modal footer -->
                    <div class="modal-footer" hidden>
                        <button class="btn btn-info" onclick="impReceta()" hidden>
                            <i class="material-icons"><i class="far fa-save"></i></i>
                        </button>
                        <button type="button" class="btn btn-success" data-dismiss="modal" hidden><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div> 
        </div>
    
<?} ?>