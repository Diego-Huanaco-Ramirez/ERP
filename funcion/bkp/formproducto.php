<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formproducto($value){ $hidden='hidden'; 
if($value == '1') 
  $visible = 'hidden';
else 
  $visible = '';
?>

 


   <div class="card-body" style=" width: 100%;  height: 80%;overflow-y: auto ;">  
         <? $ida= "11";  formprodclasifica($ida, 1);?>
        <div class="row form-group">
               
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3" ><input type="text" id="<? echo  "PROD_CODIGO".$value;?>" title="" onkeyup="grabacodigo(event,this,'<? echo $value;?>')"   placeholder="PROD_CODIGO" class="form-control"  ></div>
                <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_NOMBRE".$value;?>" title=""  placeholder="PROD_NOMBRE" class="form-control"  ></div>
       <div class="col-1 col-sm-4 col-md-2 col-lg-2"> <? listobjmedida(1);?></div>
      <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "PROD_PRECIO1".$value;?>" title=""  placeholder="precio..." class="form-control"  ></div>
         <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#ModalBusqueda2" title="Buscador de pacientes"> <i class="fas fa-search"></i></button>
             
       </div>
       
  <div class="row form-group" hidden>
           
    <div class="col-1 col-sm-4 col-md-2 col-lg-2" ><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3" <? echo $visible;?>><input type="text" id="<? echo  "PROD_CODIGOBARRA".$value;?>" title=""  placeholder="PROD_CODIGOBARRA" class="form-control"  ></div>
 
 </div>    

  
    <div class="row form-group">
       <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="number" id="<? echo  "PROD_PESO_CTROL".$value;?>" title=""  placeholder="peso..." class="form-control"  ></div>
       <div class="col-1 col-sm-4 col-md-2 col-lg-3"> <? listobjsmedida();?></div> 
       
   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-2"><input type="number" id="<? echo  "PROD_LARGO".$value;?>" title=""  placeholder="LG" class="form-control"  ></div>
        <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-2"><input type="number" id="<? echo  "PROD_ANCHO".$value;?>" title=""  placeholder="AN" class="form-control"  ></div>
        <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-2"><input type="number" id="<? echo  "PROD_ALTO".$value;?>" title=""  placeholder="AL" class="form-control"  ></div>
 
    </div>
       
       
       
  <!------------------------------------------------------->     
  <div class="row form-group"  <? echo $visible;?> >
     <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_MODELO".$value;?>" title=""  placeholder="PROD_MODELO" class="form-control"  ></div>
     <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_TIPO".$value;?>" title=""  placeholder="PROD_TIPO" class="form-control"  ></div>
    
 </div> 
 
   
 <div class="row form-group" <? echo $visible;?>>
       <div class="col-1 col-sm-4 col-md-2 col-lg-12" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-12"><input type="text" id="<? echo  "PROD_INFORMACIONADIC".$value;?>" title=""  placeholder="PROD_INFORMACIONADIC" class="form-control"  ></div>
     
  </div>
       
 <div class="row form-group" <? echo $visible;?>>
       
        <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_PRECIO2".$value;?>" title=""  placeholder="PROD_PRECIO2" class="form-control"  ></div>
        <div class="col-1 col-sm-4 col-md-2 col-lg-2" ><label style="font-size: x-small;" >PROD_LEY18211</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-1"><input type="checkbox" id="<? echo  "PROD_LEY18211".$value;?>" title=""  placeholder="PROD_LEY18211" class="form-control"  ></div>
        <div class="col-1 col-sm-4 col-md-2 col-lg-2" ><label style="font-size: x-small;">PROD_FABRICADOZF</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-1"><input type="checkbox" id="<? echo  "PROD_FABRICADOZF".$value;?>" title=""  placeholder="PROD_FABRICADOZF" class="form-control"  ></div>
        <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_CODIGOARANCELARIO".$value;?>" title=""  placeholder="PROD_CODIGOARANCELARIO" class="form-control"  ></div>
 </div> 
 
 
   
  <div class="row form-group">
       
   </div>
  <div class="row form-group" hidden>
        
       <!-- <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_SIST_MEDIDA".$value;?>" title=""  placeholder="PROD_SIST_MEDIDA" class="form-control"  ></div>-->
       
  </div> 
  <div class="row form-group">
         
          <!-- <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_UMEDIDA_CANTIDAD".$value;?>" title=""  placeholder="PROD_UMEDIDA_CANTIDAD" class="form-control"  ></div>-->
         <!--   <div class="col-1 col-sm-4 col-md-2 col-lg-2" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-3"><input type="text" id="<? echo  "PROD_COLOR".$value;?>" title=""  placeholder="PROD_COLOR" class="form-control"  ></div>-->
       <div class="col-1 col-sm-4 col-md-2 col-lg-12" hidden><label style="font-size: x-small;"hidden >CAMPO</label> </div><div class="col-6 col-sm-4 col-md-4  col-lg-8"><textarea id="<? echo  "PROD_DESCRIPCION".$value;?>" title="" rows="1"  placeholder="PROD_DESCRIPCION" class="form-control"  ></textarea></div>
     
      <div class="col-1 col-sm-4 col-md-2 col-lg-2"> <? listcolores();?></div>   
          <div class="col-1 col-sm-4 col-md-2 col-lg-2"> <? listobjmarca(1);?></div>
       
          
  </div> 
   <div class="row form-group">
        <div class="col-1 col-sm-4 col-md-2 col-lg-3" > 
             <button type="button" class="btn btn-success" onclick="GRABAR('<? echo $value;?>')"  >GRABAR</button>
         </div>
   </div>
  
  
  
   </div>       

<?}
?>

