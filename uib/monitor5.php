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

            prodarr = [["1001", "ALFOMBRA"], ["1030", "CUBRE PISO"], ["2002", "TELA MEZCLILLA"], ["2003", "TELA GAMUZ"], ["4050", "TELA LONA"]];
            cardexarr = [
                ["03/01/2020", "5432", "4500", "Comercial Oriente Ltda", "0", "100", "1001"],
                ["03/30/2020", "340", "8990", "Pepito", "1", "5", "1001"],
                ["04/05/2020", "370", "8990", "Maria Mariana", "1", "3", "1001"],
                ["04/18/2020", "390", "8990", "Juanita", "1", "50", "1001"],
                ["05/05/2020", "1349", "4500", "Comercial Oriente Ltda.", "0", "20", "1001"]
            ];

            function buscarprod(opc) {
                $("#tabprod tr").remove();
                filas = "";
                for (i = 0; i < prodarr.length; i++) {
                    if (opc == 0)
                    {
                        if (prodarr[i][0].includes($("#txtcodprod").val().toUpperCase()))
                        {
                            fila = " <tr onclick='cargartab(" + i + ")'> <td>" + prodarr[i][0] + "</td><td>" + prodarr[i][1] + "</td></tr>";
                            filas = filas + fila;
                        }
                    } else {
                        if (prodarr[i][1].includes($("#txtdescprod").val().toUpperCase()))
                        {
                            fila = " <tr onclick='cargartab(" + i + ")'> <td>" + prodarr[i][0] + "</td><td>" + prodarr[i][1] + "</td></tr>";
                            filas = filas + fila;
                        }
                    }
                }
                $("#tabprod").append(filas);
                $("#modalprod").modal();

            }

            function cargartab(index) {
                $("#txtcodprod").val(prodarr[index][0]);
                $("#txtdescprod").val(prodarr[index][1]);
                $("#tabcardex tr").remove();
                filas = "";
                saldo = 0;
                for (i = 0; i < cardexarr.length; i++) {
                    if (cardexarr[i][6] == prodarr[index][0])
                    {
                        if (cardexarr[i][4] == "0")
                        {
                            saldo = saldo + parseInt(cardexarr[i][5]);
                            fila = " <tr> <td>" + cardexarr[i][0] + "</td><td>" + cardexarr[i][1] + "</td><td></td><td>" + cardexarr[i][2] + "</td><td>" + cardexarr[i][3] + "</td><td>" + cardexarr[i][5] + "</td><td></td><td>" + saldo + "</td></tr>";
                            filas = filas + fila;
                        }else if (cardexarr[i][4] == "1")
                        {
                            saldo = saldo - parseInt(cardexarr[i][5]);
                            fila = " <tr> <td>" + cardexarr[i][0] + "</td><td>" + cardexarr[i][1] + "</td><td></td><td>" + cardexarr[i][2] + "</td><td>" + cardexarr[i][3] + "</td><td></td><td>" + cardexarr[i][5] + "</td><td>" + saldo + "</td></tr>";
                            filas = filas + fila;
                        }
                    }
                }

                $("#tabcardex").append(filas);
            }


        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">

                <div class=" col-lg-12 col-md-12 form-group" >
                    <div class=" col-lg-12 col-md-12 form-group" >
                        <label class="control-label "> Cardex por producto</label> 
                    </div>
                </div>
                <div class=" col-lg-12 col-md-12 form-group" >
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-2">
                            <label class="control-label "> Codigo de Producto</label> 
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <input type="text" id="txtcodprod" class="form-control">
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <button class="btn btn-info btn-lg" onclick="buscarprod(0)"><i class="fa fa-search"></i></button>
                        </div>
                    </div> 
                </div> 

                <div class=" col-lg-12 col-md-12 form-group" >
                    <div class="row col-lg-12 col-md-12">
                        <div class="col-lg-2 col-md-2">
                            <label class="control-label ">Descripcion</label> 
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" id="txtdescprod" class="form-control">
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <button class="btn btn-info btn-lg" onclick="buscarprod(1)"><i class="fa fa-search"></i></button>
                        </div>
                    </div> 
                </div> 


                <div class=" col-lg-12 col-md-12 form-group" >
                    <div class="col-lg-12 col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Nro Documento</th>
                                    <th></th>
                                    <th>Valor Venta/Compra</th>
                                    <th>Cliente/Proveedor</th>
                                    <th>Entradas</th>
                                    <th>Salidas</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            <tbody id="tabcardex">
                            </tbody>
                        </table>
                    </div>
                </div>  

            </div>

            <!-- The Modal -->
            <div class="modal " id="modalprod">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Productos</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class=" col-lg-12 col-md-12 form-group" >
                                <div class="col-lg-12 col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Descripcion</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabprod">
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">                           
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </body>
</html>