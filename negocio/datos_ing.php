<?php

require_once('../clases/cls_ing_solicitud_compra.php');
require_once('../clases/cls_ing_det_solicitud_compra.php');
require_once('../clases/cls_ing_oc.php');
require_once('../clases/cls_ing_oc_det.php');
require_once('../clases/cls_ing_proveedor.php');
require_once('../clases/cls_ing_compras.php');
require_once('../clases/cls_ing_ingreso2.php');
require_once('../clases/cls_ing_ingreso_det2.php');

if ($_POST['funcion'] == 'insertsolicitud')
    insertsolicitud();
if ($_POST['funcion'] == 'insertsolicituddet')
    insertsolicituddet();
if ($_POST['funcion'] == 'insertoc')
    insertoc();
if ($_POST['funcion'] == 'insertocdet')
    insertocdet();
if ($_POST['funcion'] == 'insertproveedor')
    insertproveedor();
if ($_POST['funcion'] == 'insertcompras')
    insertcompras();
if ($_POST['funcion'] == 'insertingreso')
    insertingreso();
if ($_POST['funcion'] == 'insertingresodet')
    insertingresodet();

if ($_POST['funcion'] == 'deletesolicitud')
    deletesolicitud();
if ($_POST['funcion'] == 'deletesolicituddet')
    deletesolicituddet();
if ($_POST['funcion'] == 'deleteoc')
    deleteoc();
if ($_POST['funcion'] == 'deleteocdet')
    deleteocdet();
if ($_POST['funcion'] == 'deleteproveedor')
    deleteproveedor();
if ($_POST['funcion'] == 'deletecompras')
    deletecompras();
if ($_POST['funcion'] == 'deleteingreso')
    deleteingreso();
if ($_POST['funcion'] == 'deleteingresodet')
    deleteingresodet();

if ($_POST['funcion'] == 'updatesolicitud')
    updatesolicitud();
if ($_POST['funcion'] == 'updatesolicituddet')
    updatesolicituddet();
if ($_POST['funcion'] == 'updateoc')
    updateoc();
if ($_POST['funcion'] == 'updateocdet')
    updateocdet();
if ($_POST['funcion'] == 'updateproveedor')
    updateproveedor();
if ($_POST['funcion'] == 'updatecompras')
    updatecompras();
if ($_POST['funcion'] == 'updateingreso')
    updateingreso();
if ($_POST['funcion'] == 'updateingresodet')
    updateingresodet();

function insertsolicitud() {
    $nodo = new cls_solicitud_compra();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setsolc_fecha($myJSON[$i++]);
    $nodo->setsolc_destino($myJSON[$i++]);
    $nodo->setsolc_observacion($myJSON[$i++]);
    $nodo->setsolc_usuario($myJSON[$i++]);
    $nodo->setsolc_estado($myJSON[$i++]);
    $nodo->setsolc_tipo($myJSON[$i++]);

    $nodo->insert();
}

function insertsolicituddet() {
    $nodo = new cls_det_solicitud_compra();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setsolc_id($myJSON[$i++]);
    $nodo->setdsolc_detalle($myJSON[$i++]);
    $nodo->setdsolc_cant($myJSON[$i++]);
    $nodo->setdsolc_umedida($myJSON[$i++]);
    $nodo->setdsolc_obs_utilidad($myJSON[$i++]);
    $nodo->setdsolc_porvender($myJSON[$i++]);
    $nodo->setdsolc_estado($myJSON[$i++]);
    $nodo->setdsolc_usuario($myJSON[$i++]);
    $nodo->setdsolc_usgestor($myJSON[$i++]);

    $nodo->insert();
}

