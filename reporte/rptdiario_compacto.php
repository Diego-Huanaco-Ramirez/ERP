<?php
require('../clases/fpdf181/fpdf.php');
require_once('../clases/cls_agenda.php');
require_once('../clases/cls_paciente.php');

require_once('../servicio/funciones_agenda.php');
require_once('../clases/PDF_compacto.php');
require_once('../servicio/funciones_adicionales.php');

report();


function report(){
// Instanciation of inherited class
$fechafmt=$_GET['fecha'];
//$fechafmt = '24/03/2019';
$fecha= cambiaf_a_mysql($fechafmt);
//$fecha = $fechafmt;

//echo $fechafmt;
//echo $fecha;
$pdf = new PDF('P','mm','A4');
$pdf->fecha($fechafmt);

$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->Header($fecha);
$pdf->SetFont('Times','',8);

//$pdf->ChapterTitle(1,'HOLA');


$inicio=0;
 
 $cod_tipo_especialista = 1; 
 $pdf->ChapterTitle(' Dr. Marcos Soto',' ');
 $arrAgendado = generarpt($fecha, $cod_tipo_especialista);
 $total= count($arrAgendado);
 imprimirrpt($arrAgendado, $pdf,$inicio,$total);
 //$pdf->Ln();//$pdf->Ln();//$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
 /*$pdf->Cell(0,1,'',0,1);
 $cod_tipo_especialista = 2; 
 //$pdf->FECHATitle('','FECHA:'.$fechafmt);
 $pdf->ChapterTitle(' Psicologo: Oscar Cortes',' ');
 $arrAgendado = generarpt($fecha, $cod_tipo_especialista);
 
 imprimirrpt($arrAgendado, $pdf,$inicio,$total);
 //$pdf->Ln();//$pdf->Ln();//$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
  $pdf->Cell(0,1,'',0,1);
 $cod_tipo_especialista = 3; 
 //$pdf->FECHATitle('','FECHA:'.$fechafmt);
 $pdf->ChapterTitle(' Medico (Horario A): Dra. Carolina Andrea Ramirez Candia',' ');
 $arrAgendado = generarpt($fecha, $cod_tipo_especialista);
 
 imprimirrpt($arrAgendado, $pdf,$inicio,($total/2)-1);
 $pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
  $pdf->Cell(0,1,'',0,1);
 $cod_tipo_especialista = 3; 
 //$pdf->FECHATitle('','FECHA:'.$fechafmt);
 $pdf->ChapterTitle(' Medico (Horario B): Dra. Paula Rebolledo',' ');
 $arrAgendado = generarpt($fecha, $cod_tipo_especialista);
 $inicio= ($total/2);
 imprimirrpt($arrAgendado, $pdf,$inicio,$total);
 
 $cod_tipo_especialista = 22; 
 //$pdf->FECHATitle('','FECHA:'.$fechafmt);
 $pdf->ChapterTitle(' Psicologo: Paula Parra',' ');
 $arrAgendado = generarpt($fecha, $cod_tipo_especialista);
 $inicio = 0;
 imprimirrpt($arrAgendado, $pdf,$inicio,$total);*/
 
$pdf->Output();

}

/*
  $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();*/

function imprimirrpt($arrAgendado, $pdf, $inicio, $total){
if(count($arrAgendado) > 0){
    // Column widths
    //$w = array(15, 20, 20, 20,20,25);
      $w = array(13, 13,20, 30, 30,30,20,20, 10);
         $pdf->Cell($w[0],3,'Hora',1,0,'C');
         $pdf->Cell($w[1],3,'Atencion',1,0,'C');
          $pdf->Cell($w[2],3,'Pago',1,0,'C');
         $pdf->Cell($w[3],3,'Nombre',1,0,'C');
         $pdf->Cell($w[4],3,'Apellido',1,0,'C');
         $pdf->Cell($w[5],3,'Apellido',1,0,'C');
         $pdf->Cell($w[6],3,'Telefono',1,0,'C');
         $pdf->Cell($w[7],3,'Observacion',1,0,'C');
         $pdf->Cell($w[8],3,'Check',1,0,'C');
         $pdf->Ln();
     for($i=$inicio;$i< $total;$i++){
     // hora-tipo atencion, nombre-apellido-fecha nacimiento-estado civil -estado-fono-fono alternativo   
   
         $pdf->Cell($w[0],3,$arrAgendado[$i][0],1,0,'C');
         $pdf->Cell($w[1],3,$arrAgendado[$i][1],1,0,'C');
         $pdf->Cell($w[2],3,$arrAgendado[$i][13],1,0,'C');
         $pdf->Cell($w[3],3,$arrAgendado[$i][2],1,0,'C');
         $pdf->Cell($w[4],3,$arrAgendado[$i][3],1,0,'C');
         $pdf->Cell($w[5],3,$arrAgendado[$i][4],1,0,'C');
         $pdf->Cell($w[6],3,$arrAgendado[$i][7],1,0,'C');
          $pdf->Cell($w[7],3, substr($arrAgendado[$i][9], 0,11),1,0,'C');
         $pdf->Cell($w[8],3,$arrAgendado[$i][10],1,0,'C');
         $pdf->Ln();
       
         //$arrAgendado[$i][3]."--".$arrAgendado[$i][4] ,1,1,'L');
    }
}else{
    $pdf->ChapterTitle('','');
      $pdf->Cell(0,4,'sin reserva',0,1);
}    

}
?>
    