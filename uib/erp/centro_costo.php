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

            prodarr = [["1", "Archivador","500","Unidad"], ["2", "Corchetera","500","Metros"], ["3", "Goma","400","Litros"], ["4", "Lapicero","800","Kilos"], ["5", "Resma Carta","600","Gramos"], ["6", "Resma Oficio","300","Gramos"]]


            function guardar()
            {
                codprod = $("#codprod").val();
                cantmate = $("#cantmate").val();
                traba = $("#nomtrab").val();
                
                 bandera = 0;
                fila = "";
                for (i = 0; i < prodarr.length; i++)
                {
                    if (prodarr[i][0] == codprod)
                    {
                        prod = prodarr[i];
                        bandera = 1;
                        break;
                    }
                }
                if (bandera == 1) {

                    fila = " <tr> <td>" + prod[1] + "</td> <td> " + prod[0] + "</td> <td>" + prod[2] + "</td> <td>" + prod[3] + "</td> <td>" + cantmate + "</td> <td>" + traba + "</td> </tr>";
                    $("#tbcambio").append(fila);
                } else {
                    alert("codigo producto no valido")
                }
                
                
                
//                alert("guardado: \ncod. material" + codmate + "\ncantidad" + cantmate + "\nfecha" + fechmate + "\ndepartamento" + depto + "\ntrabajador" + traba);

            }

        </script>
    </head>
    <body>
        <div class="container-fluid" style="border-style: groove;">

            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <label class="control-label ">Solicitud Centro de Costos</label> 
                </div>


                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-2 col-md-2">
                        <label class="control-label ">Ingrese Código del producto</label> 
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <input type="text" id="codprod" class="form-control">
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <label class="control-label ">Cantidad</label> 
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <input type="number" id="cantmate" class="form-control">                           
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <label class="control-label ">Nombre Trabajador</label> 
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <input type="text" id="nomtrab" class="form-control">

                    </div>
                </div> 

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-8 col-md-8 table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Cantidad Envasado</th>
                                    <th scope="col">U. Medida</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Solicitante</th>
                                </tr>
                            </thead>
                            <tbody id="tbcambio">

                            </tbody>
                        </table>

                    </div>

                    <div class="col-lg-4 col-md-4">

                        <img class="img-fluid" src="logotipo.png" width="460" height="345"> 

                    </div>
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
