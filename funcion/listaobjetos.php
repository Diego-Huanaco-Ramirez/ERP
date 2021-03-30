<?PHP

//require_once('../clases/agenda.php');
//require_once('../clases/paciente.php');
require_once('../clases/clscomuna.php');
require_once('../servicio/funciones_adicionales.php');
 
listarcomuna();

function listarcomuna(){
    $nodo = new clscomuna();
    unset($nodo->arrcomuna);
     
      if(isset($_GET['value']))
           $nodo->id_region = $_GET['value'];
      else
          $nodo->id_region=0;  
        
      if(isset($_GET['id_ciudad']))
            $id_ciudad = intval($_GET['id_ciudad']);
      else 
            $id_ciudad = 0;
       
      $nodo->msolistacomunasxregion();
  	?>
        <?
            
    for($i=0;$i< count($nodo->arrcomuna);$i++){ 
                if( $id_ciudad == intval($nodo->arrcomuna[$i]['id_ciudad']) )
    $html= $html."<option value=".$nodo->arrcomuna[$i]['id_ciudad']." selected>".strtolower($nodo->arrcomuna[$i]['nombre_ciudad'])."</option>";            
                else    
    $html= $html."<option value=".$nodo->arrcomuna[$i]['id_ciudad'].">".strtolower($nodo->arrcomuna[$i]['nombre_ciudad'])."</option>";            
         ?>       
 
 <?   }

 ?>
<select class="form-control" name="sel_comunas" id="sel_comunas" title="REGIONES">  
              <option value='0'>COMUNA</option>
              <? echo $html; ?>
           </select> 
   	<?   } ?>

