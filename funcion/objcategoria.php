<?PHP

require_once('../clases/cls_proc_categoria_producto.php');
require_once('../servicio/funciones_adicionales.php');



function objlabelcatgeneral(){
    
        $nodo = new cls_proc_categoria_producto();
        unset($nodo->arrcat);
        $nodo->selectgeneral();
  
      if(count($nodo->arrcat) > 0){   ?>
           <div id="popup-content" class="d-none">  
       <?     for($i=0;$i<count($nodo->arrcat);$i++){  
                if(intval($nodo->arrcat[$i]['pro_cat_id']) == null){?>
               <p ></p>
               <label style="color: <? echo $nodo->arrcat[$i]['cat_color'] ?>;" id="<? echo $nodo->arrcat[$i]['cat_id'] ?>"   value="<? echo $nodo->arrprestacion[$i]['cat_id'] ?>"  class="form-control LBL"> 
                   <? echo $i.".-".$nodo->arrcat[$i]['cat_nombre'] ?>
               </label>
  
                <? }
       
           } ?>
        </div>
    <?  }else
          echo "Sin registros pago...";
    
        $nodo=null;

}


 
function objselcatgeneral($opc){
    
   $nodo = new cls_proc_categoria_producto();
   $nodo->setcat_tipo(1);//tipo categoria producto
   unset($nodo->arrcat);
     // $nodo->selectgeneral();
   $direccion = "GENERAL";
    if($opc == 1 || $opc == 2){
      $html= $html."<option value='0' selected >".$direccion."</option>";
      $nodo->selectgeneral();
       $selected= '';
    } 
        //  $selected= '';
    if(count($nodo->arrcat) > 0){  
      
       for($i=0;$i<count($nodo->arrcat);$i++){   
          if(intval($nodo->arrcat[$i]['pro_cat_id']) == null) 
          if($opc == 1)
            $html= $html."<option value=".$nodo->arrcat[$i]['cat_id']." valor=".$nodo->arrcat[$i]['cat_etiqueta'].">"
                    .$nodo->arrcat[$i]['cat_nombre']."</option>";   
          else
               $html= $html."<option value=".$nodo->arrcat[$i]['cat_nombre']." valor=".$nodo->arrcat[$i]['cat_etiqueta'].">";
                
       } 
      
    }else
        $html= $html."<option value='0' value2='0' > << Seleccione</option>";
         // echo "Sin registros categoria..";
    
        $nodo=null;
      echo $html; 

}
function cantcategoriagneral(){
   $nodo = new cls_proc_categoria_producto();
   $nodo->setcat_tipo(1);//tipo categoria producto
   $nodo->totalxcat();
  if(intval($nodo->gettotal_categoria()) > 0)
       echo  "CANT(".$nodo->gettotal_categoria().")";
   else 
       echo "CANT(0)";
}

//class="form-control col-lg-10 col-12 col-sm-12 sinpadding"
function listobjcategoriagneral($opc, $value,$GNRALvalue, $size,$listado){
  if($listado == 1)
    $funcion = 'showResult(this.value, 4, 4)';
  else if($listado == 0)
    $funcion = 'showResult(this.value, 4, 3)';
  else if($listado == 2)
    $funcion = 'showResult(this.value, 4, 6)';
  ?>
<datalist  size="<? echo  $size;?>"    id="<? echo  "DTL_CATG".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccione con 1 click la categoria"  class="form-control col-lg-12 col-12 col-sm-12 sinpadding "   hidden>
                                       <? objselcatgeneral('2');?>  
    </datalist>

<select class="select-css" size="<? echo  $size;?>" ondblclick="getcategoria('<? echo  "CAT_NOMBRE_G".$value;?>','<? echo  "CHKCAT_NOMBRE_G".$value;?>',1,this.value,this,'<? echo  $value;?>')" 
         id="<? echo  "SEL_CATG".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccione con 1 click la categoria" 
         onclick="changeImage(this);selcategoria('<? echo  $GNRALvalue;?>',1,this.value,'<? echo  "SEL_CATSB".$value;?>','<? echo  "SEL_CATSBSB".$value;?>',this);<? echo  $funcion;?>" 
         onchange="selcategoria('<? echo  $GNRALvalue;?>',1,this.value,'<? echo  "SEL_CATSB".$value;?>','<? echo  "SEL_CATSBSB".$value;?>',this)" 
         class="form-control col-lg-12 col-12 col-sm-12 sinpadding " disabled >
                                       <? objselcatgeneral($opc);?>  
    </select>
<?}
function listobjsbcategoriagneral($opc, $value,$GNRALvalue, $size,$listado){
  if($listado == 1)
    $funcion = 'showResult(this.value, 4, 4)';
  else if($listado == 0)
    $funcion = 'showResult(this.value, 4, 3)';
  else if($listado == 2)
    $funcion = 'showResult(this.value, 4, 6)';
  ?>                                                           
<datalist  size="<? echo  $size;?>"  id="<? echo  "DTL_CATSB".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccione con 1 click la categoria"  class="form-control col-lg-12 col-12 col-sm-12 sinpadding "   hidden>
                                       <? objselcatgeneral('2');?>  
    </datalist>
<select class="select-css" size="<? echo  $size;?>" ondblclick="getcategoria('<? echo  "CAT_NOMBRE_SB".$value;?>','<? echo  "CHKCAT_NOMBRE_SB".$value;?>',2,this.value,this,'<? echo  $value;?>')" 
        id="<? echo  "SEL_CATSB".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccione con 1 click la categoria" 
        onclick="selcategoria('<? echo  $GNRALvalue;?>','2',this.value,'<? echo  "SEL_CATSBSB".$value;?>','',this);<? echo  $funcion;?>"
        onchange="selcategoria('<? echo  $GNRALvalue;?>','2',this.value,'<? echo  "SEL_CATSBSB".$value;?>','',this)" class="form-control col-lg-12 col-12 col-sm-12 sinpadding " disabled >
                                       <? objselcatgeneral($opc);?>  
    </select>
<?}
function  listobjsbsbcategoriagneral($opc, $value,$GNRALvalue, $size,$listado){
    if($listado == 1)
    $funcion = 'showResult(this.value, 4, 4)';
  else if($listado == 0)
    $funcion = 'showResult(this.value, 4, 3)';
  else if($listado == 2)
    $funcion = 'showResult(this.value, 4, 6)';
  ?>
<datalist  size="<? echo  $size;?>"    id="<? echo  "DTL_CATSBSB".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccione con 1 click la categoria"  class="form-control col-lg-12 col-12 col-sm-12 sinpadding "   hidden>
                                       <? objselcatgeneral('2');?>  
    </datalist>
<select size="<? echo  $size;?>" ondblclick="getcategoria('<? echo  "CAT_NOMBRE_SBSB".$value;?>','<? echo  "CHKCAT_NOMBRE_SBSB".$value;?>',3,this.value,this,'<? echo  $value;?>')" 
        id="<? echo  "SEL_CATSBSB".$value;?>" style="font-size: medium; font-weight: bold;" title="Seleccione con 1 click la categoria"  
        onclick="selcategoria('<? echo  $GNRALvalue;?>','3',this.value,'','',this);<? echo  $funcion;?>"
        class="form-control col-lg-12 col-12 col-sm-12 sinpadding "  disabled >
                                       <? objselcatgeneral($opc);?>  
    </select>
<?}




 

?>