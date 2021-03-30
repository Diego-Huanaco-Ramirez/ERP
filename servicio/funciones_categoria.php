<?php
require_once('../clases/cls_proc_categoria_producto.php');
//getarbol();

function getarbol($cat_id){
    $sincat = '';
    $nombre = "";
    $etiqueta = "";
  //  $cat_id= 84;
    $me = new cls_proc_categoria_producto();
    $me->setcat_id($cat_id);
    $me->selectarbol();
    if(count($me->arrcat)>0){
        for($i =count($me->arrcat)-1; $i>0 || $i == 0  ;$i--){
           if($i==0)
                 $nombre= $nombre.$me->arrcat[$i]['cat_nombre'];
           else
               $nombre= $nombre.$me->arrcat[$i]['cat_nombre']."->";
           
           $etiqueta= $etiqueta.$me->arrcat[$i]['cat_etiqueta'];
        }
        
        if(count($me->arrcat)<3){
            $veces = 3 - count($me->arrcat);
            for($i=0; $i < $veces;$i++){
                $sincat= $sincat.'000';
            }
        }
     $arbol = array($nombre,$etiqueta ) ;
      //  echo $nombre.'<br>';
      //  echo $etiqueta.$sincat;
    }
   return $arbol ;
}
