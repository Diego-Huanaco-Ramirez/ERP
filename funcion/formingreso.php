<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formingreso($value){ $hidden='hidden';
if($value == '1') 
  $visible = 'hidden';
else 
  $visible = '';
?>

 

     
   <div class="card-body" style=" width: 100%;   ;overflow-y: auto ;">  

   <label style="font-size: x-small;"  >DATOS PRINCIPALES DEL INGRESO</label>
       
  <div class="row form-group">
       <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#Modalproveedor" title="Buscador de proveedor"> <i class="fas fa-search"></i></button>
               
     <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROV_RUT".$value;?>" title=""  placeholder="99999999" class="form-control" type="xsd:int"  ></div>
     <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-1"><input type="text" id="<? echo  "PROV_RUTDIG".$value;?>" title=""  placeholder="K" class="form-control" type="xsd:int"  ></div>
      <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-6"><input type="text" id="<? echo  "PROV_NOMBRE".$value;?>" title=""  placeholder="nombre.." class="form-control" type="xsd:long"  ></div>
    <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#Modalordencompra" title="Buscador de orden compra"> <i class="fas fa-search"></i></button>
       
  </div>  
   <div class="row form-group">
       <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="number" id="<? echo  "ING_NUMERODOC".$value;?>" title=""  placeholder="ndoc..." class="form-control" type="xsd:int"  ></div>
     <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "ING_TIPODOC".$value;?>" title=""  placeholder="tipo doc.." class="form-control" type="xsd:int"  ></div>
    <!-- <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_CORRELATIVO".$value;?>" title=""  placeholder="correlativ.." class="form-control" type="xsd:long"  ></div>-->
     <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="date" id="<? echo  "ING_FECHADOC".$value;?>" title=""  placeholder="fecha..." class="form-control" type="xsd:date"  ></div>
 
  </div>  
   <div class="row form-group" hidden>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_BODEGA_REC".$value;?>" title=""  placeholder="bodega..." class="form-control" type="xsd:double"  ></div>
              
  </div>
    <div class="row form-group">
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "ING_NETO".$value;?>" title=""  placeholder="neto..." class="form-control" type="xsd:double"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "ING_TOTAL".$value;?>" title=""  placeholder="total.." class="form-control" type="xsd:double"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-4"><input type="text" id="<? echo  "ING_IVA".$value;?>" title=""  placeholder="iva.." class="form-control" type="xsd:double"  ></div>
    
  </div>     
    
  <div class="row form-group" <? echo $visible;?> >
    <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_FECHAVISACION".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:date"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_NUMEROVISACION".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:int"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_MONEDA".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:int"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_TIPODECAMBIO".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:double"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_TIPODOCSVE".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:int"  ></div>
     
  </div>  
    
  
  <div class="row form-group" <? echo $visible;?> >
    <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_CIFTOTAL".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:double"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_COSTOTOTAL".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:double"  ></div>
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;">CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "ING_VIUTOTAL".$value;?>" title=""  placeholder=".." class="form-control" type="xsd:double"  ></div>
   
       
  </div> 
 
   
   
   
   </div>       

<?}
?>

