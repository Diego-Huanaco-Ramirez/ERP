  var validorut1 = true;
  var validorut2 = true;
  var prefid = '';
  function sendajaxpass(marco,ruta,data){
      
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
  
    function sendajaxpass2(marco,ruta,data,idfila,prefid){
    
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
           //  document.getElementById(marco).innerHTML = "";  
            document.getElementById(marco).innerHTML = this.responseText;
            
     
       asignarID(idfila,this.responseText)
       if(prefid == 2)
          openregpaciente(idfila);
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  }
   function showResult(str, opc, origen) {
    
    if(origen == 1 ){
   
        marco = "livesearch1";
         str2=$("#inputapellido1").val().toUpperCase();
    }else{ 
        //ruta = "../funcion/listadatos.php";
        marco = "livesearch2";
         str2=$("#inputapellido").val().toUpperCase();
    }    
       ruta = "../funcion/listadata.php";
       if(opc== 4){
         if(str2 !== ''){   
          //  str2=$("#inputapellido").val().toUpperCase();
            data = '?opcion='+opc+'&valor='+str+'&valor2='+str2+'&origen='+origen;
         }else
             advertencia("debe ingresar apellido paterno");
       }else
          data = '?opcion='+opc+'&valor='+str+'&origen='+origen;
  if (str.length==0) {
    document.getElementById(marco).innerHTML="";
    document.getElementById(marco).style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
       
          document.getElementById(marco).innerHTML=this.responseText;
      document.getElementById(marco).style.border="1px solid #A5ACB2";
 
      
    }
    
  }
  xmlhttp.open("GET",ruta+data,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xmlhttp.send(); 
      if(opc== 3 ){
       ;//  verifica();
     }  
} 

function validateshowResult(){
       
    if($('#livesearch1').html().length < 30)
       $('#inputapellido').focus();
}
function searchpacientexrut(){
   
}
function checkpunto(){
    
}


function sendajaxgetpaciente(marco,ruta,data,e,prefid){
      
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
         var myObj = JSON.parse(this.responseText);
        // console.log(myObj);
         
         if (myObj != null){
           nuevopaciente('','');  
           
           if(myObj.length > 0)   
              sel2('',myObj,e,prefid);
           
          
         }else 
               advertencia('RUT SIN REGISTROS!');  
                
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
}
 function openpaciente(id_paciente,value){
    // var fecha_actual = $("#alternate2").val();
    // var parametros = 'fecha='+fecha_actual;
       //funcion=rpt1&id_agenda='+parseInt(id_agenda)+'&opc='+opc+'&id_paciente='+parseInt(id_paciente);   
       //AbrirVentana("../reporte/rptdiario_compacto.php", parametros, "", 600, 500);
        // AbrirVentana("../atencionfunc/listahistorial.php", parametros, "", 650, 500);
    //alert(id_paciente); 
  if(id_paciente > 0 && id_paciente != ''){
        $("#lblid_paciente"+value).text(id_paciente);
      var parametros = 'id_paciente='+id_paciente+'&value='+value;
      AbrirVentana("../funcion/vtna_paciente.php", parametros, "", 800, 450);
  }    
     
     
 }
function  controlventana(){
      blopenpaciente= true; 
     
}
function obtpaciente(elemento, e, paciente_id,prefid){
 
   if((paciente_id == null || paciente_id == '') && typeof elemento === "object" && (elemento !== 0)){ 
  
     fila_id = elemento.parentNode.parentNode.id;
     
     var id_paciente = $("#" + fila_id).children("td:nth-child(11)").text().trim();
     var nombre = $("#" + fila_id).children("td:nth-child(3)").text();
     $('#registro').html('<i class="fas fa-address-card" title="Registro paciente"></i> '+" " + "" + nombre) ;
  }else{
     
     var id_paciente= paciente_id;
    //  var id_paciente = $("#" + fila_id).children("td:nth-child(11)").text().trim();
    if(elemento != ''){ 
     var nombre = $("#" + elemento).children("td:nth-child(3)").text();
     $('#registro').html('<i class="fas fa-address-card" title="Registro paciente"></i> '+" " + "" + nombre) ;
    } 
  }
     marco= "";
     ruta = "../negocio/datos.php";
     funcion = "getpaciente";
 
     data = "funcion=" + funcion + "&id_paciente=" + id_paciente;
      sendajaxgetpaciente(marco,ruta,data,e,prefid);
}
function obtpacientexrut(prefid){
    // fila_id = elemento.parentNode.parentNode.id;
    // var id_paciente = $("#" + fila_id).children("td:nth-child(11)").text().trim();
    // var nombre = $("#" + fila_id).children("td:nth-child(3)").text();
   //  $('#registro').html('<i class="fas fa-address-card" title="Registro paciente"></i> '+" " + "" + nombre) ;
     var identificador = $("#txt_rut"+prefid).val().trim();
     var dverificador = $("#txt_dverificador"+prefid).val().trim();
     marco= "";
     ruta = "../negocio/datos.php";
     funcion = "getpacientexrut";
  
     data = "funcion=" + funcion + "&identificador=" + identificador+ "&dverificador=" + dverificador;
      sendajaxgetpaciente(marco,ruta,data,'',prefid);
}
function sel2(obj,data,e,prefid){
 
 if(e != ''){ 
  $("#collapseTwo").hasClass('show');
     e.stopPropagation();
      
   
        $("tr").focusout(function(){
        $(obj).parents("tr").removeClass();
    });
 }   
 edad= calculaedad2(data[0].fecha_nacimiento,2,prefid);
    $(obj).parents("tr").addClass("info");
       $("#lblid_paciente"+prefid).text(data[0].id_paciente);
       nombre_completo = data[0].nombre_paciente+''+data[0].apellido_ppaciente+''+data[0].apellido_mpaciente;
      $("#nombre_completo").val(nombre_completo);
//      $("#id_paciente").val(id_paciente);
    
    $("#txt_rut"+prefid).val(data[0].identificador);
    $("#txt_dverificador"+prefid).val(data[0].dverificador);
    $("#txt_nombres"+prefid).val(data[0].nombre_paciente);
    $("#txt_apellidop"+prefid).val(data[0].apellido_ppaciente);
    $("#txt_apellidom"+prefid).val(data[0].apellido_mpaciente);
    $("#txt_fijo"+prefid).val(data[0].fono_paciente);
    $("#txt_movil"+prefid).val(data[0].fonoPaciente2);
    $("#txt_nacionalidad"+prefid).val(data[0].nacionalidad);
    $("#txt_profesion"+prefid).val(data[0].profesion);
    $("#txt_edad"+prefid).val(edad);
    $("#txt_rut"+prefid).attr("disabled",true);
    $("#txt_dverificador"+prefid).attr("disabled",true);
    $("#txt_fechanac"+prefid).val(data[0].fecha_nacimiento);
    $("#txt_observacion_paciente"+prefid).val(data[0].observacion_paciente);
  
    
}

function sel(obj,data,prefid){
 
  $("#collapseTwo").hasClass('show');
   
      edad= calculaedad2(data.fecha_nacimiento,3,prefid);
   
        $("tr").focusout(function(){
        $(obj).parents("tr").removeClass();
    });
  $(obj).parents("tr").addClass("info");
       $("#lblid_paciente"+prefid).text(data.id_paciente);
      nombre_completo = data.nombre_paciente+' '+data.apellido_ppaciente+' '+data.apellido_mpaciente;
      $("#nombre_completo").val(nombre_completo);
      if(prefid == 1){
            var nombre = nombre_completo.toUpperCase();
        $('#registro').html('<i class="fas fa-address-card" title="Registro paciente"></i> '+" " + "" + nombre) ;
    }  
     // $("#registro").val(nombre_completo);
//      $("#id_paciente").val(id_paciente);
    
   $("#txt_rut"+prefid).val(data.rut_paciente);
    $("#txt_dverificador"+prefid).val(data.dverificador);
    $("#txt_nombres"+prefid).val(data.nombre_paciente);
    $("#txt_apellidop"+prefid).val(data.apellido_ppaciente);
    $("#txt_apellidom"+prefid).val(data.apellido_mpaciente);
    $("#txt_fijo"+prefid).val(data.fono_paciente);
    $("#txt_movil"+prefid).val(data.fonoPaciente2);
    $("#txt_nacionalidad"+prefid).val(data.nacionalidad);
    $("#txt_profesion"+prefid).val(data.profesion);
    $("#txt_edad"+prefid).val(edad);
    $("#txt_rut").attr("disabled",true);
    $("#txt_dverificador").attr("disabled",true);
    $("#txt_fechanac"+prefid).val(data.fecha_nacimiento);
    $("#txt_observacion_paciente"+prefid).val(data.observacion_paciente);
  
    $("#btnanularpaciente"+prefid).attr("hidden",false);
}

function fechalatin(fecha){
       from = fecha.split('-');
        var dob = from[2]+'-'+(from[1] - 1)+'-'+from[0]; //fecha fmto latino
        return dob;
}

function calculaedad2(obj, tipo,prefid){ //Reemplaza funcion calculaedad y calcula
     if(tipo == 1)  
        fecha = $(obj).val();
     else if(tipo == 2)  
        fecha = obj; 
    else if(tipo == 3){  
        fecha =  obj;
        
}      
    
 if(fecha.length > 0){   
     from = fecha.split('-');
   //  var dob = new Date(from[2], from[1] - 1, from[0]); //fecha fmto latino
    // console.log(fecha);
     var mes = from[1];
     var meses;
      var d = new Date();
      var n = d.getMonth();
   
     if(n > mes)
       meses= n-mes;
     else 
       meses = mes-n;
     
    meses = 12 - meses;    
      var dob = new Date(fecha);
     
     var today = new Date();
     var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000)); 
      
    age= age+" AÑOS "+meses+" MESES";
    if(tipo != 3){  
      $("#txt_edad"+prefid).val(age);
    
     }  
     //console.log("edad:"+age);
     
         return age;
 }//else
     //alert(fecha);
    //alert("ingresar fecha ej: dd/mm/yyyy")
 }