function insertoc() {
    $nodo = new cls_ing_oc();

    $myJSON = json_decode($_POST['myJSON'], false);
    $i = 0;

    $nodo->setprov_id($myJSON[$i++]);
    $nodo->setoc_codigo($myJSON[$i++]);
    $nodo->setoc_tipo($myJSON[$i++]);
    $nodo->setoc_empresa($myJSON[$i++]);
    $nodo->setoc_estado($myJSON[$i++]);
    $nodo->setoc_fecha_entrega($myJSON[$i++]);
    $nodo->setoc_solicitante($myJSON[$i++]);
    $nodo->setoc_observacion($myJSON[$i++]);
    $nodo->setoc_neto($myJSON[$i++]);
    $nodo->setoc_iva($myJSON[$i++]);
    $nodo->setoc_total($myJSON[$i++]);
    $nodo->setoc_forma_pago($myJSON[$i++]);
    $nodo->setoc_condiciones($myJSON[$i++]);
    $nodo->setoc_rut_emision($myJSON[$i++]);
    $nodo->setoc_rut_aprobacion($myJSON[$i++]);
    $nodo->setoc_cheque_adjunto($myJSON[$i++]);
    $nodo->setoc_descuento($myJSON[$i++]);
    $nodo->setoc_tipo_descuento($myJSON[$i++]);
    $nodo->setoc_impuesto($myJSON[$i++]);
    $nodo->setoc_gasto_envio($myJSON[$i++]);
    $nodo->setoc_estado_pago($myJSON[$i++]);

    $nodo->insert();
}

function insertocdet() {
    $nodo = new cls_ing_oc_det();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setprov_id($myJSON[$i++]);
    $nodo->setoc_id($myJSON[$i++]);
    $nodo->setoc_cod_producto($myJSON[$i++]);
    $nodo->setoc_cod_unidad($myJSON[$i++]);
    $nodo->setoc_cantidad($myJSON[$i++]);
    $nodo->setoc_precio_unitario($myJSON[$i++]);
    $nodo->setoc_precio_total($myJSON[$i++]);
    $nodo->setoc_descuento_detalle($myJSON[$i++]);
    $nodo->setoc_tipo_descuento_detalle($myJSON[$i++]);
    $nodo->setoc_cotiza_cod($myJSON[$i++]);

    $nodo->insert();
}

function insertproveedor() {
    $nodo = new cls_ing_proveedor();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setpais_codigo($myJSON[$i++]);
    $nodo->setprov_rut($myJSON[$i++]);
    $nodo->setprov_rutdig($myJSON[$i++]);
    $nodo->setprov_nombre($myJSON[$i++]);
    $nodo->setprov_ciudad($myJSON[$i++]);
    $nodo->setprov_mail($myJSON[$i++]);
    $nodo->setprov_direccion($myJSON[$i++]);
    $nodo->setprov_fono($myJSON[$i++]);
    $nodo->setprov_contacto($myJSON[$i++]);
    $nodo->setprov_servicio($myJSON[$i++]);
    $nodo->setprov_condicion_pago($myJSON[$i++]);
    $nodo->setprov_ranking($myJSON[$i++]);
    $nodo->setprov_giro($myJSON[$i++]);

    $nodo->insert();
}

function insertcompras() {
    $nodo = new cls_ing_compras();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setPROV_ID($myJSON[$i++]);
    $nodo->setING_TIPODOC2($myJSON[$i++]);
    $nodo->setBOD_CODIGO($myJSON[$i++]);
    $nodo->setING_FECHADOC($myJSON[$i++]);
    $nodo->setING_MONEDA($myJSON[$i++]);
    $nodo->setING_TIPODECAMBIO($myJSON[$i++]);
    $nodo->setING_IVA($myJSON[$i++]);
    $nodo->setING_TIPOPAGO($myJSON[$i++]);
    $nodo->setING_ESTADO_PAGO($myJSON[$i++]);
    $nodo->setING_ESTADO_DOC($myJSON[$i++]);
    $nodo->setING_NETO($myJSON[$i++]);
    $nodo->setING_TOTAL($myJSON[$i++]);
    $nodo->setING_BODEGA_REC($myJSON[$i++]);
    $nodo->setING_GENINGRESO($myJSON[$i++]);

    $nodo->insert();
}

