var ccmedida = [];
ccmedida[0]=0;
ccmedida[1]=0;
ccmedida[2]=0;
ccmedida[3]=0;
ccmedida[4]=0;
ccmedida[5]=0; //receta
ccmedida[6]=0; // ADD
ccmedida[7]=0; // OPTICA
var nv1 =0;
var nv2 =0;
var lentes = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var rcEsfODaux=0;
var rcEsfOIaux=0;
function resprcEsf(opc, value){
   if(!(value < 0))
     value = Math.abs(value);  
      
     
    
  if ($("#rcAdIguales").prop('checked')){  
     if(opc){
       if(value > $("#rcAdOD").val())  
        rcEsfODaux= value -  $("#rcAdOD").val();
     }else{ 
       if(value > $("#rcAdOI").val())  
        rcEsfOIaux = value -  $("#rcAdOI").val();
     }  
  }else{
      if(opc){
       
        rcEsfODaux= value;
     }else{ 
      
        rcEsfOIaux = value;
     } 
  } 
       
    
}

function adicionar(opc,value){
 //console.log('aqui:'+value);
   if(!(value < 0))
     value = Math.abs(value);
   
    var rcEsfOD=0;
    var rcEsfOI=0;
   // alert(value); alert(rcEsfODaux);
 if ($("#rcAdIguales").prop('checked')){  
   if(opc)  
      // $("#rcAdOI").val($("#rcAdOD").val());
       asignar('#rcAdOI', parseFloat($("#rcAdOD").val()) );     
   else 
       asignar('#rcAdOD', parseFloat($("#rcAdOI").val()) ); 
      // $("#rcAdOD").val($("#rcAdOI").val());
       
  // console.log('a:'+parseFloat(rcEsfODaux));
  // console.log('b:'+parseFloat(value));
      rcEsfOD= parseFloat(rcEsfODaux) + parseFloat(value);
   //$('#rcEsfOD').val(rcEsfOD);
      asignar('#rcEsfOD', rcEsfOD);
   
  // rcEsfOI = parseFloat($('#rcEsfOI').val());
      rcEsfOI= parseFloat(rcEsfOIaux) + parseFloat(value);
   //$('#rcEsfOI').val(rcEsfOI);
      asignar('#rcEsfOI', rcEsfOI);
 }else{
    if(opc){
       rcEsfOD = parseFloat($('#rcEsfOD').val());
       rcEsfOD= parseFloat(rcEsfODaux) + parseFloat(value);
       //$('#rcEsfOD').val(rcEsfOD); 
       asignar('#rcEsfOD', rcEsfOD);
     }else{ 
       rcEsfOI = parseFloat($('#rcEsfOI').val());
       rcEsfOI= parseFloat(rcEsfOIaux) + parseFloat(value);
       //$('#rcEsfOI').val(rcEsfOI);
       asignar('#rcEsfOI', rcEsfOI);
     }    
     
  
 } 
   
}
function asignar(obj, value){
   if( value < 0)
     $(obj).val(value.toFixed(2));
   else
     $(obj).val('+'+ Math.abs(value).toFixed(2)); 
}

function absoluto(value){
   if(!(value < 0))
     value = Math.abs(value);
   return value;
}

