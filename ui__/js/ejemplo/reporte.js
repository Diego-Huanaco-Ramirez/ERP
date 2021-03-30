 $(document).ready(function(){
    $("#Btnrpt4").click(function(){
        
 //    fecha = $('#datepicker3').val();  
      fecha = $('#fecha_actual').text();  
     if(fecha.length > 0){
       var parametros = 'funcion=rpt1&fecha='+fecha;   
       AbrirVentana("../reporte/rptdiario_compacto.php", parametros, "", 600, 500);
       //  AbrirVentana("../atencionfunc/listahistorial.php", parametros, "", 600, 400);
     }else{
        // alert("ingrese la fecha");
         document.getElementById("datepicker3").focus();
     }    
       
    });
 });
 function historial(obj,opc){
  $(".collapse").collapse('hide');    
  var bandera= true;
  var msg= "";
  var id_agenda,id_paciente;   
   if(opc == 1){
      fila_id = obj.parentNode.parentNode.id;
      filaParametros = fila_id;
    //  id_agenda = $("#" + fila_id).children("td:nth-child(7)").text().trim();  
      id_paciente = $("#" + fila_id).children("td:nth-child(11)").text().trim();  
    }else if(opc == 2){
      //id_paciente = obj.id_paciente;  
      id_paciente = obj;  
    }else  if(opc == 3){
      if($('#lblid_paciente').text().trim() == '')   
        bandera = false;
      else {
        id_paciente =  $('#lblid_paciente').text().trim();    
        msg = "Seleccione un paciente";
        
      }  
    
    }else  if(opc == 4){
      
      id_paciente = '';
      if($('#txt_id_agenda').val().trim() == '')
        bandera = false;  
      else 
        id_agenda =     $('#txt_id_agenda').val().trim();  
      
    
 
    }  


    
    if(bandera){
        
         var parametros = 'funcion=rpt1&id_agenda='+parseInt(id_agenda)+'&opc='+opc+'&id_paciente='+parseInt(id_paciente);   
       //AbrirVentana("../reporte/rptdiario_compacto.php", parametros, "", 600, 500);
        // AbrirVentana("../atencionfunc/listahistorial.php", parametros, "", 650, 500);
         AbrirVentana("../atencionfunc/lista.php", parametros, "", 650, 500);
     }else {
          advertencia(msg);
          if(opc == 3)
             $('#btnsearchpaciente').focus();
      }     
 }
 
 function openstatic(){
    // var fecha_actual = $("#alternate2").val();
    // var parametros = 'fecha='+fecha_actual;
       //funcion=rpt1&id_agenda='+parseInt(id_agenda)+'&opc='+opc+'&id_paciente='+parseInt(id_paciente);   
       //AbrirVentana("../reporte/rptdiario_compacto.php", parametros, "", 600, 500);
        // AbrirVentana("../atencionfunc/listahistorial.php", parametros, "", 650, 500);
      var fecha_actual_form = $('#txt_fecha2').val();
      var parametros = 'fecha_busq1='+fecha_actual_form;
      AbrirVentana("../reporte/rpt_static.php", parametros, "", 800, 600);
     
     
 }
 
 function loadstatic(){
     var today = new Date();
     var dd = String(today.getDate()).padStart(2, '0');
     var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
     var yyyy = today.getFullYear();

     today = yyyy + '-' + mm + '-' + dd;
  
     //  $('#fecha_busq1').val(today);
        $('#fecha_busq1').val( );
      $('#btnsearchdate').focus();
      
 }
 
 function cargar_reporte(opc){
 fechain = $("#fecha_busq1").val();
 fechafin = $("#fecha_busq2").val();
                           //split fechas                
 fecha_split= fechain.split("-");
 fecha_anio=fecha_split[0];
 fecha_mes=fecha_split[1];
 radio_fechas=0;
   if(fechain != ''){
    var selected = $("input[type='radio'][name='radio_fecha_atencion']:checked");
    if (selected.length > 0) { 
       radio_fechas = selected.val();
    }
    if(radio_fechas == 1){
      if(fechafin != '')  
         radio_fechas= 4;
      else 
         radio_fechas= 1; 
    }
   /* 
    if(radio_fechas == 2){
       fecha_mes_anio =fecha_mes+"-"+fecha_anio;
        alert("fecha enviada por mes: "+fecha_mes_anio);
    }else if(radio_fechas == 3){
        alert("fecha enviada por año: "+fecha_anio);
    }
       
 */
                   
    data='fecha_atencion_in='+fechain+'&radio_fecha_atencion='+radio_fechas
    + '&fecha_atencion_fin='+ fechafin;
 
    marco = "dvestadistica";
    if(opc)
      ruta = "../funcion/estadistica_diaria_lg.php";
    else 
      ruta = "../funcion/estadistica_diaria.php";  
    sendajax(marco, ruta, data);
   }else
       advertencia('Seleccionar fecha');
 } 
   function sendajax(marco,ruta,data){
   
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
          //   document.getElementById(marco).innerHTML = "";  
            document.getElementById(marco).innerHTML = this.responseText;
              
    
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 