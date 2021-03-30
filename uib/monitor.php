<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('php_head.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>

            .tab {
                float: left;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
                width: 30%;

            }

            /* Style the buttons inside the tab */
            .tab button {
                display: block;
                background-color: inherit;
                color: black;
                padding: 22px 16px;
                width: 100%;
                border: none;
                outline: none;
                text-align: left;
                cursor: pointer;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current "tab button" class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                float: left;
                padding: 0px 12px;
                border: 1px solid #ccc;
                width: 70%;
                border-left: none;

                display: none;
            }

            @media only screen and (min-width: 992px) {
                #tab1{
                   overflow-y:auto;     
                    height: 379px;
                }
            }
             @media only screen and (min-width: 768px) and  (max-width: 991px){
                #tab1{
                   overflow-y:auto;     
                    height: 418px;
                }
            }
            @media only screen and (max-width: 767px) {
                #tab1{
                   overflow-y:auto;     
                    height: 493px;
                }
            }
            
            /* Clear floats after the tab */
            /*            .clearfix::after {
                            content: "";
                            clear: both;
                            display: table;
                        }*/
        </style>
        <script>
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }

        </script>
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-12 col-sm-2 col-lg-2">
                    <label class="control-label ">Numero Boleta: </label> 
                </div> 
                <div class="col-12 col-sm-4   col-lg-3">
                    <input  type="number" style="font-size: small;" id="<? echo "txt_bole" . $value; ?>"  class="form-control small"  > 
                </div> 
            </div>
            <div class="row">
                <div class="col-12 col-sm-2 col-lg-2">
                    <label class="control-label ">Fecha Inicio: </label> 
                </div> 
                <div class="col-12 col-sm-4 col-lg-3 ">
                    <input type="date" id="<? echo "txt_fechavenini" . $value; ?>" style="font-size: medium;" title="Fecha de nacimiento" class="form-control small"   placeholder="" value="" onchange="calculaedad2(this, 1,<? echo $value; ?>)" onblur="calculaedad2(this, 1,<? echo $value; ?>)"  > 
                </div>
                <div class="col-12 col-sm-2  col-lg-2">
                    <label class="control-label ">Fecha Inicio: </label> 
                </div> 
                <div class="col-12 col-sm-4 col-lg-3 ">
                    <input type="date" id="<? echo "txt_fechavenfin" . $value; ?>" style="font-size: medium;" title="Fecha de nacimiento" class="form-control small"   placeholder="" value="" onchange="calculaedad2(this, 1,<? echo $value; ?>)" onblur="calculaedad2(this, 1,<? echo $value; ?>)"  > 
                </div>
            </div>




            <div class="row" style="padding-top: 10px; padding-bottom: 10px">
                <div id="tab1" class="tab" >
                    <button class="tablinks" onmouseover="openTab(event, 'v01')">v01</button>
                    <button class="tablinks" onmouseover="openTab(event, 'v02')">v02</button>
                    <button class="tablinks" onmouseover="openTab(event, 'v02')">v03</button>
                </div>

                <div id="v01" class="tabcontent">
                    <div class="row">
                        <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="control-label " for="rut"> RUT :</label> 
                            </div> 
                            <div class="col-6 col-sm-8   col-lg-4">
                                <input  type="number" style="font-size: small;" id="<? echo "txt_rut" . $value; ?>" onblur="validarut2(<? echo $value; ?>);
                                        generapass(prefid);" maxlength="8"   class="form-control small"   placeholder="99999999" > 
                            </div> 
                            <div class="col-3 col-sm-3 col-lg-2">
                                <input type="text" style="font-size: small;"  id="<? echo "txt_dverificador" . $value; ?>" class="form-control small" placeholder="9"   onblur="validarut(<? echo $value; ?>)"  >  
                            </div>  
                            <div class="col-1 col-sm-1 col-lg-4" <? echo $hidden2; ?>>
                                <label class="switch small" style="font-size: xx-small;" title="Rut nacional"  >
                                    <input type="checkbox" class="form-check-inline small"  id="<? echo "check1" . $value; ?>" onchange="estado_check(this);" checked>
                                    <span class="slider round small"  ></span>
                                </label>
                            </div> 
                        </div>

                        <div class="row col-sm-12 col-12 col-md-12 form-group" style="padding-right: 0px !important;">
                            <div class="col-12 col-sm-12 col-lg-12">
                                <label class="control-label "> Nombres :</label> 
                            </div> 
                            <div class="col-12 col-sm-12  col-lg-4">
                                <input type="text" id="<? echo "txt_nombres" . $value; ?>" class="form-control" title="Nombre"  placeholder="Nombre.." > 
                            </div>
                            <div class="col-12 col-sm-6  col-lg-4">
                                <input type="text" id="<? echo "txt_apellidop" . $value; ?>" title="Apellido paterno"  placeholder="Apellido paterno.." class="form-control"  > 
                            </div> 
                            <div class="col-12 col-sm-6  col-lg-4">
                                <input type="text" id="<? echo "txt_apellidom" . $value; ?>" title="Apellido materno"  placeholder="Apellido materno.." class="form-control"  > 
                            </div>                              
                        </div>

                        <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="control-label " > Telefono :</label> 
                            </div> 
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <input type="text" id="<? echo "txt_movil" . $value; ?>" title="Teléfono movil" maxlength="12"  placeholder="Teléfono movil.." class="form-control"   maxlength="12" value="+569" > 
                            </div>
                        </div>

                        <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                            <div class="col-12 col-sm-12 col-lg-12">
                                <label class="control-label "> Domicilio :</label> 
                            </div> 
                            <div class="col-12 col-sm-12 col-lg-12">

                                <input type="text" name="direccion" id="<? echo "direccion" . $value; ?>" class="form-control" placeholder="Domicilio" title="dirección">
                            </div>
                            <div class="col-12 col-sm-6 col-lg-6">
                                <input type="text" name="Rerencia" id="<? echo "Rerencia" . $value; ?>" class="form-control" placeholder="Rerencia" title="Rerencia">
                            </div>
<!--                        </div>-->
<!--                        <div class="row col-md-12 form-group" style="padding-right: 0px !important;">
                            <div class="col-12 col-sm-12 col-lg-12">
                                <label class="control-label "> Comuna :</label> 
                            </div> -->
                            <div class="col-12 col-sm-6 col-lg-6">
                                <select class="form-control" name="sel_comunas" id="<? echo "sel_comunas" . $value; ?>" onchange="selcomuna(this.value)">
                                    <option value="0">Comuna</option>
                                    <option value="1">ARICA</option>
                                    <option value="2">ALTO HOSPICIO</option>
                                    <option value="3">IQUIQUE</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="v02" class="tabcontent" >
                 
                </div>

                <div id="v03" class="tabcontent">
                 
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="row" >
                <div class="col-lg-12 table-responsive" style="overflow-y: auto; height: 500px">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>
                                    Articulo
                                </td>
                                <td>
                                    Cantidad
                                </td>    
                                <td>
                                    Precio Unitario
                                </td>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Tela amarilla
                                </td>
                                <td>
                                    2
                                </td>    
                                <td>
                                    50000
                                </td>  
                            </tr>
                         
                           
                        </tbody>
                    </table>

                   
                </div> 
            </div>

        </div>

    </body>
</html>
