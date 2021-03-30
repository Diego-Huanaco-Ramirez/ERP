<?     //include_once('php_head.php');;

require_once('../funcion/formprodclasifica.php');
require_once('../funcion/formproducto.php');
?> 
<!DOCTYPE html>
<html>
     <?//  include_once('head.php');; ?> 
  
<head>


        <title>ERP</title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
       <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css" type="text/css" />
       <link rel="stylesheet" href="https://www.jqwidgets.com/public/jqwidgets/styles/jqx.arctic.css" type="text/css" />
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--iconos del sistema  -->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
         
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
      
       </head>      
    <!-- The Modal -->
    <label id="fecha_actual" hidden ><? echo $fecha;?></label>
    <label id="hora_actual" hidden><? echo $hora;?></label> 
   <? //bingreso(); ?>
   <?// bproductos(); ?>
  <? //modalatencion(); ?>
    <!--</div>    fin modal bs BUSCADO PACIENTE -->
<body onload="inicio('553') "  >
  
 
   
<div class="container-fluid table-responsive " style=""  >
        
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12   col-lg-8 small">
    
    <div id="accordion">
    
 
<!------------- Registro nuevo producto----------------------------------------->

    <div class="card">
      <div class="card-header bg-light ">
        <a class="collapsed card-link" title="Registro paciente" data-toggle="collapse" href="#collapseTwo" style="color: black;" id="registro">
            <i class="fas fa-address-card"></i> NUEVO PRODUCTO  
        </a>
      </div>
      <div id="collapseTwo" class="collapse in" data-parent="#accordion">
          <label id="" hidden  ></label> 
          <label id="" hidden  ></label> 
          
        <label id="lbllast_id_agenda" hidden></label> 
         <div id="dvformpaciente2" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                    <? $ida= "551";  formproducto($ida);?>
        
                </div> 
   <!--body card-->
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
          <label id="" hidden  ></label> 
          <label id="" hidden  ></label> 
          
        <label id="lbllast_id_agenda" hidden></label> 
         <div id="dvformpaciente2" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                    <? $ida= "1";  formprodclasifica($ida,1,15,0,0);?>
        
                </div> 
   <!--body card------>
  </div>
 </div> <!--fin card------->
                   


 
</div> <!-- FIN  PRIMERA COLUMNA -->
                
  </div>
            </div>
        </div>
       <!-------MODAL PARAMETROS----------------------------------------------->
  <?     // mparametros(); ?>
<!------------------------------------------------------>
    </body>
</html>
<script type="text/javascript">
</script>
