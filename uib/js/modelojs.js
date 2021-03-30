  function habilitaprod(value){ console.log("clean");
       	$("#PROD_CODIGO"+value).attr('disabled',false);  
        $("#MARCA_ID"+value).attr('disabled',false); 
        $("#UMED_CODIGO"+value).attr('disabled',false);  
        $("#CAT_ID"+value).attr('disabled',false);  
        $("#PROD_CODIGOBARRA"+value).attr('disabled',false);  
        $("#PROD_NOMBRE"+value).attr('disabled',false);  
        $("#PROD_TIPO"+value).attr('disabled',false);  
        $("#PROD_INFORMACIONADIC"+value).attr('disabled',false);  
        $("#PROD_CODIGOARANCELARIO"+value).attr('disabled',false);   
        $("#PROD_PRECIO1"+value).attr('disabled',false);  
        $("#PROD_PRECIO2"+value).attr('disabled',false);  
        $("#PROD_LEY18211"+value).attr('disabled',false);  
        $("#PROD_FABRICADOZF"+value).attr('disabled',false);   
        $("#PROD_DESCRIPCION"+value).attr('disabled',false);  
        $("#PROD_MODELO"+value).attr('disabled',false);  
        $("#PROD_UMEDIDA_CANT"+value).attr('disabled',false);  
        $("#PROD_SIST_MEDIDA"+value).attr('disabled',false);   
        $("#PROD_COLOR"+value).attr('disabled',false);  
        $("#PROD_PESO_CTROL"+value).attr('disabled',false);  
        $("#PROD_LARGO"+value).attr('disabled',false);  
        $("#PROD_ANCHO"+value).attr('disabled',false);  
        $("#PROD_ALTO"+value).attr('disabled',false);  
        $("#PROD_ESTADO"+value).attr('disabled',false);   
        $("#PROD_SERVICIO"+value).attr('disabled',false);      
        
        
  }
  function deshabilitaprod(value){console.log("clean2");
      $("#PROD_CODIGO"+value).attr('disabled',true);  
        $("#MARCA_ID"+value).attr('disabled',true); 
        $("#UMED_CODIGO"+value).attr('disabled',true);  
        $("#CAT_ID"+value).attr('disabled',true);  
        $("#PROD_CODIGOBARRA"+value).attr('disabled',true);  
        $("#PROD_NOMBRE"+value).attr('disabled',true);  
        $("#PROD_TIPO"+value).attr('disabled',true);  
        $("#PROD_INFORMACIONADIC"+value).attr('disabled',true);  
        $("#PROD_CODIGOARANCELARIO"+value).attr('disabled',true);   
        $("#PROD_PRECIO1"+value).attr('disabled',true);  
        $("#PROD_PRECIO2"+value).attr('disabled',true);  
        $("#PROD_LEY18211"+value).attr('disabled',true);  
        $("#PROD_FABRICADOZF"+value).attr('disabled',true);   
        $("#PROD_DESCRIPCION"+value).attr('disabled',true);  
        $("#PROD_MODELO"+value).attr('disabled',true);  
        $("#PROD_UMEDIDA_CANT"+value).attr('disabled',true);  
        $("#PROD_SIST_MEDIDA"+value).attr('disabled',true);   
        $("#PROD_COLOR"+value).attr('disabled',true);  
        $("#PROD_PESO_CTROL"+value).attr('disabled',true);  
        $("#PROD_LARGO"+value).attr('disabled',true);  
        $("#PROD_ANCHO"+value).attr('disabled',true);  
        $("#PROD_ALTO"+value).attr('disabled',true);  
        $("#PROD_ESTADO"+value).attr('disabled',true);   
        $("#PROD_SERVICIO"+value).attr('disabled',true);  
  }
  function limpiaprod(value){
       habilitaprod(value); console.log("clean");
        $("#PROD_CODIGO"+value).val(''); 
        $("#MARCA_ID"+value).val('');
        $("#UMED_CODIGO"+value).val(''); 
        $("#CAT_ID"+value).val(''); 
        $("#PROD_CODIGOBARRA"+value).val(''); 
        $("#PROD_NOMBRE"+value).val(''); 
        $("#PROD_TIPO"+value).val(''); 
        $("#PROD_INFORMACIONADIC"+value).val(''); 
        $("#PROD_CODIGOARANCELARIO"+value).val('');  
        $("#PROD_PRECIO1"+value).val(''); 
        $("#PROD_PRECIO2"+value).val(''); 
        $("#PROD_LEY18211"+value).val(''); 
        $("#PROD_FABRICADOZF"+value).val('');  
        $("#PROD_DESCRIPCION"+value).val(''); 
        $("#PROD_MODELO"+value).val(''); 
        $("#PROD_UMEDIDA_CANT"+value).val(''); 
        $("#PROD_SIST_MEDIDA"+value).val('');  
        $("#PROD_COLOR"+value).val(''); 
        $("#PROD_PESO_CTROL"+value).val(''); 
        $("#PROD_LARGO"+value).val(''); 
        $("#PROD_ANCHO"+value).val(''); 
        $("#PROD_ALTO"+value).val(''); 
        $("#PROD_ESTADO"+value).val('');  
        $("#PROD_SERVICIO"+value).val('');

  }
  
  function obtenerdataprod(value){
      
        var VARIABLE = $("#PROD_CODIGO"+value).val();  
        var VARIABLE = $("#MARCA_ID"+value).val(); 
        var VARIABLE = $("#UMED_CODIGO"+value).val();  
        var VARIABLE = $("#CAT_ID"+value).val();  
        var VARIABLE = $("#PROD_CODIGOBARRA"+value).val();  
        var VARIABLE = $("#PROD_NOMBRE"+value).val();  
        var VARIABLE = $("#PROD_TIPO"+value).val();  
        var VARIABLE = $("#PROD_INFORMACIONADIC"+value).val();  
        var VARIABLE = $("#PROD_CODIGOARANCELARIO"+value).val();   
        var VARIABLE = $("#PROD_PRECIO1"+value).val();  
        var VARIABLE = $("#PROD_PRECIO2"+value).val();  
        var VARIABLE = $("#PROD_LEY18211"+value).val();  
        var VARIABLE = $("#PROD_FABRICADOZF"+value).val();   
        var VARIABLE = $("#PROD_DESCRIPCION"+value).val();  
        var VARIABLE = $("#PROD_MODELO"+value).val();  
        var VARIABLE = $("#PROD_UMEDIDA_CANT"+value).val();  
        var VARIABLE = $("#PROD_SIST_MEDIDA"+value).val();   
        var VARIABLE = $("#PROD_COLOR"+value).val();  
        var VARIABLE = $("#PROD_PESO_CTROL"+value).val();  
        var VARIABLE = $("#PROD_LARGO"+value).val();  
        var VARIABLE = $("#PROD_ANCHO"+value).val();  
        var VARIABLE = $("#PROD_ALTO"+value).val();  
        var VARIABLE = $("#PROD_ESTADO"+value).val();   
        var VARIABLE = $("#PROD_SERVICIO"+value).val();  
  }
  
  function cargardataprod(value){
       $("#PROD_CODIGO"+value).val(data[0]['campo']);  
        $("#MARCA_ID"+value).val(data[0]['campo']); 
        $("#UMED_CODIGO"+value).val(data[0]['campo']);  
        $("#CAT_ID"+value).val(data[0]['campo']);  
        $("#PROD_CODIGOBARRA"+value).val(data[0]['campo']);  
        $("#PROD_NOMBRE"+value).val(data[0]['campo']);  
        $("#PROD_TIPO"+value).val(data[0]['campo']);  
        $("#PROD_INFORMACIONADIC"+value).val(data[0]['campo']);  
        $("#PROD_CODIGOARANCELARIO"+value).val(data[0]['campo']);   
        $("#PROD_PRECIO1"+value).val(data[0]['campo']);  
        $("#PROD_PRECIO2"+value).val(data[0]['campo']);  
        $("#PROD_LEY18211"+value).val(data[0]['campo']);  
        $("#PROD_FABRICADOZF"+value).val(data[0]['campo']);   
        $("#PROD_DESCRIPCION"+value).val(data[0]['campo']);  
        $("#PROD_MODELO"+value).val(data[0]['campo']);  
        $("#PROD_UMEDIDA_CANT"+value).val(data[0]['campo']);  
        $("#PROD_SIST_MEDIDA"+value).val(data[0]['campo']);   
        $("#PROD_COLOR"+value).val(data[0]['campo']);  
        $("#PROD_PESO_CTROL"+value).val(data[0]['campo']);  
        $("#PROD_LARGO"+value).val(data[0]['campo']);  
        $("#PROD_ANCHO"+value).val(data[0]['campo']);  
        $("#PROD_ALTO"+value).val(data[0]['campo']);  
        $("#PROD_ESTADO"+value).val(data[0]['campo']);   
        $("#PROD_SERVICIO"+value).val(data[0]['campo']); 
  }
   function sendajaxprod(marco,ruta,data){
      
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