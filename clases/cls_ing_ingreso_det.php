
<!-- begin of generated class -->
<?php
/*
 *
 * -------------------------------------------------------
 * CLASSNAME:        cl_ing_ingreso_det
 * GENERATION DATE:  02.05.2021
 * CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cl_ing_ingreso_det.php
 * FOR MYSQL TABLE:  ing_ingreso_det
 * FOR MYSQL DB:     erpprueba
 * -------------------------------------------------------
 * CODE GENERATED BY:
 * MY PHP-MYSQL-CLASS GENERATOR
 * from: >> www.voegeli.li >> (download for free!)
 * -------------------------------------------------------
 *
 */

include_once("../conexion/conexion.php");

// **********************
// CLASS DECLARATION
// **********************

class cl_ing_ingreso_det { // class : begin
// **********************
// ATTRIBUTE DECLARATION
// **********************

    var $ing_item;   // KEY ATTR. WITH AUTOINCREMENT
    var $prov_id;   // (normal Attribute)
    var $ing_numerodoc;   // (normal Attribute)
    var $ing_tipodoc;   // (normal Attribute)
    var $prod_equiv_id;   // (normal Attribute)
    var $bod_codigo;   // (normal Attribute)
    var $prod_codigo;   // (normal Attribute)
    var $ing_bodega;   // (normal Attribute)
    var $ing_zeta;   // (normal Attribute)
    var $ing_cantidad1;   // (normal Attribute)
    var $ing_cantidad_bulto;   // (normal Attribute)
    var $ing_unid_bulto;   // (normal Attribute)
    var $ing_valor1;   // (normal Attribute)
    var $ing_valor2;   // (normal Attribute)
    var $ing_estado_ingreso;   // (normal Attribute)
    var $ing_peso;   // (normal Attribute)
    var $ing_umed_peso;   // (normal Attribute)
    var $ing_valor_total;   // (normal Attribute)
    var $arringdet;
    var $database; // Instance of class database

// **********************
// CONSTRUCTOR METHOD
// **********************

    function cl_ing_ingreso_det() {

        $this->database = new Database();
    }

// **********************
// GETTER METHODS
// **********************


    function geting_item() {
        return $this->ing_item;
    }

    function getprov_id() {
        return $this->prov_id;
    }

    function geting_numerodoc() {
        return $this->ing_numerodoc;
    }

    function geting_tipodoc() {
        return $this->ing_tipodoc;
    }

    function getprod_equiv_id() {
        return $this->prod_equiv_id;
    }

    function getbod_codigo() {
        return $this->bod_codigo;
    }

    function getprod_codigo() {
        return $this->prod_codigo;
    }

    function geting_bodega() {
        return $this->ing_bodega;
    }

    function geting_zeta() {
        return $this->ing_zeta;
    }

    function geting_cantidad1() {
        return $this->ing_cantidad1;
    }

    function geting_cantidad_bulto() {
        return $this->ing_cantidad_bulto;
    }

    function geting_unid_bulto() {
        return $this->ing_unid_bulto;
    }

    function geting_valor1() {
        return $this->ing_valor1;
    }

    function geting_valor2() {
        return $this->ing_valor2;
    }

    function geting_estado_ingreso() {
        return $this->ing_estado_ingreso;
    }

    function geting_peso() {
        return $this->ing_peso;
    }

    function geting_umed_peso() {
        return $this->ing_umed_peso;
    }

    function geting_valor_total() {
        return $this->ing_valor_total;
    }

// **********************
// SETTER METHODS
// **********************


    function seting_item($val) {
        $this->ing_item = $val;
    }

    function setprov_id($val) {
        $this->prov_id = $val;
    }

    function seting_numerodoc($val) {
        $this->ing_numerodoc = $val;
    }

    function seting_tipodoc($val) {
        $this->ing_tipodoc = $val;
    }

    function setprod_equiv_id($val) {
        $this->prod_equiv_id = $val;
    }

    function setbod_codigo($val) {
        $this->bod_codigo = $val;
    }

    function setprod_codigo($val) {
        $this->prod_codigo = $val;
    }

    function seting_bodega($val) {
        $this->ing_bodega = $val;
    }

    function seting_zeta($val) {
        $this->ing_zeta = $val;
    }

