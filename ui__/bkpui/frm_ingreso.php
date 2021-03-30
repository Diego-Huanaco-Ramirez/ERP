<?
//session_start();
//require_once('../funcion/objpopprestacion.php');
//require_once('../funcion/objpoppago.php');

//require_once('../funcion/modalparametro.php');
//require_once('../funcion/modalbpaciente.php');
//require_once('../funcion/formpaciente.php');
//require_once('../funcion/formatencion.php');
//require_once('../funcion/modalformatencion.php');
require_once('../servicio/funciones_adicionales.php');
//require_once('../funcion/estadistica_diaria.php');


require_once('../funcion/modalproducto.php');
require_once('../funcion/modalingreso.php');
require_once('../funcion/formprodclasifica.php');
require_once('../funcion/formproducto.php');
require_once('../funcion/formingreso.php');
require_once('../funcion/formingresoitem.php');
require_once('../funcion/formproveedor.php');

require_once('../funcion/objmarca.php');
require_once('../funcion/objmedida.php');
require_once('../funcion/objcategoria.php');
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
<!DOCTYPE html>
<html>
    <head>


        <title>ERP</title>
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
        <!--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
      <!--  <script src="js/datepicker/jquery-1.12.4.js" type="text/javascript"></script> -->
        <script src="js/datepicker/jquery-ui.js" type="text/javascript"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>-->
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
           <link href="css/styleform.css" rel="stylesheet" type="text/css"/>
           
         <script src="../js/toastr.js" type="text/javascript"></script>  
        <script type="text/javascript" src="js/formjs.js"></script>
    <!--  <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/formjs.js"></script>
        <script type="text/javascript" src="js/agendajs.js"></script>
        <script type="text/javascript" src="js/registro.js"></script>
        <script type="text/javascript" src="js/receta.js"></script>
        <script src="js/atencion.js" type="text/javascript"></script>
        <script src="js/reporte.js" type="text/javascript"></script> -->
         <script src="js/productojs.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/utilidades.js"></script>
        
        
         <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
 <!-- <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">-->
 <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
 <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <style>
 
</style>
<script>
 /*
  var procesoID;

    function alternarColor() { 
      var oElem = document.getElementById("mi_mensaje"); 
      oElem.style.color = oElem.style.color == "red" ? "blue" : "red"; 
      updateagenda();
    } 

    function detenerCambioDeColor() { 
      clearInterval(procesoID); 
    }

    procesoID = setInterval(alternarColor, 8000);*/
  $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sab'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
     
    function refrescar(){
         
 //      }
        //  blopenpaciente= true; 
  
    }
    function cerrarventana(){
        alert("cierre");
    }
    
    function dato(data){
        alert(data);
    }
  </script>
  
    </head>

    <!-- The Modal -->
    <label id="fecha_actual" hidden ><? echo $fecha;?></label>
    <label id="hora_actual" hidden><? echo $hora;?></label> 
   <? bingreso(); ?>
   <? bproductos(); ?>
  <? //modalatencion(); ?>
    <!--</div>    fin modal bs BUSCADO PACIENTE -->
<body onload="//cargaFuncion();//refrescar2();"  >
    <div id="mi_mensaje">
        <p hidden>¡Hola mundo!</p>
  </div>
  <button onclick="detenerCambioDeColor();" hidden>Detener</button>
   
