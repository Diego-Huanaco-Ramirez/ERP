<?     include_once('php_head.php');; ?> 
<!DOCTYPE html>
<html>
     <?  include_once('head.php');; ?> 
  

    <!-- The Modal -->
    <label id="fecha_actual" hidden ><? echo $fecha;?></label>
    <label id="hora_actual" hidden><? echo $hora;?></label> 
   <? bingreso(); ?>
   <? bproductos(); ?>
  <? //modalatencion(); ?>
    <!--</div>    fin modal bs BUSCADO PACIENTE -->
<body onload="inicio('553') "  >
  
 
   
<div class="container-fluid table-responsive " style=""  >
        
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12   col-lg-8 small">
    
    <div id="accordion">
    
    <div class="card">
      <div class="card-header bg-light ">
        <a class="collapsed card-link" title="Registro paciente" data-toggle="collapse" href="#collapseservicio" style="color: black;" id="servicio">
            <i class="fas fa-address-card"></i> NUEVO SERVICIO  
        </a>
      </div>
      <div id="collapseservicio" class="collapse in" data-parent="#accordion">
          <label id="" hidden  ></label> 
          <label id="" hidden  ></label> 
          
        <label id="lbllast_id_agenda" hidden></label> 
         <div id="dvformpaciente2" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                    <? $ida= "553";  formproducto($ida);?>
        
                </div> 
   <!--body card-->
  </div>
 </div> <!--fin card------->
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
