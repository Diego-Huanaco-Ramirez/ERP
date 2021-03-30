<?php

//require('../clases/fpdf181/fpdf.php');
//require_once('../clases/cls_atencion.php');
//require_once('../clases/cls_paciente.php');
 
//require_once('../clases/agenda.php');
//require_once('../clases/cls_licencia.php');
require_once('../servicio/funciones_adicionales.php');
//require_once('../servicio/funciones_paciente.php');
//require_once('../servicio/funciones_evaluacion.php');
//require_once('parametro.php');
//require_once('../clases/PDF.php');

require_once('../funcion/formpaciente.php');
 


report();


function report(){
    unset($id_paciente);
    unset($valor);
$id_paciente = intval($_GET['id_paciente']);
$valor = intval($_GET['value']);
 

 
   



 ?>
<!DOCTYPE html>
<html>
    <head>


        <title>Estadistica</title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>

         <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">-->
        <link href="../ui/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />-->
        <link href="../ui/css/jqx.arctic.css" rel="stylesheet" type="text/css"/>
        <link href="../fontawesome/css/all.css" rel="stylesheet" type="text/css"/>
  
        
        
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <!--iconos del sistema  -->
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->

        <link href="../ui/css/font-awesome.css" rel="stylesheet" type="text/css"/>
             <script src="../js/AjaxUpload.2.0.min.js" type="text/javascript"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>-->
        <script src="../js/popper.min.js" type="text/javascript"></script>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    
   <link href="../ui/css/datepicker/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="../ui/css/datepicker/style.css" rel="stylesheet" type="text/css"/>
        <script src="../ui/js/datepicker/jquery-1.12.4.js" type="text/javascript"></script>
        <script src="../ui/js/datepicker/jquery-ui.js" type="text/javascript"></script>
         <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>-->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
     <!-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
      <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>-->
      <!--  <script type="text/javascript" src="https://www.jqwidgets.com/public/jqwidgets/globalization/globalize.js"></script>-->
        
        <link href="../ui/css/toastr.css" rel="stylesheet" type="text/css"/>
        <link rel='stylesheet' href='../ui/css/Vista_principal.css'>
        <link rel="stylesheet" href="../ui/css/app2.css" type="text/css" />
        <link rel="stylesheet" href="../ui/css/style.css" >
         <link type="text/css" rel="stylesheet" href="../ui/css/tablefiltercss.css">
           <link type="text/css" rel="stylesheet" href="../ui/css/style.css">
          
           
         <script src="../js/toastr.js" type="text/javascript"></script>  
      
        <script type="text/javascript" src="../ui/js/app.js"></script>
        <script type="text/javascript" src="../ui/js/formjs.js"></script>
        <script type="text/javascript" src="../ui/js/agendajs.js"></script>
    
        <script type="text/javascript" src="../ui/js/receta.js"></script>
           <script src="../ui/js/registro.js" type="text/javascript" ></script>
           <script src="../ui/js/reporte.js" type="text/javascript"></script>
        
        <script type="text/javascript" src="../js/utilidades.js"></script>
        
        
         <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
 <!-- <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">-->
 <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
 <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <style>
.ui-datepicker {
   background: #333;
   border: 1px solid #555;
   color: #EEE;
}

.verticalText {
 writing-mode: vertical-lr;
 -ms-transform: rotate(270deg); /* IE 9 */
  -webkit-transform: rotate(270deg); /* Safari 3-8 chrome */
  -moz-transform: rotate(180deg);

width: 5px;
height: 80px;

    
 
}

table tr{
  min-height:  1px;
  max-height:  1px;
  height: 1px;
  padding: 1px;
/*  background-color: #433;*/
}

.cuerpo td{
  min-height:  1px;
  max-height:  1px;
  height: 1px;
  padding-top: 0;
  padding-right: 0;
  padding-bottom: 0;
  padding-left: 0;
  font-size: 10px;
/*  background-color: #433;*/
}
 
.heighmatriz{
  min-height:  20%; /*minimo de lo que ocultas */
  max-height:  32%; /*maximo de lo que muestras*/
  height: 100%;
  
  width: 100%;
  max-width: 100%;
  min-width: 80%;
 
 
}
 #myTable td{
  min-height:  1px;
  max-height:  1px;
  height: 1px;
  padding-top: 0px;
  padding-right: 1px;
  padding-bottom: 0px;
  padding-left: 1px;
   font-size: 14px;
   width: auto;
/*  background-color: #433;*/
}
 

.ajusteth
{
    padding: 0px;
    
    margin: 0px; 
}
 
 #Test th
{
    text-align: center; 
    vertical-align:  middle;
    height: 100%;
    align-content: flex-start;
  
  
     
}
#Test td 
{
    text-align: center; 
    font-size: 12px;
    height: auto;
    max-height:  1px;
    align-content: center;
    
  padding: 0;
     
      margin: 0px;
   
}
 
#Test p 
{
    text-align: center; 
    
    height: 1px;
    max-height:  1px;
    align-content: center;
    
}
/***/
 #Test2 th
{
    text-align: center; 
    vertical-align:  middle;
    height: 100%;
    align-content: center;
  
  
     
}
#Test2 td 
{
    text-align: center; 
    font-size: 12px;
    height: auto;
    max-height:  1px;
    align-content: center;
    vertical-align: center;
    
  padding: 0;
     
      margin: 0px;
   
}
 
#Test2 p 
{
    text-align: center; 
    
    height: 1px;
    max-height:  1px;
    align-content: center;
    
}

html, body {
  height: 100%;
  margin: 0;
  overflow-y: hidden; 
  overflow-x: hidden;
}

    .container-fluid {

        height: auto;
        width: 100%;

      /*  background: #f0e68c;*/
overflow-y: auto;
overflow-x: scroll;
    }
</style>
<script>
 
 
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
  </script>
  
   </head>
   <body onload=" obtpaciente('','',<? echo $id_paciente;?>,<? echo $valor;?>);" onunload="controlventana();">
       <label id="lblid_paciente3" hidden  ></label> 
        <div class="container-fluid table-responsive" style="  height: 100%;;">
            <div class="row" > <label class="titulo2"><h3></h3></label> </div>           
 
    <div class="col-md-6 col-lg-12 col-sm-4 col-xs-6">
      
    <div class="row form-group ">
                                        
      
     
      <div class="col-12 col-md-6 col-lg-3 col-sm-4 col-xs-6">
         
           <fieldset  style=" font-size: x-small;">
                                
                                    
                            
                                 
          </fieldset> 
         
      </div> 
         
                                       
   </div> 
  </div>    
  
   <div class="row form-group"  >
      
                <? $ida= "3";  formpaciente($ida);?>         
    
  
    
   </div> 
  
 
     
      

  
            
      </div>
    </body>
</html>

<?
    

}
?>