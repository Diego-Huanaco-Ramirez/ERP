function cargarlogin(){
         $("#myModallogin").modal({keyboard: false});
   
       $("#myModallogin").on('show.bs.modal', function () {
       
    });
   
} 
function hidemodal(name){
         
       $(name).modal('hide');
  
} 
function cargarregistro(){
         $("#Modalcliente").modal({keyboard: false});
   
       $("#Modalcliente").on('show.bs.modal', function () {
       
    });
   
} 

function publicar(obj){
    alert($(obj).val());
}
function login3(value){
     
   rut = $('#rut'+value).val();
   pwd_actual = $('#pwd'+value).val();
 alert(pwd_actual);
    var arrRut = rut.split("-");
    var rutSolo = arrRut[0];
    var verif = arrRut[1];
    data = 'funcion=acceso2&rut_personal='+rutSolo+'&pwd_actual='+pwd_actual+'&dverficador='+verif;
   
   marco= "respuesta"+value;
   ruta= "../negocio/dmatriz.php";
   var bandera = true;
   if($("#lblrutlogueado").text() !== '0' ){
        bandera = false; 
         if(confirm("Desea terminar la sesion?")){
             cerrar();
        }
   } 
   if(bandera){
         if(pwd_actual.length > 0){
           sendajaxpass2(marco,ruta,data);

         }else 
          alert("Ingrese una contraseña validada");
     } 
       
      
}
function login2(value){
     
   rut = $('#rut'+value).val();
   pwd_actual = $('#pwd'+value).val();
 alert(pwd_actual);
    var arrRut = rut.split("-");
    var rutSolo = arrRut[0];
    var verif = arrRut[1];
    data = 'funcion=acceso2&rut_personal='+rutSolo+'&pwd_actual='+pwd_actual+'&dverficador='+verif;
   
   marco= "respuesta"+value;
   ruta= "../negocio/dmatriz.php";
   var bandera = true;
   if($("#lblrutlogueado").text() !== '0' ){
        bandera = false; 
         if(confirm("Desea terminar la sesion?")){
             cerrar();
        }
   } 
   if(bandera){
         if(pwd_actual.length > 0){
           sendajaxpass2(marco,ruta,data);

         }else 
          alert("Ingrese una contraseña validada");
     } 
       
      
}
function sendajaxpass2(marco,ruta,data){
    // var bandera = false;
    var valor ;
  if(navigator.onLine)
  {
   
;     var xhttp = new XMLHttpRequest();
     // alert("estado:"+this.readyState);
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
   
     myArr = jQuery.parseJSON(this.responseText);
  
        if(myArr !== null){ 
         
          redireccionar2(myArr);
        }else
            alert("La contraseña no coincide");
         
     }else 
         ;
      
     };
     
     
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
     
  }else
       alert("is offline");
} 
 function redireccionar2(obj){
   
        
          nombre = obj[0].nombre_paciente ;
          nombre = nombre+' '+obj[0].apellido_ppaciente;
          rut = obj[0].identificador  ;
         // alert(nombre);
            $("#lblusuario").html('<h4 class="modal-title"><i class="fas fa-user-circle"></i>'+nombre);  
            $("#lbluserlogueado").text(nombre); 
            $("#lblrutlogueado").text(rut); 
            $("#btn_cerrar_sesion").attr('hidden', false);
        //    cerrarlogin();
            marco= "";
;            var confirma = true;
            
        
             
            // alert("cantidad : "+ myArr[0]['prod_nombre']); 
          //   console.log(myArreglo.length);
            data = 'funcion=login&nombre='+nombre+'&rut='+rut;
            ruta= "index.php";
            if(obj.length > 0){
               var cantidad= canasta();
               if(cantidad){
                  if(confirm("Confirma agregar elementos a su canasta?")){
                       tranfierecanasta(rut);
                  }else
                      confirma = false;
                   
                     
               }  
            
               data2 = 'funcion=cargarcanasta&rut='+rut+'&confirma='+confirma;
               ruta2 = "../negocio/dataproducto.php";
               sendajaxpass3(marco,ruta2,data2);  
                sendajaxpass(marco,ruta,data);
            
                
                closemodal('#myModallogin');
            }else 
              alert("Ingrese una contraseña validada");
          // uri= "index.php?nombre="+nombre;
           
        //    window.location= encodeURI(uri,"_blank","noopener noreferrer");
 
}
function cerrarlogin(){
$("#myModallogin").modal("hide");
}
    
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModallogin").modal("show");
    });
        $("#myModallogin").on('shown.bs.modal', function () {
       
    });
});
 function redireccionar(obj){
   // alert(obj[0].tipo_personal);
         cerrar();
          nombre = obj[0].nombre_personal ;
          nombre = nombre+' '+obj[0].apellido_ppersonal;
          rut = obj[0].rut_personal  ;
          tipo_personal = obj[0].tipo_personal;
          cod_tipo_especialista = obj[0].cod_tipo_especialista ; //codigo de perfil
         
            $("#lblusuario").text(obj[0].nombre_personal);  
            cerrarlogin();
            
      
          if(tipo_personal== 2)  
            uri= "oftalmologia.php?nombre="+nombre+"&rut="+rut+"&tipo_personal="+tipo_personal+"&cod_tipo_especialista="+cod_tipo_especialista;
          else
            uri= "oftalmologia.php?nombre="+nombre+"&rut="+rut+"&tipo_personal="+tipo_personal+"&cod_tipo_especialista="+cod_tipo_especialista;
           /* uri= "oftalmologia.php?nombre="+nombre+"&rut="+rut+"&tipo_personal="+tipo_personal+"&cod_tipo_especialista="+cod_tipo_especialista;*/
     
            window.location= encodeURI(uri,"_blank","noopener noreferrer");
  
   
  
}   
function cerrar(){
      $("#lblusuario").html('<h4 class="modal-title"><i class="fas fa-user-circle"></i>')  ;
      $("#lbluserlogueado").text('');
      $("#lblrutlogueado").text('0'); 
      $("#btn_cerrar_sesion").attr('hidden', true);
      marco= "";
      data = 'funcion=cerrar';
      ruta= "index.php";
       closemodal('#myModallogin');
      sendajaxpass(marco,ruta,data);
       
 }