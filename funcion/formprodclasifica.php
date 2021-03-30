<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formprodclasifica($value,$value2,$size,$tipo,$listado){ $visible='hidden'; 
if(isset($value2))
  $GNRALvalue= $value2;
else {
   $GNRALvalue== "";
}

if($tipo==1 || $tipo==2)
 $visible2='hidden'; 
else {
 $visible2= "";
}
?>



     
   <div class="card-body" style=" width: 100%; height: 100%;  overflow-y: auto ;">  

   <div class="row form-group-sm" <? echo $visible2;?>>
       
       <div class="col-4 col-sm-4 col-md-2 col-lg-4" ><label style="font-size: medium; font-weight: bold;">GENERAL</label> </div>
        <div class="col-4 col-sm-4 col-md-2 col-lg-4" ><label style="font-size: medium;font-weight: bold;">SUB CATEGORIA</label> </div>
         <div class="col-4 col-sm-4 col-md-2 col-lg-4" ><label style="font-size: medium;font-weight: bold;">S-SUB CATEGORIA</label> </div>
   </div>
   <div class="row form-group-sm">
       <label id="<? echo  "LBL_CAT_IDB".$value2;?>" style="font-size: x-small;" hidden   >0</label>  
       <div class="col-6 col-sm-4 col-md-2 col-lg-4" ><label id="<? echo  "CANT_CATG".$value;?>" style="font-size: medium; font-weight: bold;"><? cantcategoriagneral();?></label> </div>
       <div class="col-6 col-sm-4 col-md-2 col-lg-4" ><label id="<? echo  "CANT_CATSB".$value;?>" style="font-size: medium;font-weight: bold;"></label> </div>
       <div class="col-4 col-sm-4 col-md-2 col-lg-4" >
           <label id="<? echo  "CANT_CATSBSB".$value;?>" style="font-size: medium;font-weight: bold;"></label>
           
       </div>
    
</div> 
   <?  
   if($value == '1'){ ?>
    <div class="row form-group" >
        <div class="col-3 col-sm-4 col-md-2 col-lg-4"hidden><label style="font-size: x-small;">CATEG. GENERAL</label> 
        </div>
        <div class="col-4 col-sm-4 col-md-4  col-lg-4">
            <input type="radio" value="" valor="1"  onclick="putoption('1','<? echo  "CAT_NOMBRE_G".$value;?>',this.value)" name="rd1"  id="<? echo  "CHKCAT_NOMBRE_G".$value;?>" title="INGRESE NUEVA CATEGORIA GENERAL + ENTER" list="<? echo  "SEL_CATG".$value;?>"  placeholder="CATEGORIA..." class="form-check-input xx-small" type="xsd:string"  disabled >
        </div>
          <div class="col-3 col-sm-4 col-md-2 col-lg-4" hidden><label style="font-size: x-small;">SUB CATEG.</label> </div>
          
          <div class="col-4 col-sm-4 col-md-4  col-lg-4">
              <input type="radio" value="" valor="2" onclick="putoption('2','<? echo  "CAT_NOMBRE_SB".$value;?>',this.value)" name="rd1" id="<? echo  "CHKCAT_NOMBRE_SB".$value;?>" title="INGRESE NUEVA SUB CATEGORIA + ENTER"   placeholder="CATEGORIA..." class="form-check-input  xx-small" type="xsd:string"  disabled >
          </div>
         <div class="col-3 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">SUB CATEG.</label> </div>
         
         <div class="col-4 col-sm-4 col-md-4  col-lg-4">
             <input type="radio" value="" valor="3" onclick="putoption('3','<? echo  "CAT_NOMBRE_SBSB".$value;?>',this.value)" name="rd1" id="<? echo  "CHKCAT_NOMBRE_SBSB".$value;?>" title="INGRESE NUEVA SUB  SUB CATEGORIA + ENTER"   placeholder="CATEGORIA..." class="form-check-input xx-small" type="xsd:string" disabled >
         </div>
      
  
  </div> 
   <div class="row form-group" >
         <div class="col-4 col-sm-4 col-md-2 col-lg-4" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4" hidden><input type="text" id="<? echo  "CAT_ID".$value;?>" title=""  placeholder="CAT_ID" class="form-control"  type="xsd:long"  ></div>
         <div class="col-4 col-sm-4 col-md-2 col-lg-4"hidden><label style="font-size: x-small;">CATEG. GENERAL</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "CAT_NOMBRE_G".$value;?>"  list="<? echo  "DTL_CATG".$value;?>" title="INGRESE NUEVA CATEGORIA GENERAL + ENTER" onkeyup="grabacategoria(event,1,this,2,'','<? echo  "SEL_CATG".$value;?>','<? echo  $value;?>');loadmatrizcat('<? echo  $value;?>');" placeholder="CATEGORIA..." class="form-control" type="xsd:string"  ></div>
          <div class="col-4 col-sm-4 col-md-2 col-lg-4" hidden><label style="font-size: x-small;">SUB CATEG.</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "CAT_NOMBRE_SB".$value;?>"   title="INGRESE NUEVA SUB CATEGORIA + ENTER"  onkeyup="grabacategoria(event,2,this,2,'<? echo  "SEL_CATG".$value;?>','<? echo  "SEL_CATSB".$value;?>','<? echo  $value;?>');loadmatrizcat('<? echo  $value;?>');" onfocus="regcategoria(2,this,1,'','<? echo  "SEL_CATG".$value;?>')" placeholder="CATEGORIA..." class="form-control" type="xsd:string"  ></div>
         <div class="col-4 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">SUB CATEG.</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "CAT_NOMBRE_SBSB".$value;?>"  title="INGRESE NUEVA SUB  SUB CATEGORIA + ENTER"  onkeyup="grabacategoria(event,3,this,2,'<? echo  "SEL_CATSB".$value;?>','<? echo  "SEL_CATSBSB".$value;?>','<? echo  $value;?>');loadmatrizcat('<? echo  $value;?>');" onfocus="regcategoria(3,this,1,'','<? echo  "SEL_CATSB".$value;?>')" placeholder="CATEGORIA..." class="form-control" type="xsd:string"  ></div>
      
 <!-- <div class="col-4 col-sm-4 col-md-2 col-lg-2"><label style="font-size: x-small;">CAMPO</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "SUB_CAT".$value;?>" title=""  placeholder="SUB_CAT" class="form-control" type="PROC.CATEGORIA_PRODUCTO" minOccurs="0" maxOccurs="unbounded"  ></div>-->
        <!--<div class="col-4 col-sm-4 col-md-2 col-lg-4"> <? listobjcategoriagneral(1,$value);?></div>-->
        <div class="col-4 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4" hidden><input type="text" id="<? echo  "CLASIFICACION".$value;?>" title=""  placeholder="CLASIFICACION" class="form-control" type="PROC.PRODUCTO" minOccurs="0" maxOccurs="unbounded"  ></div>
  
  </div> 
 
   <? } ?>
   
  
   
   
   
   <div class="row form-group">
        <div class="col-4 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4" hidden><input type="text" id="<? echo  "CAT_ID".$value;?>" title=""  placeholder="CAT_ID" class="form-control" type="xsd:long"  ></div>
        <!-- <div class="col-4 col-sm-4 col-md-2 col-lg-2"><label style="font-size: x-small;">CAMPO</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "SUB_CAT".$value;?>" title=""  placeholder="SUB_CAT" class="form-control" type="PROC.CATEGORIA_PRODUCTO" minOccurs="0" maxOccurs="unbounded"  ></div>-->
        <div class="col-6 col-sm-4 col-md-2 col-lg-4"> <? listobjcategoriagneral(1,$value,$GNRALvalue,$size,$listado);?></div>
        <div class="col-6 col-sm-4 col-md-2 col-lg-4"> <? listobjsbcategoriagneral(2,$value,$GNRALvalue,$size,$listado);?></div>
        <div class="col-12 col-sm-4 col-md-2 col-lg-4" hidden> <? listobjsbsbcategoriagneral(2,$value,$GNRALvalue,$size,$listado);?></div>
         <div class="col-12 col-sm-4 col-md-2 col-lg-4"> <? listcolores($value,4);?></div>
        <div class="col-4 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-4 col-sm-4 col-md-4  col-lg-4" hidden><input type="text" id="<? echo  "CLASIFICACION".$value;?>" title=""  placeholder="CLASIFICACION" class="form-control" type="PROC.PRODUCTO" minOccurs="0" maxOccurs="unbounded"  ></div>
 
  </div>  

<div class="row form-group-sm" <? echo $visible2;?>>
  <div class="col-2 col-sm-4 col-md-2 col-lg-1" > 
           <button id="<? echo  "btnlimpiacat".$value;?>" type="button" title="Limpiar categorias" class="btn btn-success btn-sm" onclick="limpiacat('<? echo $value;?>')"  ><i class="fas fa-eraser"></i></button>
  </div>
   <div class="col-2 col-sm-4 col-md-2 col-lg-1" > 
       <button id="<? echo  "btneditacat".$value;?>" type="button" title="Editar categorias"  class="btn btn-success btn-sm" onclick="editarcat()" disabled  ><i class="fas fa-edit"></i></button>
  </div>
   <div class="col-2 col-sm-4 col-md-2 col-lg-1" > 
             <button id="<? echo  "btneliminarcat".$value;?>" type="button" title="Eliminar categorias"  class="btn btn-danger btn-sm" onclick="eliminarcat()" disabled  ><i class="fas fa-trash-alt"></i></button>
  </div>
</div>
   
   <div class="row form-group" hidden >
        <div class="col-4 col-sm-4 col-md-2 col-lg-4" >  </div>
        <div class="col-4 col-sm-4 col-md-2 col-lg-4" >  </div>
         <div class="col-4 col-sm-4 col-md-2 col-lg-1" > 
             <button type="button" class="btn btn-success" onclick="limpiacat('<? echo $value;?>')"  ><i class="fas fa-eraser"></i></button>
         </div>
      
   </div>
   
   </div>       

<?}
?>