<div class="container-fluid table-responsive " style=""  >
        
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12   col-lg-6 small">
    <div id="menu">
           <button type="button" class="btn btn-dark btn-sm" onclick="cerrar()">cerrar sesion</button>
           <label id="lblusuario"><?php  echo $_SESSION["usuario"]; ?></label>
           <label id="test"></label>
           <input type="text" id="rut_usuario" value="<?echo $_SESSION["rut"];?>" hidden>
                        
    
     
              <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#ModalBusqueda2" title="Buscador de pacientes"> <i class="fas fa-search" hidden></i></button>
              <button type="button" class="btn btn-info btn-sm" id="Btnrpt4"  data-toggle="tooltip" data-placement="right" title="Imprimir Reporte diario compacto" hidden><i class="far fa-file-pdf"></i></i></button>
              <button id="btnstatic"   class="btn btn-success btn-sm" onclick="openstatic()" title="Abrir estadística" hidden ><i class="fas fa-chart-line"></i></button>
              
              <button id="btncerrarcontroles"   class="btn btn-danger btn-sm" onclick="cierracontrol()" title="Cerrar controles paciente" disabled hidden><i class="fas fa-times"></i></button>
              <button id="btncerrarcontroles"   class="btn btn-info btn-sm" onclick="ocultacalendario()" title="Cerrar controles paciente" hidden><i class="fas fa-times"></i></button>
              <button id="btncerrarcontroles"   class="btn btn-dark btn-sm" onclick="mostrarcalendario()" title="Cerrar controles paciente" hidden><i class="fas fa-times"></i></button>
    <label class="switch xx-small " title="Rut nacional" style="font-size: 10px;" hidden  >
        <input type="checkbox" class="input-group-sm "  id="checkhide"  onchange="esconder();"  checked>
             <span class="slider round small"  ></span>
     </label>
              <label id="lblpendiente" hidden></label>         
  </div>      
    <div id="accordion">
    <!---------------   registro ingreso--------------------------------------->
    <div class="card"  >
        <div class="card-header bg-ligth ">
                                <a class="collapsed card-link " title="Ficha paciente" data-toggle="collapse" href="#collapseThree" style="color: black;" id="fichapaciente1">
                                   <i class="fas fa-file-medical-alt " style=""></i> ORDEN DE COMPRA
                                </a>
        </div>
        <div id="collapseThree" class="collapse" data-parent="#accordion">    
                <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_id_fila" class="form-control"   placeholder=""  hidden > 
                                            <input type="text" id="txt_id_agenda" class="form-control"   placeholder="" hidden > 
                </div>
                            <? $ida= "1"; // formingreso($ida);?>     
                               <? $ida= "1"; // formingresoitem($ida);?>
        
        </div> <!----FIN COLLAPSE------->
    </div>  <!----FIN CARD------->
  
                        <!---------------   registro ingreso--------------------------------------->
    <div class="card"  >
        <div class="card-header bg-ligth ">
                                <a class="collapsed card-link " title="Ficha paciente" data-toggle="collapse" href="#collapseThree1" style="color: black;" id="fichapaciente1">
                                   <i class="fas fa-file-medical-alt " style=""></i> INGRESO DE PRODUCTOS
                                </a>
        </div>
        <div id="collapseThree1" class="collapse" data-parent="#accordion">    
                <div class="col-12 col-sm-12 col-lg-8">
                                            <input type="text" id="txt_id_fila" class="form-control"   placeholder=""  hidden > 
                                            <input type="text" id="txt_id_agenda" class="form-control"   placeholder="" hidden > 
                </div>
                            <? $ida= "1"; // formingreso($ida);?>     
                               <? $ida= "1"; // formingresoitem($ida);?>
        
        </div> <!----FIN COLLAPSE------->
    </div>  <!----FIN CARD------->
  
<!------------- Registro nuevo producto----------------------------------------->

    <div class="card">
      <div class="card-header bg-light ">
        <a class="collapsed card-link" title="Registro paciente" data-toggle="collapse" href="#collapseTwo" style="color: black;" id="registro">
            <i class="fas fa-address-card"></i> NUEVO PRODUCTO  
        </a>
      </div>
      <div id="collapseTwo" class="collapse in" data-parent="#accordion">
          <label id="lblid_paciente1" hidden  ></label> 
          <label id="lblid_paciente2" hidden  ></label> 
          
        <label id="lbllast_id_agenda" hidden></label> 
         <div id="dvformpaciente2" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                    <? $ida= "1";  formproducto($ida);?>
        
                </div> 
   <!--body card------>
  </div>
 </div> <!--fin card------->
 
 <div class="card" hidden>
      <div class="card-header bg-light ">
        <a class="collapsed card-link" title="Registro paciente" data-toggle="collapse" href="#collapseITEM" style="color: black;" id="registroitem">
            <i class="fas fa-address-card"></i> NUEVO ITEM  
        </a>
      </div>
      <div id="collapseITEM" class="collapse in" data-parent="#accordion">
          <label id="lblid_paciente1" hidden  ></label> 
          <label id="lblid_paciente2" hidden  ></label> 
          
        <label id="lbllast_id_agenda" hidden></label> 
         <div id="dvformpaciente2" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                    <? $ida= "1";  formproveedor($ida);?>
        
                </div> 
   <!--body card------>
  </div>
 </div> <!--fin card------->
 <!------------- Registro de MANTENEDORES---------------------------------------->

    <div class="card">
      <div class="card-header bg-light ">
        <a class="collapsed card-link" title="Registro paciente" data-toggle="collapse" href="#collapseOne" style="color: black;" id="registroitem">
            <i class="fas fa-address-card"></i> CATEGORIA DE PRODUCTO
        </a>
      </div>
      <div id="collapseOne" class="collapse in" data-parent="#accordion">
          <label id="lblid_paciente1" hidden  ></label> 
          <label id="lblid_paciente2" hidden  ></label> 
          
        <label id="lbllast_id_agenda" hidden></label> 
         <div id="dvformpaciente2" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                    <? $ida= "1";  formprodclasifica($ida,1,5);?>
        
                </div> 
   <!--body card------>
  </div>
 </div> <!--fin card------->
