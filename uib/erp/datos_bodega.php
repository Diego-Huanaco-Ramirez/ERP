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

            prodarr = [["001", "alcohol gel"], ["002", "Sal Fina"], ["003", "Levadura"], ["004", "Harina de Trigo"]];
            mediarr = [["0011", "Centímetros Cúbicos"], ["0022", "Gramos"], ["0033", "Kilo"], ["0044", "Litro"]];
            bodearr = [["001", "Patache", "Patache", "518369", "Externa(Cliente)"], ["002", "Uta", "Iquiuque", "788369", "Externa(Cliente)"], ["003", "Municipalidad", "Alto Hospicio", "918369", "Interna"]]



            $(document).ready(function () {
                $("#selmedi option").remove();
                opciones = "";

                for (i = 0; i < mediarr.length; i++)
                {
                    opcion = "<option value='" + mediarr[i][0] + "'>" + mediarr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selmedi").append(opciones);

                $(".selbode option").remove();
                opciones = "";

                for (i = 0; i < bodearr.length; i++)
                {
                    opcion = "<option value='" + bodearr[i][0] + "'>" + bodearr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $(".selbode").append(opciones);

            });

            function guardar()
            {
                codprod = $("#codprod").val();
                cantenv = $("#cantenv").val();
                codmedi = $("#selmedi").val();
                canprod = $("#cantprod").val();
                codbode = $("#selbode").val();


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
                    for (i = 0; i < mediarr.length; i++)
                    {
                        if (mediarr[i][0] == codmedi)
                        {
                            medida = mediarr[i];
                            break;
                        }
                    }
                    for (i = 0; i < bodearr.length; i++)
                    {
                        if (bodearr[i][0] == codbode)
                        {
                            bode = bodearr[i];
                            break;
                        }
                    }



                    fila = " <tr> <td>" + prod[1] + "</td> <td> " + prod[0] + "</td> <td>" + cantenv + "</td> <td>" + medida[1] + "</td> <td>" + canprod + "</td> </tr>";
                    $("#tbcambio").append(fila);
                } else {
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
                    <label class="control-label ">Registrar Datos Producción</label> 
                </div>

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3" style="
                         padding-left: 0px;
                         padding-right: 0px;
                         margin-right: 0px;
                         margin-left: 0px;
                         ">  
                        <div class="row col-lg-12 col-md-12" style="
                             padding-left: 0px;
                             padding-right: 0px;
                             margin-right: 0px;
                             margin-left: 0px;
                             ">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Buscar Producto</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="codprod" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-3" style="
                         padding-left: 0px;
                         padding-right: 0px;
                         margin-right: 0px;
                         margin-left: 0px;
                         ">  
                        <div class="row col-lg-12 col-md-12" style="
                             padding-left: 0px;
                             padding-right: 0px;
                             margin-right: 0px;
                             margin-left: 0px;
                             ">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Cantidad envasado</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="number" id="cantenv" class="form-control">                           
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-3" style="
                         padding-left: 0px;
                         padding-right: 0px;
                         margin-right: 0px;
                         margin-left: 0px;
                         ">  
                        <div class="row col-lg-12 col-md-12" style="
                             padding-left: 0px;
                             padding-right: 0px;
                             margin-right: 0px;
                             margin-left: 0px;
                             ">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Unidad Medida</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <select class="form-control" id="selmedi" >

                                </select>                           
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-3" style="
                         padding-left: 0px;
                         padding-right: 0px;
                         margin-right: 0px;
                         margin-left: 0px;
                         ">  
                        <div class="row col-lg-12 col-md-12" style="
                             padding-left: 0px;
                             padding-right: 0px;
                             margin-right: 0px;
                             margin-left: 0px;
                             ">
                            <div class="col-lg-6 col-md-6">
                                <label class="control-label ">Cantidad</label> 
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="number" id="cantprod" class="form-control">                           
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="row col-lg-12 col-md-12">
                    <div class="col-lg-3 col-md-3">
                        <label class="control-label ">Seleccione Bodega Destino</label> 
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <select class="form-control selbode" onchange="mostrarubi()" id="selbode" >

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
                                    <th scope="col">Cantidad Envasado</th>
                                    <th scope="col">U. Medida</th>
                                    <th scope="col">Cantidad</th>
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

            <div class="row justify-content-between">


                <div class="col-lg-4 col-md-4 ">
                    <button class="btn btn-info btn-sm" onclick="guardar()">Registrar</button>
                    <button class="btn btn-info btn-sm" onclick="">Cancelar</button>
                </div>

                <div class="col-lg-2 col-md-2 ">
                    <button class="btn btn-info btn-sm" onclick="guardar()">Ingresar a Bodega</button>
                </div>
            </div>
        </div>


    </body>
</html>
