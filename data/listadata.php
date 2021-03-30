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
       
           
       if(count($nodo->arrPacientes) > 0){        
	?>

<div class="table-responsive ">
    <table id="myTable" class="table table-bordered table-sm small" style="" >
  <thead class=" "   >
  <tr class="header">
       
       <th style="width: auto; text-align: center;">FUNCIÓN</th>
        <th >RUT</th>  
       <th style="width: auto;">NOMBRE PACIENTE</th>
       <th style="width: auto; text-align: center;">EDAD</th>
   
       <th style="width: auto; text-align: center;">FONO</th>
       
   
  </tr>
  </thead>           
            <?
            $json = null;
    
            for($i=0;$i<count($nodo->arrPacientes);$i++){
                $json = "";
               $json = "{" ;
    $json = $json." 'id_paciente':'".$nodo->arrPacientes[$i]['id_paciente']."' ";           
    $json = $json.", 'rut_paciente':'".$nodo->arrPacientes[$i]['identificador']."' ";
    $json = $json.", 'dverificador':'".$nodo->arrPacientes[$i]['dverificador']."' ";
    $json = $json.", 'nombre_paciente':'".$nodo->arrPacientes[$i]['nombre_paciente']."' ";
    $json = $json.", 'apellido_ppaciente':'".$nodo->arrPacientes[$i]['apellido_ppaciente']."' ";
    $json = $json.", 'apellido_mpaciente':'".$nodo->arrPacientes[$i]['apellido_mpaciente']."' ";
    $json = $json.", 'observacion_paciente':'".$nodo->arrPacientes[$i]['observacion_paciente']."' ";
  //  $json = $json.", 'email_paciente':'".$nodo->arrPacientes[$i]['email_paciente']."' ";
    $json = $json.", 'fono_paciente':'".$nodo->arrPacientes[$i]['fono_paciente']."' ";
    $json = $json.", 'fonoPaciente2':'".$nodo->arrPacientes[$i]['fonoPaciente2']."' ";
    $json = $json.", 'estado_paciente':'".$nodo->arrPacientes[$i]['estado_paciente']."' ";
    $json = $json.", 'nacionalidad':'".$nodo->arrPacientes[$i]['nacionalidad']."' ";
    $json = $json.", 'cod_tipo_especialista':'".$nodo->arrPacientes[$i]['cod_tipo_especialista']."' ";
    $json = $json.", 'profesion':'".$nodo->arrPacientes[$i]['profesion']."' ";
    $json = $json.", 'edad':'".calculaedad(cambiaf_a_normal($nodo->arrPacientes[$i]['fecha_nacimiento']))."' "; 
    $json = $json.", 'fecha_nacimiento':'".$nodo->arrPacientes[$i]['fecha_nacimiento']."' ";
 //   $json = $json.", 'nombre_especialidad':'".$nodo->arrPacientes[$i]['nombre_especialidad']."' ";
        $json = $json." }";               
	?>
  <tbody  class=""> 
      <tr class="cuerpo" >
      <td style="width: auto; text-align: center;"> <? if(intval($_GET['origen']) == 1){ ?>
    <button id="btn2" onclick="agregarpac(<?echo $json; ?>,2);" class="btn btn-info btn-sm"  onfocusout="" title="Agregar paciente a la agenda" data-dismiss="modal" ><i class="far fa-hand-point-right"></i></button>
     
    <button id="btn1" onclick="sel(this,<?echo $json; ?>,'2');" class="btn btn-success btn-sm" title="Editar registros"   ><i class="far fa-edit"></i></button>
     <? }else{  ?>
      <button id="btn1" onclick="RegistroPaciente(event);sel(this,<?echo $json; ?>,'1');" class="btn btn-info btn-sm" title="Editar registros"  data-toggle="collapse" data-target="#collapseTwo"  onfocusout="" data-dismiss="modal" ><i class="far fa-hand-point-left"></i></button>
    <? }  ?>   
      <button  id="btn3" class="btn btn-info btn-sm"  data-toggle="collapse" data-target="#collapsex" data-dismiss="modal" title="Historial paciente"   onclick="listacontrol(<?echo $json; ?>,2);historial(<?echo trim($nodo->arrPacientes[$i]['id_paciente']); ?>,2);" >
          <i class="fas fa-file-medical" style=' '></i>
      </button>
       
 </td>     
          
<!--1--><td style="display: none;"> <? echo $nodo->arrPacientes[$i]['id_paciente'] ?></td> 
 <!--2 -->        <td style=""> <? echo $nodo->arrPacientes[$i]['identificador']."-".$nodo->arrPacientes[$i]['dverificador'] ?></td>   
 <!--3 -->               <td style="display: none;"> <? echo $nodo->arrPacientes[$i]['dverificador'] ?></td>   
<!--4 --> <td style="font-weight: bold"><? echo strtoupper($nodo->arrPacientes[$i]['apellido_ppaciente'].' '.$nodo->arrPacientes[$i]['apellido_mpaciente'].' '.$nodo->arrPacientes[$i]['nombre_paciente']); ?></td>
      
<!--5--> <td style="display: none;"><? echo $nodo->arrPacientes[$i]['nombre_paciente'];?></td>
        
<!--6--><td style="display: none;"><? echo $nodo->arrPacientes[$i]['apellido_ppaciente'] ?></td>
<!--7--><td style="display: none;"><? echo $nodo->arrPacientes[$i]['apellido_mpaciente'] ?></td>
<!--8--><td style="width: auto; text-align: center;"> <?echo calculaedad(cambiaf_a_normal($nodo->arrPacientes[$i]['fecha_nacimiento'])); ?></td>
      
<!--9--><td style="width: auto; text-align: center;"> <? echo $nodo->arrPacientes[$i]['fono_paciente'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrPacientes[$i]['nacionalidad'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrPacientes[$i]['profesion'] ?></td>
  
  </tr> 
  </tbody>
 <?
			}
     
                      //  echo $html;
                       // return $html;
			?>
  </table>
</div>  
    
	<?
         }else
          echo "Búsqueda sin resultados...";
        $nodo=null;
        
                              
	
}
?>

