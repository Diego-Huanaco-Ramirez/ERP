<?php
require_once('../clases/cls_lente.php');

function lstlentes($tipo){
    $me = new cls_lente();
    $me->settipo_lente($tipo);
    $me->selectdatatipo();
    for($i=0; $i < count($me->arrlente);$i++){  ?>
        <label class="form-check-label col-lg-12 col-12 ">
             <input id="<? echo "lente".$me->arrlente[$i]['id_lente'];?>" type="checkbox" class="form-check-input" value="<? echo $me->arrlente[$i]['id_lente'];?>" ><? echo $me->arrlente[$i]['nombre_lente'];?>
        </label>
    <? }
}   