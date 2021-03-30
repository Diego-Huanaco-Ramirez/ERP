<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        cls_valorizado
* GENERATION DATE:  16.02.2020
* CLASS FILE:       C:\xampp\htdocs\generator/generated_classes/class.cls_valorizado.php
* FOR MYSQL TABLE:  valorizado
* FOR MYSQL DB:     erp
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

class cls_valorizado
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $val_id;   // KEY ATTR. WITH AUTOINCREMENT

var $prod_codigo;   // (normal Attribute)
var $selem_id;   // (normal Attribute)
var $val_tipo_dimension;   // (normal Attribute)
var $val_estado;   // (normal Attribute)
var $val_precio;   // (normal Attribute)
var $arrserv;
var $total_serv;

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function cls_valorizado()
{

$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getprod_codigo()
{
return $this->prod_codigo;
}

function getselem_id()
{
return $this->selem_id;
}

function getval_id()
{
return $this->val_id;
}

function getval_tipo_dimension()
{
return $this->val_tipo_dimension;
}

function getval_estado()
{
return $this->val_estado;
}

function getval_precio()
{
return $this->val_precio;
}

// **********************
// SETTER METHODS
// **********************


function setprod_codigo($val)
{
$this->prod_codigo =  $val;
}

function setselem_id($val)
{
$this->selem_id =  $val;
}

function setval_id($val)
{
$this->val_id =  $val;
}

function setval_tipo_dimension($val)
{
$this->val_tipo_dimension =  $val;
}

function setval_estado($val)
{
$this->val_estado =  $val;
}

function setval_precio($val)
{
$this->val_precio =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************
function selectotal()
{
$prod_codigo= $this->getprod_codigo();
$sql =  "SELECT COUNT(*) as total_serv FROM valorizado WHERE prod_codigo = '$prod_codigo';";
$result = $this->database->query($sql);
 $i=0;
    while($datos = $this->database->fetch_array($result)){
$this->total_serv = $datos['total_serv']; 
 

       $i++;
    }
}
function selectdata()
{
 $prod_codigo= $this->getprod_codigo();
  $prod_servicio= $this->getprod_servicio();
$sql =  "SELECT * FROM  valorizado WHERE prod_codigo = '$prod_codigo' and prod_servicio = '$prod_servicio'";
$result = $this->database->query($sql);
 $i=0;
    while($datos = $this->database->fetch_array($result)){
$this->arrserv[$i]['val_id'] = $datos['val_id']; 
$this->arrserv[$i]['prod_codigo'] = $datos['prod_codigo']; 
$this->arrserv[$i]['selem_id'] = $datos['selem_id']; 
$this->arrserv[$i]['val_tipo_dimension'] = $datos['val_tipo_dimension']; 
$this->arrserv[$i]['val_estado'] = $datos['val_estado']; 
$this->arrserv[$i]['val_precio'] = $datos['val_precio']; 
       $i++;
    }
}

function select($id)
{

$sql =  "SELECT * FROM valorizado WHERE val_id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysql_fetch_object($result);


$this->prod_codigo = $row->prod_codigo;

$this->selem_id = $row->selem_id;

$this->val_id = $row->val_id;

$this->val_tipo_dimension = $row->val_tipo_dimension;

$this->val_estado = $row->val_estado;

$this->val_precio = $row->val_precio;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM valorizado WHERE val_id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->val_id = ""; // clear key for autoincrement

$sql = "INSERT INTO valorizado ( prod_codigo,selem_id,val_tipo_dimension,val_estado,val_precio ) VALUES "
        . "( '$this->prod_codigo','$this->selem_id','$this->val_tipo_dimension','$this->val_estado','$this->val_precio' )";
$result = $this->database->query($sql);
$this->val_id = mysql_insert_id();

}
function updateprecio()
{
$selem_id = $this->getselem_id();
$val_tipo_dimension = $this->getval_tipo_dimension();
$val_estado = $this->getval_estado();


$sql = " UPDATE valorizado SET  val_precio = '$this->val_precio' "
        . "WHERE selem_id = $selem_id  and val_tipo_dimension = $val_tipo_dimension  and val_estado = $val_estado ";

$result = $this->database->query($sql);



}
// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE valorizado SET  prod_codigo = '$this->prod_codigo',selem_id = '$this->selem_id',val_tipo_dimension = '$this->val_tipo_dimension',val_estado = '$this->val_estado',val_precio = '$this->val_precio' WHERE val_id = $id ";

$result = $this->database->query($sql);



}


} ?>