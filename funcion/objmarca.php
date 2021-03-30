<?PHP
require_once('../clases/cls_proc_marca.php');

function objavisual($opc){
    if($opc)
        $direccion = "MARCA";
    else 
        $direccion = "MARCA";
    ?>
 
<option value="0" ><? echo $direccion;?></option>
      <option value="1">marca1</option>
      <option value="2">marca2</option>
      <option value="3">marca3</option>
     
<?}
//class="form-control col-lg-10 col-12 col-sm-12 sinpadding"
function listobjmarca($value){?>
      <select id="<? echo "MARCA_ID".$value;?>" style="font-size: medium; font-weight: bold;" title="OD"  onclick="selobjeto(this,'<? echo $value;?>')" 
                  class="form-control col-lg-12 col-12 col-sm-12 sinpadding "  >
                                        <? objmarca(1);?>
    </select>
<?}
function objmarca($opc){
    if($opc)
        $direccion = "MARCA";
    else 
        $direccion = "";
    
    
   $nodo = new cls_proc_marca();
 //  $nodo->setcat_tipo(1);//tipo categoria producto
   unset($nodo->arrmarca);
     // $nodo->selectgeneral();
   $direccion = "MARCA";
  //  if($opc == 1 || $opc == 2){
      $html= $html."<option value='0' selected >".$direccion."</option>";
      $nodo->selectdata();
       $selected= '';
   // } 
        //  $selected= '';
    if(count($nodo->arrmarca) > 0){  
      
       for($i=0;$i<count($nodo->arrmarca);$i++){   
         
            $html= $html."<option value=".$nodo->arrmarca[$i]['marca_id']." valor=".$nodo->arrmarca[$i]['marca_nombre'].">"
                    .$nodo->arrmarca[$i]['marca_nombre']."</option>";   
         
                
       } 
      
    }else
        $html= $html."<option value='0' value2='0' > << Seleccione</option>";
         // echo "Sin registros categoria..";
    
        $nodo=null;
      echo $html; 
    ?>


   
<?}
?>