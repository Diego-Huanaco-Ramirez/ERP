<?
//include_once('php_head.php');
$modal = "Modalproducto";
;
?>

<?
//include_once('../funcion/dataweb.php');


//include_once('sesion_php.php');

    if (1) {
?> 

<!DOCTYPE html>

<html lang="es">

    <?// include_once('head.php'); ?> 
    <?
   // bproductos();
   // bcliente('2');


        ?>

 
    
    </head>

    <body onload="  limpiaSprod('B553', 'livesearch9', 'B553');">
 <? // include_once('menu.php'); ?> 
 <div class="container" style="width: 100%">
     <div class="row">  
        <div class="col-12 col-md-6 col-lg-8 " >
            <label id="lblcodigo_producto" hidden>0</label>
             <div class="row">
                        <? // formprodclasifica('B553', 'B553', 0, 1, 2); ?>  
             </div> 
             <div class="col-sm-4 col-lg-12"  >   
                <div class="row">
                    <div class="col-sm-4 col-lg-6">
                                <div class="fakeimg1"> <img id="imgcategoria" src="cat1.jpg" style="width:100%;height:190px;" alt=""/></div>
                    </div>
                    <div class="col-sm-4 col-lg-6">
                            <div class="row">  
                                    <input type="text" id="inputnombreproducto"   onkeyup="showResult(this.value, 3, 6)" class="form-control"  placeholder="Buscar productos.." title="Digite un productos">
                           </div>
                            <div class="row">  
                                    <label id="lblnombre_producto" style="font-weight: bold;">nombre productos:</label>
                           </div>
                           <div class="row">
                                    <div class="col-5 col-sm-4 col-md-4  col-lg-5" >$<label id="lblprecio_producto" style="font-weight: bold;"></label></div> 
                                    <div class="col-4 col-sm-4 col-md-4  col-lg-4" ><input type="number" id="txtcant_productos" title="cantidad" value="1" min="1" placeholder="" class="form-control"  ></div>
                                    <button id="btn_comprar" onclick="adicionar()" class="btn btn-success btn-sm" title="Agregar al carro"    ><i class="fas fa-cart-plus"></i></button>
                            </div>
                    </div> 
                 </div> 
            </div> 
         </div>
        <div class="col-12 col-md-6 col-lg-4 " >

                    <div id="livesearch9" style="height: 300px;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
        </div>

     </div>
            <div class="row">
                <?
                //formcarrusel('1');
                ;
                ?> 
            </div>
    
  </div>   





      






    </body>
    </html>
    <?
}
?>
