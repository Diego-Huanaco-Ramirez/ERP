<?php
session_start();
//require_once('../funcion/objpopprestacion.php');
//require_once('../funcion/objpoppago.php');

//require_once('../funcion/modalparametro.php');
//require_once('../funcion/modalbpaciente.php');
//require_once('../funcion/formpaciente.php');
//require_once('../funcion/formatencion.php');
//require_once('../funcion/modalformatencion.php');
require_once('../servicio/funciones_adicionales.php');
//require_once('../funcion/estadistica_diaria.php');
require_once('../clases/cls_servicio_elemento.php');//TEMPORAL


require_once('../funcion/modalproducto.php');
require_once('../funcion/modalingreso.php');
require_once('../funcion/modalcliente.php');

require_once('../funcion/formprodclasifica.php');
require_once('../funcion/formproducto.php');
require_once('../funcion/formingreso.php');
require_once('../funcion/formingresoitem.php');
require_once('../funcion/formproveedor.php');
require_once('../funcion/formvalores.php');
require_once('../funcion/formbasic.php');
require_once('../funcion/contacto.php');
require_once('../funcion/formusuario.php');
include_once('../funcion/formlogin.php');

require_once('../funcion/objmarca.php');
require_once('../funcion/objmedida.php');
require_once('../funcion/objcategoria.php');
require_once('../funcion/objproducto.php');
require_once('../funcion/objelemento.php');
// Start the session  dfds 

date_default_timezone_set('America/Santiago');
$fecha=  date('d/m/Y');
$fecha2=  date('Y-m-d');
$hora=  date('h:m');

if(!isset($_SESSION["usuario"]) && isset($_GET['nombre']) && $_GET['nombre']!=""){
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
 
//seguridad();
?>  
