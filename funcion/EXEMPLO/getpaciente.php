<?PHP

require_once('../clases/cls_paciente.php');
require_once('../servicio/funciones_adicionales.php');
listarPacientes();
function listarPacientes(){
    
 
       
        $nodo = new paciente();
        unset($nodo->arrPacientes);
        
      // $nodo->listarPaciente();
         
       if(!isset($valor) || $valor == "")  {
          $valor = "";
         $option= "";  
         $valor =$_GET['valor'];
         $option=$_GET['opcion'];
  
         $nodo->listarPacientesearch($valor,$option);
       }
       
           
        
	?>
<div class="table-responsive">
	 <table id="myTable" class="table" >
  <tr class="header">
       <th >RUT</th>   
    <th >Nombre</th>
    <th >f.nac</th>
   
    <th>Fono</th>
   
  </tr>
            <?
            $json = null;
      if(count($nodo->arrPacientes) > 0){     
            for($i=0;$i<count($nodo->arrPacientes);$i++){
               $json = "{" ;
    $json = $json." 'id_paciente':'".$nodo->arrPacientes[$i]['id_paciente']."' ";           
    $json = $json.", 'rut_paciente':'".$nodo->arrPacientes[$i]['identificador']."' ";
    $json = $json.", 'dverificador':'".$nodo->arrPacientes[$i]['dverificador']."' ";
    $json = $json.", 'nombre_paciente':'".$nodo->arrPacientes[$i]['nombre_paciente']."' ";
    $json = $json.", 'apellido_ppaciente':'".$nodo->arrPacientes[$i]['apellido_ppaciente']."' ";
    $json = $json.", 'apellido_mpaciente':'".$nodo->arrPacientes[$i]['apellido_mpaciente']."' ";
  //  $json = $json.", 'email_paciente':'".$nodo->arrPacientes[$i]['email_paciente']."' ";
    $json = $json.", 'fono_paciente':'".$nodo->arrPacientes[$i]['fono_paciente']."' ";
    $json = $json.", 'fonoPaciente2':'".$nodo->arrPacientes[$i]['fonoPaciente2']."' ";
    $json = $json.", 'estado_paciente':'".$nodo->arrPacientes[$i]['estado_paciente']."' ";
    $json = $json.", 'nacionalidad':'".$nodo->arrPacientes[$i]['nacionalidad']."' ";
    $json = $json.", 'cod_tipo_especialista':'".$nodo->arrPacientes[$i]['cod_tipo_especialista']."' ";
    $json = $json.", 'profesion':'".$nodo->arrPacientes[$i]['profesion']."' ";
    $json = $json.", 'fecha_nacimiento':'".$nodo->arrPacientes[$i]['fecha_nacimiento']."' ";
 //   $json = $json.", 'nombre_especialidad':'".$nodo->arrPacientes[$i]['nombre_especialidad']."' ";
        $json = $json." }";               
	?>
  <tr class="">
<!--1--><td style="display: none;"> <? echo $nodo->arrPacientes[$i]['id_paciente'] ?></td> 
 <!--2 -->        <td style=""> <? echo $nodo->arrPacientes[$i]['identificador'] ?></td>   
 <!--3 -->               <td style="display: none;"> <? echo $nodo->arrPacientes[$i]['dverificador'] ?></td>   
<!--4 --> <td><? echo $nodo->arrPacientes[$i]['nombre_paciente'].' '.$nodo->arrPacientes[$i]['apellido_ppaciente'].' '.$nodo->arrPacientes[$i]['apellido_mpaciente'] ?></td>
      
<!--5--> <td style="display: none;"><? echo $nodo->arrPacientes[$i]['nombre_paciente'];?></td>
        
<!--6--><td style="display: none;"><? echo $nodo->arrPacientes[$i]['apellido_ppaciente'] ?></td>
<!--7--><td style="display: none;"><? echo $nodo->arrPacientes[$i]['apellido_mpaciente'] ?></td>
<!--8--><td style=""> <?echo cambiaf_a_normal($nodo->arrPacientes[$i]['fecha_nacimiento']); ?></td>
      
<!--9--><td style=""> <? echo $nodo->arrPacientes[$i]['fono_paciente'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrPacientes[$i]['nacionalidad'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrPacientes[$i]['profesion'] ?></td>
<!----><td ><button id="btn1" onclick="RegistroPaciente(event);sel(this,<?echo $json; ?>);"   data-toggle="collapse" data-target="#collapseTwo"  onfocusout="" data-dismiss="modal" ><i class="far fa-hand-point-left"></i></button>
      <td ><button id="btn2" onclick="agregarpac(<?echo $json; ?>);" onfocusout="" data-dismiss="modal" ><i class="fas fa-file-medical"></i></button>
      </td> 
      
      <? 
       ?>
  </tr> 
  
 <?
			}
      }else
          echo "Búsqueda sin resultados...";
                      //  echo $html;
                       // return $html;
			?>
          </table>
</div>  
    
	<?
        $nodo=null;
        
                              
	
}
?>

