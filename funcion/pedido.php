            <?php //no sirve
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
      for($i=0 ; $i < count($_SESSION["cart_item"]);$i++){
        $item_price = $_SESSION["cart_item"][$i][1];
		?>
				<tr>
				 
				<td><?php echo $_SESSION["cart_item"][$i][0]; ?></td>
				<td style="text-align:right;"><?php echo $_SESSION["cart_item"][$i][1]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$_SESSION["cart_item"][$i][1]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($_SESSION["cart_item"][$i][1],2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $_SESSION["cart_item"][$i][1];
				$total_price += ($_SESSION["cart_item"][$i][1]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>

