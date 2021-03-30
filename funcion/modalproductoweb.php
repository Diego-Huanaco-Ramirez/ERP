<?php

function bproductos(){ ?>
     <!-- Modal -->
   <!-- INICIO Modal body  BUSCADO PACIENTE en agenda--> 
   <div class="modal fade modeless" id="ModalBusqueda" >
        <div class="modal-dialog modal-xl">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">BUSCADOR DE PRODUCTOS </h4>

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
          <input type="text" id="inputapellido1" onblur=""   onkeyup="showResult(this.value, 2,1)" class="form-control"  placeholder="Buscar apellido.." title="Digite un apellido">
       </div>  
       <div class="col-3 col-md-3  col-lg-2">
          <input type="text" id="inputapellidos2"   onkeyup="showResult(this.value, 2,1)" class="form-control"  placeholder="Buscar apellido.." title="Digite un apellido">
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
   <!-- INICIO Modal body  BUSCADO PRODUCTOS en otros--> 
   <div class="modal fade modeless" id="ModalServicio" >
<div class="modal-dialog modal-lg">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">SERVICIOS</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->

    <div class="row">
    <div class="col-6 col-md-6">
        <label id="lblvalue3"></label>
        <input type="text" id="inputnombre5"   onkeyup="showResult(this.value, 2,2)" class="form-control"  placeholder="Buscar nombres.." title="Digite un nombre">
    </div>     
     
    </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearch5" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
    </div>   
    </div>
          <!-- fin contenido tabla modal-->
    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                       <button type="button" onclick="cleamcampo()" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
</div>
</div>
</div>    
   
  <!-- Modal -->
   <!-- INICIO Modal body  BUSCADO PRODUCTOS en otros--> 
   <div class="modal fade modeless" id="ModalBusqueda2" >
<div class="modal-dialog modal-lg">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">BUSCADOR DE PRODUCTOS2</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->

    <div class="row">
    <div class="col-6 col-md-6">
        <input type="text" id="inputnombre"   onkeyup="showResult(this.value, 2,2)" class="form-control"  placeholder="Buscar nombres.." title="Digite un nombre">
    </div>     
    <div class="col-6 col-md-6">
        <input type="text" id="inputcodigo"   onkeyup="showResult(this.value, 2,2)" class="form-control"  placeholder="Buscar CODIGO.." title="Digite un CODIGO">
    </div>  
    </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearchx" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
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
   <!-- INICIO Modal body  BUSCADO PRODUCTOS en otros-------------------------------------------------------------------------------------------------------------> 
   <div class="modal fade modeless" id="Modalproducto" >
<div class="modal-dialog modal-xl">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">PRODUCTOS</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->
    <div class="row">
        <div class="radio col-sm-4 col-4"  >
               <label id="">Búsqueda por:</label>
               <label class="radio-inline"><input type="radio" name="<? echo  "optradio";?>" onchange="limpiaSprod('B551', 'livesearch6','B551')" onclick="selbusqueda(this,'a')" id="<? echo  "optradio";?>;" value="1" checked >Atributo general</label>
               <label class="radio-inline"><input type="radio" name="<? echo  "optradio";?>" onchange="limpiaSprod('B551', 'livesearch6','B551')" onclick="selbusqueda(this,'a')" id="<? echo  "optradio1";?>;" value="2"  >Categoria</label>
        </div>              
    
        <div id="divcategoriaa" class="col-6 col-md-6 col-lg-6" hidden>
         
      <?  formprodclasifica('B551', 'B551',0,1,0);?>   
    </div>
 
    <div class="col-6 col-md-6 col-lg-2" id="divgeneral1a">
       
        <input type="text" id="inputnombre7"   onkeyup="showResult(this.value, 3,3)" class="form-control"  placeholder="Buscar nombres.." title="Digite un nombre">
    </div>    
 
    <div class="col-6 col-md-6 col-lg-2" id="divgeneral2a">
      
       <div class="" <? echo "";//$visiblecoloryotro;?> > <? listcolores('B551',1);?></div>    </div>     
 
   </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearch6" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
    </div>   
    </div>
          <!-- fin contenido tabla modal-->
    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                       <button type="button" onclick="" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
</div>
</div>
</div>    
   
  <!-- Modal -->
   <!-- INICIO Modal body  BUSCADO PRODUCTOS en otros---------------------------------------------------------------------------------------------------------------------------> 
   <div class="modal fade modeless" id="ModalBusqueda3" >
<div class="modal-dialog modal-lg">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">BUSCADOR DE PRODUCTOS2</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->

    <div class="row">
    <div class="col-6 col-md-6">
        <input type="text" id="inputnombrex"   onkeyup="showResult(this.value, 2,2)" class="form-control"  placeholder="Buscar nombres.." title="Digite un nombre">
    </div>     
    <div class="col-6 col-md-6">
        <input type="text" id="inputcodigo"   onkeyup="showResult(this.value, 2,2)" class="form-control"  placeholder="Buscar CODIGO.." title="Digite un CODIGO">
    </div>  
    </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearchx" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
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
   <!-- Modal -->
   <!-- INICIO Modal body  valores serrvicios en otros--> 
   <div class="modal fade modeless" id="Modalprecio" >
<div class="modal-dialog modal-xl">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header"> 
        <h4 class="modal-title">VALORES DE SERVICIO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->
<div class="col-xs-12 col-md-12">
        <div id="livesearch2" style="height: 500px;width:100%;overflow-y: auto;overflow-x: hidden;">
            <? $ida= "553"; formulario($ida);?> 
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
   
  <!-- INICIO Modal body  BUSCADO PRODUCTOS en otros--> 
   <div class="modal fade modeless" id="Modalproducto2" >
<div class="modal-dialog modal-xl">

            <!-- Modal content EQUIVALENCIA-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">SELECCIONAR Y ASOCIAR PROUDCTO A LA EQUIVALENCIA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->
    <div class="row">
        <div class="radio col-sm-4 col-4"  >
               <label id="">Búsqueda por:</label>
               <label class="radio-inline"><input type="radio" name="<? echo  "optradiob";?>" onchange="limpiaSprod('B5511', 'livesearch7','B5511')" onclick="selbusqueda(this,'b')" id="<? echo  "optradiob";?>;" value="1" checked  >Atributo general</label>
               <label class="radio-inline"><input type="radio" name="<? echo  "optradiob";?>" onchange="limpiaSprod('B5511', 'livesearch7','B5511')" onclick="selbusqueda(this,'b')" id="<? echo  "optradio1b";?>;" value="2"  >Categoria</label>
        </div>              
    
    <div id="divcategoriab" class="col-6 col-md-6 col-lg-6" hidden>
         
      <?  formprodclasifica('B5511', 'B5511',0,1,1);?>   
    </div>
    <label id="lblvalue4">000</label>
    <div class="col-6 col-md-6 col-lg-2" id="divgeneral1b">
     
        <input type="text" id="inputnombre7"   onkeyup="showResult(this.value, 3,4)" class="form-control"  placeholder="Buscar nombres.." title="Digite un nombre">
    </div>    
 
    <div class="col-6 col-md-6 col-lg-2" id="divgeneral2b">
       
       <div class="" <? echo "";//$visiblecoloryotro;?> > <? listcolores('B5511',3);?></div>    </div>     
 
   </div>
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearch7" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
    </div>   
    </div>
          <!-- fin contenido tabla modal-->
    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                       <button type="button" onclick="" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
</div>
</div>
</div>    
   <!-- INICIO Modal body  BUSCADO PRODUCTOS en otros--> 
   <div class="modal fade modeless" id="modalequiv" >
<div class="modal-dialog modal-xl">

            <!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">RESUMEN DE CATEGORIA Y PRODUCTOS ASOCIADOS A LA EQUIVALENCIA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>  
    </div>
    <div class="modal-body">
                    <!--contenido tabla modal-->
   
    <div class="row">
    <div class="col-xs-12 col-md-12">
        <div id="livesearch8" style="height: 100%;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
            
    </div>   
    </div>
          <!-- fin contenido tabla modal-->
    <div class="modal-footer">
                       <!--  <button type="button"  data-toggle="collapse" data-target="#collapseTwo" class=" btn btn-success" data-dismiss="modal" onclick="RegistroPaciente(event);agregarpac()">Agregar></button>-->
                       <button type="button" onclick="" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
    </div>
  
</div>
</div>
</div>  
       </div> 
<?} ?>
