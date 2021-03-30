function calculaprecio2(valor, value){
      var calculado = 0;
      calculado = valor * 0.75;
      $("#PROD_PRECIO2"+value).val(calculado);  
  }
  //funciones especificias
  function nuevoproductoxcat(value){
      //limpiaprod(value);
   //   $("#PROD_CODIGO"+value).attr('disabled',true); 
  }
  function limpiaSprod(value, marco,valuecat){
 
      console.log(value);
    document.getElementById(marco).innerHTML="";
    document.getElementById(marco).style.border="0px";
    $("#inputnombre6").val('');
    $("#COLOR_ID"+value).val(0);
      $("#COLOR_ID"+value).attr('disabled',false);
    limpiacat(valuecat);
    nombre_cat= 'SEL_CATG'+value;
    deshabilitacat(nombre_cat,0);
  }
  function showResult(str, opc, origen) {
    
    var compare=0;
    if(origen == 1 ){
   
        marco = "livesearch1";
    }else if(origen == 2 ){
        //ruta = "../funcion/listadatos.php";
        marco = "livesearch5";
     }else if(origen == 3   ){
         marco = "livesearch6";
      
     }else if(  origen == 4 ){
         compare = $("#lbl_pre_id4").text().trim();
         marco = "livesearch7";
      
     }else if(  origen == 5 ){
         compare = $("#lbl_pre_id4").text().trim();
         marco = "livesearch8";
      
     } else if(  origen == 6 ){
       //  compare = $("#lbl_pre_id4").text().trim();
         marco = "livesearch9";
      
     }      
     
     if(  origen == 6 ){
         ruta = "../funcion/listaprodweb.php";
     }else
         ruta = "../funcion/listaprod.php";
         
    
       if(opc== 3 ){
         // if(rutvalida())   
           //  str=$("#inputrut").val();
          ;
       }    
   
       data = '?opcion='+opc+'&valor='+str+'&origen='+origen+'&compare='+compare;
  if (str.length==0 && str == '') {
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
       
     }  
} 


function sel(obj,tipo ){
 var value = $('#lblvalue3').text();

 $("#livesearch6").html('');
  $("#inputnombre6").val('');
 limpiaprod(value);
 if(!obj.prod_servicio){
   nombre_cat= 'SEL_CATGC'+value;
    deshabilitacat(nombre_cat,1);
}
 $("#BTN_PROD_ELIMINAR"+value).attr('disabled',false);
 $("#PROD_CODIGO"+value).attr('disabled',true); 
 $("#BTN_MSERVICE"+value).attr('disabled',false);
 $("#LBL_PROD_CODIGO"+value).text(obj.prod_codigo); 
            $("#PROD_CODIGO"+value).val(obj.prod_codigo);  
        $("#MARCA_ID"+value).val(obj.marca_id); 
        $("#UMED_CODIGO"+value).val(obj.umed_codigo);  
        $("#LBL_CAT_ID"+value).text(obj.cat_id);  
        $("#PROD_CAT_ID"+value).val(obj.cat_etiqueta); 
        $("#CAT_ARBOL"+value).text(obj.cat_arbol);  
        $("#PROD_CODIGOBARRA"+value).val(obj.prod_codigobarra);  
            $("#PROD_NOMBRE"+value).val(obj.prod_nombre);  
        $("#PROD_TIPO"+value).val(obj.prod_tipo);  
        $("#PROD_INFORMACIONADIC"+value).val(obj.prod_informacionadic);  
        $("#PROD_CODIGOARANCELARIO"+value).val(obj.prod_codigoarancelario);   
            $("#PROD_PRECIO1"+value).val(obj.prod_precio1);  
        $("#PROD_PRECIO2"+value).val(obj.prod_precio2);  
        $("#PROD_LEY18211"+value).val(obj.prod_ley18211);  
        $("#PROD_FABRICADOZF"+value).val(obj.prod_fabricadozf);   
        $("#PROD_DESCRIPCION"+value).val(obj.prod_descripcion);  
        $("#PROD_MODELO"+value).val(obj.prod_modelo);  
        $("#PROD_UMEDIDA_CANT"+value).val(obj.prod_umedida_cant);  
        $("#PROD_SIST_MEDIDA"+value).val(obj.prod_sist_medida);   
        $("#COLOR_ID"+value).val(obj.prod_color);  
        $("#PROD_PESO_CTROL"+value).val(obj.prod_peso_ctrol);  
        $("#PROD_LARGO"+value).val(obj.prod_largo);  
        $("#PROD_ANCHO"+value).val(obj.prod_ancho);  
        $("#PROD_ALTO"+value).val(obj.prod_alto);  
        $("#PROD_ESTADO"+value).val(obj.prod_estado);   
        $("#PROD_SERVICIO"+value).val(obj.prod_servicio);
          $("#Modalproducto").modal("hide");
           $("#BTN_PROD_ELIMINAR"+value).attr('disabled',false);
}
function regvalue(value,etiqueta){
   // alert(value);
    $('#lblvalue3').text(value);
     $('#lblvalue4').text(value);
    $("#COLOR_ID"+value+etiqueta).attr('disabled',false); 
}
function regvalue2(value,etiqueta){
   // alert(value);
   // $('#lblvalue3').text(value);
     $('#lblvalue4').text(value);
    $("#COLOR_ID"+value+etiqueta).attr('disabled',false); 
}
 function changeImage(a) {
   //  alert($(a).val());
        var ruta = "cat"+a.value+".jpg";
        document.getElementById("imgcategoria").src=ruta;
    }
    
