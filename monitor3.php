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
        <link rel="stylesheet" href="owlcarousel__/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel__/owl.theme.default.min.css">
        <script src="owl.carousel.min.js"></script>

        <script>
            ventas = [["id", "17-07-2020", "100", "juan perez", "7655223310", "15000"], ["id2", "17-05-2020", "110", "mario rojas", "765522610", "16000"]];
            detalles = [["id", "100", "17-07-2020", "2 un. tela", "10000"], ["id", "100", "17-07-2020", "2 mts. tela roja", "19000"], ["id", "100", "17-07-2020", "2 un. pintura", "9000"]]

            function openModal(id) {
                alert(id);
                var i;
                $("#dtabla tr").remove();
                filas = ""
                total = 0;
                for (i = 0; i < detalles.length; i++) {
                    fila = " <tr> <td>" + detalles[i][1] + "</td> <td> </td> <td>" + detalles[i][2] + "</td> <td>" + detalles[i][3] + "</td> <td></td> <td>" + detalles[i][4] + "</td> </tr>";
                    filas = filas + fila;
                    total = total + parseInt(detalles[i][4]);
                }

                $("#dtabla").append(filas);
                $("#dtotal").html(total);
                $("#myModal").modal();
            }


            function buscarFecha() {

                var i;
                $("#vtabla tr").remove();
                filas = ""
                total = 0;
                for (i = 0; i < ventas.length; i++) {
                    fila = " <tr> <td>" + ventas[i][1] + "</td> <td> </td> <td onclick=openModal('" + ventas[i][0] + "')>" + ventas[i][2] + "</td> <td>" + ventas[i][3] + "</td> <td>" + ventas[i][4] + "</td> <td>" + ventas[i][5] + "</td> </tr>";
                    filas = filas + fila;
                    total = total + parseInt(ventas[i][5]);
                }

                $("#vtabla").append(filas);
                $("#vtotal").html(total);

            }





        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 col-lg-2">
                    <label class="control-label ">Fecha Desde: </label> 
                </div> 
                <div class="col-12 col-sm-5 col-lg-3 ">
                    <input type="date" id="fechades" style="font-size: medium;" title="Fecha de nacimiento" class="form-control small"   placeholder="" value=""   > 
                </div>
                <div class="col-12 col-sm-3 col-lg-2">
                    <button class="col-lg-12 btn btn-info" onclick="buscarFecha()">buscar </button>
                </div> 
                <div class="col-12 col-sm-4  col-lg-2">
                    <label class="control-label ">Fecha Hasta: </label> 
                </div> 
                <div class="col-12 col-sm-5 col-lg-3 ">
                    <input type="date" id="fechahas" style="font-size: medium;" title="Fecha de nacimiento" class="form-control small"   placeholder="" value=""  > 
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th></th>
                                <th>NOTA VENTA</th>
                                <th>Cliente</th>
                                <th>Fono</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="vtabla">
                            <tr>
                                <td colspan="6">No hay datos</td>

                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th id="vtotal">0</th>
                            </tr>
                        </tfoot>
                    </table>
                </div> 
            </div>
        </div>




        <!-- The Modal -->
        <div class="modal " id="myModal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Detalle nota venta</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row col-lg-12 col-sm-12 col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Boleta/Factura</th>
                                            <th></th>
                                            <th>Fecha</th>
                                            <th>Detalle</th>
                                            <th></th>
                                            <th>Valor item</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dtabla"  >
                                        <tr>
                                            <td colspan="6">No hay datos</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total Documento 100</th>
                                            <th id="dtotal">0</th>
                                        </tr>
                                    </tfoot>
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
    </body>
</html>
