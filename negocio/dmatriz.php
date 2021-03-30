<?php
require_once('../clases/cls_paciente.php');
//require_once('../clases/cls_personal.php');
require_once('../clases/cls_acceso.php');
//require_once('../clases/cls_matriz.php');
//require_once('../clases/cls_registra.php');

if($_POST['funcion']== 'actualizapersonal')
   actualizapersonal();

if($_POST['funcion']== 'ingresopersonal')
   ingresopersonal();

if($_POST['funcion']== 'buscapersonalrut')
   buscapersonalrut();

if($_POST['funcion']== 'librematriz')
   librematriz();

if($_POST['funcion']== 'acceso')
   acceso();
if($_POST['funcion']== 'anularpersonal')
   anularpersonal();
if($_POST['funcion']== 'etiquetamatriz')
   etiquetamatriz();
if($_POST['funcion']== 'acceso2')
   acceso2();

function acceso(){
    $me = new cls_acceso();
    $me->setrut_personal($_POST['rut_personal']);
    $me->setpwd_actual($_POST['pwd_actual']);
    $me->obtacceso($_POST['dverficador']);
    if(md5($me->pwd_actual) == $_POST['pwd_actual'])
        buscapersonalrut();
    else 
        echo 'null';
}
function acceso2(){
    $me = new cls_acceso();
    $me->setrut_personal($_POST['rut_personal']);
    $me->setpwd_actual($_POST['pwd_actual']);
    $me->obtacceso($_POST['dverficador']);
    if($me->pwd_actual == $_POST['pwd_actual'])
        buscapaciente();
    else 
        echo 'null';
}
function buscapaciente(){
    $me = new paciente();
    $me->setidentificador($_POST['rut_personal']);
    $me->setdverificador($_POST['dverficador']);
    $me->getpacientexrut();
    $arreglo = $me->arrobtPaciente;
   echo json_encode($arreglo);
 
}

function buscapersonalrut(){
    $me = new cls_personal();
    $me->setrut_personal($_POST['rut_personal']);
    $me->obtpersonal($_POST['dverficador']);
    $arreglo = $me->arrpersonal;
    echo json_encode($arreglo);
 
}

function ingresopersonal(){
    $me = new cls_personal();
    $me->setrut_personal($_POST['rut_personal_sdv']);   
    $me->obtpersonal($_POST['dverficador']);
    
    if(count($me->arrpersonal) == 0){
       
        $me->setrut_personal($_POST['rut_personal']);
        $me->setnombre_personal($_POST['nombre_personal']);
        $me->setapellido_ppersonal($_POST['apellido_ppersonal']);
        $me->setapellido_mpersonal($_POST['apellido_mpersonal']);
        $me->setemail_personal($_POST['email_personal']);
        $me->settelefono_personal($_POST['telefono_personal']);
        $me->setestado_personal($_POST['estado_personal']);
        $me->settipo_personal($_POST['tipo_personal']);
        $me->setespecialidad($_POST['especialidad']);
        $me->insert();
       //  echo $me->getcod_tipo_especialista();
        echo "1";
        ingresarpass();
        if(intval($_POST['matriz']) > 0 && intval($_POST['tipo_personal']) == 1)
             updatematriz();
   
    }else 
        actualizapersonal();
        
}

function updatematriz(){
 if($_POST['chkmatriz'] && $_POST['matriz'] != '' && intval($_POST['matriz']) > 0){   
    $me = new cls_matriz();
    $me->setid_matriz($_POST['matriz']);
    $me->setrut_personal($_POST['rut_personal']);
    //$me->setetiqueta_matriz($val);
    $me->setturno1_matriz(1);
    $me->setturno2_matriz(1);
    $me->setestado_matriz(1);
    $me->update();
 }   
    
}
//librematriz();
function librematriz(){
if($_POST['id_matriz'] != '' && intval($_POST['id_matriz']) > 0){   
    $me = new cls_matriz();
    $me->setid_matriz($_POST['id_matriz']);
    $me->setrut_personal(NULL);
    $me->setetiqueta_matriz('');
    $me->setturno1_matriz(1);
    $me->setturno2_matriz(1);
    $me->setestado_matriz(0);
    $me->update();
  }   
}
function etiquetamatriz(){
if($_POST['id_matriz'] != '' && intval($_POST['id_matriz']) > 0){   
    $me = new cls_matriz();
    $me->setid_matriz($_POST['id_matriz']);
    $me->setetiqueta_matriz(strtoupper($_POST['etiqueta_matriz']));
    $me->etiqueta();
  }  
}
function actualizapersonal(){
    $me = new cls_personal();
    $me->setcod_tipo_especialista($_POST['cod_tipo_especialista']);
    $me->setnombre_personal($_POST['nombre_personal']);
    $me->setapellido_ppersonal($_POST['apellido_ppersonal']);
    $me->setapellido_mpersonal($_POST['apellido_mpersonal']);
    $me->setemail_personal($_POST['email_personal']);
    $me->settelefono_personal($_POST['telefono_personal']);
    $me->setestado_personal($_POST['estado_personal']);
    $me->settipo_personal($_POST['tipo_personal']);
    $me->setespecialidad($_POST['especialidad']);
   
    $me->update();
      echo $me->cod_tipo_especialista;
    if(intval($_POST['matriz']) > 0 && intval($_POST['tipo_personal']) == 1)
       updatematriz();
    
   
}
function anularpersonal(){
    $elemento =0;
    $nodo = new cls_registra();
    $nodo->setrut_personal($_POST['rut_personal_sdv']);   
    $nodo->msogetregistraxpersonal($_POST['dverficador']);
    $elemento = count($nodo->arrregistra);
    
    
    $me = new cls_personal();
    $me->setcod_tipo_especialista($_POST['cod_tipo_especialista']);
    $me->setestado_personal('0');
    if($elemento ==  0){
       eliminarpassacceso(); 
       $me->delete();
    }else
       $me->anularpersonal(); 
    
     echo $elemento;        
}

function eliminarpassacceso(){
    $me = new cls_acceso();
    $me->setrut_personal($_POST['rut_personal_sdv']); 
    $me->delete($_POST['dverficador']);
}

function ingresarpass(){
    $me = new cls_acceso();
    $me->setrut_personal($_POST['rut_personal']);
    $me->setpwd_actual($_POST['password']);
    $me->setpwd_last($_POST['password']);
    $me->insert();
}
?>