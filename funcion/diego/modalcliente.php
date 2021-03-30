<?php

function bcliente($idb) {
    $value = 3;
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
                                    <?
                                    //$idb= "2"; 
                                    formusuario($idb);
                                    ?>
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
                    <? formlogin($idb, '#myModallogin'); ?>

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

                    <div class="row col-sm-12 col-12 col-md-12">

                        <div class="col-md-12 col-sm-12 col-12 col-lg-8">
                            <div class="conta row">


                                <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                        <label class="control-label "> ¿Quien recibira el producto? :</label> 
                                    </div> 
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0px !important;">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio1"  value="0" checked="true">yo
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio1" value="1" >Un tercero
                                            </label>

                                        </div> 
                                    </div>             
                                </div>


                                <div id="receptor" class="col-sm-12 col-12 col-md-12" style="padding-right: 0px !important;">

                                    <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label class="control-label " for="rut"><i class="fa fa-id-card"></i> RUT :</label> 
                                        </div> 
                                        <div class="col-6 col-sm-8 col-md-8  col-lg-4">
                                            <input  type="number" style="font-size: small;" id="<? echo "txt_rut" . $value; ?>" onblur="validarut2(<? echo $value; ?>);
                                                        generapass(prefid);" maxlength="8"   class="form-control small"   placeholder="99999999" > 
                                        </div> 
                                        <div class="col-4 col-sm-4 col-md-4  col-lg-2">
                                            <input type="text" style="font-size: small;"  id="<? echo "txt_dverificador" . $value; ?>" class="form-control small" placeholder="9"   onblur="validarut(<? echo $value; ?>)"  >  
                                        </div>  
                                        <div class="col-6 col-sm-4 col-md-4  col-lg-4" <? echo $hidden2; ?>>
                                            <label class="switch small" style="font-size: xx-small;" title="Rut nacional"  >
                                                <input type="checkbox" class="form-check-inline small"  id="<? echo "check1" . $value; ?>" onchange="estado_check(this);" checked>
                                                <span class="slider round small"  ></span>
                                            </label>
                                        </div> 
                                    </div>
                                    <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-12 col-sm-12 col-lg-12">
                                            <label class="control-label "><i class="fa fa-user"></i> Nombres :</label> 
                                        </div> 
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                            <input type="text" id="<? echo "txt_nombres" . $value; ?>" class="form-control" title="Nombre"  placeholder="Nombre.." > 
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-4">
                                            <input type="text" id="<? echo "txt_apellidop" . $value; ?>" title="Apellido paterno"  placeholder="Apellido paterno.." class="form-control"  > 
                                        </div> 
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-4">
                                            <input type="text" id="<? echo "txt_apellidom" . $value; ?>" title="Apellido materno"  placeholder="Apellido materno.." class="form-control"  > 
                                        </div>                              
                                    </div>
                                    <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <label class="control-label " ><i class="fa fa-phone"></i> Telefono :</label> 
                                        </div> 
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-6">
                                            <input type="text" id="<? echo "txt_movil" . $value; ?>" title="Teléfono movil" maxlength="12"  placeholder="Teléfono movil.." class="form-control"   maxlength="12" value="+569" > 
                                        </div>
                                    </div>
                                </div>

                                <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                        <label class="control-label "> ¿Direccion de envio? :</label> 
                                    </div> 
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0px !important;">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio" checked="" value="0">registrada
                                            </label>
                                        </div>
                                        <div class="form-check-inline">

                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optradio" value="1">nueva
                                            </label>

                                        </div> 
                                    </div>             
                                </div>

                                <div id="direccion" class="col-md-12" style="padding-right: 0px !important;">
                                    <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-12 col-sm-12 col-lg-12">
                                            <label class="control-label "><i class=" fa fa-address-card-o"></i> Domicilio :</label> 
                                        </div> 
                                        <div class="col-xs-12 col-md-12 col-lg-6">

                                            <input type="text" name="direccion" id="<? echo "direccion" . $value; ?>" class="form-control" placeholder="Domicilio" title="dirección">
                                        </div>
                                        <div class="col-xs-12 col-md-12 col-lg-6">
                                            <input type="text" name="Rerencia" id="<? echo "Rerencia" . $value; ?>" class="form-control" placeholder="Rerencia" title="Rerencia">
                                        </div>
                                    </div>
                                    <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-12 col-sm-12 col-lg-12">
                                            <label class="control-label "><i class=" fa fa-institution"></i> Comuna :</label> 
                                        </div> 
                                        <div class="col-xs-12 col-md-12 col-lg-6">
                                            <select class="form-control" name="sel_comunas" id="<? echo "sel_comunas" . $value; ?>" onchange="selcomuna(this.value)">
                                                <option value="0">Comuna</option>
                                                <option value="1">ARICA</option>
                                                <option value="2">ALTO HOSPICIO</option>
                                                <option value="3">IQUIQUE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="padding-right: 0px !important;">
                                    <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                                        <div class="col-xs-12 col-md-12 col-lg-12">
                                            <button class="col-md-12 btn-info form-control">Continuar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 col-12 col-sm-12 col-lg-4" >
                            <div class=" conta">
                                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                                <p>Product 1 <span class="price">$15</span></p>
                                <p>Product 2 <span class="price">$5</span></p>
                                <p>Product 3 <span class="price">$8</span></p>
                                <p>Product 4 <span class="price">$2</span></p>
                                <hr>
                                <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button"  class="btn btn-success" title="Comprar" onclick="modalpago()"  ><i class="fas fa-shopping-bag"></i></button>
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
                    <?
                    if (isset($_SESSION["rut"]) && $_SESSION["rut"] !== '') {
                        $rut = $_SESSION["rut"];
                    } else
                        $rut = '0';
                    ?>
                    <label id="lblrutlogueado" hidden><? echo $rut; ?></label>
                    <h4 class="modal-title"><i class="fas fa-cart-plus"></i> PRODUCTOS  <i class="fas fa-user"></i><label id="lbluserlogueado"><? echo $_SESSION["usuario"]; ?></label> </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>
                <div class="modal-body ">
                    <!--contenido tabla modal-->
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="row form-group-sm">
                            <div class="col-xs-12 col-md-12 col-lg-12">

                                    <div   id="carrito" style="   ">


                                    </div>

                             </div>  
                               <div class="col-xs-12 col-md-12 col-lg-12">

                                  

                             </div>  
                        </div>
                    </div>
                 </div>
                    <!-- fin contenido tabla modal-->
                    <div class="modal-footer">
                        <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                        <?
                        if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== '') {
                            $disabled = '';
                        } else
                            $disabled = 'disabled';
                        ?> 
                        <button type="button"  class=" btn-success btn-lg" title="Comprar" onclick="modalCompra()"  ><i class="fas fa-shopping-bag"></i></button>
                        <button type="button"  class="btn btn-info btn-md " onclick="closemodal('#modalsession')" ><i class="fas fa-redo"></i></button>
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
    <?php
    if (isset($_SESSION["rut"]) && $_SESSION["rut"] !== '') {
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
<? } ?>
