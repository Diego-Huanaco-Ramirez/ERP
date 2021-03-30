<?php
require_once('../clases/cls_web_canasta.php');
require_once('../clases/cls_proc_equivalencia_unidad.php');
require_once('../clases/cls_telas_colores.php');
require_once('../clases/cls_proc_marca.php');
require_once('../clases/cls_valorizado.php');
require_once('../clases/cls_proc_producto.php');
require_once('../clases/cls_proc_categoria_producto.php');
require_once('../servicio/funciones_adicionales.php');

if($_POST['funcion'] == 'selcategoria')
   selcategoria();
if($_POST['funcion'] == 'insertcategoria')
   insertcategoria();

if($_POST['funcion'] == 'selgnralcategoria')
   selgnralcategoria();
if($_POST['funcion'] == 'insertproducto')
   insertproducto(); 
if($_POST['funcion'] == 'eliminarcategoria')
   eliminarcategoria(); 
if($_POST['funcion'] == 'editarcategoria')
   editarcategoria(); 
if($_POST['funcion'] == 'insertvalores')
   insertvalores(); 
if($_POST['funcion'] == 'listadevalores')
   listadevalores(); 
if($_POST['funcion'] == 'selarbolcat')
    selarbolcat();
if($_POST['funcion'] == 'eliminaproducto')
    eliminaproducto();
if($_POST['funcion'] == 'insertmarca')
    insertmarca();
if($_POST['funcion'] == 'selmarca')
    selmarca();
if($_POST['funcion'] == 'updatemarca')
    updatemarca();
if($_POST['funcion'] == 'deletemarca')
    deletemarca();
if($_POST['funcion'] == 'insertcolor')
    insertcolor();
if($_POST['funcion'] == 'selcolor')
    selcolor();
if($_POST['funcion'] == 'updatecolor')
    updatecolor();
if($_POST['funcion'] == 'deletecolor')
    deletecolor();
if($_POST['funcion'] == 'insertprod_equiv')
    insertprod_equiv();
if($_POST['funcion'] == 'selprod_equiv')
    selprod_equiv();
if($_POST['funcion'] == 'updateprod_equiv')
    updateprod_equiv();
if($_POST['funcion'] == 'deleteprod_equiv')
    deleteprod_equiv();
if($_POST['funcion'] == 'selectprod_equiv')
    selectprod_equiv();

if($_POST['funcion'] == 'insertasocprod_equiv')
    insertasocprod_equiv('');
 
if($_POST['funcion'] == 'updateasocprod_equiv')
    updateasocprod_equiv();
if($_POST['funcion'] == 'deleteasocprod_equiv')
    deleteasocprod_equiv('');

if($_POST['funcion'] == 'insertcatprod_equiv')
    insertcatprod_equiv();

if($_POST['funcion'] == 'deletecatprod_equiv')
    deletecatprod_equiv();

if($_POST['funcion'] == 'contacto')
    contacto();
if($_POST['funcion'] == 'insertcanasta')
    insertcanasta();
if($_POST['funcion'] == 'insertmcanasta')
    insertmcanasta();
if($_POST['funcion'] == 'cargarcanasta')
    cargarcanasta();

function cargarcanasta(){
    $me = new cls_web_canasta();
    $me->setcanasta_rut($_POST['rut']);
    $me->selecdata();
    if(count($me->arrcanasta) > 0){
         $arreglo = $me->arrcanasta;
        
         echo json_encode($arreglo);
    }else 
        echo 'null';
}



function insertmcanasta(){
    $me = new cls_web_canasta();
    $arrayproductos = json_decode($_POST['myJSON1'], false); 
        if(count($arrayproductos ) > 0){
           ;// $lente->delete();
            for($i=0; $i < count($arrayproductos);$i++){
                $me->setcanasta_codigo_prod($arrayproductos[$i][0]);
                $me->setcanasta_cantidad_prod($arrayproductos[$i][1]);
                $me->setcanasta_fecha($arrayproductos[$i][4]);
                $me->setcanasta_hora($arrayproductos[$i][5]);
                $me->setcanasta_estado(1);
                $me->setcanasta_rut($_POST['rut']);
                $me->setcanasta_precio($arrayproductos[$i][3]);
                $me->insert();
           }
        }
}
function insertcanasta(){
    $me = new cls_web_canasta();
    $me->setcanasta_codigo_prod($_POST['codigo_producto']);
    $me->setcanasta_cantidad_prod($_POST['cantidad_producto']);
    $me->setcanasta_fecha(date('Y-m-d'));
    $me->setcanasta_hora(date('h:m:s'));
    $me->setcanasta_estado(1);
    $me->setcanasta_rut($_POST['rut']);
    $me->setcanasta_precio($_POST['precio_producto']);
    $me->insert();
}

