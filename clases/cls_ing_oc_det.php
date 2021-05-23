
<!-- begin of generated class -->
<?php
/*
 *
 * -------------------------------------------------------
 * CLASSNAME:        cls_ing_oc_det
 * GENERATION DATE:  13.04.2021
 * CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cls_ing_oc_det.php
 * FOR MYSQL TABLE:  ing_oc_det
 * FOR MYSQL DB:     erpprueba
 * -------------------------------------------------------
 * CODE GENERATED BY:
 * MY PHP-MYSQL-CLASS GENERATOR
 * from: >> www.voegeli.li >> (download for free!)
 * -------------------------------------------------------
 *
 */

require_once("../conexion/conexion.php");

// **********************
// CLASS DECLARATION
// **********************

class cls_ing_oc_det { // class : begin
// **********************
// ATTRIBUTE DECLARATION
// **********************

    var $oc_det_id;   // KEY ATTR. WITH AUTOINCREMENT
    var $prov_id;   // (normal Attribute)
    var $oc_id;   // (normal Attribute)
    var $oc_cod_producto;   // (normal Attribute)
    var $oc_cod_unidad;   // (normal Attribute)
    var $oc_cantidad;   // (normal Attribute)
    var $oc_precio_unitario;   // (normal Attribute)
    var $oc_precio_total;   // (normal Attribute)
    var $oc_descuento_detalle;   // (normal Attribute)
    var $oc_tipo_descuento_detalle;   // (normal Attribute)
    var $oc_cotiza_cod;   // (normal Attribute)
    var $database; // Instance of class database
    var $arringdetoc;

// **********************
// CONSTRUCTOR METHOD
// **********************

    function cls_ing_oc_det() {

        $this->database = new Database();
    }

// **********************
// GETTER METHODS
// **********************


    function getoc_det_id() {
        return $this->oc_det_id;
    }

    function getprov_id() {
        return $this->prov_id;
    }

    function getoc_id() {
        return $this->oc_id;
    }

    function getoc_cod_producto() {
        return $this->oc_cod_producto;
    }

    function getoc_cod_unidad() {
        return $this->oc_cod_unidad;
    }

    function getoc_cantidad() {
        return $this->oc_cantidad;
    }

    function getoc_precio_unitario() {
        return $this->oc_precio_unitario;
    }

    function getoc_precio_total() {
        return $this->oc_precio_total;
    }

    function getoc_descuento_detalle() {
        return $this->oc_descuento_detalle;
    }

    function getoc_tipo_descuento_detalle() {
        return $this->oc_tipo_descuento_detalle;
    }

    function getoc_cotiza_cod() {
        return $this->oc_cotiza_cod;
    }

// **********************
// SETTER METHODS
// **********************


    function setoc_det_id($val) {
        $this->oc_det_id = $val;
    }

    function setprov_id($val) {
        $this->prov_id = $val;
    }

    function setoc_id($val) {
        $this->oc_id = $val;
    }

    function setoc_cod_producto($val) {
        $this->oc_cod_producto = $val;
    }

    function setoc_cod_unidad($val) {
        $this->oc_cod_unidad = $val;
    }

    function setoc_cantidad($val) {
        $this->oc_cantidad = $val;
    }

    function setoc_precio_unitario($val) {
        $this->oc_precio_unitario = $val;
    }

    function setoc_precio_total($val) {
        $this->oc_precio_total = $val;
    }

    function setoc_descuento_detalle($val) {
        $this->oc_descuento_detalle = $val;
    }

    function setoc_tipo_descuento_detalle($val) {
        $this->oc_tipo_descuento_detalle = $val;
    }

    function setoc_cotiza_cod($val) {
        $this->oc_cotiza_cod = $val;
    }

// **********************
// SELECT METHOD / LOAD
// **********************

