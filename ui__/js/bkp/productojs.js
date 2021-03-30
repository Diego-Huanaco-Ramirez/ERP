 var arraycat = "";
 var arraycatsb = "";
 var arraycatsbsb = "";
 
 var arraycategoria= [];


 listcatgenral();
var tmpbusqueda ;
function sendajaxcat(marco,ruta,data,obj,msg1,msg2,tipo_cat){
  
     
   
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
     //    document.getElementById(marco).innerHTML = "";  
       //   document.getElementById(marco).innerHTML = this.responseText;
          // alert(this.responseText);
          
          
              if(this.responseText == '0'){
                       advertencia(msg2);
                   selcatexiste(obj,tipo_cat);
                   console.log(tipo_cat);
              }else  if(this.responseText == '1' ){
                 $(obj).val('');
           
                 advertenciaok(msg1);
                 console.log(tipo_cat);
                 if(tipo_cat == 1) 
                    listcatgenral();
             //    if(tipo_cat == gloption ) 
                    clearglcategoria('1');//agregar value
                 
              }
            
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  } 
function selcatexiste(obj,tipo_cat){
 console.log('busqueda'+arraycategoria[tipo_cat]);
    //
    var i;
     for(i=0;i < arraycat.length ; i++){
         arraycat[i]['cat_nombre']= arraycat[i]['cat_nombre'].toLowerCase();
     }
     var strInput = $(obj).val();
   //    var strInput = tmpbusqueda;
      var index =0;
    strInput=strInput.toLowerCase();
    for(i=0;i < arraycat.length ; i++){
        if( strInput ===  arraycat[i]['cat_nombre']  ){
             console.log(arraycat[i]['cat_nombre']+"::"+i);
             index =i;
         }
    }   
    index= index +1;
 // alert(Arreglocat[tipo_cat-1][1]);
     var selectElem = document.getElementById(Arreglocat[tipo_cat-1][1]);
 selectElem.selectedIndex= index;

 
  
}
//CREAR PRODUCTOS 
//seleccion de categorias para crear un producto
function selcategoria(value,tipo_cat,id,objdestino,objdestino2,obj) {
// console.log(id);
  if(id !== 0  ){
     if(id !== '' && id !== 'undefined'){
     crearcodigo(value,tipo_cat, id,obj);
     
     if( objdestino2 !== '')
      clearselect(objdestino2);
   
      marco = "scat" ;
      data= 'funcion=selcategoria'+'&cat_id='+id+'&cat_tipo=1';
      ruta = "../negocio/dataproducto.php";
      sendajax(marco,ruta,data,objdestino,tipo_cat,value);
  }else   if(id == 0 && tipo_cat == 1){
      limpiacat(value);
  }    
}
 
}

function listcatgenral(){
      var id= ''
;      marco = "scat" ;
      data= 'funcion=selcategoria'+'&cat_id='+id+'&cat_tipo=1';
      ruta = "../negocio/dataproducto.php";
      sendajax(marco,ruta,data,'SEL_CATG1',0,'');
}
function sendajax(marco,ruta,data,objdestino,tipo_cat,value){
   console.log(tipo_cat);
     var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
       //    document.getElementById(marco).innerHTML = "";  
           // document.getElementById(marco).innerHTML = this.responseText;
           var myObj = JSON.parse(this.responseText);
              if(myObj !== null){
                  arraycategoria[tipo_cat] =myObj; 
                  
                 if(tipo_cat == 0) 
                   arraycat =myObj;
                  if(tipo_cat == 1) 
                     arraycatsb =myObj;
                 else if(tipo_cat == 2) 
                     arraycatsbsb =myObj;
                 
                    if(marco == 'scat')
                        console.log(myObj.length);
                    // alert(tipo_cat);
                     cantcategoria(myObj.length,tipo_cat,value)
                         llenarselect(myObj,objdestino);
              }else{
                   cantcategoria(0,tipo_cat,value);
                   cantcategoria(0,tipo_cat+1,value);
                  clearselect(objdestino);
                  deshabilitacat(objdestino);
              } 
               
         
     }else 
         ;
     };
     xhttp.open("POST",ruta , true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(data); 
  }
function cantcategoria(cant,tipo_cat,value){
    loadmatrizcat(value);
    
    var name = Arreglocat[tipo_cat][2];
  // alert(name);
    $("#"+name).text("CANT("+cant+")");
    
}
var cat_id1 = 0;
var cat_id2 = 0;
var cat_id3 = 0;
var cat1 = '000';
var cat2 = '000';
var cat3 = '000';