    function seting_cantidad1($val) {
        $this->ing_cantidad1 = $val;
    }

    function seting_cantidad_bulto($val) {
        $this->ing_cantidad_bulto = $val;
    }

    function seting_unid_bulto($val) {
        $this->ing_unid_bulto = $val;
    }

    function seting_valor1($val) {
        $this->ing_valor1 = $val;
    }

    function seting_valor2($val) {
        $this->ing_valor2 = $val;
    }

    function seting_estado_ingreso($val) {
        $this->ing_estado_ingreso = $val;
    }

    function seting_peso($val) {
        $this->ing_peso = $val;
    }

    function seting_umed_peso($val) {
        $this->ing_umed_peso = $val;
    }

    function seting_valor_total($val) {
        $this->ing_valor_total = $val;
    }

// **********************
// SELECT METHOD / LOAD
// **********************

    function select() {
        $ing_item = $this->ing_item;
        $ing_estado_ingreso = $this->ing_estado_ingreso;
        $ing_item = $this->ing_item;
        $prov_id = $this->prov_id;
        $ing_numerodoc = $this->ing_numerodoc;
        $ing_tipodoc = $this->ing_tipodoc;
        $bod_codigo = $this->bod_codigo;

        $sql = "SELECT * FROM ing_ingreso_det h INNER JOIN ingreso_compra p ON p.ing_numerodoc = h.ing_numerodoc WHERE p.ing_estado_doc > '0' ";
        if ($ing_estado_ingreso != null) {
            $sql = $sql . "AND h.ing_estado_ingreso = '" . $ing_estado_ingreso . "' ";
        } else {
            $sql = $sql . "AND h.ing_estado_ingreso > '0' ";
        }
        if ($ing_item != null) {
            $sql = $sql . "AND h.ing_item = '" . $ing_item . "' ";
        }
        if ($prov_id != null) {
            $sql = $sql . "AND h.prov_id = '" . $prov_id . "' ";
        }
        if ($ing_numerodoc != null) {
            $sql = $sql . "AND h.ing_numerodoc = '" . $ing_numerodoc . "' ";
        }
        if ($ing_tipodoc != null) {
            $sql = $sql . "AND h.ing_tipodoc = '" . $ing_tipodoc . "' ";
        }
        if ($bod_codigo != null) {
            $sql = $sql . "AND h.bod_codigo = '" . $bod_codigo . "' ";
        }


        $result = $this->database->query($sql);

        $i = 0;
        while ($datos = $this->database->fetch_array($result)) {
            $this->arringdet[$i]['ing_item'] = $datos['ing_item'];
            $this->arringdet[$i]['prov_id'] = $datos['prov_id'];
            $this->arringdet[$i]['ing_numerodoc'] = $datos['ing_numerodoc'];
            $this->arringdet[$i]['ing_tipodoc'] = $datos['ing_tipodoc'];
            $this->arringdet[$i]['prod_equiv_id'] = $datos['prod_equiv_id'];
            $this->arringdet[$i]['bod_codigo'] = $datos['bod_codigo'];
            $this->arringdet[$i]['prod_codigo'] = $datos['prod_codigo'];
            $this->arringdet[$i]['ing_bodega'] = $datos['ing_bodega'];
            $this->arringdet[$i]['ing_zeta'] = $datos['ing_zeta'];
            $this->arringdet[$i]['ing_cantidad1'] = $datos['ing_cantidad1'];
            $this->arringdet[$i]['ing_cantidad_bulto'] = $datos['ing_cantidad_bulto'];
            $this->arringdet[$i]['ing_unid_bulto'] = $datos['ing_unid_bulto'];
            $this->arringdet[$i]['ing_valor1'] = $datos['ing_valor1'];
            $this->arringdet[$i]['ing_valor2'] = $datos['ing_valor2'];
            $this->arringdet[$i]['ing_estado_ingreso'] = $datos['ing_estado_ingreso'];
            $this->arringdet[$i]['ing_peso'] = $datos['ing_peso'];
            $this->arringdet[$i]['ing_umed_peso'] = $datos['ing_umed_peso'];
            $this->arringdet[$i]['ing_valor_total'] = $datos['ing_valor_total'];

            $this->arringdet[$i]['ing_correlativo'] = $datos['ing_correlativo'];
            $this->arringdet[$i]['ing_fechadoc'] = $datos['ing_fechadoc'];
            $this->arringdet[$i]['ing_fechavisacion'] = $datos['ing_fechavisacion'];
            $this->arringdet[$i]['ing_numerovisacion'] = $datos['ing_numerovisacion'];
            $this->arringdet[$i]['ing_moneda'] = $datos['ing_moneda'];
            $this->arringdet[$i]['ing_tipodecambio'] = $datos['ing_tipodecambio'];
            $this->arringdet[$i]['ing_iva'] = $datos['ing_iva'];
            $this->arringdet[$i]['ing_ciftotal'] = $datos['ing_ciftotal'];
            $this->arringdet[$i]['ing_costototal'] = $datos['ing_costototal'];
            $this->arringdet[$i]['ing_viutotal'] = $datos['ing_viutotal'];
            $this->arringdet[$i]['ing_estado_pago'] = $datos['ing_estado_pago'];
            $this->arringdet[$i]['ing_estado_doc'] = $datos['ing_estado_doc'];
            $this->arringdet[$i]['ing_neto'] = $datos['ing_neto'];
            $this->arringdet[$i]['ing_total'] = $datos['ing_total'];
            $this->arringdet[$i]['ing_tipodocsve'] = $datos['ing_tipodocsve'];
            $this->arringdet[$i]['ing_bodega_rec'] = $datos['ing_bodega_rec'];
        }
    }

// **********************
// DELETE
// **********************

