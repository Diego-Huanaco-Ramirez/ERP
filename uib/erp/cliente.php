<?php
session_start();
require_once('../servicio/funciones_adicionales.php');
// Start the session

date_default_timezone_set('America/Santiago');
$fecha = date('d/m/Y');
if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = $_GET['nombre'];
    $_SESSION["rut"] = $_GET['rut'];
    $_SESSION["tipo_personal"] = $_GET['tipo_personal'];
    $_SESSION["cod_tipo_especialista"] = $_GET['cod_tipo_especialista'];
} else {
    $_SESSION["usuario"] = $_SESSION["usuario"];
    $_SESSION["rut"] = $_SESSION["rut"];
    $_SESSION["tipo_personal"] = $_SESSION["tipo_personal"];
    $_SESSION["cod_tipo_especialista"] = $_SESSION["cod_tipo_especialista"];
}

//seguridad();
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>CLIENTE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- elementos para datepicker jquery-1.12.4.js no compatible con bs-->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <link type="text/css" rel="stylesheet" href="css/style.css">
       
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css">

        <script type="text/javascript" src="js/opagenda.js"></script> 
        <script type="text/javascript" src="js/tablefilterjs.js"></script>
        <script type="text/javascript" src="../js/AjaxUpload.2.0.min.js"></script>
        <script type="text/javascript" src="../js/utilidades.js"></script>
        <script type="text/javascript" src="../js/jquery.Rut.js"></script>
        <script type="text/javascript" src="js/funciones_grafico.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script>
            function validacionbolean(inpObj) {
                if (!inpObj.checkValidity()) {        
            return true;
                } else {        
            return false;
                }
            }
            function showAlert(message) {
                    //alert(message);
                    $('#alert').html('<div class="alert alert-danger alert-dismissable ">' +
                            '<button type="button" class="close" ' +
                            'data-dismiss="alert" aria-hidden="true">' +
                            '&times;' +
                            '</button>' + '<strong>' +
                            message + '</strong>' +
                            '</div>');
                    $('#alert').show();
                }
            function validacion(){
            
            msg = "Falta. \n";
                    bander = 0;
                    inpObj = document.getElementById("txt_rut");
                    if (validacionbolean(inpObj))
                    {
                        bander = 1;
                        msg += "Rut: No valido <br>";
                        //'<div class="alert alert-success alert-dismissable" ><h3> que paso aqui</h3></div>';
                    }
                    inpObj = document.getElementById("txt_verificador");
                    if (validacionbolean(inpObj))
                    {
                        bander = 1;
                        msg += "Rut: No valido y verificador novalido <br>";
                    }
                    inpObj = document.getElementById("txt_razon_social");
                    if (validacionbolean(inpObj))
                    {
                        bander = 1;
                        msg += "razon social: No valida <br>";
                    }
                    inpObj = document.getElementById("txt_giro");
                    if (validacionbolean(inpObj))
                    {
                        bander = 1;
                        msg += "Giro: No novalido <br>";
                    }
                    
                    
                    inpObj = document.getElementById("txt_fono");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "Telefono: No novalido <br>";
                    }
                    inpObj = document.getElementById("txt_email");
                    if (validacionbolean(inpObj))
                    {
                    
                        bander = 1;
                        msg += "Correo: No valido <br>";
                    }
                    if (bander == 0)
                    {
                        $('#alert').hide();
                        envio_datos();
                    }
                    else{
                        showAlert(msg);
                        
                    }  
                    
            }
            
            function limpiar(){
                    $("#txt_rut").val('');
                    $("#txt_verificador").val('');
                    $("#txt_razon_social").val('');
                    $("#txt_giro").val('');
                    //$("#txt_direccion").val('');
                    //$("#txt_ciudad").val('');
                    //$("#txt_comuna").val('');
                    $("#slcondicion").val('');
                    $('#datepicker_rpinicio').val('<?php echo date('d/m/Y'); ?>');
                    $("#txt_fono").val('');
                    //$("#txt_fax").val('');
                    $("#txt_email").val('');
                    $("#txt_contacto").val('');
                    //$("#txt_ranking").val('');
                    //$("#txt_servicio").val('');
                    $("#txt_nombref").val('');
                    
                    
                    
                }
                
                function numeros(e){
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = " 0123456789";
                especiales = [8,37,39,46];

                tecla_especial = false
                for(var i in especiales){
                    if(key == especiales[i]){
                tecla_especial = true;
                 break;
                    } 
                }
 
                if(letras.indexOf(tecla)==-1 && !tecla_especial)
                return false;
            }
              function cargar(){
                  data = "";
                    marco = "marcocliente";
                    ruta = "../funciones/busquedaespecialista_dia.php";
                    sendajax(marco, ruta, data);
                  
              }
            function envio_datos(){
                rut = $("#txt_rut").val();
                verificador = $("#txt_verificador").val();
                razon = $("#txt_razon_social").val();
                giro = $("#txt_giro").val();
                fecha = $("#datepicker_rpinicio").val();
                condicion = $("#slcondicion").val();
                telefono = $("#txt_fono").val();
                email = $("#txt_email").val();
                contacto = $("#txt_contacto").val();
                nombref = $("#txt_nombref").val();
                
                data='rut='+rut+'&verificador='+verificador+'&razon_social='+razon+'&giro='+giro+'&datepicker_rpinicio='+fecha
                + '&slcondicion='+condicion+'&fono='+telefono+'&email='+email+'&contacto='+contacto+'&nombref='+nombref;
                
                marco = "marcoclientedatos";
                ruta="";
                sendajax(marco, ruta, data);
          }
            
            </script>    
    </head>
        <body>
            <div class="container-fluid">

        <!--Inicio de Barra de Navegacion-->
        
  </div>
            <div class="container">
            <div class="panel-group">
                <div class="col-md-10 col-md-offset-1 col-xs-12 ">
            <div class="panel-info">    
            <div class="panel-heading">CLIENTE</div>    
            <div class="panel-body">
            <label id="" hidden></label>
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-12 row ">
                        <label class=" col-md-5 col-xs-10 control-label " for="rut">R.U.T :</label>
                        <div class="col-md-5  1 col-xs-8 row ">
                            <input type="text" id="txt_rut" class="form-control"   placeholder="9999999" pattern="\d{3,8}" required > 
                        </div>
                        <label class=" col-md-1 col-xs-1 control-label " >-</label>
                        <div class="col-md-3 col-xs-4 row">
                            <input type="text-inline" id="txt_verificador" class="form-control" placeholder="9"    pattern="\d|kK{1}" required >  
                        </div>   
                    </div>
                    <div class="col-md-1  col-xs-1 row">
