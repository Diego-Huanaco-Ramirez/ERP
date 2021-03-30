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


        <script>
            emparr = [["111", "empresa 1", "ferreteria", "ferreteria", "cuarta sur #2012", "iquique", "iquique"], ["222", "empresa 2", "libreria", "libreria", "cuarta sur #2012", "arica", "arica"], ["aaa", "empresa a", "perreria", "perreria", "cuarta sur #2012", "santiago", "santiago"]];
            prodarr = [["001", "tela", "tela de buena calidad", "marca", "123", "1", "telas", "metro"], ["002", "tela roja", "tela de buena calidad", "marca", "1233", "1", "telas", "metro"], ["005", "cuaderno", "cuaderno 100 hojas", "marca", "321", "2", "cuadernos", "unidad"]];
            catarr = [["1", "telas"], ["2", "cuadernos"]];

            function buscarpro(rut)
            {

                var arreglo;
                for (i = 0; i < emparr.length; i++)
                {

                    if (emparr[i][0] == rut)
                        arreglo = emparr[i];
                }
                if (arreglo != null)
                {
                    $("#lblrutpro").text(arreglo[0]);
                    $("#lblrazpro").text(arreglo[1]);
                    $("#lblgiropro").text(arreglo[2]);
                    $("#lblservpro").text(arreglo[3]);
                    $("#lbldirpro").text(arreglo[4]);
                    $("#lblciupro").text(arreglo[5]);
                } else
                {
                    alert("no hay registros con ese rut")
                }

            }

            function modalprov()
            {
                $("#selpro option").remove();
                opciones = "";
                for (i = 0; i < emparr.length; i++)
                {
                    opcion = "<option value='" + emparr[i][0] + "'>" + emparr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selpro").append(opciones);
                $("#modalprov").modal();
            }

            function modalnomprod()
            {
                $("#selnomprod option").remove();
                opciones = "";
                for (i = 0; i < prodarr.length; i++)
                {
                    opcion = "<option value='" + prodarr[i][0] + "'>" + prodarr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selnomprod").append(opciones);
                $("#modalnomprod").modal();
            }

            function modalcatprod()
            {
                $("#selcatprod option").remove();
                opciones = "";
                for (i = 0; i < catarr.length; i++)
                {
                    opcion = "<option value='" + catarr[i][0] + "'>" + catarr[i][1] + "</option>";
                    opciones = opciones + opcion;
                }
                $("#selcatprod").append(opciones);
                carganom();
                $("#modalcatprod").modal();
            }

            function carganom()
            {
                cat = $("#selcatprod").val();
                $("#selnomprod2 option").remove();
                opciones = "";
                for (i = 0; i < prodarr.length; i++)
                {
                    if (prodarr[i][5] == cat)
                    {
                        opcion = "<option value='" + prodarr[i][0] + "'>" + prodarr[i][1] + "</option>";
                        opciones = opciones + opcion;
                    }
                }
                $("#selnomprod2").append(opciones);
            }



            function buscarrazon()
            {
                rut = $("#selpro").val();
                buscarpro(rut);
            }

            function buscarrut()
            {
                rut = $("#txtrutpro").val();
                buscarpro(rut);
            }

            function buscaprodcat()
            {
                cod = $("#selnomprod2").val();
                buscarprod(cod);
            }


            function buscaprodnom()
            {
                cod = $("#selnomprod").val();
                buscarprod(cod);
            }

            function buscarcod()
            {
                cod = $("#txtcodprod").val();
                buscarprod(cod);
            }

            function buscarprod(cod)
            {

                var arreglo;
                for (i = 0; i < prodarr.length; i++)
                {

                    if (prodarr[i][0] == cod)
                        arreglo = prodarr[i];
                }
                if (arreglo != null)
                {
                    $("#lblcodprod").text(arreglo[0]);
                    $("#lblnomprod").text(arreglo[1]);
                    $("#lbldesprod").text(arreglo[2]);
                    $("#lblmarprod").text(arreglo[3]);
                    $("#lblmodprod").text(arreglo[4]);
                    $("#lblcodcatprod").text(arreglo[5]);
                    $("#lblnomcatprod").text(arreglo[6]);
                    $("#lblunicom").text(arreglo[7]);

                } else
                {
                    alert("no hay registros con ese rut")
                }

            }

            function agretab()
            {

                fila = "<tr id='entr'> <td id='entd'> <i id='eni' onclick=borfil(this) class='fa fa-close' style='color:red'></i></td> <td> " + $("#txtcantcom").val() + " </td> <td>" + $("#lblunicom").text() + "</td> <td>" + $("#lblcodprod").text() + "</td> <td>" + $("#lblnomprod").text() + "</td> <td>" + $("#lbldesprod").text() + "</td> <td>" + $("#txtprecom").val() + "</td></tr>";
                $("#tabprod").append(fila);
            }


            function borfil(btn)
            {
                $(btn).closest("tr").remove();

            }
        </script>

    </head>

    <body>
        <div class="container">

            <div class="row">

                <div class="row">
                    <div class=" col-lg-12 col-md-12 form-group" >
                        <div class="col-lg-12 col-md-12">
                            <label class="control-label "> RECEPCION COMPRA</label> 
                        </div> 
                    </div>
                    <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                        <div class="col-lg-12 col-md-12">
                            <label class="control-label "> Informacion de la bodega :</label> 
                        </div> 
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-2 col-md-2">
                                <label class="control-label "> bodega :</label> 
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <select class="form-control" id="" >

                                </select>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <button class="btn btn-info" onclick=""><i class="fa fa-search"></i></button>
                            </div>
                        </div> 

                    </div> 

                    <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                        <div class="col-lg-12 col-md-12l">
                            <label class="control-label "> Informacion Bodegas :</label> 
                        </div> 
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label"> Bodega centra :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblcenbod"></label> 
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label">Cod. Bodega :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblcodbod"></label> 
                            </div>
                        </div>     
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label"> Rut Empresa :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblrutbod"></label> 
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label">Nombre Empresa:</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblnombod"></label> 
                            </div>
                        </div>  
                    </div>




                    <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                        <div class="col-lg-12 col-md-12">
                            <label class="control-label "> Informacion Proveedor :</label> 
                        </div> 
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-2 col-md-2">
                                <label class="control-label "> R. U. T. :</label> 
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <input type="text" id="txtrutpro" class="form-control">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <button class="btn btn-info" onclick="buscarrut()"><i class="fa fa-search"></i></button>
                            </div>
                        </div> 
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-4 col-md-6">
                                <label class="control-label ">Buscar proveedor por razon social</label> 
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <button class="btn btn-info" onclick="modalprov()"><i class="fa fa-window-maximize"></i></button>
                            </div>
                        </div> 
                    </div>

                    <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                        <div class="col-lg-12 col-md-12l">
                            <label class="control-label "> Informacion Proovedor :</label> 
                        </div> 
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label"> R. U. T. :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblrutpro"></label> 
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label">Razon social :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblrazpro"></label> 
                            </div>
                        </div>     
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label"> Giro :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblgiropro"></label> 
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label">Servicio :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblservpro"></label> 
                            </div>
                        </div>  
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label"> Direccion :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lbldirpro"></label> 
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <label class="control-label">Ciudad :</label> 
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <label class="control-label" id="lblciupro"></label> 
                            </div>
                        </div>  

                        <div class="row col-lg-12 col-md-12 form-group">
                            <div class="col-lg-12 col-md-12">
                                <button class="btn btn-danger">cancelar</button>
                            </div> 
                        </div>
                    </div>

                    <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                        <div class="col-lg-12 col-md-12">
                            <label class="control-label "> Informacion documento :</label> 
                        </div> 
                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-3 col-md-3">
                                <label class="control-label ">Tipo documento:</label>                                    
                            </div> 
                            <div class="col-lg-3 col-md-3">
                                <select class="form-control" id="" >

                                </select>
                            </div> 
                            <div class="col-lg-3 col-md-3">
                                <label class="control-label ">N°:</label>                                    
                            </div> 
                            <div class="col-lg-3 col-md-3">
                                <input type="text" id="txtnumdoc" class="form-control">
                            </div> 
                        </div>


                        <div class="row col-lg-12 col-md-12">
                            <div class="col-lg-3 col-md-3">
                                <label class="control-label">Fecha entrega</label> 
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <input type="date" id="fechaent" class="form-control" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="col-lg-5 col-md-5" style="border-style: groove;">
                                <div class="col-lg-12 col-md-12">
                                    <label class="control-label ">Estado de Pago</label>                                    
                                </div> 
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optpago" value="">pagada
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="optpago" value="">no pagada
                                                </label>
                                            </div>                               
                                    </div> 
                                </div>     
                            </div>
                            <div class="row col-lg-12 col-md-12">
                                <div class="col-lg-5 col-md-5">
                                    <label class="control-label">Busqueda de oredenes ded compra</label> 
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <button class="btn btn-info" onclick=""><i class="fa fa-window-maximize"></i></button>
                                </div>
                            </div>

                            <div class="row col-lg-12 col-md-12">
                                <div class="col-lg-12 col-md-12">
                                    <label class="control-label">Evaluación del proveedor:</label> 
                                </div>
                                <div class="row col-lg-7 col-md-7">
                                    <div class="col-lg-6 col-md-6">
                                        <label class="control-label">Criterios </label> 
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label class="control-label">Nota</label> 
                                    </div>
                                </div>
                                <div class="row col-lg-7 col-md-7">
                                    <div class="col-lg-6 col-md-6">
                                        <label class="control-label">Calidad </label> 
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label class="radio-inline"><input type="radio" name="cal">1</label>
                                        <label class="radio-inline"><input type="radio" name="cal">2</label>
                                        <label class="radio-inline"><input type="radio" name="cal">3</label>
                                        <label class="radio-inline"><input type="radio" name="cal">4</label>
                                    </div>
                                </div>
                                 <div class="row col-lg-7 col-md-7">
                                    <div class="col-lg-6 col-md-6">
                                        <label class="control-label">Costo </label> 
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label class="radio-inline"><input type="radio" name="cos">1</label>
                                        <label class="radio-inline"><input type="radio" name="cos">2</label>
                                        <label class="radio-inline"><input type="radio" name="cos">3</label>
                                        <label class="radio-inline"><input type="radio" name="cos">4</label>
                                    </div>
                                </div>
                                 <div class="row col-lg-7 col-md-7">
                                    <div class="col-lg-6 col-md-6">
                                        <label class="control-label">Tiempo de respuesta </label> 
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label class="radio-inline"><input type="radio" name="tie">1</label>
                                        <label class="radio-inline"><input type="radio" name="tie">2</label>
                                        <label class="radio-inline"><input type="radio" name="tie">3</label>
                                        <label class="radio-inline"><input type="radio" name="tie">4</label>
                                    </div>
                                </div>
                                 <div class="row col-lg-7 col-md-7">
                                    <div class="col-lg-6 col-md-6">
                                        <label class="control-label">Duración </label> 
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label class="radio-inline"><input type="radio" name="dur">1</label>
                                        <label class="radio-inline"><input type="radio" name="dur">2</label>
                                        <label class="radio-inline"><input type="radio" name="dur">3</label>
                                        <label class="radio-inline"><input type="radio" name="dur">4</label>
                                    </div>
                                </div>
                            </div>




                        </div> 


                        <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                            <div class="col-lg-12 col-md-12">
                                <label class="control-label "> Informacion del produto :</label> 
                            </div> 

                            <div class="row col-lg-12 col-md-12">
                                <div class="col-lg-2 col-md-2">
                                    <label class="control-label ">Codigo producto</label> 
                                </div>
                                <div class="col-lg-2 col-md-4">
                                    <input type="text" id="txtcodprod" class="form-control">
                                </div>
                                <div class="col-lg-2 col-md-4">
                                    <button class="btn btn-info" onclick="buscarcod()"><i class="fa fa-search"></i></button>
                                </div>
                            </div>  

                            <div class="row col-lg-12 col-md-12">
                                <div class="col-lg-4 col-md-6">
                                    <label class="control-label ">Buscar producto por nombre</label> 
                                </div>
                                <div class="col-lg-2 col-md-4">
                                    <button class="btn btn-info" onclick="modalnomprod()"><i class="fa fa-window-maximize"></i></button>
                                </div>
                            </div> 

                            <div class="row col-lg-12 col-md-12">
                                <div class="col-lg-4 col-md-6">
                                    <label class="control-label ">Buscar producto por categoria</label> 
                                </div>
                                <div class="col-lg-2 col-md-4">
                                    <button class="btn btn-info" onclick="modalcatprod()"><i class="fa fa-window-maximize"></i></button>
                                </div>
                            </div> 

                        </div> 

                        <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                            <div class="col-lg-12 col-md-12">
                                <label class="control-label "> Informacion del produto :</label> 
                            </div> 
                            <div class="row col-lg-12 col-md-12" style="border-style: groove;">
                                <div class="col-lg-12 col-md-12">
                                    <label class="control-label ">Detalles producto</label> 
                                </div>
                                <div class="row col-lg-12 col-md-12">
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label"> Codigo producto:</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblcodprod"></label> 
                                    </div>
                                </div>  
                                <div class="row col-lg-12 col-md-12">
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label"> Nombre:</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblnomprod"></label> 
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label">Descripcion:</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lbldesprod"></label> 
                                    </div>
                                </div>  
                                <div class="row col-lg-12 col-md-12">
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label"> Marca:</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblmarprod"></label> 
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label">Modelo:</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblmodprod"></label> 
                                    </div>
                                </div>  
                                <div class="row col-lg-12 col-md-12">
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label"> codigo categoria:</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblcodcatprod"></label> 
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label">Nombre categoria:</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblnomcatprod"></label> 
                                    </div>
                                </div>  
                            </div> 
                            <div class="row col-lg-12 col-md-12" style="border-style: groove;">
                                <div class="col-lg-12 col-md-12">
                                    <label class="control-label ">Detalles compra</label> 
                                </div>
                                <div class="row col-lg-12 col-md-12">
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label"> Precio compra :</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <input type="text" id="txtprecom" class="form-control">
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label">Fecha compra :</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblfechcom"></label> 
                                    </div>
                                </div>  
                                <div class="row col-lg-12 col-md-12">
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label"> Cantidad a solicitar :</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <input type="text" id="txtcantcom" class="form-control">
                                    </div>
                                    <div class="col-lg-2 col-md-3">
                                        <label class="control-label">Unidad :</label> 
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <label class="control-label" id="lblunicom"></label> 
                                    </div>
                                </div> 
                            </div>
                            <div class="row col-lg-12 col-md-12 form-group">
                                <div class="col-lg-12 col-md-12">
                                    <button class="btn btn-info" onclick="agretab()">agregar</button>
                                    <button class="btn btn-danger">cancelar</button>
                                </div> 
                            </div>
                        </div>




                        <div class=" col-lg-12 col-md-12 form-group" style="border-style: groove;">
                            <div class="col-lg-12 col-md-12">
                                <label class="control-label "> Listado de productos :</label> 
                            </div> 
                            <div class="col-lg-12 col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Valor unitario</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabprod">
                                    </tbody>
                                </table>
                            </div>
                        </div>  


                        <div class=" col-lg-12 col-md-12 form-group "> 
                            <div class="row">
                                <div class=" col-lg-6 col-md-6 form-group" style="border-style: groove;">
                                    <div class="col-lg-12 col-md-12">
                                        <label class="control-label "> Impuestos :</label> 
                                    </div> 
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optimp" value="">I.V.A.
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optimp" value="">Exenta
                                            </label>
                                        </div>                               
                                    </div> 
                                </div> 
                                <div class=" col-lg-6 col-md-6 form-group" style="border-style: groove;">
                                    <div class="col-lg-12 col-md-12">
                                        <label class="control-label "> Totales :</label> 
                                    </div> 
                                    <div class="row col-lg-12 col-md-12">
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label"> Sub-Neto :</label> 
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label" id='lblsubnet'></label> 
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 col-md-12">
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label"> Neto :</label> 
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label" id='lblneto'></label> 
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 col-md-12">
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label"> I.V.A. :</label> 
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label" id='lbLiva'></label> 
                                        </div>
                                    </div>
                                    <div class="row col-lg-12 col-md-12">
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label"> Total :</label> 
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label class="control-label" id='lbltotal'></label> 
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div> 







                    <!-- The Modal -->
                    <div class="modal " id="modalprov">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Proveedores</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row col-lg-12 col-sm-12 col-12">

                                        <div class="col-lg-12 col-md-12">
                                            <label class="control-label">Proveedores</label> 
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <select class="form-control" id="selpro" >

                                            </select>
                                        </div>


                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onclick="buscarrazon()" data-dismiss="modal">Aceptar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- The Modal -->
                    <div class="modal " id="modalcatprod">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Producto</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row col-lg-12 col-sm-12 col-12">

                                        <div class="col-lg-12 col-md-12">
                                            <label class="control-label">Categoria</label> 
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <select onchange="carganom()" class="form-control" id="selcatprod" >

                                            </select>
                                        </div>


                                    </div>
                                    <div class="row col-lg-12 col-sm-12 col-12">

                                        <div class="col-lg-12 col-md-12">
                                            <label class="control-label">Nombre</label> 
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <select class="form-control" id="selnomprod2" >

                                            </select>
                                        </div>


                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onclick="buscaprodcat()" data-dismiss="modal">Aceptar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!-- The Modal -->
                    <div class="modal " id="modalnomprod">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Producto</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="row col-lg-12 col-sm-12 col-12">

                                        <div class="col-lg-12 col-md-12">
                                            <label class="control-label">Nombre</label> 
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <select class="form-control" id="selnomprod" >

                                            </select>
                                        </div>


                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" onclick="buscaprodnom()" data-dismiss="modal">Aceptar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                </body>
                </html>