function adIgual()
{
    if ($("#rcAdIguales").prop('checked'))
         $("#rcAdOI").val($("#rcAdOD").val());
}

 function print_receta(id_agenda){
   //  var myJSON1 = myJSON11;
    // var myJSON2 = myJSON22;
        ruta2 = "../reporte/pdf_receta.php?";
//parametros = 'myJSON1='+JSON.parse(myJSON1);;//+'&myJSON2='+myJSON2+'&id_agenda='+id_agenda;
//parametros = 'myJSON1='+JSON.stringify(myJSON1);;//+'&myJSON2='+myJSON2+'&id_agenda='+id_agenda;  
parametros = 'id_agenda='+id_agenda;  
   document.getElementById('marco_print').src= ruta2+parametros;
}
/*
function open_vtna_receta(){
    ruta = "../reporte/pdf_receta.php";
            ruta2 = "../reporte/pdf_receta.php?";
            ruta3 = "../funcion/vtna_receta.php"
            marco = "";
           // parametros = 'myJSON1='+myJSON1+'&myJSON2='+myJSON2+'&lentes='+jsonlentes+'&nv='+nv1+
           // '&rlDisPup='+recetaLejosDisPup+'&rcDisPup='+recetacercaDisPup+'&id_agenda='+id_agenda
            ;
            parametros="";
         // AbrirVentana(ruta, parametros, "", 800, 650);
         AbrirVentana(ruta3, parametros, "", 800, 650);
}
*/
function impReceta()
{
 var bandera = false;
 var bandera2 = true;
 var bandera3 = true;
 if($("#rlChk").prop('checked') || $("#rcChk").prop('checked') ||  $("#riChk").prop('checked')  )
     bandera = true;
 else 
     advertencia("SELECCIONAR RECETA");
 
 
   if($("#chkOptico1").prop('checked')){
     if(!checklentes(1)){
        bandera2 = false;
        advertencia("LENTES OPTICO SIN SELECCIÓN");
     }   
   }
      
   
   
   if($("#chkContacto1").prop('checked')){
     if(!checklentes(2)){
        bandera3 = false;
        advertencia("LENTES CONTACTO SIN SELECCIÓN");
     }  
   }
   
   
 
             grabarparametros(2);  
if(bandera && bandera2 && bandera3){ 
recetaLejosEsfOD = absoluto($("#rlEsfOD").val());
recetaLejosEsfOI = absoluto($("#rlEsfOI").val());
recetaLejosCilOD = absoluto($("#rlCilOD").val());
recetaLejosCilOI = absoluto($("#rlCilOI").val());
recetaLejosEjeOD = $("#rlEjeOD").val();
recetaLejosEjeOI = $("#rlEjeOI").val();
recetaLejosAgViOD = $("#rlAvOD").val();
recetaLejosAgViOI = $("#rlAvOI").val();
recetaLejosDisPup = $("#rlDp").val();
recetaLejosvertexOD = $("#vtxOD").val();
recetaLejosvertexOI = $("#vtxOI").val();
recetacercaEsfOD = absoluto($("#rcEsfOD").val());
recetacercaEsfOI = absoluto($("#rcEsfOI").val());
recetacercaCilOD = absoluto($("#rcCilOD").val());
recetacercaCilOI = absoluto($("#rcCilOI").val());
recetacercaEjeOD = $("#rcEjeOD").val();
recetacercaEjeOI = $("#rcEjeOI").val();
        
recetacercaDisPup = $("#rcDp").val();

recetacercavertexOD = $("#vtxOD2").val();
recetacercavertexOI = $("#vtxOI2").val();
 rnvl = $("#rd11").prop('checked');
 rdpl = $("#rd12").prop('checked');
 rnvc = $("#rd21").prop('checked');
 rdpc = $("#rd22").prop('checked');

 
 recetaLejos = $("#rlChk").prop('checked');
 recetaCerca = $("#rcChk").prop('checked');
 recetaIntermedia = $("#riChk").prop('checked'); 

 
rl = new Array(                 
    recetaLejosEsfOD, recetaLejosEsfOI, recetaLejosCilOD, recetaLejosCilOI, recetaLejosEjeOD,
     recetaLejosEjeOI , 
     recetaLejosAgViOD, recetaLejosAgViOI
     );
     
rc = new Array(                 
    recetacercaEsfOD , recetacercaEsfOI, recetacercaCilOD,recetacercaCilOI, recetacercaEjeOD,
    recetacercaEjeOI   
              );  
 var sumarl=0.00;
 var sumarc=0.00;
    for(i=0; i < rl.length; i++){     
        if(rl[i] == '' || rl[i] == 0)
            rl[i]='0.00';
        if(rc[i] == ''|| rc[i] == 0)
            rc[i]='0.00';
    sumarl = parseFloat(sumarl)+ parseFloat(rl[i]);
    sumarc = parseFloat(sumarc)+ parseFloat(rc[i]);
    console.log(rl[i]);
  
 }   
 
 if(sumarl == 0.0){
   rl= new Array(0.00,0.00,0.00,0.00,0.00,0.00)  ;
   //alert("1");
 }
 if(sumarc == 0.0){
   rc= new Array(0.00,0.00,0.00,0.00,0.00,0.00)  ;
   // alert("2");
 }               
if(rnvl || rnvc){               
  nv = new Array(   recetaLejosvertexOD , recetacercavertexOD, recetaLejosvertexOI,   recetacercavertexOI);   
  var nv1 = JSON.stringify(nv);
}else
   var nv1= "";

if(!(rdpl || rdpc)){
    recetaLejosDisPup="";
    recetacercaDisPup="";
}
var myJSON1 = JSON.stringify(rl);
var myJSON2 = JSON.stringify(rc);
var jsonlentes = JSON.stringify(lentes);
          
var id_agenda = 0;
var id_atencion = 0;
if(atencion != 0){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
     if( $("#txt_id_agenda ").val().trim() == $("#" + filaParametros).children("td:nth-child(7)").text().trim()) {
           id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
     }else
          id_agenda = preficha[0].id_agenda;
}
//alert(id_agenda);
//alert(id_atencion);
ruta = "../reporte/pdf_receta.php";
ruta2 = "../reporte/pdf_receta.php?";
ruta3 = "../funcion/vtna_receta.php"
marco = "";
parametros = 'myJSON1='+myJSON1+'&myJSON2='+myJSON2+'&lentes='+jsonlentes+'&nv='+nv1+
            '&rlDisPup='+recetaLejosDisPup+'&rcDisPup='+recetacercaDisPup+'&id_agenda='+id_agenda
            ;

         // AbrirVentana(ruta, parametros, "", 800, 650);
AbrirVentana(ruta3, parametros, "", 1000, 650);
cerrarficha(1);
cerrarficha(2);
cerrarficha(3);
             // document.getElementById('marco_print').src= ruta2+parametros;
$("#collapseThree").on('show.bs.collapse', function(){
    $(".collapseThree").collapse('hide'); 
});     
               
$("#collapseThree").collapse('hide');   
    $("#Mparametros").modal("hide");
  }  
}

  function checklentes(opc){
    var bandera = false;   
    if(opc == 1){    
        $('.chkoptico').find('input').each(function(){
         if(  $("#lente"+$(this).val()).prop('checked'))
           bandera = true;
                      
        });
    }else{
           $('.chkcontacto').find('input').each(function(){
        
           if(    $("#lente"+$(this).val()).prop('checked') )
                bandera = true;
         });  
    }
  return bandera;
  
  }
 /* 
function impReceta2()
        {
            refraccionEsfOD = $("#reEsfOD").val();
            refraccionEsfOI = $("#reEsfOI").val();
            refraccionCilOD = $("#reCilOD").val();
            refraccionCilOI = $("#reCilOI").val();
            refraccionEjeOD = $("#reEjeOD").val();
            refraccionEjeOI = $("#reEjeOI").val();

            agudezaVisualScOD = $("#avScOD").val();
            agudezaVisualScOI = $("#avScOI").val();
            agudezaVisualCcOD = $("#avCcOD").val();
            agudezaVisualCcOI = $("#avCcOI").val();

            tonometriaPioOD = $("#toPioOD").val();
            tonometriaPioOI = $("#toPioOI").val();

            lensometriaEsfOD = $("#leEsfOD").val();
            lensometriaEsfOI = $("#leEsfOI").val();
            lensometriaCilOD = $("#leCilOD").val();
            lensometriaCilOI = $("#leCilOI").val();
            lensometriaEjeOD = $("#leEjeOD").val();
            lensometriaEjeOI = $("#leEjeOI").val();

            recetaLejosEsfOD = $("#rlEsfOD").val();
            recetaLejosEsfOI = $("#rlEsfOI").val();
            recetaLejosCilOD = $("#rlCilOD").val();
            recetaLejosCilOI = $("#rlCilOI").val();
            recetaLejosEjeOD = $("#rlEjeOD").val();
            recetaLejosEjeOI = $("#rlEjeOI").val();
            recetaLejosAgViOD = $("#rlAvOD").val();
            recetaLejosAgViOI = $("#rlAvOI").val();
            recetaLejosDisPup = $("#rlDp").val();

            recetacercaAdiOD = $("#rcAdOD").val();
            recetacercaAdiOI = $("#rcAdOI").val();
            recetacercaEsfOD = $("#rcEsfOD").val();
            recetacercaEsfOI = $("#rcEsfOI").val();
            recetacercaCilOD = $("#rcCilOD").val();
            recetacercaCilOI = $("#rcCilOI").val();
            recetacercaEjeOD = $("#rcEjeOD").val();
            recetacercaEjeOI = $("#rcEjeOI").val();
            recetacercaJOD = $("#rcJOD").val();
            recetacercaJOI = $("#rcJOI").val();
            recetacercaDisPup = $("#rcDp").val();

            vertexOD = $("#vtxOD").val();
            vertexOI = $("#vtxOI").val();

            opticoOrganico = $("#chkOrg").prop('checked');
            opticoVidrio = $("#chkVid").prop('checked');
            opticoPoli = $("#chkPoli").prop('checked');
            opticoUv = $("#chkUv").prop('checked');
            opticoReflex = $("#chkRefle").prop('checked');
            opticoFotocro = $("#chkFoto").prop('checked');
            opticoPolari = $("#chkPola").prop('checked');
            opticoRoad = $("#chkRoad").prop('checked');
            opticoFiltro = $("#chkFil").prop('checked');
            opticoRayas = $("#chkRaya").prop('checked');
            opticoDosLen = $("#chkLent").prop('checked');
            opticoBifocal = $("#chkBifo").prop('checked');
            opticoMultifo = $("#chkMult").prop('checked');
            opticoIndice = $("#chkIndi").prop('checked');

            contactoBlando = $("#chkBlan").prop('checked');
            contactoTorico = $("#chkTori").prop('checked');
            contactoDesecha = $("#chkDese").prop('checked');
            contactoProlon = $("#chkPro").prop('checked');
            contactoMultifo = $("#chkMulti").prop('checked');

           chkOptico = $("#chkOptico").prop('checked');
            chkContacto = $("#chkContacto").prop('checked');

            recetaLejos = $("#rlChk").prop('checked');
            recetaCerca = $("#rcChk").prop('checked');
            recetaIntermedia = $("#riChk").prop('checked');

            receta = new Array(refraccionEsfOD, refraccionEsfOI, refraccionCilOD, refraccionCilOI, refraccionEjeOD, refraccionEjeOI
                    , agudezaVisualScOD, agudezaVisualScOI, agudezaVisualCcOD, agudezaVisualCcOI, tonometriaPioOD, tonometriaPioOI
                    , lensometriaEsfOD, lensometriaEsfOI, lensometriaCilOD, lensometriaCilOI, lensometriaEjeOD, lensometriaEjeOI
                    , recetaLejosEsfOD, recetaLejosEsfOI, recetaLejosCilOD, recetaLejosCilOI, recetaLejosEjeOD, recetaLejosEjeOI
                    , recetaLejosAgViOD, recetaLejosAgViOI, recetaLejosDisPup, recetacercaAdiOD, recetacercaAdiOI, recetacercaEsfOD
                    , recetacercaEsfOI, recetacercaCilOD, recetacercaCilOI, recetacercaEjeOD, recetacercaEjeOI, recetacercaJOD
                    , recetacercaJOI, recetacercaDisPup, vertexOD, vertexOI, opticoOrganico, opticoVidrio
                    , opticoPoli, opticoUv, opticoReflex, opticoFotocro, opticoPolari, opticoRoad
                    , opticoFiltro, opticoRayas, opticoDosLen, opticoBifocal, opticoMultifo, opticoIndice,
                    contactoBlando, contactoTorico, contactoDesecha, contactoProlon, contactoMultifo, chkOptico,
                    chkContacto, recetaLejos, recetaCerca);
            var myJSON1 = JSON.stringify(receta);

            console.log(myJSON1);

            ruta = "../reporte/pdf_receta.php";
            marco = "";
            parametros = 'myJSON1=' + myJSON1;

            AbrirVentana(ruta, parametros, "", 600, 500);
        }        
    */
