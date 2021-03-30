<?php
require_once('../clases/cls_agenda.php');
require_once('../clases/cls_paciente.php');
require_once('funciones_adicionales.php');

//generarpt('',1);
//FECHA CON FMTO MYSQL

 

generarpt('',1);

function generarpt($fecha, $cod_tipo_especialista){
 // $fecha = '2019-03-24';
//   $fecha = '24-03-2019';
  // $fecha= cambiaf_a_mysql($fecha);
  
    
 /*   
    $arrAgendado = array
  (
   // campo de arreglo x especialista:
   // hora-tipo atencion, nombre-apellido-fecha nacimiento-estado civil -estado-fono-fono alternativo   
        
  array("reserva",'','','','','','','','','','','',''),      
  array("reserva",'','','','','','','','','','','',''),
  array("08:30",'','','','','','','','','','','',''),
  array("09:00",'','','','','','','','','','','',''),
  array("09:30",'','','','','','','','','','','',''),
  array("10:00",'','','','','','','','','','','',''),
  array("10:30",'','','','','','','','','','','',''),
  array("11:00",'','','','','','','','','','','',''),
  array("11:30",'','','','','','','','','','','',''),
  array("12:00",'','','','','','','','','','','',''),     
  array("12:30",'','','','','','','','','','','',''),    
  array("13:00",'','','','','','','','','','','',''),      
  array("13:30",'','','','','','','','','','','',''),  
  array("14:00",'','','','','','','','','','','',''),
  array("14:30",'','','','','','','','','','','',''),
        
  array("15:00",'','','','','','','','','','','',''),
  array("15:30",'','','','','','','','','','','',''),
  array("16:00",'','','','','','','','','','','',''),
  array("16:30",'','','','','','','','','','','',''),
  array("17:00",'','','','','','','','','','','',''),
  array("17:30",'','','','','','','','','','','',''),
  array("18:00",'','','','','','','','','','','',''),     
  array("18:30",'','','','','','','','','','','',''),    
  array("19:00",'','','','','','','','','','','',''),      
  array("19:30",'','','','','','','','','','','',''),  
  array("20:00",'','','','','','','','','','','',''),
  array("reserva",'','','','','','','','','','','','') ,
  array("reserva",'','','','','','','','','','','','')     
  );
  * 
  * 
  */
 // $arrhora = array("09:00:00","09:30:00","10:00:00", "10:30:00", "11:00:00","11:30:00","12:00:00","12:30:00","13:00:00","13:30:00","14:00:00","14:30:00");
 // $arrhora = array( "07:30","08:00","08:30","09:00","09:30","10:00", "10:30", "11:00","11:30","12:00","12:30","13:00","13:30","14:00","14:30",
   //                 "15:00","15:30","16:00", "16:30", "17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00");
  $hora_max = '18:00:00';

$minutes_to_add = 10;
//$time = new DateTime('07:30');
//$time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
//$stamp = $time->format('H:i');
//echo $stamp;
$arrAgendado[0]= array("07:30",'','','','','','','','','','','','');
  $arrhora[0]='07:30';
  for($i=1; strtotime($arrhora[$i-1]) < strtotime( "18:00" );$i++ ){
      $time = new DateTime($arrhora[$i-1]);
      $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
      $stamp = $time->format('H:i:s');
      $stamp1 = $time->format('H:i');
        $arrhora[$i]=$stamp;
        $arrAgendado[$i]= array($stamp1,'','','','','','','','','','','','');
            
  }
 /*
  echo $i;
    echo '<br>';
    for($i=0; $i < count($arrhora) ;$i++ ){
        echo $i.':';
        echo $arrhora[$i];
          echo ':'.$arrAgendado[$i][0];
        echo '<br>';
            
  }
  * /
  */
 
//$cars[0] =   array("Land Rover",17,15) ;
        
        $nodo = new agenda();
        unset($nodo->arragenda);
       // $fecha = cambiaf_a_mysql($_POST['fecha']);
        $nodo->listaragendarpt($fecha); //se solicitan todos los registro x fecha y en el codigo se desglosa
    $num = count($nodo->arragenda);
 
//echo $num;
  for($i=0;$i< count($nodo->arragenda)+1;$i++){
    // echo $id_agenda.'</br>';
     $id_agenda =$nodo->arragenda[$i]['id_agenda']; 
     $hora_atencion = $nodo->arragenda[$i]['hora_atencion']; 
     $id_paciente= $nodo->arragenda[$i]['id_paciente'];  
     $tipo_atencion= $nodo->arragenda[$i]['tipo_atencion'];  
     $tipo_especialista= $nodo->arragenda[$i]['tipo_especialista']; 
     $confirma= $nodo->arragenda[$i]['confirma']; 
     $confirma = 0;
     $bloque_horario= $nodo->arragenda[$i]['bloque_horario'];
     $prestacion= $nodo->arragenda[$i]['prestacion'];
     $tipo_pago= $nodo->arragenda[$i]['tipo_pago'];
     
     if($confirma)
         $confirma = "si";
     else 
         $confirma = "no";
     
       if($tipo_atencion == 1)
       $atencion = "Ingreso"  ;
     else 
        $atencion = "Control"  ;
     
       if($prestacion == 0)
       $atencion = "S/asignar"  ;
     else 
        $atencion = prestacion($prestacion)  ;
     
     if($tipo_pago == 0)
       $tipo_pago = "s/reg"  ;
         
     else 
        $tipo_pago = tipo_pago($tipo_pago)  ;
   
    
     //extraer de entidad paciente
    $nodop = new paciente();
    unset($nodop->arrobtPaciente); //arreglo obtener paciente
    $nodop->getdatopaciente($id_paciente);
   // $nodo->arrobtPaciente[0]['id_paciente'];
     //$string = preg_replace('/\s+/', '', $string);
     
     //$nombre_paciente = preg_replace('/\s+/', '', $nodop->arrobtPaciente[0]['nombre_paciente']) ; 
     //$apellido_ppaciente = preg_replace('/\s+/', '', $nodop->arrobtPaciente[0]['apellido_ppaciente']) ; 
    $nombre_paciente = trim(  $nodop->arrobtPaciente[0]['nombre_paciente']) ; 
     $apellido_ppaciente = trim(  $nodop->arrobtPaciente[0]['apellido_ppaciente']) ; 
     $apellido_mpaciente = trim(  $nodop->arrobtPaciente[0]['apellido_mpaciente']) ; 
     $fecha_nacimiento  = $nodop->arrobtPaciente[0]['fecha_nacimiento'];
  //   $estado_civil  = $nodop->arrobtPaciente[0]['estado_civil'];
     $estado_paciente  = $nodop->arrobtPaciente[0]['estado_paciente'];
     $fono_paciente  = $nodop->arrobtPaciente[0]['fono_paciente'];
    $fono_alternativo  = $nodop->arrobtPaciente[0]['fono_paciente'];
     $observacion_paciente = $nodop->arrobtPaciente[0]['observacion_rptpaciente'];
  
     
     $nombre_paciente =  strtolower($nombre_paciente); 
     $apellido_ppaciente =  strtolower($apellido_ppaciente); 
     $apellido_mpaciente =  strtolower($apellido_mpaciente); 
 /*   if($estado_civil == 1)
      $estado_civil= "Soltero";   
    else if($estado_civil == 2)
       $estado_civil= "Casado";  
    else if($estado_civil == 3)
        $estado_civil= "Viudo"; 
    else if($estado_civil == 4)
       $estado_civil= "Divorciado";
    else 
       $estado_civil= "Separado"; 
      
     if($estado_paciente == 1)
      $estado_paciente= "Pre-ingreso";   
    else if($estado_paciente == 2)
       $estado_paciente= "ingreso";  
    else if($estado_paciente == 3)
        $estado_paciente= "en_control"; 
    else  
       $estado_paciente= "en_alta";
   */
   
    
       $idhra = horaid($hora_atencion,$arrhora);
   
   //  $arrAgendado[$idhra][0 ]= $hora;
       // hora-tipo atencion, nombre-apellido-fecha nacimiento-estado civil -estado-fono-fono alternativo   
    if( $tipo_atencion == 1){
       
       if($cod_tipo_especialista == 22 ) { //psicologo b
      if($bloque_horario == 2) {
             $arrAgendado[$idhra]=  array($arrAgendado[$idhra][0],$atencion, $nombre_paciente, $apellido_ppaciente,
             $apellido_mpaciente,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo,$observacion_paciente,$confirma, $id_agenda,$id_paciente  );
        
            $arrAgendado[$idhra+1]=  array($arrAgendado[$idhra+1][0],$atencion, $nombre_paciente, $apellido_ppaciente,
            $apellido_mpaciente,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo,$observacion_paciente,$confirma, $id_agenda, $id_paciente );
       }  
       
      }else  if($cod_tipo_especialista == 2) { //psicologo A
           if($bloque_horario == 1) {
             $arrAgendado[$idhra]=  array($arrAgendado[$idhra][0],$atencion, $nombre_paciente, $apellido_ppaciente,
             $apellido_mpaciente,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo,$observacion_paciente,$confirma, $id_agenda,$id_paciente  );
        
             $arrAgendado[$idhra+1]=  array($arrAgendado[$idhra+1][0],$atencion, $nombre_paciente, $apellido_ppaciente,
             $apellido_mpaciente,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo,$observacion_paciente,$confirma, $id_agenda, $id_paciente );
           }  
        
           
          //$fecha_nacimiento,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo );
      }else{ 
            $arrAgendado[$idhra]=  array($arrAgendado[$idhra][0],$atencion, $nombre_paciente, $apellido_ppaciente,
          $apellido_mpaciente,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo,$observacion_paciente,$confirma, $id_agenda,$id_paciente ,$tipo_pago );
      //  $idhra = $idhra + 1;
        //  $arrAgendado[$idhra]=  array($arrAgendado[$idhra][0],$atencion, $nombre_paciente, $apellido_ppaciente,
          // $apellido_mpaciente,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo,$observacion_paciente,$confirma, $id_agenda, $id_paciente ); 
    }
          
        
        
   }else if( $tipo_atencion == 2  && $tipo_especialista == $cod_tipo_especialista){
    //}else if( $tipo_especialista = $codigo_tipo_espcialista){    
         $arrAgendado[$idhra]=  array($arrAgendado[$idhra][0],$atencion, $nombre_paciente, $apellido_ppaciente,
        $apellido_mpaciente,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo,$observacion_paciente,$confirma, $id_agenda, $id_paciente  );
         //  $fecha_nacimiento,$estado_civil,$estado_paciente,$fono_paciente,$fono_alternativo  );
    }
              
                 
  }
  return $arrAgendado;
}

