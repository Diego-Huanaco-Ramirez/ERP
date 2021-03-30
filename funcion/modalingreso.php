<?php

function bingreso(){ ?>
     <!-- Modal -->
   <!-- INICIO Modal body  BUSCADO proveedor en agenda--> 
   <div class="modal fade modeless" id="Modalproveedor2" >
        <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">BUSCADOR DE proveedor </h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>
                <div class="modal-body">
                    <!--contenido tabla modal-->
                    
 <div class="col-12 col-md-12  col-lg-12">
  <div class="row">
      
<!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres.." title="Type in a name">-->
  
       <div class="col-3 col-md-3  col-lg-2" >
           <input type="text" id="inputnombre1" onblur="validateshowResult();"  onkeyup="showResult(this.value, 1,1)" class="form-control"  placeholder="Buscar nombres.." title="Digite un nombre">
       </div>     
       <div class="col-3 col-md-3  col-lg-2">
          <input type="text" id="inputapellido1" onblur=""   onkeyup="showResult(this.value, 2,1)" class="form-control"  placeholder="Buscar alias.." title="Digite un alias">
       </div>  
       <div class="col-3 col-md-3  col-lg-2">
          <input type="text" id="inputapellidos2"   onkeyup="showResult(this.value, 2,1)" class="form-control"  placeholder="Buscar rut.." title="Digite un rut">
       </div> 
          
     
                           
    </div>
     
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-7 small">
                <div id="livesearch1" style="height: 100%;overflow-y: auto;overflow-x: hidden;">
                    
                </div>
                
            </div>   
             <div class="col-xs-12 col-md-12 col-lg-5">
                <div id="dvformpaciente" style="height: 100%;overflow-y: auto;overflow-x: hidden;border:1px solid black;">
                    <?$idb= "2"; //formpaciente($idb);?>
                </div>
                
            </div>  
        </div>
 </div>     
    
   <!-- <p id="demo"></p>-->
 <!--  <form> <input type="text" size="30" onkeyup="showResult(this.value)"> </form>-->

                    <!-- fin contenido tabla modal-->
                    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>       
  
  <!-- Modal -->
   <!-- INICIO Modal body  BUSCADO ORDEN COMPRA en otros--> 
   <div class="modal fade modeless" id="Modalordencompra" >
<div class="modal-dialog modal-lg">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">BUSCADOR DE ORDEN DE COMPRA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->

    <div class="row">
    <div class="col-6 col-md-6">
        <input type="text" id="inputnombre"   onkeyup="showResult(this.value, 1,2)" class="form-control"  placeholder="Buscar FECHA1.." title="Digite un nombre">
    </div>     
    <div class="col-6 col-md-6">
        <input type="text" id="inputcodigo"   onkeyup="showResult(this.value, 2,2)" class="form-control"  placeholder="Buscar FECHA2.." title="Digite un CODIGO">
    </div>  
    </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearch2" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
    </div>   
    </div>
          <!-- fin contenido tabla modal-->
    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
</div>
</div>
</div>  
   
    <!-- INICIO Modal body  BUSCADO ORDEN COMPRA en otros--> 
   <div class="modal fade modeless" id="Modalproveedor" >
<div class="modal-dialog modal-lg">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">BUSCADOR DE PROVEEDOR</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->

    <div class="row">
    <div class="col-6 col-md-6">
        <input type="text" id="inputnombre"   onkeyup="showResult(this.value, 1,2)" class="form-control"  placeholder="ALIAS.." title="Digite un nombre">
    </div>     
    <div class="col-6 col-md-6">
        <input type="text" id="inputcodigo"   onkeyup="showResult(this.value, 2,2)" class="form-control"  placeholder="NOMBRE.." title="Digite un CODIGO">
    </div>  
    </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearch2" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
    </div>   
    </div>
          <!-- fin contenido tabla modal-->
    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
</div>
</div>
</div>  
<?} ?>
