<?php
require_once('../clases/cls_paciente.php');
require_once('../clases/cls_comuna.php');

require_once('../clases/cls_acceso.php');
//require_once('../clases/cls_agenda.php');
//require_once('../clases/cls_atencion.php');
require_once('../servicio/funciones_adicionales.php');
 

//require_once('../clases/cls_atencion.php');
//echo "datos.php"
//buscarPacienteFecha2();

if($_POST['funcion']== 'upd_prestacion')
   upd_prestacion();
if($_POST['funcion']== 'upd_tipo_pago')
   upd_tipo_pago();

if($_POST['funcion']== 'eliminaragenda')
   eliminaragenda();
if($_POST['funcion']== 'minInsertaagenda')
   minInsertaagenda();
if($_POST['funcion']== 'minInsertPaciente')
     minInsertPaciente2();
if($_POST['funcion']== 'cargaTabla')
    buscarPacienteFecha2();
if($_POST['funcion']== 'numactualizaPaciente')
    numactualizaPaciente();
if($_POST['funcion']== 'getpaciente')
    getpaciente();
if($_POST['funcion']== 'getpacientexrut')
    getpacientexrut();
if($_POST['funcion']== 'getpaciente_agenda')
    getpaciente_agenda();
if($_POST['funcion']== 'actualizaestado')
    actualizaestado();

if($_POST['funcion']== 'mdnanularPaciente')
     mdnanularPaciente();
//msolistacomunas();
function msolistacomunas(){
   
   
    $nodo = new cls_comuna();
   
    $nodo->selectdata();
    
    for($i=0; $i < count($nodo->arrcomuna); $i++){
        echo $nodo->arrcomuna[$i]['nombre_ciudad'].'<br>';
    }
    
    echo json_encode($nodo->arrcomuna);
  
}

function mdnanularPaciente(){
    $bandera = true;
    if(isset($_POST['id_paciente'])){
     
        $nodo = new agenda();
        $nodo->setid_paciente($_POST['id_paciente']);
        $nodo->listallagendaxpaciente();
        if(count($nodo->arragendarpt) > 0)
           $bandera = false;
   } 
    
   if(isset($_POST['id_paciente'])){
        $id_paciente = $_POST['id_paciente'] ;
        $nodo = new paciente();
        $nodo->setid_paciente($id_paciente);
        $nodo->setestado_paciente(0);
        if($bandera)
          $nodo->eliminapaciente();
        else 
          $nodo->updateestado();
        
  
   }
}
function getpaciente_agenda(){
   if(isset($_POST['id_agenda'])){
    $id_agenda = $_POST['id_agenda'] ;
    $nodo = new agenda();
    $nodo->setid_agenda($id_agenda);
    $nodo->getagendapacientexid();
    echo json_encode($nodo->arragenda);
   } 
}

function getpacientexrut(){
   if(isset($_POST['identificador']) && isset($_POST['dverificador'])){
    $identificador = $_POST['identificador'] ;
    $dverificador = $_POST['dverificador'];
    $nodo = new paciente();
    $nodo->setidentificador($identificador);
    $nodo->setdverificador($dverificador);
    $nodo->getpacientexrut();
    echo json_encode($nodo->arrobtPaciente);
   } 
}

function getpaciente(){
   if(isset($_POST['id_paciente'])){
    $id_paciente = $_POST['id_paciente'] ;
    $nodo = new paciente();
    $nodo->setid_paciente($id_paciente);
    $nodo->getdatopaciente();
    echo json_encode($nodo->arrobtPaciente);
   } 
}

function numactualizaPaciente(){
   if(isset($_POST['id_paciente'])){
    $id_paciente = $_POST['id_paciente'] ;
    $nodo = new paciente();
    $nodo->setid_paciente($id_paciente);
    $nodo->setnombre_paciente($_POST['nombre']);
    $nodo->setapellido_ppaciente($_POST['paterno']);
    $nodo->setapellido_mpaciente($_POST['materno']);
    $nodo->setfecha_nacimiento($_POST['fecha_nacimiento']);
    $nodo->setfono_paciente($_POST['fijo']);
    $nodo->setfonoPaciente2($_POST['movil']);
    $nodo->setnacionalidad($_POST['nacionalidad']);
    $nodo->setprofesion($_POST['profesion']);
    $nodo->setobservacion_paciente($_POST['observacion_paciente']);
    $nodo->munactualizapaciente();
        //    ($_POST['identificador'], $_POST['tipoidentificador'],  $_POST['nombrepaciente'],
    //$_POST['apellidoppaciente'], $_POST['apellidompaciente'], $fecha_nacimiento, $_POST['fonopaciente'],
   // $_POST['emailpaciente'], $_POST['direccionpaciente'], $_POST['sexo'], $_POST['estadocivil'],
  //  $_POST['observacion_paciente'], $id_paciente,$_POST['cod_aseguradora'],
    //$_POST['fonoPaciente2'], $_POST['region_paciente'], $_POST['ciudad_paciente'], $_POST['observacion_rptpaciente']           );
    //echo $id_paciente;
    //echo $_POST['id_paciente'];
    echo $nodo->getid_paciente();
   }
}

