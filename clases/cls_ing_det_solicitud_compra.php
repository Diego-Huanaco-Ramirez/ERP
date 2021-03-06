
<!-- begin of generated class -->
<?php
/*
 *
 * -------------------------------------------------------
 * CLASSNAME:        cls_det_solicitud_compra
 * GENERATION DATE:  13.04.2021
 * CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cls_det_solicitud_compra.php
 * FOR MYSQL TABLE:  ing_det_solicitud_compra
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

class cls_det_solicitud_compra { // class : begin
// **********************
// ATTRIBUTE DECLARATION
// **********************

    var $dsolc_id;   // KEY ATTR. WITH AUTOINCREMENT
    var $solc_id;   // (normal Attribute)
    var $dsolc_detalle;   // (normal Attribute)
    var $dsolc_cant;   // (normal Attribute)
    var $dsolc_umedida;   // (normal Attribute)
    var $dsolc_obs_utilidad;   // (normal Attribute)
    var $dsolc_porvender;   // (normal Attribute)
    var $dsolc_estado;   // (normal Attribute)
    var $dsolc_usuario;   // (normal Attribute)
    var $dsolc_usgestor;   // (normal Attribute)
    var $database; // Instance of class database
    var $arringdetsol;

// **********************
// CONSTRUCTOR METHOD
// **********************

    function cls_det_solicitud_compra() {

        $this->database = new Database();
    }

// **********************
// GETTER METHODS
// **********************


    function getdsolc_id() {
        return $this->dsolc_id;
    }

    function getsolc_id() {
        return $this->solc_id;
    }

    function getdsolc_detalle() {
        return $this->dsolc_detalle;
    }

    function getdsolc_cant() {
        return $this->dsolc_cant;
    }

    function getdsolc_umedida() {
        return $this->dsolc_umedida;
    }

    function getdsolc_obs_utilidad() {
        return $this->dsolc_obs_utilidad;
    }

    function getdsolc_porvender() {
        return $this->dsolc_porvender;
    }

    function getdsolc_estado() {
        return $this->dsolc_estado;
    }

    function getdsolc_usuario() {
        return $this->dsolc_usuario;
    }

    function getdsolc_usgestor() {
        return $this->dsolc_usgestor;
    }

// **********************
// SETTER METHODS
// **********************


    function setdsolc_id($val) {
        $this->dsolc_id = $val;
    }

    function setsolc_id($val) {
        $this->solc_id = $val;
    }

    function setdsolc_detalle($val) {
        $this->dsolc_detalle = $val;
    }

    function setdsolc_cant($val) {
        $this->dsolc_cant = $val;
    }

    function setdsolc_umedida($val) {
        $this->dsolc_umedida = $val;
    }

    function setdsolc_obs_utilidad($val) {
        $this->dsolc_obs_utilidad = $val;
    }

    function setdsolc_porvender($val) {
        $this->dsolc_porvender = $val;
    }

    function setdsolc_estado($val) {
        $this->dsolc_estado = $val;
    }

    function setdsolc_usuario($val) {
        $this->dsolc_usuario = $val;
    }

    function setdsolc_usgestor($val) {
        $this->dsolc_usgestor = $val;
    }

// **********************
// SELECT METHOD / LOAD
// **********************

    function select() {

        $dsolc_id = $this->dsolc_id;
        $solc_id = $this->solc_id;
        $dsolc_umedida = $this->dsolc_umedida;
        $dsolc_porvender = $this->dsolc_porvender;
        $dsolc_estado = $this->dsolc_estado;
        $dsolc_usuario = $this->dsolc_usuario;
        $dsolc_usgestor = $this->dsolc_usgestor;
        //$aux = 0;
//SELECT * FROM ing_det_solicitud_compra h INNER JOIN ing_solicitud_compra p ON h.solc_id=p.solc_id WHERE dsolc_id = '2'
        $sql = "SELECT * FROM ing_det_solicitud_compra h INNER JOIN ing_solicitud_compra p ON h.solc_id=p.solc_id WHERE p.solc_estado > '0' ";

        if ($dsolc_estado != null) {
            $sql = $sql . "AND h.dsolc_estado = '" . $dsolc_estado . "' ";
        } else {
            $sql = $sql . "AND h.dsolc_estado > '0' ";
        }
        if ($dsolc_id != null) {
            $sql = $sql . "AND dsolc_id = '" . $dsolc_id . "' ";
        }
        if ($solc_id != null) {
            $sql = $sql . "AND h.solc_id = '" . $solc_id . "' ";
        }
        if ($dsolc_umedida != null) {
            $sql = $sql . "AND h.dsolc_umedida = '" . $dsolc_umedida . "' ";
        }
        if ($dsolc_porvender != null) {
            $sql = $sql . "AND h.dsolc_porvender = '" . $dsolc_porvender . "' ";
        }

        if ($dsolc_usuario != null) {
            $sql = $sql . "AND h.dsolc_usuario = '" . $dsolc_usuario . "' ";
        }
         if ($dsolc_usgestor != null) {
            $sql = $sql . "AND h.dsolc_usgestor = '" . $dsolc_usgestor . "' ";
        }

        $result = $this->database->query($sql);
//        $result = $this->database->result;
        //$row = mysql_fetch_object($result);
        $i = 0;
        while ($datos = $this->database->fetch_array($result)) {
            $this->arringdetsol[$i]['dsolc_id'] = $datos['dsolc_id'];
            $this->arringdetsol[$i]['solc_id'] = $datos['solc_id'];
            $this->arringdetsol[$i]['dsolc_detalle'] = $datos['dsolc_detalle'];
            $this->arringdetsol[$i]['dsolc_cant'] = $datos['dsolc_cant'];
            $this->arringdetsol[$i]['dsolc_umedida'] = $datos['dsolc_umedida'];
            $this->arringdetsol[$i]['dsolc_obs_utilidad'] = $datos['dsolc_obs_utilidad'];
            $this->arringdetsol[$i]['dsolc_porvender'] = $datos['dsolc_porvender'];
            $this->arringdetsol[$i]['dsolc_estado'] = $datos['dsolc_estado'];
            $this->arringdetsol[$i]['dsolc_usuario'] = $datos['dsolc_usuario'];
            $this->arringdetsol[$i]['dsolc_usgestor'] = $datos['dsolc_usgestor'];
            $this->arringdetsol[$i]['solc_fecha'] = $datos['solc_fecha'];
            $this->arringdetsol[$i]['solc_destino'] = $datos['solc_destino'];
            $this->arringdetsol[$i]['solc_observacion'] = $datos['solc_observacion'];
            $this->arringdetsol[$i]['solc_usuario'] = $datos['solc_usuario'];
            $this->arringdetsol[$i]['solc_estado'] = $datos['solc_estado'];
            $this->arringdetsol[$i]['solc_tipo'] = $datos['solc_tipo'];
            
//            $this->arringdetsol[$i]['sql'] = $sql;
            $i++;
        }





//        $this->dsolc_id = $row->dsolc_id;
//
//        $this->solc_id = $row->solc_id;
//
//        $this->dsolc_detalle = $row->dsolc_detalle;
//
//        $this->dsolc_cant = $row->dsolc_cant;
//
//        $this->dsolc_umedida = $row->dsolc_umedida;
//
//        $this->dsolc_obs_utilidad = $row->dsolc_obs_utilidad;
//
//        $this->dsolc_porvender = $row->dsolc_porvender;
//
//        $this->dsolc_estado = $row->dsolc_estado;
//
//        $this->dsolc_usuario = $row->dsolc_usuario;
//
//        $this->dsolc_usgestor = $row->dsolc_usgestor;
    }

// **********************
// DELETE
// **********************

    function delete() {
        $dsolc_id = $this->dsolc_id;

        $sql = "DELETE FROM ing_det_solicitud_compra WHERE dsolc_id = '$dsolc_id';";
        $result = $this->database->query($sql);
    }

// **********************
// INSERT
// **********************

    function insert() {

        $sql = "INSERT INTO ing_det_solicitud_compra ( solc_id,dsolc_detalle,dsolc_cant,dsolc_umedida,dsolc_obs_utilidad,"
                . "dsolc_porvender,dsolc_estado,dsolc_usuario,dsolc_usgestor ) "
                . "VALUES ( '$this->solc_id','$this->dsolc_detalle','$this->dsolc_cant','$this->dsolc_umedida',"
                . "'$this->dsolc_obs_utilidad','$this->dsolc_porvender','$this->dsolc_estado','$this->dsolc_usuario','$this->dsolc_usgestor' )";
        $result = $this->database->query($sql);
        $this->dsolc_id = mysql_insert_id();
    }

// **********************
// UPDATE
// **********************

    function update($opc) {

        $dsolc_id = $this->dsolc_id;

        switch ($opc) {
            case 0:
                $sql = " UPDATE ing_det_solicitud_compra SET  dsolc_detalle = '$this->dsolc_detalle',"
                        . "dsolc_cant = '$this->dsolc_cant',dsolc_umedida = '$this->dsolc_umedida',dsolc_obs_utilidad = '$this->dsolc_obs_utilidad',"
                        . "dsolc_porvender = '$this->dsolc_porvender',dsolc_estado = '$this->dsolc_estado', dsolc_usgestor = '$this->dsolc_usgestor'"
                        . " WHERE dsolc_id = '$dsolc_id' ";
                break;
            case 1:
                $sql = " UPDATE ing_det_solicitud_compra SET  dsolc_estado = '$this->dsolc_estado' WHERE dsolc_id = '$dsolc_id' ";
                break;
        }
        $result = $this->database->query($sql);
    }

}

// class : end
?>
<!-- end of generated class -->