function prueba_fecha(){
    //alert($("#fecha_actual").text());
    //  alert($("#log").text());
   //  alert($("#fecha_actual").val());
   // alert(document.getElementById("fecha_actual").value)
}
 function nuevopaciente(opc,prefid){
     if(opc == 1)
        $('#registro').html('<i class="fas fa-address-card" title="Registro paciente"></i> NUEVO PACIENTE' ) ;
     $("#lblid_paciente"+prefid).text("");
    $("#txt_rut"+prefid).val("");
    $("#txt_dverificador"+prefid).val("");
    $("#txt_nombres"+prefid).val("");
    $("#txt_apellidop"+prefid).val("");
    $("#txt_apellidom"+prefid).val("");
    $("#txt_fechanac"+prefid).val("");
    $("#txt_edad"+prefid).val("");
    $("#txt_fijo"+prefid).val("");
    $("#txt_movil"+prefid).val("");
    $("#txt_nacionalidad"+prefid).val("chilena");
    $("#txt_profesion"+prefid).val("");
    $("#txt_observacion_paciente"+prefid).val("");
    $("#txt_rut"+prefid).attr("disabled",false);
    $("#txt_dverificador"+prefid).attr("disabled",false);
     $("#btnanularpaciente"+prefid).attr("hidden",true);
  
    $("#email"+prefid).val(""); $("#email2"+prefid).val("");
    $("#password"+prefid).val("");$("#password2"+prefid).val("");
    $("#direccion"+prefid).val("");
    $("#sel_regiones"+prefid).val(0);
    $("#txt_fijo"+prefid).val(0);
  
   $("#sel_accion"+prefid).val(0);
   $("#sel_comunas"+prefid).val(0);
     if(prefid == 1)
        validorut1 = true;
     else
        validorut2 = true; 
 }