<!------------- Registro de ITEM----------------------------------------->


<!-----------Estadistica------------------------------------------->                      
<div class="card" hidden>
  <div class="card-header bg-light ">
    <a class="collapsed card-link" title="Estadistica" data-toggle="collapse" href="#collapseOne" style="color: black;">
      <i class="fas fa-chart-line"></i>
    </a>
  </div>
  <div id="collapseOne" class="collapse" data-parent="#accordion">
 <div class="col-md-6 col-lg-12 col-sm-4 col-xs-6">
     <div class="row form-group x-small"></div> 
    <div class="row form-group x-small">
                                        
      
     
      <div class="col-12 col-md-6 col-lg-5 col-sm-4 col-xs-6">
         
           <fieldset  style=" font-size: x-small;">
                                
                                    
            <label>
                <input  class="radio-inline radio-s" id="radio_fecha_atencion"  name="radio_fecha_atencion" type="radio"   value="1" checked="checked">
                Fecha
            </label>    
            <label>
               <input   class="radio-inline radio-s" id="radio_fecha_atencion"  type="radio" name="radio_fecha_atencion"  value="2"  >
               Mes
            </label>
            <label  >
                <input  class="radio-inline  radio-s" id="radio_fecha_atencion"  type="radio" name="radio_fecha_atencion"  value="3">
                Año
            </label>
                <button class="btn btn-primary btn-sm "  style=" font-size: x-small;" title="Búsqueda de estadística" onclick="cargar_reporte();"  >
               <i class="fas fa-search"></i>
             </button>                  
                                 
          </fieldset> 
         
      </div> 
       <div class="col-12 col-md-7 col-lg-7 col-sm-4 col-xs-6">  
       <div class="col-6 col-md-6 col-lg-6 col-sm-4 col-xs-6">
           <input type="date" id="fecha_busq1" class="form-control-sm" title="fecha inicio" required=""  placeholder="dd/mm/yyyy" onclick="validabusqueda()" > </input>
      </div>    
      <div class="col-6  col-md-6 col-lg-6  col-sm-4 col-xs-6">
          <input type="date" id="fecha_busq2" class="form-control-sm" title="fecha fin"  placeholder="dd/mm/yyyy" onclick="validabusqueda()" > </input>
      </div>
       </div>         
                    
                                       
   </div> 
  </div>     
   <div class="row form-group"  >
   <?  //  estadistica(); ?>
       <div id="dvestadistica" class="col-12 col-sm-12 col-lg-12"  ></div>
   </div>   
 
  </div>
         
    </div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 small "> 
