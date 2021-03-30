<?php
require('../clases/fpdf181/fpdf.php');
//require_once('../clases/agenda.php');
require_once('../clases/cls_paciente.php');
require_once('../clases/cls_atencion.php');
require_once('../servicio/funciones_adicionales.php');
//require_once('../servicio/funciones_agenda.php');
require_once('../clases/PDFhistorial.php');


report();



function report(){
//  ebc5c72026c6baf3c1efc5631139fdab     Instanciation of inherited class
$pdf = new PDF('P','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);
//  ebc5c72026c6baf3c1efc5631139fdab    $pdf->ChapterTitle(1,'HOLA');

//  ebc5c72026c6baf3c1efc5631139fdab    $fechafmt=$_GET['fecha'];
//  ebc5c72026c6baf3c1efc5631139fdab    $fecha=cambiaf_a_mysql($fechafmt);
$fecha =  date('d/m/Y');
//$id_agenda = $_GET['id_agenda'];
$id_agenda = 30;
$nodo = new paciente();
$nodo->setid_agenda($id_agenda);
$nodo->getpacientexagenda();


 $pdf->FECHATitle('','FECHA:'.$fecha);
 $pdf->Cell(0,4,'',0,1);
 $cod_tipo_especialista = 1; 
 //$pdf->ChapterTitle2(' Reporte agenda - paciente: '.getnombrepaciente($id_paciente),' ');
 $pdf->ChapterTitle2('Datos paciente - '.'',' ');
 //unset($arrAgendado);
 //$arrAgendado = $nodo->rptagendadiaria;
   datos_pacientes($nodo->arrobtPaciente, $pdf);
 $pdf->ChapterTitle2(' Reporte agenda - paciente: '.'',' ');
$me= new cls_atencion();
$me->setid_paciente(39);
 //$me->setid_paciente(intval($nodo->arrobtPaciente[0]['id_paciente']));
 $me->msoatencionxpaciente();
 
 imprimirrptpachra($me->arratencion, $pdf);
 $pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
 $pdf->Cell(0,4,'',0,1);
 
 
 
$pdf->Output();

}
function datos_pacientes($arrAgendado, $pdf){

    //primera fila
    $z = array(50,45,45,30,30);
    $y = array(30,30,15,35,30,60);
    $t = array(60,35,35,35,35);
    
    $pdf->Cell($z[0],6,'Nombre:',1,0,'C');
    $pdf->Cell($z[1],6,'Apellido paterno:',1,0,'C');
    $pdf->Cell($z[2],6,'Apellido materno:',1,0,'C');
   $pdf->Cell($z[3],6,'Rut:',1,0,'C');
 
     $pdf->Ln();
//     aqui van los valores
     $pdf->Cell($z[0],6,$arrAgendado[0]['nombre_paciente'],1,0,'C');
    $pdf->Cell($z[1],6,$arrAgendado[0]['apellido_ppaciente'],1,0,'C');
    $pdf->Cell($z[2],6,$arrAgendado[0]['apellido_mpaciente'],1,0,'C');
   $pdf->Cell($z[3],6,$arrAgendado[0]['identificador'],1,0,'C');
      
     $pdf->Ln();
     $pdf->Ln();
  
}


function imprimirrptpachra($arrAgendado, $pdf){
    


if(count($arrAgendado) > 0){
    //  ebc5c72026c6baf3c1efc5631139fdab     Column widths
    //  ebc5c72026c6baf3c1efc5631139fdab    $w = array(15, 20, 20, 20,20,25);
      $w = array(60, 20, 35, 35,35,35,150);
         $pdf->Cell($w[0],6,'fecha',1,0,'C');
         $pdf->Cell($w[1],6,'hora',1,0,'C');
         $pdf->Cell($w[2],6,'Prestacion',1,0,'C');
         $pdf->Cell($w[3],6,'pago',1,0,'C');
      //   $pdf->Cell($w[3],6,'Antecedente',1,0,'C');
       //  $pdf->Cell($w[5],6,'Evolucion',1,0,'C');
        
         $pdf->Ln();
    for($i=0;$i< count($arrAgendado);$i++){
     //  ebc5c72026c6baf3c1efc5631139fdab     hora-tipo atencion, nombre-apellido-fecha nacimiento-estado civil -estado-fono-fono alternativo   
    $fecha = "" ;
// $fecha = ImprimirFechaCompleta($arrAgendado[$i]['fecha_atencion']);
 //$fecha = ImprimirFechaCompleta('01/02/2018');
 
         $pdf->Cell($w[0],6,ImprimirFechaCompleta($arrAgendado[$i]['fecha_atencion']),1,0,'C');
         $pdf->Cell($w[1],6,$arrAgendado[$i]['hora_atencion'],1,0,'C');
         $pdf->Cell($w[2],6, $arrAgendado[$i]['prestacion'],1,0,'C');
         $pdf->Cell($w[3],6, $arrAgendado[$i]['tipo_pago'],1,0,'C');
     //    $pdf->Cell($w[4],6,'',1,0,'C');
      //   $pdf->Cell($w[5],6,'',1,0,'C');
          
         $pdf->Ln();
          $pdf->Cell($w[3],6, 'Motivo:',1,0,'C');
           $pdf->Cell($w[6],15, $arrAgendado[$i]['motivo_atencion'],1,0,'C');
          $pdf->Ln();     $pdf->Ln();
       
         //  ebc5c72026c6baf3c1efc5631139fdab    $arrAgendado[$i][3]."--".$arrAgendado[$i][4] ,1,1,'L');
    }
}else{
    $pdf->ChapterTitle('','');
      $pdf->Cell(0,4,'sin historial',0,1);
}    

}
?>
