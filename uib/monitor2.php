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
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
        <script src="owl.carousel.min.js"></script>

        <script>
            function openModal() {
                $("#myModal").modal()
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
                                <th>Boleta/Factura</th>
                                <th>Cliente</th>
                                <th>Fono</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15/07/2020</td>
                                <td></td>
                                <td onclick="openModal()">100</td>
                                <td>Juan Perez</td>
                                <td>975849632</td>
                                <td>15000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total</th>
                                <th>15000</th>
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
                        <h4 class="modal-title">Ventas por documento</h4>
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
                                    <tbody>
                                        <tr>
                                            <td>100</td>
                                            <td></td>
                                            <td>15/07/2020</td>
                                            <td>2uni. tela</td>
                                            <td></td>
                                            <td>15000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total Documento 100</th>
                                            <th></th>
                                            <th>15000</th>
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