    function delete() {
        $ing_item = $this->ing_item;
        $sql = "DELETE FROM ing_ingreso_det WHERE ing_item = $ing_item;";
        $result = $this->database->query($sql);
    }

// **********************
// INSERT
// **********************

    function insert() {

        $sql = "INSERT INTO ing_ingreso_det ( prov_id,ing_numerodoc,ing_tipodoc,prod_equiv_id,bod_codigo,prod_codigo,ing_bodega,ing_zeta,ing_cantidad1,ing_cantidad_bulto,ing_unid_bulto,ing_valor1,ing_valor2,ing_estado_ingreso,ing_peso,ing_umed_peso,ing_valor_total ) VALUES ( '$this->prov_id','$this->ing_numerodoc','$this->ing_tipodoc','$this->prod_equiv_id','$this->bod_codigo','$this->prod_codigo','$this->ing_bodega','$this->ing_zeta','$this->ing_cantidad1','$this->ing_cantidad_bulto','$this->ing_unid_bulto','$this->ing_valor1','$this->ing_valor2','$this->ing_estado_ingreso','$this->ing_peso','$this->ing_umed_peso','$this->ing_valor_total' )";
        $result = $this->database->query($sql);
        $this->ing_item = mysql_insert_id();
    }

// **********************
// UPDATE
// **********************

    function update($opc) {

        $ing_item = $this->ing_item;
        switch ($opc) {
            case 0:
                $sql = " UPDATE ing_ingreso_det SET  prov_id = '$this->prov_id',ing_numerodoc = '$this->ing_numerodoc',ing_tipodoc = '$this->ing_tipodoc',prod_equiv_id = '$this->prod_equiv_id',bod_codigo = '$this->bod_codigo',prod_codigo = '$this->prod_codigo',ing_bodega = '$this->ing_bodega',ing_zeta = '$this->ing_zeta',ing_cantidad1 = '$this->ing_cantidad1',ing_cantidad_bulto = '$this->ing_cantidad_bulto',ing_unid_bulto = '$this->ing_unid_bulto',ing_valor1 = '$this->ing_valor1',ing_valor2 = '$this->ing_valor2',ing_estado_ingreso = '$this->ing_estado_ingreso',ing_peso = '$this->ing_peso',ing_umed_peso = '$this->ing_umed_peso',ing_valor_total = '$this->ing_valor_total' WHERE ing_item = $ing_item ";
                break;
            case 0:
                $sql = " UPDATE ing_ingreso_det SET  ing_estado_ingreso = '$this->ing_estado_ingreso' WHERE ing_item = $ing_item ";
                break;
        }
        $result = $this->database->query($sql);
    }

}

// class : end
?>
<!-- end of generated class -->
