<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formproducto($value){ $hidden='hidden'; ;
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
}else  if($value == '552'  ) {
 $visible1row  = ''; 
$visible2row  = ' ';  //zf
$visible3row  = '';  
$visible4row = ''; //zf
$visible5row  = ''; 
$required1='required';
$required0='';
$visiblecoloryotro = 'hidden';
 
}else if($value == '553' ) {
 $visible1row  = ''; 
$visible2row  = 'hidden';  //zf
$visible3row  = 'hidden';  
$visible4row = 'hidden'; //zf
$visible5row  = 'hidden'; 
 
$visible3 = 'hidden';
$checked = 'checked';
$esservicio = 1;
$visiblenoservicio = 'hidden';
$visiblecoloryotro = 'hidden';
$visiblecodigobarra= 'hidden';
$visible_elemento = '';
$esservicio = 1;
$modal = "ModalServicio";
$visible_input_codigo= 'hidden';
 // $visible = '';
}else {
  $esservicio  = 0;
   
  $checked = '';
}
$modal3 = "modalequiv";
$nombre_marco="livesearch8";
?>

 


<div class="card-body" style=" width: 100%;  height: 100%;overflow-y: auto ;">  
    <label id="" style="font-size: small; font-weight: bold;" <? echo $visiblecoloryotro;?>  >CATEGORIA:</label>  <label id="<? echo  "CAT_ARBOL".$value;?>" style=""  ></label>
    <? 
    $ida= "C551";  
    if($value == '551')
       formprodclasifica($ida, $value,0,0,0);?>
     

    <div class="row form-group">   
        <label id="<? echo  "LBL_PROD_TIPO".$value;?>" style="font-size: x-small;"  hidden ><? echo  $prod_tipo;?></label>
         <label id="<? echo  "LBL_PROD_CODIGO".$value;?>" style="font-size: x-small;" hidden   >0</label>
        <label id="<? echo  "LBL_CAT_ID".$value;?>" style="font-size: x-small;" hidden >0</label>
        <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;" hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3" <? echo $visiblecat;?>><input type="text" id="<? echo  "PROD_CAT_ID".$value;?>" title="CODIGO DE CATEGORIA" onkeyup=""  onclick="nuevoproductoxcat('<? echo $value;?>')"  placeholder="000000000" class="form-control"   <? echo "";//$required0;?> readonly></div>
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;" hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3" <? echo $visible_input_codigo;?> ><input type="text" id="<? echo  "PROD_CODIGO".$value;?>" title="CODIGO DE PRODUCTO" onkeyup=""   placeholder="código..." class="form-control" <? echo $required1;?> ></div>
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;" hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_NOMBRE".$value;?>" title="NOMBRE DEL PRODUCTO"  placeholder="nombre..." class="form-control" disabled required ></div>
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" <? echo $visiblecoloryotro;?> > <? listcolores($value,0);?></div> 
                <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#<? echo $modal;?>" onclick="regvalue(<? echo  $value;?>,'BUSCADOR');openmodal('<? echo $modal;?>')" title="Buscador"> <i class="fas fa-search"></i></button>
               <input type="number" id="<? echo  "PROD_TIPO".$value;?>" title=""  placeholder="peso..." class="form-control" value="" disabled hidden>       
 
    </div>
   
      <!------------------ZF------------------------------------->  
 <div class="row form-group" <? echo $visible2row;?>>
       
     <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-5" ><input type="text" id="<? echo  "PROD_MODELO".$value;?>" title=""  placeholder="PROD_MODELO" class="form-control" disabled ></div>
   
    <div class="col-6 col-sm-4 col-md-4  col-lg-2 form-check">
        <input type="checkbox" id="<? echo  "PROD_LEY18211".$value;?>" title="PROD_LEY18211"  placeholder="" class="form-check-input " disabled >
        <label class="form-check-label" style="font-size: x-small;" >LEY18211</label>
    </div>  
    
    <div class="col-6 col-sm-4 col-md-4  col-lg-2 form-check">
        <input type="checkbox" id="<? echo  "PROD_FABRICADOZF".$value;?>" title="PROD_FABRICADOZF"  placeholder="" class="form-check-input" disabled >
        <label  class="form-check-label" style="font-size: x-small;">FABRICADOZF</label>
    </div>
    <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div>
   
     
 </div> 
  <!------------------------------------------------>   
     <div class="row form-group">
         
         <div class="col-1 col-sm-4 col-md-2 col-lg-12" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-6"><textarea id="<? echo  "PROD_DESCRIPCION".$value;?>" title="DESCRIPCIÓN" rows="1"  placeholder="descipción..." class="form-control" disabled ></textarea></div>
          
         <div class="col-1 col-sm-4 col-md-2 col-lg-3" <? echo $visiblenoservicio;?> hidden> <? listobjmarca($value);?></div>
         <div class="col-1 col-sm-4 col-md-2 col-lg-3" <? echo $visiblenoservicio;?>> <? listobjmedida($value);?></div>
               
         <div class="col-1 col-sm-4 col-md-2 col-lg-3" > <button id="1" class="btn btn-info btn-sm " data-toggle="modal" data-target="#<? echo $modal3;?>" onclick="openmodal('<? echo $modal3;?>');cargar_item2('<? echo $nombre_marco;?>','<? echo $value;?>');;" title="Registros"> <i class="far fa-file-alt"></i></button>  </div>
     </div>    
   <!------------------ZF------------------------------------->     
 <div class="row form-group" <? echo $visible4row;?>>
    <div class="col-1 col-sm-4 col-md-2 col-lg-4" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-5"><input type="text" id="<? echo  "PROD_INFORMACIONADIC".$value;?>" title=""  placeholder="PROD_INFORMACIONADIC" class="form-control" disabled ></div>
    <div class="col-1 col-sm-4 col-md-2 col-lg-4" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "PROD_CODIGOARANCELARIO".$value;?>" title=""  placeholder="CODIGOARANCELARIO" class="form-control" disabled ></div>
  <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#ModalBusqueda2" title="Buscador de pacientes"> <i class="fas fa-search"></i></button>
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"> <? listtipoproducto($value);?></div>    
  </div>
  <!------------------------------------------------------->      
  
  <div class="row form-group" <? echo $visible5row;?>>
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "PROD_PESO_CTROL".$value;?>" title="peso" step="0.1"  min="0" placeholder="peso..." class="form-control" disabled ></div>
                <div class="col-1 col-sm-4 col-md-2 col-lg-3"> <? listobjsmedida($value);?></div> 
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-2"><input type="number" id="<? echo  "PROD_LARGO".$value;?>" title="largo" step="0.1" max="3" min="0" placeholder="lg" class="form-control" disabled ></div>
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-2"><input type="number" id="<? echo  "PROD_ANCHO".$value;?>" title="ancho" step="0.1" max="3" min="0"  placeholder="an" class="form-control" disabled ></div>
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-2" ><input type="number" id="<? echo  "PROD_ALTO".$value;?>" title="alto"  step="0.1" max="3" min="0" placeholder="al" class="form-control" disabled ></div>
     </div>
   
       
 
 
 
    <div class="row form-group" >
           
         <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div>
         <div class="col-6 col-sm-4 col-md-4  col-lg-6" <? echo $visiblecodigobarra;?>>
             <input type="text" id="<? echo  "PROD_CODIGOBARRA".$value;?>" title="CODIGOBARRA"  placeholder="CODIGOBARRA" class="form-control" disabled >
         </div>
         <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "PROD_PRECIO1".$value;?>" title="precio-1" onblur="calculaprecio2(this.value,'<? echo  $value;?>')" placeholder="precio-1" class="form-control" disabled ></div>
        <div class="col-6 col-sm-4 col-md-4  col-lg-3">
        <input type="number" id="<? echo  "PROD_PRECIO2".$value;?>" title="precio-2"  placeholder="precio-2" class="form-control" disabled  >
    </div>
    </div>   
    <div class="row form-group"  <? echo $visible_elemento;?>>
     <div class="col-1 col-sm-4 col-md-2 col-lg-4"  > <?  listobjelemento(0, $value ,8);?></div>
     <div class="col-1 col-sm-4 col-md-2 col-lg-4"  > <? listobjdimension(0, $value ,8);?></div>
     <div class="col-1 col-sm-4 col-md-2 col-lg-4"  > <? listobjestado(0, $value ,8);?></div>
