<?php
require_once('../clases/cls_telas_colores.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function listcolores($value, $opc){
    if($opc == 1){
        $funcion = 'showResult(this.value, 5, 3)';
        $funcion2 = '';
        $disabled = '';
   
    }else if($opc == 2){
        $funcion = '';
        $funcion2 =  'selobjeto(this,'.$value.')';
        $disabled = '';    
    }else if($opc == 3){
      $funcion = 'showResult(this.value, 5, 4)';
        $funcion2 = '';
        $disabled = ''; 
     }else if($opc == 4){
      $funcion = 'showResult(this.value, 5, 6)';
        $funcion2 = '';
        $disabled = '';    
    }else
         $disabled = 'disabled';
    ?>
 
<select class="select-css" id="<? echo  "COLOR_ID".$value;?>" onclick="<? echo  $funcion2;?>" style="font-size: medium; font-weight: bold;" title="COLORES" 
        onchange="<? echo  $funcion;?>" class="form-control col-lg-12 col-12 col-sm-12 sinpadding " <? echo  $disabled;?>  >
                                        <? objcolor(1);?>
    </select>
<?}
function objcolor_diagrama(){    
    if($opc)
        $direccion = "COLOR";
    else 
        $direccion = "";
    
    
   $nodo = new cls_telas_colores();
 //  $nodo->setcat_tipo(1);//tipo categoria producto
   unset($nodo->arrcolor);
     // $nodo->selectgeneral();
   $direccion = "COLOR";
 
      $html= $html."<div>";
      $nodo->selectdata();
       $selected= '';
   // } 
        //  $selected= '';
    if(count($nodo->arrcolor) > 0){  
      
       for($i=0;$i<count($nodo->arrcolor);$i++){   
     //    echo $nodo->arrcolor[$i]['color_html'];
          //  $html= $html."<option value=".$nodo->arrcolor[$i]['color_id']."  style=color:".$nodo->arrcolor[$i]['color-html']." valor=".$nodo->arrcolor[$i]['color_nombre'].">"
            //        .$nodo->arrcolor[$i]['color_nombre']."</option>";   
         $html= $html."<button class='minavatar' onclick='showResult(".$nodo->arrcolor[$i]['color_id'].", 5, 6)'  style='background:".$nodo->arrcolor[$i]['color_html']."'></button>"; 
                
       } 
      
    }else
        $html= $html."</div>";
         // echo "Sin registros categoria..";
    
        $nodo=null;
      echo $html; 
    ?>


   
<?}
function objcolor($opc){
    if($opc)
        $direccion = "COLOR";
    else 
        $direccion = "";
    
    
   $nodo = new cls_telas_colores();
 //  $nodo->setcat_tipo(1);//tipo categoria producto
   unset($nodo->arrcolor);
     // $nodo->selectgeneral();
   $direccion = "COLOR";
  //  if($opc == 1 || $opc == 2){
      $html= $html."<option value='0' selected >".$direccion."</option>";
      $nodo->selectdata();
       $selected= '';
   // } 
        //  $selected= '';
    if(count($nodo->arrcolor) > 0){  
      
       for($i=0;$i<count($nodo->arrcolor);$i++){   
         
            $html= $html."<option value=".$nodo->arrcolor[$i]['color_id']."  style=color:".$nodo->arrcolor[$i]['color_html']." valor=".$nodo->arrcolor[$i]['color_nombre'].">"
                    .$nodo->arrcolor[$i]['color_nombre']."</option>";   
         
                
       } 
      
    }else
        $html= $html."<option value='0' value2='0' > << Seleccione</option>";
         // echo "Sin registros categoria..";
    
        $nodo=null;
      echo $html; 
    ?>


   
<?}

function listtipoproducto($value){?>
    <select id="<? echo  "PROD_TIPO".$value;?>" style="font-size: medium; font-weight: bold;" title="OD" onchange="medida(0)" class="form-control col-lg-12 col-12 col-sm-12 sinpadding " disabled >
                                        <? objtipoproducto(1);?>
    </select>
<?}
function objtipoproducto($opc){
    if($opc)
        $direccion = "TIPO";
    else 
        $direccion = "";
    ?>
 
<option value="0" ><? echo $direccion;?></option>
      <option value="A">ACTIVO FIJO</option>
      <option value="M">MERCADERIA</option>
      <option value="S">SERVICIO</option>
     
<?}