function GuardarPaciente(prefid) {
     var bandera = true;
     var estado = true;
     var identificador  = "";
        identificador = $("#lblid_paciente"+prefid).text().trim();
        ruta = "../negocio/datos.php";
        marco = 'lblid_paciente'+prefid;
        
        var rut = $("#txt_rut"+prefid).val().trim();
        var verificador = $("#txt_dverificador"+prefid).val().trim();
        var nombre = $("#txt_nombres"+prefid).val();
        var paterno = $("#txt_apellidop"+prefid).val();
        var materno = $("#txt_apellidom"+prefid).val();
        var fecha_nacimiento = $("#txt_fechanac"+prefid).val();
 
        var fijo = $("#txt_fijo"+prefid).val();
        var movil = $("#txt_movil"+prefid).val();
        var nacionalidad = $("#txt_nacionalidad"+prefid).val();
        var profesion = $("#txt_profesion"+prefid).val();
        var observacion_paciente = $("#txt_observacion_paciente"+prefid).val();
        
        var password1 = $("#password1"+prefid).val();
        var password2 = $("#password2"+prefid).val();
        
        var email = $("#email"+prefid).val();
        var email2 = $("#email2"+prefid).val();
        var direccion = $("#direccion"+prefid).val();
        var region = $("#sel_regiones"+prefid).val();
        var ciudad = $("#sel_comunas").val();
        
        
        if(email !== email2){
            advertencia("email no coiciden");
            bandera = false;
            $("#email"+prefid).focus();
        }
        if(password1 !== password2){
            advertencia("password no coiciden");
            bandera = false;
            $("#password1"+prefid).focus();
        }
        if(rut.length == 0 ){//|| verificador != '' || nombre != ''){ // || paterno != '' || materno != ''  ){ //|| fecha_nacimiento != '' ){
            advertencia("REGISTRO SIN RUT!");
            bandera = false;
            $("#txt_rut"+prefid).focus();
        }  //else if(rut.length > 0 ){
     if(nombre == '' || paterno == ''){
            
                bandera = false;
                advertencia("Debe ingresar nombre y apellido paterno");
             
     }   
    if(!validorut1 && prefid == 1){
           estado = false;
            if($('#check1'+prefid).prop('checked')){
                bandera = false;
                advertencia("Validador de RUT: No permite rut invalido");
            }else
                advertencia("Advertencia: rut no valido");
     }
    if(!validorut2 && prefid == 2){
            estado = false;
            if($('#check1'+prefid).prop('checked')){
                bandera = false;
                advertencia("Validador de RUT: No permite rut invalido");
            }else
                advertencia("Advertencia: rut no valido");
     }   
            
            
        if(bandera){    
         
            funcion = "minInsertPaciente";
            data = "funcion="+funcion+"&id_paciente="+identificador+"&rut="+rut+
             "&verificador="+verificador+"&nombre="+nombre+"&paterno=" +paterno+
             "&materno="+materno+"&fecha_nacimiento="+fecha_nacimiento+ 
             "&fijo="+fijo+"&movil="+movil+"&nacionalidad="+nacionalidad+
             "&profesion="+profesion+'&observacion_paciente='+observacion_paciente+
              "&email_paciente="+email+'&direccion_paciente='+direccion+'&region_paciente='+region+'&ciudad_paciente='+ciudad+
              '&password='+password1;
                   
            sendajaxpass(marco, ruta,data);
           
          
            if( identificador== "error bd"){
              advertencia("RUT INGRESADO CON DIGITO VERIFICADOR DISTINTO!");
           
               $("#txt_rut"+prefid).attr("disabled",false);
               $("#txt_dverificador"+prefid).attr("disabled",false);
               $('#check1'+prefid).focus();
            }else   if(identificador != "")
              advertenciaok("paciente actualizado");
            else{ 
              advertenciaok("Paciente registrado!");
              if(estado){
                  $("#txt_rut"+prefid).attr("disabled",true);
                  $("#txt_dverificador"+prefid).attr("disabled",true);
                  $('#check1'+prefid).focus();
              }   
            }  
              
        }  
           
            
        if(idfilaagregar != null && bandera && prefid == 2) {   
          if (confirm("¿Agregar hora a la tabla?")) 
              agregarpac('',prefid);
          
       
        } 

    }

 function AnulaPaciente(prefid) {
     var bandera = false;
     
     var identificador  = "";
        identificador = $("#lblid_paciente"+prefid).text().trim();
        ruta = "../negocio/datos.php";
        marco = "lblid_paciente"+prefid;
        
     bandera=  confirm("¿CONFIRMA ELIMINAR PACIENTE?") ;    
            
        if(bandera){    
         
            funcion = "mdnanularPaciente";
            data = "funcion="+funcion+"&id_paciente="+identificador;
            nuevopaciente(1,prefid);      
            sendajaxpass(marco, ruta,data);
           
          
            if( identificador== "error bd"){
              advertencia("ELIMINADO");
           
              
            }else   if(identificador == "")
              advertenciaok("paciente anulado");
            else{ 
              advertenciaok("Paciente anulado!");
               
            }  
              
        }  
           
            
         

    }
    function validarut(prefid) {
       // if ($('#check1').prop('checked')) {
            var rut = document.getElementById("txt_rut"+prefid).value;
            var suma = 0;
            var verif = document.getElementById("txt_dverificador"+prefid).value;
             
            var bandera = false;
            var continuar = true;
           

            for (var i = 2; continuar; i++) {
                suma += (rut % 10) * i;
                rut = parseInt((rut / 10));
               
                if (i == 7) {
                    i = 1;
                }
                if (rut == 0)
                    continuar = false;
                else
                    continuar = true;
            }
           
            var resto = suma % 11;
            
            var dv = 11 - resto;



            if (dv == 10) {
                if (verif.toUpperCase() == 'K') {
               
                     advertenciaok("RUt CORRECTO");
                     bandera = true;
                    
                } else {
                    advertencia("RUT INCORRECTO");
                    
                     bandera = false;
                  
                }
            } else if (dv == 11  ) {
                if (verif == 0) {
                  advertenciaok("RUt CORRECTO");
                     bandera = true;
                 
                } else {
                   advertencia("RUT INCORRECTO");
                     bandera = false;
                
                }
            } else if (dv == verif  ) {
               advertenciaok("RUt CORRECTO");
                 bandera = true;
               // return true;
            } else {
              advertencia("RUT INCORRECTO");
                 bandera = false;
               // return false;
            }

     //   }
     obtpacientexrut(prefid);
     if(prefid == 1)
        validorut1 = bandera;
     else
        validorut2 = bandera; 
     /*
     if(bandera){
      
         obtpacientexrut();
     }else{
         if ($('#check1').prop('checked') == false) 
             obtpacientexrut();
      
         
     }*/
 //    return bandera;

    }
 function validarut2(prefid) {//genera un digito validador 
       if (!$("#checkhide1"+prefid).prop('checked')) {
            var rut = document.getElementById("txt_rut"+prefid).value;
            var suma = 0;
            var verif = document.getElementById("txt_dverificador"+prefid).value;
            var digito;
             
            var bandera = false;
            var continuar = true;
           

            for (var i = 2; continuar; i++) {
                suma += (rut % 10) * i;
                rut = parseInt((rut / 10));
               
                if (i == 7) {
                    i = 1;
                }
                if (rut == 0)
                    continuar = false;
                else
                    continuar = true;
            }
           
            var resto = suma % 11;
            
            var dv = 11 - resto;
            if (dv == 10) {
                digito = 'K';
            }else  if (dv == 11) {
                digito = '0';
            }else
                digito = dv;

document.getElementById("txt_dverificador"+prefid).value = digito;
       }
 //    return bandera;

    }
