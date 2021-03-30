<?php
 //session_unset(); session_destroy(); 
//echo session_id();
$bandera = true;
if ($_POST['funcion'] == 'seleccionar') {
    seleccionar($_SESSION["cart_item"]);
    $bandera = false;
}

if ($_POST['funcion'] == 'consultar') {
    consultar();
    $bandera = false;
}
if ($_POST['funcion'] == 'pedido') {
    pedido();
    $bandera = false;
}

if ($_POST['funcion'] == 'puentes') {
    puentes($_SESSION["cart_item"],1);
    $bandera = false;
}
if($_POST['funcion'] == 'puentes2'){
      if(!empty($_SESSION["cart_item"] )){
          puentes($_SESSION["cart_item"],1);
      }
   $bandera = false;
}
if ($_POST['funcion'] == 'login') {
    login();
    $bandera = false;
}
if ($_POST['funcion'] == 'cerrar') {
    cerrar();
    $bandera = false;
}
if ($_POST['funcion'] == 'cargarcanasta') {
    cargarcanasta();
    $bandera = false;
}

function cargarcanasta() {
    if (!($_POST['confirma']))
        unset($_SESSION["cart_item"]);


    $arrayproductos = json_decode($_POST['myJSON'], false);
    if (count($arrayproductos) > 0) {

        for ($i = 0; $i < count($arrayproductos); $i++) {
            if (intval($arrayproductos[$i][3]) > 0) {
                $itemArray = array($arrayproductos[$i][2], $arrayproductos[$i][0], $arrayproductos[$i][3],
                    $arrayproductos[$i][8], $arrayproductos[$i][4], $arrayproductos[$i][4]);
                //$_SESSION["cart_item"]= $itemArray;
                //  array_push($_SESSION["cart_item"][$n],$itemArray);
                if (empty($_SESSION["cart_item"])) {
                    $n = 0;
                } else {
                    $n = count($_SESSION["cart_item"]);
                }
                $_SESSION["cart_item"][$n] = $itemArray;
            }
        }
    }
}

function cargarcanasta2() {
    $arrayproductos = json_decode($_POST['myJSON1'], false);
    if (count($arrayproductos) > 0) {

        for ($i = 0; $i < count($arrayproductos); $i++) {
            if (intval($arrayproductos[$i]['canasta_cantidad_prod']) > 0) {
                $itemArray = array($arrayproductos[$i]['canasta_codigo_prod'], $arrayproductos[$i]['prod_nombre'], $arrayproductos[$i]['canasta_cantidad_prod'],
                    $arrayproductos[$i]['canasta_precio'], $arrayproductos[$i]['canasta_fecha'], $arrayproductos[$i]['canasta_hora']);
                //$_SESSION["cart_item"]= $itemArray;
                //  array_push($_SESSION["cart_item"][$n],$itemArray);
                if (empty($_SESSION["cart_item"])) {
                    $n = 0;
                } else {
                    $n = count($_SESSION["cart_item"]);
                }
                $_SESSION["cart_item"][$n] = $itemArray;
            }
        }
    }
}

function seleccionar() {

    if (intval($_POST['cantidad_producto']) > 0) {

        $itemArray = array($_POST['codigo_producto'], $_POST['nombre_producto'], $_POST['cantidad_producto'], $_POST['precio_producto'], date('Y-m-d'), date('h:m:s'));
        //$_SESSION["cart_item"]= $itemArray;
        //  array_push($_SESSION["cart_item"][$n],$itemArray);
        if (empty($_SESSION["cart_item"])) {
            $n = 0;
        } else {
            $n = count($_SESSION["cart_item"]);
        }
        $_SESSION["cart_item"][$n] = $itemArray;
    }

    $_POST['codigo_producto'] = "";
    $_POST['cantidad'] = "";
}

function cerrar() {
    unset($_SESSION["usuario"]);
    unset($_SESSION["rut"]);
    unset($_SESSION["cart_item"]);

    $_SESSION["usuario"] = "";
    session_unset();
    session_destroy();
}

function login() {
    if (!isset($_SESSION["usuario"])) {

        $_SESSION["usuario"] = $_POST['nombre'];
        $_SESSION["rut"] = $_POST['rut'];

        $_GET['nombre'] = "";
        $_GET['rut'] = "";
    } else {
        $_SESSION["usuario"] = $_SESSION["usuario"];
        $_SESSION["rut"] = $_SESSION["rut"];
    }
}
?>  