<!-------------Calendario----------------------------------------->
<div class="row">
    <div class="col-xs-5 col-sm-5 col-lg-5 " hidden>   
    <center>
        <div class="form-group "><div class="" id="datepicker" onchange="loadagenda('')" ></div></div>
       <input type="text" id="alternate" size="20" hidden >
       <input type="text" id="alternate2"  size="20" hidden >
     </center>
 </div>    
  <div class="col-xs-7 col-sm-7 col-lg-7 xx-small">
  <!--    <label class="switch xx-small " title="Rut nacional" style="font-size: 10px;"  >
        <input type="checkbox" class="input-group-sm "  id="checkhide"  onchange="esconder();"  checked>
             <span class="slider round small"  ></span>
     </label>
              <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#ModalBusqueda2" title="Buscador de pacientes"> <i class="fas fa-search"></i></button>
              <button type="button" class="btn btn-info btn-sm" id="Btnrpt4"  data-toggle="tooltip" data-placement="right" title="Imprimir Reporte diario compacto" hidden><i class="far fa-file-pdf"></i></i></button>
              <button id="btnstatic"   class="btn btn-success btn-sm" onclick="openstatic()" title="Abrir estadística" ><i class="fas fa-chart-line"></i></button>
              
              <button id="btncerrarcontroles"   class="btn btn-danger btn-sm" onclick="cierracontrol()" title="Cerrar controles paciente" disabled><i class="fas fa-times"></i></button>
              <button id="btncerrarcontroles"   class="btn btn-info btn-sm" onclick="ocultacalendario()" title="Cerrar controles paciente" hidden><i class="fas fa-times"></i></button>
              <button id="btncerrarcontroles"   class="btn btn-dark btn-sm" onclick="mostrarcalendario()" title="Cerrar controles paciente" hidden><i class="fas fa-times"></i></button>
    -->
  </div>  
</div> <button id="btncerrarcontroles"   class="btn  btn-sm" onclick="cierracontrol()" title="Cerrar controles paciente" ><i class="fas fa-toggle-off"></i></button>   
     <div  id="atencion">
          <i class="fas fa-file-medical" id="icono"></i>
     </div>
      
     <div class="table-responsive" id="marcolistatencion"   style="height: 200px;;overflow-y: auto;"   ></div>
      
</div>
                 <!--       <div class="card">
                            <div class="card-header bg-light ">
                                <a class="card-link" data-toggle="collapse" href="#collapseFour" style="color: black;">
                                    <i class="fas fa-calendar-alt"></i>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                      
                                </div>
                            </div>
                             
                        </div> -->
 
<!------------------------------------------------------>
    </div> <!-- FIN  acordion -->
</div> <!-- FIN  PRIMERA COLUMNA -->
                
<!--------objetos content popup pago y prestacion---------------->                
<? //listaprestaciones(); //listapago();?>
<!-------------------inicio 454--------------------fin 1579--------------->
 <!-- INICIO continua primera  COLUMNA calendario -->

 <!-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 small ">-->
    
    
  <!--    <div id="accordion2"  >
  <!-----------historial de controles------------------------------------------->                      
      <!--    <div class="card">
          <div class="card-header bg-light ">
              <a class="collapsed card-link" title="Atenciones    " data-toggle="collapse" href="#collapsex" style="color: black;" id="atencion">
              <i class="fas fa-file-medical"></i>
            </a>
           </div>
          <div id="collapsex" class="collapse " data-parent="#accordion2">
                <div class="card-body" >
                    
                    <div class="row">
                        
                        <div id="marcolistatencion"    ></div>
                      </div>  
                    
                </div>
        </div>
     </div>  
  </div> -->
