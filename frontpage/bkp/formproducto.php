<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function formcarrusel($value){ $hidden='hidden'; ;
$value = true;
?>

 

<div class="card-body" style=" width:auto;  height: 100%;overflow-y: auto ;">  
    <label id="" style="font-size: small; font-weight: bold;" <? echo $visiblecoloryotro;?>  >CATEGORIA:</label>  <label id="<? echo  "CAT_ARBOL".$value;?>" style=""  ></label>
    <? 
    
    ?>
     

     
         
      <div class="owl-carousel owl-theme ">

      <?php
            foreach (glob("../producto/*.jpg") as $filename) {?>
                    <div class="item" > 
                          <div class="col-lg-6 col-md-6 mb-4">
                            <div class="card h-100">
                              <a href="#"><?php echo "<img  class='card-img-top' src='$filename'>  ";?></a>
                              <?php $filename = str_replace("./producto/", " ", $filename); 
                                    $filename = str_replace(".jpg", " ", $filename);
                              ?>
                              <div class="card-body">
                                  <div class="row text-center">
                                <h4 class="card-title col-12"> <a > <?php echo "$filename"?></a> </h4>
                                <!-- <p class="card-text col-md-4 small ">Por Mayor</p>
                                <p class="card-text col-md-4 small">texto2</p>
                                <p class="card-text col-md-4 small">texto3</p>
                                <span class="border-bottom col-12"></span>
                                <p class="card-text col-md-4 small ">Por Mayor</p>
                                <p class="card-text col-md-4 small">texto2</p>
                                <p class="card-text col-md-4 small">texto3</p>
                                <span class="border-bottom col-12"></span>
                                <p class="card-text col-md-4 small ">Por Mayor</p>
                                <p class="card-text col-md-4 small">texto2</p>
                                <p class="card-text col-md-4 small">texto3</p>
                                <button class="btn col-md-4 btn btn-secondary"> -</button>
                                <p class="card-text col-md-4 small">tValor</p>
                                <button class="col-md-4 btn btn-secondary">+</button> -->
                                     </div>
                              </div>
                              <div class="card-footer">
                                <button class="btn btn-secondary col-12">Agregar</button>
                              </div>
                            </div>
                          </div>
                    </div>
                    <?php }?>
                    
                          
       
          
    </div>
   
      <!------------------ZF------------------------------------->  
  
   </div>       

<?}
?>

