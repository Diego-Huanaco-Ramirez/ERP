<?PHP

require_once('../clases/cls_proc_equivalencia_unidad.php');
require_once('../servicio/funciones_adicionales.php');
//require_once('../servicio/funciones_categoria.php');
listarequiva();
function listarequiva(){
    
    $nodo = new cls_proc_equivalencia_unidad();
   // $nodo->setprod_codigo($_POST['prod_codigo']);
 
    
       
      //  $nodo = new paciente();
        unset($nodo->arrprod_equiv);
          
      // $nodo->listarPaciente();
         
       if(!isset($valor) || $valor == "")  {
          $valor = "";
         $option= "";  
         $valor =$_GET['valor'];
         $option=$_GET['opcion'];
         $prod_codigo =$_GET['prod_codigo'];
           
         $prod_codigo = '010000000001';
        
          $nodo->setprod_codigo($prod_codigo);
          $nodo->getdataxprod_codigo();
          $nodo->getdataxprod_codigo();
       }
       $display= $display1;
           
       if(count($nodo->arrprod_equiv) > 0){        
	?>

<div class="table-responsive ">
    <table id="myTable" class="table table-bordered table-sm small" style="" >
  <thead class=" "   >
  <tr class="header">
       
       <th style="width: 5%; text-align: center;">CLICK</th>
       
       <th style="width: 25%;">NOMBRE</th>
       
      <th style="<?echo $display; ?>width: 25%; text-align: center;">DESCRIPCION</th>
      <th style="<?echo $display; ?>width: 25%;"  >VALOR</th>  
      <th style="<?echo $display; ?>width: 10%;"  >UNIDAD</th>  
      <th style="<?echo $display; ?>width: 10%;" hidden >PRECIO2</th>  
       <th style="<?echo $display; ?>width: 10%;" hidden >ANCHO</th>  
   
  </tr>
  </thead>           
            <?
            $json = null;
    
            for($i=0;$i<count($nodo->arrprod_equiv);$i++){
                
             //   $arbol = getarbol($nodo->arrprod_equiv[$i]['cat_id']);
                
                $json = "";
               $json = "{" ;
        $json = $json." 'prod_codigo':'".$nodo->arrprod_equiv[$i]['prod_codigo']."' "; 
        $json = $json.", 'marca_id':'".$nodo->arrprod_equiv[$i]['marca_id']."' "; 
        $json = $json.", 'umed_codigo':'".$nodo->arrprod_equiv[$i]['umed_codigo']."' "; 
        $json = $json.", 'cat_id':'".$nodo->arrprod_equiv[$i]['cat_id']."' "; 
        $json = $json.", 'prod_codigobarra':'".$nodo->arrprod_equiv[$i]['prod_codigobarra']."' "; 
        $json = $json.", 'prod_nombre':'".$nodo->arrprod_equiv[$i]['prod_nombre']."' "; 
        $json = $json.", 'prod_tipo':'".$nodo->arrprod_equiv[$i]['prod_tipo']."' "; 
        $json = $json.", 'prod_informacionadic':'".$nodo->arrprod_equiv[$i]['prod_informacionadic']."' "; 
        $json = $json.", 'prod_codigoarancelario':'".$nodo->arrprod_equiv[$i]['prod_codigoarancelario']."' "; 
        $json = $json.", 'prod_precio1':'".$nodo->arrprod_equiv[$i]['prod_precio1']."' "; 
        $json = $json.", 'prod_precio2':'".$nodo->arrprod_equiv[$i]['prod_precio2']."' "; 
        $json = $json.", 'prod_ley18211':'".$nodo->arrprod_equiv[$i]['prod_ley18211']."' "; 
        $json = $json.", 'prod_fabricadozf':'".$nodo->arrprod_equiv[$i]['prod_fabricadozf']."' "; 
        $json = $json.", 'prod_descripcion':'".$nodo->arrprod_equiv[$i]['prod_descripcion']."' "; 
        $json = $json.", 'prod_modelo':'".$nodo->arrprod_equiv[$i]['prod_modelo']."' "; 
        $json = $json.", 'prod_umedida_cant':'".$nodo->arrprod_equiv[$i]['prod_umedida_cant']."' "; 
        $json = $json.", 'prod_sist_medida':'".$nodo->arrprod_equiv[$i]['prod_sist_medida']."' "; 
        $json = $json.", 'prod_color':'".$nodo->arrprod_equiv[$i]['prod_color']."' "; 
        $json = $json.", 'prod_peso_ctrol':'".$nodo->arrprod_equiv[$i]['prod_peso_ctrol']."' "; 
        $json = $json.", 'prod_largo':'".$nodo->arrprod_equiv[$i]['prod_largo']."' "; 
        $json = $json.", 'prod_ancho':'".$nodo->arrprod_equiv[$i]['prod_ancho']."' "; 
        $json = $json.", 'prod_alto':'".$nodo->arrprod_equiv[$i]['prod_alto']."' "; 
        $json = $json.", 'prod_estado':'".$nodo->arrprod_equiv[$i]['prod_estado']."' "; 
        $json = $json.", 'prod_servicio':'".$nodo->arrprod_equiv[$i]['prod_servicio']."' "; 
        
        $json = $json.", 'cat_etiqueta':'".$arbol[1]."' "; 
        $json = $json.", 'cat_arbol':'".$arbol[0]."' "; 
       
 //   $json = $json.", 'nombre_especialidad':'".$nodo->arrprod_equiv[$i]['nombre_especialidad']."' ";
        $json = $json." }";               
	?>
  <tbody  class=""> 
      <tr class="cuerpo" >
      <td style="width: auto; text-align: center;"> <? 
      if(intval($_GET['origen']) == 4){ //seleccion ?>
    <button id="btn1" onclick="sel2(<?echo $json; ?>,'3');" class="btn btn-info btn-sm" title="SELECCIONAR REGISTROS"  data-dismiss="modal"  onfocusout="" data-dismiss="modal" ><i class="far fa-hand-point-left"></i></button> 
     <? }else{  ?>
    
   <button id="btn1" onclick="sel(<?echo $json; ?>,'3');" class="btn btn-info btn-sm" title="SELECCIONAR REGISTROS"  data-dismiss="modal"  onfocusout="" data-dismiss="modal" ><i class="far fa-hand-point-left"></i></button>
    <? }  ?>   
    
       
 </td>     
          
<!--1--><td style="font-weight: bold"><? echo strtoupper($nodo->arrprod_equiv[$i]['prod_equiv_nombre']); ?></td>
 <!--2 -->  
 <!--3 --> <td style="<?echo $display; ?>"><? echo $nodo->arrprod_equiv[$i]['prod_equiv_descripcion'];; ?></td>  
<!--4 --> 
      
<!--5--> 
        
<!--6-->
<!--7--><td style="<?echo $display; ?>" ><? echo $nodo->arrprod_equiv[$i]['prod_equiv_valor']; ?></td>
<!--8--> <td style="<?echo $display; ?>" ><? echo $nodo->arrprod_equiv[$i]['umed_nombre']; ?></td>
<td style="<?echo $display; ?>" hidden><? echo $nodo->arrprod_equiv[$i]['prod_precio2']; ?></td>
<td style="<?echo $display; ?>"hidden ><? echo $nodo->arrprod_equiv[$i]['prod_ancho']; ?></td>
      
<!--9--> 
 
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