<!--                        <span  class="glyphicon glyphicon-asterisk small"></span>                        -->
                    </div>
                    <div class="col-md-1 row col-xs-1   ">
                        <button type="button"  class="btn btn-info " data-toggle="modal" data-target="#myModal"
                                                onclick="cargar()"> <span class="glyphicon glyphicon-search small"></span></button>
                    </div>
                    <div class="col-md-4  col-xs-12 row    ">
                                    <label class=" col-md-5 col-xs-10 control-label" for="razon_social">Rázon social :</label>
                                    <div class="col-md-7 col-xs-10 row">
                                        <input type="text-inline" id="txt_razon_social" class="form-control"   placeholder="" pattern="[A-Za-z]{0,15}" required >
                                    </div>
                    </div>
<!--                    <div class="col-md-1  col-xs-12 row ">
                        <span  class="glyphicon glyphicon-asterisk small"></span>                        
                    </div>-->
                    <div class="col-md-1  col-xs-1  ">
                                                
                    </div>
                </div><!-- fin la primera fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-12 row ">
                                    <label class=" col-md-5 col-xs-10 control-label" for="giro">Giro :</label>
                                    <div class="col-md-8 col-xs-10 row">
                                        <input type="text-inline" id="txt_giro" class="form-control"   placeholder="" pattern="[A-Za-z0-9]{0,15}" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row ">
