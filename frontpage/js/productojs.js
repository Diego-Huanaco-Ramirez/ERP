  function habilitaprod(value){ console.log("clean");
      //  $("#PROD_CODIGO"+value).attr('disabled',false);  
       $("#BTN_MSERVICE"+value).attr('disabled',false);
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
        $("#COLOR_ID"+value).attr('disabled',false);  
        $("#PROD_PESO_CTROL"+value).attr('disabled',false);  
        $("#PROD_LARGO"+value).attr('disabled',false);  
        $("#PROD_ANCHO"+value).attr('disabled',false);  
        $("#PROD_ALTO"+value).attr('disabled',false);  
        $("#PROD_ESTADO"+value).attr('disabled',false);   
        $("#PROD_SERVICIO"+value).attr('disabled',false);  
      //  $("#GENERA_CODIGO"+value).attr('disabled',false);   
      $("#BTN_PROD_GRABAR"+value).attr('disabled',false);
        $("#BTN_PROD_ELIMINAR"+value).attr('disabled',false);
        
        
  }
  function deshabilitaprod(value){console.log("clean2");
      limpiaprod(value);
    $("#BTN_MSERVICE"+value).attr('disabled',true);
   $("#PROD_CODIGO"+value).attr('disabled',true);  
        $("#MARCA_ID"+value).attr('disabled',true); 
        $("#UMED_CODIGO"+value).attr('disabled',true);  
        $("#CAT_ID"+value).attr('disabled',true);  
         $("#PROD_CODIGO"+value).attr('disabled',true);  
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
        $("#COLOR_ID"+value).attr('disabled',true);  
        $("#PROD_PESO_CTROL"+value).attr('disabled',true);  
        $("#PROD_LARGO"+value).attr('disabled',true);  
        $("#PROD_ANCHO"+value).attr('disabled',true);  
        $("#PROD_ALTO"+value).attr('disabled',true);  
        $("#PROD_ESTADO"+value).attr('disabled',true);   
        $("#PROD_SERVICIO"+value).attr('disabled',true);  
   //     $("#GENERA_CODIGO"+value).attr('disabled',true); 
    $("#BTN_PROD_GRABAR"+value).attr('disabled',true);
     $("#BTN_PROD_ELIMINAR"+value).attr('disabled',true);
  }
  function limpiaprod(value){
    
  
habilitacampo(value,0);
nombre_cat= 'SEL_CATGC'+value;
deshabilitacat(nombre_cat,0);
       habilitaprod(value); console.log("clean");
       $("#BTN_MSERVICE"+value).attr('disabled',true);
        $("#LBL_PROD_CODIGO"+value).text(0); 
        $("#LBL_CAT_ID"+value).text(0); 
         $("#PROD_CAT_ID"+value).val(''); 
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
        $("#PROD_UMEDIDA_CANT"+value).val(1); 
        $("#PROD_SIST_MEDIDA"+value).val(1);  
        $("#COLOR_ID"+value).val(0); 
        $("#PROD_PESO_CTROL"+value).val(''); 
        $("#PROD_LARGO"+value).val(''); 
        $("#PROD_ANCHO"+value).val(''); 
        $("#PROD_ALTO"+value).val(''); 
        $("#PROD_ESTADO"+value).val('');  
        $("#PROD_SERVICIO"+value).val('');
           $("#BTN_PROD_ELIMINAR"+value).attr('disabled',true);
     //   $("#GENERA_CODIGO"+value).val('');

  }
    function eliminarprod(value){
     var bandera = false;
    bandera
    if( $("#LBL_PROD_CODIGO"+value).text().trim() !== 0){
             var LBL_PROD_CODIGO = $("#LBL_PROD_CODIGO"+value).text().trim();  
            bandera = true;
    }
        if(bandera){  
           if(confirm("??Confirma la eliminaci??n?")){
               limpiaprod(value);
             
                marco = "LBL_PROD_CODIGO"+value ;
                data= 'funcion=eliminaproducto'
                    +'&prod_codigo='+LBL_PROD_CODIGO;

                ruta = "../negocio/dataproducto.php";
                sendajaxprod(marco,ruta,data);
           }
        }else 
            advertencia("Se requiere datos por completar");
  }
  function obtenerdataprod(value, esservicio){
    var PROD_CODIGO = $("#PROD_CODIGO"+value).val(); 
   var LBL_PROD_CODIGO = $("#LBL_PROD_CODIGO"+value).text().trim();  
   var LBL_PROD_TIPO = $("#LBL_PROD_TIPO"+value).text().trim();
        var MARCA_ID = $("#MARCA_ID"+value).val(); 
        var UMED_CODIGO = $("#UMED_CODIGO"+value).val(); 
  var CAT_ID = parseInt($("#LBL_CAT_ID"+value).text().trim());  
  var CAT_ETIQUETA = $("#PROD_CAT_ID"+value).val(); 
        var PROD_CODIGOBARRA = $("#PROD_CODIGOBARRA"+value).val();  
  var PROD_NOMBRE = $("#PROD_NOMBRE"+value).val().toUpperCase(); 
  
        var PROD_TIPO = $("#PROD_TIPO"+value).val();  
        var PROD_INFORMACIONADIC = $("#PROD_INFORMACIONADIC"+value).val();  
        var PROD_CODIGOARANCELARIO = $("#PROD_CODIGOARANCELARIO"+value).val();
        
        var PROD_PRECIO1 = $("#PROD_PRECIO1"+value).val();  
        var PROD_PRECIO2 = $("#PROD_PRECIO2"+value).val(); 
        
        var PROD_LEY18211 = $("#PROD_LEY18211"+value).prop('checked');
        var PROD_FABRICADOZF = $("#PROD_FABRICADOZF"+value).prop('checked');
        var PROD_DESCRIPCION = $("#PROD_DESCRIPCION"+value).val();  
   
        
        var PROD_MODELO = $("#PROD_MODELO"+value).val();  
    var PROD_UMEDIDA_CANT = $("#PROD_UMEDIDA_CANT"+value).val(); 
        var PROD_SIST_MEDIDA = $("#PROD_SIST_MEDIDA"+value).val();
    var COLOR_ID = parseInt($("#COLOR_ID"+value).val());  
        var PROD_PESO_CTROL = parseFloat($("#PROD_PESO_CTROL"+value).val()); 
        var PROD_LARGO = parseFloat($("#PROD_LARGO"+value).val());  
        var PROD_ANCHO = parseFloat($("#PROD_ANCHO"+value).val());  
        var PROD_ALTO = parseFloat($("#PROD_ALTO"+value).val());  
        var PROD_ESTADO = $("#PROD_ESTADO"+value).val();   
       
    //var PROD_SERVICIO = $("#PROD_SERVICIO"+value).val();  
   var PROD_SERVICIO=  esservicio;
        //   alert(PROD_SERVICIO);
    var GENERA_CODIGO = $("#GENERA_CODIGO"+value).prop('checked');  
    var bandera = false;
    if(!esservicio){
         if(PROD_CODIGO == '' && LBL_PROD_CODIGO == 0){
           console.log("ACCESO 1");
            
                if(GENERA_CODIGO){
                    
                    if(PROD_NOMBRE !== ''){
                         console.log("con nombre!");
                            if(CAT_ID !== 0 ){
                                
                                bandera = true;
                            }else{
                              
                                if(confirm("??CONFIRMAR CREAR PRODUCTO SIN CATEGORIA?"))   { 
                                     bandera = true;
                                }else
                                    bandera = false;
                            }
                    }else{
                          console.log("sin nombre!");
                          bandera = false;
                     } 

                }else{
                   if(PROD_CODIGO !== '' && PROD_NOMBRE !== '')
                       bandera = true;
                }
          }else   if(PROD_CODIGO !== '' && LBL_PROD_CODIGO !== ''){
             
                 bandera = true;
          }
              
     }else{
          console.log("ACCESO 2");
        if(PROD_NOMBRE !== '')
               bandera = true; 
         
     }
        
   
        if(bandera){  
           limpiaprod(value);
           var id = 'C'+value;
           limpiacat(id);
             console.log(PROD_CODIGO);
          if(PROD_CODIGO == '' && LBL_PROD_CODIGO == 0)
              marco = '';
          else 
              marco = "LBL_PROD_CODIGO"+value ;
           data= 'funcion=insertproducto'
                +'&prod_codigo='+PROD_CODIGO+'&cat_id='+CAT_ID+'&prod_nombre='+PROD_NOMBRE+'&prod_color='+COLOR_ID
               +'&marca_id='+MARCA_ID+'&umed_codigo='+UMED_CODIGO+'&prod_codigobarra='+PROD_CODIGOBARRA
                +'&prod_tipo='+PROD_TIPO+'&prod_informacionadic='+PROD_INFORMACIONADIC+'&prod_codigoarancelario='+PROD_CODIGOARANCELARIO
                +'&prod_precio1='+PROD_PRECIO1+'&prod_precio2='+PROD_PRECIO2
                +'&prod_ley18211='+PROD_LEY18211+'&prod_fabricadozf='+PROD_FABRICADOZF+'&prod_descripcion='+PROD_DESCRIPCION+'&prod_modelo='+PROD_MODELO
                +'&prod_umedida_cant='+PROD_UMEDIDA_CANT+'&prod_sist_medida='+PROD_SIST_MEDIDA+'&prod_peso_ctrol='+PROD_PESO_CTROL+'&genera_codigo='+GENERA_CODIGO 
               +'&prod_largo='+PROD_LARGO+'&prod_ancho='+PROD_ANCHO+'&prod_alto='+PROD_ALTO+'&prod_estado='+PROD_ESTADO+'&prod_servicio='+PROD_SERVICIO
               +'&lbl_prod_tipo='+LBL_PROD_TIPO+'&cat_etiqueta='+CAT_ETIQUETA                         ;
            ruta = "../negocio/dataproducto.php";
          sendajaxprod(marco,ruta,data);
        }else 
            advertencia("Se requiere datos por completar");
  }
  
  var msg1="??xito";
    var msg1="error";
  function sendajaxprod(marco,ruta,data){
 console.log('envio');
 
;;;     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
        if(marco !== ''){
          document.getElementById(marco).innerHTML = "";  
        
          document.getElementById(marco).innerHTML = this.responseText;
      }
         if(this.responseText > 0 || this.responseText == "" )
          advertenciaok(msg1); 
         else if(this.responseText == 0)
          advertencia(msg2) 
           //   console.log(this.responseText);
  
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
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
        $("#COLOR_ID"+value).val(data[0]['campo']);  
        $("#PROD_PESO_CTROL"+value).val(data[0]['campo']);  
        $("#PROD_LARGO"+value).val(data[0]['campo']);  
        $("#PROD_ANCHO"+value).val(data[0]['campo']);  
        $("#PROD_ALTO"+value).val(data[0]['campo']);  
        $("#PROD_ESTADO"+value).val(data[0]['campo']);   
        $("#PROD_SERVICIO"+value).val(data[0]['campo']); 
  }
  