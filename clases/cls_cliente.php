<?php

require_once("../conexion/conexion.php");


class cliente {
    var $id_cliente;
    var $identificador;
    var $dverificador;
    var $tipoIdentificador;
    var $nombrecliente;
    var $apellidoPcliente;
    var $apellidoMcliente;
    var $fecha_nacimiento;
    var $fonocliente;
    var $fonocliente2;
    var $emailcliente;
    var $direccioncliente;
    var $region_cliente;
    var $ciudad_cliente;
    var $sexo;
    var $estadoCivil;
    var $observacion_cliente;
    var $observacion_rptcliente;
    var $estado_cliente;
    var $cod_aseguradora;
    var $arrclientes;
    var $arrobtcliente;
    var $id_asociado;
    var $id_agenda;
    var $profesion;
    var $nacionalidad;
      
     
     var $database; //  ebc5c72026c6baf3c1efc5631139fdab    ++ Instance of class database
   
       function cliente()
   {

  $this->database = new Database();

   }
   //  ebc5c72026c6baf3c1efc5631139fdab     **********************
//  ebc5c72026c6baf3c1efc5631139fdab     GETTER METHODS
//  ebc5c72026c6baf3c1efc5631139fdab     **********************  
  
   
  
 /*
      function gettipo_identificador()
   {
    return $this->tipoIdentificador;
   }
      function getsexo()
   {
    return $this->sexo;
   }
      function getestado_civil()
   {
    return $this->estadoCivil;
   }
      function getestado_cliente()
   {
    return $this->estado_cliente;
   }
      function getcod_aseguradora()
   {
    return $this->cod_aseguradora;
   }
     function getid_agenda()
   {
    return $this->id_agenda;
   }
        function getid_asociado()
   {
            return $this->id_asociado;
   }*/
    //  ebc5c72026c6baf3c1efc5631139fdab     **********************
//  ebc5c72026c6baf3c1efc5631139fdab     SETTER METHODS
//  ebc5c72026c6baf3c1efc5631139fdab     ********************** 
  
  
//1eliminacliente()
//2getclientexrut/$identificador = $this->getidentificador()
//3listcomprasclientexid/*
//4getclientexagenda// $id = $this->getid_agenda()
//5munactualizaasociado/*
//6actualizaestado(estado, id_cliente)
//7getdatocliente // obtiene datos cliente por su id
//8listarclientesearch($search, $opc)//buscar opc 1:nombre, 3: rut(sin digito verificador) y 2:apellido
//9listarcliente //listar todo los clientes con estado > 0 (estado vigente 1 y nulo 0)
//10insertar
//11munactualizacliente
   
// **********************
// GETTER METHODS
// **********************
  function getid_agenda()
   {
    return $this->id_agenda;
   }

function getid_cliente()
{
return $this->id_cliente;
}

function getidentificador()
{
return $this->identificador;
}
function getdverificador()
   {
    return $this->dverificador;
   }


function getnombre_cliente()
{
return $this->nombre_cliente;
}

function getapellido_pcliente()
{
return $this->apellido_pcliente;
}

function getapellido_mcliente()
{
return $this->apellido_mcliente;
}

function getfecha_nacimiento()
{
return $this->fecha_nacimiento;
}

function getfono_cliente()
{
return $this->fono_cliente;
}

function getfonocliente2()
{
return $this->fonocliente2;
}

function getnacionalidad()
{
return $this->nacionalidad;
}
function getprofesion()
{
return $this->profesion;
}

function getobservacion_cliente()
{
return $this->observacion_cliente;
}
function getemailcliente()
{
return $this->emailcliente;
}
function getdireccioncliente()
{
return $this->direccioncliente;
}
function getregion_cliente()
{
return $this->region_cliente;
}
function getciudad_cliente()
{
return $this->ciudad_cliente;
}


// **********************
// SETTER METHODS
// **********************

     function setid_agenda($val)
   {
      $this->id_agenda = $val;
   }
     function setid_cliente($val)
   {
      $this->id_cliente = $val;
   }
      
