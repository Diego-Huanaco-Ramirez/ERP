<?php
function calculaedad($birthDate){
    //$birthDate = "12/17/1983";
  //                17/12/1739
  //explode the date to get month, day and year
 if($birthDate == "00/00/0000")   
     return "NA";
 else{
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
 // echo "Age is:" . $age;
  return $age;
 }
}
function calculaedadmes($birthDate){
    //$birthDate = "12/17/1983";
  //                17/12/1739
  //explode the date to get month, day and year
 if($birthDate == "00/00/0000")   
     return "NA";
 else{
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $meses = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]))) > date("md")
    ? ((date("m") - $birthDate[1]))
    : (date("m") - $birthDate[1]));
 // echo "Age is:" . $age;
  return $meses;
 }
}

function estado($estados){
    
     if($estados == 0)
       $estado = "anulado";
    else if($estados == 1)
        $estado = "pre-ingreso";
    else if($estados == 2)
        $estado= "ingreso";
    else if($estados == 3)
        $estado = "control";
    else if($estados == 4)
        $estado = "alta adm";
    else if($estados == 5)
        $estado = "alta";
    return $estado;
}
function especialista($tipo_especialista)      {
    if($tipo_especialista == 1)
        $especialista = "Psiquiatra";
    else if($tipo_especialista == 2)
        $especialista = "Psicologo";
    else if($tipo_especialista == 3)
        $especialista = "Medico";
    else if($tipo_especialista == 4)
        $especialista = "Triada";
    return $especialista;
} 

function atencion($tipo_atencion)      {
    if($tipo_atencion == 1)
        $atencion = "Ingreso";
    else if($tipo_atencion == 2)
        $atencion = "Control";
    
    return $atencion;
} 
function confirma($confirma)      {
    if($confirma)
        $confirma = "si";
    else 
        $confirma = "no";
    
    return $confirma;
} 
function sexo($confirma)      {
    if($confirma)
        $confirma = "M";
    else 
        $confirma = "F";
    
    return $confirma;
} 
function prestacion($tipo_prestacion)      {
    if($tipo_prestacion == 1){
       $prestacion = "Consulta";
       
    }else if($tipo_prestacion == 2 ){
        $prestacion = "Ugencia";
       
    }else if( $tipo_prestacion == 3){
        $prestacion = "Control";
       
    }else if($tipo_prestacion == 4){
        $prestacion = "Examen";
       
    }             
    return $prestacion;
}

function tipo_pago($tipo_pago)      {
    if($tipo_pago == 1){
       $tipo_pago = "Fonasa B/papel";
       
    }else if($tipo_pago == 2 ){
        $tipo_pago = "Fonasa B/web";
       
    }else if( $tipo_pago == 3){
        $tipo_pago = "Fonasa B/1";
       
    }else if($tipo_pago == 4){
        $tipo_pago = "Fonasa B/2";
       
    }else if($tipo_pago == 5 ){
        $tipo_pago = "P-efectivo";
       
    }else if( $tipo_pago == 6){
        $tipo_pago = "P-CA";
       
    }else if($tipo_pago == 7){
        $tipo_pago = "Isapre";
    }else if($tipo_pago == 8){
        $tipo_pago = "S/costo";
    }    
                    
    return $tipo_pago;
}


function GenerarTabla_old($id,$clase, $sql){
	$arrCampos = obtCamposSQL($sql);
	?>
	<table id="<? echo $id?>" class="<? echo $clase?>"><tr class="cabecera">    
	<?
	for($i=0;$i<count($arrCampos);$i++){
		echo '<td>'.$arrCampos[$i].'</td>';
	}
	?>
	<!--<td>MODIFICAR</td>
    <td>ELIMINAR</td>-->
	</tr>
    <tbody>
    <?
	while($datos = mysql_fetch_array($sql)){
		echo '<tr>';
		for($i=0;$i<count($arrCampos);$i++){
			if($arrCampos[$i] == "PASSWORD")
				echo '<td>'.substr_replace($datos[$i],'*****',0,strlen($datos[$i])).'</td>';
			else
				echo '<td>'.$datos[$i].'</td>';
		}
		echo '
		
		</tr>';
/*		<td align = "center"><img class="btnEdicion" src="../../IMG/layout_edit.png" title="Modificar" /></td>
		<td align = "center"><img class="btnEdicion" src="../../IMG/cross.png" title="Eliminar" /></td>*/
	}
	echo '</tbody></table>';
}




