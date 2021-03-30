<?php
require_once('../clases/cls_lente.php');
require_once('../clases/cls_paciente.php');
require_once('../servicio/funciones_adicionales.php');
require_once('../negocio/datencion.php');
//require('../clases/fpdf181/fpdf.php');

require_once('../clases/cls_pdf.php');
require_once('../clases/pdf_print.php');
 
$id_agenda = $_GET['id_agenda'];

$rcDisPup=$rlDisPup=$nv=$arrreceta="";
//echo $id_agenda; 
$array1 = cargarparametro(0,intval($id_agenda)); 

$arrayoptica = cargarparametro4(0, intval($id_agenda));

if(count($arrayoptica)== 0){
   
    $arrayoptica="";
}
$lentes = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

$arrtipolente = cargartipolente(0,intval($id_agenda));
if(count($arrtipolente)>0){
    for($i=0;$i< count($arrtipolente);$i++){
        $lentes[intval($arrtipolente[$i]['cod_tlente'])]=1;

    }
}else{
  $arrtipolente="";   
}




$arrreceta = cargarparametro3(0,intval($id_agenda));
//echo count($arrreceta);
if(count($arrreceta)>0){
$rcDisPup = $arrreceta[0]['rcDisPup'];
$rlDisPup = $arrreceta[0]['rlDisPup'];
$nv= array($arrreceta[0]['rlvertex_d'],$arrreceta[0]['rcvertex_d'],$arrreceta[0]['rlvertex_i'],$arrreceta[0]['rcvertex_i']);
  //echo $arrreceta[0]['rlvertex_d'];
}else{
    unset($arrreceta);
    unset($nv);
 
   // echo "sin datos";
}



//echo count($myJSON);
if(count($array1) > 0){
   
    for($i=0;$i< count($array1);$i++){
        if($array1[$i]['cod_med_generica'] == 3){
            $myJSON[0]= $array1[$i]['esf_d'];
            $myJSON[1]= $array1[$i]['esf_i'];
            $myJSON[2]= $array1[$i]['cil_d'];
          //  alert(decimal(myObj[i]['cil_i']));
            $myJSON[3]= $array1[$i]['cil_i'];
            $myJSON[4]= $array1[$i]['eje_d'];
            $myJSON[5]= $array1[$i]['eje_i'];
        }   
        if($array1[$i]['cod_med_generica'] == 4){
            $myJSON2[0]= $array1[$i]['esf_d'];
            $myJSON2[1]= $array1[$i]['esf_i'];
            $myJSON2[2]= $array1[$i]['cil_d'];
          //  alert(decimal(myObj[i]['cil_i']));
            $myJSON2[3]= $array1[$i]['cil_i'];
            $myJSON2[4]= $array1[$i]['eje_d'];
            $myJSON2[5]= $array1[$i]['eje_i'];
        } 
    }

  if(count($myJSON) > 0 ){
    
    for($i=0;$i< count($myJSON);$i++){
        if( $i < 4 ){
          if(!(floatval($myJSON[$i]) < 0))
             $myJSON[$i]='+'.$myJSON[$i];
        }  
    }
  }
  if(count($myJSON2) > 0){     
    for($i=0;$i< count($myJSON2);$i++){
        if( $i < 4 ){
         if(!(floatval($myJSON2[$i])< 0))   
          $myJSON2[$i]='+'.$myJSON2[$i]; 
        }
   
        
    }
  }  

}
 // $myJSON2[5]=$myJSON2[5].'°'; 
if(count($array1)>0)
 report2($myJSON,$myJSON2,$lentes,$rcDisPup,$rlDisPup,$nv,$arrayoptica,$arrreceta,$array1);
