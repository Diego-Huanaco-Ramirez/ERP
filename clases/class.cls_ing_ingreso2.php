
<!-- begin of generated class -->
<?php
/*
 *
 * -------------------------------------------------------
 * CLASSNAME:        cls_ing_ingreso2
 * GENERATION DATE:  22.05.2021
 * CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cls_ing_ingreso2.php
 * FOR MYSQL TABLE:  ing_ingreso2
 * FOR MYSQL DB:     erpprueba
 * -------------------------------------------------------
 * CODE GENERATED BY:
 * MY PHP-MYSQL-CLASS GENERATOR
 * from: >> www.voegeli.li >> (download for free!)
 * -------------------------------------------------------
 *
 */

include_once("resources/class.database.php");

// **********************
// CLASS DECLARATION
// **********************

class cls_ing_ingreso2 { // class : begin
// **********************
// ATTRIBUTE DECLARATION
// **********************

    var $ING_NUMERODOC2;   // KEY ATTR. WITH AUTOINCREMENT
    var $PROV_ID;   // (normal Attribute)
    var $ING_TIPODOC2;   // (normal Attribute)
    var $ING_CORRELATIVO;   // (normal Attribute)
    var $ING_FECHAVISACION;   // (normal Attribute)
    var $ing_fechavisacion_fin;
    var $ING_NUMEROVISACION;   // (normal Attribute)
    var $ING_MONEDA;   // (normal Attribute)
    var $ING_TIPODECAMBIO;   // (normal Attribute)
    var $ING_CIFTOTAL;   // (normal Attribute)
    var $ING_COSTOTOTAL;   // (normal Attribute)
    var $ING_VIUTOTAL;   // (normal Attribute)
    var $ING_ESTADO_PAGO;   // (normal Attribute)
    var $ING_ESTADO_DOC;   // (normal Attribute)
    var $ING_TIPODOCSVE;   // (normal Attribute)
    var $arringreso;
    var $database; // Instance of class database

// **********************
// CONSTRUCTOR METHOD
// **********************

    function cls_ing_ingreso2() {

        $this->database = new Database();
    }

// **********************
// GETTER METHODS
// **********************


    function getPROV_ID() {
        return $this->PROV_ID;
    }

    function getING_NUMERODOC2() {
        return $this->ING_NUMERODOC2;
    }

    function getING_TIPODOC2() {
        return $this->ING_TIPODOC2;
    }

    function getING_CORRELATIVO() {
        return $this->ING_CORRELATIVO;
    }

    function getING_FECHAVISACION() {
        return $this->ING_FECHAVISACION;
    }

    function getING_NUMEROVISACION() {
        return $this->ING_NUMEROVISACION;
    }

    function getING_MONEDA() {
        return $this->ING_MONEDA;
    }

    function getING_TIPODECAMBIO() {
        return $this->ING_TIPODECAMBIO;
    }

    function getING_CIFTOTAL() {
        return $this->ING_CIFTOTAL;
    }

    function getING_COSTOTOTAL() {
        return $this->ING_COSTOTOTAL;
    }

    function getING_VIUTOTAL() {
        return $this->ING_VIUTOTAL;
    }

    function getING_ESTADO_PAGO() {
        return $this->ING_ESTADO_PAGO;
    }

    function getING_ESTADO_DOC() {
        return $this->ING_ESTADO_DOC;
    }

    function getING_TIPODOCSVE() {
        return $this->ING_TIPODOCSVE;
    }

// **********************
// SETTER METHODS
// **********************


    function setPROV_ID($val) {
        $this->PROV_ID = $val;
    }

    function setING_NUMERODOC2($val) {
        $this->ING_NUMERODOC2 = $val;
    }

    function setING_TIPODOC2($val) {
        $this->ING_TIPODOC2 = $val;
    }

    function setING_CORRELATIVO($val) {
        $this->ING_CORRELATIVO = $val;
    }

    function setING_FECHAVISACION($val) {
        $this->ING_FECHAVISACION = $val;
    }

    function setING_NUMEROVISACION($val) {
        $this->ING_NUMEROVISACION = $val;
    }

