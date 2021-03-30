<?PHP

require_once('../clases/cls_servicio_elemento.php');
//require_once('../servicio/funciones_adicionales.php');



function objselservicio($opc){
    
   $nodo = new cls_servicio_elemento();
   $nodo->selectdata();
    
    if(count($nodo->arrelemento) > 0){  
      
       for($i=0;$i<count($nodo->arrelemento);$i++){   
          
            $html= $html."<option value=".$nodo->arrelemento[$i]['selem_id']." valor=".$nodo->arrelemento[$i]['selem_id'].">"
                    .$nodo->arrelemento[$i]['selem_maquina']."</option>";   
         
       } 
      
    }else
        $html= $html."<option value='0' value2='0' > << Seleccione</option>";
         // echo "Sin registros categoria..";
    
        $nodo=null;
      echo $html; 

}

function objseldimension($opc){?>
      <option value="1">PEQUEÑO</option>
  <option value="2">MEDIANO</option>
  <option value="3">GRANDE</option>
<?}
function objselestado($opc){?>
      <option value="1">REGULAR</option>
  <option value="2">SUCIO</option>
  <option value="3">MUY SUCIO</option>
<?}

function listobjelemento($opc, $value , $size){?>
 
<select  size="<? echo  $size;?>"  multiple="multiple"
         id="<? echo  "SEL_ELEMENTO".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccion MULTIPLE" 
         
         class="form-control col-lg-12 col-12 col-sm-12 sinpadding "  >
                                       <? objselservicio($opc);?>  
    </select>
<?}

function listobjdimension($opc, $value , $size){?>
 
<select  size="<? echo  $size;?>"  multiple="multiple"
         id="<? echo  "SEL_ELEMENTO".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccion MULTIPLE" 
         
         class="form-control col-lg-12 col-12 col-sm-12 sinpadding "  >
                                       <? objseldimension($opc);?>  
    </select>
<?}

function listobjestado($opc, $value , $size){?>
 
<select  size="<? echo  $size;?>"  multiple="multiple"
         id="<? echo  "SEL_ELEMENTO".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccion MULTIPLE" 
         
         class="form-control col-lg-12 col-12 col-sm-12 sinpadding "  >
                                       <? objselestado($opc);?>  
    </select>
<?}