function cargarparametro(id_atencion,id_agenda){
       
       datos='funcion=cargarparametro' ;
       ruta= "../negocio/datencion.php";
       marco= "";
     //  alert("5");alert(id_agenda);
       datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion;
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
         if(this.responseText !== '')    
           var myObj = JSON.parse(this.responseText);
          
            // limpiarfichapaciente();
               // habilitafichapaciente(); 
             // limpiarReceta();
                if (myObj !== null)  {
                
            //     fichaatencion= myObj;
           //        console.log(myObj);
       for(i=0; i< myObj.length;i++){            
          if(myObj[i]['cod_med_generica']==1){    
              refraccion(myObj,i);
          }else  if(myObj[i]['cod_med_generica']==2){    
              lensometria(myObj,i);
          }else  if(myObj[i]['cod_med_generica']==3){    
              recetalejos(myObj,i);
          }else  if(myObj[i]['cod_med_generica']==4){    
              recetacerca(myObj,i);
          }    
          
       }   
function refraccion(myObj,i){
    
    if(myObj[i]['esf_d'] < 0 )
       $("#reEsfOD").val(myObj[i]['esf_d']);
    else
        $("#reEsfOD").val('+'+ myObj[i]['esf_d']);
    
    if(myObj[i]['esf_i'] < 0 )
       $("#reEsfOI").val(myObj[i]['esf_i']);
    else
        $("#reEsfOI").val('+'+ myObj[i]['esf_i']);
    
    if(myObj[i]['cil_d'] < 0 )
        $("#reCilOD").val(myObj[i]['cil_d']);
    else
        $("#reCilOD").val('+'+ myObj[i]['cil_d']);
    
    if(myObj[i]['cil_i'] < 0 )
        $("#reCilOI").val(myObj[i]['cil_i']);
    else
        $("#reCilOI").val('+'+ myObj[i]['cil_i']);
           // $("#reEsfOD").val(myObj[i]['esf_d']);
            //$("#reEsfOI").val(myObj[i]['esf_i']);
           // $("#reCilOD").val(myObj[i]['cil_d']);
          //  alert(decimal(myObj[i]['cil_i']));
           // $("#reCilOI").val(myObj[i]['cil_i']);
            $("#reEjeOD").val(myObj[i]['eje_d']);
            $("#reEjeOI").val(myObj[i]['eje_i']);
        }    
function lensometria(myObj,i){
    if(myObj[i]['esf_d'] < 0 )
       $("#leEsfOD").val(myObj[i]['esf_d']);
    else
        $("#leEsfOD").val('+'+ myObj[i]['esf_d']);
    
    if(myObj[i]['esf_i'] < 0 )
       $("#leEsfOI").val(myObj[i]['esf_i']);
    else
        $("#leEsfOI").val('+'+ myObj[i]['esf_i']);
    
    if(myObj[i]['cil_d'] < 0 )
        $("#leCilOD").val(myObj[i]['cil_d']);
    else
        $("#leCilOD").val('+'+ myObj[i]['cil_d']);
    
    if(myObj[i]['cil_i'] < 0 )
        $("#leCilOI").val(myObj[i]['cil_i']);
    else
        $("#leCilOI").val('+'+ myObj[i]['cil_i']);
    
    //        $("#leEsfOD").val(myObj[i]['esf_d']);
      //      $("#leEsfOI").val(myObj[i]['esf_i']);
        //    $("#leCilOD").val(myObj[i]['cil_d']);
          //  $("#leCilOI").val(myObj[i]['cil_i']);
            $("#leEjeOD").val(myObj[i]['eje_d']);
            $("#leEjeOI").val(myObj[i]['eje_i']);
        }  
function recetalejos(myObj,i){
    if(myObj[i]['esf_d'] < 0 )
       $("#rlEsfOD").val(myObj[i]['esf_d']);
    else
        $("#rlEsfOD").val('+'+ myObj[i]['esf_d']);
    
    if(myObj[i]['esf_i'] < 0 )
       $("#rlEsfOI").val(myObj[i]['esf_i']);
    else
        $("#rlEsfOI").val('+'+ myObj[i]['esf_i']);
    
    if(myObj[i]['cil_d'] < 0 )
        $("#rlCilOD").val(myObj[i]['cil_d']);
    else
        $("#rlCilOD").val('+'+ myObj[i]['cil_d']);
    
    if(myObj[i]['cil_i'] < 0 )
        $("#rlCilOI").val(myObj[i]['cil_i']);
    else
        $("#rlCilOI").val('+'+ myObj[i]['cil_i']);            
            //$("#rlEsfOD").val(myObj[i]['esf_d']);
            //$("#rlEsfOI").val(myObj[i]['esf_i']);
            //$("#rlCilOD").val(myObj[i]['cil_d']);
            //$("#rlCilOI").val(myObj[i]['cil_i']);
            $("#rlEjeOD").val(myObj[i]['eje_d']);
            $("#rlEjeOI").val(myObj[i]['eje_i']);
} 
function recetacerca(myObj,i){
    if(myObj[i]['esf_d'] < 0 )
       $("#rcEsfOD").val(myObj[i]['esf_d']);
    else
        $("#rcEsfOD").val('+'+ myObj[i]['esf_d']);
    
    if(myObj[i]['esf_i'] < 0 )
       $("#rcEsfOI").val(myObj[i]['esf_i']);
    else
        $("#rcEsfOI").val('+'+ myObj[i]['esf_i']);
    
    if(myObj[i]['cil_d'] < 0 )
        $("#rcCilOD").val(myObj[i]['cil_d']);
    else
        $("#rcCilOD").val('+'+ myObj[i]['cil_d']);
    
    if(myObj[i]['cil_i'] < 0 )
        $("#rcCilOI").val(myObj[i]['cil_i']);
    else
        $("#rcCilOI").val('+'+ myObj[i]['cil_i']);    
            //$("#rcEsfOD").val(myObj[i]['esf_d']);
           // $("#rcEsfOI").val(myObj[i]['esf_i']);
            //$("#rcCilOD").val(myObj[i]['cil_d']);
            //$("#rcCilOI").val(myObj[i]['cil_i']);
            $("#rcEjeOD").val(myObj[i]['eje_d']);
            $("#rcEjeOI").val(myObj[i]['eje_i']);
}
        
                }
            }     
         }    ;   
         xhttp.open("POST",ruta , true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send(datos);    
    }
    function cargarparametro2(id_atencion,id_agenda){
   

       datos='funcion=cargarparametro2' ;
       ruta= "../negocio/datencion.php";
       marco= "";
       
       datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion;
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
          if(this.responseText !== '')      
           var myObj = JSON.parse(this.responseText);
          
            
                if (myObj !== null)  {
                
            //     fichaatencion= myObj;
          //         console.log(myObj);
    
      
            $("#avScOD").val(myObj[0]['sc_d']);
            $("#avScOI").val(myObj[0]['sc_i']);
            $("#avCcOD").val(myObj[0]['cc_d']);
            $("#avCcOI").val(myObj[0]['cc_i']);

            $("#toPioOD").val(myObj[0]['pio_d']);
            $("#toPioOI").val(myObj[0]['pio_i']);
                  validarPio(); 
            //         $("#rlEsfOD").val("");
   

         
                }
            }     
         }    ;   
         xhttp.open("POST",ruta , true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send(datos);    
    }
    function cargarparametro3(id_atencion,id_agenda){
   
  /*    if(filas.id_agenda == null)  {
               //alert(filas.id_agenda);
       var fila = filas;
       var id_agenda = $("#"+fila).children("td:nth-child(7)").text().trim();
      }else{ 
          var id_agenda = filas.id_agenda;
      }    */
       
       datos='funcion=cargarparametro3' ;
       ruta= "../negocio/datencion.php";
       marco= "";
       
       datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion;
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
          if(this.responseText !== '')      
           var myObj = JSON.parse(this.responseText);
          
             
                if (myObj !== null)  {
                
            //     fichaatencion= myObj;
           //        console.log(myObj);
                 nv1 = myObj[0]['rlvertex'];
                 nv2 = parseInt(myObj[0]['rcvertex']);
               if(nv1 == 11){  
                  document.getElementById("rd11").checked = true;
                  document.getElementById("rd12").checked = false;
              }else if(nv1 == 12){  
                   document.getElementById("rd12").checked = true;
                   document.getElementById("rd11").checked = false;
               }else if(nv1 == 0){
                  document.getElementById("rd11").checked = false; 
                  document.getElementById("rd12").checked = false;
               }else if(nv1 == 1){
                  document.getElementById("rd11").checked = true; 
                  document.getElementById("rd12").checked = true;
               }
                 
                $("#vtxOD").val(myObj[0]['rlvertex_d']);
                $("#vtxOI").val(myObj[0]['rlvertex_i']);
                $("#rlDp").val(myObj[0]['rldp']);
                
                $("#rlAvOD").val(myObj[0]['av_d']);
                $("#rlAvOI").val(myObj[0]['av_i']);
                
                
               $("#vtxOD2").val(myObj[0]['rcvertex_d']);
               $("#vtxOI2").val(myObj[0]['rcvertex_i']);
               $("#rcDp").val(myObj[0]['rcdp']);
               // console.log("rcvertex:"+nv2);
               if(nv2 == 21) { 
                  document.getElementById("rd21").checked = true;
                  document.getElementById("rd22").checked = false;
              }else if(nv2 == 22){  
                   document.getElementById("rd21").checked = false;
                   document.getElementById("rd22").checked = true;
               } else if(nv2 == 0){ 
                   document.getElementById("rd21").checked = false;
                   document.getElementById("rd22").checked = false;
               }else if(nv2 == 1){ 
                   document.getElementById("rd21").checked = true;
                   document.getElementById("rd22").checked = true;
               }
               
              // alert(myObj[0]['j_d']);
              // $("#rcAdOD").val(myObj[0]['adicion_d']);
               asignar("#rcAdOD",myObj[0]['adicion_d']);
               asignar("#rcAdOI",myObj[0]['adicion_i'])
              // $("#rcAdOI").val(myObj[0]['adicion_i']);
               $("#rcJOD").val(myObj[0]['j_d']);
               $("#rcJOI").val(myObj[0]['j_i']);
             
            //   $("#rcAdIguales").val(myObj[0]['']);
            
               if(myObj[0]['adicion']==1)  
                  document.getElementById("rcAdIguales").checked = true;
               else 
                   document.getElementById("rcAdIguales").checked = false;
   
                }
            }     
         }    ;   
         xhttp.open("POST",ruta , true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send(datos);    
    }