    function setING_MONEDA($val) {
        $this->ING_MONEDA = $val;
    }

    function setING_TIPODECAMBIO($val) {
        $this->ING_TIPODECAMBIO = $val;
    }

    function setING_CIFTOTAL($val) {
        $this->ING_CIFTOTAL = $val;
    }

    function setING_COSTOTOTAL($val) {
        $this->ING_COSTOTOTAL = $val;
    }

    function setING_VIUTOTAL($val) {
        $this->ING_VIUTOTAL = $val;
    }

    function setING_ESTADO_PAGO($val) {
        $this->ING_ESTADO_PAGO = $val;
    }

    function setING_ESTADO_DOC($val) {
        $this->ING_ESTADO_DOC = $val;
    }

    function setING_TIPODOCSVE($val) {
        $this->ING_TIPODOCSVE = $val;
    }

    function seting_fechavisacion_fin($val) {
        $this->ing_fechavisacion_fin = $val;
    }

// **********************
// SELECT METHOD / LOAD
// **********************

    function select($id) {
        $ing_numerodoc = $this->ING_NUMERODOC2;
        $ing_estado_doc = $this->ING_ESTADO_DOC;
        $ing_estado_pago = $this->ING_ESTADO_PAGO;
        $prov_id = $this->PROV_ID;
        $ing_tipodoc = $this->ING_TIPODOC2;
        $ing_correlativo = $this->ING_CORRELATIVO;
        $ing_fechavisacion = $this->ING_FECHAVISACION;
        $ing_fechavisacion_fin = $this->ing_fechavisacion_fin;

        $sql = "SELECT * FROM ing_ingreso2 WHERE ";

        if ($ing_estado_doc != null) {
            $sql = $sql . "ING_ESTADO_DOC = '" . $ing_estado_doc . "' ";
        } else {
            $sql = $sql . "ING_ESTADO_DOC > '0' ";
        }
        if ($ing_numerodoc != null) {
            $sql = $sql . "AND ING_NUMERODOC2 = '" . $ing_numerodoc . "' ";
        }
        if ($prov_id != null) {
            $sql = $sql . "AND PROV_ID = '" . $prov_id . "' ";
        }
        if ($ing_tipodoc != null) {
            $sql = $sql . "AND ING_TIPODOC2 = '" . $ing_tipodoc . "' ";
        }
        if ($ing_correlativo != null) {
            $sql = $sql . "AND ING_CORRELATIVO = '" . $ing_correlativo . "' ";
        }
        if ($ing_estado_pago != null) {
            $sql = $sql . "AND ING_ESTADO_PAGO = '" . $ing_estado_pago . "' ";
        }
        if ($ing_fechavisacion != null) {
            if ($ing_fechavisacion_fin != null) {
                $sql = $sql . "AND ING_FECHAVISACION BETWEEN '" . $ing_fechavisacion . "' AND '" . $ing_fechavisacion_fin . "' ";
            }
            $sql = $sql . "AND ING_FECHAVISACION = '" . $ing_fechavisacion . "' ";
        }

        $result = $this->database->query($sql);
        $i = 0;

        while ($datos = $this->database->fetch_array($result)) {
            $this->arringreso[$i]['PROV_ID'] = $datos['PROV_ID'];
            $this->arringreso[$i]['ING_NUMERODOC2'] = $datos['ING_NUMERODOC2'];
            $this->arringreso[$i]['ING_TIPODOC2'] = $datos['ING_TIPODOC2'];
            $this->arringreso[$i]['ING_CORRELATIVO'] = $datos['ING_CORRELATIVO'];
            $this->arringreso[$i]['ING_FECHAVISACION'] = $datos['ING_FECHAVISACION'];
            $this->arringreso[$i]['ING_NUMEROVISACION'] = $datos['ING_NUMEROVISACION'];
            $this->arringreso[$i]['ING_MONEDA'] = $datos['ING_MONEDA'];
            $this->arringreso[$i]['ING_TIPODECAMBIO'] = $datos['ING_TIPODECAMBIO'];
            $this->arringreso[$i]['ING_CIFTOTAL'] = $datos['ING_CIFTOTAL'];
            $this->arringreso[$i]['ING_COSTOTOTAL'] = $datos['ING_COSTOTOTAL'];
            $this->arringreso[$i]['ING_VIUTOTAL'] = $datos['ING_VIUTOTAL'];
            $this->arringreso[$i]['ING_ESTADO_PAGO'] = $datos['ING_ESTADO_PAGO'];
            $this->arringreso[$i]['ING_ESTADO_DOC'] = $datos['ING_ESTADO_DOC'];
            $this->arringreso[$i]['ING_TIPODOCSVE'] = $datos['ING_TIPODOCSVE'];
            $i++;
        }
    }

// **********************
// DELETE
// **********************