</div>
 
   <div class="row form-group" >
        <div class="col-1 col-sm-4 col-md-2 col-lg-4" > 
            <button type="button" id="<? echo  "BTN_PROD_GRABAR".$value;?>" title="GRABAR" class="btn btn-success" onclick="obtenerdataprod('<? echo $value;?>',<? echo $esservicio;?>)" disabled ><i class="fas fa-save"></i></button>
              <button type="button" id="<? echo  "BTN_PROD_LIMPIAR".$value;?>" title="NUEVO" class="btn btn-success" onclick="limpiaprod('<? echo $value;?>')"  ><i class="far fa-file"></i></button>
                <button type="button" id="<? echo  "BTN_PROD_ELIMINAR".$value;?>" title="ELIMINAR" class="btn btn-danger" onclick="eliminarprod('<? echo $value;?>')" disabled ><i class="fas fa-trash-alt"></i></button>
           
              <button id="<? echo  "BTN_MSERVICE".$value;?>" class="btn btn-info" data-toggle="modal" data-target="#Modalprecio" onclick="extraerdata('<? echo $value;?>');cleamcampo();" title="Modulo de precio de servicio" <? echo $visible_elemento;?> disabled> <i class="fas fa-search"  ></i></button>
              
        </div>
       <div class="col-6 col-sm-4 col-md-4  col-lg-8 form-check" <? echo $visiblecat;?>>
         
        <label class="form-check-label" style="font-size: x-small;" >
             <input type="checkbox" id="<? echo  "GENERA_CODIGO".$value;?>" title="GENERA CODIGO DE PRODUCTO"  placeholder="" class="form-check-input "  checked> 
            GENERA CODIGO DE PRODUCTO</label>
        <label class="form-check-label" style="font-size: x-small;" >
            <input type="checkbox" id="<? echo  "SERVICIO".$value;?>" title="GENERA SERVICIO"  placeholder="" class="form-check-input "  <? echo $checked;?> hidden > 
             </label>
         
    </div> 
   </div>

  
  
   </div>       

<?}
?>

