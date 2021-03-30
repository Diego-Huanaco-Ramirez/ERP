<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html lang="en">
    <head>
        <title>HOYSALUD</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="+psiquiatra,+psicologo,+neurologo,+nutricionista,+psiquiatra+iquique,+psicologo+iquique,+neurologo+iquique,nutricionista+iquique">
        <meta name="keywords" content="+hoy+salud,+hoysalud,+salud,+hoysalud,+hoysalud.cl, +hoysalud.com, +hoysalud.net, +salud+iquique,+software+salud, +software+en+salud, +software+para+la+salud">
        <meta name="keywords" content="+software+en+iquique, +procesos+digitales,+bpm, +erp">
        <meta name="keywords" content="+teletrabajo,+procesos+digitales">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <script>
            emparr = [["111", "empresa 1", "ferreteria", "ferreteria", "cuarta sur #2012", "iquique", "iquique"], ["222", "empresa 2", "libreria", "libreria", "cuarta sur #2012", "arica", "arica"], ["aaa", "empresa a", "perreria", "perreria", "cuarta sur #2012", "santiago", "santiago"]]

            function buscarpro(rut)
            {

                var arreglo;
                for (i = 0; i < emparr.length; i++)
                {

                    if (emparr[i][0] == rut)
                        arreglo = emparr[i];
                }
                if (arreglo != null)
                {
                    $("#lblrutpro").text(arreglo[0]);
                    $("#lblrazpro").text(arreglo[1]);
                    $("#lblgiropro").text(arreglo[2]);
                    $("#lblservpro").text(arreglo[3]);
                    $("#lbldirpro").text(arreglo[4]);
                    $("#lblciupro").text(arreglo[5]);
                    $("#lblcompro").text(arreglo[6]);

                } else
                {
                    alert("no hay registros con ese rut")
                }

            }

            function openmodal()
            {
                $("#selpro option").remove();
                opciones = "";
                for (i = 0; i < emparr.length; i++)
                {
                    opcion = "<option value='" + emparr[i][0] + "'>" + emparr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selpro").append(opciones);
                $("#myModal").modal();
            }

            function buscarrazon()
            {
                rut = $("#selpro").val();
                buscarpro(rut);
            }

            function buscarrut()
            {
                rut = $("#txtrutpro").val();
                buscarpro(rut);
            }

        </script>

    </head>

    <body>
        <div class="container">

            <div class="row">

                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12">
                        <label class="control-label "> Informacion Proveedor :</label> 
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-2">
                            <label class="control-label "> R. U. T. :</label> 
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <input type="text" id="txtrutpro" class="form-control">
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <button class="btn btn-info" onclick="buscarrut()"><i class="fa fa-search"></i></button>
                        </div>
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-4 col-md-6">
                            <label class="control-label ">Buscar proveedor por razon social</label> 
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <button class="btn btn-info" onclick="openmodal()"><i class="fa fa-window-maximize"></i></button>
                        </div>
                    </div> 
                </div>

                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12l">
                        <label class="control-label "> Informacion Proovedor :</label> 
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> R. U. T. :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblrutpro"></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Razon social :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblrazpro"></label> 
                        </div>
                    </div>     
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> Giro :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblgiropro"></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Servicio :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblservpro"></label> 
                        </div>
                    </div>  
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> Direccion :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lbldirpro"></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Ciudad :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblciupro"></label> 
                        </div>
                    </div>  
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> Comuna :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblcompro"></label> 
                        </div>

                    </div>  
                    <div class="row col-lg-12 col-md-12 form-group">
                        <div class="col-lg-12 col-md-12">
                            <button class="btn btn-danger">cancelar</button>
                        </div> 
                    </div>
                </div>

                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12">
                        <label class="control-label "> Informacion orden de compra :</label> 
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-8 col-md-8" style="border-style: groove;">
                            <div class="col-lg-12 col-md-12">
                                <label class="control-label ">Tipo</label>                                    
                            </div> 
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="opttipo" value="">Orden de compra
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="opttipo" value="">Consignación
                                    </label>
                                </div>                               
                            </div> 
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="col-lg-12 col-md-12">
                                <label class="control-label ">Orden de compra: </label> 
                            </div> 
                        </div>
                    </div>
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Fecha entrega</label> 
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="date" id="fechaent" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Forma de pago</label> 
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <select class="form-control">
                                <option>Cheque</option>
                                <option>Tarjeta credito</option>
                                <option>Tarjeta debito</option>
                                <option>Pago contra factura</option>

                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Cheque(s) adjunto</label> 
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <input type="checkbox" class="form-check-input" value="">
                        </div>
                    </div>
                     <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-12 col-md-12">
                            <label class="control-label">Observaciones</label> 
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <textarea class="form-control" rows="5" style="resize: none"></textarea>
                        </div>
                    </div>
                </div> 
            </div>

            <!-- The Modal -->
            <div class="modal " id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Proveedores</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row col-lg-12 col-sm-12 col-12">

                                <div class="col-lg-12col-md-12">
                                    <label class="control-label">Proveedores</label> 
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <select class="form-control" id="selpro" >

                                    </select>
                                </div>


                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" onclick="buscarrazon()" data-dismiss="modal">Aceptar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