function horaid($hora, $arreglo){
 //$arrhora = array("07:00","07:30","08:00","08:30","09:00","09:30","10:00", "10:30", "11:00","11:30","12:00","12:30","13:00","13:30","14:00","14:30", 
   //  "15:00","15:30","16:00", "16:30", "17:00","17:30","18:00","18:30","19:00","19:30","20:00","20:30","21:00");
  // $arrhora = array("07:30:00","08:00:00","08:30:00","09:00:00","09:30:00","10:00:00", "10:30:00", "11:00:00","11:30:00","12:00:00","12:30:00","13:00:00","13:30:00","14:00:00","14:30:00",
    //   "15:00:00","15:30:00","16:00:00", "16:30:00", "17:00:00","17:30:00","18:00:00","18:30:00","19:00:00","19:30:00","20:00:00","20:30:00","21:00:00");
 //   for($i=0; $i < count($arrhora);$i++){
   for($i=0; $i < count($arreglo);$i++){
     if($hora == $arreglo[$i])
         return $i;
    }  
}
function getnombrepaciente($id_paciente){
    $nodo = new paciente();
    unset($nodo->arrobtPaciente);
    $nodo->getdatopaciente($id_paciente);
    $nodo->arrobtPaciente[0]['id_paciente'];
    
    $nombre_paciente = $nodo->arrobtPaciente[0]['nombre_paciente'] ;            
    $nombre_paciente = $nombre_paciente.' '.$nodo->arrobtPaciente[0]['apellido_ppaciente'] ;   
    $nombre_paciente = $nombre_paciente.' '.$nodo->arrobtPaciente[0]['apellido_mpaciente'] ;  
    
    return $nombre_paciente;
    
}

function getprestacion($id_agenda){
    $comp = new agenda();
    $comp->msolistaagendaxcompra($id_agenda);
    return prestacion($comp->arragendacomp[0]['cod_prestacion']);
  // return $comp->arragendacomp[0]['cod_prestacion'];
    //return $id_agenda;
}

?>