    function select() {

        $oc_det_id = $this->oc_det_id;
        $prov_id = $this->prov_id;
        $oc_id = $this->oc_id;


        $sql = "SELECT * FROM ing_oc_det h INNER JOIN ing_oc p ON p.oc_id = h.oc_id WHERE p.oc_estado > 0 ";

        if ($oc_det_id != null) {
            $sql = $sql . "AND h.oc_det_id = '" . $oc_det_id . "' ";
        }
        if ($prov_id != null) {
            $sql = $sql . "AND h.prov_id = '" . $prov_id . "' ";
        }
        if ($oc_id != null) {
            $sql = $sql . "AND h.oc_id = '" . $oc_id . "' ";
        }

        $result = $this->database->query($sql);
//        $result = $this->database->result;
//        $row = mysql_fetch_object($result);

        $i = 0;
        while ($datos = $this->database->fetch_array($result)) {
            $this->arringdetoc[$i]['oc_det_id'] = $datos['oc_det_id'];
            $this->arringdetoc[$i]['prov_id'] = $datos['prov_id'];
            $this->arringdetoc[$i]['oc_id'] = $datos['oc_id'];
            $this->arringdetoc[$i]['oc_cod_producto'] = $datos['oc_cod_producto'];
            $this->arringdetoc[$i]['oc_cod_unidad'] = $datos['oc_cod_unidad'];
            $this->arringdetoc[$i]['oc_cantidad'] = $datos['oc_cantidad'];
            $this->arringdetoc[$i]['oc_precio_unitario'] = $datos['oc_precio_unitario'];
            $this->arringdetoc[$i]['oc_precio_total'] = $datos['oc_precio_total'];
            $this->arringdetoc[$i]['oc_descuento_detalle'] = $datos['oc_descuento_detalle'];
            $this->arringdetoc[$i]['oc_tipo_descuento_detalle'] = $datos['oc_tipo_descuento_detalle'];
            $this->arringdetoc[$i]['oc_cotiza_cod'] = $datos['oc_cotiza_cod'];
            $this->arringdetoc[$i]['oc_codigo'] = $datos['oc_codigo'];
            $this->arringdetoc[$i]['oc_tipo'] = $datos['oc_tipo'];
            $this->arringdetoc[$i]['oc_empresa'] = $datos['oc_empresa'];
            $this->arringdetoc[$i]['oc_estado'] = $datos['oc_estado'];
            $this->arringdetoc[$i]['oc_fecha_entrega'] = $datos['oc_fecha_entrega'];
            $this->arringdetoc[$i]['oc_solicitante'] = $datos['oc_solicitante'];
            $this->arringdetoc[$i]['oc_observacion'] = $datos['oc_observacion'];
            $this->arringdetoc[$i]['oc_neto'] = $datos['oc_neto'];
            $this->arringdetoc[$i]['oc_iva'] = $datos['oc_iva'];
            $this->arringdetoc[$i]['oc_total'] = $datos['oc_total'];
            $this->arringdetoc[$i]['oc_forma_pago'] = $datos['oc_forma_pago'];
            $this->arringdetoc[$i]['oc_condiciones'] = $datos['oc_condiciones'];
            $this->arringdetoc[$i]['oc_rut_emision'] = $datos['oc_rut_emision'];
            $this->arringdetoc[$i]['oc_rut_aprobacion'] = $datos['oc_rut_aprobacion'];
            $this->arringdetoc[$i]['oc_cheque_adjunto '] = $datos['oc_cheque_adjunto '];
            $this->arringdetoc[$i]['oc_descuento'] = $datos['oc_descuento'];
            $this->arringdetoc[$i]['oc_tipo_descuento'] = $datos['oc_tipo_descuento'];
            $this->arringdetoc[$i]['oc_impuesto'] = $datos['oc_impuesto'];
            $this->arringdetoc[$i]['oc_gasto_envio'] = $datos['oc_gasto_envio'];
            $this->arringdetoc[$i]['oc_estado_pago'] = $datos['oc_estado_pago'];
            $this->arringdetoc[$i]['sql'] = $sql;
            $i++;
        }

//        $this->oc_det_id = $row->oc_det_id;
//
//        $this->prov_id = $row->prov_id;
//
//        $this->oc_id = $row->oc_id;
//
//        $this->oc_cod_producto = $row->oc_cod_producto;
//
//        $this->oc_cod_unidad = $row->oc_cod_unidad;
//
//        $this->oc_cantidad = $row->oc_cantidad;
//
//        $this->oc_precio_unitario = $row->oc_precio_unitario;
//
//        $this->oc_precio_total = $row->oc_precio_total;
//
//        $this->oc_descuento_detalle = $row->oc_descuento_detalle;
//
//        $this->oc_tipo_descuento_detalle = $row->oc_tipo_descuento_detalle;
//
//        $this->oc_cotiza_cod = $row->oc_cotiza_cod;
    }

// **********************
// DELETE
// **********************

    function delete() {

        $oc_det_id = $this->oc_det_id;

        $sql = "DELETE FROM ing_oc_det WHERE oc_det_id = '$oc_det_id';";
        $result = $this->database->query($sql);
    }

// **********************
// INSERT
// **********************

    function insert() {

        $sql = "INSERT INTO ing_oc_det ( prov_id,oc_id,oc_cod_producto,oc_cod_unidad,oc_cantidad,oc_precio_unitario,"
                . "oc_precio_total,oc_descuento_detalle,oc_tipo_descuento_detalle,oc_cotiza_cod ) "
                . "VALUES ( '$this->prov_id','$this->oc_id','$this->oc_cod_producto','$this->oc_cod_unidad',"
                . "'$this->oc_cantidad','$this->oc_precio_unitario','$this->oc_precio_total','$this->oc_descuento_detalle',"
                . "'$this->oc_tipo_descuento_detalle','$this->oc_cotiza_cod' )";
        $result = $this->database->query($sql);
        $this->oc_det_id = mysql_insert_id();
    }

// **********************
// UPDATE
// **********************

    function update() {

        $oc_det_id = $this->oc_det_id;

        $sql = " UPDATE ing_oc_det SET  oc_cod_producto = '$this->oc_cod_producto',oc_cod_unidad = '$this->oc_cod_unidad',"
                . "oc_cantidad = '$this->oc_cantidad',oc_precio_unitario = '$this->oc_precio_unitario',"
                . "oc_precio_total = '$this->oc_precio_total',oc_descuento_detalle = '$this->oc_descuento_detalle',"
                . "oc_tipo_descuento_detalle = '$this->oc_tipo_descuento_detalle',oc_cotiza_cod = '$this->oc_cotiza_cod'"
                . " WHERE oc_det_id = '$oc_det_id' ";

        $result = $this->database->query($sql);
    }

}

// class : end
?>
<!-- end of generated class -->
