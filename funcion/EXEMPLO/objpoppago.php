<?PHP

require_once('../clases/cls_pago.php');
require_once('../servicio/funciones_adicionales.php');
 
function listapago(){
    
        $nodo = new cls_pago();
        unset($nodo->arrpago);
        $nodo->lstpago();
  
      if(count($nodo->arrpago) > 0){   ?>
            <div id="popup-content2" class="d-none">  
 <?     for($i=0;$i<count($nodo->arrpago);$i++){   ?>
        <label style="color: <? echo $nodo->arrpago[$i]['color_pago'] ?>;" id="<? echo $nodo->arrpago[$i]['id_pago'] ?>" value="<? echo $nodo->arrpago[$i]['id_pago'] ?>"  class="form-control LBL">
             <? echo $nodo->arrpago[$i]['nombre_pago'] ?>
        </label>

       <? } ?>
        </div>
    <?  }else
          echo "Sin registros pago...";
    
        $nodo=null;

}
function listapago2(){
    
    $nodo = new cls_pago();
    unset($nodo->arrpago);
    $nodo->lstpago();
  
    if(count($nodo->arrpago) > 0){  
        for($i=0;$i<count($nodo->arrpago);$i++){   
            $html= $html."<option value=".$nodo->arrpago[$i]['id_pago'].">"
                    .$nodo->arrpago[$i]['nombre_pago']."</option>";   
        } 
    }else
          echo "Sin registros pago...";
    
        $nodo=null;
         echo $html; 

}


?>

