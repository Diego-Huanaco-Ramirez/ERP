<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formingresoitem($value){ $hidden='hidden'; 
if($value == '1') 
  $visible = 'hidden';
else 
  $visible = '';

?>

 

     
   <div class="card-body " style=" width: 100%;   ;overflow-y: auto ;">  
  <label style="font-size: x-small;"  >INGRESO DE ITEM PRODUCTOS/SERVICIOS</label>
   <div class="row form-group">
       
                    <div class="col-1 col-sm-4 col-md-2 col-lg-2"> <? listobjcategoria(1);?></div>
                    <div class="col-1 col-sm-4 col-md-2 col-lg-2"> <? listobjsubcategoria(1);?></div>
                     <div class="col-1 col-sm-4 col-md-2 col-lg-3"> <? listobjsubcategoria(1);?></div>
                    <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4" ><input type="text" id="<? echo  "PROD_CODIGO".$value;?>" title=""  placeholder="PROD_CODIGO" class="form-control"  ></div>
                     <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#ModalBusqueda2" title="Buscador de pacientes"> <i class="fas fa-search"></i></button>
               
</div>
   
 <div class="row form-group">
         
          <!-- <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_UMEDIDA_CANTIDAD".$value;?>" title=""  placeholder="PROD_UMEDIDA_CANTIDAD" class="form-control"  ></div>-->
    <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-6"><input type="text" id="<? echo  "PROD_NOMBRE".$value;?>" title=""  placeholder="PROD_NOMBRE" class="form-control"  ></div>
        <!--   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_COLOR".$value;?>" title=""  placeholder="PROD_COLOR" class="form-control"  ></div>-->
    <div class="col-1 col-sm-4 col-md-2 col-lg-3"> <? //listcolores();?></div>   
    <div class="col-1 col-sm-4 col-md-2 col-lg-3"> <? //listobjmarca(1);?></div>
</div> 
  <div class="row form-group">
      <div class="col-1 col-sm-4 col-md-2 col-lg-12" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-12"><textarea id="<? echo  "PROD_DESCRIPCION".$value;?>" title=""  rows="1" placeholder="PROD_DESCRIPCION" class="form-control"  ></textarea></div>
   </div> 
   
   
  <!--
   <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "ING_ESTADO_PAGO".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:short"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "ING_ESTADO_DOC".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:short"  ></div>
   -->
   
  
   
  <div class="row form-group">
       <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "VALOR_COMPRA".$value;?>" title=""  placeholder="precio..." class="form-control" type="xsd:double"  ></div>
      <div class="col-1 col-sm-4 col-md-2 col-lg-3"> <? listobjmedida(1);?></div>
      <!--  <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_UMEDDIDA_EQUIV".$value;?>" title=""  placeholder="unidad " class="form-control" type="xsd:double"  ></div>-->
      <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "ING_CANTIDAD1".$value;?>" title=""  placeholder="cantidad..." class="form-control" type="xsd:double"  ></div>
       <div class="col-1 col-sm-4 col-md-2 col-lg-2" ><label style="font-size: x-small;">ING_ESTADO_INGRESO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-1"><input type="checkbox" id="<? echo  "ING_ESTADO_INGRESO".$value;?>" title=""  placeholder="ING_ESTADO_INGRESO" class="form-control" type="xsd:short"  ></div>

  </div>
    <!-----------------------------------------------------------> 
 
   <div class="row form-group" <? echo $visible;?>  >
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "ING_CANTIDAD_BULTO".$value;?>" title=""  placeholder="ING_CANTIDAD_BULTO" class="form-control" type="xsd:double"  ></div>
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "ING_VALOR1".$value;?>" title=""  placeholder="ING_VALOR1" class="form-control" type="xsd:double"  ></div>
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "ING_VALOR2".$value;?>" title=""  placeholder="ING_VALOR2" class="form-control" type="xsd:double"  ></div>
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "VALOR_VIU".$value;?>" title=""  placeholder="VALOR_VIU" class="form-control" type="xsd:double"  ></div>
  </div> 
   
  <div class="row form-group" <? echo $visible;?> >
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "CIF_UNITARIO".$value;?>" title=""  placeholder="CIF_UNITARIO" class="form-control" type="xsd:double"  ></div>
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "COSTO_REAL".$value;?>" title=""  placeholder="COSTO_REAL" class="form-control" type="xsd:double"  ></div>
    <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_UNIDAD_PESO".$value;?>" title=""  placeholder="ING_UNIDAD_PESO" class="form-control" type="xsd:double"  ></div>
      <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "ING_PESO".$value;?>" title=""  placeholder="ING_PESO" class="form-control" type="xsd:double"  ></div>
       
  </div>   
   <div class="row form-group" <? echo $visible;?>> 
      <div class="col-1 col-sm-4 col-md-2 col-lg-3" ><label style="font-size: x-small;">CÓDIGO ZETA</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-6"><input type="text" id="<? echo  "ING_ZETA".$value;?>" title=""  placeholder="ING_ZETA" class="form-control" type="xsd:string"  ></div>
   
  </div>  
   
  <div class="row form-group" <? echo $visible;?> >
   <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_ITEM".$value;?>" title=""  placeholder="ING_ITEM" class="form-control" type="xsd:long"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2"hidden ><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_BODEGA".$value;?>" title=""  placeholder="ING_BODEGA" class="form-control" type="xsd:int"  ></div>
  
  </div> 
   
   

   </div>       

<?}
?>

