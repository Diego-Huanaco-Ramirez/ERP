
 var fichaatencion=0;
 var atencion=0;

 function sendatencion(marco,ruta,data){
      
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
     //  document.getElementById(marco).innerHTML = ""; 
      if(this.responseText != '' && this.responseText != null)
       document.getElementById(marco).innerHTML = this.responseText;
                       
      ;
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 
function regatencion(value){
  var id_agenda = 0;
  /*
  if($('#txt_id_fila').val() != ''){
    fila = $('#txt_id_fila').val().trim();  
    id_agenda = $("#" + fila).children("td:nth-child(7)").text().trim();  
  }else{
      id_agenda = $('#txt_id_agenda').val().trim();  
  }  
  */
  if(id_agenda = $('#txt_id_agenda').val() != '' )
     id_agenda = $('#txt_id_agenda').val().trim();  
  
  if(id_agenda != 0) { 
    motivo= $("#txt_motivo"+value).val();
    antecedente= $("#txt_antecedente"+value).val();
    exfisico= $("#txt_exfisico"+value).val();
    biomicroscopia= $("#txt_biomicroscopia"+value).val();
    oftalmoscopia= $("#txt_oftalmoscopia"+value).val();
    diagnostico= $("#txt_diagnostico"+value).val();
    indicacion= $("#txt_indicacion"+value).val();
    evolucion= $("#txt_evolucion"+value).val();
  
  if(id_agenda != 0){
     ;// datos='funcion=ingresoatencion' ;
  }
  if(fichaatencion != 0 && fichaatencion[0]['id_agenda'] == id_agenda){
      
    datos=   'funcion=actualizatencion' ;
  }else   if(fichaatencion == 0){
      
         datos='funcion=ingresoatencion' ;
      
  }else 
      datos='funcion=ingresoatencion' ;
    
    ruta= "../negocio/datencion.php";
    marco= "";
    
      
 datos+= '&id_agenda='+id_agenda+'&motivo_atencion='+motivo+
 '&antecedente_atencion='+antecedente+
 '&ex_fisico_atencion='+exfisico+
 '&biomicroscopia_atencion='+biomicroscopia+'&oftalmoscopia_atencion='+oftalmoscopia+'&diagnostico_atencion='+diagnostico+
 '&indicacion_atencion='+indicacion+'&evolucion_atencion='+evolucion;
    
   
     //if(!bandera){
    
    sendatencion(marco,ruta,datos);
    // }    
 }  
}
function pacienteficha2(elemento, e,obj,value) {
     if ($(collapseThree).hasClass('show')) {
                      
           e.stopPropagation();
      }
   atencion = obj;
   var id_agenda = obj.id_agenda;
 
    if( id_agenda != ''){
    $('#txt_id_agenda').val(id_agenda);
        //fila_id = elemento.parentNode.parentNode.id;
        //filaParametros = fila_id;
        var nombre = obj.nombre_paciente;
        var tipo_pago = obj.nombre_pago;
        
        if(tipo_pago == 0){
            tipo_pago = "";
        }else
            tipo_pago =  tipo_pago;
      
       $('#fichapaciente'+value).html(nombre+'&nbsp;&nbsp;&nbsp;'+tipo_pago.fontcolor("blue")+'&nbsp;&nbsp;&nbsp;' +atencion.edad.fontsize("2px")+'&nbsp;&nbsp;&nbsp;' +obj.fecha_atencion.fontsize("2px"));
      //  $('#fichapaciente'+value).html('<i class="fas fa-file-medical-alt" title="paciente"></i> '+" " + "" + nombre+' <i class="far fa-calendar-check" title="Edad paciente"></i> '+atencion.edad+' <i class="fas fa-dollar-sign" title="Tipo de pago"></i> '+tipo_pago+' <i class="fas fa-calendar-alt" title="Fecha de Atención"></i> '+obj.fecha_atencion) ;
       
       // $('#fichapaciente').text("Ficha" + " : " + nombre);
        
 //       $('#txt_id_fila').val(fila_id);
       // var  valor = "background-color:#737373 ;";
       // $(elemento).attr("style", valor);
      cargarfichapaciente(obj,value);
      }  
}
function desmarcarfilas(fila){
    //    var fila = '';
       
        var id;
        $("#btabla tr").each(function () {

        id = $("#" + fila).children("td:nth-child(10)").text().trim();
    
            if(id !== fila && id !== ''){
         
             valorf = "background-color:#ff9999;";
          //   console.log(valor);
            $("#"+id).children("td:nth-child(1)").attr("style", "background-color:#ff9999;");
 
            }
    


        });
        
    }
function pacienteficha(elemento, e,value) {
var bandera = true;    
var fila_id;

if(elemento != null && elemento != '' &&  elemento !== 0 ){
   if((typeof elemento === "object") ){
       if ($(collapseThree).hasClass('show') && e !='') {
                     
           e.stopPropagation();
        }
        fila_id = elemento.parentNode.parentNode.id;
    }else{ 
      if( isNaN(parseInt(elemento))) {   
       fila_id = elemento;
       console.log(fila_id);
        $("#collapseThree").on('show.bs.collapse', function(){
                $(".collapseThree").collapse('show'); 
                });     
               
        $("#collapseThree").collapse('show');   
        $("#txt_motivo"+value).focus();
      }else{
        var id_agenda = parseInt(filas);
        bandera = false;
        
      } 
   }     
}  
 
if(bandera)
  var id_agenda = $("#" + fila_id).children("td:nth-child(7)").text().trim();    

    if( id_agenda != ''){
      fila = fila_id;
      filaParametros = fila_id;
    
        if($('#txt_id_fila').val() != ''){
           
           fila = $('#txt_id_fila').val().trim();
            
            colorf = estadocolorIni($("#"+fila).children("td:nth-child(8)").text());
            valorf = "background-color:"+colorf+" ;";
          //   console.log(valor);
            $("#"+fila).children("td:nth-child(1)").attr("style", valorf);
            desmarcarfilas(fila);
        }
 
     
    // fila_id = elemento.parentNode.parentNode.id;
     //filaParametros = fila_id;
        var nombre = $("#" + fila_id).children("td:nth-child(3)").text();
        var tipo_pago = $("#" + fila_id).children("td:nth-child(5)").text();
        var edad = $("#" + fila_id).children("td:nth-child(12)").text();
        var fecha_atencion = $("#alternate2").val();
        if(tipo_pago == 0){
            tipo_pago = "?";
        }
        
        $('#fichapaciente'+value).html(nombre+ '&nbsp;&nbsp;&nbsp;' +tipo_pago.fontcolor("blue")+ '&nbsp;&nbsp;&nbsp;' +edad.fontsize("2px")+ '&nbsp;&nbsp;&nbsp;' +fecha_atencion.fontsize("2px"));
     // $('#fichapaciente'+value).html('<i class="fas fa-file-medical-alt"></i>'+" " + "" + nombre+' <i class="far fa-calendar-check" title="Edad paciente"></i> '+edad+' <i class="fas fa-dollar-sign"></i> '+tipo_pago+' <i class="fas fa-calendar-alt"></i> '+ fecha_atencion) ;
   // $('#fichapaciente').html('<i class="fas fa-file-medical-alt"></i>'+" " + "" + nombre+' <i class="far fa-calendar-check" title="Edad paciente"></i> '+edad+' <i class="fas fa-dollar-sign"></i> '+tipo_pago+' <i class="fas fa-calendar-alt"></i> ') ;        
        $('#txt_id_fila').val(fila_id);
        $('#txt_id_agenda').val(id_agenda);
        var  valor = "background-color:#737373 ;"; //colour sombra oscura
        $("#" + fila_id).children("td:nth-child(1)").attr("style", valor);
            limpiarfichapaciente('',value);
        cargarfichapaciente(fila_id,value);
    }  
}
    
function cargarfichapaciente(filas,value){
    
 if( isNaN(parseInt(filas))) {
   
  
      if(filas.id_agenda == null)  {
       
       var fila = filas;
       var id_agenda = parseInt($("#"+fila).children("td:nth-child(7)").text().trim());
    //   var estado_agenda = parseInt($("#"+fila).children("td:nth-child(8)").text().trim());
      }else{ 
          var id_agenda = filas.id_agenda;
      //    var estado_agenda = filas.estado_agenda;
      }    
 }else{
     var id_agenda = parseInt(filas);
   //  alert('si es numero');
 }
   //    alert("aqui");
       datos='funcion=cargarficha' ;
       ruta= "../negocio/datencion.php";
       marco= "";
       
       datos+= '&id_agenda='+id_agenda;
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
           var myObj = JSON.parse(this.responseText);
          
             limpiarfichapaciente('',value);
                habilitafichapaciente(value); 
              //  limpiarReceta();
                if (myObj != null)  {
                
                 fichaatencion= myObj;
                   console.log(myObj);
              
                   $("#txt_motivo"+value).val(myObj[0]['motivo_atencion']);
                   $("#txt_motivo"+value).prop('title',myObj[0]['motivo_atencion']);
                   
                   $("#txt_antecedente"+value).val(myObj[0]['antecedente_atencion']);
                   $("#txt_antecedente"+value).prop('title',myObj[0]['antecedente_atencion']);
                   
                   $("#txt_exfisico"+value).val(myObj[0]['ex_fisico_atencion']);
                   $("#txt_exfisico"+value).prop('title',myObj[0]['ex_fisico_atencion']);
                   
                   $("#txt_biomicroscopia"+value).val(myObj[0]['biomicroscopia_atencion']);
                   $("#txt_biomicroscopia"+value).prop('title',myObj[0]['biomicroscopia_atencion']);
                   
                   $("#txt_oftalmoscopia"+value).val(myObj[0]['oftalmoscopia_atencion']);
                   $("#txt_oftalmoscopia"+value).prop('title',myObj[0]['oftalmoscopia_atencion']);
                   
                   $("#txt_diagnostico"+value).val(myObj[0]['diagnostico_atencion']);
                   $("#txt_diagnostico"+value).prop('title',myObj[0]['diagnostico_atencion']);
                   
                   $("#txt_indicacion"+value).val(myObj[0]['indicacion_atencion']);
                   $("#txt_indicacion"+value).prop('title',myObj[0]['indicacion_atencion']);
                   
                   $("#txt_evolucion"+value).val(myObj[0]['evolucion_atencion']);
                   $("#txt_evolucion"+value).prop('title',myObj[0]['evolucion_atencion']);
                   
                   console.log("estado agenda:"+parseInt(myObj[0]['estado_agenda']));
                   if( parseInt(myObj[0]['estado_agenda']) > 2 || parseInt(myObj[0]['estado_agenda']) < 2){
                     // $("#Chkpiniciales").prop('disabled',true); 
                     $("#Chkpiniciales"+value).attr( 'disabled',true); 
                   }else
                        $("#Chkpiniciales"+value).attr( 'disabled',false); 
                   
                   if( parseInt(myObj[0]['estado_agenda']) == 3 ){
                     // $("#Chkpiniciales").prop('disabled',true); 
                     $("#Chkptermino"+value).attr( 'disabled',false); 
                   }else
                        $("#Chkptermino"+value).attr( 'disabled',true); 
                   
                   
                    
                    
                }
            }     
         }    ;   
         xhttp.open("POST",ruta , true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send(datos);    
    }
     
    function cerrarficha(value){
        limpiarfichapaciente(1,value);
        bloquearfichapaciente(value);
         $(".collapse").collapse('hide');
    }
    function limpiarfichapaciente(opc, value){
       if(opc == 1){ 
          $('#fichapaciente'+value).html('<i class="fas fa-file-medical-alt" title="paciente"></i> ') ;
          $("#txt_id_agenda ").val('');
          $("#txt_id_fila ").val('');
          preficha =0;
       }    
        
        $("#txt_motivo"+value).val('');
        $("#txt_antecedente"+value).val('');
        $("#txt_exfisico"+value).val('');
        $("#txt_biomicroscopia"+value).val('');
        $("#txt_oftalmoscopia"+value).val('');
        $("#txt_diagnostico"+value).val('');
        $("#txt_indicacion"+value).val('');
        $("#txt_evolucion"+value).val('');
   //     $("#Chkpiniciales"+value).prop('checked',false);
     //   $("#Chkptermino"+value).prop('checked',false);
    }
    function habilitafichapaciente(value){
    //    alert("habillitar:"+value);
        $("#btnfichapaciente"+value).attr('disabled',false); 
        $("#btnfichacerrar"+value).attr('disabled',false);       
        $("#btnnficha"+value).attr('disabled',false);   
        $("#btnparametro"+value).attr('disabled',false);    
        $("#btnregatencion"+value).attr('disabled',false);  
        $("#txt_motivo"+value).attr('readonly',false);
        $("#txt_antecedente"+value).attr('readonly',false);
        $("#txt_exfisico"+value).attr('readonly',false);
        $("#txt_biomicroscopia"+value).attr('readonly',false);
        $("#txt_oftalmoscopia"+value).attr('readonly',false);
        $("#txt_diagnostico"+value).attr('readonly',false);
        $("#txt_indicacion"+value).attr('readonly',false);
        $("#txt_evolucion"+value).attr('readonly',false);
        $("#Chkpiniciales"+value).attr('disabled',false);
        $("#Chkptermino"+value).attr('disabled',false);
    }
    function bloquearfichapaciente(value){
        $("#btnfichapaciente"+value).attr('disabled',true); 
        $("#btnfichacerrar"+value).attr('disabled',true);         
        $("#btnnficha"+value).attr('disabled',true);     
        $("#btnparametro"+value).attr('disabled',true);    
        $("#btnregatencion"+value).attr('disabled',true);  
        $("#txt_motivo"+value).attr('readonly',true);
        $("#txt_antecedente"+value).attr('readonly',true);
        $("#txt_exfisico"+value).attr('readonly',true);
        $("#txt_biomicroscopia"+value).attr('readonly',true);
        $("#txt_oftalmoscopia"+value).attr('readonly',true);
        $("#txt_diagnostico"+value).attr('readonly',true);
        $("#txt_indicacion"+value).attr('readonly',true);
        $("#txt_evolucion"+value).attr('readonly',true);
        $("#Chkpiniciales"+value).attr('disabled',true);
        $("#Chkptermino"+value).attr('disabled',true);
    }

     function estadocolorIni(estado){
       var color;
        if(estado == 1){
            color = '#b3d9ff';
        }else  if(estado == 2){
            color = '#c6ffb3';
        }else if(estado == 2){
            color = '#e67300';//antes #ffe6b3
        }  
        return color;
    }