    function delete() {
        
        $ing_numerodoc = $this->ING_NUMERODOC2;

        $sql = "DELETE FROM ing_ingreso2 WHERE ING_NUMERODOC2 = $ing_numerodoc;";
        $result = $this->database->query($sql);
    }

// **********************
// INSERT
// **********************

    function insert() {


        $sql = "INSERT INTO ing_ingreso2 ( PROV_ID,ING_TIPODOC2,ING_CORRELATIVO,ING_FECHAVISACION,ING_NUMEROVISACION,ING_MONEDA,ING_TIPODECAMBIO,ING_CIFTOTAL,ING_COSTOTOTAL,ING_VIUTOTAL,ING_ESTADO_PAGO,ING_ESTADO_DOC,ING_TIPODOCSVE ) VALUES ( '$this->PROV_ID','$this->ING_TIPODOC2','$this->ING_CORRELATIVO','$this->ING_FECHAVISACION','$this->ING_NUMEROVISACION','$this->ING_MONEDA','$this->ING_TIPODECAMBIO','$this->ING_CIFTOTAL','$this->ING_COSTOTOTAL','$this->ING_VIUTOTAL','$this->ING_ESTADO_PAGO','$this->ING_ESTADO_DOC','$this->ING_TIPODOCSVE' )";
        $result = $this->database->query($sql);
        $this->ING_NUMERODOC2 = mysql_insert_id();
    }

// **********************
// UPDATE
// **********************

    function update($op) {

        $ing_numerodoc = $this->ING_NUMERODOC2;

        switch ($op) {
            case 0:
                $sql = " UPDATE ing_ingreso2 SET  PROV_ID = '$this->PROV_ID',ING_TIPODOC2 = '$this->ING_TIPODOC2',ING_CORRELATIVO = '$this->ING_CORRELATIVO',"
                        . "ING_FECHAVISACION = '$this->ING_FECHAVISACION',ING_NUMEROVISACION = '$this->ING_NUMEROVISACION',ING_MONEDA = '$this->ING_MONEDA',"
                        . "ING_TIPODECAMBIO = '$this->ING_TIPODECAMBIO',ING_CIFTOTAL = '$this->ING_CIFTOTAL',ING_COSTOTOTAL = '$this->ING_COSTOTOTAL',"
                        . "ING_VIUTOTAL = '$this->ING_VIUTOTAL',ING_ESTADO_PAGO = '$this->ING_ESTADO_PAGO',ING_ESTADO_DOC = '$this->ING_ESTADO_DOC',"
                        . "ING_TIPODOCSVE = '$this->ING_TIPODOCSVE' WHERE ING_NUMERODOC2 = $ing_numerodoc ";
                break;
            case 1:
                $sql = " UPDATE ing_ingreso2 SET ING_ESTADO_DOC = '$this->ING_ESTADO_DOC' WHERE ING_NUMERODOC2 = '$ing_numerodoc'";
                break;
            case 2:
                $sql = " UPDATE ing_ingreso2 SET ING_ESTADO_PAGO = '$this->ING_ESTADO_PAGO' WHERE ING_NUMERODOC2 = '$ing_numerodoc'";
                break;
        }

        $result = $this->database->query($sql);
    }

}

// class : end
?>
<!-- end of generated class -->