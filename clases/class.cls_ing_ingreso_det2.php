
<!-- begin of generated class -->
<?php
/*
 *
 * -------------------------------------------------------
 * CLASSNAME:        cls_ing_ingreso_det2
 * GENERATION DATE:  22.05.2021
 * CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cls_ing_ingreso_det2.php
 * FOR MYSQL TABLE:  ing_ingreso_det2
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

class cls_ing_ingreso_det2 { // class : begin
// **********************
// ATTRIBUTE DECLARATION
// **********************

    var $ING_NUMERODOC2;   // (normal Attribute)
    var $ING_ITEM;   // KEY ATTR. WITH AUTOINCREMENT
    var $PROV_ID;   // (normal Attribute)
    var $ING_TIPODOC2;   // (normal Attribute)
    var $PROD_EQUIV_ID;   // (normal Attribute)
    var $BOD_CODIGO;   // (normal Attribute)
    var $PROD_CODIGO;   // (normal Attribute)
    var $ING_BODEGA;   // (normal Attribute)
    var $ING_ZETA;   // (normal Attribute)
    var $ING_CANTIDAD1;   // (normal Attribute)
    var $ING_CANTIDAD_BULTO;   // (normal Attribute)
    var $ING_UNID_BULTO;   // (normal Attribute)
    var $ING_VALOR1;   // (normal Attribute)
    var $ING_VALOR2;   // (normal Attribute)
    var $ING_ESTADO_INGRESO;   // (normal Attribute)
    var $ING_PESO;   // (normal Attribute)
    var $ING_UMED_PESO;   // (normal Attribute)
    var $ING_VALOR_TOTAL;   // (normal Attribute)
    var $ING_CODPROD_PROV;   // (normal Attribute)
    var $arringdet;
    var $database; // Instance of class database

// **********************
// CONSTRUCTOR METHOD
// **********************

    function cls_ing_ingreso_det2() {

        $this->database = new Database();
    }

// **********************
// GETTER METHODS
// **********************


    function getING_ITEM() {
        return $this->ING_ITEM;
    }

    function getPROV_ID() {
        return $this->PROV_ID;
    }

    function getING_NUMERODOC2() {
        return $this->ING_NUMERODOC2;
    }

    function getING_TIPODOC2() {
        return $this->ING_TIPODOC2;
    }

    function getPROD_EQUIV_ID() {
        return $this->PROD_EQUIV_ID;
    }

    function getBOD_CODIGO() {
        return $this->BOD_CODIGO;
    }

    function getPROD_CODIGO() {
        return $this->PROD_CODIGO;
    }

    function getING_BODEGA() {
        return $this->ING_BODEGA;
    }

    function getING_ZETA() {
        return $this->ING_ZETA;
    }

    function getING_CANTIDAD1() {
        return $this->ING_CANTIDAD1;
    }

    function getING_CANTIDAD_BULTO() {
        return $this->ING_CANTIDAD_BULTO;
    }

    function getING_UNID_BULTO() {
        return $this->ING_UNID_BULTO;
    }

    function getING_VALOR1() {
        return $this->ING_VALOR1;
    }

    function getING_VALOR2() {
        return $this->ING_VALOR2;
    }

    function getING_ESTADO_INGRESO() {
        return $this->ING_ESTADO_INGRESO;
    }

    function getING_PESO() {
        return $this->ING_PESO;
    }

    function getING_UMED_PESO() {
        return $this->ING_UMED_PESO;
    }

    function getING_VALOR_TOTAL() {
        return $this->ING_VALOR_TOTAL;
    }

    function getING_CODPROD_PROV() {
        return $this->ING_CODPROD_PROV;
    }

// **********************
// SETTER METHODS
// **********************

    function setING_ITEM($val) {
        $this->ING_ITEM = $val;
    }

    function setPROV_ID($val) {
        $this->PROV_ID = $val;
    }

    function setING_NUMERODOC2($val) {
        $this->ING_NUMERODOC2 = $val;
    }

    function setING_TIPODOC2($val) {
        $this->ING_TIPODOC2 = $val;
    }

    function setPROD_EQUIV_ID($val) {
        $this->PROD_EQUIV_ID = $val;
    }

    function setBOD_CODIGO($val) {
        $this->BOD_CODIGO = $val;
    }

    function setPROD_CODIGO($val) {
        $this->PROD_CODIGO = $val;
    }

    function setING_BODEGA($val) {
        $this->ING_BODEGA = $val;
    }

    function setING_ZETA($val) {
        $this->ING_ZETA = $val;
    }

    function setING_CANTIDAD1($val) {
        $this->ING_CANTIDAD1 = $val;
    }

    function setING_CANTIDAD_BULTO($val) {
        $this->ING_CANTIDAD_BULTO = $val;
    }

    function setING_UNID_BULTO($val) {
        $this->ING_UNID_BULTO = $val;
    }

    function setING_VALOR1($val) {
        $this->ING_VALOR1 = $val;
    }

    function setING_VALOR2($val) {
        $this->ING_VALOR2 = $val;
    }

    function setING_ESTADO_INGRESO($val) {
        $this->ING_ESTADO_INGRESO = $val;
    }

    function setING_PESO($val) {
        $this->ING_PESO = $val;
    }

    function setING_UMED_PESO($val) {
        $this->ING_UMED_PESO = $val;
    }

    function setING_VALOR_TOTAL($val) {
        $this->ING_VALOR_TOTAL = $val;
    }

    function setING_CODPROD_PROV($val) {
        $this->ING_CODPROD_PROV = $val;
    }

// **********************
// SELECT METHOD / LOAD
// **********************

    function select($id) {

        $ing_item = $this->ING_ITEM;
        $ing_estado_ingreso = $this->ING_ESTADO_INGRESO;
        $prov_id = $this->PROV_ID;
        $ing_numerodoc = $this->ING_NUMERODOC2;
        $ing_tipodoc = $this->ING_TIPODOC2;

        $sql = "SELECT * FROM ing_ingreso_det2 h INNER JOIN ing_compras p ON p.ing_numerodoc = h.ing_numerodoc WHERE p.ing_estado_doc > '0' ";
        if ($ing_estado_ingreso != null) {
            $sql = $sql . "AND h.ING_ESTADO_INGRESO = '" . $ing_estado_ingreso . "' ";
        } else {
            $sql = $sql . "AND h.ING_ESTADO_INGRESO > '0' ";
        }
        if ($ing_item != null) {
            $sql = $sql . "AND h.ING_ITEM = '" . $ing_item . "' ";
        }
        if ($prov_id != null) {
            $sql = $sql . "AND h.PROV_ID = '" . $prov_id . "' ";
        }
        if ($ing_numerodoc != null) {
            $sql = $sql . "AND h.ING_NUMERODOC2 = '" . $ing_numerodoc . "' ";
        }
        if ($ing_tipodoc != null) {
            $sql = $sql . "AND h.ING_TIPODOC2 = '" . $ing_tipodoc . "' ";
        }

        $result = $this->database->query($sql);

        $i = 0;
        while ($datos = $this->database->fetch_array($result)) {
            $this->arringdet[$i]['ING_ITEM'] = $datos['ING_ITEM'];
            $this->arringdet[$i]['PROV_ID'] = $datos['PROV_ID'];
            $this->arringdet[$i]['ING_NUMERODOC2'] = $datos['ING_NUMERODOC2'];
            $this->arringdet[$i]['ING_TIPODOC2'] = $datos['ING_TIPODOC2'];
            $this->arringdet[$i]['PROD_EQUIV_ID'] = $datos['PROD_EQUIV_ID'];
            $this->arringdet[$i]['BOD_CODIGO'] = $datos['BOD_CODIGO'];
            $this->arringdet[$i]['PROD_CODIGO'] = $datos['PROD_CODIGO'];
            $this->arringdet[$i]['ING_BODEGA'] = $datos['ING_BODEGA'];
            $this->arringdet[$i]['ING_ZETA'] = $datos['ING_ZETA'];
            $this->arringdet[$i]['ING_CANTIDAD1'] = $datos['ING_CANTIDAD1'];
            $this->arringdet[$i]['ING_CANTIDAD_BULTO'] = $datos['ING_CANTIDAD_BULTO'];
            $this->arringdet[$i]['ING_UNID_BULTO'] = $datos['ING_UNID_BULTO'];
            $this->arringdet[$i]['ING_VALOR1'] = $datos['ING_VALOR1'];
            $this->arringdet[$i]['ING_VALOR2'] = $datos['ING_VALOR2'];
            $this->arringdet[$i]['ING_ESTADO_INGRESO'] = $datos['ING_ESTADO_INGRESO'];
            $this->arringdet[$i]['ING_PESO'] = $datos['ING_PESO'];
            $this->arringdet[$i]['ING_UMED_PESO'] = $datos['ING_UMED_PESO'];
            $this->arringdet[$i]['ING_VALOR_TOTAL'] = $datos['ING_VALOR_TOTAL'];
            $this->arringdet[$i]['ING_CODPROD_PROV'] = $datos['ING_CODPROD_PROV'];


            $this->arringdet[$i]['PROV_ID'] = $datos['PROV_ID'];
            $this->arringdet[$i]['ING_NUMERODOC2'] = $datos['ING_NUMERODOC2'];
            $this->arringdet[$i]['ING_TIPODOC2'] = $datos['ING_TIPODOC2'];
            $this->arringdet[$i]['ING_CORRELATIVO'] = $datos['ING_CORRELATIVO'];
            $this->arringdet[$i]['ING_FECHAVISACION'] = $datos['ING_FECHAVISACION'];
            $this->arringdet[$i]['ING_NUMEROVISACION'] = $datos['ING_NUMEROVISACION'];
            $this->arringdet[$i]['ING_MONEDA'] = $datos['ING_MONEDA'];
            $this->arringdet[$i]['ING_TIPODECAMBIO'] = $datos['ING_TIPODECAMBIO'];
            $this->arringdet[$i]['ING_CIFTOTAL'] = $datos['ING_CIFTOTAL'];
            $this->arringdet[$i]['ING_COSTOTOTAL'] = $datos['ING_COSTOTOTAL'];
            $this->arringdet[$i]['ING_VIUTOTAL'] = $datos['ING_VIUTOTAL'];
            $this->arringdet[$i]['ING_ESTADO_PAGO'] = $datos['ING_ESTADO_PAGO'];
            $this->arringdet[$i]['ING_ESTADO_DOC'] = $datos['ING_ESTADO_DOC'];
            $this->arringdet[$i]['ING_TIPODOCSVE'] = $datos['ING_TIPODOCSVE'];
            $i++;
        }
    }

// **********************
// DELETE
// **********************

    function delete() {
        $ing_item = $this->ING_ITEM;
        $sql = "DELETE FROM ing_ingreso_det2 WHERE ING_ITEM = $ing_item;";
        $result = $this->database->query($sql);
    }

// **********************
// INSERT
// **********************

    function insert() {


        $sql = "INSERT INTO ing_ingreso_det2 (ING_NUMERODOC2 ,PROV_ID,ING_TIPODOC2,PROD_EQUIV_ID,BOD_CODIGO,PROD_CODIGO,ING_BODEGA,ING_ZETA,ING_CANTIDAD1,ING_CANTIDAD_BULTO,ING_UNID_BULTO,ING_VALOR1,ING_VALOR2,ING_ESTADO_INGRESO,ING_PESO,ING_UMED_PESO,ING_VALOR_TOTAL,ING_CODPROD_PROV ) VALUES ( '$this->ING_NUMERODOC2','$this->PROV_ID','$this->ING_TIPODOC2','$this->PROD_EQUIV_ID','$this->BOD_CODIGO','$this->PROD_CODIGO','$this->ING_BODEGA','$this->ING_ZETA','$this->ING_CANTIDAD1','$this->ING_CANTIDAD_BULTO','$this->ING_UNID_BULTO','$this->ING_VALOR1','$this->ING_VALOR2','$this->ING_ESTADO_INGRESO','$this->ING_PESO','$this->ING_UMED_PESO','$this->ING_VALOR_TOTAL','$this->ING_CODPROD_PROV' )";
        $result = $this->database->query($sql);
        $this->ING_NUMERODOC2 = mysql_insert_id();
    }

// **********************
// UPDATE
// **********************

    function update($opc) {

        $ing_item = $this->ING_ITEM;

        switch ($opc) {
            case 0:
                $sql = " UPDATE ing_ingreso_det2 SET  ING_NUMERODOC2 = '$this->ING_NUMERODOC2',PROV_ID = '$this->PROV_ID',ING_TIPODOC2 = '$this->ING_TIPODOC2',"
                    . "PROD_EQUIV_ID = '$this->PROD_EQUIV_ID',BOD_CODIGO = '$this->BOD_CODIGO',PROD_CODIGO = '$this->PROD_CODIGO',"
                    . "ING_BODEGA = '$this->ING_BODEGA',ING_ZETA = '$this->ING_ZETA',ING_CANTIDAD1 = '$this->ING_CANTIDAD1',"
                    . "ING_CANTIDAD_BULTO = '$this->ING_CANTIDAD_BULTO',ING_UNID_BULTO = '$this->ING_UNID_BULTO',ING_VALOR1 = '$this->ING_VALOR1',"
                    . "ING_VALOR2 = '$this->ING_VALOR2',ING_ESTADO_INGRESO = '$this->ING_ESTADO_INGRESO',ING_PESO = '$this->ING_PESO',"
                    . "ING_UMED_PESO = '$this->ING_UMED_PESO',ING_VALOR_TOTAL = '$this->ING_VALOR_TOTAL',ING_CODPROD_PROV = '$this->ING_CODPROD_PROV'"
                    . " WHERE ING_ITEM = $ing_item ";
                break;
            case 1:
                $sql = " UPDATE ing_ingreso_det2 SET ING_ESTADO_INGRESO = '$this->ING_ESTADO_INGRESO' WHERE ING_ITEM = $ing_item ";
                break;
        }
        $result = $this->database->query($sql);
    }

}

// class : end
?>
<!-- end of generated class -->