    function setidentificador($val)
   {
      $this->identificador = $val;
   }
    function setdverificador($val)
   {
      $this->dverificador = $val;
   }


function setnombre_cliente($val)
{
$this->nombre_cliente =  $val;
}

function setapellido_pcliente($val)
{
$this->apellido_pcliente =  $val;
}

function setapellido_mcliente($val)
{
$this->apellido_mcliente =  $val;
}

function setfecha_nacimiento($val)
{
$this->fecha_nacimiento =  $val;
}

function setfono_cliente($val)
{
$this->fono_cliente =  $val;
}

function setfonocliente2($val)
{
$this->fonocliente2 =  $val;
}

function setnacionalidad($val)
{
$this->nacionalidad =  $val;
}

function setprofesion($val)
{
$this->profesion =  $val;
}

function setobservacion_cliente($val)
{
$this->observacion_cliente =  $val;
}
function setestado_cliente($val)
{
 $this->estado_cliente=  $val;
}


function setemailcliente($val)
{
$this->emailcliente =  $val;
}
function setdireccioncliente($val)
{
$this->direccioncliente =  $val;
}
function setregion_cliente($val)
{
$this->region_cliente =  $val;
}
function setciudad_cliente($val)
{
$this->ciudad_cliente =  $val;
}


// **********************
// SELECT METHOD / LOAD
// **********************

   


   function eliminacliente(){
        $id_cliente = $this->getid_cliente();

        $sql = "delete from cliente where id_cliente = '$id_cliente' and estado_cliente > 0  ";
        $result = $this->database->query($sql);
   }
   
   //version 1.1
     function getclientexrut(){
       $identificador = $this->getidentificador();
       $dverificador = $this->getdverificador();
       $sql = "SELECT * FROM  cliente where identificador = '$identificador' and estado_cliente > 0  "
       . "and dverificador= '$dverificador' and  estado_cliente > 0; ";
       $result = $this->database->query($sql);
       $i=0;
  
        while($datos = $this->database->fetch_array($result)){
            
            $this->arrobtcliente[$i]['id_cliente'] = $datos['id_cliente'];                      
           $this->arrobtcliente[$i]['identificador'] = $datos['identificador'];      
            $this->arrobtcliente[$i]['dverificador'] = $datos['dverificador'];      
            $this->arrobtcliente[$i]['nombre_cliente'] = $datos['nombre_cliente'];            
            $this->arrobtcliente[$i]['apellido_pcliente'] = $datos['apellido_pcliente'];   
            $this->arrobtcliente[$i]['apellido_mcliente'] = $datos['apellido_mcliente'];    
            $this->arrobtcliente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
            $this->arrobtcliente[$i]['fono_cliente'] = $datos['fono_cliente'];     
    
            $this->arrobtcliente[$i]['fonocliente2'] = $datos['fonocliente2']; 
            $this->arrobtcliente[$i]['nacionalidad'] = $datos['nacionalidad']; 
            $this->arrobtcliente[$i]['profesion'] = $datos['profesion']; 
        $this->arrobtcliente[$i]['email_cliente'] = $datos['email_cliente'];       
        $this->arrobtcliente[$i]['direccion_cliente'] = $datos['direccion_cliente'];   
        $this->arrobtcliente[$i]['ciudad_cliente'] = $datos['ciudad_cliente'];  
        $this->arrobtcliente[$i]['region_cliente'] = $datos['region_cliente'];  
  //  $this->arrobtcliente[$i]['sexo'] = $datos['sexo'];             
 //   $this->arrobtcliente[$i]['estado_civil'] = $datos['estado_civil'];  
            $this->arrobtcliente[$i]['observacion_cliente'] = mysql_real_escape_string($datos['observacion_cliente']);
            $this->arrobtcliente[$i]['estado_cliente'] = $datos['estado_cliente']; 

 
              $i++;
          }   
   }

