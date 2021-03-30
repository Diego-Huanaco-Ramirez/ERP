//habilitar();
 var arreglo1 = [0];
 var arreglo2 = [0];
 var arreglo3 = [0];
 var arreglo4 = [0];
 
  var arreglox = [0,0,0,0];


function rptencuesta(id_encuesta, id_paciente){
  
         var parametros = 'funcion=rpt1&id_paciente='+parseInt(id_paciente)+'&id_encuesta='+parseInt(id_encuesta);   
        AbrirVentana("../ui/encuesta.php", parametros, "", 700, 500);
      //  extraerdata(35);
      
 }
function extraerdata(value){
   
prod_codigo = $('#LBL_PROD_CODIGO'+value).text().trim();
//      nuevo();
 //  deshabilitar();
    cleamcampo();
    
 if(prod_codigo !== ''){
     
    habilitacampo(value,1);
    datos='funcion=listadevalores' ;
    ruta= "../negocio/dataproducto.php";
    marco= "";
    
   datos+= '&prod_codigo='+prod_codigo;
 sendajaxenc2(marco,ruta,datos);
 }
}
 function sendajaxenc2(marco,ruta,data){
 
  
      var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
          // cleamcampo();
     if (this.readyState == 4 && this.status == 200) {
       
           if(this.responseText !== '')    
           var myObj = JSON.parse(this.responseText);
     
                if (myObj !== null)  {
                    cargadatos( myObj);
                 
                     
                }
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  }

function cargadatos( arreglo){

    var matriz =  [];
     matriz =      arreglo;
     //  console.log(matriz.length);

   var nombre = "";
 
;     
      // item + dimension + estado + valor
  for(j=0; j < matriz.length ;j++) { 
   
       nombre = "#itemestado"+ matriz[j]['val_estado'] + matriz[j]['val_tipo_dimension'] + matriz[j]['selem_id'];
      $(nombre).val(parseInt(matriz[j]['val_precio']));
   // console.log(nombre);
 } // fin for
      
  
      
}

function validaarreglo(arreglo){
  var bandera = 0;
  var arrdatos= arreglo;
    if(arrdatos.length > 0){
       for(j=0; j < arrdatos.length ;j++) { 
           if(arrdatos[j][2] == 2)
               bandera = arrdatos[1][0];
       }
   }else
       bandera = 0;
  return bandera;
}
function respuesta(value){
var myJSON1 = [];
//var myJSON2 = [];
//var myJSON3 = [];
//var myJSON4 = [];
// console.log(arreglo1);
 myJSON1 = JSON.stringify(arreglo1);
// myJSON2 = JSON.stringify(arreglo2);
// myJSON3 = JSON.stringify(arreglo3);
// myJSON4 = JSON.stringify(arreglo4);
//console.log(arreglo1.length);
//console.log(arreglo2.length);
//console.log(arreglo3.length);
//console.log(arreglo4.length);
 console.log(arreglo1);
 
;var prod_codigo = '';
if($('#LBL_PROD_CODIGO'+value).text() !== '' ){
   prod_codigo = $('#LBL_PROD_CODIGO'+value).text().trim();
   
}else{ 
    prod_codigo = '';
    advertencia(msg2);
}

if(prod_codigo !== ''){


 
 //console.log("graba_lente:"+id_atencion) ; 
    datos='funcion=insertvalores' ;
    ruta= "../negocio/dataproducto.php";
    marco= "";
     
   datos+= '&prod_codigo='+prod_codigo+'&tablavalor='+myJSON1;
 sendajaxenc(marco,ruta,datos);
    
}   
}
 var msg1= "èxito";
 var msg2= "Error";
  function sendajaxenc(marco,ruta,data){
 console.log('envio');

;;;     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
          //   document.getElementById(marco).innerHTML = "";  
         
         //   document.getElementById(marco).innerHTML = this.responseText;
         alert(this.responseText);
         if(this.responseText == 1 || this.responseText == "" )
            advertenciaok(msg1);
         else if(this.responseText == 0)
            advertencia(msg2) 
             
  
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 
function registra(cant,value){
 
 var i;
arreglo1 = [0];
 for(i=1;i< cant+1;i++)
   getdata("number",i, arreglo1);   

  respuesta(value);
} 
 
function getdata(tipo, item, arreglo){
  var i=0,j=1,id=1;
  var expresion='';
 
  var codigo;
 
 
 i=item;
 id= arreglo.length;
    expresion =  "div[id=item"+i+"]" ;  
  console.log($(expresion).find(':input[type="number"]').length);
   $(expresion).find(':input[type="number"]').each(function(){
   
         texto= "#item4text"+id;
   codigo= this.name;
   var seg = codigo.split('-');
   var valor = 0;
     //  console.log(seg[0]+":"+seg[1]);
     if($(this).val() !== '')
         valor =$(this).val();
     
       arreglo[id] = [seg[2],seg[0],seg[1],valor];
       // item + dimension + estado + valor
        j++;  
        id++;
 
   });
  
 
}
function habilitacampo(value,habilita){
   
  var i,j,n, estado;
if(habilita)
  estado = false;
else
  estado = true;

 n = $('.item').length;
 n++;
 $('#btnlimpia'+value).attr('disabled',estado);
  $('#btnlimpia2'+value).attr('disabled',estado);
   $('#btngrabarUP'+value).attr('disabled',estado);
    $('#btngrabarDOWN'+value).attr('disabled',estado);
  for(i=1; i < n;i++){
 
        expresion =  "div[id=item"+i+"]" ;  
        $('#btnlimpia'+i).attr('disabled',estado);
        $(expresion).find(':input[type="number"]').each(function(){
   
              $(this).attr('disabled',estado);
       //    console.log(this.id);

        });
         
    }

}
function cleamcampo(){
  
  var i,j,n;

 n = $('.item').length;
 n++;

  for(i=1; i < n;i++){
 
        expresion =  "div[id=item"+i+"]" ;  

        $(expresion).find(':input[type="number"]').each(function(){
   
              $(this).val('');
       //    console.log(this.id);

        });
    }

}
function valorcampoxitem(i){
  var valor = prompt("INGRESE VALOR X ITEM", "");
  if (valor != null) {
    

        expresion =  "div[id=item"+i+"]" ;  

        $(expresion).find(':input[type="number"]').each(function(){
   
              $(this).val(valor);
         //  console.log(this.id);

        });
     }

}
function cleamcampoxitem(i){
   
        expresion =  "div[id=item"+i+"]" ;  

        $(expresion).find(':input[type="number"]').each(function(){
   
              $(this).val('');
         //  console.log(this.id);

        });


}
function isOdd(num) { return num % 2;}
function habilitar(){
   
 var value = '1';
  var i=0;
  var expresion='';
  for(i=1;i< 5;i++){  
    expresion =  "div[id=item"+i+"]" ;  
  //  console.log(expresion);
   $(expresion).find('input').each(function(){
      //  console.log(this.id);
       //  if(  $("#lente"+$(this).val()).prop('checked'))//$('div[id=item]')
         $(this).attr('disabled',false);
          $(this).prop('checked',false);
           $(this).val('');
           
                      
     });
 }
  $('#serie_encuesta').val('');
 $('#serie_encuesta').attr('disabled',false);
 $('#btngrabarUP'+value).attr('disabled',false);
 $('#btngrabarDOWN'+value).attr('disabled',false);
 $('#btnfinanlizar'+value).attr('disabled',false);
 
}
function deshabilitar(){
  value= 1;
  var i=0;
  var expresion='';
  for(i=1;i< 5;i++){  
    expresion =  "div[id=item"+i+"]" ;  
  //  console.log(expresion);
   $(expresion).find('input').each(function(){
    
         $(this).attr('disabled',true);
          $(this).prop('checked',false);
           $(this).val('');
           
                      
     });
 }
  $('#serie_encuesta').val('');
 $('#serie_encuesta').attr('disabled',true);
 $('#btngrabarUP'+value).attr('disabled',true);
 $('#btngrabarDOWN'+value).attr('disabled',true);
 $('#btnfinanlizar'+value).attr('disabled',true);
 
}

function limpiar(){
  var i=0;
  var expresion='';
  for(i=1;i< 5;i++){  
    expresion =  "div[id=item"+i+"]" ;  
   
   $(expresion).find('input').each(function(){
     
        // $(this).attr('disabled',true);
          $(this).prop('checked',false);
           $(this).val('');
           
                      
     });
 }
  $('#serie_encuesta').val('');
  
 
}

function nuevo(){
    limpiar();
      $('#serie_encuesta').val('');
      $('#nombre_encuesta').text('');
      $('#rut_encuesta').text('');
      $('#lbl_id_paciente_encuesta').text('');
}
function llavepacientes(){
     var person = prompt("clave", "");
   if (person != null) {
    console.log(person);
  }
}


function advertencia(msg){
        toastr.options.timeOut = 2000; // 1.5s
        toastr.options.positionClass = 'toast-top-left';
        toastr.error(msg);
  }
  function advertenciaok(msg){
        toastr.options.timeOut = 1800; // 1.5s
        toastr.options.positionClass = 'toast-top-left';
        toastr.info(msg);
  }
  function cerrar3(){
     var txt;
    var r = confirm("Confirma cerrar session de: "+$("#lblusuario").text());
    if (r == true) {
       uri = "../src/cerrar.php"
      window.location= encodeURI(uri);
    }  
        
 }
  function  openmodalatencionencuesta(){
 
  $("#Modalbencuesta").draggable({
    handle: ".modal-header"
  });
  }