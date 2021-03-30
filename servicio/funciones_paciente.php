<?php
require_once('../clases/cls_paciente.php');


function getobjetopaciente($id_paciente){
    $me = new paciente();
    $me->setid_paciente($id_paciente);
    $me->getdatopaciente();
    
    return $me ;
}