function adicionar(){
    var codigo_producto = $("#lblcodigo_producto").text().trim();
    var nombre_producto = $("#lblnombre_producto").text().trim();
    var cantidad_producto = $("#txtcant_productos").val();
    var precio_producto = $("#lblprecio_producto").text().trim();
    var rutlogueado = $("#lblrutlogueado").text().trim();
    var fecha ;
    var hora;
    var producto = [];
        if(parseInt(codigo_producto) !== 0){
          
            cleanproducto();
            advertenciaok("Producto agregado");//mover a la funcion ajax
            marco= "";
            data = 'funcion=seleccionar&cantidad_producto='+cantidad_producto+'&codigo_producto='+codigo_producto
            +'&nombre_producto='+nombre_producto+'&precio_producto='+precio_producto;
            
            ruta = "index.php";
            sendajaxprod(marco,ruta,data);
            if(rutlogueado !== '0' && rutlogueado !== ''){
                
                data2 = 'funcion=insertcanasta&cantidad_producto='+cantidad_producto+'&codigo_producto='+codigo_producto
                +'&rut='+rutlogueado+'&precio_producto='+precio_producto+'&fecha='+fecha+'&hora='+hora;
                ruta2 = "../negocio/dataproducto.php";
                 
                sendajaxprod(marco,ruta2,data2);       
            }
            
            
        }else 
            advertenciawarning('Seleccione un producto !');
       
    $("#inputnombreproducto").focus();
}
function selproducto(obj){
    
    $("#lblcodigo_producto").text(obj.prod_codigo);  
    $("#lblnombre_producto").text(obj.prod_nombre);  
    $("#lblprecio_producto").text(obj.prod_precio1);  
    
    $("#txtcant_productos").val(1); 
    $("#txtcant_productos").focus();
}
function cleanproducto(){
    
    $("#lblcodigo_producto").text(0);  
    $("#lblnombre_producto").text("");  
    $("#lblprecio_producto").text("");  
    $("#txtcant_productos").val(1); 
    $("#inputnombreproducto").focus();
}

function consultar(){
  clearmarco('carrito');
            marco= "carrito";
            data = 'funcion=puentes';
         //   ruta = "index.php";
            ruta = "index.php";
            sendajaxprod(marco,ruta,data);
    
}
function consultarfinal(){
          
         
            clearmarco('contable');
            marco= "contable";
            data = 'funcion=puentes2';
         //   ruta = "index.php";
            ruta = "index.php";
            sendajaxprod(marco,ruta,data);
    
}
function clearmarco(marco){
     document.getElementById(marco).innerHTML = ""; 
}