function cargarparametro4(id_atencion,id_agenda){
         
       datos='funcion=cargarparametro4' ;
       ruta= "../negocio/datencion.php";
       marco= "";
       datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion;
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
          if(this.responseText !== '')      
           var myObj = JSON.parse(this.responseText);
          
                if (myObj !== null)  {
          
                 //  console.log(myObj);
       function checkvalor(valor){
           if(valor == 1)
               return true;
           else 
              return false;
       }     
                           
                $("#chkOptico1").prop('checked', checkvalor(myObj[0]['lente_optico']));
                $("#chkContacto1").prop('checked', checkvalor(myObj[0]['lente_contacto']));

                $("#rlChk").prop('checked', checkvalor(myObj[0]['receta_lejos']));
                $("#rcChk").prop('checked', checkvalor(myObj[0]['receta_cerca']));
                $("#riChk").prop('checked', checkvalor(myObj[0]['receta_intermedia']));
                
                  if(checkvalor(myObj[0]['lente_optico']))
                     $('.chkoptico').show();
   
                 if(checkvalor(myObj[0]['lente_contacto']))
                    $('.chkcontacto').show();
   
                }
            }     
         }    ;   
         xhttp.open("POST",ruta , true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send(datos);    
 }
 function cargarparametro5(id_atencion,id_agenda){

       datos='funcion=cargartipolente' ;
       ruta= "../negocio/datencion.php";
       marco= "";
       
       datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion;
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
          if(this.responseText !== '')      
           var myObj = JSON.parse(this.responseText);
          
            
            if (myObj !== null)  {
             
            //     fichaatencion= myObj;
          //         console.log(myObj);
        /*    function checkvalor(valor){
              if(valor == 1)
               return true;
            else 
              return false;
            } */  
                for(i=0;i< myObj.length;i++){
                     //     console.log("cargar lentes...");
                   lentes[myObj[i]['cod_tlente']]=1;
                   $("#lente"+myObj[i]['cod_tlente']).prop('checked', true);
                //  document.getElementById("#lente"+myObj[i]['cod_tlente']).checked = true;
                //   console.log("#lente"+myObj[i]['cod_tlente']+"id_optica"+myObj[i]['id_optica']);
                  //     console.log($("#lente"+myObj[i]['cod_tlente']).val());
                   //    console.log($("#lente"+myObj[i]['cod_tlente']).is(':checked'));
               // $("#rlChk").prop('checked', checkvalor(myObj[0]['receta_lejos']));
              // $(obj).is(':checked')
               }
          
   
             }
           }     
         }    ;   
         xhttp.open("POST",ruta , true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send(datos);    
 }
 function limpiarReceta()
        {
            $("#reEsfOD").val("");  
            $("#reEsfOI").val("");
            $("#reCilOD").val("");
            $("#reCilOI").val("");
            $("#reEjeOD").val("");
            $("#reEjeOI").val("");

            $("#avScOD").val(0);
            $("#avScOI").val(0);
            $("#avCcOD").val(0);
            $("#avCcOI").val(0);

            $("#toPioOD").val("");
            $("#toPioOI").val("");
             document.getElementById("toPioOD").style.backgroundColor = 'transparent';
              document.getElementById("toPioOI").style.backgroundColor = 'transparent';

            $("#leEsfOD").val("");
            $("#leEsfOI").val("");
            $("#leCilOD").val("");
            $("#leCilOI").val("");
            $("#leEjeOD").val("");
            $("#leEjeOI").val("");

            $("#rlEsfOD").val("");
            $("#rlEsfOI").val("");
            $("#rlCilOD").val("");
            $("#rlCilOI").val("");
            $("#rlEjeOD").val("");
            $("#rlEjeOI").val("");
            $("#rlAvOD").val(0);
            $("#rlAvOI").val(0);
            $("#rlDp").val("");
            $("#rd1").val(""); // 11:NV  12:DP
            $("#rd11").prop('checked', false);
            $("#rd12").prop('checked', false);
            $("#vtxOD").val("");
            $("#vtxOI").val("");

            $("#rcAdOD").val("");
            $("#rcAdOI").val("");
            $("#rcEsfOD").val("");
            $("#rcEsfOI").val("");
            $("#rcCilOD").val("");
            $("#rcCilOI").val("");
            $("#rcEjeOD").val("");
            $("#rcEjeOI").val("");
            $("#rcJOD").val("");
            $("#rcJOI").val("");
            $("#rcDp").val("");
            $("#rd2").val(""); // 21:NV  22:DP
            $("#rd21").prop('checked', false);
            $("#rd22").prop('checked', false);
            $("#vtxOD2").val("");
            $("#vtxOI2").val("");
            
             $("#rcAdIguales").prop('checked', true);
            for(i=1 ; i<20;i++)
                $("#lente"+i).prop('checked', false);
            
            desmarcar(1);
            desmarcar(2);
/*
            $("#chkOrg").prop('checked', false);
            $("#chkVid").prop('checked', false);
            $("#chkPoli").prop('checked', false);
            $("#chkUv").prop('checked', false);
            $("#chkRefle").prop('checked', false);
            $("#chkFoto").prop('checked', false);
            $("#chkPola").prop('checked', false);
            $("#chkRoad").prop('checked', false);
            $("#chkFil").prop('checked', false);
            $("#chkRaya").prop('checked', false);
            $("#chkLent").prop('checked', false);
            $("#chkBifo").prop('checked', false);
            $("#chkMult").prop('checked', false);
            $("#chkIndi").prop('checked', false);

            $("#chkBlan").prop('checked', false);
            $("#chkTori").prop('checked', false);
            $("#chkDese").prop('checked', false);
            $("#chkPro").prop('checked', false);
            $("#chkMulti").prop('checked', false);
      */      

            $("#chkOptico1").prop('checked', false);
            $("#chkContacto1").prop('checked', false);

            $("#rlChk").prop('checked', false);
            $("#rcChk").prop('checked', false);
            $("#riChk").prop('checked', false);
            mostraCheckbox();
}
        function copiar(inicio, fin) {
            
        if(!($("#" + inicio + "EsfOD").val() == ''))    
           rcEsfODaux= absoluto($("#" + inicio + "EsfOD").val());
        else 
           rcEsfODaux= '0.00';
       
        if(!($("#" + inicio + "EsfOI").val() == ''))    
           rcEsfOIaux= absoluto($("#" + inicio + "EsfOI").val());
        else 
           rcEsfOIaux= '0.00';
       
       
            $("#" + fin + "EsfOD").val($("#" + inicio + "EsfOD").val())
            $("#" + fin + "EsfOI").val($("#" + inicio + "EsfOI").val())
            $("#" + fin + "CilOD").val($("#" + inicio + "CilOD").val())
            $("#" + fin + "CilOI").val($("#" + inicio + "CilOI").val())
            $("#" + fin + "EjeOD").val($("#" + inicio + "EjeOD").val())
            $("#" + fin + "EjeOI").val($("#" + inicio + "EjeOI").val())
            
      if(fin == 'rl'){
         $("#rlChk").prop('checked', true);  
         medida(7);
         medida(3);
         medidagenerica(3);
         optica();
       }else if(fin == 'rc')
         medida(4);
         medidagenerica(4);
     
        }

        function limpiar(nom)
        {
      
            if (nom == "av")
            {
                $("#avScOD").val("");
                $("#avScOI").val("");
                $("#avCcOD").val("");
                $("#avCcOI").val("");
            }

            if (nom == "to")
            {

                $("#toPioOD").val("");
                $("#toPioOI").val("");
            }

            if (nom == "re" || nom == "le" || nom == "rl" || nom == "rc")
            {
                $("#" + nom + "EsfOD").val('0.00');
                $("#" + nom + "EsfOI").val('0.00');
                $("#" + nom + "CilOD").val('0.00');
                $("#" + nom + "CilOI").val('0.00');
                $("#" + nom + "EjeOD").val('0.00');
                $("#" + nom + "EjeOI").val('0.00');

            }

            if (nom == "rl" || nom == "rc")
            {
                $("#" + nom + "Dp").val("");

            }

            if (nom == "rl")
            {
                $("#rlAvOD").val("");
                $("#rlAvOI").val("");
            }

            if (nom == "rc")
            {
                $("#rcAdOD").val('0.00');
                $("#rcAdOI").val('0.00');
                $("#rcJOD").val("");
                $("#rcJOI").val("");
                rcEsfODaux=0;
                rcEsfOIaux=0;
            }
        }

     
    
 function presentaradio(obj,opc){
  //   alert($(obj).is(':checked'));
 // alert($(obj).val());
 nv1 = $(obj).val();

 //   alert(document.getElementById(obj).checked);
 if(opc == 1){
     if($(obj).prop('checked') ){
         $("#rd21").prop('checked', true);
        // $("#rd11").prop('checked', true);
     }else{
        $("#rd21").prop('checked', false); 
       // $("#rd11").prop('checked', false); 
    }   
   //   $("#rd22").prop('checked', false);
      nv2= $("#rd21").val(); 
      nv2= 21;
 }else{
     if($(obj).prop('checked') ){
         $("#rd22").prop('checked', true);
        // $("#rd11").prop('checked', true);
     }else{
        $("#rd22").prop('checked', false); 
       // $("#rd11").prop('checked', false); 
     }  
    nv2= $("#rd22").val();  
 }
   if($("#rd11").prop('checked') && $("#rd12").prop('checked') ){
       nv1 = 1;
   }else if(!$("#rd11").prop('checked') && !$("#rd12").prop('checked') ){
       nv1 = 0;
   }
 
  if($("#rd21").prop('checked') && $("#rd22").prop('checked') ){
       nv2 = 1;
   }else if(!$("#rd21").prop('checked') && !$("#rd22").prop('checked') ){
       nv2 = 0;
   }
 
   //  medida(5);
     // receta();
 }
 function presentaradio2(obj){
  //   alert($(obj).is(':checked'));
 //  alert($(obj).val());
     nv2 = $(obj).val();
     if($(obj).prop('checked') ){
         $(obj).prop('checked', true);
        // $("#rd11").prop('checked', true);
     }
     
    if($("#rd21").prop('checked') && $("#rd22").prop('checked') ){
       nv2 = 1;
    }else if(!$("#rd21").prop('checked') && !$("#rd22").prop('checked') ){
       nv2 = 0;
    }
     
 }
 function presentalente(obj){
    if($(obj).val() < 15)
       $("#chkOptico1").prop('checked', true);   
    else 
      $("#chkContacto1").prop('checked', true);  
    
   //  alert($(valor).val());
      if($(obj).is(':checked')){
       //  alert($(obj).val());
       lentes[$(obj).val()]=1;
     }else 
       lentes[$(obj).val()]=0;
    
 
    
    lente();
   // console.log($(obj).val());
 }
 

  function mostraRadio(obj)
  {
   //  alert($(obj).val());
            
  if ($(obj).val() == 1)
            {
                $('.chkoptico1').show();
                 $('.chkcontacto').hide();

            }
 if ($(obj).val() == 2)
            {

                $('.chkcontacto').show();
                $('.chkoptico1').hide();
            }
          
  } 
  
 function mostralente2(opc)
  {
          
    if (opc == 1)
    {  
    
           $('.chkoptico').show();
           $('.chkcontacto').hide();
         //  $("#chkOptico1").prop('checked', true);
               

    }
    if (opc == 2)
    {  
          $('.chkcontacto').show();
          $('.chkoptico').hide();
         //  $("#chkContacto1").prop('checked', true);
     }
     
     /*  for(i=0; i< lentes.length; i++){
              if(lentes[i]>0) 
                  $("#lente"+lentes[i]).prop('checked', true);
              else 
                  $("#lente"+lentes[i]).prop('checked', false);
       }*/
     optica();    
  } 
    function mostralente(obj)
  {
   //  alert($(obj).val());
            
    if ($(obj).val() == 1)
    {  
      if($(obj).is(':checked')){ 
           $('.chkoptico').show();
           
      }else{
          $('.chkoptico').hide();
          //desmarcar(1)    ;
      }          

    }
    if ($(obj).val() == 2)
    {
        if($(obj).is(':checked')){ 
          $('.chkcontacto').show();
        }else{
          $('.chkcontacto').hide();
        //   desmarcar(2)    ; 
        }        
     }
          
  } 
  function desmarcar(opc){
    if(opc == 1){    
        $('.chkoptico').find('input').each(function(){
         //console.log($(this).val());
           lentes[$(this).val()]=0;
           $("#lente"+$(this).val()).prop('checked', false);
        });
    }else{
           $('.chkcontacto').find('input').each(function(){
        //console.log($(this).val());
            lentes[$(this).val()]=0;
             $("#lente"+$(this).val()).prop('checked', false);
         });  
    }
  
  }
 function mostraCheckbox()// habia sido comentado
        {

            if ($("#chkOptico").prop('checked'))
            {
                $('.chkoptico').show();
                 $('.chkcontacto').hide();

            }
            if ($("#chkContacto").prop('checked'))
            {

                $('.chkcontacto').show();
                $("#chkOptico").attr('checked','')
                $('.chkoptico').hide();
            }
            if (!$("#chkOptico").prop('checked'))
            {
                $('.chkoptico').hide();

            }
            if (!$("#chkContacto").prop('checked'))
            {
                $('.chkcontacto').hide();

            }
        }
