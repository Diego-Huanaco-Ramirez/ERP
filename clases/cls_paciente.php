<?php

require_once("../conexion/conexion.php");


class paciente {
    var $id_paciente;
    var $identificador;
    var $dverificador;
    var $tipoIdentificador;
    var $nombrePaciente;
    var $apellidoPpaciente;
    var $apellidoMpaciente;
    var $fecha_nacimiento;
    var $fonoPaciente;
    var $fonoPaciente2;
    var $emailPaciente;
    var $direccionPaciente;
    var $region_paciente;
    var $ciudad_paciente;
    var $sexo;
    var $estadoCivil;
    var $observacion_paciente;
    var $observacion_rptpaciente;
    var $estado_paciente;
    var $cod_aseguradora;
    var $arrPacientes;
    var $arrobtPaciente;
    var $id_asociado;
    var $id_agenda;
    var $profesion;
    var $nacionalidad;
      
     
     var $database; //  ebc5c72026c6baf3c1efc5631139fdab    ++ Instance of class database
   
       function paciente()
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
      function getestado_paciente()
   {
    return $this->estado_paciente;
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
  
  
//1eliminapaciente()
//2getpacientexrut/$identificador = $this->getidentificador()
//3listcompraspacientexid/*
//4getpacientexagenda// $id = $this->getid_agenda()
//5munactualizaasociado/*
//6actualizaestado(estado, id_paciente)
//7getdatopaciente // obtiene datos paciente por su id
//8listarPacientesearch($search, $opc)//buscar opc 1:nombre, 3: rut(sin digito verificador) y 2:apellido
//9listarPaciente //listar todo los pacientes con estado > 0 (estado vigente 1 y nulo 0)
//10insertar
//11munactualizapaciente
   
// **********************
// GETTER METHODS
// **********************
  function getid_agenda()
   {
    return $this->id_agenda;
   }

function getid_paciente()
{
return $this->id_paciente;
}

function getidentificador()
{
return $this->identificador;
}
function getdverificador()
   {
    return $this->dverificador;
   }


function getnombre_paciente()
{
return $this->nombre_paciente;
}

function getapellido_ppaciente()
{
return $this->apellido_ppaciente;
}

function getapellido_mpaciente()
{
return $this->apellido_mpaciente;
}

function getfecha_nacimiento()
{
return $this->fecha_nacimiento;
}

function getfono_paciente()
{
return $this->fono_paciente;
}

function getfonoPaciente2()
{
return $this->fonoPaciente2;
}

function getnacionalidad()
{
return $this->nacionalidad;
}
function getprofesion()
{
return $this->profesion;
}

function getobservacion_paciente()
{
return $this->observacion_paciente;
}
function getemailPaciente()
{
return $this->emailPaciente;
}
function getdireccionPaciente()
{
return $this->direccionPaciente;
}
function getregion_paciente()
{
return $this->region_paciente;
}
function getciudad_paciente()
{
return $this->ciudad_paciente;
}


// **********************
// SETTER METHODS
// **********************

     function setid_agenda($val)
   {
      $this->id_agenda = $val;
   }
     function setid_paciente($val)
   {
      $this->id_paciente = $val;
   }
      
    function setidentificador($val)
   {
      $this->identificador = $val;
   }
    function setdverificador($val)
   {
      $this->dverificador = $val;
   }


function setnombre_paciente($val)
{
$this->nombre_paciente =  $val;
}

function setapellido_ppaciente($val)
{
$this->apellido_ppaciente =  $val;
}

function setapellido_mpaciente($val)
{
$this->apellido_mpaciente =  $val;
}

function setfecha_nacimiento($val)
{
$this->fecha_nacimiento =  $val;
}

function setfono_paciente($val)
{
$this->fono_paciente =  $val;
}

function setfonoPaciente2($val)
{
$this->fonoPaciente2 =  $val;
}

function setnacionalidad($val)
{
$this->nacionalidad =  $val;
}

function setprofesion($val)
{
$this->profesion =  $val;
}

function setobservacion_paciente($val)
{
$this->observacion_paciente =  $val;
}
function setestado_paciente($val)
{
 $this->estado_paciente=  $val;
}


function setemailPaciente($val)
{
$this->emailPaciente =  $val;
}
function setdireccionPaciente($val)
{
$this->direccionPaciente =  $val;
}
function setregion_paciente($val)
{
$this->region_paciente =  $val;
}
function setciudad_paciente($val)
{
$this->ciudad_paciente =  $val;
}


// **********************
// SELECT METHOD / LOAD
// **********************

   


   function eliminapaciente(){
        $id_paciente = $this->getid_paciente();

        $sql = "delete from paciente where id_paciente = '$id_paciente' and estado_paciente > 0  ";
        $result = $this->database->query($sql);
   }
   
   //version 1.1
     function getpacientexrut(){
       $identificador = $this->getidentificador();
       $dverificador = $this->getdverificador();
       $sql = "SELECT * FROM  paciente where identificador = '$identificador' and estado_paciente > 0  "
       . "and dverificador= '$dverificador' and  estado_paciente > 0; ";
       $result = $this->database->query($sql);
       $i=0;
  
        while($datos = $this->database->fetch_array($result)){
            
            $this->arrobtPaciente[$i]['id_paciente'] = $datos['id_paciente'];                      
           $this->arrobtPaciente[$i]['identificador'] = $datos['identificador'];      
            $this->arrobtPaciente[$i]['dverificador'] = $datos['dverificador'];      
            $this->arrobtPaciente[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
            $this->arrobtPaciente[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
            $this->arrobtPaciente[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
            $this->arrobtPaciente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
            $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente'];     
    
            $this->arrobtPaciente[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
            $this->arrobtPaciente[$i]['nacionalidad'] = $datos['nacionalidad']; 
            $this->arrobtPaciente[$i]['profesion'] = $datos['profesion']; 
        $this->arrobtPaciente[$i]['email_paciente'] = $datos['email_paciente'];       
        $this->arrobtPaciente[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
        $this->arrobtPaciente[$i]['ciudad_paciente'] = $datos['ciudad_paciente'];  
        $this->arrobtPaciente[$i]['region_paciente'] = $datos['region_paciente'];  
  //  $this->arrobtPaciente[$i]['sexo'] = $datos['sexo'];             
 //   $this->arrobtPaciente[$i]['estado_civil'] = $datos['estado_civil'];  
            $this->arrobtPaciente[$i]['observacion_paciente'] = mysql_real_escape_string($datos['observacion_paciente']);
            $this->arrobtPaciente[$i]['estado_paciente'] = $datos['estado_paciente']; 

 
              $i++;
          }   
   }

   function getpacientexagenda(){
       $id = $this->getid_agenda();
       $sql = "SELECT * FROM  paciente p inner join agenda a on p.id_paciente = a.id_paciente where a.id_agenda = '$id' and estado_paciente > 0  ; ";
       $result = $this->database->query($sql);
       $i=0;
  
        while($datos = $this->database->fetch_array($result)){
            $this->arrobtPaciente[$i]['id_paciente'] = $datos['id_paciente'];                      
           $this->arrobtPaciente[$i]['identificador'] = $datos['identificador'];      
       //     $this->arrobtPaciente[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
            $this->arrobtPaciente[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
            $this->arrobtPaciente[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
            $this->arrobtPaciente[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
            $this->arrobtPaciente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
            $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente'];   
             $this->arrobtPaciente[$i]['observacion_paciente'] =mysql_real_escape_string($datos['observacion_paciente']);
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtPaciente[$i]['email_paciente'] = $datos['email_paciente'];       
      //      $this->arrobtPaciente[$i]['direccion_paciente'] = $datos['direccion_paciente']; 
 
        
 
              $i++;
          }   
   }
/*  
   function getdatopacientereceta($id_atencion){
  $my = new MySQL();
  $sql = $my->query("SELECT p.id_paciente, p.nombre_paciente, p.apellido_ppaciente,"
  . "p.identificador, p.fecha_nacimiento, p.direccion_paciente FROM paciente p "
  . "INNER JOIN agenda a ON a.id_paciente = p.id_paciente INNER JOIN atencion at"
  . " ON at.id_agenda = a.id_agenda WHERE at.id_atencion = '$id_atencion' and  p.estado_paciente > 0 ") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
  $this->arrobtPaciente[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrobtPaciente[$i]['identificador'] = $datos['identificador'];      
    $this->arrobtPaciente[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrobtPaciente[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrobtPaciente[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrobtPaciente[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrobtPaciente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente'];         
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtPaciente[$i]['email_paciente'] = $datos['email_paciente'];       
    $this->arrobtPaciente[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
    
    //  ebc5c72026c6baf3c1efc5631139fdab    $this->arrobtPaciente[$i]['sexo'] = $datos['sexo'];             
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtPaciente[$i]['estado_civil'] = $datos['estado_civil'];  
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtPaciente[$i]['observacion_paciente'] = $datos['observacion_paciente'];  
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['estado_paciente'] = $datos['estado_paciente'];  
   //  ebc5c72026c6baf3c1efc5631139fdab     $this->arrobtPaciente[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
        
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['region_paciente'] = $datos['region_paciente']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['ciudad_paciente'] = $datos['ciudad_paciente']; 
  //  ebc5c72026c6baf3c1efc5631139fdab      $this->arrobtPaciente[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
    $i++;
    }
    
}   */
  function munactualizaasociado($id_asociado, $id_paciente){
        $my = new MySQL();
        $sql = $my->query("update paciente set id_asociado='$id_asociado' where id_paciente = '$id_paciente'") ; 
        return 11;
  }  

  function actualizaestado($estado_paciente, $id_paciente){
        $my = new MySQL();
        $sql = $my->query("update paciente set estado_paciente='$estado_paciente' where id_paciente = '$id_paciente'") ; 
  }
  
  function updateestado(){
        $estado_paciente= $this->getestado_paciente();
        $id_paciente= $this->getid_paciente();
        $my = new MySQL();
        $sql = $my->query("update paciente set estado_paciente='$estado_paciente' where id_paciente = '$id_paciente'") ; 
  }
            
  function getdatopaciente(){
  $id_paciente= $this->getid_paciente();
  $my = new MySQL();
  //  ebc5c72026c6baf3c1efc5631139fdab    $id = $this->getid_paciente();
  
  $sql = $my->query("select * from paciente p  where p.id_paciente = '$id_paciente' and estado_paciente > 0 ") ; 
  //$sql = $my->query("select * from paciente p left join  comuna c on p.ciudad_paciente = c.id_ciudad  where p.id_paciente = '$id_paciente'") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrobtPaciente[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrobtPaciente[$i]['identificador'] = $datos['identificador'];      
    $this->arrobtPaciente[$i]['dverificador'] = $datos['dverificador'];      
    $this->arrobtPaciente[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrobtPaciente[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrobtPaciente[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrobtPaciente[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente']; 
    $this->arrobtPaciente[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
    $this->arrobtPaciente[$i]['nacionalidad'] = $datos['nacionalidad']; 
    $this->arrobtPaciente[$i]['profesion'] = $datos['profesion']; 
  $this->arrobtPaciente[$i]['email_paciente'] = $datos['email_paciente'];       
  $this->arrobtPaciente[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
  $this->arrobtPaciente[$i]['ciudad_paciente'] = $datos['ciudad_paciente'];  
  $this->arrobtPaciente[$i]['region_paciente'] = $datos['region_paciente'];  
  //  $this->arrobtPaciente[$i]['sexo'] = $datos['sexo'];             
 //   $this->arrobtPaciente[$i]['estado_civil'] = $datos['estado_civil'];  
   $this->arrobtPaciente[$i]['observacion_paciente'] = mysql_real_escape_string($datos['observacion_paciente']);
    $this->arrobtPaciente[$i]['estado_paciente'] = $datos['estado_paciente'];  
 //   $this->arrobtPaciente[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
    
  //  $this->arrobtPaciente[$i]['fono_paciente'] = $datos['fono_paciente'];      
   
 //   $this->arrobtPaciente[$i]['region_paciente'] = $datos['region_paciente']; 
   // $this->arrobtPaciente[$i]['ciudad_paciente'] = $datos['ciudad_paciente']; 
   // $this->arrobtPaciente[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
  //  $this->arrobtPaciente[$i]['id_asociado'] = $datos['id_asociado']; 
  //  $this->arrobtPaciente[$i]['nombre_ciudad'] = $datos['nombre_ciudad']; 
    $i++;
    }
    
}   
  function listarPacientesearch($search, $opc){
  $apellido_ppaciente = $this->getapellido_ppaciente();
  $my = new MySQL();$search = $search.'%';
  if($opc == 1)
       $sql = $my->query("select * from paciente where  nombre_paciente LIKE '$search' and estado_paciente > 0  order by nombre_paciente, apellido_ppaciente,apellido_mpaciente asc") ; 
  else  if($opc == 3)
       $sql = $my->query("select * from paciente where  identificador LIKE '$search' and estado_paciente > 0    order by apellido_ppaciente, nombre_paciente, apellido_mpaciente asc") ; 
  else  if($opc == 2)   
       $sql = $my->query("select * from paciente where  apellido_ppaciente LIKE '$search' and estado_paciente > 0   order by apellido_ppaciente, nombre_paciente, apellido_mpaciente asc") ; 
  else  if($opc == 4)   
       $sql = $my->query("select * from paciente where apellido_ppaciente = '$apellido_ppaciente' and  apellido_mpaciente LIKE '$search' and estado_paciente > 0   order by apellido_ppaciente, nombre_paciente, apellido_mpaciente asc") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrPacientes[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrPacientes[$i]['identificador'] = $datos['identificador'];   
      $this->arrPacientes[$i]['dverificador'] = $datos['dverificador']; 
    $this->arrPacientes[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrPacientes[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrPacientes[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrPacientes[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrPacientes[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrPacientes[$i]['fono_paciente'] = $datos['fono_paciente'];         
    $this->arrPacientes[$i]['email_paciente'] = $datos['email_paciente'];       
    $this->arrPacientes[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
    $this->arrPacientes[$i]['sexo'] = $datos['sexo'];             
    $this->arrPacientes[$i]['estado_civil'] = $datos['estado_civil'];  
    $this->arrPacientes[$i]['observacion_paciente'] = mysql_real_escape_string($datos['observacion_paciente']);
    $this->arrPacientes[$i]['estado_paciente'] = $datos['estado_paciente'];  
    $this->arrPacientes[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
        
    $this->arrPacientes[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
    $this->arrPacientes[$i]['region_paciente'] = $datos['region_paciente']; 
    $this->arrPacientes[$i]['ciudad_paciente'] = $datos['ciudad_paciente']; 
    $this->arrPacientes[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
    $this->arrPacientes[$i]['id_asociado'] = $datos['id_asociado']; 
    
    $this->arrPacientes[$i]['nacionalidad'] = $datos['nacionalidad']; 
    $this->arrPacientes[$i]['profesion'] = $datos['profesion']; 
    
    $i++;
    }
    
}   
 function listarPaciente(){
  $my = new MySQL();
  $sql = $my->query("select * from paciente where estado_paciente > 0 order by nombre_paciente asc") ; 
  $i=0;
    while($datos = $my->fetch_array($sql)){
    $this->arrPacientes[$i]['id_paciente'] = $datos['id_paciente'];                      
    $this->arrPacientes[$i]['identificador'] = $datos['identificador'];      
    $this->arrPacientes[$i]['tipo_identificador'] = $datos['tipo_identificador'];      
    $this->arrPacientes[$i]['nombre_paciente'] = $datos['nombre_paciente'];            
    $this->arrPacientes[$i]['apellido_ppaciente'] = $datos['apellido_ppaciente'];   
    $this->arrPacientes[$i]['apellido_mpaciente'] = $datos['apellido_mpaciente'];    
    $this->arrPacientes[$i]['fecha_nacimiento'] = $datos['fecha_nacimiento'];     
    $this->arrPacientes[$i]['fono_paciente'] = $datos['fono_paciente'];         
    $this->arrPacientes[$i]['email_paciente'] = $datos['email_paciente'];       
    $this->arrPacientes[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
    $this->arrPacientes[$i]['sexo'] = $datos['sexo'];             
    $this->arrPacientes[$i]['estado_civil'] = $datos['estado_civil'];  
    $this->arrPacientes[$i]['observacion_paciente'] = mysql_real_escape_string($datos['observacion_paciente']);
    $this->arrPacientes[$i]['estado_paciente'] = $datos['estado_paciente'];  
    $this->arrPacientes[$i]['cod_aseguradora'] = $datos['cod_aseguradora'];  
    
    $this->arrPacientes[$i]['fonoPaciente2'] = $datos['fonoPaciente2']; 
   $this->arrobtPaciente[$i]['email_paciente'] = $datos['email_paciente'];       
        $this->arrobtPaciente[$i]['direccion_paciente'] = $datos['direccion_paciente'];   
        $this->arrobtPaciente[$i]['ciudad_paciente'] = $datos['ciudad_paciente'];  
        $this->arrobtPaciente[$i]['region_paciente'] = $datos['region_paciente'];   
    $this->arrPacientes[$i]['observacion_rptpaciente'] = $datos['observacion_rptpaciente']; 
    $i++;
    }
    
}
            
    
    
function insertar($rut, $verificador ,   $nombre  ,  $paterno  ,
 $materno  ,   $fecha_nacimiento  ,  $fijo  ,   $movil ,   $nacionalidad   ,
 $profesion    ){
     //$result = $this->database->query("INSERT INTO   paciente  (   "
   // . "rut, verificador, nombre, paterno, materno,  fecha_nacimiento, fijo,  movil, nacionalidad,   profesion  ) "
  //  $my = new MySQL();
   $result = $this->database->query("INSERT INTO   paciente( "
 . "identificador, dverificador,nombre_paciente, apellido_ppaciente, apellido_mpaciente, "
 . "fecha_nacimiento  ,fono_paciente  , fonoPaciente2,nacionalidad, profesion  ) "
    . "VALUES "
    . "('$rut' ,'$verificador', '$nombre',  '$paterno', '$materno', '$fecha_nacimiento', '$fijo',"
    . " '$movil', '$nacionalidad', '$profesion'  )");
  //  $this->setid_paciente(mysql_insert_id());
 $this->id_paciente = mysql_insert_id();

}
function insertar2(){
 $rut=$this->getidentificador();
 $dverificador=$this->getdverificador(); 
 $nombre= $this->getnombre_paciente();
 $paterno= $this->getapellido_ppaciente();
 $materno = $this->getapellido_mpaciente();
 $fecha_nacimiento= $this->getfecha_nacimiento();
 $fijo= $this->getfono_paciente();
 $movil= $this->getfonoPaciente2();
 $nacionalidad= $this->getnacionalidad();
 $profesion= $this->getprofesion();
 $observacion_paciente = mysql_real_escape_string($this->getobservacion_paciente()); 
 
  $emailPaciente = $this->getemailPaciente();
  $direccionPaciente = $this->getdireccionPaciente();
  $region_paciente = $this->getregion_paciente();
  $ciudad_paciente= $this->getciudad_paciente();
     //$result = $this->database->query("INSERT INTO   paciente  (   "
   // . "rut, verificador, nombre, paterno, materno,  fecha_nacimiento, fijo,  movil, nacionalidad,   profesion  ) "
  //  $my = new MySQL();
   $result = $this->database->query("INSERT INTO   paciente( "
 . "identificador, dverificador,nombre_paciente, apellido_ppaciente, apellido_mpaciente, "
 . "fecha_nacimiento  ,fono_paciente  , fonoPaciente2,nacionalidad, profesion,observacion_paciente,"
 . " email_paciente, direccion_paciente, region_paciente, ciudad_paciente  ) "
    . "VALUES "
    . "('$rut' ,'$dverificador', '$nombre',  '$paterno', '$materno', '$fecha_nacimiento', '$fijo',"
    . " '$movil', '$nacionalidad', '$profesion','$observacion_paciente',"
    . " '$emailPaciente', '$direccionPaciente','$region_paciente','$ciudad_paciente' )");
  //  $this->setid_paciente(mysql_insert_id());
 $this->id_paciente = mysql_insert_id();

}
/*
function munactualizapaciente2($rut, $verificador ,   $nombre  ,  $paterno  ,
 $materno  ,   $fecha_nacimiento  ,  $fijo  ,   $movil ,   $nacionalidad   ,
 $profesion    ){
    
    $my = new MySQL();
    $my->query("UPDATE paciente SET  "
   . "  nombre_paciente='$nombre',  "
    . "   apellido_ppaciente='$paterno'  ,   apellido_mpaciente='$materno'  ,"
    . "      fono_paciente='$fijo'  , "
    . ",fonoPaciente2='$movil'"
    . " where id_paciente='$id_paciente'  ");
     echo $id_paciente;
     

}*/

function munactualizapaciente(){
 $id_paciente = $this->getid_paciente();
 $nombre= $this->getnombre_paciente();
 $paterno= $this->getapellido_ppaciente();
 $materno = $this->getapellido_mpaciente();
 $fecha_nacimiento= $this->getfecha_nacimiento();
 $fijo= $this->getfono_paciente();
 $movil= $this->getfonoPaciente2();
 $nacionalidad= $this->getnacionalidad();
 $profesion= $this->getprofesion();
 $observacion_paciente = mysql_real_escape_string($this->getobservacion_paciente()); 
$result = $this->database->query("UPDATE paciente SET  "     
    . "nombre_paciente='$nombre',  "
    . "apellido_ppaciente='$paterno',"
    . "apellido_mpaciente='$materno'  ,"
    . "fono_paciente='$fijo'  ,  "
    . "fonoPaciente2='$movil' ,"
    . "nacionalidad='$nacionalidad' ,"
    . "profesion='$profesion' ,"
    . "fecha_nacimiento='$fecha_nacimiento' ,"
    . "observacion_paciente='$observacion_paciente'"
    . " where id_paciente='$id_paciente' and estado_paciente > 0  ");
   //  return $this->id_paciente;
   
}


function buscarId($rut){
    $my = new MySQL();
    $resp = $my -> query("SELECT Id from paciente where rut = '$rut'");   
//    echo $resp;
    return mysql_result($resp,0);
}







}