function minInsertPaciente2(){
   
  $nodo = new paciente();
  $nodo->setidentificador(trim($_POST['rut']));
  $nodo->setdverificador(trim($_POST['verificador']));
 
  $nodo->setnombre_paciente($_POST['nombre']);
  $nodo->setapellido_ppaciente($_POST['paterno']);
  $nodo->setapellido_mpaciente($_POST['materno']);
  $nodo->setfecha_nacimiento($_POST['fecha_nacimiento']);
  $nodo->setfono_paciente($_POST['fijo']);
  $nodo->setfonoPaciente2($_POST['movil']);
  $nodo->setnacionalidad($_POST['nacionalidad']);
  $nodo->setprofesion($_POST['profesion']);
  $nodo->setobservacion_paciente($_POST['observacion_paciente']);
  
  $nodo->setemailPaciente($_POST['email_paciente']);
  $nodo->setdireccionPaciente($_POST['direccion_paciente']);
  $nodo->setregion_paciente($_POST['region_paciente']);
  $nodo->setciudad_paciente($_POST['ciudad_paciente']);
  
  
  $nodo->getpacientexrut();       
      
    if(count($nodo->arrobtPaciente) > 0){
     // if(isset($_POST['id_paciente']))
         $nodo->setid_paciente(intval($_POST['id_paciente']));
    
      $nodo->munactualizapaciente();
    }else{
        
     $nodo->insertar2();
       ingresarpass();
    }
    echo  $nodo->getid_paciente();
    
}
function ingresarpass(){
    $me = new cls_acceso();
    $me->setrut_personal($_POST['rut']);
    $me->setpwd_actual($_POST['password']);
    $me->setpwd_last($_POST['password']);
    $me->insert();
}
function actualizaestado(){
  $estado = intval($_POST['estado_agenda']);
  $nodo = new agenda();
  $nodo->setid_agenda($_POST['id_agenda']);
  $nodo->msogetagendaxid();
  if($nodo->estado_agenda < $estado && ( $estado - intval($nodo->estado_agenda) < 2 )){
     $nodo->setestado_agenda($estado);
     $nodo->actualizaestado();
     echo $nodo->id_agenda;
  }   
}
function upd_prestacion(){
 
  $nodo = new agenda();
  $nodo->setid_agenda($_POST['id_agenda']);
  $nodo->setprestacion($_POST['prestacion']);
  $nodo->upd_prestacion();
  echo $nodo->id_agenda;
}
function upd_tipo_pago(){
 
  $nodo = new agenda();
  $nodo->setid_agenda($_POST['id_agenda']);
  $nodo->settipo_pago($_POST['tipo_pago']);
  $nodo->upd_tipo_pago();
  echo $nodo->id_agenda;
}
function eliminaragenda(){
 
  $nodo = new agenda();
  $nodo->setid_agenda($_POST['id_agenda']);
/*  if(intval($_POST['estado_agenda'])  > 1){
     $nodo->setestado_agenda(0);
     $nodo->actualizaestado();   
  }else     */
     $nodo->eliminar();
  echo '0';
}   

function buscarPacienteFecha2(){ 
    unset($nodo);
  //  $_POST['fecha']='26/03/2019';
   $nodo = new agenda();
   $fecha = cambiaf_a_mysql($_POST['fecha']);
   $nodo->getatenciondiaria2($fecha);
   $resp = $nodo->arragendadiaria;
//echo $fecha;
    echo json_encode($resp);
}
function buscarPacienteFecha(){ 
    unset($nodo);
    $nodo = new atencion();
    $nodo->cargaTabla($_POST['fecha']);
    $resp = $nodo->getArrPacientes();

    echo json_encode($resp);
}

function minInsertaagenda(){
 $id_paciente= $_POST['id_paciente'];
 $id_paciente= (int)$id_paciente;
 //   $fecha_agenda = cambiaf_a_mysql($_POST['fecha_agenda']);
 $fecha_agenda = "";
 $fecha_atencion = cambiaf_a_mysql($_POST['fecha_atencion']);
$hora1 = strtotime($_POST['hora_atencion']);
$hora2 = strtotime( "14:00" );
if(intval($_POST['pago'])>0  )
  $estado_agenda = 2;
else 
 $estado_agenda = 1;

if( $hora1 < $hora2 ) {
    $_POST['bloque_horario']=1;
} else {
    $_POST['bloque_horario']=2;
} 
   //$fecha_atencion = $fecha_agenda;
    $nodo = new agenda();
    $nodo->insertar( $id_paciente,$fecha_atencion,$_POST['hora_atencion'],$_POST['bloque_horario'],  
                    $_POST['accion'],$_POST['pago'], $estado_agenda);
   // $_POST['motivo_atencion']="prueba";
    ingresoatencion($nodo->id_agenda)  ;
    
   echo $nodo->id_agenda;
}

function ingresoatencion($id_agenda){
    $me = new cls_atencion();
    $me->setid_agenda($id_agenda);
    $me->setevolucion_atencion($_POST['evolucion_atencion']);
    $me->settratamiento_atencion($_POST['tratamiento_atencion']);
  //  $me->setespecialista_atencion($_POST['especialista_atencion']);
    $me->setmotivo_atencion($_POST['motivo_atencion']);
    $me->setantecedente_atencion($_POST['antecedente_atencion']);
    $me->setex_fisico_atencion($_POST['ex_fisico_atencion']);
    $me->setbiomicroscopia_atencion($_POST['biomicroscopia_atencion']);
    $me->setoftalmoscopia_atencion($_POST['oftalmoscopia_atencion']);
    $me->setdiagnostico_atencion($_POST['diagnostico_atencion']);
    $me->setindicacion_atencion($_POST['indicacion_atencion']);
    $me->msoatencionagendada();
    if(count($me->arratencion) > 0 )
       $me->update();
    else 
       $me->insert();
    
}

?>

  