function medida(cod){
    ccmedida[cod]=1;
}
function grabarparametros(opc){
   bandera2= false;
   bandera1= false;
     lente();
     var factor1 = 0;
     var factor2 = 0;
   if(ccmedida[7]==1){ //optica
       optica(); 
    }  
    if(ccmedida[5]==1){ //receta
       receta();bandera2 = true;
    }  
   if(ccmedida[0]==1){
        medidor();
        bandera1 = true;
    }
    //del 1-4 son medidas genericas
    for(i=1; i< ccmedida.length && i < 5 ; i++){
        if(ccmedida[i]==1){
           medidagenerica(i);
        
          if(i < 3 ){
            bandera1 = true;
          }else{
            bandera2 = true;
          }
       }   
    }   
   
   

    $('.primeraFila :input').each(function () {
             if($(this).val() > 0)   
                 factor1+= 1; 
        });
    $('.segundaFila  :input ').each(function () {
             if($(this).is(':input[type=radio]')  )
                 ;
             else if($(this).val() > 0 ){
                 factor2+= 1; 
             }     
                                
        });   
   
    if(factor1 > 0 && factor2 > 0  && bandera2){
       actualiza_estado_agenda(4);//alert("f1");//color cafe  
    }
    
    if(factor1 > 0 && factor2 == 0 && bandera1){
        actualiza_estado_agenda(3);//alert("f1");//verde oscuro 
    }  
    
    
     //reset
    for(i=0; i< ccmedida.length ; i++){
        ccmedida[i]=0;
        
    } 
    if(opc == 1)    
     $("#Mparametros").modal('hide');
}
function registra_parametrosiniciales(obj,value){
  // if($(obj).prop('checked')){
      if(confirm("¿CONFIRMAR REGISTRAR SIN PARAMETROS INICIALES?"))   { 
         actualiza_estado_agenda(3);//verde oscuro
         $(obj).attr( 'disabled',true); 
         cerrarficha(value);
       
      }//else
        // $(obj).prop( 'checked',false); 
  // } 
}

