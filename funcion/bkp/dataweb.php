<?php
function puentes($arreglo, $opc){
if($opc == 1){
    $hidden = 'hidden';
    $nombretbody = 'bconta';
}else {
$hidden = ''; 
$nombretbody = 'bcanasta';

}
    
if(isset($arreglo)){
    $total_quantity = 0;
    $total_price = 0;
?>  
<table  class="table table-striped" style="" >
 
    <thead class="thead-dark">
<tr>
    <th class="col-7 col-md-7" style="text-align:left; "><div style="order:0;" >Nombre</div></th>
<th style="text-align:left;"   hidden>Codigo</th>
<th class="col-1 col-md-1" style="text-align:right; "><div style="order:0;">Cantidad</div></th>
<th style="text-align:right;" width="20%" <?php echo $hidden; ?>><div style="order:0;"   >$ Unit</div></th>
<th class="col-3 col-md-3" style="text-align:right;"><div style="order:0;" >Total</div></th>
<th style="text-align:center;" width="5%" <?php echo $hidden; ?>><div style="order:0;" ><i class="fas fa-times"></i></div></th>
<th style="text-align:center;" hidden>fecha</th>
<th style="text-align:center;" hidden>hora</th>
</tr>   
 </thead> 

 
    <tbody id="<?php echo $nombretbody; ?>">
<?php       
      for($i=0 ; $i < count($arreglo);$i++){
        $item_price = intval($arreglo[$i][3])*  intval($arreglo[$i][2]);
        ?>
                <tr>
                 
                <td class="col-7 col-md-7" style="text-align:left;"><div style="order:1;" ><?php echo $arreglo[$i][1]; ?></div></td>
                <td  style="text-align:left;" hidden><?php echo $arreglo[$i][0]; ?></td>
                <td class="col-3 col-md-1" style="text-align:right;;width:15%" ><div style="order:1;"  ><?php echo Numero0($arreglo[$i][2]); ?></div></td>
                <td  style="text-align:right;" hidden <?php echo $hidden; ?> ><div style="order:1;" hidden ><?php echo   Numero0($arreglo[$i][3]); ?></div></td>
                <td class="col-3 col-md-3" style="text-align:right;;width:25%" ><div style="order:1;"   ><?php echo Numero0($item_price); ?></div></td>
                               
                <td style="text-align:center;" hidden >
                <button id="btn_remover" onclick="remover()" class="btn btn-warning btn-sm" title="Eliminar producto"   <?php echo $hidden; ?>  ><i class="fas fa-times"></i></button>
                </td>
                <td  style="text-align:right;" hidden><?php echo $arreglo[$i][4]; ?></td>
                <td  style="text-align:right;" hidden><?php echo $arreglo[$i][5]; ?></td>
                </tr>

                <?php
                $total_quantity += $arreglo[$i][2];
                $total_price += intval($item_price);
        }
        ?>


</tbody>  
<tr>
    <td class="col-7 col-md-7" style="" align="right">Total:</td>
<td class="col-1 col-md-1" style="" align="right"><?php echo $total_quantity; ?></td>
<td class="col-3 col-md-3" style="" align="right" colspan="1"><strong><?php echo "$ ".Numero0($total_price, 2); ?></strong></td>
<td></td>
</tr>
</table>
<div class="row">
        <button type="button"  class=" btn-success btn-lg" title="Comprar" onclick="terminarcompra(this)"  >
        <i class="fas fa-shopping-bag"></i> Finalizar la compra</button> 
</div>

        
          <div class="row">
           <div id="datoscuenta" class="alert alert-success" hidden>
                            <p> Se debe transferir a la siguiente cuenta: </p>
                        </div>
          </div>
                
  <?php
} else {
?>
<div class="no-records">Su carro esta vacio</div>
<?php 
}
}



?>
