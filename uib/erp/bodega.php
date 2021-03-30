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
            prodarr = [["1001", "archivador", "004", "escritorio"], ["2001", "arco sierra", "003", "corte"], ["5048", "arnes de repuesto", "001", "accesorios"], ["2020", "madera", "002", "madera"],
                ["5040", "accesorio", "001", "accesorios"], ["6054", "hojas oficio", "004", "escritorio"]];



            $(document).ready(function () {
                $(".selbode option").remove();
                opciones = "";
                for (i = 0; i < bodearr.length; i++)
                {
                    opcion = "<option value='" + bodearr[i][0] + "'>" + bodearr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $(".selbode").append(opciones);
            });

            function selbode(opt)
            {
                var arreglo;
                var bodega;
                var id;

                if (opt == 0)
                {
                    bodega = $("#bodeori").val();
                    id = "ori";
                } else if (opt == 1)
                {
                    bodega = $("#bodedes").val();
                    id = "des";
                }
                for (i = 0; i < bodearr.length; i++)
                {

                    if (bodearr[i][0] == bodega)
                    {
                        arreglo = bodearr[i];
                        break
                    }
                }
                $(".lblnom" + id).text(arreglo[1]);
                $(".lblubi" + id).text(arreglo[2]);
                $(".lblfon" + id).text(arreglo[3]);
                $(".lbltip" + id).text(arreglo[4]);
            }

            function buscarprod(opt)
            {
                $("#tabprod tr").remove();
                filas = "";

                switch (opt) {
                    case 0:
                        buscar = "nom";
                        index = 1;
                        break;
                    case 1:
                        buscar = "cat";
                        index = 2;
                        break;
                    case 2:
                        buscar = "cod";
                        index = 0;
                        break;
                }

                for (i = 0; i < prodarr.length; i++)
                {
                    if (prodarr[i][index].toUpperCase().includes($("#txt" + buscar + "prod").val().toUpperCase()))
                    {
                        fila = "<tr> <td> <input type='checkbox'  value='" + prodarr[i][0] + "'> </td> <td>" + prodarr[i][0] + "</td><td>" + prodarr[i][1] + "</td><td>" + prodarr[i][2] + "</td><td>" + prodarr[i][3] + "</td></tr>"
                        filas = filas + fila;
                    }
                }

                $("#tabprod").append(filas);
            }

            function listafin() {
                $("#tablistprod tr").remove();
                filas = "";
                $("td input:checkbox").each(function (index) {
                    if ($(this).is(":checked")) {
                        console.log(index + ": " + $(this).val());
                        for (i = 0; i < prodarr.length; i++)
                        {
                            if ($(this).val() == prodarr[i][0])
                            {
                                fila = "<tr> <td> <i  onclick='editcant(this)'  class='fa fa-pencil fa-2x'></i> <i class='fa fa-times fa-2x' onclick=borfil(this)></i> <i class='fa fa-floppy-o fa-2x' hidden></i> <i class='fa fa-undo fa-2x' hidden></i> </td> <td> <input type='number' value=1 disabled></input> </td> <td>" + prodarr[i][0] + "</td><td>" + prodarr[i][1] + "</td><td>" + prodarr[i][2] + "</td><td>" + prodarr[i][3] + "</td></tr>"
                                filas = filas + fila;
                            }
                        }
                    }
                });
                $("#tablistprod").append(filas);
            }

            function borfil(btn) {
                $(btn).closest("tr").remove();
            }

            function editcant(input)
            {
                $(input).parent().parent().children('td').eq(1).children('input[type="number"]').prop("disabled", false);
            }

        </script>
    </head>
    <body>
        <div class="container">

            <div class=" col-lg-12 col-md-12 form-group" >
                <div class=" col-lg-12 col-md-12 form-group">
                    <label class="control-label "> ASISTENTE DE REQUISICIÓN A BODEGA CENTRAL</label> 
                </div>
            </div>

            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class="col-lg-12 col-md-12">
                    <label class="control-label "> Bodega</label> 
                </div> 
                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label "> Selección de Bodega:</label> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <select class="form-control selbode" id="bodeori" >

                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <button class="btn btn-info" onclick="selbode(0)">Seleccionar</button>
                    </div>
                </div> 
                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12l">
                        <label class="control-label "> Informacion Bodega :</label> 
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> Nombre:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblnomori" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Ubicación:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblubiori" id=""></label> 
                        </div>
                    </div>     
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Fono:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblfonori" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Tipo:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lbltipori" id=""></label> 
                        </div>
                    </div>  
                </div>
            </div> 



            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class="col-lg-12 col-md-12">
                    <label class="control-label "> Bodega</label> 
                </div> 
                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label "> Selección de Bodega:</label> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <select class="form-control selbode" id="bodedes" >

                        </select>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <button class="btn btn-info" onclick="selbode(1)">Seleccionar</button>
                    </div>
                </div> 
                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12l">
                        <label class="control-label "> Informacion Bodega :</label> 
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> Nombre:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblnomdes" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Ubicación:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblubides" id=""></label> 
                        </div>
                    </div>     
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Fono:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblfondes" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Tipo:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lbltipdes" id=""></label> 
                        </div>
                    </div>  
                </div>
            </div> 

            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="">Requisición Pendiente Cliente
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="">Stock Critico
                        </label>
                    </div>
                    <div class="form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="" disabled>Todos
                        </label>
                    </div>
                </div>

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-2 col-md-2">
                        <label class="control-label ">Nombre:</label> 
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <input type="text" id="txtnomprod" class="form-control">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <button class="btn btn-info" onclick="buscarprod(0)"><i class="fa fa-search"></i></button>
                    </div>
                </div> 

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-2 col-md-2">
                        <label class="control-label ">Cod. Categoria</label> 
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <input type="text" id="txtcatprod" class="form-control">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <button class="btn btn-info" onclick="buscarprod(1)"><i class="fa fa-search"></i></button>
                    </div>
                </div> 

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-2 col-md-2">
                        <label class="control-label ">Cod. Producto</label> 
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <input type="text" id="txtcodprod" class="form-control">
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <button class="btn btn-info" onclick="buscarprod(2)"><i class="fa fa-search"></i></button>
                    </div>
                </div>  
            </div>  

            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class="col-lg-12 col-md-12">
                    <label class="control-label "> Resultados de Búsqueda</label> 
                </div> 
                <div class="col-lg-12 col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>COD.PRODUCTO</th>
                                <th>NOMBRE PRODUCTO</th>
                                <th>COD. CATEGORIA</th>
                                <th>NOMBRE CATEGORIA</th>
                            </tr>
                        </thead>
                        <tbody id="tabprod">
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12 col-md-12">
                    <button class="btn btn-info" onclick="listafin()">agregar</button>
                </div>
            </div>


            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class="col-lg-12 col-md-12">
                    <label class="control-label "> Bodega origen</label> 
                </div> 
                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12l">
                        <label class="control-label "> Informacion Bodega :</label> 
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> Nombre:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblnomori" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Ubicación:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblubiori" id=""></label> 
                        </div>
                    </div>     
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Fono:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblfonori" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Tipo:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lbltipori" id=""></label> 
                        </div>
                    </div>  
                </div>
            </div> 

            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class="col-lg-12 col-md-12">
                    <label class="control-label "> Bodega Destino</label> 
                </div> 
                <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                    <div class="col-lg-12 col-md-12l">
                        <label class="control-label "> Informacion Bodega :</label> 
                    </div> 
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label"> Nombre:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblnomdes" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Ubicación:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblubides" id=""></label> 
                        </div>
                    </div>     
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Fono:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lblfondes" id=""></label> 
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <label class="control-label">Tipo:</label> 
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <label class="control-label lbltipdes" id=""></label> 
                        </div>
                    </div>  
                </div>
            </div> 

            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class="col-lg-12 col-md-12">
                    <label class="control-label "> Lista de Productos</label> 
                </div> 
                <div class="col-lg-12 col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>CANTIDAD</th>
                                <th>COD.PRODUCTO</th>
                                <th>NOMBRE PRODUCTO</th>
                                <th>COD. CATEGORIA</th>
                                <th>NOMBRE CATEGORIA</th>
                            </tr>
                        </thead>
                        <tbody id="tablistprod">
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 form-group" >
                <div class="row">
                    <div class=" col-lg-6 col-md-6 form-group" style="border-style: groove;">
                        <div class="col-lg-12 col-md-12l">
                            <label class="control-label "> Observación</label> 
                        </div> 
                        <div class=" col-lg-12 col-md-12">
                            <textarea class="form-control"  rows="3"></textarea>
                        </div>     
                    </div>

                    <div class=" col-lg-6 col-md-6 form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <button class="btn btn-info">atrás</button>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <button class="btn btn-info" >guardar</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 

        </div>
    </body>
</html>