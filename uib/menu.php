 <div style="background: #e60000; ">

            <div id="nav-escritorio">

                <div id="primerafila" class="row justify-content-between">

                    <div id="logo" class=" col-md-2  text-center my-auto" >
                        <img src="logotipo.png" class="img-fluid2 rounded ">
                    </div>

                    <div id="" class=" row col-md-3 justify-content-center my-auto" >
                        <div class="col-md-4 text-center">
                            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-4 text-center">
                        <i class="fa fa-shopping-bag fa-2x "  aria-hidden="true"></i>
                        </div>
                    </div>
                    
                </div>


                <div class=" row justify-content-md-center">
                    <div class="col-md-4">
                        <nav class=" menu navbar navbar-expand-sm bg-dark navbar-dark nosticky "  >
                            <!--                        <a class="navbar-brand anav" href="#" style="font-weight:bolder ; ">Si eres:</a>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse sticky2" id="collapsibleNavbar">-->
                            <ul class="navbar-nav mx-auto " >
                                <li class="nav-item"  >
                                    <a class="nav-link anav" href="index.html" style="font-weight:bolder ;">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anav" href="" style=" font-weight:bolder ;">E-COMMERCE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anav" href="#" style="font-weight:bolder ;">USUARIO</a>
                                </li>

                            </ul>
                            <!--                        </div>  -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>

 <? include_once('carrusel_head.php'); ?> 
  <div class=" " style="margin-bottom:0;height: 20%;background:#ffffff ;  ">

            <div class="col-12 col-md-4 col-lg-6">


                <label id="" hidden><? echo $_SESSION["usuario"]; ?> </label>
            </div>
            <div class="col-12 col-md-8 col-lg-12">


                <label id="lbl_comprado"><? echo $cantidad; ?></label>
                <button id="btn_comprar_tmp"  
                        onclick="abrirmodal('#modalsession');consultar(); openmodal('modalsession')"     
                        class="btn btn-info " title="Agregar al carro"    ><i class="fas fa-cart-arrow-down"></i></button>

                <button id="btn_loqueo"  
                        onclick="abrirmodal('#myModallogin');openmodal('myModallogin')"     
                        class="btn btn-info " title="Agregar al carro"    ><i class="far fa-user"></i></button>
                <!--        <button id="btn_comprar_tmp"  
                        onclick="abrirmodal('#Modalcompra'); openmodal('Modalcompra')"     
                             class="btn btn-info "    ><i class="fas fa-cart-arrow-down"></i></button>-->

                <button type="button" data-toggle="modal" data-target="#Modalcliente" onclick="nuevopaciente('', '');  // openmodal('Modalcliente')"  class="btn btn-info" >Registrar</button><!-- fin contenido tabla modal-->
                <label id="lblusuario"> <h4 class="modal-title"><i class="fas fa-user-circle"></i><? echo $_SESSION["usuario"] . $_SESSION["cart_item"][0]['prod_nombre']; ?> </h4>  </label>
                <?
                if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== '') {
                    $hidden = '';
                } else
                    $hidden = 'hidden';
                ?> 
                <button id="btn_cerrar_sesion"  
                        onclick="cerrar()"     
                        class="btn btn-default " title="Cerrar sesión"  <? echo $hidden; ?>  ><i class="fas fa-user-times"></i></button>





            </div>
        </div>