function estado_check(obj){
     if ($(obj).prop('checked')) {
            toastr.options.timeOut = 1200; // 1.5s
            toastr.options.positionClass = 'toast-top-left';
            // toatrs.options.progressBar=true;
            toastr.info("Se validará RUT");

        } else {
            toastr.options.timeOut = 1200; // 1.5s
            toastr.options.positionClass = 'toast-top-left';
            // toatrs.options.progressBar=true;
           // $("#txt_nacionalidad").val("");
            toastr.warning("No se validará RUT");
        }

}    
    
 $('#checkhide1').on('click', function () {
        if ($('#checkhide1').prop('checked')) {
            toastr.options.timeOut = 1500; // 1.5s
            toastr.options.positionClass = 'toast-top-left';
            // toatrs.options.progressBar=true;
            toastr.info("Se validará RUT");

        } else {
            toastr.options.timeOut = 1500; // 1.5s
            toastr.options.positionClass = 'toast-top-left';
            // toatrs.options.progressBar=true;
           // $("#txt_nacionalidad").val("");
            toastr.warning("No se validará RUT");
        }



    });
    
 function selcomuna(str,id) {
  
   
  marco = "comunas" ;
  ruta = "../funcion/listaobjetos.php";
  
 if (str.length== 0 ) {
        document.getElementById(marco).innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(marco).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../funcion/listaobjetos.php?id_ciudad="+id+"&value=" +str, true);
        xmlhttp.send();
    }
  
}
function cargainicial(){
      document.getElementById("comunas").innerHTML = "<select class='form-control' name='sel_comunas' id='sel_comunas'> <option value='0'>COMUNA</option></select> ";
      document.getElementById("compraprestacion").innerHTML = "";
  }