<?php

function bcliente($idb){
    $value= 3;
    
    ?>
     <!-- Modal -->
   <!-- INICIO Modal body  BUSCADO PACIENTE en agenda--> 
   <div class="modal fade modeless" id="Modalcliente" >
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registro de clientes </h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>
                <div class="modal-body">
                    <!--contenido tabla modal-->
                    
                <div class="col-12 col-md-12  col-lg-12">


                       <div class="row">

                            <div class="col-xs-12 col-md-12 col-lg-12">
                               <div id="dvformpaciente" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                                   <?//$idb= "2"; 
                                  formusuario($idb);?>
                               </div>

                           </div>  
                       </div>
                </div>     
    
   <!-- <p id="demo"></p>-->
 <!--  <form> <input type="text" size="30" onkeyup="showResult(this.value)"> </form>-->

                    <!-- fin contenido tabla modal-->
                    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                        <button type="button" class="btn btn-info btn-lg" data-dismiss="modal"><i class="fas fa-arrow-circle-left"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>       
  
  <!-- Modal -->
     <!-- Modal -->
  <div class="modal fade" id="myModallogin" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
       <!--   <button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
  <? formlogin($idb,'#myModallogin');?>
     
        <div class="modal-footer">
          <!--  <button type="button"  class="btn btn-default" data-dismiss="modal">Cerrar</button>-->
        </div>
      </div>
      
    </div>
  </div> 
</div>       
<!--</div>    fin modal bs -->



 
     <!-- The Modal -->
    <div class="modal fade" id="Modalcompra"  style="overflow: auto">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                      <? formentrega(1);?>
               
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="clearmarco('contable');" data-dismiss="modal">Close</button>
                    <button type="button"  class="btn btn-success" title="Comprar" onclick="clearmarco('contable');modalpago()"  ><i class="fas fa-shopping-bag"></i></button>
                </div>

            </div>
        </div>
    </div>
     
      <!-- The Modal -->
    <div class="modal fade" id="Modalpago"  style="overflow: auto">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div row>
                        <div class="alert alert-success">
                            <p> Se debe transferir a la siguiente cuenta: </p>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
     <!-- INICIO Modal body  BUSCADO PRODUCTOS sesion compra--> 
   <div class="modal fade" id="modalsession" >
<div class="modal-dialog modal-xl">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <?  if(isset($_SESSION["rut"]) && $_SESSION["rut"] !== ''){
                $rut= $_SESSION["rut"];
            }else
                $rut = '0';
        ?>
        <label id="lblrutlogueado" hidden><?  echo $rut; ?></label>
        <h4 class="modal-title"><i class="fas fa-cart-plus"></i> PRODUCTOS  <i class="fas fa-user"></i><label id="lbluserlogueado"><?  echo $_SESSION["usuario"]; ?></label> </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->
    <div  class="col-12 col-md-12 col-lg-12">
            <div class="row">
              
                   
                        <div class="col-12 col-md-10 col-lg-10"  id="carrito" style="">

                        </div>
                  
                        <div class="col-12 col-md-7 col-lg-7"  id="divformulario" style="" hidden >
                             <?  formentrega(1);?>
                         
                        </div>
                 


               
            </div>
  </div>
          <!-- fin contenido tabla modal-->
    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
    <?  if(isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== ''){   
         $disabled = '';
        }else
          $disabled = 'disabled';
     ?> 
                    <!--     <button type="button"  class=" btn-success btn-lg" title="Comprar" onclick="clearmarco('carrito');canasta();modalCompra();+consultarfinal();"  ><i class="fas fa-shopping-bag"></i></button> -->
                              
                       <button type="button"  class="btn btn-info btn-md " onclick="clearmarco('carrito');closemodal('#modalsession')" ><i class="fas fa-redo"></i></button>
    </div>
  
</div>
</div>
</div>  
       </div> 
     
       <style>
        .conta {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }
    </style>

    <script>



        $(document).ready(function () {
            $('input[name=optradio]').on('change', function () {
                if ($('input[name="optradio"]:checked').val() == 0)
                {
                    $("#direccion :input").prop("disabled", true);
                } else {
                    $("#direccion :input").prop("disabled", false);
                }
            });
        });

        $(document).ready(function () {
            $('input[name=optradio1]').on('change', function () {
                if ($('input[name="optradio1"]:checked').val() == 0)
                {
                    $("#receptor :input").prop("disabled", true);
                } else {
                    $("#receptor :input").prop("disabled", false);
                }
            });
        });

       function modalCompra() {

            closemodal('#modalsession');
            var usuario ;
            usuario = $("#lblusuario").text().trim();
            
    
    if ( usuario !== '') {
       
                abrirmodal("#Modalcompra");
                openmodal('Modalcompra');
       
    } else {
       
                alert("Por favor inicia sesion y vuelve a intentarlo");
                abrirmodal("#myModallogin");
                openmodal('myModallogin');
      
    }
 
            canasta();

        }

        function modalCompra0() {

            closemodal('#modalsession');
    <?php
    if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== '') {
        ?>
                abrirmodal("#Modalcompra");
                openmodal('Modalcompra');
        <?php
    } else {
        ?>
                alert("Por favor inicia sesion y vuelve a intentarlo");
                abrirmodal("#myModallogin");
                openmodal('myModallogin');
        <?php
    }
    ?>
            canasta();

        }

 function modalpago() {

            closemodal('#Modalcompra');

                abrirmodal("#Modalpago");
                openmodal('Modalpago');


        }
    </script>
     
<?} ?>