function insertingreso() {
    $nodo = new cls_ing_ingreso2();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setPROV_ID($myJSON[$i++]);
    $nodo->setING_NUMERODOC2($myJSON[$i++]);
    $nodo->setING_TIPODOC2($myJSON[$i++]);
    $nodo->setING_CORRELATIVO($myJSON[$i++]);
    $nodo->setING_FECHAVISACION($myJSON[$i++]);
    $nodo->setING_NUMEROVISACION($myJSON[$i++]);
    $nodo->setING_MONEDA($myJSON[$i++]);
    $nodo->setING_TIPODECAMBIO($myJSON[$i++]);
    $nodo->setING_CIFTOTAL($myJSON[$i++]);
    $nodo->setING_COSTOTOTAL($myJSON[$i++]);
    $nodo->setING_VIUTOTAL($myJSON[$i++]);
    $nodo->setING_ESTADO_PAGO($myJSON[$i++]);
    $nodo->setING_ESTADO_DOC($myJSON[$i++]);
    $nodo->setING_TIPODOCSVE($myJSON[$i++]);

    $nodo->insert();
}

function insertingresodet() {
    $nodo = new cls_ing_ingreso_det2();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setPROV_ID($myJSON[$i++]);
    $nodo->setING_NUMERODOC2($myJSON[$i++]);
    $nodo->setING_TIPODOC2($myJSON[$i++]);
    $nodo->setPROD_EQUIV_ID($myJSON[$i++]);
    $nodo->setBOD_CODIGO($myJSON[$i++]);
    $nodo->setPROD_CODIGO($myJSON[$i++]);
    $nodo->setING_BODEGA($myJSON[$i++]);
    $nodo->setING_ZETA($myJSON[$i++]);
    $nodo->setING_CANTIDAD1($myJSON[$i++]);
    $nodo->setING_CANTIDAD_BULTO($myJSON[$i++]);
    $nodo->setING_UNID_BULTO($myJSON[$i++]);
    $nodo->setING_VALOR1($myJSON[$i++]);
    $nodo->setING_VALOR2($myJSON[$i++]);
    $nodo->setING_ESTADO_INGRESO($myJSON[$i++]);
    $nodo->setING_PESO($myJSON[$i++]);
    $nodo->setING_UMED_PESO($myJSON[$i++]);
    $nodo->setING_VALOR_TOTAL($myJSON[$i++]);
    $nodo->setING_CODPROD_PROV($myJSON[$i++]);
    $nodo->setoc_impuesto($myJSON[$i++]);

    $nodo->insert();
}

function deletesolicitud() {
    $nodo = new cls_solicitud_compra();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setsolc_id($myJSON[0]);

    $nodo->delete();
}

function deletesolicituddet() {
    $nodo = new cls_det_solicitud_compra();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setdsolc_id($myJSON[0]);

    $nodo->delete();
}

function deleteoc() {
    $nodo = new cls_ing_oc();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setoc_id($myJSON[0]);

    $nodo->delete();
}

function deleteocdet() {
    $nodo = new cls_ing_oc_det();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setoc_det_id($myJSON[0]);

    $nodo->delete();
}

function deleteproveedor() {
    $nodo = new cls_ing_proveedor();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setprov_id($myJSON[0]);

    $nodo->delete();
}

function deletecompras() {
    $nodo = new cls_ing_compras();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setING_NUMERODOC2($myJSON[0]);

    $nodo->delete();
}

function deleteingreso() {
    $nodo = new cls_ing_ingreso2();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setING_NUMERODOC2($myJSON[0]);

    $nodo->delete();
}

function deleteingresodet() {
    $nodo = new cls_ing_ingreso_det2();

    $myJSON = json_decode($_POST['myJSON1'], false);

    $nodo->setING_NUMERODOC2($myJSON[0]);

    $nodo->delete();
}

