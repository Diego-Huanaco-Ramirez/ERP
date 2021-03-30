<?PHP
require_once('../clases/cls_proc_equivalencia_unidad.php');
require_once('../clases/cls_proc_producto.php');
require_once('../servicio/funciones_adicionales.php');
require_once('../servicio/funciones_categoria.php');
listarproductos();


function ocultartab($display){
     $display1 = 'display: none;';
         $display[0]= '';
          $display[1]= '';
           $display[2]= '';
            $display[3]='';
             $display[4]= '';
              $display[5]='';
               $display[6]='';
            
           return $display;
}
function listarproductos(){
    $bandera = false;
    $nodo = new cls_proc_producto();
  
       unset($nodo->arrproducto);
       if(!isset($valor) || $valor == "")  {
          $valor = "";
         $option= "";  
         $valor =$_GET['valor'];
         $option=$_GET['opcion'];
          $compare=$_GET['compare'];
           
     //     $valor =1;
     //    $option=7;
        
         if($option == 2){
              $display= ocultartab($display);
              $nodo->setprod_servicio(1);
              $nodo->setprod_modelo('');
         }else if($option > 2 && $option < 6 ){
               $nodo->setprod_servicio(0);
             $display = '';
             $nodo->setprod_color($valor);
              $nodo->setcat_id($valor);
            
            
         }else if($option == 7 || $option == 8  ){
              $display= ocultartab($display);
              //$nodo->setprod_equiv_id($valor);
              $nodo->setprod_equiv_id($_GET['id']);
              $nodo->setprod_codigo($_GET['codigo']);
              $bandera = true;
               $nodo->selectdata($valor,$option);
         }
            
       }
      
           
       if(count($nodo->arrproducto) > 0 && $bandera){        
	?>

<div class="table-responsive ">
    <table id="myTable" class="table table-bordered table-sm small" style="" >
  <thead class=" "   >
  <tr class="header">
   
      <th style="width: 5%; text-align: center;" hidden><i class="fas fa-hand-point-left"></i></th>
      <th style="<?echo $display[0]; ?>width: 1%;; text-align: center;"  ><i class="fas fa-link"></i></th> 
       <th style="<?echo $display[3]; ?>width: 3%; text-align: center;"  >TOTAL</th> 
      <th style="<?echo $display[1]; ?>width: 20%; text-align: center;">NOMBRE</th>
       
      <th style="<?echo $display[2]; ?>width: 20%; text-align: center;">RUTA</th>
            
      
      <th style="<?echo $display[3]; ?>width: 15%; text-align: center;"  >EQUIVALE</th>  
      
      <th style="<?echo $display[6]; ?>width: 5%; text-align: center;"  ><i class="fas fa-ruler-horizontal"></i></th>  
      <th style="<?echo $display[4]; ?>width: 10%; text-align: center;"  >SIGLA</th>  
        
  
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
      <td style="width: auto; text-align: center;" hidden> <? 
      if(intval($_GET['origen']) == 4){ //seleccion ?>
    <button id="btn1" onclick="sel2(<?echo $json; ?>,'3');" class="btn btn-info btn-sm" title="SELECCIONAR REGISTROS"  data-dismiss="modal"  onfocusout="" data-dismiss="modal" ><i class="far fa-hand-point-left"></i></button> 
     <? }else{  ?>
    
   <button id="btn1" onclick="sel(<?echo $json; ?>,'3');" class="btn btn-info btn-sm" title="SELECCIONAR REGISTROS"  data-dismiss="modal"  onfocusout="" data-dismiss="modal" ><i class="far fa-hand-point-left"></i></button>
    <? }  ?>   
    
       
 </td>     
        <td style="<?echo $display[0]; ?>;font-weight: bold; alignment-adjust: middle;alignment-baseline: central; color: <? echo $color; ?>; text-align: center;"><? echo $nodo->arrproducto[$i]['total1']."/".$nodo->arrproducto[$i]['total']; ?></td>  
 <!--7--><td style="<?echo $display[3]; ?>; text-align: center;" ><? echo $nodo->arrproducto[$i]['total']; ?></td>
  <!--1--><td style="<?echo $display[1]; ?>;font-weight: bold; text-align: center;"><? echo strtoupper($nodo->arrproducto[$i]['cat_nombre']); ?></td>
  
 <!--2 -->  
 <!--3 --> <td style="<?echo $display[2]; ?>; text-align: center;"><? echo $arbol[0]; ?></td>  
<!--4 --> 
      
<!--5--> 
        
<!--6-->

        <td style="<?echo $display[3]; ?>; text-align: center;" ><? echo $nodo->arrproducto[$i]['prod_equiv_nombre']; ?></td>

<td style="<?echo $display[6]; ?>; text-align: center;" ><? echo $nodo->arrproducto[$i]['prod_equiv_valor']; ?></td>
<!--8--> <td style="<?echo $display[4]; ?>; text-align: center;" ><? echo $nodo->arrproducto[$i]['umed_sigla']; ?></td>
 
      
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