   function getclientexagenda(){
       $id = $this->getid_agenda();
       $sql = "SELECT * FROM  cliente p inner join agenda a on p.id_cliente = a.id_cliente where a.id_agenda = '$id' and estado_cliente > 0  ; ";
       $result = $this->database->query($sql);
       $i=0;
  
        while($datos = $this->database->fetch_array($result)){
            $this->arrobtcliente[$i]['id_cliente'] = $datos['id_cliente'];                      
           $this->arrobtcliente[$i]['identificador'] = $datos['identificador'];      
       //     $this->arrobtcliente[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
            $this->arrobtcliente[$i]['nombre_cliente'] = $datos['nombre_cliente'];            
            $this->arrobtcliente[$i]['apellido_pcliente'] = $datos['apellido_pcliente'];   
            $this->arrobtcliente[$i]['apellido_mcliente'] = $datos['apellido_mcliente'];    
            $this->arrobtcliente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
            $this->arrobtcliente[$i]['fono_cliente'] = $datos['fono_cliente'];   
             $this->arrobtcliente[$i]['observacion_cliente'] =mysql_real_escape_string($datos['observacion_cliente']);
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtcliente[$i]['email_cliente'] = $datos['email_cliente'];       
      //      $this->arrobtcliente[$i]['direccion_cliente'] = $datos['direccion_cliente']; 
 
        
 
              $i++;
          }   
   }
/*  
   function getdatoclientereceta($id_atencion){
  $my = new MySQL();
  $sql = $my->query("SELECT p.id_cliente, p.nombre_cliente, p.apellido_pcliente,"
  . "p.identificador, p.fecha_nacimiento, p.direccion_cliente FROM cliente p "
  . "INNER JOIN agenda a ON a.id_cliente = p.id_cliente INNER JOIN atencion at"
  . " ON at.id_agenda = a.id_agenda WHERE at.id_atencion = '$id_atencion' and  p.estado_cliente > 0 ") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
  $this->arrobtcliente[$i]['id_cliente'] = $datos['id_cliente'];                      
    $this->arrobtcliente[$i]['identificador'] = $datos['identificador'];      
    $this->arrobtcliente[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrobtcliente[$i]['nombre_cliente'] = $datos['nombre_cliente'];            
    $this->arrobtcliente[$i]['apellido_pcliente'] = $datos['apellido_pcliente'];   
    $this->arrobtcliente[$i]['apellido_mcliente'] = $datos['apellido_mcliente'];    
    $this->arrobtcliente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrobtcliente[$i]['fono_cliente'] = $datos['fono_cliente'];         
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtcliente[$i]['email_cliente'] = $datos['email_cliente'];       
    $this->arrobtcliente[$i]['direccion_cliente'] = $datos['direccion_cliente'];   
    
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtcliente[$i]['sexo'] = $datos['sexo'];             
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtcliente[$i]['estado_civil'] = $datos['estado_civil'];  
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtcliente[$i]['observacion_cliente'] = $datos['observacion_cliente'];  
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtcliente[$i]['estado_cliente'] = $datos['estado_cliente'];  
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtcliente[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
        
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtcliente[$i]['fonocliente2'] = $datos['fonocliente2']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtcliente[$i]['region_cliente'] = $datos['region_cliente']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtcliente[$i]['ciudad_cliente'] = $datos['ciudad_cliente']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtcliente[$i]['observacion_rptcliente'] = $datos['observacion_rptcliente']; 
    $i++;
    }
    
}   */
  function munactualizaasociado($id_asociado, $id_cliente){
        $my = new MySQL();
        $sql = $my->query("update cliente set id_asociado='$id_asociado' where id_cliente = '$id_cliente'") ; 
        return 11;
  }  

  function actualizaestado($estado_cliente, $id_cliente){
        $my = new MySQL();
        $sql = $my->query("update cliente set estado_cliente='$estado_cliente' where id_cliente = '$id_cliente'") ; 
  }
  
  function updateestado(){
        $estado_cliente= $this->getestado_cliente();
        $id_cliente= $this->getid_cliente();
        $my = new MySQL();
        $sql = $my->query("update cliente set estado_cliente='$estado_cliente' where id_cliente = '$id_cliente'") ; 
  }
            