function registra_terminoactividad(obj,value){
 //  if($(obj).prop('checked')){
      actualiza_estado_agenda(4);//cafe
      $(obj).attr( 'disabled',true);  
       cerrarficha(value);
  // } 
}

function actualiza_estado_agenda(estado){
        
var id_agenda = 0;
//var id_atencion = 0;
if(atencion != 0){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
   // id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
     if( $("#txt_id_agenda ").val().trim() == $("#" + filaParametros).children("td:nth-child(7)").text().trim()) {
           id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
     }else
          id_agenda = preficha[0].id_agenda;
}
    marco = "";
   ruta = "../negocio/datos.php";
   data = "funcion=actualizaestado&id_agenda=" + id_agenda+'&estado_agenda='+estado;
     //   alert(id_agenda);
   sendajaxpass(marco, ruta,data);
    }
function lente(){

 
var myJSON1 = JSON.stringify(lentes);
var id_agenda = 0;
var id_atencion = 0;
if(atencion != 0){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
     if( $("#txt_id_agenda ").val().trim() == $("#" + filaParametros).children("td:nth-child(7)").text().trim()) {
           id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
     }else
          id_agenda = preficha[0].id_agenda;
}
 //console.log("graba_lente:"+id_atencion) ; 
    datos='funcion=ingresarlente' ;
    ruta= "../negocio/datencion.php";
    marco= "";
    datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion+'&lentes='+myJSON1;
    sendatencion(marco,ruta,datos);
    
   
}
function optica(){
    
    if($("#chkOptico1").prop('checked')) chkOptico1 = 1; else  chkOptico1 = 0;
    if($("#chkContacto1").prop('checked')) chkContacto = 1; else  chkContacto = 0;
    if($("#rlChk").prop('checked')) recetaLejos = 1; else  recetaLejos = 0;
    if($("#rcChk").prop('checked')) recetaCerca = 1; else  recetaCerca = 0;
    if($("#riChk").prop('checked')) recetaIntermedia = 1; else  recetaIntermedia = 0;
   if(chkOptico1 == 0)
       desmarcar(1);
   if(chkContacto == 0)
       desmarcar(2);
   
var id_agenda = 0;
var id_atencion = 0;
if(atencion != 0){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
     if( $("#txt_id_agenda ").val().trim() == $("#" + filaParametros).children("td:nth-child(7)").text().trim()) {
           id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
     }else
          id_agenda = preficha[0].id_agenda;
}
// console.log("graba optica:id_atencion="+id_atencion+"/id_agenda="+id_agenda);
    datos='funcion=ingresaoptica' ;
    ruta= "../negocio/datencion.php";
    marco= "";
    datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion+'&receta_lejos='+recetaLejos
     +'&receta_cerca='+recetaCerca+'&receta_intermedia='+recetaIntermedia
     +'&lente_optico='+chkOptico1+'&lente_contacto='+chkContacto;
    sendatencion(marco,ruta,datos);
    
   
}
function receta(){
    //recetaLejosOpcNV1 = $("#rd1").val(); // 11:NV  12:DP

    recetaLejosNVD = $("#vtxOD").val();
    recetaLejosNVI = $("#vtxOI").val();
    recetaLejosAgViOD = $("#rlAvOD").val();
    recetaLejosAgViOI = $("#rlAvOI").val();
    recetaLejosDisPup = $("#rlDp").val();
    
    if($("#rcAdIguales").prop('checked'))
        recetacercaAdd = 1;
    else 
        recetacercaAdd = 0;
    recetacercaAdiOD = $("#rcAdOD").val();
    recetacercaAdiOI = $("#rcAdOI").val();
    recetacercaJOD = $("#rcJOD").val();
    recetacercaJOI = $("#rcJOI").val();
   // recetacercaOpcNV2 = $("#rd2").val(); // 21:NV  22:DP
    recetacercaOpcNV2 = nv2;
    vertexOD2 = $("#vtxOD2").val();
    vertexOI2 = $("#vtxOI2").val();
    recetacercaDisPup = $("#rcDp").val();
         recetaLejosOpcNV1 = nv1;    
   
var id_agenda = 0;
var id_atencion = 0;
if(atencion != 0){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
      if( $("#txt_id_agenda ").val().trim() == $("#" + filaParametros).children("td:nth-child(7)").text().trim()) {
           id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
     }else
          id_agenda = preficha[0].id_agenda;
}
 //alert(id_agenda);
    datos='funcion=ingresareceta' ;
    ruta= "../negocio/datencion.php";
    marco= "";
    datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion+'&rlvertex='+recetaLejosOpcNV1+'&rlvertex_d='+recetaLejosNVD
    +'&rlvertex_i='+recetaLejosNVI+'&rldp='+recetaLejosDisPup+'&av_d='+recetaLejosAgViOD+'&av_i='+recetaLejosAgViOI
    +'&adicion='+recetacercaAdd+'&adicion_d='+recetacercaAdiOD+'&adicion_i='+recetacercaAdiOI
    +'&j_d='+recetacercaJOD+'&j_i='+recetacercaJOI+'&rcvertex='+recetacercaOpcNV2+'&rcvertex_d='+vertexOD2
    +'&rcvertex_i='+vertexOI2+'&rcdp='+recetacercaDisPup;
    sendatencion(marco,ruta,datos);
    
   
}

