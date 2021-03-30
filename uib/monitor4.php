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
            emparr = [["111", "empresa 1", "ferreteria", "ferreteria", "cuarta sur #2012", "iquique", "iquique","978978978"], ["222", "empresa 2", "libreria", "libreria", "cuarta sur #2012", "arica", "arica",,"967895124"], ["aaa", "empresa a", "perreria", "perreria", "cuarta sur #2012", "santiago", "santiago","936412587"]];

            function modalprov()
            {
                $("#selpro option").remove();
                opciones = "";
                for (i = 0; i < emparr.length; i++)
                {
                    opcion = "<option value='" + emparr[i][0] + "'>" + emparr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selpro").append(opciones);
                $("#modalprov").modal();
            }

            function buscarrazon()
            {
                rut = $("#selpro").val();
                buscarpro(rut);
            }

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
                    $("#lbldirpro").text(arreglo[4]);
                    $("#lblciupro").text(arreglo[5]);
                    $("#lblfonopro").text(arreglo[7]);
                } else
                {
                    alert("no hay registros con ese rut")
                }

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
                <div class=" col-lg-12 col-md-12 form-group" >
                    <div class="col-lg-12 col-md-12">
                        <label class="control-label "> Reserva de documento de compra</label> 
                    </div> 
                </div>

                <div class="  col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12">
                        <label class="control-label "> Informacion Proveedor :</label> 
                    </div>
                    <div class="row col-lg-12 col-md-12">
                        <div class="row col-lg-6 col-md-6">
                            <div class="col-lg-4 col-md-4">
                                <label class="control-label "> R. U. T. :</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="txtrutpro" class="form-control">
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <button class="btn btn-info" onclick="buscarrut()"><i class="fa fa-search"></i></button>
                            </div>
                        </div> 
                        <div class="row col-lg-6 col-md-6">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Nombre</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <button class="btn btn-info" onclick="modalprov()"><i class="fa fa-window-maximize"></i></button>
                            </div>
                        </div> 
                    </div>
                </div> 

                <div class="  col-lg-12 col-md-12 form-group">
                    <div class="col-lg-12 col-md-12">
                        <button class="btn btn-secondary" onclick="">nuevo</button>
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
                            <label class="control-label">Nombre :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblrazpro"></label> 
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
                            <label class="control-label"> Giro :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblgiropro"></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Fono :</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label" id="lblfonopro"></label> 
                        </div>
                    </div>  
                </div>

                <div class="  col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12">
                        <label class="control-label "> Busqueda :</label> 
                    </div>
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-2">
                            <label class="control-label ">Tipo</label>                                    
                        </div> 
                        <div class="col-lg-10 col-md-10">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="opttipo" value="">factura
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="opttipo" value="">guía despacho
                                </label>
                            </div>     
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="opttipo" value="">guía traslado
                                </label>
                            </div>  
                        </div> 
                    </div>

                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-2">
                            <label class="control-label">Fecha inicio</label> 
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="date" id="fechaini" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <label class="control-label">Fecha termino</label> 
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="date" id="fechater" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                </div>

                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12">
                        <label class="control-label "> Listado de documentos :</label> 
                    </div> 
                    <div class="col-lg-12 col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Seleccion</th>
                                    <th>Nro doc</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Neto</th>
                                    <th>Iva</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="tabprod">
                            </tbody>
                        </table>
                    </div>
                </div>  

                <div class="  col-lg-12 col-md-12 form-group">
                    <div class="row">
                        <div class="col-lg-1 col-md-2">
                            <button class="btn btn-secondary" onclick="">reserva</button>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <button class="btn btn-secondary" onclick="">nuevo</button>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <button class="btn btn-secondary" onclick="">buscar</button>
                        </div>
                    </div>

                </div>

                <!-- The Modal -->
                <div class="modal " id="modalprov">
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

                                    <div class="col-lg-12 col-md-12">
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
        </div>
    </body>
</html>