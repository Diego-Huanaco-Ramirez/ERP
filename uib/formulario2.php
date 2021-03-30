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

            matearr = [["1", "Archivador"], ["2", "Corchetera"], ["3", "Goma"], ["4", "Lapicero"], ["5", "Resma Carta"], ["6", "Resma Oficio"]]


            $(document).ready(function () {
                $("#selmate option").remove();
                opciones = "";

                for (i = 0; i < matearr.length; i++)
                {
                    opcion = "<option value='" + matearr[i][0] + "'>" + matearr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selmate").append(opciones);

            });


            function guardar()
            {
                codmate = $("#selmate").val();
                cantmate = $("#cantmate").val();
                fechmate = $("#fechamate").val();
                depto = $("#depasoli").val();
                traba = $("#nomtrab").val();
                alert("guardado: \ncod. material" + codmate + "\ncantidad" + cantmate + "\nfecha" + fechmate + "\ndepartamento" + depto + "\ntrabajador" + traba);

            }

        </script>
    </head>
    <body>
        <div class="container-fluid" style="border-style: groove;">

            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <label class="control-label ">Solicitud Centro de Costos</label> 
                </div>

                <div class="col-lg-6 col-md-6">

                    <div class="row">

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Ingresar Material a Solicitar</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control" id="selmate" >

                                </select>                           
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Cantidad</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="number" id="cantmate" class="form-control">                           
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Fecha</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input onchange="" type="date" id="fechamate" class="form-control" placeholder="dd/mm/yyyy">

                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Departamento que Solicita</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="depasoli" class="form-control">

                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Nombre Trabajador</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="nomtrab" class="form-control">

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