//Gnera el codigo compuesto por categorias , previo a crear un codigo de producto
function crearcodigo(value,tipo_cat, id,obj){
  var bandera = false;
 if(parseInt(id) !== 0){
  //   console.log(id);
    if(tipo_cat == 1 ){   
        bandera = true;
        cat2 = '000';
        cat3 = '000';
        cat_id1 = id;
      //  $("#PROD_CODIGO"+value).val('');
        cat1 = obj.options[obj.selectedIndex].getAttribute('valor');
        $("#PROD_CAT_ID"+value).val(cat1);

        
    } else if(tipo_cat == 2  ){
        bandera = true;
        cat_id2 = id;
        cat2 =  obj.options[obj.selectedIndex].getAttribute('valor');
        cat3 = '000';
        $("#PROD_CAT_ID"+value).val(cat1 +cat2);
    } else if(tipo_cat == 3  ){
        bandera = true;
        cat_id3 = id;
        cat3 = obj.options[obj.selectedIndex].getAttribute('valor');
        $("#PROD_CAT_ID"+value).val(cat1+cat2+cat3);
    }
 }else 
     ;// $("#PROD_CODIGO"+value).val('');
    if( bandera  )
     $("#PROD_CAT_ID"+value).val(cat1+cat2+cat3);
    // document.getElementById('PROD_CODIGO'+value).value = "Fdasf";
}

function   grabacodigo(event,obj,value){
  
      if (event.keyCode === 13) {
     var categoria,catfinal;
       if($(obj).val() !== '')
          categoria = $(obj).val();
         if(cat3 !== '000'   ){
             catfinal = cat_id3;
            
             //$(obj).val(cat1+'000000'+'001')
         }else if(cat2 !== '000'  ){
              catfinal = cat_id2;
            // $(obj).val(cat1+cat2+'000'+'001')
         }else if(cat1 !== '000' ){
              catfinal = cat_id1;
              // $(obj).val(cat1+cat2+cat3+'001')
         }
      //  alert(catfinal)
      if(parseInt(catfinal) > 0){
         var prod_nombre =  $("#PROD_NOMBRE"+value).val().toUpperCase();
         var prod_codigo =  $(obj).val().trim();
         catfinal = parseInt(catfinal.trim());
        //  console.log('funcion=insertproducto&cat_id='+catfinal+'&prod_nombre='+prod_nombre+'&prod_codigo='+prod_codigo);
         data= 'funcion=insertproducto&cat_id='+catfinal+'&prod_nombre='+prod_nombre+'&prod_codigo='+prod_codigo;
         ruta = "../negocio/dataproducto.php";
         sendajaxcat(marco,ruta,data,'', 'Ya existe','Categoria Ingresa'); 
      }
    }
}
//funciones de categoria
function grabacategoria(event,tipo,obj,opc,categoria,destinoselect,value){

  
    if (event.keyCode === 13) {
      
      if(    gloption == tipo){
        // alert(btnedi + value_elemento) ;
     
        $("#btneditacat" + value).focus();
     
        
      }else if(  gloption !== tipo){ 
     
          tmpbusqueda=   $(obj).val();
      regcategoria( tipo,obj,opc,categoria,destinoselect);
         
      }  
    
    }
}
function regcategoria( tipo,obj,opc,categoria,destinoselect){ //opc 1 valida 2 graba
    
    var cat_nombre;
    var pro_cat_id;
    var cat_color;
     var cat_tipo = 1;
    var bandera = false;
   marco = "CAT_NOMBRE_SBSB1" ;
  //  alert(destinoselect);
    
    if(tipo == 2 ){
        if(document.getElementById(categoria).selectedIndex == 0 ){
          //  alert(document.getElementById("SEL_CATG1").selectedIndex);
            document.getElementById("SEL_CATG1").focus();
            alert("seleccion general");
        }else{
           if($(obj).val() !== ''){
            cat_nombre= $(obj).val().trim();
            pro_cat_id= $('#'+categoria).val();
            cat_color="";
            bandera = true;
           } 
           
        }    
    }else if(tipo == 3 ){
 //  alert(document.getElementById(destinoselect).selectedIndex);
        if(   document.getElementById(categoria).selectedIndex == 0 ){
             document.getElementById("SEL_CATSB1").focus();
            alert("seleccion sub categoria");
        }else{
          
            if($(obj).val() !== ''){
                cat_nombre= $(obj).val().trim();
                pro_cat_id= $('#'+categoria).val();
                cat_color="";
                 bandera = true;
           } 
        }
            
    }else if(tipo == 1 ){
         if($(obj).val() !== ''){
            cat_nombre= $(obj).val().trim();
               pro_cat_id="";
            cat_color="";
             bandera = true;
         
         } 
    }
    
    if(bandera && opc == 2){
     //    console.log("insert");
     //    console.log("tipo:"+tipo);
         cat_nombre = cat_nombre.toUpperCase();
         data= 'funcion=insertcategoria&cat_nombre='+cat_nombre+'&pro_cat_id='+pro_cat_id+'&cat_color='+cat_color+'&cat_tipo='+cat_tipo;
         ruta = "../negocio/dataproducto.php";
         sendajaxcat(marco,ruta,data,obj,'','',tipo); 
   
    }
}

 
  function clearselect(objdestino){
      for (var i=document.getElementById(objdestino).options.length; i-->0;)
             document.getElementById(objdestino).options[i] = null;
  }