function medidagenerica(cod){
    var codigo;
    codigo = cod;
      console.log("codigo 4");
   if(codigo == 1 ){ //refraccion
        EsfOD = $("#reEsfOD").val();
        EsfOI = $("#reEsfOI").val();
        CilOD = $("#reCilOD").val();
        CilOI = $("#reCilOI").val();
        EjeOD = $("#reEjeOD").val();
        EjeOI = $("#reEjeOI").val();
   }else if(codigo == 2 ){ //lensometria
        EsfOD = $("#leEsfOD").val();
        EsfOI = $("#leEsfOI").val();
        CilOD = $("#leCilOD").val();
        CilOI = $("#leCilOI").val();
        EjeOD = $("#leEjeOD").val();
        EjeOI = $("#leEjeOI").val();
    }else if(codigo == 3 ){ //receta lejos
        EsfOD = $("#rlEsfOD").val();
        EsfOI = $("#rlEsfOI").val();
        CilOD = $("#rlCilOD").val();
        CilOI = $("#rlCilOI").val();
        EjeOD = $("#rlEjeOD").val();
        EjeOI = $("#rlEjeOI").val();
         $("#rlChk").prop('checked', true);  
         optica(); 
   }else if(codigo == 4 ){ // receta cerca
        EsfOD = $("#rcEsfOD").val();
        EsfOI = $("#rcEsfOI").val();
        CilOD = $("#rcCilOD").val();
        CilOI = $("#rcCilOI").val();
        EjeOD = $("#rcEjeOD").val();
        EjeOI = $("#rcEjeOI").val();
      
   }    
var id_agenda = 0;
var id_atencion = 0;
if(atencion != 0){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
    
     if( $("#txt_id_agenda ").val().trim() == $("#" + filaParametros).children("td:nth-child(7)").text().trim()) {
           id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
     }else
          id_agenda = preficha[0].id_agenda;
}

    datos='funcion=ingresamedidagen' ;
   
    ruta= "../negocio/datencion.php";
    marco= "";
    
    datos+= '&id_agenda='+id_agenda+'&EsfOD='+EsfOD+'&EsfOI='+EsfOI+'&CilOD='+
            CilOD+'&CilOI='+CilOI+'&EjeOD='+EjeOD+'&EjeOI='+EjeOI+'&cod_med_generica='+codigo+'&id_atencion='+id_atencion;
   sendatencion(marco,ruta,datos);
    
   
}

