<?
include_once('php_head.php');
$modal = "Modalproducto";
;
?>

<?
include_once('../funcion/dataweb.php');


include_once('sesion_php.php');

    if ($bandera) {
?> 

<!DOCTYPE html>

<html lang="es">

    <? include_once('head.php'); ?> 
    <?
    bproductos();
    bcliente('2');
       ?>
    
   </head>
    <body onload="  limpiaSprod('B553', 'livesearch9', 'B553');">
 <? include_once('menu.php'); ?> 
 <div   class="container" style="width: 100%">
   <div id="marco" style="width: 100%;" >   
     <div class="row inner-div" style="width: 90%">
         <div class="col-12 col-md-6 col-lg-8 " >
            <label id="lblcodigo_producto" hidden>0</label>
            <div class="row"  >
                        <? formprodclasifica('B553', 'B553', 0, 1, 2); ?>  
             </div> 
         </div>
         
     </div>
             <div class="row inner-div " style=" height: 50%; width: 98%;  ">
                    <div class="col-12 col-sm-4 col-lg-3" >
                        <div class="fakeimg1" style="background-color: #ffeecc;"> <img id="imgcategoria" src="../img/cat1.jpg" style="width:100%;height:170px;border-radius: 30px; border-color: #ffeecc; " alt=""/></div>
                              </div>
                    <div class="col-12 col-sm-4 col-lg-3">
                            <div class="row form-group-sm">  
                                    <input type="text" id="inputnombreproducto"   onkeyup="showResult(this.value, 3, 6)" class="form-control"  placeholder="Buscar productos.." title="Digite un productos">
                           </div>
                            <div class="row form-group-sm">  
                                    <label id="lblnombre_producto" style="font-weight: bold;">nombre productos:</label>
                           </div>
                           <div class="row form-group-sm">
                                    <div class="col-4 col-sm-4 col-md-4  col-lg-5" >$<label id="lblprecio_producto" style="font-weight: bold;"></label></div> 
                                    <div class="col-4 col-sm-4 col-md-4  col-lg-4" ><input type="number" id="txtcant_productos" title="cantidad" value="1" min="1" placeholder="" class="form-control"  ></div>
                                    <button id="btn_comprar" onclick="adicionar()" class="btn btn-success btn-sm" title="Agregar al carro"    ><i class="fas fa-cart-plus"></i></button>
                            </div>
                             <? objcolor_diagrama();?>
                    </div>
                    </div> 
              
                      <div class="col-sm-4 col-lg-6 h-100">
                            <div class="table-responsive " style="width: 100%; height: 100%;"  >

                                <div id="livesearch9" style="height: auto;width:100%;overflow-y: auto; overflow-x: auto  ;">

                                    <table id="" class="table table-hover "  >
                                            <thead>
                                                <tr>
                                                    <th><i class="fas fa-check"></i></th>
                                                    <th>NOMBRE </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td ></td>
                                                    <td >Búsqueda sin resultados</td>

                                                </tr>


                                            </tbody>
                                        </table>
                                </div>

                                </div>

                     </div>
           </div>
   </div> 
        <div class="row">
               <?
                include_once('front1.php');
            //    include_once('front2.php');
                ?> 
         </div>
            <div class="row">
                <div id="dvcarrusel" class="col-12 col-md-6 col-lg-12 "  >   
                <?
                formcarrusel('1');
                ;
                ?> 
                </div>
            </div>
        
      
       </div>
   </div>           
   
                <?
               include_once('piepagina.php');
           
                ?> 
  
    




      






    </body>
    </html>
    <?
}
?>
