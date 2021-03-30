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

//            bodearr = [["001", "Patache", "Patache", "518369", "Externa(Cliente)"], ["002", "Uta", "Iquiuque", "788369", "Externa(Cliente)"], ["003", "Municipalidad", "Alto Hospicio", "918369", "Interna"]]
//            ubiarr = [["0001", "001", "lote1"], ["0002", "001", "lote11"], ["00011", "003", "lote12"], ["00012", "002", "lote122"], ["000123", "003", "lote13"], ]

            matearr = [["001", "alcohol gel"], ["002", "Sal Fina"], ["003", "Levadura"], ["004", "Harina de Trigo"]];
            mediarr = [["0011", "Centímetros Cúbicos"], ["0022", "Gramos"], ["0033", "Kilo"], ["0044", "Litro"]];
            provarr = [["1", "Don Granel"], ["2", "Sal Lobos"], ["3", "Simonds"]];


            $(document).ready(function () {
                $("#selmate option").remove();
                opciones = "";

                for (i = 0; i < matearr.length; i++)
                {
                    opcion = "<option value='" + matearr[i][0] + "'>" + matearr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selmate").append(opciones);

                $("#selmedi option").remove();
                opciones = "";

                for (i = 0; i < mediarr.length; i++)
                {
                    opcion = "<option value='" + mediarr[i][0] + "'>" + mediarr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selmedi").append(opciones);

                $("#selprov option").remove();
                opciones = "";

                for (i = 0; i < provarr.length; i++)
                {
                    opcion = "<option value='" + provarr[i][0] + "'>" + provarr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selprov").append(opciones);

            });

            function guardar()
            {
                materia = $("#selmate").val();
                medida = $("#selmedi").val();
                provee = $("#selprov").val();
                canti = $("#cantmate").val();
                costo = $("#costmate").val();
                alert("guardado: \n cod. materia prima" + materia + "\ncod. medida" + medida + "\ncod. proveedor " + provee + "\ncantidad" + canti + "\ncosto" + costo);

            }

        </script>
    </head>
    <body>
        <div class="container-fluid" style="border-style: groove;">

            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <label class="control-label ">Registrar Ingreso Materia Prima</label> 
                </div>

                <div class="col-lg-6 col-md-6">

                    <div class="row">

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Seleccione Materia Prima</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control " onchange="" id="selmate" >

                                </select>  
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Tipo Medida(Presentación>)</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control selbode" id="selmedi" >

                                </select>                           
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Nombre del Proveedor</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control selbode" onchange="" id="selprov" >

                                </select>                            
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-3 col-md-3">
                                <label class="control-label ">Cantidad</label> 
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <input type="number" id="cantmate" class="form-control">                           
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <label class="control-label ">Costo $</label> 
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <input type="number" id="costmate" class="form-control">                           
                            </div>
                        </div> 

                    </div>

                </div>


                <div class="col-lg-6 col-md-6">

                    <img class="img-fluid" src="logotipo.png" width="460" height="345"> 

                </div>

            </div>

            <div class="row justify-content-end">


                <div class="col-lg-3 col-md-3 ">
                    <button class="btn btn-info btn-sm" onclick="guardar()">Aceptar</button>
                    <button class="btn btn-info btn-sm" onclick="">Cancelar</button>
                </div>


            </div>
        </div>


    </body>
</html>

