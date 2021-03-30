<?PHP

require_once('../clases/cls_prestacion.php');
require_once('../servicio/funciones_adicionales.php');
 
function listaprestaciones(){
    
        $nodo = new cls_prestacion();
        unset($nodo->arrprestacion);
        $nodo->lstprestacion2();
  
      if(count($nodo->arrprestacion) > 0){   ?>
           <div id="popup-content" class="d-none">  
       <?     for($i=0;$i<count($nodo->arrprestacion);$i++){  
                if(intval($nodo->arrprestacion[$i]['estado_prestacion']) == 1){?>
               <p ></p>
               <label style="color: <? echo $nodo->arrprestacion[$i]['color_prestacion'] ?>;" id="<? echo $nodo->arrprestacion[$i]['id_prestacion'] ?>"   value="<? echo $nodo->arrprestacion[$i]['id_prestacion'] ?>"  class="form-control LBL"> 
                   <? echo $nodo->arrprestacion[$i]['nombre_prestacion'] ?>
               </label>
  
                <? }
       
           } ?>
        </div>
    <?  }else
          echo "Sin registros pago...";
    
        $nodo=null;

}
function listaprestaciones2(){
    
        $nodo = new cls_prestacion();
        unset($nodo->arrprestacion);
        $nodo->lstprestacion2();
  
    if(count($nodo->arrprestacion) > 0){  
       for($i=0;$i<count($nodo->arrprestacion);$i++){   
          if(intval($nodo->arrprestacion[$i]['estado_prestacion']) == 1) 
            $html= $html."<option value=".$nodo->arrprestacion[$i]['id_prestacion']." value2=".$nodo->arrprestacion[$i]['id_prestacion'].">"
                    .$nodo->arrprestacion[$i]['nombre_prestacion']."</option>";             
       } 
      
    }else
          echo "Sin registros pago...";
    
        $nodo=null;
      echo $html; 

}

?>

