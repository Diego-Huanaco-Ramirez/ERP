<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function callselect($value){
if($value == 2)
  listobjmarca($value);
else if($value == 3) 
  listcolores($value,2);
else if($value == 4) 
  listobjequivalencia($value,1); 
}

function callselecttipo($value){
if($value == 2)
  ;//listobjmarca($value);
else if($value == 3) 
  ;//listcolores($value,1);
else if($value == 4) 
 listobjmedida($value,1); 

 
}
 
function formbasic($value,$tipo, $nombre,$pref_sel){ $visible=' '; 
if($value == 4) {
   $modal3 = "modalequiv";
$nombre_marco="livesearch8";
}
 $modal = "Modalproducto2";
  $NOMBRE_FORMULARIO= $nombre;
 
if($tipo == 1)
  $visiblerow = 'hidden';
else {
   $visiblerow== "";
}
 
?>



     
   <div class="card-body" style=" width: 100%; height: 100%;  overflow-y: auto ;"> 
           <label id="<? echo  "lbl_nombre_sel".$value;?>" class="col-md-4 col-xs-12 control-label" hidden ><? echo $pref_sel.$value;?></label>
           <label id="<? echo  "lbl_nombre_formulario".$value;?>" class="col-md-4 col-xs-12 control-label" hidden ><? echo $NOMBRE_FORMULARIO;?></label>
           <label id="<? echo  "lbl_pre_id".$value;?>" class="col-lg-3 col-md-4 col-xs-12 control-label" hidden >0</label>
           
           <div id="<? echo  "divtitulo".$value;?>" class="row form-group-sm" hidden>
               <label   class="col-lg-6  col-md-4 col-xs-12 control-label" style="font-weight:bold; "  >NOMBRE PRODUCTO</label>
               <label   class="col-lg-3  col-md-4 col-xs-12 control-label" style="font-weight:bold; "  >CATEGORIA</label>
                <label   class="col-lg-3  col-md-4 col-xs-12 control-label" style="font-weight:bold; "   >ASOCIAR</label>
           </div>
              
           <div class="row form-group ">

                     <label id="<? echo  "lbl_cat_id_aux".$value;?>" class="col-lg-3  col-md-4 col-xs-12 control-label" hidden  >0</label>
                     <label id="<? echo  "lbl_prod_codigo_aux".$value;?>" class="col-lg-3 col-md-4 col-xs-12 control-label" hidden >0</label> 
                                   
                      <label id="<? echo  "lbl_prod_nombre_aux".$value;?>" class="col-lg-6 col-md-4 col-xs-12 control-label" hidden  >0</label> 
                                  
                      
                      <label id="<? echo  "lbl_cat_etiqueta_aux".$value;?>" class="col-lg-3 col-md-4 col-xs-12 control-label" hidden >0</label>
                      <button id="<? echo  "active1".$value;?>" class="btn btn-success btn-sm "  onclick="ingresar2('<? echo $value;?>',1)" title="" hidden> <i class="fas fa-link"></i></button>
                       <button id="<? echo  "deactive1".$value;?>" class="btn btn-warning btn-sm "   onclick="delete2('<? echo $value;?>',1)" title="" hidden> <i class="fas fa-unlink"></i></button>
                        
            </div>
            <div class="row form-group-sm">
               <div class="col-lg-12 col-md-4 col-xs-12">
               <div class="row form-group ">
               <div class="col-md-3 col-md-offset-4  col-xs-12 col-lg-12" <? echo $visiblerow;?>>
                    <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#<? echo $modal;?>" onclick="regvalue2(<? echo  $value;?>,'BUSCADOR');openmodal('<? echo $modal;?>')" title="Buscador"> <i class="fas fa-search"></i></button>
                                     
                    <button class="btn btn-info btn-sm " data-toggle="modal" data-target="#<? echo $modal3;?>" onclick="openmodal('<? echo $modal3;?>');cargar_item('<? echo $nombre_marco;?>','<? echo $value;?>');;" title="Registros"> <i class="far fa-eye"></i></button>
                    
                    <button id="<? echo  "active".$value;?>" type="button"  class="btn btn-success btn-sm" id="btn_clear"  data-toggle="tooltip" data-placement="right" title="Limpiar producto" onclick="limpiarform2('<? echo $value;?>')" hidden><i class="fas fa-eraser"   ></i></button>
                       
                    <label id="<? echo  "activeetiqueta".$value;?>" class="col-lg-4 col-md-4 col-xs-12 control-label" hidden  >Asociar por Categoria >></label> 
                    <button id="<? echo  "active2".$value;?>" class="btn btn-success btn-sm "   onclick="ingresar2('<? echo $value;?>',0)" title="" hidden> <i class="fas fa-link"></i></button>
                    <button id="<? echo  "deactive2".$value;?>" class="btn btn-warning btn-sm "   onclick="delete2('<? echo $value;?>',0)" title="" hidden> <i class="fas fa-unlink"></i></button>

                </div>
                                    
               </div>
                                <div class="row form-group ">

                                    <label class=" col-md-4 col-xs-12 col-lg-4 control-label" for="pres-nombre"><? echo "Etiqueta de ".$NOMBRE_FORMULARIO;?></label>
                                    <div class="col-md-7 col-xs-12 col-lg-4">
                                        <input type="text" id="<? echo  "pref_nombre".$value;?>"  class="form-control" pattern="" placeholder="nombre.." required disabled  >
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-2 col-lg-4"> <? callselect($value);?></div>   
                                </div>

                                

                                <div class="row form-group" <? echo $visiblerow;?>>    
                                    <label class="col-md-4 col-xs-12 control-label"  >Descripcion</label>
                                    <div class="col-md-7 col-xs-12 col-lg-8 ">
                                        <input type="text" id="<? echo  "pref_descripcion".$value;?>"   class="form-control " pattern="[A-Za-z0-9. _-]{0,50}"   disabled    >
                                    </div>
                                </div>
                                <div class="row form-group"  <? echo $visiblerow;?>>    
                                    <label class="col-md-4 col-xs-12 control-label"  >TIPO</label>
                                     <div id="" class="col-4 col-sm-4 col-md-2 col-lg-4"> <? callselecttipo($value);?></div> 
                                </div>
                                <div class="row form-group" <? echo $visiblerow;?>>    
                                    <label class="col-md-4 col-xs-12 control-label"  >Valor</label>
                                    <div class="col-md-7 col-xs-12 col-lg-4 ">
                                        <input type="number" id="<? echo  "pref_numero".$value;?>"   class="form-control " placeholder="" pattern="[0-9]{0,50}"  required disabled    >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-md-6  col-md-offset-4 col-xs-12">
                                        <div class="form-group ">   
                                                <button type="button"  class="btn btn-info" id="btn_clear"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="imprimir();" hidden ><i class="far fa-file-pdf"  ></i></button>
                                             <button type="button"  class="btn btn-success " id="btn_saved"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="ingresar('<? echo $value;?>','<? echo  $pref_sel;?>')"><i class="fas fa-save"  ></i></button>
                                            <button type="button"  class="btn btn-success" id="btn_clear"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="limpiarform('<? echo $value;?>','<? echo  $pref_sel;?>')"><i class="fas fa-eraser"  ></i></button>
                                             <button type="button"  class="btn btn-danger" id="btn_clear"  data-toggle="tooltip" data-placement="right" title="Aceptar" onclick="eliminarregistro('<? echo $value;?>');"><i class=" 	far fa-trash-alt "  ></i></button>
                                        </div>           
                                    </div>

                                </div>
                            </div>
                           
                        </div>
             </div>       

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Nombre personal</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-9 col-md-10 col-sm-9">
                                        <div  class="table-responsive" id="marco_nombres">

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
 
<?}
?>     