else {
  echo "SIN REGISTROS PARA IMPRIMIR";
}
function report2($myJSON,$myJSON2,$lentes,$rcDisPup,$rlDisPup,$nv,  $arrayoptica,$arrreceta,$array1){
    $id_agenda = $_GET['id_agenda'];
    //$nodo= cls_paciente();
    //$nodo->get
    $nodo = new paciente();
    $nodo->setid_agenda($id_agenda);
    $nodo->getpacientexagenda();
    $nombre= $nodo->arrobtPaciente[0]['nombre_paciente']." ".$nodo->arrobtPaciente[0]['apellido_ppaciente']." ".$nodo->arrobtPaciente[0]['apellido_mpaciente'];
    $nombre = strtoupper($nombre);    
    
    $pdf = new PDF('P', 'mm', 'Letter');
   //  $pdf = new PDF('P', 'mm', array(212,139));
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->SetFont('Arial', 'B', 14);
   //$pdf->FECHATitle('', '' . '');
   $pdf->Cell(0, 5,'' ,0,0,'C');
     $pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();//$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
     $pdf->Ln();
    $pdf->Cell(0, 4,utf8_decode($nombre) ,0,0,'C');
     $pdf->Ln();  $pdf->Ln();
   // $pdf->Ln();  $pdf->Ln();    
//$pdf->Text(90, 50, 'Print me!');
 imprimirrpt($myJSON,$myJSON2,$lentes,$rcDisPup,$rlDisPup,$nv,  $pdf,$arrayoptica,$arrreceta,$array1);
//Open the print dialog
//$pdf->AutoPrint(true);
$pdf->Output(); 
//$pdf->closewin();
}

//report($myJSON,$myJSON2,$lentes,$rcDisPup,$rlDisPup,$nv, $total_servicio);

 
  //    imprimirrpt($myJSON,$myJSON2,$lentes,$rcDisPup,$rlDisPup,$nv,  $pdf,$arrayoptica,$arrreceta,$array1);
