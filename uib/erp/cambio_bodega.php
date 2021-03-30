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
            prodarr = [["001", "Alcohol Gel"], ["002", "Harina de Trigo"], ["003", "levadura"]];
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
                bandera=0;
                fila = "";
                for (i = 0; i < prodarr.length; i++)
                {
                    if (prodarr[i][0] == codprod)
                    {
                        prod = prodarr[i];
                        bandera=1;
                        break;
                    }
                }
                if(bandera == 1){
                for (i = 0; i < bodearr.length; i++)
                {
                    if (bodearr[i][0] == bodeori)
                    {
                        ori = bodearr[i];
                        break;
                    }
                }for (i = 0; i < bodearr.length; i++)
                {
                    if (bodearr[i][0] == bodedes)
                    {
                        des = bodearr[i];
                        break;
                    }
                }for (i = 0; i < ubiarr.length; i++)
                {
                    if (ubiarr[i][0] == bodeubi)
                    {
                        ubi = ubiarr[i];
                        break;
                    }
                }
                
                
                fila = " <tr> <td>" + prod[1] + "</td> <td> " + prod[0] + "</td> <td>" + ori[1] + "</td> <td>" + des[1] + "</td> <td>" + ubi[2] + "</td> </tr>";
                $("#tbcambio").append(fila);
            }
            else{
                alert("codigo producto no valido")
            }
                //alert("guardado: \n cod. producto" + codprod + "\ncod. bodega origen" + bodeori + "\ncod. bodega destino " + bodedes + "\ncod. ubicacion bodega" + bodeubi);

            }

        </script>
    </head>
    <body>
        <div class="container-fluid" style="border-style: groove;">

            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <label class="control-label ">Cambio de Bodega</label> 
                </div>

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Ingrese Código del producto</label> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <input type="text" id="codprod" class="form-control">
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Seleccione Bodega Origen</label> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <select class="form-control selbode" id="selbodeori" >

                        </select>                           
                    </div>
                </div> 

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Seleccione Bodega Destino</label> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <select class="form-control selbode" onchange="mostrarubi()" id="selbodedes" >

                        </select>                            
                    </div>          
                </div>

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Ubicación en Bodega Destino</label> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <select class="form-control" id="selubides" >

                        </select>                            
                    </div>
                </div>


                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-8 col-md-8 table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">B. Origen</th>
                                    <th scope="col">B. Destino</th>
                                    <th scope="col">Ubicación</th>
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