<!--  </div>-->
                  <!-- INICIO SEGUNDA  COLUMNA -->
     <div class="col-xs-12 col-sm-8 col-md-8  col-lg-6 small" style=" "  >
     <div class="col-8 col-sm-12 col-lg-5 ">  
         <input type="date" id="txt_fecha2" style="font-size:  x-large;" title="Fecha" class="form-control small"   placeholder="" value="<? echo $fecha2;?>" onchange="loadagenda(this.value);" onblur="loadagenda(this.value);"  onfocus ="" hidden  > 
     </div>   
        <div class="table-responsive heighmatriz  "    >
 
            <table id="Tmain" class="table table-condensed table-sm small  " style=""  >
                <thead class="table-bordered  thead-light  " onmouseout="updateagenda();"  >
                    <tr>
                                    <th style="width: 5%;text-align: center;">ITEM</th>
                                    <th style="width: 5%;text-align: center;">CANT</th>
                                    <th style="width: 40%; text-align: center;">CODIGO DEL PRODUCTO</th>
                                    <th style="width: 14%;text-align: center;">PRECIO</th>
                                    <th style="width: 13%;text-align: center;">TOTAL</th>
                                    <th style="width: 18%;text-align: center;">FUNCIONES .</th>
                                    <th style="display: none">id_agenda</th>
                                    <th style="display: none">estado</th>
                                    <th style="display: none">rut</th>
                                    <th style="display: none">id</th>
                                    <th style="display: none">id_paciente</th>
                                    <th style="display: none">edad</th>
                    </tr>
                </thead> 
                <tbody id="btabla" class="table-bordered small    "   > 
     <? 
  
   $hora_ini='09:00';  
   $hora_max= "21:00";
   $minutes_to_add = 10;
   $arrhora[0]=$hora_ini;
      for($i=1; strtotime($arrhora[$i-1]) < strtotime($hora_max);$i++ ){
         $time = new DateTime($arrhora[$i-1]);
         $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
         $stamp = $time->format('H:i:s');
         $stamp1 = $time->format('H:i');
         $arrhora[$i]=$stamp1;
    
       }
          for($i=1;$i< count($arrhora);$i++){ ; 
          $fila="fila".$i;  
          $btnedit="btnedit".$fila;
          $btnhitorial="btnhistorial".$fila;
          $btnficha="btnficha".$fila;
          $btneliminar="btneliminar".$fila;
          $btnpop1 = "btnpop1".$fila;
          $btnpop2 = "btnpop2".$fila;
          //historial(this);
          ?>    
                                
                    <tr id="<? echo  $fila;?>" class="cuerpo">

            <td   style="font-size:  x-small;text-align: center;font-weight:Bold; "><? echo  $i;?></td>
            <td onmouseout="//updateagenda();" style="text-align: center; "></td>
            <td style="font-size:  x-small; font-weight: 400;  "></td>
            <td style="text-align: center; " class="" data-toggle="popover"  id="<? echo $btnpop1 ;?>" onclick="guardarid('<? echo  $fila;?>')"></td>
            <td style="text-align: center; " class="" data-toggle="popover" id="<? echo $btnpop2 ;?>" onclick="guardarid2('<? echo  $fila;?>')"></td>
            <td style=" ">
                <button style="font-size:  xx-small; " id="<? echo $btnedit ;?>" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#collapseTwo" title="Datos paciente"  onclick="pacienteficha(this, event,1);obtpaciente(this, event,'',1);" disabled >
                    <i class="fas fa-angle-left" style=' '></i>
                </button>
                <button style="font-size:  xx-small; " id="<? echo $btnhitorial ;?>" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#collapsex" title="Historial paciente"   onclick="listacontrol(this,1);historial(this,1);" disabled >
                    <i class="fas fa-file-medical" style=' '></i>
                </button>
        <!--        <button style="font-size: xx-small; " id="<? echo $btnficha ;?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modalatencion"   onclick="openatencion();//pacienteficha(this, '',2);openmodalatencion2();" disabled > -->
                  <!--          <button style="font-size: xx-small; " id="<? echo $btnficha ;?>" class="btn btn-success btn-sm"    onclick="pacienteficha(this, '',3);openatencion(this);//openmodalatencion2();" disabled >
                   <i class="fas fa-user-md" style=' '></i>
                </button>-->
                <button style="font-size: xx-small; " id="<? echo $btneliminar ;?>" class="btn btn-danger btn-sm borrar" title="Eliminar registro" onclick="eliminarAgenda(this)" disabled >
                    <i class="fas fa-times" style=' '></i>
                </button>
            </td>
            <td style="display: none;"></td>                                        
            <td style="display: none;"></td>
            <td style="display: none;"></td>
            <td style="display: none;"><? echo  $fila;?></td>
            <td style="display: none;"></td>
            <td style="display: none;"></td>
      </tr>
          <? }  ?>                      
                </tbody>       
                        </table>   
                    </div>
                </div>  <!-- fin SEGUNDA  COLUMNA -->
<!--------------inicio 432 ----------fin 1579------------------------------>
            </div>
        </div>
       <!-------MODAL PARAMETROS----------------------------------------------->
  <?     // mparametros(); ?>
<!------------------------------------------------------>
    </body>
</html>
<script type="text/javascript">
</script>
