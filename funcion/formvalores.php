<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function item($item,$arregloDIM,$titulos,$titulo){
  
    ?>
 
 <div id="<? echo  "titulo".$item;?>" class=" row d-flex justify-content-center inner alert alert-success" style=" width: 95%; border-style: solid; border-color: orange; border-radius: 5px; border-width: 1px; padding: 5px">
 
     
 <label class="form-contro col-sm-3 col-3 col-lg-2 " style="text-align: left;font-size: larger; font-weight: bold;"><? echo  $titulo;?></label>
 <button id="<? echo  "btnvalor".$item;?>" type="button" title="valor x item"  class="btn btn-info btn-sm col-sm-1 col-1 col-lg-1" onclick="valorcampoxitem(<? echo  $item;?>)"  ><i class="far fa-edit"></i></button>
     
 <button id="<? echo  "btnlimpia".$item;?>" type="button" title="grabar encuesta"  class="btn btn-success btn-sm col-sm-1 col-1 col-lg-1" onclick="cleamcampoxitem(<? echo  $item;?>)"  ><i class="fas fa-eraser"></i></button>
     
 <label class="form-contro col-sm-3 col-3 col-lg-2" style="text-align: center;font-size: larger; font-weight: bold;"><? echo  $titulos[0];?></label>
 <label class="form-contro col-sm-3 col-3 col-lg-2" style="text-align: center;font-size: larger; font-weight: bold;"><? echo  $titulos[1];?></label>
 <label class="form-contro col-sm-3 col-3 col-lg-2" style="text-align: center;font-size: larger; font-weight: bold;"><? echo  $titulos[2];?></label>
 </div>

<? 
   $bandera1 = false;
   $clase1 = "form-contro col-sm-8 col-8 col-lg-4";
   $hidden = "";
   $j=0; $n=0;
   ?> <div id="<? echo  "item".$item;?>" class="item"> <? 
for($i=0;$i < count($arregloDIM);$i++){
   $j= $i+1;
    $n= $n+1;
/*  if($i == (count($arreglo1)-1)){
           $bandera1 = true;
           $clase1 = "form-contro col-sm-4 col-12 col-lg-3";
           $hidden = "hidden";
    }*/?>
 <div  class=" row d-flex justify-content-center dimdv inner" style="height: 50px;width: 95%;border-style: solid; border-color: orange; border-radius: 5px; border-width: 1px; padding: 5px">
        <label class="<? echo  $clase1;?>" style="text-align: left;font-size: larger; font-weight: bold;"><? echo  $arregloDIM[$i];?></label>
       
        <div class="radio col-sm-4 col-3 col-lg-2 h-25 d-inline-block" <? echo  $hidden;?>>
            <input class="form-control alert alert-info" type="number" maxlength = "9" min="0" max="" id="<? echo  "itemestado1".$n.$item;?>" name="<? echo  $n."-1-".$item;?>" disabled >
        </div>
        <div class="radio col-sm-4 col-3 col-lg-2" <? echo  $hidden;?>>
            <input class="form-control alert alert-warning" type="number" maxlength = "9" min="0" max="" id="<? echo  "itemestado2".$n.$item;?>" name="<? echo  $n."-2-".$item;?>" disabled >
        </div>
        <div class="radio col-sm-4 col-3 col-lg-2" <? echo  $hidden;?>>
            <input class="form-control alert alert-danger" type="number" maxlength = "9" min="0" max="" id="<? echo  "itemestado3".$n.$item;?>" name="<? echo  $n."-3-".$item;?>" disabled >
        </div>
        <? if($bandera1){?>  
       
       <? }?>
    </div>
<? }
?> </div> <? 
}
function formulario($value) {
    $hidden = 'hidden';
    $arreglodimension =  array("PEQUEÑO", 
  
"MEDIANO", "GRANDE");
    
    $arregloVEHICULO =  array("AUTO", 
  
"CAMION", "CAMIONETA");
 
  
 
   
     $arregloESTADO=  array("REGULAR",
"SUCIO",
"MUY SUCIO" 
 
 
);
      $nodo = new cls_servicio_elemento();
   $nodo->selectdata();
    $cantidad = count($nodo->arrelemento);
    ?>
<div class="row form-group">
     <div class="col-6 col-sm-6 col-md-6 col-lg-6" > 
             <button id="<? echo  "btngrabarUP".$value;?>" type="button" title="grabar encuesta"  class="btn btn-success" onclick="registra(<? echo  $cantidad;?>,'<? echo  $value;?>')" disabled >GRABAR</button>
     <button id="<? echo  "btnlimpia2".$value;?>" type="button" title="grabar encuesta"  class="btn btn-success" onclick="cleamcampo()" disabled>LIMPIAR</button>
     
     </div> 
</div>
     
    <div class="row form-group"></div>
  
    
 
    
<?

    if( $cantidad > 0){  
      
        for($i=0;$i< $cantidad;$i++){   
            $n= $i+1;
           item($n,$arreglodimension,$arregloESTADO,$nodo->arrelemento[$i]['selem_maquina']);
  }
   }    
?>

 

    
   
    <div class="row d-flex justify-content-center  " style="border-style: solid; border-color: orange; border-radius: 5px; border-width: 1px; padding: 5px">
        
     <div class="col-6 col-sm-6 col-md-6 col-lg-6" > 
            <button id="<? echo  "btngrabarDOWN".$value;?>" type="button" title="grabar encuesta"  class="btn btn-success" onclick="registra();"  disabled  >GRABAR</button>
            
            
      </div>
    </div>
    
<? } ?>