function ComprobarSQL($sql){
	if($sql){
		echo '<div class="msgCorrecto">Operaci&oacute;n realizada correctamente</div>';
	}
	else
		echo '<div class="msgError">Ha ocurrido un error inesperado, por favor reintente.</div>';
	//exit();
}

function obtCamposSQl($sql){
	$ncampos = mysql_num_fields($sql);
	for($i=0;$i<$ncampos;$i++)
		$arrCampos[] = mysql_field_name($sql,$i);
	return $arrCampos;
}
function cambiaf_a_mysql1($fecha){
    ereg( "([0-9]{1,2})-([0-9]{1,2})-([0-9]{2,4})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
    return $lafecha;
}
function cambiaf_a_mysql($fecha){
    ereg( "([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
    return $lafecha;
}
function cambiaf_a_normal($fecha){
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
}
//Convierte fecha de normal a mysql

function ImprimirFechadia($fecha)
    {
    $fecha= strtotime($fecha); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo
    $diasemana=date("w", $fecha);// optiene el n�mero del dia de la semana. El 0 es domingo
       switch ($diasemana)
       {
       case "0":
          $diasemana="Dom";
          break;
       case "1":
          $diasemana="Lun";
          break;
       case "2":
          $diasemana="Mart";
          break;
       case "3":
          $diasemana="Miec";
          break;
       case "4":
          $diasemana="Juev";
          break;
       case "5":
          $diasemana="Vier";
          break;
       case "6":
          $diasemana="Sab";
          break;
       }
   
    return $diasemana; //enviamos la fecha al programa
    } 
	
function ImprimirFechaCompleta($fecha)
    {
    $fecha= strtotime($fecha); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo
    $diasemana=date("w", $fecha);// optiene el n�mero del dia de la semana. El 0 es domingo
       switch ($diasemana)
       {
       case "0":
          $diasemana="Domingo";
          break;
       case "1":
          $diasemana="Lunes";
          break;
       case "2":
          $diasemana="Martes";
          break;
       case "3":
          $diasemana="Mi&eacute;rcoles";
          break;
       case "4":
          $diasemana="Jueves";
          break;
       case "5":
          $diasemana="Viernes";
          break;
       case "6":
          $diasemana="S&aacute;bado";
          break;
       }
    $dia=date("d",$fecha); // d�a del mes en n�mero
    $mes=date("m",$fecha); // n�mero del mes de 01 a 12
       switch($mes)
       {
       case "01":
          $mes="Enero";
          break;
       case "02":
          $mes="Febrero";
          break;
       case "03":
          $mes="Marzo";
          break;
       case "04":
          $mes="Abril";
          break;
       case "05":
          $mes="Mayo";
          break;
       case "06":
          $mes="Junio";
          break;
       case "07":
          $mes="Julio";
          break;
       case "08":
          $mes="Agosto";
          break;
       case "09":
          $mes="Septiembre";
          break;
       case "10":
          $mes="Octubre";
          break;
       case "11":
          $mes="Noviembre";
          break;
       case "12":
          $mes="Diciembre";
          break;
       }
    $ano=date("Y",$fecha); // optenemos el a�o en formato 4 digitos
    $fecha= $diasemana.", ".$dia." de ".$mes." de ".$ano; // unimos el resultado en una unica cadena
    return $fecha; //enviamos la fecha al programa
    } 
	
function obtenerTurno($hora){
	if($hora >= '08:00' and $hora < '16:00') return 'A';
	if($hora >= '16:00' and $hora <= '23:59') return 'B';
	if($hora >= '00:00' and $hora < '08:00') return 'C';
}


function obtenerSaldoOTProducto($ot,$codproducto){
	global $mysql;
	$sql = $mysql->consulta("select cantidad from item_ot where ot = $ot and producto = $codproducto");
	$cant_ot = mysql_fetch_array($sql);
	$cant_ot = $cant_ot[0];
	$sql = $mysql->consulta("select sum(cantidad) from produccion where ot = $ot and producto = $codproducto");
	$cant_ppt = mysql_fetch_array($sql);
	$cant_ppt = $cant_ppt[0];
	return $cant_ot-$cant_ppt;
}

function Numero($num){
	//if(is_float($num))
	$dec = $num - intval($num);
	if($dec > 0) return number_format($num,2,',','.');	
	else return number_format($num,0,',','.');	
	//else
		//return number_format($num,0,',','.');
}
function Numero1($num){
	//if(is_float($num))
	//$dec = $num - intval($num);
	if($num >0 ) return number_format($num,2, '.', '');	
	else return number_format($num,2, '.', '');	
	//else
		//return number_format($num,0,',','.');
}
function Numero0($num){
	//if(is_float($num))
		return number_format($num,0,',','.');	
	//else
		//return number_format($num,0,',','.');
}


function jsEliminarBotonEdicion($id){ //eliminar las columnas Modificar y Eliminar
	?>
	<script>
    	$("#<? echo $id?> tr").each(function(){
			$(this).children("td:contains('MODIFICAR')").remove();
			$(this).children("td:contains('ELIMINAR')").remove();
			$(this).find("img").parent().remove();
		});
    </script>
	<?
}

function ImprimirMensaje($msg, $clase){ //clase: correcto
	//echo '<div class="'.$clase.'">'.$msg.'</div>';
	?>
	<script>
		$("#msgTemp p").html('<? echo $msg?>');
		var x = $("#msgTemp").outerWidth(true);
		var y = $("#msgTemp").outerHeight(true);
		var left = ($(document).width()/2)-(x/2);
		var top = ($(document).height()/2)-(y/2);
		var y = $("#msgTemp").height();
		$("#msgTemp").css({"left": left+"px", "top": top+"px"});
		
		$("#msgTemp").fadeIn();
		setTimeout(
		function(){
			$("#msgTemp").fadeOut();					
		},2000);				   
    </script>
	<?
}

function MostrarMensaje($clase, $msg, $ocultar){ //clases: msg-ok, msg-exclamacion, .error_centrado
	?>
	<div id="msgTemp" class="<? echo $clase?>"><? echo $msg?></div>
    <?
    if($ocultar == false)
		return false;
	?>
    <script>		
    	setTimeout('$("#msgTemp").fadeOut(function(){$("#msgTemp").remove();});',2000);
    </script>
	<?
}

function Ajax($url,$type,$parametros,$id){
	?>
	<script>
    	Ajax("<? echo $url?>","<? echo $type?>","<? echo $parametros?>","<? echo $id?>");
    </script>
	<?
	
}

function CerrarDialog($milisegundos){
	?>
	<script>
    	setTimeout(function(){
			$("#dialog").dialog("close");			
		},<? echo $milisegundos?>);
    </script>
	<?
}

function xNumero($num){
	$num = str_replace('.','',$num);
	$num = str_replace('$','',$num);
	return $num;
}
       

function AbrirPOPUP($ancho,$alto,$id, $pagina, $funcion, $parametros){
	?>
	<script>
    	AbrirPOPUP(<? echo $ancho ?>,<? echo $alto ?>,"<? echo $id ?>", "<? echo $pagina ?>", "<? echo $funcion ?>", "<? echo $parametros ?>");
    </script>
	<?
}


       

function ActivarEnlace($enlace, $clase){
	?>
	<script>
    	$(".<? echo $clase?>").removeClass('<? echo $clase?>');
		$("a[href=<? echo $enlace?>]").addClass('<? echo $clase?>');
    </script>
	<?
}
// no funcino debe estar obsoleta
function elimina_acentos($cadena){
	$tofind = "�����������������������������������������������������";
	$replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
	return(strtr($cadena,$tofind,$replac));
}


       
       
       
function MostrarAccionEnviar($tipo_campo,$id_solicitud, $id_empresa, $estado){
	if($estado!=1)
		return '';
	if($tipo_campo == 'cabecera')
		$tr = '<td>ENVIAR</td>';
	else
		$tr = '<td align="center"><img src="img/enviar.png" title="Enviar Socomat" style="cursor:pointer" onclick="Enviar(\''.$id_solicitud.'\',\''.$id_empresa.'\')" /></td>';
	return $tr;
}

       
       

function select_usuarios($id){
	$us = new Usuario();
	$info_usuario = $us->ListarUsuario();
	$select = "<select id='slUsuario' campo='usuario'>";
	if($id == '')
		$select .= '<option></option>';
	for($i=0;$i<count($info_usuario['id']);$i++){
		if($id == $info_usuario['id'][$i])
			$selected = 'selected = "selected"';
		else $selected = '';
		$select .= '<option value="'.$info_usuario['id'][$i].'">'.ucwords($info_usuario['nombre'][$i]).'</option>';
	}
	
	$select .= '</select>';
	return $select;
}

       
       
       

function select_usuario_por_tipo($tipo, $id){
	$obj = new Usuario();
	$datos = $obj->BuscarTipoUsuario2($tipo);
	$select = "<select>";
	//if($id == '') $select .= '<option></option>';
	for($i=0;$i<count($datos['id']);$i++){
		if($id == $datos['id'][$i])
			$selected = 'selected = "selected"';
		else
			$selected = '';
		$select .= '<option '.$selected.' value="'.$datos['id'][$i].'">'.ucwords($datos['nombre'][$i]).'</option>';
	}
	$select .= '</select>';
	return $select;
}



function seguridad(){	
	if(!isset($_SESSION['usuario']) || $_SESSION['usuario']==""){
       
		session_unset();
		session_destroy();
		?>
		<script>
			alert("Su Sesi\u00f3n <? echo $_SESSION['usuario']?> ha terminado, por favor vuelva identificarse.");
			window.location = "inicio.php";
		</script>
		<?
	}
}

function encoded($ses) 
{    
  $sesencoded = $ses; 
  $num = mt_rand(4,4); 
  for($i=1;$i<=$num;$i++) 
  { 
     $sesencoded = 
     base64_encode($sesencoded); 
  } 
  
  $alpha_array = 
  array('Y','D','U','R','P', 
  'S','B','M','A','T','H'); 
  $sesencoded = 
  $sesencoded."+".$alpha_array[$num]; 
  $sesencoded = 
  base64_encode($sesencoded); 
  return $sesencoded; 
}//end of encoded function 

function decoded($str) 
{ 
   $alpha_array = 
   array('Y','D','U','R','P', 
   'S','B','M','A','T','H'); 
   $decoded = 
    base64_decode($str); 
   list($decoded,$letter) = 
   split("\+",$decoded); 
   for($i=0;$i<count($alpha_array);$i++) 
   { 
   if($alpha_array[$i] == $letter) 
   break; 
   } 
   for($j=1;$j<=$i;$j++) 
   { 
      $decoded = 
       base64_decode($decoded); 
   } 
   return $decoded; 
}//end of decoded function 


function alert($msg){
	?>
	<script>
    	alert("<? echo $msg?>");
    </script>
	<?
}

function EnviarNotificaciones($funcion,$data){
	?>
	<script>
    	EnviarNotificaciones('<? echo $funcion?>','<? echo $data?>');
    </script>
	<?
}

function MsgBox($clase, $msg, $ocultar){
	?>
	<div id="msgtemp1" class="msgbox_temp">
    	<div class="<? echo $clase?>"><p><? echo $msg?></p></div>
    </div>
	<?
}

function AbrirDialog($titulo, $tipo, $msg){ //error, ok
	?>
    <div id="msgdialog1" class="msg_dialog" title="<? echo $titulo?>">
    	<p class="<? echo $tipo?>"><? echo $msg?></p>
    </div>
	<script>
    	$("#msgdialog1").dialog({
			modal: true,
			buttons: {
				Aceptar: function(){
					$(this).dialog("close");
					}
			},
			close: function(){
				$("#msgdialog1").remove();
				}
		});
    </script>
	<?
}


function FormatEstado($estado, $color){
	return '
	<span style="background-color: '.$color.'; color: white; padding:3px; font-weight:bold; -moz-border-radius:5px; border-radius:5px;">'.$estado.'</span>
	';
}

function FormatoNumero($num,$tipo_oc){ //formato precio unitario para OC internacion y nacional
	if($tipo_oc == 2){
		//return number_format($num,3,',','.');
		return number_format($num,5,'.',',');
	}
	else
		//return number_format($num,0,',','.');
		return number_format($num,2,',','.');
}


?>
