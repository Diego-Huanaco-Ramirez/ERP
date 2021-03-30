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
            prodarr = [["1", "Alcohol Gel"], ["2", "Aceite de Oliva"], ["3", "Harina de Trigo"], ["4", "Levadura"]]


            $(document).ready(function () {
                $(".selbode option").remove();
                opciones = "";

                for (i = 0; i < bodearr.length; i++)
                {
                    opcion = "<option value='" + bodearr[i][0] + "'>" + bodearr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $(".selbode").append(opciones);



                $("#selprod option").remove();
                opciones = "";

                for (i = 0; i < prodarr.length; i++)
                {
                    opcion = "<option value='" + prodarr[i][0] + "'>" + prodarr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selprod").append(opciones);
                mostrarubi();
            });


            function guardar()
            {
                codprod = $("#selprod").val();
                cantprod  = $("#cantprod").val();
                fechprod = $("#fechaprod").val();
                bodeprod = $("#selbode").val();
                alert("guardado: \n cod. producto" + codprod + "\n cantidad" + cantprod + "\n fecha" + fechprod + "\ncod. bodega" + bodeprod);

            }

        </script>
    </head>
    <body>
        <div class="container-fluid" style="border-style: groove;">

            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <label class="control-label ">Ingreso Bodega</label> 
                </div>

                <div class="col-lg-6 col-md-6">

                    <div class="row">

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Seleccione Producto</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control" id="selprod" >

                                </select>                           
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Cantidad</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="number" id="cantprod" class="form-control">                           
                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Fecha</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input onchange="" type="date" id="fechaprod" class="form-control" placeholder="dd/mm/yyyy">

                            </div>
                        </div> 

                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Bodega o Subbodega</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control selbode" id="selbode" >

                                </select>     
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
