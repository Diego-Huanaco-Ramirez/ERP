<?PHP

require_once('../clases/cls_personal.php');
//require_once('../clases/paciente.php');
//require_once('../clases/clscomuna.php');
//require_once('../servicio/funciones_adicionales.php');
 
objpersonal();

function objpersonal(){
   $me = new cls_personal();
   $me->select();
     
   if(count($me->arrpersonal) > 0){
       
     
  	?>
        <?
            
    for($i=0;$i< count($me->arrpersonal);$i++){ 
                  
    $html= $html."<option value=".$me->arrpersonal[$i]['rut_personal'].">".$me->arrpersonal[$i]['rut_personal']."</option>";            
         ?>       
 
 <?   }
   }

 ?>
          <select class="form-control" name="rut" id="rut">  
              <option value='0'></option>
              <? echo $html; ?>
           </select> 
   	<?   } ?>

