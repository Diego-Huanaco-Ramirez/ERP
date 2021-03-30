<?php

$total_quantity = 0;
$total_price = 0;
//$arreglo = array(array(1, 2, 312.121, 4.325, 5, 6), array(1, 2, 3, 78745, 4.845, 5, 6), array(1, 2, 3, 7845, 4.742, 5, 6));
$msg = '<table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th style="text-align:left;" width="20%">Nombre</th>
                        <th style="text-align:left;" width="15%">Codigo</th>
                           <th style="text-align:right;" width="5%">Cantidad</th>
                        <th style="text-align:right;" width="10%">Precio Unit</th>
                        <th style="text-align:right;" width="10%">Precio</th>
                        <th style="text-align:center;" width="5%">Eliminar</th>
                    </tr>   ';
for ($i = 0; $i < count($arreglo); $i++) {
    $item_price = intval($arreglo[$i][3]) * intval($arreglo[$i][2]);
    echo $item_price;
    $msg = $msg . ' <tr>
                 
                <td style="text-align:left;">' . $arreglo[$i][1] . '</td>
                <td style="text-align:left;">' . $arreglo[$i][0] . '</td>
                <td  style="text-align:right;">$' . $arreglo[$i][2] . '</td>
                <td  style="text-align:right;">$' . number_format($arreglo[$i][3], 2) . '</td>
                <td  style="text-align:right;">$ ' . number_format($item_price, 2) . '</td>
                <td style="text-align:center;">
                <button id="btn_remover" onclick="remover()" class="btn btn-danger btn-sm" title="Eliminar producto"    ><i class="fas fa-times"></i></button>
                </td>
                </tr>';
    $total_quantity += $arreglo[$i][2];
    $total_price += intval($item_price);
}
$msg = $msg . '<tr>
                <td colspan="2" align="right">Total:</td>
                <td align="right">' . $total_quantity . '</td>
                <td align="right" colspan="2"><strong>$' . number_format($total_price, 2) . '</strong></td>
                <td></td>
<              /tr>
        </tbody>
    </table> ';
echo $msg;
