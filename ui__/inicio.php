<?php
session_start();
require_once('../servicio/funciones_adicionales.php');
//require_once('../clases/cls_personal.php');
date_default_timezone_set('America/Santiago');
$hora=  date('d/m/Y');


if(!isset($_SESSION["usuario"])){
$_SESSION["usuario"] = $_GET['nombre'];
$_SESSION["rut"] = $_GET['rut'];
$_SESSION["tipo_personal"] =  $_GET['tipo_personal'];
$_SESSION["cod_tipo_especialista"] =  $_GET['cod_tipo_especialista'];

$_GET['nombre'] = "";
$_GET['rut'] = "";
$_GET['tipo_personal'] = "";
$_GET['cod_tipo_especialista'] = "";
}else{
    $_SESSION["usuario"] = $_SESSION["usuario"];
$_SESSION["rut"] = $_SESSION["rut"];
$_SESSION["tipo_personal"] = $_SESSION["tipo_personal"];
$_SESSION["cod_tipo_especialista"] =  $_SESSION["cod_tipo_especialista"];
}
if($_SESSION["usuario"] != ''){
    $url= "oftalmologia.php";
   header('Location: oftalmologia.php');
}else{
    unset($_SESSION["usuario"]);
unset($_SESSION["rut"]);
unset($_SESSION["tipo_personal"]);
unset($_SESSION["cod_tipo_especialista"]);
 $_SESSION["usuario"]="";
  session_unset();
		session_destroy();
} 
    

function encodeURI($url) {
    // http://php.net/manual/en/function.rawurlencode.php
    // https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/encodeURI
    $unescaped = array(
        '%2D'=>'-','%5F'=>'_','%2E'=>'.','%21'=>'!', '%7E'=>'~',
        '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')'
    );
    $reserved = array(
        '%3B'=>';','%2C'=>',','%2F'=>'/','%3F'=>'?','%3A'=>':',
        '%40'=>'@','%26'=>'&','%3D'=>'=','%2B'=>'+','%24'=>'$'
    );
    $score = array(
        '%23'=>'#'
    );
    return strtr(rawurlencode($url), array_merge($reserved,$unescaped,$score));

}
 
?>
<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>


        <title>E-COMMERCE</title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>

         <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />-->
        <link href="css/jqx.arctic.css" rel="stylesheet" type="text/css"/>
        <link href="../fontawesome/css/all.css" rel="stylesheet" type="text/css"/>
  
        
        
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <!--iconos del sistema  -->
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->

        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
             <script src="../js/AjaxUpload.2.0.min.js" type="text/javascript"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>-->
        <script src="../js/popper.min.js" type="text/javascript"></script>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    
   <link href="css/datepicker/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/datepicker/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/datepicker/jquery-1.12.4.js" type="text/javascript"></script>
        <script src="js/datepicker/jquery-ui.js" type="text/javascript"></script>
         <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>-->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
     <!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
      <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>-->
      <!--  <script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>-->
        
        <link href="css/toastr.css" rel="stylesheet" type="text/css"/>
        <link rel='stylesheet' href='css/Vista_principal.css'>
        <link rel="stylesheet" href="css/app2.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" >
         <link type="text/css" rel="stylesheet" href="css/tablefiltercss.css">
           <link type="text/css" rel="stylesheet" href="css/style.css">
          
           
         <script src="../js/toastr.js" type="text/javascript"></script>  
      
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/formjs.js"></script>
         <script type="text/javascript" src="js/login.js"></script>
        
        
        <script type="text/javascript" src="js/agendajs.js"></script>
        <script type="text/javascript" src="js/registro.js"></script>
        <script type="text/javascript" src="js/receta.js"></script>
        <script src="js/atencion.js" type="text/javascript"></script>
        <script src="js/reporte.js" type="text/javascript"></script>
        
        <script type="text/javascript" src="../js/utilidades.js"></script>
        <script src="js/jquery.md5.js" type="text/javascript"></script>
  
</head>
<body onload="cargarlogin();cargaobjpersonal();">
    
  <div class="container-fluid">

        <!--Inicio de Barra de Navegacion-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img class="logo img-fluid" src="img/logo.png" alt=""></a>
                    <a class="navbar-brand" href="#"></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#">Historias</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                        <li  class="active"><a href="ingreso.php">Ingreso</a></li>
                        <li><a href="eval.html">Evaluacion</a></li>
                        <li><a href="#">Reportes</a></li>
                        <li><a href="#">Fármacos</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="navbar-collapse-1">
                        <li><a href="#" class="navbar-link"><label id="lblusuario"></label></a></li>
                        <li><button class="btn btn-default">cerrar sesion</button></li>
                    </ul>
                </div>
            </div>
        </nav>
  </div> 
    <div class="container">
        
        
    </div>
     

 
<script>
function cargaobjpersonal(){
  
   data = '';
   marco= "dvpersonal";
   ruta= "../funcion/listobjpersonal.php";
   sendajaxpass(marco,ruta,data);
}    
    

 
   



function cerrarlogin(){
$("#myModallogin").modal("hide");
}
    
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModallogin").modal("show");
    });
        $("#myModallogin").on('shown.bs.modal', function () {
       
    });
});
 
</script>
  
</body>
</html>

​

