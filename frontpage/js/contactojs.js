  function ingresarcontacto()
{   
           
            var nombre = $("#nombre").val().trim();
            var email =  $("#email").val().trim();
        //    var sel = $("#"+nombre_sel+value).val();
            var telefono = $("#telefono").val().trim();
            var asunto = $("#asunto").val().trim();
            var mensaje = $("#mensaje").val().trim();
            
                msg = "Problemas encontrados: <br>";
                
              
                bandera = 0;
               
                if (nombre == '')
                {  
                    bandera = 1;
                    msg += "-Debe registrar el nombre. <br>"
                } 
                
               
                if (email == '')
                { 
                    bandera = 1;
                    msg += "-Debe registrar el email. <br>";
                }
               
                if (asunto == '')
                { 
                    bandera = 1;
                    msg += "-Debe registrar el asunto. <br>";
                }
            
                if ( mensaje == '')
                { 
                    bandera = 1;
                    msg += "-Debe registrar el mensaje. <br>";
                }
               
                if (bandera == 0)
                  ;//  $('#alert').hide();
                else {
                    advertencia(msg);
             nombre = "";
             email =  "";
        //     sel = "";
             telefono = "";
             asunto = "";
             mensaje ="";
                }
         
        if(!bandera){  
           alert(nombre);
               data= 'funcion=contacto';
          
              data = data  +'&nombre='+nombre +'&email='+email+'&sel='+sel+'&telefono='+telefono+'&asunto='+asunto+'&mensaje='+mensaje ;
              ruta = "../negocio/dataproducto.php";
              limpiarcontacto();
              sendajaxsaved(marco,ruta,data,value);
        }else 
              advertencia("Se requiere datos por completar");
  }
  function limpiarcontacto()
            {    
              
                $("#nombre").val('');
                $("#email").val('');
                $("#telefono").val('');
                $("#asunto").val('');
                 $("#mensaje").val('');
             //   $("#nombre_sel"+value).val(0);
            } 
   function sendajaxsaved(marco,ruta,data,value){
 
 
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
        
        if(marco !== ''){
          document.getElementById(marco).innerHTML = "";  
        
          document.getElementById(marco).innerHTML = this.responseText;
      }
         
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 
