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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script>

            bodearr = [["001", "Patache", "Patache", "518369", "Externa(Cliente)"], ["002", "Uta", "Iquiuque", "788369", "Externa(Cliente)"], ["003", "Municipalidad", "Alto Hospicio", "918369", "Interna"]]
            ubiarr = [["0001", "001", "lote1"], ["0002", "001", "lote11"], ["00011", "003", "lote12"], ["00012", "002", "lote122"], ["000123", "003", "lote13"], ]



            $(document).ready(function () {
                $(".selbode option").remove();
                opciones = "";

                for (i = 0; i < bodearr.length; i++)
                {
                    opcion = "<option value='" + bodearr[i][0] + "'>" + bodearr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $(".selbode").append(opciones);
                mostrarubi();
            });


            function mostrarubi()
            {
                $("#selubides option").remove();
                opciones = "";
                bode = $("#selbodedes").val();
//                alert(bode);

                for (i = 0; i < ubiarr.length; i++)
                {
                    if (ubiarr[i][1] == bode)
                    {
                        opcion = "<option value='" + ubiarr[i][0] + "'>" + ubiarr[i][2] + "</option>";
                        opciones = opciones + opcion;
                    }
                }
                $("#selubides").append(opciones);
            }

            function guardar()
            {
                codprod = $("#codprod").val();
                bodeori = $("#selbodeori").val();
                bodedes = $("#selbodedes").val();
                bodeubi = $("#selubides").val();
                alert("guardado: \n cod. producto" + codprod + "\ncod. bodega origen" + bodeori + "\ncod. bodega destino " + bodedes + "\ncod. ubicacion bodega" + bodeubi);

            }

        </script>
    </head>
    <body>
        <div class="container-fluid" style="border-style: groove;">

            <div class="row">
                
                <div class="col-lg-12 col-md-12">
                    <label class="control-label ">Cambio de Bodega</label> 
                </div>
                
                <div class="col-lg-6 col-md-6">

                    <div class="row">

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Ingrese Código del producto</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="codprod" class="form-control">
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Seleccione Bodega Origen</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control selbode" id="selbodeori" >

                                </select>                           
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Seleccione Bodega Destino</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control selbode" onchange="mostrarubi()" id="selbodedes" >

                                </select>                            
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Ubicación en Bodega Destino</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control" id="selubides" >

                                </select>                            
                            </div>
                        </div> 

                    </div>

                </div>


                <div class="col-lg-6 col-md-6">

                    <img class="img-fluid" src="logotipo.png" width="460" height="345"> 

                </div>

            </div>

            <div class="row">

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-9 col-md-9 ">
                        <label class="form-check-label">
                            <input type="checkbox" class="" value="">Generar Documento
                        </label>                   
                    </div>
                    <div class="col-lg-3 col-md-3 ">
                        <button class="btn btn-info btn-sm" onclick="guardar()">Aceptar</button>
                        <button class="btn btn-info btn-sm" onclick="">Cancelar</button>
                    </div>
                </div> 

            </div>
        </div>


    </body>
</html>