function listacontrol(elemento, opc){
    
  if(opc == 1){  
    
     fila_id = elemento.parentNode.parentNode.id;
    //filaParametros = fila_id;
    var id_paciente = $("#" + fila_id).children("td:nth-child(11)").text().trim();  
    var fila =  $("#" + fila_id).children("td:nth-child(10)").text().trim();  
   var nombre = $("#" + fila_id).children("td:nth-child(3)").text();
  }else{
        //rut = elemento.rut_paciente;
      var  id_paciente= elemento.id_paciente;
      var  nombre = elemento.nombre_paciente + " " + elemento.apellido_ppaciente + " " + elemento.apellido_mpaciente;
     
  } 
    $("#btncerrarcontroles").attr('disabled',false); 
     $('#atencion').html('<i class="fas fa-file-medical" title="Registro paciente"></i> '+" " + "" + nombre) ;
    ruta= "../atencionfunc/listacontrol.php";
    
    
    marco= "marcolistatencion";
    //data='funcion=sgteatencion&id_paciente='+id_paciente;
    data='id_paciente='+id_paciente+'&fila_id='+fila;
    sendatencion(marco,ruta,data);
    
 
}
function cierracontrol(){
      $("#btncerrarcontroles").attr('disabled',true); 
     $('#atencion').html('') ;
     $('#marcolistatencion').html('') ;
     
}
 function openatencion(elemento){
     if((typeof elemento === "object") ){
       
     fila_id = elemento.parentNode.parentNode.id;
     var id_agenda = $("#" + fila_id).children("td:nth-child(7)").text().trim(); 
 }
     
 // if(id_paciente > 0 && id_paciente != ''){
   //     $("#lblid_paciente"+value).text(id_paciente);
     // var parametros = 'id_paciente='+id_paciente+'&value='+value;
      var parametros = 'id_agenda='+id_agenda;
      AbrirVentana("../funcion/vtna_atencion.php", parametros, "", 850, 640);
 // }    
     
     
 }