<?PHP
require_once('../clases/cls_proc_equivalencia_unidad.php');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function listobjequivalencia($value, $opc){
    if($opc){
        $funcion = 'showResult(this.value, 5, 3)';
        $disabled = '';
    }else
         $disabled = 'disabled';
    ?>
 
<select id="<? echo  "PROD_EQUIV_ID".$value;?>" onclick="selobjeto(this,'<? echo $value;?>');" style="font-size: medium; font-weight: bold;" title="EQUIVALENCIA" onchange="" class="form-control col-lg-12 col-12 col-sm-12 sinpadding " <? echo  $disabled;?>  >
                                        <? objequival(1);?>
    </select>
<?}
function objequival($opc){
    if($opc)
        $direccion = "EQUIVALENCIA";
    else 
        $direccion = "";
    
    
   $nodo = new cls_proc_equivalencia_unidad();
 //  $nodo->setcat_tipo(1);//tipo categoria producto
   unset($nodo->arrprod_equiv);
     // $nodo->selectgeneral();
   $direccion = "EQUIVALENCIA";
  //  if($opc == 1 || $opc == 2){
      $html= $html."<option value='0' selected >".$direccion."</option>";
      $nodo->selectdata();
       $selected= '';
   // } 
        //  $selected= '';
    if(count($nodo->arrprod_equiv) > 0){  
      
       for($i=0;$i<count($nodo->arrprod_equiv);$i++){   
         
            $html= $html."<option value=".$nodo->arrprod_equiv[$i]['prod_equiv_id']." valor=".$nodo->arrprod_equiv[$i]['prod_equiv_nombre'].">"
                    .$nodo->arrprod_equiv[$i]['prod_equiv_nombre']."</option>";   
         
                
       } 
      
    }else
        $html= $html."<option value='0' value2='0' > << Seleccione</option>";
         // echo "Sin registros categoria..";
    
        $nodo=null;
      echo $html; 
    ?>


   
<?}

function objavisual12($opc){
    if($opc)
        $direccion = "SISTEMA ";
    else 
        $direccion = "SISTEMA";
    ?>
 
<option value="0" ><? echo $direccion;?></option>
      <option value="1">METRO-KILO</option>
      <option value="2">CENT-GRAMO</option>
       
     
<?}
//class="form-control col-lg-10 col-12 col-sm-12 sinpadding"
function listobjsmedida($value){?>
    <select id="<? echo  "PROD_UMEDIDA_CANT".$value;?>" style="font-size: medium; font-weight: bold;" title="SISTEMA DE MEDIDA" onchange="" class="form-control col-lg-12 col-12 col-sm-12 sinpadding " disabled >
                                        <? objavisual12(1);?>
    </select>
<?}


function objavisual1($opc){
    if($opc)
        $direccion = "MEDIDA ";
    else 
        $direccion = "MEDIDA";
    ?>
 
      <option value="0" ><? echo $direccion;?></option>
      <option value="1" selected >METRO</option>
      <option value="2" selected >UNIDAD</option>
       
     
<?}
//class="form-control col-lg-10 col-12 col-sm-12 sinpadding"
function listobjmedida($value){?>
    <select id="<? echo  "PROD_SIST_MEDIDA".$value;?>" style="font-size: medium; font-weight: bold;" title="UNIDAD DE MEDIDA UNITARIA" onchange="" class="form-control col-lg-12 col-12 col-sm-12 sinpadding " disabled >
              <? objavisual1(1);?>
    </select>
      
     
<?   }

?>