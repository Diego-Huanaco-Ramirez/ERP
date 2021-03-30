<?PHP
require_once('../clases/cls_proc_equivalencia_unidad.php');
require_once('../clases/cls_proc_producto.php');
require_once('../servicio/funciones_adicionales.php');
require_once('../servicio/funciones_categoria.php');
listarproductos();
function listarproductos(){
    
    $nodo = new cls_proc_producto();
   // $nodo->setprod_codigo($_POST['prod_codigo']);
 
    
       
      //  $nodo = new paciente();
        unset($nodo->arrproducto);
          
      // $nodo->listarPaciente();
         
       if(!isset($valor) || $valor == "")  {
          $valor = "";
         $option= "";  
         $valor =$_GET['valor'];
         $option=$_GET['opcion'];
          $compare=$_GET['compare'];
           
     //     $valor =1;
     //    $option=7;
        
         if($option == 2){
             $display1 = 'display: none;';
              $nodo->setprod_servicio(1);
              $nodo->setprod_modelo('');
         }else if($option > 2 && $option < 6 ){
               $nodo->setprod_servicio(0);
             $display = '';
             $nodo->setprod_color($valor);
              $nodo->setcat_id($valor);
            
            
         }else if($option == 7 ){
              $display1 = 'display: none;';
           //  $nodo->setprod_equiv_id($valor);
         }
          $nodo->selectdata($valor,$option);
       }
       $display= $display1;
           
       if(count($nodo->arrproducto) > 0){        
	?>

<div class="table-responsive ">
    <table id="myTable" class="table table-bordered table-sm small" style="" >
  <thead class="thead-dark small"   >
  <tr class="header">
  
       <th style="width: 5%; text-align: center;"><i class="fas fa-hand-point-left"></i></th>
        <th style="<?echo $display; ?>width: 1%;; text-align: center;"  ><i class="fas fa-link"></i></th> 
       <th style="width: 38%;">NOMBRE</th>
       
      <th style="<?echo $display; ?>width: 18%; text-align: center;">CATEGORIA</th>
            
      <th style="<?echo $display; ?>width: 21%;"  ><i class="fas fa-palette"></i></th>  
      <th style="<?echo $display; ?>width: 8%;"  ><i class="fas fa-dollar-sign"></i>(1)</th>  
      <th style="<?echo $display; ?>width: 10%;"  ><i class="fas fa-dollar-sign"></i>(2)</th>  
       <th style="<?echo $display; ?>width: 5%;"  ><i class="fas fa-ruler-horizontal"></i></th>  
 
  </tr>
  </thead>           
            <?
            $json = null;
     $nexo = '';
     $color = '';
    for($i=0;$i<count($nodo->arrproducto);$i++){
         if(intval($compare) > 0 && $compare !== ''){       
             
               if(intval($compare) ==  $nodo->arrproducto[$i]['prod_equiv_id']){
                        $nexo = 'fas fa-link';
                        $color = '#4d4dff';
                  
                } else {
                    $nexo = 'fas fa-unlink';
                    $color = '#ff944d';
                }
         }else   { 
               $nexo = '';
               $color = '';
         }    
               
                $arbol = getarbol($nodo->arrproducto[$i]['cat_id']);
                
                $json = "";
               $json = "{" ;
        $json = $json." 'prod_codigo':'".$nodo->arrproducto[$i]['prod_codigo']."' "; 
        $json = $json.", 'marca_id':'".$nodo->arrproducto[$i]['marca_id']."' "; 
        $json = $json.", 'umed_codigo':'".$nodo->arrproducto[$i]['umed_codigo']."' "; 
        $json = $json.", 'cat_id':'".$nodo->arrproducto[$i]['cat_id']."' "; 
        $json = $json.", 'prod_codigobarra':'".$nodo->arrproducto[$i]['prod_codigobarra']."' "; 
        $json = $json.", 'prod_nombre':'".$nodo->arrproducto[$i]['prod_nombre']."' "; 
        $json = $json.", 'prod_tipo':'".$nodo->arrproducto[$i]['prod_tipo']."' "; 
        $json = $json.", 'prod_informacionadic':'".$nodo->arrproducto[$i]['prod_informacionadic']."' "; 
        $json = $json.", 'prod_codigoarancelario':'".$nodo->arrproducto[$i]['prod_codigoarancelario']."' "; 
        $json = $json.", 'prod_precio1':'".$nodo->arrproducto[$i]['prod_precio1']."' "; 
        $json = $json.", 'prod_precio2':'".$nodo->arrproducto[$i]['prod_precio2']."' "; 
        $json = $json.", 'prod_ley18211':'".$nodo->arrproducto[$i]['prod_ley18211']."' "; 
        $json = $json.", 'prod_fabricadozf':'".$nodo->arrproducto[$i]['prod_fabricadozf']."' "; 
        $json = $json.", 'prod_descripcion':'".$nodo->arrproducto[$i]['prod_descripcion']."' "; 
        $json = $json.", 'prod_modelo':'".$nodo->arrproducto[$i]['prod_modelo']."' "; 
        $json = $json.", 'prod_umedida_cant':'".$nodo->arrproducto[$i]['prod_umedida_cant']."' "; 
        $json = $json.", 'prod_sist_medida':'".$nodo->arrproducto[$i]['prod_sist_medida']."' "; 
        $json = $json.", 'prod_color':'".$nodo->arrproducto[$i]['prod_color']."' "; 
        $json = $json.", 'prod_peso_ctrol':'".$nodo->arrproducto[$i]['prod_peso_ctrol']."' "; 
        $json = $json.", 'prod_largo':'".$nodo->arrproducto[$i]['prod_largo']."' "; 
        $json = $json.", 'prod_ancho':'".$nodo->arrproducto[$i]['prod_ancho']."' "; 
        $json = $json.", 'prod_alto':'".$nodo->arrproducto[$i]['prod_alto']."' "; 
        $json = $json.", 'prod_estado':'".$nodo->arrproducto[$i]['prod_estado']."' "; 
        $json = $json.", 'prod_servicio':'".$nodo->arrproducto[$i]['prod_servicio']."' "; 
        
        $json = $json.", 'cat_etiqueta':'".$arbol[1]."' "; 
        $json = $json.", 'cat_arbol':'".$arbol[0]."' "; 
       
 //   $json = $json.", 'nombre_especialidad':'".$nodo->arrproducto[$i]['nombre_especialidad']."' ";
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
        <td style="font-weight: bold; alignment-adjust: middle;alignment-baseline: central; color: <? echo $color; ?>;"><i class="<? echo $nexo; ?>"></i></td>  
<!--1--><td style="font-weight: bold"><? echo strtoupper($nodo->arrproducto[$i]['prod_nombre']); ?></td>
 <!--2 -->  
 <!--3 --> <td style="<?echo $display; ?>"><? echo "$arbol[0]"; ?></td>  
<!--4 --> 
      
<!--5--> 
        
<!--6-->
<!--7--><td style="<?echo $display; ?>" ><? echo $nodo->arrproducto[$i]['color_nombre']; ?></td>
<!--8--> <td style="<?echo $display; ?>" ><? echo $nodo->arrproducto[$i]['prod_precio1']; ?></td>
<td style="<?echo $display; ?>" ><? echo $nodo->arrproducto[$i]['prod_precio2']; ?></td>
<td style="<?echo $display; ?>" ><? echo $nodo->arrproducto[$i]['prod_ancho']; ?></td>
      
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