  function getdatocliente(){
  $id_cliente= $this->getid_cliente();
  $my = new MySQL();
  //  ebc5c72026c6baf3c1efc5631139fdab    $id = $this->getid_cliente();
  
  $sql = $my->query("select * from cliente p  where p.id_cliente = '$id_cliente' and estado_cliente > 0 ") ; 
  //$sql = $my->query("select * from cliente p left join  comuna c on p.ciudad_cliente = c.id_ciudad  where p.id_cliente = '$id_cliente'") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrobtcliente[$i]['id_cliente'] = $datos['id_cliente'];                      
    $this->arrobtcliente[$i]['identificador'] = $datos['identificador'];      
    $this->arrobtcliente[$i]['dverificador'] = $datos['dverificador'];      
    $this->arrobtcliente[$i]['nombre_cliente'] = $datos['nombre_cliente'];            
    $this->arrobtcliente[$i]['apellido_pcliente'] = $datos['apellido_pcliente'];   
    $this->arrobtcliente[$i]['apellido_mcliente'] = $datos['apellido_mcliente'];    
    $this->arrobtcliente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrobtcliente[$i]['fono_cliente'] = $datos['fono_cliente']; 
    $this->arrobtcliente[$i]['fonocliente2'] = $datos['fonocliente2']; 
    $this->arrobtcliente[$i]['nacionalidad'] = $datos['nacionalidad']; 
    $this->arrobtcliente[$i]['profesion'] = $datos['profesion']; 
  $this->arrobtcliente[$i]['email_cliente'] = $datos['email_cliente'];       
  $this->arrobtcliente[$i]['direccion_cliente'] = $datos['direccion_cliente'];   
  $this->arrobtcliente[$i]['ciudad_cliente'] = $datos['ciudad_cliente'];  
  $this->arrobtcliente[$i]['region_cliente'] = $datos['region_cliente'];  
  //  $this->arrobtcliente[$i]['sexo'] = $datos['sexo'];             
 //   $this->arrobtcliente[$i]['estado_civil'] = $datos['estado_civil'];  
   $this->arrobtcliente[$i]['observacion_cliente'] = mysql_real_escape_string($datos['observacion_cliente']);
    $this->arrobtcliente[$i]['estado_cliente'] = $datos['estado_cliente'];  
 //   $this->arrobtcliente[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
    
  //  $this->arrobtcliente[$i]['fono_cliente'] = $datos['fono_cliente'];      
   
 //   $this->arrobtcliente[$i]['region_cliente'] = $datos['region_cliente']; 
   // $this->arrobtcliente[$i]['ciudad_cliente'] = $datos['ciudad_cliente']; 
   // $this->arrobtcliente[$i]['observacion_rptcliente'] = $datos['observacion_rptcliente']; 
  //  $this->arrobtcliente[$i]['id_asociado'] = $datos['id_asociado']; 
  //  $this->arrobtcliente[$i]['nombre_ciudad'] = $datos['nombre_ciudad']; 
    $i++;
    }
    
}   
  function listarclientesearch($search, $opc){
  $apellido_pcliente = $this->getapellido_pcliente();
  $my = new MySQL();$search = $search.'%';
  if($opc == 1)
       $sql = $my->query("select * from cliente where  nombre_cliente LIKE '$search' and estado_cliente > 0  order by nombre_cliente, apellido_pcliente,apellido_mcliente asc") ; 
  else  if($opc == 3)
       $sql = $my->query("select * from cliente where  identificador LIKE '$search' and estado_cliente > 0    order by apellido_pcliente, nombre_cliente, apellido_mcliente asc") ; 
  else  if($opc == 2)   
       $sql = $my->query("select * from cliente where  apellido_pcliente LIKE '$search' and estado_cliente > 0   order by apellido_pcliente, nombre_cliente, apellido_mcliente asc") ; 
  else  if($opc == 4)   
       $sql = $my->query("select * from cliente where apellido_pcliente = '$apellido_pcliente' and  apellido_mcliente LIKE '$search' and estado_cliente > 0   order by apellido_pcliente, nombre_cliente, apellido_mcliente asc") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrclientes[$i]['id_cliente'] = $datos['id_cliente'];                      
    $this->arrclientes[$i]['identificador'] = $datos['identificador'];   
      $this->arrclientes[$i]['dverificador'] = $datos['dverificador']; 
    $this->arrclientes[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrclientes[$i]['nombre_cliente'] = $datos['nombre_cliente'];            
    $this->arrclientes[$i]['apellido_pcliente'] = $datos['apellido_pcliente'];   
    $this->arrclientes[$i]['apellido_mcliente'] = $datos['apellido_mcliente'];    
    $this->arrclientes[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrclientes[$i]['fono_cliente'] = $datos['fono_cliente'];         
    $this->arrclientes[$i]['email_cliente'] = $datos['email_cliente'];       
    $this->arrclientes[$i]['direccion_cliente'] = $datos['direccion_cliente'];   
    $this->arrclientes[$i]['sexo'] = $datos['sexo'];             
    $this->arrclientes[$i]['estado_civil'] = $datos['estado_civil'];  
    $this->arrclientes[$i]['observacion_cliente'] = mysql_real_escape_string($datos['observacion_cliente']);
    $this->arrclientes[$i]['estado_cliente'] = $datos['estado_cliente'];  
    $this->arrclientes[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
        
    $this->arrclientes[$i]['fonocliente2'] = $datos['fonocliente2']; 
    $this->arrclientes[$i]['region_cliente'] = $datos['region_cliente']; 
    $this->arrclientes[$i]['ciudad_cliente'] = $datos['ciudad_cliente']; 
    $this->arrclientes[$i]['observacion_rptcliente'] = $datos['observacion_rptcliente']; 
    $this->arrclientes[$i]['id_asociado'] = $datos['id_asociado']; 
    
    $this->arrclientes[$i]['nacionalidad'] = $datos['nacionalidad']; 
    $this->arrclientes[$i]['profesion'] = $datos['profesion']; 
    
    $i++;
    }
    
}   
 function listarcliente(){
  $my = new MySQL();
  $sql = $my->query("select * from cliente where estado_cliente > 0 order by nombre_cliente asc") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrclientes[$i]['id_cliente'] = $datos['id_cliente'];                      
    $this->arrclientes[$i]['identificador'] = $datos['identificador'];      
    $this->arrclientes[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrclientes[$i]['nombre_cliente'] = $datos['nombre_cliente'];            
    $this->arrclientes[$i]['apellido_pcliente'] = $datos['apellido_pcliente'];   
    $this->arrclientes[$i]['apellido_mcliente'] = $datos['apellido_mcliente'];    
    $this->arrclientes[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrclientes[$i]['fono_cliente'] = $datos['fono_cliente'];         
    $this->arrclientes[$i]['email_cliente'] = $datos['email_cliente'];       
    $this->arrclientes[$i]['direccion_cliente'] = $datos['direccion_cliente'];   
    $this->arrclientes[$i]['sexo'] = $datos['sexo'];             
    $this->arrclientes[$i]['estado_civil'] = $datos['estado_civil'];  
    $this->arrclientes[$i]['observacion_cliente'] = mysql_real_escape_string($datos['observacion_cliente']);
    $this->arrclientes[$i]['estado_cliente'] = $datos['estado_cliente'];  
    $this->arrclientes[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
    
    $this->arrclientes[$i]['fonocliente2'] = $datos['fonocliente2']; 
   $this->arrobtcliente[$i]['email_cliente'] = $datos['email_cliente'];       
        $this->arrobtcliente[$i]['direccion_cliente'] = $datos['direccion_cliente'];   
        $this->arrobtcliente[$i]['ciudad_cliente'] = $datos['ciudad_cliente'];  
        $this->arrobtcliente[$i]['region_cliente'] = $datos['region_cliente'];   
    $this->arrclientes[$i]['observacion_rptcliente'] = $datos['observacion_rptcliente']; 
    $i++;
    }
    
}
            
    
    
function insertar($rut, $verificador ,   $nombre  ,  $paterno  ,
 $materno  ,   $fecha_nacimiento  ,  $fijo  ,   $movil ,   $nacionalidad   ,
 $profesion    ){
     //$result = $this->database->query("INSERT INTO   cliente  (   "
   // . "rut, verificador, nombre, paterno, materno,  fecha_nacimiento, fijo,  movil, nacionalidad,   profesion  ) "
  //  $my = new MySQL();
   $result = $this->database->query("INSERT INTO   cliente( "
 . "identificador, dverificador,nombre_cliente, apellido_pcliente, apellido_mcliente, "
 . "fecha_nacimiento  ,fono_cliente  , fonocliente2,nacionalidad, profesion  ) "
    . "VALUES "
    . "('$rut' ,'$verificador', '$nombre',  '$paterno', '$materno', '$fecha_nacimiento', '$fijo',"
    . " '$movil', '$nacionalidad', '$profesion'  )");
  //  $this->setid_cliente(mysql_insert_id());
 $this->id_cliente = mysql_insert_id();

}
function insertar2(){
 $rut=$this->getidentificador();
 $dverificador=$this->getdverificador(); 
 $nombre= $this->getnombre_cliente();
 $paterno= $this->getapellido_pcliente();
 $materno = $this->getapellido_mcliente();
 $fecha_nacimiento= $this->getfecha_nacimiento();
 $fijo= $this->getfono_cliente();
 $movil= $this->getfonocliente2();
 $nacionalidad= $this->getnacionalidad();
 $profesion= $this->getprofesion();
 $observacion_cliente = mysql_real_escape_string($this->getobservacion_cliente()); 
 
  $emailcliente = $this->getemailcliente();
  $direccioncliente = $this->getdireccioncliente();
  $region_cliente = $this->getregion_cliente();
  $ciudad_cliente= $this->getciudad_cliente();
     //$result = $this->database->query("INSERT INTO   cliente  (   "
   // . "rut, verificador, nombre, paterno, materno,  fecha_nacimiento, fijo,  movil, nacionalidad,   profesion  ) "
  //  $my = new MySQL();
   $result = $this->database->query("INSERT INTO   cliente( "
 . "identificador, dverificador,nombre_cliente, apellido_pcliente, apellido_mcliente, "
 . "fecha_nacimiento  ,fono_cliente  , fonocliente2,nacionalidad, profesion,observacion_cliente,"
 . " email_cliente, direccion_cliente, region_cliente, ciudad_cliente  ) "
    . "VALUES "
    . "('$rut' ,'$dverificador', '$nombre',  '$paterno', '$materno', '$fecha_nacimiento', '$fijo',"
    . " '$movil', '$nacionalidad', '$profesion','$observacion_cliente',"
    . " '$emailcliente', '$direccioncliente','$region_cliente','$ciudad_cliente' )");
  //  $this->setid_cliente(mysql_insert_id());
 $this->id_cliente = mysql_insert_id();

}
/*
function munactualizacliente2($rut, $verificador ,   $nombre  ,  $paterno  ,
 $materno  ,   $fecha_nacimiento  ,  $fijo  ,   $movil ,   $nacionalidad   ,
 $profesion    ){
    
    $my = new MySQL();
    $my->query("UPDATE cliente SET  "
   . "  nombre_cliente='$nombre',  "
    . "   apellido_pcliente='$paterno'  ,   apellido_mcliente='$materno'  ,"
    . "      fono_cliente='$fijo'  , "
    . ",fonocliente2='$movil'"
    . " where id_cliente='$id_cliente'  ");
     echo $id_cliente;
     

}*/

function munactualizacliente(){
 $id_cliente = $this->getid_cliente();
 $nombre= $this->getnombre_cliente();
 $paterno= $this->getapellido_pcliente();
 $materno = $this->getapellido_mcliente();
 $fecha_nacimiento= $this->getfecha_nacimiento();
 $fijo= $this->getfono_cliente();
 $movil= $this->getfonocliente2();
 $nacionalidad= $this->getnacionalidad();
 $profesion= $this->getprofesion();
 $observacion_cliente = mysql_real_escape_string($this->getobservacion_cliente()); 
$result = $this->database->query("UPDATE cliente SET  "     
    . "nombre_cliente='$nombre',  "
    . "apellido_pcliente='$paterno',"
    . "apellido_mcliente='$materno'  ,"
    . "fono_cliente='$fijo'  ,  "
    . "fonocliente2='$movil' ,"
    . "nacionalidad='$nacionalidad' ,"
    . "profesion='$profesion' ,"
    . "fecha_nacimiento='$fecha_nacimiento' ,"
    . "observacion_cliente='$observacion_cliente'"
    . " where id_cliente='$id_cliente' and estado_cliente > 0  ");
   //  return $this->id_cliente;
   
}


function buscarId($rut){
    $my = new MySQL();
    $resp = $my -> query("SELECT Id from cliente where rut = '$rut'");   
//    echo $resp;
    return mysql_result($resp,0);
}







}