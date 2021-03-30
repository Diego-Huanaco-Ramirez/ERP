<?PHP

require_once('../clases/cls_proc_producto.php');
require_once('../servicio/funciones_adicionales.php');
listarPacientes();
function listarPacientes(){
    
 
       
        $nodo = new cls_proc_producto();
        unset($nodo->arrproducto);
        
       $nodo->selectdata();
         
       if(!isset($valor) || $valor == "")  {
          $valor = "";
         $option= "";  
         $valor =$_GET['valor'];
         $option=$_GET['opcion'];
  
       //  $nodo->listarPacientesearch($valor,$option);
       }
       
           
       if(count($nodo->arrproducto) > 0){        
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
    
            for($i=0;$i<count($nodo->arrproducto);$i++){
                $json = "";
               $json = "{" ;
    $json = $json." 'id_paciente':'".$nodo->arrproducto[$i]['']."' ";           
    $json = $json.", 'rut_paciente':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'dverificador':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'nombre_paciente':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'apellido_ppaciente':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'apellido_mpaciente':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'observacion_paciente':'".$nodo->arrproducto[$i]['']."' ";
  //  $json = $json.", 'email_paciente':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'fono_paciente':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'fonoPaciente2':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'estado_paciente':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'nacionalidad':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'cod_tipo_especialista':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'profesion':'".$nodo->arrproducto[$i]['']."' ";
    $json = $json.", 'edad':'".""."' "; 
    $json = $json.", 'fecha_nacimiento':'".$nodo->arrproducto[$i]['']."' ";
 //   $json = $json.", 'nombre_especialidad':'".$nodo->arrproducto[$i]['']."' ";
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
      <button  id="btn3" class="btn btn-info btn-sm"  data-toggle="collapse" data-target="#collapsex" data-dismiss="modal" title="Historial paciente"   onclick="listacontrol(<?echo $json; ?>,2);historial(<?echo trim($nodo->arrproducto[$i]['id_paciente']); ?>,2);" >
          <i class="fas fa-file-medical" style=' '></i>
      </button>
       
 </td>     
          
<!--1--><td style="display: none;"> <? echo $nodo->arrproducto[$i]['proc_codigo'] ?></td> 
 <!--2 -->        <td style=""> <? echo $nodo->arrproducto[$i]['identificador']."-".$nodo->arrproducto[$i]['proc_codigo'] ?></td>   
 <!--3 -->               <td style="display: none;"> <? echo $nodo->arrproducto[$i]['proc_codigo'] ?></td>   
<!--4 --> <td style="font-weight: bold"><? echo strtoupper($nodo->arrproducto[$i]['prod_nombre'].' '.$nodo->arrproducto[$i]['prod_nombre'].' '.$nodo->arrproducto[$i]['prod_nombre']); ?></td>
      
<!--5--> <td style="display: none;"><? echo $nodo->arrproducto[$i]['prod_nombre'];?></td>
        
<!--6--><td style="display: none;"><? echo $nodo->arrproducto[$i]['prod_nombre'] ?></td>
<!--7--><td style="display: none;"><? echo $nodo->arrproducto[$i]['prod_nombre'] ?></td>
<!--8--><td style="width: auto; text-align: center;"> <?echo ""; ?></td>
      
<!--9--><td style="width: auto; text-align: center;"> <? echo $nodo->arrproducto[$i]['prod_nombre'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrproducto[$i]['prod_nombre'] ?></td>
<!--9--><td style="display: none"> <? echo $nodo->arrproducto[$i]['prod_nombre'] ?></td>
  
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