function medidor(){

   var agudezaVisualScOD = $("#avScOD").val();
   var  agudezaVisualScOI = $("#avScOI").val();
   var  agudezaVisualCcOD = $("#avCcOD").val();
   var  agudezaVisualCcOI = $("#avCcOI").val();

   var  tonometriaPioOD = $("#toPioOD").val();
   var  tonometriaPioOI = $("#toPioOI").val();
   
var id_agenda = 0;
var id_atencion = 0;
if(atencion != 0){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
      if( $("#txt_id_agenda ").val().trim() == $("#" + filaParametros).children("td:nth-child(7)").text().trim()) {
           id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
     }else
          id_agenda = preficha[0].id_agenda;
}

    datos='funcion=ingresamedida' ;
   
    ruta= "../negocio/datencion.php";
    marco= "";
    
    datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion+'&sc_d='+agudezaVisualScOD+'&sc_i='+agudezaVisualScOI
    +'&cc_d='+agudezaVisualCcOD+'&cc_i='+agudezaVisualCcOI+'&pio_d='+tonometriaPioOD+'&pio_i='+tonometriaPioOI;
    sendatencion(marco,ruta,datos);
    
   
}
function guardarReceta()
        {   //MEDIDA GENERICA 1,2,3
            refraccionEsfOD = $("#reEsfOD").val();
            refraccionEsfOI = $("#reEsfOI").val();
            refraccionCilOD = $("#reCilOD").val();
            refraccionCilOI = $("#reCilOI").val();
            refraccionEjeOD = $("#reEjeOD").val();
            refraccionEjeOI = $("#reEjeOI").val();
            //"MEDIDA"
            agudezaVisualScOD = $("#avScOD").val();
            agudezaVisualScOI = $("#avScOI").val();
            agudezaVisualCcOD = $("#avCcOD").val();
            agudezaVisualCcOI = $("#avCcOI").val();

            tonometriaPioOD = $("#toPioOD").val();
            tonometriaPioOI = $("#toPioOI").val();
            //MEDIDA GENERICA 1,2,3
            lensometriaEsfOD = $("#leEsfOD").val();
            lensometriaEsfOI = $("#leEsfOI").val();
            lensometriaCilOD = $("#leCilOD").val();
            lensometriaCilOI = $("#leCilOI").val();
            lensometriaEjeOD = $("#leEjeOD").val();
            lensometriaEjeOI = $("#leEjeOI").val();

            //MEDIDA GENERICA 1,2,3
            recetaLejosEsfOD = $("#rlEsfOD").val();
            recetaLejosEsfOI = $("#rlEsfOI").val();
            recetaLejosCilOD = $("#rlCilOD").val();
            recetaLejosCilOI = $("#rlCilOI").val();
            recetaLejosEjeOD = $("#rlEjeOD").val();
            recetaLejosEjeOI = $("#rlEjeOI").val();
            
            recetaLejosAgViOD = $("#rlAvOD").val();
            recetaLejosAgViOI = $("#rlAvOI").val();
            recetaLejosDisPup = $("#rlDp").val();
            recetaLejosOpcNV1 = $("#rd1").val(); // 11:NV  12:DP
            recetaLejosNVD = $("#vtxOD").val();
            recetaLejosNVI = $("#vtxOI").val();

            
            recetacercaEsfOD = $("#rcEsfOD").val();
            recetacercaEsfOI = $("#rcEsfOI").val();
            recetacercaCilOD = $("#rcCilOD").val();
            recetacercaCilOI = $("#rcCilOI").val();
            recetacercaEjeOD = $("#rcEjeOD").val();
            recetacercaEjeOI = $("#rcEjeOI").val();
            
            recetacercaAdiOD = $("#rcAdOD").val();
            recetacercaAdiOI = $("#rcAdOI").val();
            recetacercaJOD = $("#rcJOD").val();
            recetacercaJOI = $("#rcJOI").val();
            recetacercaDisPup = $("#rcDp").val();
            recetacercaOpcNV2 = $("#rd2").val(); // 21:NV  22:DP

            vertexOD2 = $("#vtxOD2").val();
            vertexOI2 = $("#vtxOI2").val();
            

            opticoOrganico = $("#chkOrg").prop('checked');
            opticoVidrio = $("#chkVid").prop('checked');
            opticoPoli = $("#chkPoli").prop('checked');
            opticoUv = $("#chkUv").prop('checked');
            opticoReflex = $("#chkRefle").prop('checked');
            opticoFotocro = $("#chkFoto").prop('checked');
            opticoPolari = $("#chkPola").prop('checked');
            opticoRoad = $("#chkRoad").prop('checked');
            opticoFiltro = $("#chkFil").prop('checked');
            opticoRayas = $("#chkRaya").prop('checked');
            opticoDosLen = $("#chkLent").prop('checked');
            opticoBifocal = $("#chkBifo").prop('checked');
            opticoMultifo = $("#chkMult").prop('checked');
            opticoIndice = $("#chkIndi").prop('checked');

            contactoBlando = $("#chkBlan").prop('checked');
            contactoTorico = $("#chkTori").prop('checked');
            contactoDesecha = $("#chkDese").prop('checked');
            contactoProlon = $("#chkPro").prop('checked');
            contactoMultifo = $("#chkMulti").prop('checked');

         //   chkOptico = $("#chkOptico").prop('checked');
         //   chkContacto = $("#chkContacto").prop('checked');

            recetaLejos = $("#rlChk").prop('checked');
            recetaCerca = $("#rcChk").prop('checked');
            alert("" + refraccionEsfOD + refraccionEsfOI + refraccionCilOD + refraccionCilOI + refraccionEjeOD + refraccionEjeOI
                    + agudezaVisualScOD + agudezaVisualScOI + agudezaVisualCcOD + agudezaVisualCcOI + tonometriaPioOD
                    + tonometriaPioOI + lensometriaEsfOD + lensometriaEsfOI + lensometriaCilOD + lensometriaCilOI + lensometriaEjeOD
                    + lensometriaEjeOI + recetaLejosEsfOD + recetaLejosEsfOI + recetaLejosCilOD + recetaLejosCilOI + recetaLejosEjeOD
                    + recetaLejosEjeOI + recetaLejosAgViOD + recetaLejosAgViOI + recetaLejosDisPup + recetacercaAdiOD + recetacercaAdiOI
                    + recetacercaEsfOD + recetacercaEsfOI + recetacercaCilOD + recetacercaCilOI + recetacercaEjeOD + recetacercaEjeOI
                    + recetacercaJOD + recetacercaJOI + recetacercaDisPup + vertexOD2 + vertexOI2 +recetacercaOpcNV2+ opticoOrganico + opticoVidrio + opticoPoli
                    + opticoUv + opticoReflex + opticoFotocro + opticoPolari + opticoRoad + opticoFiltro + opticoRayas
                    + opticoDosLen + opticoBifocal + opticoMultifo + opticoIndice + contactoBlando + contactoTorico + contactoDesecha
                    + contactoProlon + contactoMultifo  + recetaLejos + recetaCerca + recetaLejosNVD + recetaLejosNVI + recetaLejosOpcNV1
                    ); //+ chkOptico  + chkContacto
        }

  $(document).ready(function () {


        $("#Mparametros").on('hide.bs.modal', function () {
            noVacia = 0;
            noVacia2 = 0;
            $('.primeraFila :input').each(function () {
                if ($(this).val() != "")
                {
                    noVacia = 1;
                }
            });

            if (noVacia == 1) {
                if ($("#" + filaParametros).css("background-color") == "rgb(130, 224, 170)")
                    $("#" + filaParametros).css("background-color", "#f1948a");
            }


            $('.segundaFila :input').each(function () {
                if ($(this).val() != "")
                {
                    noVacia2 = 1;
                }
            });

            if (noVacia2 == 1) {
                if ($("#" + filaParametros).css("background-color") == "rgb(241, 148, 138)")
                    $("#" + filaParametros).css("background-color", "#e59866");
            }

             //   guardarReceta();
        });
    });
 function openparametro(){
    // var fecha_actual = $("#alternate2").val();
    // var parametros = 'fecha='+fecha_actual;
       //funcion=rpt1&id_agenda='+parseInt(id_agenda)+'&opc='+opc+'&id_paciente='+parseInt(id_paciente);   
       //AbrirVentana("../reporte/rptdiario_compacto.php", parametros, "", 600, 500);
        // AbrirVentana("../atencionfunc/listahistorial.php", parametros, "", 650, 500);
    //alert(id_paciente); 
 // if(id_paciente > 0 && id_paciente != ''){
       // $("#lblid_paciente"+value).text(id_paciente);
     // var parametros = 'id_paciente='+id_paciente+'&value='+value;
      var parametros = '';
      AbrirVentana("../funcion/vtna_parametro.php", parametros, "", 800, 450);
  //}    
     
     
 }
 function validador_enter(evt,obj) {
    if (evt.which == 13) {
        validate(evt,obj);
    }
 }
 
 
 function validate(evt,obj) {
  var theEvent = evt || window.event;
  var bandera = true;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9.-]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    bandera = false;
    
    if(theEvent.preventDefault){
      
        theEvent.preventDefault();
        
    }    
  } 
  //alert(bandera);
  if(!bandera && $(obj).val()  !== '-NaN' && $(obj).val()  !== '+NaN'){
    //var num = parseFloat(Math.abs($(obj).val()));
    var num = parseFloat($(obj).val());
    console.log(num);
     
   // $(obj).css('border', '1px solid');
    if(  num < 0 ){
 
       $(obj).val((num.toFixed(2)));
       
    }else{
       num = parseFloat(Math.abs($(obj).val())); 
       $(obj).val('+'+(num.toFixed(2))); 
    }  
  }
   
  if( $(obj).val()  === '-NaN' || $(obj).val()  === '+NaN'){
       $(obj).val('');
    //   $(obj).css('border', '2px solid red');
  }
}
function muestra(value){
    console.log('num:'+value);
}
function formatotextbox(obj) {
  if($(obj).val() == '')
      $(obj).val('0.00'); 
} 
function validanumero(event,obj) {
  var bandera = true;  
     if (event.which >= 48 || event.which <= 57) { 
         ;
     }else if (event.which == 171 || event.which == 173 || event.which == 46 || event.which == 190) {
         ;
     }else{
         bandera = false;
         $(obj).val('');
     }   
     
     console.log(event.which+''+bandera);
  return bandera;   
}

function incrementa(event,obj) {
 // if($(obj).val() == '')
   //   $(obj).val('0.00'); 
  
  var cleanNum = 0.0;  
  var bandera = false;
    if (event.which == 38 || event.which == 104) { 
       if($(obj).val() == '')
         $(obj).val('0.00');
     
        var num = parseFloat($(obj).val());
        cleanNum = num+0.25;
        bandera = true;
         
        console.log("up");
    } else if (event.which == 40 || event.which == 98) {
       if($(obj).val() == '')
         $(obj).val('0.00');
       
        var num = parseFloat($(obj).val());
         cleanNum = num-0.25;
        bandera = true;
        console.log("down");
     }else
        ;
    /*else if (event.which == 40 || event.which == 98) {
        var num = parseFloat($(obj).val());
         cleanNum = num;
        bandera = true;
    }    console.log("num");
      */  
    
     if(bandera){ 
    
         if(cleanNum > 0 || cleanNum == 0)
           $(obj).val('+'+(cleanNum.toFixed(2)));
         else
           $(obj).val((cleanNum.toFixed(2)));
     }   
   
}