function imprimirrpt($arr, $arr2,$lentes,$rcDisPup,$rlDisPup,$nv, $pdf,$arrayoptica,$arrreceta,$array1) {

    $w = array(40, 20, 20, 20, 20, 20);
    $pdf->Cell($w[0], 20, "", 0, 0, 'C');
    
  if($arrayoptica[0]['receta_lejos'])  {
     $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "LEJOS", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "ESF", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "CIF", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "EJE", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "OD:", 0, 0, 'C');
     $pdf->SetFont('Arial', '', 10);
    $pdf->Cell($w[1], 6, ($arr[0]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, ($arr[2]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[4].utf8_decode('°'), 0, 0, 'C');  
    $pdf->Ln();
     $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[0], 6, "", 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "OI:", 0, 0, 'C');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell($w[1], 6, ($arr[1]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, ($arr[3]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr[5].utf8_decode('°'), 0, 0, 'C');
  }
    $pdf->Ln();
  //  $pdf->Ln();

    $pdf->Cell($w[0], 6, "", 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
 if($arrayoptica[0]['receta_cerca'])  {  
    $pdf->Cell($w[1], 6, "CERCA", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "ESF", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "CIL", 0, 0, 'C');
    $pdf->Cell($w[1], 6, "EJE", 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "OD:", 0, 0, 'C');
     $pdf->SetFont('Arial', '', 10);
    $pdf->Cell($w[1], 6, ($arr2[0]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, ($arr2[2]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr2[4].utf8_decode('°'), 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'C');
        // $pdf->SetFont('Arial', 'B', 12);
         $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "OI:", 0, 0, 'C');
     $pdf->SetFont('Arial', '', 10);
    $pdf->Cell($w[1], 6, ($arr2[1]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, ($arr2[3]), 0, 0, 'C');
    $pdf->Cell($w[1], 6, $arr2[5].utf8_decode('°'), 0, 0, 'C');
 }
 $pdf->Ln();
 if($arrayoptica[0]['receta_intermedia'])  {
   $pdf->Cell($w[0], 6, "", 0, 0, 'C');
   $pdf->Cell($w[0], 6, "", 0, 0, 'C');
//   $pdf->Cell($w[0], 6, "", 0, 0, 'C');
  // $pdf->Cell($w[0], 6, "", 0, 0, 'C');
    $pdf->Cell($w[0], 6, "", 0, 0, 'C');
      $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell($w[2], 6, "(INTERMEDIA)", 0, 0, 'C');
 }

 
  //  $pdf->Ln();
    $pdf->Ln();
    $contacto="";
     $contacto1="";
       
    $optico="";
    $optico1="";
    $me = new cls_lente();
    $me->selectdata();
    $segmento = count($lentes)/2;
    for($i=0; $i < count($lentes);$i++){
     if(intval($lentes[$i])){     
        if($i< $segmento-3){    
    
             if($me->arrlente[$i-1]['tipo_lente']==1)
                    $optico= $optico. "-".utf8_decode($me->arrlente[$i-1]['nombre_lente']) ;
               else 
                    $contacto= $contacto. "-".utf8_decode($me->arrlente[$i-1]['nombre_lente']); 
           
      
         }else   {    
    
             if($me->arrlente[$i-1]['tipo_lente']==1)
                    $optico1= $optico1. "-".$me->arrlente[$i-1]['nombre_lente'] ;
               else 
                  $contacto1= $contacto1. "-".$me->arrlente[$i-1]['nombre_lente']; 
        
        } 
      }
    }
    if($optico !== '' || $contacto !== ''){ 
 ;
    }
    
   if($arrayoptica[0]['lente_optico'] && $optico !== '') { 
      $pdf->Cell($w[0], 6, "", 0, 0, 'L');
     $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "LENTES OPTICOS", 0, 0, 'L');
   $pdf->Ln();
   // $i = 0;   
        $pdf->SetFont('Arial', '', 10);   
      $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[0], 6, $optico, 0, 0, 'L');
   $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[0], 6, $optico1, 0, 0, 'L');
   //$pdf->Ln();
   $pdf->Ln(); //  $pdf->Ln();   $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
// $pdf->Cell($w[0], 6, "Distancia Pupilar", 0, 0, 'L');
 //   $arrCtt;
     $pdf->Ln();
  
   }
    if($arrayoptica[0]['lente_contacto'] && $contacto1 !== '') { 
   $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[0], 6, "LENTES DE CONTACTO", 0, 0, 'L');
    $pdf->Ln();
    $i = 0;   
       
        $pdf->SetFont('Arial', '', 10);  
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');    
    $pdf->Cell($w[0], 6, $contacto1, 0, 0, 'L');
    //$pdf->Cell($w[1], 6, $contacto1, 0, 0, 'L');
   $pdf->Ln();
   //$pdf->Ln();
   }
   
if(count($arrreceta) > 0){   
   if(intval($arrreceta[0]['rlvertex']) ==12 && intval($arrreceta[0]['rcvertex']) ==22){ 
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
       $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "DP", 0, 0, 'L');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
        $pdf->SetFont('Arial', '', 10);   
    $pdf->Cell($w[1], 6, "LEJOS/CERCA:".$arrreceta[0]['rldp'].'/'.$arrreceta[0]['rcdp'], 0, 0, 'L');
   }
    if(intval($arrreceta[0]['rlvertex']) ==1 && intval($arrreceta[0]['rcvertex']) ==1){ 
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
       $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "DP", 0, 0, 'L');
    $pdf->Ln();
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
        $pdf->SetFont('Arial', '', 10);   
    $pdf->Cell($w[1], 6, "LEJOS/CERCA:".$arrreceta[0]['rldp'].'/'.$arrreceta[0]['rcdp'], 0, 0, 'L');
   }
    //$pdf->Cell($w[1], 6, $rlDisPup, 0, 0, 'C');
    $pdf->Ln();//$pdf->Ln();
 
    
 if(count($nv) > 0 && intval($arrreceta[0]['rlvertex']) ==11 && intval($arrreceta[0]['rcvertex']) ==21){ 
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
     $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "DNV", 0, 0, 'L');
    $pdf->Ln(); $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "             LEJOS/CERCA", 0, 0, 'C');
    $pdf->Ln(); $pdf->Cell($w[0], 6, "", 0, 0, 'L');
        $pdf->SetFont('Arial', '', 10);   
    $pdf->Cell($w[1], 6, "OD:  ".$nv[0]."/".$nv[1], 0, 0, 'L');
    $pdf->Ln(); $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "OI:    ".$nv[2]."/".$nv[3], 0, 0, 'L');
 }
  if(count($nv) > 0 && intval($arrreceta[0]['rlvertex']) ==1 && intval($arrreceta[0]['rcvertex']) ==1){ 
    $pdf->Cell($w[0], 6, "", 0, 0, 'L');
     $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($w[1], 6, "DNV", 0, 0, 'L');
    $pdf->Ln(); $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "             LEJOS/CERCA", 0, 0, 'C');
    $pdf->Ln(); $pdf->Cell($w[0], 6, "", 0, 0, 'L');
        $pdf->SetFont('Arial', '', 10);   
    $pdf->Cell($w[1], 6, "OD:  ".$nv[0]."/".$nv[1], 0, 0, 'L');
    $pdf->Ln(); $pdf->Cell($w[0], 6, "", 0, 0, 'L');
    $pdf->Cell($w[1], 6, "OI:    ".$nv[2]."/".$nv[3], 0, 0, 'L');
 }
 
}  
}?> 