<!--                        <span  class="glyphicon glyphicon-asterisk small"></span>                        -->
                    </div>
                    <div class="col-md-1  col-xs-12 row  ">
                    </div>
                    
                    <div class="col-md-4  col-xs-12 row  ">
                                    <label class=" col-md-5 col-xs-10 control-label" for="fecha">Fecha de ingreso :</label>
                                    <div class="col-md-7 col-xs-10 row"> 
                                        <input type="text-inline" id="datepicker_rpinicio" class="form-control"   placeholder="dd/mm/yyyy" value="<?php echo date('d/m/Y'); ?>">
                                    </div>
                    </div>

                </div><!-- fin la segunda fila -->
<!--fin la tercera fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-12 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="condicion_pago">Condición de pago :</label>
                                    <div class="col-md-8 col-xs-10 row">
                                        <select  class="form-control"id="slcondicion" name="slcondicion">
                                        <option value=""></option>
                                        <option value="0">Contado </option>
                                        <option value="1">Tarjeta </option>
                                        <option value="2">Cheque </option>
                                    </select>
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    
                    <div class="col-md-4 col-xs-12 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="fono">Telefono :</label>
                                    <div class="col-md-7 col-xs-10 row">
                                        <input type="text-inline" id="txt_fono" class="form-control"  onKeyPress="return numeros(event)" pattern="[0-9]{0,8}" required >
                                    </div>
                    </div>
                    
                </div><!-- fin la cuarta fila -->

                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-12 row ">
                                    <label class=" col-md-5 col-xs-10 control-label" for="correo">Email :</label>
                                    <div class="col-md-8 col-xs-10 row">
                                        <input type="text-inline" id="txt_email" class="form-control"   placeholder="" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                    <div class="col-md-4  col-xs-12 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="contacto"> Contacto :</label>
                                    <div class="col-md-7 col-xs-10 row">
                                        <input type="text-inline" id="txt_contacto" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                </div><!-- fin la sexta fila -->
<!-- fin la septima fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-1 col-xs-12 row ">
                                    <label class=" col-md-5 col-xs-12 control-label" for="nombref">Nombre de fantasia :</label>
                                    <div class="col-md-8 col-xs-10 row">
                                        <input type="text-inline" id="txt_nombref" class="form-control"   placeholder="" required >
                                    </div>
                    </div>
                    <div class="col-md-1  col-xs-12 row">                        
                        </div>
                    <div class="col-md-1  col-xs-12 row">
                    </div>
                </div><!-- fin la septima fila -->
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-7  col-xs-12">
                        <button type="button" title="Aceptar"  class="btn btn-info "onclick=" validacion();"> <span  class="glyphicon glyphicon-floppy-disk small"></span>  agregar</button>
                        <button type="button" title=Limpiar"  class="btn btn-danger " onclick="limpiar()"> <span  class="glyphicon glyphicon-refresh small"></span>  limpiar</button>
                    </div>
                </div>
                <div class="row">
                    <div id="alert" class="col-md-8 col-xs-12">  </div>
                </div> 
                <div class="panel panel-default">
                <div class="row" >
                <div class="col-xs-12 col-md-12">  
                    <div class="panel-body" runat="server"  style="height: 390px;  overflow-y: scroll;">
                <div id="marcoreportetabla">
                </div>
                </div>
                </div>
                </div>
                </div>
            </div> <!-- fin body-->
            </div>
            </div>
            </div>
            </div>   
            
            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">listado Clientes</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-lg-9 col-md-10 col-sm-9">
                                    <div  id="marcocliente">

                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
            
        </body>
        
</html>