function llenarselect(myObj,objdestino){
    habilitacat(objdestino);
    var arr = myObj;
    document.getElementById(objdestino).options.length = 0;
    clearselect(objdestino);
       
    var x = document.getElementById(objdestino);
    var c = document.createElement("option");
       c.text = "Elegir";
       c.value = 0;
       c.valor = 0;
       //  c.setAttribute('valor',arr[i]['cat_etiqueta']);
       x.options.add(c, 0);
    for(i=0; i< arr.length; i++){
        var c = document.createElement("option");
        c.text = arr[i]['cat_nombre'];
        c.value = arr[i]['cat_id'];
        c.valor = arr[i]['cat_etiqueta'];
        c.setAttribute('valor',arr[i]['cat_etiqueta']);
        x.options.add(c, parseInt(arr[i]['cat_id']));
    }
       document.getElementById(objdestino).selectedIndex =  0 ;     
  }
  
  function habilitacat(obj){
       $("#"+obj).attr('disabled',false); 
    //   $("#btnfichacerrar"+value).attr('disabled',false);       
        
        
  }
  function deshabilitacat(obj){
       $("#"+obj).attr('disabled',true); 
       document.getElementById(obj).setAttribute("disabled","disabled");
  }
  function limpiacat(value){
    $("#CAT_NOMBRE_G"+value).val('');
    $("#CAT_NOMBRE_SB"+value).val('');
    $("#CAT_NOMBRE_SBSB"+value).val('');
    $("#SEL_CATG"+value).val(0);
    nombre_scat= 'SEL_CATSB'+value;
    nombre_sscat= 'SEL_CATSBSB'+value;
    clearselect(nombre_scat);
    clearselect(nombre_sscat);
    
    deshabilitacat(nombre_scat);
    deshabilitacat(nombre_sscat)
    clearglcategoria(value);
    
       arraycat = "";
 listcatgenral();
  }
var gloption =0;
var glnombretext = "";
var id_categoria=0;  

function clearglcategoria(value){
     gloption =0;
     glnombretext = "";
     id_categoria=0; 
     $("#CHKCAT_NOMBRE_G"+value).prop('checked',false);
     $("#CHKCAT_NOMBRE_SB"+value).prop('checked',false);
     $("#CHKCAT_NOMBRE_SBSB"+value).prop('checked',false);
    $("#CAT_NOMBRE_G"+value).val('');
    $("#CAT_NOMBRE_SB"+value).val('');
    $("#CAT_NOMBRE_SBSB"+value).val('');
    
    $("#btneditacat"+value).attr('disabled',true);
    $("#btneliminarcat"+value).attr('disabled',true);
  
}

function habilitycategoria(value){
      $("#btneditacat"+value).attr('disabled',false);
    $("#btneliminarcat"+value).attr('disabled',false);
}
function getcategoria(id_textbox, id_chk,tipo_cat, id_categoria, obj,value)
{
  //  console.log(id_textbox, id_chk,tipo_cat, valor, obj); obj.options[obj.selectedIndex].value
     // $("#"+id_textbox).val(id_categoria);
      $("#"+id_textbox).val(obj.options[obj.selectedIndex].text);
      $("#"+id_chk).val(id_categoria);
      $("#"+id_chk).prop('checked',true);
      habilitycategoria(value);
      putoption(tipo_cat,id_textbox,id_categoria);
}


function putoption(tipo_cat,cajatexto,id){
    
    var cat= tipo_cat;
    gloption= cat;
    glnombretext = cajatexto;
    id_categoria = id;
  
}

function editarcat(value){
     var cat_nombre;
              var id;
           
 if(id_categoria !== 0 && glnombretext !== ""){
     cat_nombre= $("#"+glnombretext).val().toUpperCase();
       // $("#"+glnombretext).focus();
      id= id_categoria;
;      marco = "" ;
      data= 'funcion=editarcategoria'+'&cat_id='+id+'&cat_tipo=1'+'&cat_nombre='+cat_nombre;
      ruta = "../negocio/dataproducto.php";
          sendajaxcat(marco,ruta,data,'','Cat editada','sin efecto');
  }
}

function eliminarcat(){
           var id;
           
 if(id_categoria !== 0 && glnombretext !== ""){
   
       // $("#"+glnombretext).focus();
      id= id_categoria;
     // console.log(id);
      marco = "" ;
      data= 'funcion=eliminarcategoria&cat_id='+parseInt(id)+'&cat_tipo=1';
      ruta = "../negocio/dataproducto.php";
      sendajaxcat(marco,ruta,data,'','Cat eliminada','sin efecto');
  }
}

//data lista

function seleccionar(){
  document.getElementById("SEL_CATG1").selectedIndex = 1;
 //  alert("fdasf");
  //  $(obj).val("fdsf");
}