function sendajaxprodweb(marco,ruta,data){
 
 
;;;     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
        if(marco !== ''){
          document.getElementById(marco).innerHTML = "";  
        
          document.getElementById(marco).innerHTML = this.responseText;
      }
      alert(this.responseText);
         if(this.responseText > 0 || this.responseText == "" )
          advertenciaok(msg1); 
         else if(this.responseText == 0)
          advertencia(msg2) 
              console.log(this.responseText);
  
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 
 
function canasta(){
    var i=0;
    var producto = [];
    var codigo;
    var cantidad;
    var precio;
    var fecha ;
    var hora;
   
    $("#bcanasta tr").each(function () {
        codigo = $(this).children("td:nth-child(2)").text().trim();
        cantidad = $(this).children("td:nth-child(3)").text().trim();
        precio = $(this).children("td:nth-child(4)").text().trim();
        fecha = $(this).children("td:nth-child(7)").text().trim();
        hora = $(this).children("td:nth-child(8)").text().trim();
    
        if(codigo !== ''){
          producto[i]= new Array(codigo, cantidad,precio, fecha, hora);
      
          i++; 
        }
      
    });
      return i;
       
         
 }
  var  myArreglo = [];
function tranfierecanasta(rut){
   
    var i=0;
    var producto = [];
    var codigo;
    var cantidad;
    var precio;
    var fecha ;
    var hora;
   
    $("#bcanasta tr").each(function () {
        codigo = $(this).children("td:nth-child(2)").text().trim();
        cantidad = $(this).children("td:nth-child(3)").text().trim();
        precio = $(this).children("td:nth-child(4)").text().trim();
        fecha = $(this).children("td:nth-child(7)").text().trim();
        hora = $(this).children("td:nth-child(8)").text().trim();
    
        if(codigo !== ''){
          producto[i]= new Array(codigo, cantidad,precio, fecha, hora);
      
          i++; 
        }
      
    });
     var rutlogueado = $("#lblrutlogueado").text().trim();
     rutlogueado = rut;
      if(rutlogueado !== '0' && rutlogueado !== ''){
        
              var myJSON1 = JSON.stringify(producto);  
                marco = "";
                data2 = 'funcion=insertmcanasta&rut='+rutlogueado+'&myJSON1='+myJSON1;
                ruta2 = "../negocio/dataproducto.php";
          
          sendajaxprod(marco,ruta2,data2);    
      
      }
}
function comprar(){
   //  $("#modalsession").addClass('modal-dialog modal-lg');
 $("#modalsession").attr('data-size','modal-xl');
}
 //myArreglo[0] = new  Array(0,1,1,1,1,3,5);
function cargarproductos(){
 
     var myJSON1 = JSON.stringify(myArreglo);  
     data2 = 'funcion=cargarcanasta&myJSON='+myJSON1;
      ruta2 = "index.php";
                 
    sendajaxprod(marco,ruta2,data2);
}

function transformar(Arreglo){
    var matriz = [];
    matriz = Arreglo
  //  alert(matriz[0]['prod_nombre']);
    var i;
    for(i=0; i < matriz.length; i++ ){
        myArreglo[i] = new Array( matriz[i]['prod_nombre'],  matriz[i]['canasta_id'], matriz[i]['canasta_codigo_prod'], matriz[i]['canasta_cantidad_prod'], matriz[i]['canasta_fecha'], matriz[i]['canasta_hora'],  matriz[i]['canasta_estado'],  matriz[i]['canasta_rut'],  matriz[i]['canasta_precio']);
    }
    
}

function sendajaxpass3(marco,ruta,data){
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
          //  myArreglo = myArr;
          transformar(myArr);
          cargarproductos();
        //  redireccionar2(myArr);
     //   return myArr;
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