 <div style="background: #e69900; ">

            <div id="nav-escritorio">

                <div id="primerafila" class="row justify-content-between"  >

                    <div id="logo" class=" col-md-2  text-center my-auto" >
                        <img src="logotipo.png" class="img-fluid2 rounded " hidden>
                    </div>

 
                    
                </div>


                <div class=" row justify-content-md-center" style="height: 50px;">
                    <div class="col-md-4">
                        <nav class=" menu navbar navbar-expand-sm bg-dark navbar-dark nosticky "  >
                        
                            <ul class="navbar-nav mx-auto "   >
                                <li class="nav-item"  >
                                    <a class="nav-link anav" href="index.html" style="font-weight:bolder ;">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anav" href="" style=" font-weight:bolder ;" hidden>E-COMMERCE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link anav" href="#" style="font-weight:bolder ;" hidden>USUARIO</a>
                                </li>

                            </ul>
                            <!--    acceso de logueo -->
        <div class="col-md-3 col-12 text-center" >
            <label id="lbl_comprado"><? echo $cantidad; ?></label>
            <button id="btn_comprar_tmp"  
                    onmousemove="abrirmodal('#modalsession');consultar(); openmodal('modalsession')"     
                        onclick="abrirmodal('#modalsession');consultar(); openmodal('modalsession')"     
                        class="btn btn-success " title="Agregar al carro"    ><i class="fas fa-cart-arrow-down"></i></button>

                        
                        
            <button id="btn_loqueo"  
                        onclick="abrirmodal('#myModallogin');openmodal('myModallogin')"     
                        class="btn btn-success " title="Agregar al carro"    ><i class="far fa-user"></i></button>
                        
                        
                        
             <button type="button" data-toggle="modal" data-target="#Modalcliente" onclick="nuevopaciente('', ''); 
                 // openmodal('Modalcliente')"  class="btn btn-success"  >Registrar</button><!-- fin contenido tabla modal-->
                <label id="lblusuario" style="color: #ffffff;"> <h4 class="modal-title"><i class="fas fa-user-circle"></i><? echo $_SESSION["usuario"] . $_SESSION["cart_item"][0]['prod_nombre']; ?> </h4>  </label>
                <?
                if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== '') {
                    $hidden = '';
                } else
                    $hidden = 'hidden';
                ?> 
                <button id="btn_cerrar_sesion"  
                        onclick="cerrar()" style="color: #ffffff;"    
                        class="btn btn-default " title="Cerrar sesión"  <? echo $hidden; ?>  ><i class="fas fa-user-times"></i></button>

        </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

 <? include_once('carrusel_head.php'); ?> 
<div class="row form-group"></div>
  