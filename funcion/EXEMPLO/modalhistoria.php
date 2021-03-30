<?php

function mhistoria(){ ?>
<!-- INICIO Modal body  HISTORIA CLINICA-->
    <div class="modal fade" id="ModalHistoria">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">HISTORIA CLINICA</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

               

                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <label>Nombre</label>
                    </div>
                    <div class="col-lg-12">
                        <label>Edad</label>
                    </div>
                </div>  
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div id="accordion_modal"  style="height: 250px; overflow-y: scroll;">
                            <div class="card col-lg-12">
                                <div class="card-header bg-info">
                                    <a class="card-link" data-toggle="collapse" href="#c1" style=" color:white;">
                                        Fecha atencion - accion
                                    </a>
                                </div>
                                <div id="c1" class="collapse show" data-parent="#accordion_modal">
                                    <div class="card-body">
                                        Lorem ipsum..1
                                    </div>
                                </div>
                            </div>

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c2" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c2" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..2
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c3" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c3" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..3
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c4" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c4" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..4
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c5" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c5" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..5
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c6" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c6" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..5
                                    </div>
                                </div>
                            </div> 

                            <div class="card col-lg-12">
                                <div class="card-header bg-info ">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#c7" style="color: white;">
                                        Registro Paciente
                                    </a>
                                </div>
                                <div id="c7" class="collapse" data-parent="#accordion_modal">
                                    <div class="card-body"> 
                                        hola mundo..5
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
               
            </div>
        </div>
    </div> <!-- FIN Modal body  HISTORIA CLINICA-->    
          
    
<?} ?>
