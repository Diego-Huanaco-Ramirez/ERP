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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
        <script>

            saldoarr = [
                ["001001", "TELA MEZCLILLA", "MT", "4,500", "100", "450,000"],
                ["003200", "PAÑO COCINA", "UN", "800", "400", "320,000"],
                ["210300", "ALFOMBRA", "UN", "8,900", "20", "178,000"],
                ["000001", "ALFOMBRA2", "UN", "8,900", "20", "178,000"]
            ];

            function mostrarsaldo() {
                $("#thsaldo tr").remove();
                $("#tbsaldo tr").remove();
                orden = $("input[name='optord']:checked").val();
                saldo = $("input[name='optsald']:checked").val();
                filas = "";
                if (orden == "0") {
                    saldoarr.sort(sortFunction);
                } else if (orden == "1") {
                    saldoarr.sort(compareSecondColumn);
                }
                console.log(saldoarr);
                tabla = "<tr><th>Código</th><th>Descripción</th><th>U. Medida</th><th class='valor'>Costo</th><th>Saldo</th><th class='valor'>Saldo Valorizado</th></tr>";
                $("#thsaldo").append(tabla);
                for (i = 0; i < saldoarr.length; i++) {
                    fila = " <tr> <td>" + saldoarr[i][0] + "</td> <td>" + saldoarr[i][1] + "</td> <td>" + saldoarr[i][2] + "</td> <td class='valor'>" + saldoarr[i][3] + "</td> <td>" + saldoarr[i][4] + "</td> <td class='valor'>" + saldoarr[i][5] + "</td> </tr>";
                    filas = filas + fila;
                }
                $("#tbsaldo").append(filas);
                if (saldo == "1")
                    $(".valor").attr("hidden", true);
                else
                    $(".valor").attr("hidden", false);
                $("#modalsald").modal();
            }

            function sortFunction(a, b) {
                if (a[0] === b[0]) {
                    return 0;
                } else {
                    return (a[0] < b[0]) ? -1 : 1;
                }
            }

            function compareSecondColumn(a, b) {
                if (a[1] === b[1]) {
                    return 0;
                } else {
                    return (a[1] < b[1]) ? -1 : 1;
                }
            }



            function imprimir() {
                html2canvas(document.getElementById("saldos"), {
                    onrendered: function (canvas) {

                        var img = canvas.toDataURL("image/png");
                        var doc = new jsPDF();
                        doc.addImage(img, 'JPEG', 10, 10);
                        doc.save('test.pdf');
                    }

                });
            }
        </script>
    </head>
    <body>
        <div class="container">


            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class=" col-lg-12 col-md-12 form-group">
                    <label class="control-label "> Informe de Saldos</label> 
                </div>
            </div>

            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class=" row col-lg-12 col-md-12 form-group" >
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Ordenado Por Código</label>                                    
                    </div> 
                    <div class="col-lg-3 col-md-3">
                        <input type="radio" class="form-check-input" name="optord" value="0">                                 
                    </div> 
                </div>
                <div class=" row col-lg-12 col-md-12 form-group" >
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Ordenado Por Descripción</label>                                    
                    </div> 
                    <div class="col-lg-3 col-md-3">
                        <input type="radio" class="form-check-input" name="optord" value="1">                                 
                    </div> 
                </div>
            </div>

            <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                <div class=" row col-lg-12 col-md-12 form-group" >
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Saldo Valorizado</label>                                    
                    </div> 
                    <div class="col-lg-3 col-md-3">
                        <input type="radio" class="form-check-input" name="optsald" value="0">                                 
                    </div> 
                </div>
                <div class=" row col-lg-12 col-md-12 form-group" >
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Saldo en Unidades</label>                                    
                    </div> 
                    <div class="col-lg-3 col-md-3">
                        <input type="radio" class="form-check-input" name="optsald" value="1">                                 
                    </div> 
                </div>
            </div>

            <div class=" col-lg-12 col-md-12 form-group">
                <div class=" row col-lg-12 col-md-12 form-group" >
                    <div class="col-lg-3 col-md-3">
                        <button class="btn btn-info" onclick="mostrarsaldo()">Seleccione Opciones</button>                             
                    </div> 
                </div>
            </div>


            <!-- The Modal -->
            <div class="modal " id="modalsald">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Saldo</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row col-lg-12 col-sm-12 col-12">
                                <div id="saldos" class="table-responsive">
                                    <table  class="table table-bordered">
                                        <thead id="thsaldo"></thead>
                                        <tbody id="tbsaldo"></tbody>
                                    </table>
                                </div> 
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">     
                            <button id="btnprint" type="button" class="btn btn-info" onclick="imprimir()">Imprimir</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </body>
</html>