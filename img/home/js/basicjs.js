      function buscar_nombre() //prueba
            {
                data = '';
                marco = 'marco_nombres';
                ruta = '../funciones/lista_prestacion_nombres.php';
                sendajax(marco, ruta, data)
            }

            function validar_solo_letras(inpObj) {
                if (!inpObj.checkValidity()) {
                    return true;
                } else {
                    return false;
                }
            }

    function ingresar(value,nombre_sel)
            {    var  nombre = $("#pref_nombre"+value).val().toUpperCase();
            var id =  $("#lbl_pre_id"+value).text().trim();
            var sel = $("#"+nombre_sel+value).val();
            var descripcion = $("#pref_descripcion"+value).val();
            var numero = $("#pref_numero"+value).val();
                msg = "Problemas encontrados: <br>";
                
              
                bandera = 0;
                inpObj = document.getElementById("pref_nombre"+value);
                if (inpObj.valueOf() == '')
                {
                    bandera = 1;
                    msg += "-El Nombre debe contener solo letras y no debe sobrepasar las 12 letras <br>"
                } 
                    
                     
            
                inpObj = document.getElementById("pref_descripcion"+value);
                if (inpObj.valueOf() == '')
                {
                    bandera = 1;
                    msg += "-La descripcion debe contener solo letras y no debe sobrepasar las 50 letras <br>";
                }
                inpObj = document.getElementById("pref_numero"+value);
                if (inpObj.valueOf() == '')
                {
                    bandera = 1;
                    msg += "-El numero debe estar constituido solamente por numeros <br>";
                }
                inpObj = document.getElementById(nombre_sel+value);
                if (inpObj.valueOf() == 0)
                {
                    bandera = 1;
                    msg += "-Seleccionar un parametro <br>";
                }
               
                if (bandera == 0)
                  ;//  $('#alert').hide();
                else {
                    advertencia(msg);
                    nombre = "";
                    id =  "";
                    sel = "";
                    descripcion = "";
                    numero = "";
                }
         
        if(!bandera){  
           var nombre_formulario = $("#lbl_nombre_formulario"+value).text().trim();
        
            marco = "lbl_pre_id"+value ;
            if(id == 0){;
               data= 'funcion=insert'+nombre_formulario;
           }else{;
               data= 'funcion=update'+nombre_formulario;
           }
              data = data  +'&nombre='+nombre +'&id='+id+'&sel='+sel+'&descripcion='+descripcion+'&numero='+numero ;
              ruta = "../negocio/dataproducto.php";
              limpiarform(value);
              sendajaxsaved(marco,ruta,data,value);
        }else 
              advertencia("Se requiere datos por completar");
            }
  function limpiarform2(value ){
    
     
     habilitaform2(value,true);
      $("#lbl_prod_codigo_aux"+value).text("");
      $("#lbl_cat_id_aux"+value).text("");
      $("#lbl_prod_nombre_aux"+value).text("");
      $("#lbl_cat_etiqueta_aux"+value).text("");
}
  function limpiarform(value,nombre_sel)
            {    
                habilitaform(value,false,nombre_sel);
                $("#lbl_pre_id"+value).text('0');
                $("#pref_nombre"+value).val('');
                $("#pref_descripcion"+value).val('');
                $("#pref_numero"+value).val('');
                $("#nombre_sel"+value).val(0);
            } 
   function habilitaform(value,estado,nombre_sel)
            {
                $("#lbl_pre_id"+value).attr('disabled',estado);
                $("#pref_nombre"+value).attr('disabled',estado);
                $("#pref_descripcion"+value).attr('disabled',estado);
                $("#pref_numero"+value).attr('disabled',estado);
                $("#"+nombre_sel+value).attr('disabled',estado);
            } 
   function habilitaform2(value,estado)
            {
           //     $("#lbl_cat_id_aux"+value).attr('hidden',estado);
              $("#divtitulo"+value).attr('hidden',estado);
                $("#lbl_prod_nombre_aux"+value).attr('hidden',estado);
                $("#lbl_cat_etiqueta_aux"+value).attr('hidden',estado);
                $("#active1"+value).attr('hidden',estado);
                $("#deactive1"+value).attr('hidden',estado);
                
                  $("#activeetiqueta"+value).attr('hidden',estado);
                $("#active2"+value).attr('hidden',estado);
                $("#deactive2"+value).attr('hidden',estado);
                $("#active"+value).attr('hidden',estado);
            } 
  function listaselec(value){
      var nombre_formulario = $("#lbl_nombre_formulario"+value).text().trim();
      var destino = nombre_formulario.toUpperCase()+'_ID'+value;
      var id= ''
;     marco = "" ;
      data= 'funcion=sel'+nombre_formulario;
      ruta = "../negocio/dataproducto.php";
      sendajaxbasic(marco,ruta,data,destino,nombre_formulario,1,value);
}
function sendajaxbasic(marco,ruta,data,objdestino,nombre_formulario,opc,value){
 
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
    
           var myObj = JSON.parse(this.responseText);
              if(myObj !== null){
                if(opc){
                    llenarselect(myObj,objdestino,nombre_formulario);
                }else
                    cargardatos(myObj,objdestino,value);
              }else{
                  clearselect(objdestino);
                  deshabilitacat(objdestino,1);
              } 
          
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
}
  
  function selobjeto(obj,value){
  
    if( parseInt(obj.options[obj.selectedIndex].getAttribute('value')) !== 0 && obj.options[obj.selectedIndex].text !== 'null'){
      $("#pref_nombre"+value).val(obj.options[obj.selectedIndex].text);
      $("#lbl_pre_id"+value).text(obj.options[obj.selectedIndex].getAttribute('value'));
    }
    var objdestino = $("#lbl_nombre_sel"+value).text().trim();
     var nombre_formulario = $("#lbl_nombre_formulario"+value).text().trim();
    //  var destino = nombre_formulario.toUpperCase()+'_ID'+value;
      var id= obj.options[obj.selectedIndex].getAttribute('value');
;     marco = "" ;
      data= 'funcion=select'+nombre_formulario+'&id='+id;
      ruta = "../negocio/dataproducto.php";
      sendajaxbasic(marco,ruta,data,objdestino,'',0,value);
  }
  function cargardatos(obj,objdestino,value){
 
      console.log(objdestino);
      console.log(obj[0].descripcion);
       
      $("#pref_nombre"+value).val(obj[0].nombre);
      $("#lbl_pre_id"+value).text(obj[0].id);
      

       $("#pref_descripcion"+value).val(obj[0].descripcion);
       $("#pref_numero"+value).val(obj[0].numero);
        $("#"+objdestino).val(obj[0].sel);
  }
 function sendajaxsaved(marco,ruta,data,value){
 console.log('envio');
 
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
        
        if(marco !== ''){
          document.getElementById(marco).innerHTML = "";  
        
          document.getElementById(marco).innerHTML = this.responseText;
      }
         if(this.responseText > 0 || this.responseText == "" ){
          advertenciaok(msg1);
         
        }else if(this.responseText == 0)
          advertencia(msg2) 
              console.log(this.responseText);
   listaselec(value);
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 
  
   function eliminarregistro(value)
            {    
                msg = "Problemas encontrados: <br>";
                bandera = 0;
                inpObj = document.getElementById("lbl_pre_id"+value);
                if (inpObj.valueOf() == 0)
                {
                    bandera = 1;
                    msg += "-Seleccione un registro<br>"
                } 
                 

                if (bandera == 0)
                  ;//  $('#alert').hide();
                else {
                    advertencia(msg)
                  
                }
                
        if(!bandera){  
             var nombre_formulario = $("#lbl_nombre_formulario"+value).text().trim();
            var id =  $("#lbl_pre_id"+value).text().trim();
            marco =  "" ;
          
            data= 'funcion=delete'+nombre_formulario;
          
            data = data+'&id='+id ;
            ruta = "../negocio/dataproducto.php";
            limpiarform(value);
            sendajaxsaved(marco,ruta,data,value);
        }else 
            advertencia("Se requiere datos por completar");
            }
            
  function sel2(obj,tipo ){
    
     value = $('#lblvalue4').text();
     habilitaform2(value,false);
      $("#lbl_prod_codigo_aux"+value).text(obj.prod_codigo);
      $("#lbl_cat_id_aux"+value).text(obj.cat_id);
      $("#lbl_prod_nombre_aux"+value).text(obj.prod_nombre);
      $("#lbl_cat_etiqueta_aux"+value).text(obj.cat_arbol);
}
  function ingresar2(value, opc)
            {     
            var id =  $("#lbl_pre_id"+value).text().trim();
            id = parseInt(id);
            var codigo='';
            if(opc)
                codigo = $("#lbl_prod_codigo_aux"+value).text().trim();
            else 
               codigo = $("#lbl_cat_id_aux"+value).text().trim();
           
                msg = "Problemas encontrados: <br>";
               bandera = 0;
                
                if (id == '' || id == 0 )
                {
                    bandera = 1;
                    msg += "-El producto <br>"
                } 
                 if (codigo == '' || codigo == 0  )
                {
                    bandera = 1;
                    msg += "-Selecciona la equivalencia <br>";
                }
              
         
        if(!bandera){  
           var nombre_formulario = $("#lbl_nombre_formulario"+value).text().trim();
          var aceptar = false;
          marco = "lbl_nombre_sel"+value ;
      
            if(id !== 0 && ( codigo !== '' ||  codigo2 !== '')){
                if(opc){
                     data= 'funcion=insertasoc'+nombre_formulario;
                     aceptar = true;
                }else{
                    if(confirm("Confirma la asociación masiva?")){
                        data= 'funcion=insertcat'+nombre_formulario;
                        aceptar = true;
                    } 
                } 
            if(aceptar){
              data = data +'&id='+id+'&codigo='+codigo+'&categoria='+codigo ;
              ruta = "../negocio/dataproducto.php";
              limpiarform2(value);
              sendajaxsaved(marco,ruta,data,value);
            }
          }
        }else 
              advertencia("Se requiere datos por completar");
            }
            
 function delete2(value, opc)
            {     
            var id =  $("#lbl_pre_id"+value).text().trim();
            
            var codigo='';
            if(opc)
                codigo = $("#lbl_prod_codigo_aux"+value).text().trim();
            else 
               codigo = $("#lbl_cat_id_aux"+value).text().trim();
           
                msg = "Problemas encontrados: <br>";
                
              
                bandera = 0;
                
                if (id == '' || id == 0 )
                {
                    bandera = 1;
                    msg += "-El producto <br>"
                } 
                    
              
                    
            
               
                if (codigo == '' || codigo == 0  )
                {
                    bandera = 1;
                    msg += "-Selecciona la equivalencia <br>";
                }
                
               
             
         
        if(!bandera){  
           var nombre_formulario = $("#lbl_nombre_formulario"+value).text().trim();
        
         //  marco = "lbl_pre_id"+value ;
         marco = "";
            if(id !== 0 && ( codigo !== '' ||  codigo2 !== ''))
              if(opc)
                      data= 'funcion=deleteasoc'+nombre_formulario;
                else
                     data= 'funcion=deletecat'+nombre_formulario;
              
            
              data = data +'&id='+id+'&codigo='+codigo+'&categoria='+codigo ;
              ruta = "../negocio/dataproducto.php";
              limpiarform2(value);
              sendajaxsaved(marco,ruta,data,value);
        }else 
              advertencia("Se requiere datos por completar");
  }
  
 function imprimir(){
      var parametros = 'funcion=rpt1&fecha=';   
       AbrirVentana("../funcion/listaprod.php", parametros, "", 600, 500);
 }

function cargar_item(nombre_marco, value) //prueba
            {
                var id =  $("#lbl_pre_id"+value).text().trim();
                data = '';
                marco = 'livesearch8';
                marco = nombre_marco;
                ruta = '../funcion/listaprod_1.php';
                 data = '?opcion=7&valor=1&origen=5'+'&id='+id;
                sendajaxget(marco, ruta, data);
            }
 function cargar_item2(nombre_marco, value) //prueba
{
              //  var id =  $("#lbl_pre_id"+value).text().trim();
              if( $("#LBL_PROD_CODIGO"+value).text().trim() !== 0){
                    var codigo = $("#LBL_PROD_CODIGO"+value).text().trim();  
                    
             }
             if(codigo !== 0){  
                data = '';
                marco = 'livesearch8';
                marco = nombre_marco;
                ruta = '../funcion/listaprod_1.php';
                 data = '?opcion=8&valor=1&origen=5&codigo='+codigo;
                sendajaxget(marco, ruta, data);
             }    
}           
            
 function sendajaxget(marco, ruta, data){
  
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
 }