function updatesolicitud() {
    $nodo = new cls_solicitud_compra();

    $opc = $_POST['opc'];

    switch ($opc) {
        case 0:
            $myJSON = json_decode($_POST['myJSON1'], false);
            $i = 0;

            $nodo->setsolc_id($myJSON[$i++]);
            $nodo->setsolc_fecha($myJSON[$i++]);
            $nodo->setsolc_destino($myJSON[$i++]);
            $nodo->setsolc_observacion($myJSON[$i++]);
            $nodo->setsolc_estado($myJSON[$i++]);
            $nodo->setsolc_tipo($myJSON[$i++]);
            $nodo->update($opc);
            break;

        case 1:
            $nodo->setsolc_id($_POST['solc_id']);
            $nodo->setsolc_estado($_POST['solc_estado']);
            $nodo->update($opc);
            break;
    }
}

function updatesolicituddet() {
    $nodo = new cls_det_solicitud_compra();

    $opc = $_POST['opc'];

    switch ($opc) {
        case 0:
            $myJSON = json_decode($_POST['myJSON1'], false);
            $i = 0;

            $nodo->setdsolc_id($myJSON[$i++]);
            $nodo->setdsolc_detalle($myJSON[$i++]);
            $nodo->setdsolc_cant($myJSON[$i++]);
            $nodo->setdsolc_umedida($myJSON[$i++]);
            $nodo->setdsolc_obs_utilidad($myJSON[$i++]);
            $nodo->setdsolc_porvender($myJSON[$i++]);
            $nodo->setdsolc_estado($myJSON[$i++]);
            $nodo->setdsolc_usgestor($myJSON[$i++]);
            $nodo->update($opc);
            break;

        case 1:
            $nodo->setdsolc_id($_POST['dsolc_id']);
            $nodo->setsolc_estado($_POST['dsolc_estado']);
            $nodo->update($opc);
            break;
    }
}

function updateoc() {
    $nodo = new cls_ing_oc();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setoc_id($myJSON[$i++]);
    $nodo->setoc_codigo($myJSON[$i++]);
    $nodo->setoc_tipo($myJSON[$i++]);
    $nodo->setoc_empresa($myJSON[$i++]);
    $nodo->setoc_estado($myJSON[$i++]);
    $nodo->setoc_fecha_entrega($myJSON[$i++]);
    $nodo->setoc_observacion($myJSON[$i++]);
    $nodo->setoc_neto($myJSON[$i++]);
    $nodo->setoc_iva($myJSON[$i++]);
    $nodo->setoc_total($myJSON[$i++]);
    $nodo->setoc_forma_pago($myJSON[$i++]);
    $nodo->setoc_condiciones($myJSON[$i++]);
    $nodo->setoc_rut_emision($myJSON[$i++]);
    $nodo->setoc_rut_aprobacion($myJSON[$i++]);
    $nodo->setoc_cheque_adjunto($myJSON[$i++]);
    $nodo->setoc_descuento($myJSON[$i++]);
    $nodo->setoc_tipo_descuento($myJSON[$i++]);
    $nodo->setoc_impuesto($myJSON[$i++]);
    $nodo->setoc_gasto_envio($myJSON[$i++]);
    $nodo->setoc_estado_pago($myJSON[$i++]);
    $nodo->update($opc);
}

function updateocdet() {
    $nodo = new cls_ing_oc_det();

    $myJSON = json_decode($_POST['myJSON1'], false);
    $i = 0;

    $nodo->setoc_det_id($myJSON[$i++]);
    $nodo->setoc_cod_producto($myJSON[$i++]);
    $nodo->setoc_cod_unidad($myJSON[$i++]);
    $nodo->setoc_cantidad($myJSON[$i++]);
    $nodo->setoc_precio_unitario($myJSON[$i++]);
    $nodo->setoc_precio_total($myJSON[$i++]);
    $nodo->setoc_descuento_detalle($myJSON[$i++]);
    $nodo->setoc_tipo_descuento_detalle($myJSON[$i++]);
    $nodo->setoc_cotiza_cod($myJSON[$i++]);
    $nodo->update($opc);
}



?>