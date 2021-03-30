 <head>


        <title>ERP</title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">-->
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>-->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />-->
        <!--<link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />-->
         <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <!--iconos del sistema  -->
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>-->
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jqx.arctic.css" rel="stylesheet" type="text/css"/>
        <link href="../fontawesome/css/all.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
  
       
        
        <script src="../js/AjaxUpload.2.0.min.js" type="text/javascript"></script>
        <script src="../js/popper.min.js" type="text/javascript"></script>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    
        <link href="css/datepicker/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/datepicker/style.css" rel="stylesheet" type="text/css"/>
        <!--  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
        <!--  <script src="js/datepicker/jquery-1.12.4.js" type="text/javascript"></script> -->
        <script src="js/datepicker/jquery-ui.js" type="text/javascript"></script>
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
        <script type="text/javascript" src="js/registro.js"></script>
         <script type="text/javascript" src="js/login.js"></script>
         <script type="text/javascript" src="js/jquery.md5.js"></script>
        <!--  <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/formjs.js"></script>
        <script type="text/javascript" src="js/agendajs.js"></script>
        
        <script type="text/javascript" src="js/receta.js"></script>
        <script src="js/atencion.js" type="text/javascript"></script>
        <script src="js/reporte.js" type="text/javascript"></script>-->
        <script src="js/contactojs.js" type="text/javascript"></script>
        <script src="js/basicjs.js" type="text/javascript"></script>
        <script src="js/productojs.js" type="text/javascript"></script>
        <script src="js/categoriajs.js" type="text/javascript"></script>
        <script src="js/serviciojs.js" type="text/javascript"></script>
        
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

