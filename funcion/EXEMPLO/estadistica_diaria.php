<?php
//require_once('../clases/cls_prestacion.php');
//require_once('../clases/cls_pago.php');
require_once('../clases/cls_agenda.php');
require_once('../servicio/funciones_adicionales.php');
 
estadistica();
function estadistica(){
$fecha = $_POST['fecha_atencion_in'];
if($_POST['fecha_atencion_fin'] != '')
  $fecha_fin= $_POST['fecha_atencion_fin'];
else 
  $fecha_fin= '';  

$radio_fecha=$_POST['radio_fecha_atencion'];

 $hora1=  date('H:m'); 
  $est = new agenda();
  $est->setfecha_atencion($fecha);
  $est->setfecha_atencion_fin($fecha_fin);
  $est->setformato_fecha($radio_fecha);
  $est->estadistica();
  if(count($est->arrest) > 0){
   for($j=0; $j<9;$j++){
         $totales[$j]=0;
          $totales1[$j]=0;
          $totales2[$j]=0;
          $totales3[$j]=0;
      }
   for($i=0; $i<count($est->arrest);$i++){
      for($j=0; $j<10;$j++){
         $arreglo[$i][$j]=0;
         $arreglo1[$i][$j]=0;
         $arreglo2[$i][$j]=0;
          $arreglo3[$i][$j]=0;
     
      }
    }  
     
 
 
  for($i=0; $i< count($est->arrest);$i++){
       $arreglo[$i]['fecha_atencion'] = $est->arrest[$i]['fecha_atencion'];
  
    } 
  for($i=0; $i< count($arreglo);$i++){
    for($j=0; $j< count($est->arrestadistica);$j++){
       $x=intval($est->arrestadistica[$j]['tipo_pago']); 
          
      if($arreglo[$i]['fecha_atencion'] == $est->arrestadistica[$j]['fecha_atencion']) {
   //       echo $est->arrestadistica[$j]['n_agendado'].'<br>';
        $arreglo[$i]['id_agenda']= $est->arrestadistica[$j]['id_agenda'];
       $arreglo[$i]['fecha_atencion']= $est->arrestadistica[$j]['fecha_atencion'];
       
       if(intval($est->arrestadistica[$j]['prestacion']) == 1)
        $arreglo[$i][$x]=$est->arrestadistica[$j]['n_agendado'];
       else if(intval($est->arrestadistica[$j]['prestacion']) == 2)
        $arreglo1[$i][$x]=$est->arrestadistica[$j]['n_agendado'];
       else if(intval($est->arrestadistica[$j]['prestacion']) == 4)
        $arreglo2[$i][$x]=$est->arrestadistica[$j]['n_agendado'];
       else if(intval($est->arrestadistica[$j]['prestacion']) == 5)
        $arreglo3[$i][$x]=$est->arrestadistica[$j]['n_agendado'];
       else if(intval($est->arrestadistica[$j]['prestacion']) == 3)
          $arreglo[$i][$x]=$est->arrestadistica[$j]['n_agendado']; 
      }  
    }
  }     
      
    ?>  
 <div class="col-12 col-sm-12 col-lg-12" style="height: 90%;overflow-y: auto;overflow-x: auto;" >
     <table id="Test" class="table table-condensed table-sm small" style=""   >
        <thead >   
          <tr >
            <td>      
            <th colspan="8" title="Fonasa" style=" width: auto;text-align: center;background-color:#ADD8E6; ">CONSULTA</th>     </td>
            
            <td><th colspan="2" title="Urgencia" style=" width: auto;text-align: center; " ><font color="red">URG</font></th>     </td>
            <td><th colspan="6" title="Examen" style=" width: auto;text-align: center;background-color:#ADD8E6; ">      EXAMENES</th>     </td>
            
            <td><th colspan="1" title="Control" style=" width: auto;text-align: center; ">CL.</th>      
         <!--  <th colspan="1" title="Control" ></th>     </td>-->
          
          </tr>    
          <tr class="ajusteth" >
            <td><?echo "Hora:".$hora1;?>      
            <th colspan="4" title="Fonasa" style="    background-color:#ADD8E6;">Fonasa</th>     </td>
             <th colspan="1" title="Isapre" style="   background-color:#ADD8E6;">TF</th> 
            <th colspan="2" title="Particular" style="   background-color:#ADD8E6;">Part.</th>     
            <th colspan="1" title="Isapre" style="   background-color:#ADD8E6;">Is.</th> 
            
            <td><th colspan="2" title="Urgencia" style="   "></th>     </td>
            <td><th colspan="3" title="Examen" style="   background-color:#ADD8E6;">_Efectivo_</th>
            <th colspan="3" title="Examen" style=" width: auto;background-color:#ADD8E6; ">CompraA</th>     </td>
            <td>      
            <th colspan="1" title="Sin costo" style="  "></th>     </td>
          
          </tr>    
          <tr  class="ajusteth" >
              <td style=" height: 88px;">    
                <strong>Fecha</strong>   
     
              <th class="verticalText"  style="" title="Fonasa Papel" >Papel</th>   
                <th class="verticalText"  style="" title="Fonasa Front">Front</th>
                <th class="verticalText"  style="" title="Fonasa Web">Web</th>
                <th class="verticalText"  style="" title="Fonasa Voucher">Voucher</th>
                <th class="verticalText"   title="Sub Total Fonasa" style="background-color:#E9967A;">Total_Fonasa</th>
                 
                <th class="verticalText"  title="Particular efectivo" ><font color="blue">Efectivo</font></th>   
                <th class="verticalText"  title="Particular compra Aqui"><font color="blue">CA</font></th>
         
                <th class="verticalText"  title="Bono Isapre">Bono</th>   
              </td>  
            
            <td>    
                <th class="verticalText"  title="Urgencia efectivo"><font color="blue">Efectivo</font></th>   
                <th class="verticalText"  title="Urgencia compra Aqui"><font color="blue">CA</font></th>
                
              
            </td>  
             <td>    
                <th class="verticalText"  title="Examen Retinografía/ efectivo"><font color="blue">Retinografía</font></th>   
                <th class="verticalText"  title="Examen C.Presión/ efectivo"><font color="blue">C.Presión</font></th>
                <th class="verticalText"  title="Total Examen efectivo" style="background-color:#E9967A;">Total_efectivo</th>
                
              
                <th class="verticalText"  title="Examen Retinografía/ CompraAqui"><font color="blue">Retinografía</font></th>   
                <th class="verticalText"  title="Examen C.Presión/ CompraAqui"><font color="blue">C.Presión</font></th>
                <th class="verticalText"  title="Total Examen CompraAqui" style="background-color:#E9967A;">Total_CA</th>
                
            </td> 
            
            <td>    
                <th class="verticalText"  title="Control sin costo">Sin_Costo</th>
            </td>
            
          </tr>
<!--INCIO TOTALES -->
<?    for($i=0; $i< count($arreglo);$i++){
         for($j=1; $j<9;$j++){
            $totales[$j]+= intval($arreglo[$i][$j]);
            if($j<5){
             $arreglo[$i][0]+= intval($arreglo[$i][$j]);
             $totales[0]+= intval($arreglo[$i][$j]);
            } 
         }
      }
      for($i=0; $i< count($arreglo1);$i++){
         for($j=1; $j<9;$j++){
            $totales1[$j]+= intval($arreglo1[$i][$j]);
          
         }
      }
      for($i=0; $i< count($arreglo2);$i++){
         for($j=1; $j<9;$j++){
            $totales2[$j]+= intval($arreglo2[$i][$j]);
              if($j<7){
                $arreglo2[$i][0]+= intval($arreglo2[$i][$j]);
                $totales2[0]+= intval($arreglo2[$i][$j]);
              }
         }
      }
      for($i=0; $i< count($arreglo3);$i++){
         for($j=1; $j<9;$j++){
            $totales2[$j]+= intval($arreglo3[$i][$j]);
              if($j<7){
                $arreglo3[$i][0]+= intval($arreglo3[$i][$j]);
                $totales3[0]+= intval($arreglo3[$i][$j]);
              }  
          
         }
      }
?>
<tr  class="cuerpo">
     <td>    
         <p ><strong>TOTAL</strong></p>  
       
        <td style="font-weight: bold;"><? echo $totales[1];?></td>   
        <td style="font-weight: bold;"><? echo $totales[2];?></td>
        <td style="font-weight: bold;"><? echo $totales[3];?></td>
        <td style="font-weight: bold;"><? echo $totales[4];?></td>
        <td style="font-weight: bold; " ><? echo $totales[0];?></td>
     
        <td style="font-weight: bold;"><? echo $totales[5];?></td>   
        <td style="font-weight: bold;"><? echo $totales[6];?></td>
        
        <td style="font-weight: bold;"><? echo $totales[7];?></td>
     </td>  
     <td>    
           <td style="font-weight: bold;"><? echo $totales1[5];?></td>   
           <td style="font-weight: bold;"><? echo $totales1[6];?></td>
        
        
     </td>  
      <td>    
         <td style="font-weight: bold;"><? echo $totales2[5];?></td>   
         <td style="font-weight: bold;"><? echo $totales2[6];?></td>
         <td style="font-weight: bold;"><? echo $totales2[0];?></td>
        
         
         <td style="font-weight: bold;"><? echo $totales3[5];?></td>   
         <td style="font-weight: bold;"><? echo $totales3[6];?></td>
         <td style="font-weight: bold;"><? echo $totales3[0];?></td>
        
     </td> 
      <td>    
        
        <td style="font-weight: bold;"><? echo $totales[8];?></td>
     </td> 
    </tr>
 <!--FIN TOTALES -->   
        </thead> 
        <tbody class="table-bordered small " style="height: 50%;overflow-y: scroll;"   >  

<?
   
 
 
  
  for($i=0; $i< count($arreglo);$i++){
      $fecha = new DateTime($arreglo[$i]['fecha_atencion']);
      $fecha = $fecha->format('d-m-y');
      $dia = ImprimirFechadia($arreglo[$i]['fecha_atencion']);
      $dia = $dia.','.$fecha;
     // $nodo->arrprestacion[$i]['id_prestacion'];
      if($arreglo[$i]['id_agenda'] == null){
         // echo "0";
         ?>
    <tr  class="cuerpo">
     <td>    
         <p ><strong><?echo $dia;?></strong></p>  
       
        <td ><? echo "0";?></td>   
        <td ><? echo "0";?></td>
        <td ><? echo "0";?></td>
        <td ><? echo "0";?></td>
        <td style="font-weight: bold;" ><? echo "0";?></td>
     
        <td ><? echo "0";?></td>   
        <td ><? echo "0";?></td>
        
        
       <td ><? echo "0";?></td>
     </td>  
     <td>    
        <td ><? echo "0";?></td>   
        <td ><? echo "0";?></td>
        
        
     </td>  
      <td>    
        <td ><? echo "0";?></td>   
        <td ><? echo "0";?></td>
         <td ><? echo "0";?></td>
        
      
        <td ><? echo "0";?></td>   
        <td ><? echo "0";?></td>
         <td ><? echo "0";?></td>
        
     </td> 
      <td>    
        
        <td ><? echo "0";?></td>
     </td> 
    </tr>
      
         <? 
      
      }else{
           
           
         
          ?>
    <tr class="cuerpo">
        <td>    
            <p style="font-size: x-small;"><strong><?echo $dia;?></strong></p> 
        
            <td ><? echo $arreglo[$i][1];?></td>   
            <td ><? echo $arreglo[$i][2];?></td>
            <td ><? echo $arreglo[$i][3];?></td>
            <td ><? echo $arreglo[$i][4];?></td>
            <td style="font-weight: bold; background-color: #E9967A;" ><? echo $arreglo[$i][0];?></td>
        
            <td ><font color="blue"><? echo $arreglo[$i][5];?></font></td>   
             <td ><font color="blue"><? echo $arreglo[$i][6];?></font></td>
             
            <td ><? echo $arreglo[$i][7];?></td>
        </td>  
         <td>    
             <td ><? echo $arreglo1[$i][5];?></td>   
             <td ><? echo $arreglo1[$i][6];?></td>
             
        
        </td>  
         <td>    
             <td ><? echo $arreglo2[$i][5];?></td>   
             <td ><? echo $arreglo2[$i][6];?></td>
             <td style="font-weight: bold; background-color: #E9967A;" ><? echo $arreglo2[$i][0];?></td>
        
        
             <td ><? echo $arreglo3[$i][5];?></td>   
             <td ><? echo $arreglo3[$i][6];?></td>
             <td style="font-weight: bold; background-color: #E9967A;" ><? echo $arreglo3[$i][0];?></td>
        
        </td>
        <td>    
        
            <td ><? echo $arreglo[$i][8];?></td>
         </td> 
     
        </tr>
    
     <? }
         // echo '<br>';
  }  
    
 ?>
  <!-- totales-->
        
           
  </tbody>   
    </table>          
 </div>      
<?
  }else 
      echo "Sin Resultados...";
      }