function contacto(){
     mailrsva();
}
function mailrsva(){
      
 
    
//   $nombre =  $_POST['nombre'];
   $email =  'alexisjmp@gmail.com';
  
    
 
 // $email_paciente='alexisjmp@gmail.com';
 
  $msg=       '<div style="border:1px solid #CCC; padding:20px; margin:auto; font-family:Arial, Helvetica, sans-serif"> <h1 style="background-color:#80aaff; color:white; text-align:center">Centro medico Vermontt</h1>  '
                . '<p>Estimado paciente '."".',</p><br><p>&nbsp;&nbsp;Su reserva de hora  ha sido agendada  en nuestro Centro medico.</p><br>'
                . '<address>
Especialista : '."".'<br>
Hora de atención:<b>'."".'</b><br> 
Fecha de atención:<b> '."".'</b><br> 
Dirección: Sotomayor con Luis Uribe N.º 100, Torre Capital Business, piso 10, oficina 1001 en Iquique (Frente a la Caleta Riquelme).
</address><br>
<p><b>Nota</b>: 48 horas antes a su atención nos comunicaremos con usted para confirmar su reserva.<p>
        </div>';
  $msg =  $_POST['mensaje'];
   if($email != ""){
        $to = $email;
//sender
        $from = $_POST['email'];
        $fromName = $_POST['nombre'];;
//email subject
        $subject = $_POST['asunto'];
//attachment file path
       $file = "archivo.ics";
//email body content
        $htmlContent = $msg;
//header for sender info
        $headers = "From: $fromName"." <".$from.">";
//boundary 
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
        if(!empty($file) > 0){
            if(is_file($file)){
                $message .= "--{$mime_boundary}\n";
             //   $fp =    @fopen($file,"rb");
              //  $data =  @fread($fp,filesize($file));

           //  @fclose($fp);
           //  $data = chunk_split(base64_encode($data));
             $message .= "Content-Type: application/octet-stream;";
        /*     $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
            "Content-Description: ".basename($file)."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";*/
            }
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;

//send email
        $mail = @mail($to, $subject, $message, $headers, $returnpath); 

//email sending status
    //     echo $mail?"<h1>Mail sent.</h1>":"<h1>Mail sending failed.</h1>";
       
    }     
}
function deletecatprod_equiv(){
    $nodo = new cls_proc_producto();
    $nodo->setcat_id(intval($_POST['codigo']));
    $nodo->selectdataxcat();
    if(count($nodo->arrproducto) > 0){
      for($i= 0; $i < count($nodo->arrproducto);$i++){
          deleteasocprod_equiv($nodo->arrproducto[$i]['prod_codigo']);
      }
      echo "1";
    }else
        echo "0";
    
}

function insertcatprod_equiv(){
    $nodo = new cls_proc_producto();
    $nodo->setcat_id(intval($_POST['codigo']));
    $nodo->selectdataxcat();
    if(count($nodo->arrproducto) > 0){
      for($i= 0; $i < count($nodo->arrproducto);$i++){
          insertasocprod_equiv($nodo->arrproducto[$i]['prod_codigo']);
      }
      echo "1";
    }else
        echo "0";
    
}

function deleteasocprod_equiv($codigo){
    $me = new cls_proc_equivalencia_unidad();
    $me->setprod_equiv_id($_POST['id']);
     if($codigo == '')
       $me->setprod_codigo($_POST['codigo']);
     else
       $me->setprod_codigo($codigo);
   
    $me->delete_equivalencia_prod();
       echo "1";
    
}
function insertasocprod_equiv($codigo){
    $me = new cls_proc_equivalencia_unidad();
    $me->setprod_equiv_id($_POST['id']);
    if($codigo == '')
       $me->setprod_codigo($_POST['codigo']);
    else
       $me->setprod_codigo($codigo);
    $me->selectdataasoc();
    if(count($me->arrasoc) == 0){
      $data= $me->insert_equivalencia_prod();
        echo "1";
    }else
      echo "33";
}
function updateasocprod_equiv(){
    
}

function selectprod_equiv(){
    $me = new cls_proc_equivalencia_unidad();
    $me->setprod_equiv_id($_POST['id']);
    $me->getdataxid();
        $data[0]['id'] = $me->arrprod_equiv[0]['prod_equiv_id']; 
        $data[0]['nombre'] = $me->arrprod_equiv[0]['prod_equiv_nombre']; 
        $data[0]['descripcion'] = $me->arrprod_equiv[0]['prod_equiv_descripcion'];
        $data[0]['numero'] = $me->arrprod_equiv[0]['prod_equiv_valor']; 
        $data[0]['sel'] = $me->arrprod_equiv[0]['prod_equiv_unidad'];
    echo json_encode($data);  
}
function deleteprod_equiv(){
    $nodo = new cls_proc_equivalencia_unidad();
  //  $nodo->setprod_equiv_nombre($_POST['prod_equiv_nombre']);
    $nodo->setprod_equiv_id(intval($_POST['id']));
     $nodo->delete();
    echo "1";
}
function buscaprod_equivnombre(){
    $me = new cls_proc_equivalencia_unidad();
    $me->setprod_equiv_nombre($_POST['nombre']);
   //  $me->setprod_servicio(1);
    $me->buscadatanombre();
    if(count($me->arrprod_equiv) > 0)
      return 1;
    else 
       return 0;
      
    
}
function updateprod_equiv(){
    $nodo = new cls_proc_equivalencia_unidad();
    $nodo->setprod_equiv_nombre($_POST['nombre']);
    $nodo->setprod_equiv_id($_POST['id']);
       $nodo->setprod_equiv_descripcion($_POST['descripcion']);
    $nodo->setprod_equiv_valor($_POST['numero']);
    $nodo->setprod_equiv_unidad($_POST['sel']);
    $nodo->editar();
}
function selprod_equiv(){
    $me = new cls_proc_equivalencia_unidad();
  //  $me->setprod_codigo($_POST['prod_codigo']);
  //  $me->setprod_servicio(1);
    $me->selectdata();
    
        echo json_encode($me->arrprod_equiv);
    
}
function insertprod_equiv(){
    $nodo = new cls_proc_equivalencia_unidad();
    $nodo->setprod_equiv_nombre($_POST['nombre']);
    $nodo->setprod_equiv_descripcion($_POST['descripcion']);
    $nodo->setprod_equiv_valor($_POST['numero']);
    $nodo->setprod_equiv_unidad($_POST['sel']);
     $nodo->buscadatanombre();
    if(count($nodo->arrprod_equiv) == 0)
       $nodo->insert();
    else 
       $nodo->editar();
}
//---------------------------------color-----------------------------
function deletecolor(){
    $nodo = new cls_telas_colores();
  //  $nodo->setcolor_nombre($_POST['color_nombre']);
    $nodo->setcolor_id(intval($_POST['id']));
     $nodo->delete();
    echo "1";
}
function buscacolornombre(){
    $me = new cls_telas_colores();
    $me->setcolor_nombre($_POST['nombre']);
   //  $me->setprod_servicio(1);
    $me->buscadatanombre();
    if(count($me->arrcolor) > 0)
      return 1;
    else 
       return 0;
      
    
}
function updatecolor(){
    $nodo = new cls_telas_colores();
    $nodo->setcolor_nombre($_POST['nombre']);
    $nodo->setcolor_id($_POST['id']);
    $nodo->editar();
}
function selcolor(){
    $me = new cls_telas_colores();
  //  $me->setprod_codigo($_POST['prod_codigo']);
  //  $me->setprod_servicio(1);
    $me->selectdata();
    
        echo json_encode($me->arrcolor);
    
}
function insertcolor(){
    $nodo = new cls_telas_colores();
    $nodo->setcolor_nombre($_POST['nombre']);
     $nodo->buscadatanombre();
    if(count($nodo->arrcolor) == 0)
       $nodo->insert();
    else 
       $nodo->editar();
}
//---------------------------------marca-----------------------------
function deletemarca(){
    $nodo = new cls_proc_marca();
  //  $nodo->setmarca_nombre($_POST['marca_nombre']);
    $nodo->setmarca_id(intval($_POST['id']));
     $nodo->delete();
    echo "1";
}
function buscamarcanombre(){
    $me = new cls_proc_marca();
    $me->setmarca_nombre($_POST['nombre']);
   //  $me->setprod_servicio(1);
    $me->buscadatanombre();
    if(count($me->arrmarca) > 0)
      return 1;
    else 
       return 0;
      
    
}
function updatemarca(){
    $nodo = new cls_proc_marca();
    $nodo->setmarca_nombre($_POST['nombre']);
    $nodo->setmarca_id($_POST['id']);
    $nodo->editar();
}
function selmarca(){
    $me = new cls_proc_marca();
  //  $me->setprod_codigo($_POST['prod_codigo']);
  //  $me->setprod_servicio(1);
    $me->selectdata();
    
        echo json_encode($me->arrmarca);
    
}
function insertmarca(){
    $nodo = new cls_proc_marca();
    $nodo->setmarca_nombre($_POST['nombre']);
     $nodo->buscadatanombre();
    if(count($nodo->arrmarca) == 0)
       $nodo->insert();
    else 
       $nodo->editar();
}
//------------------------------------------producto----------
function eliminaproducto(){
    $nodo = new cls_proc_producto();
    $nodo->setprod_codigo($_POST['prod_codigo']);
    $nodo->eliminaxcodigo();
}
function listadevalores(){
    $me = new cls_valorizado();
    $me->setprod_codigo($_POST['prod_codigo']);
    $me->setprod_servicio(1);
    $me->selectdata();
    
        echo json_encode($me->arrserv);
    
}
 
function insertvalores(){
    $arreglo = json_decode($_POST['tablavalor'],false);
    $me = new cls_valorizado();
    $me->setprod_codigo('1');
    $me->selectotal();
    $opc = 0;
    if($me->total_serv > 0)
        $opc = 1;
   
    for($i=1 ; $i < count($arreglo);$i++){
       // item + dimension + estado + valor
           $me->setselem_id($arreglo[$i][0]);
        $me->setval_tipo_dimension($arreglo[$i][1]);
        $me->setval_estado($arreglo[$i][2]);
        $me->setval_precio($arreglo[$i][3]);
        if(!$opc)
          $me->insert();
        else 
           $me->updateprecio();
    }
        
}
    

function editarcategoria(){
      $nodo = new cls_proc_categoria_producto();
    
    $nodo->setcat_id($_POST['cat_id']);
    $nodo->setcat_nombre($_POST['cat_nombre']);
    $estado = $nodo->editar();
    if($estado || $estado == '')
      echo "1";
    else 
      echo "0";
}
function eliminarcategoria(){
    $nodo = new cls_proc_categoria_producto();
    
    $nodo->setcat_id($_POST['cat_id']);
    
    $estado = $nodo->delete();
    if($estado || $estado == '')
      echo "1";
    else 
      echo "0";
}
function insertproducto(){
    $nodo = new cls_proc_producto();
    $nodo->setprod_codigo($_POST['prod_codigo']);
    $nodo->setprod_nombre($_POST['prod_nombre']);
  
      $nodo->setprod_precio1(intval($_POST['prod_precio1']));
       $nodo->setprod_precio2(intval($_POST['prod_precio2']));
    
    $nodo->setprod_servicio(intval($_POST['prod_servicio']));
    $nodo->setprod_tipo($_POST['prod_tipo']);
    $nodo->setprod_descripcion($_POST['prod_descripcion']);
    $estado = 0;
    $total=0;
    $totalpcat=0;
    $codigo="";
    if($_POST['prod_codigo'] !== '' && isset($_POST['prod_codigo']) ) // para conocer si esta registrado
         $nodo->totalxproducto(2);
    $update = 0;
   if(intval($nodo->gettotal_producto()) > 0 )
      $update = 1;
    else{
        $nodo->totalxproducto(1);
        $total = $nodo->gettotal_producto();
        $total = $total +1;
        
         
         
         if(intval($_POST['cat_id']) > 0){
               $nodo->setcat_id($_POST['cat_id']);
               $nodo->totalxproducto(3);
               $totalpcat = $nodo->gettotal_producto();
               $totalpcat = $totalpcat +1;
               $codigo = codifica($totalpcat);
         }
    }
    if(!$_POST['prod_servicio']){
       $nodo->setprod_codigobarra($_POST['prod_codigobarra']);
     //  $nodo->setprod_precio1($_POST['prod_precio1']);
      // $nodo->setprod_precio2($_POST['prod_precio2']);
       $nodo->setprod_fabricadozf($_POST['prod_fabricadozf']);
       $nodo->setprod_sist_medida($_POST['prod_codigo']);
       $nodo->setprod_peso_ctrol($_POST['prod_sist_medida']);
       $nodo->setprod_largo($_POST['prod_largo']);
       $nodo->setprod_ancho($_POST['prod_ancho']);
       $nodo->setprod_alto($_POST['prod_alto']);
       $nodo->setprod_estado($_POST['prod_estado']);
       
       if($_POST['lbl_prod_tipo'] == 100){ //comercial
          $nodo->setprod_tipo('100');
     
          
             $nodo->setprod_color($_POST['prod_color']);
          if(!$update)   {
                if( intval($_POST['cat_id']) > 0){
                     $nodo->setprod_codigo($_POST['cat_etiqueta'].$codigo);
                     $nodo->setcat_id($_POST['cat_id']);
                     $estado = $nodo->insert12();
                }else{
                  $nodo->setprod_codigo(strval($total));
                $estado = $nodo->insert11();
                
                }
            
          }else{
             $nodo->setcat_id($_POST['cat_id']);
             $estado = $nodo->updateprod();
          }
       }else  if($_POST['lbl_prod_tipo'] == 200){
          $nodo->setmarca_id($_POST['marca_id']);
          $nodo->setprod_informacionadic($_POST['prod_codigo']);
          $nodo->setprod_codigoarancelario($_POST['prod_codigo']);
          $nodo->setprod_ley18211($_POST['prod_codigo']);
          $nodo->setprod_modelo($_POST['prod_codigo']);
         $estado =  $nodo->insert2();
       }
           
    }else{
     
 
        if($update== 0) {  
                  $nodo->setprod_codigo($total);
            $estado =  $nodo->insert_servicio();
        }else
            $estado =  $nodo->updatexcod();
     
    }
  //  $nodo->setmarca_id('');
 //   $nodo->setprod_descripcion($_POST['prod_descripcion']);
   // $nodo->setprod_codigoarancelario($val);
    if($estado == '')
        echo $nodo->getprod_codigo();
    else
        echo "0";
    
}

function insertcategoria(){

     $nodo = new cls_proc_categoria_producto();
     $nodo->setcat_nombre($_POST['cat_nombre']);
     $nodo->setcat_color($_POST['cat_color']);
     $nodo->setcat_tipo($_POST['cat_tipo']);
         
     
     if(   $_POST['pro_cat_id'] !== '' ){
      $nodo->setpro_cat_id(intval($_POST['pro_cat_id']));
         $nodo->getcatxnombre();
     }else
         $nodo->getcatgeneralxnombre();
       
     $nodo->totalxcat(); //cmabiar ; objtener la ult etique convertir a numero e incrementar
     $cant = 0;
     $cant = $nodo->total_categoria;
     $cant = $cant + 1;
     $nodo->setcat_etiqueta(codifica($cant));
    
     if(!(intval($nodo->arrcat[0]['cat_id']) > 0)){
         $nodo->insert();  echo "1";
     }else 
           echo "0";
   //   echo json_encode($nodo->arrcat);
}

function codifica($etiqueta){
    if(intval($etiqueta) > 0 && intval($etiqueta) < 10){
        $etiqueta = '00'.$etiqueta;
    }else  if(intval($etiqueta) > 9 && intval($etiqueta) < 100){
         $etiqueta = '0'.$etiqueta;
    }else  if(intval($etiqueta) > 99 && intval($etiqueta) < 1000){
        ;
    }
    return  $etiqueta ;
    
}

function selcategoria(){
    
     $nodo = new cls_proc_categoria_producto();
     $nodo->setcat_tipo(intval($_POST['cat_tipo']));
     if($_POST['cat_id'] !== '' && isset($_POST['cat_id'])){
       $nodo->setpro_cat_id(intval($_POST['cat_id']));
  
       $nodo->selectnodos();
     }else
          $nodo->selectgeneral();
     
      echo json_encode($nodo->arrcat);
}
function selarbolcat(){
    
     $nodo = new cls_proc_categoria_producto();
    
     if($_POST['cat_id'] !== '' && isset($_POST['cat_id'])){
        $nodo->setcat_id(intval($_POST['cat_id']));
   //  $nodo->setpro_cat_id(3);
      $nodo->selectarbol();
        echo json_encode($nodo->arrcat);
     } 
    
}
 

?>