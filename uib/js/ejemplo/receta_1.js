var ccmedida = [];
ccmedida[0]=0;
ccmedida[1]=0;
ccmedida[2]=0;
ccmedida[3]=0;
ccmedida[4]=0;
ccmedida[5]=0;
ccmedida[6]=0;
var nv1 =0;
var nv2 =0;

function impReceta()
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

    function limpiarReceta()
        {
            $("#reEsfOD").val("");
            $("#reEsfOI").val("");
            $("#reCilOD").val("");
            $("#reCilOI").val("");
            $("#reEjeOD").val("");
            $("#reEjeOI").val("");

            $("#avScOD").val("");
            $("#avScOI").val("");
            $("#avCcOD").val("");
            $("#avCcOI").val("");

            $("#toPioOD").val("");
            $("#toPioOI").val("");

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
            $("#rlAvOD").val("");
            $("#rlAvOI").val("");
            $("#rlDp").val("");
            $("#rd1").val(""); // 11:NV  12:DP
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
            
            $("#vtxOD2").val("");
            $("#vtxOI2").val("");

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

            $("#chkOptico").prop('checked', false);
            $("#chkContacto").prop('checked', false);

            $("#rlChk").prop('checked', false);
            $("#rcChk").prop('checked', false);
            mostraCheckbox();
        }
        function copiar(inicio, fin) {
            $("#" + fin + "EsfOD").val($("#" + inicio + "EsfOD").val())
            $("#" + fin + "EsfOI").val($("#" + inicio + "EsfOI").val())
            $("#" + fin + "CilOD").val($("#" + inicio + "CilOD").val())
            $("#" + fin + "CilOI").val($("#" + inicio + "CilOI").val())
            $("#" + fin + "EjeOD").val($("#" + inicio + "EjeOD").val())
            $("#" + fin + "EjeOI").val($("#" + inicio + "EjeOI").val())
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
                $("#" + nom + "EsfOD").val("");
                $("#" + nom + "EsfOI").val("");
                $("#" + nom + "CilOD").val("");
                $("#" + nom + "CilOI").val("");
                $("#" + nom + "EjeOD").val("");
                $("#" + nom + "EjeOI").val("");

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
                $("#rcAdOD").val("");
                $("#rcAdOI").val("");
                $("#rcJOD").val("");
                $("#rcJOI").val("");
            }
        }

        function adIgual()
        {
            if ($("#rcAdIguales").prop('checked'))
                $("#rcAdOI").val($("#rcAdOD").val());
        }
    
 function presentaradio(obj){
  //   alert($(obj).is(':checked'));
 //  alert($(obj).val());
 nv1 = $(obj).val();
 //   alert(document.getElementById(obj).checked);
     
 }
 function presentaradio2(obj){
  //   alert($(obj).is(':checked'));
 //  alert($(obj).val());
 nv2 = $(obj).val();
 //   alert(document.getElementById(obj).checked);
     
 }

  function mostraRadio(obj)
  {
   //  alert($(obj).val());
            
  if ($(obj).val() == 1)
            {
                $('.chkoptico').show();
                 $('.chkcontacto').hide();

            }
 if ($(obj).val() == 2)
            {

                $('.chkcontacto').show();
                $('.chkoptico').hide();
            }
          
  } 
    function mostralente(obj)
  {
   //  alert($(obj).val());
            
    if ($(obj).val() == 1)
    {  
      if($(obj).is(':checked')){ 
           $('.chkoptico').show();
      }else
          $('.chkoptico').hide();
                

    }
    if ($(obj).val() == 2)
    {
        if($(obj).is(':checked')){ 
          $('.chkcontacto').show();
        }else
          $('.chkcontacto').hide();
            
                
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
function grabarparametros(){
    // receta();
     optica();
    if(ccmedida[0]==1){
        //   alert(0);
          ;//  medidor();
    }
    for(i=1; i< ccmedida.length ; i++){
        if(ccmedida[i]==1){
           ;// medidagenerica(i);
        }
    }   
   
    //reset
    for(i=0; i< ccmedida.length ; i++){
        ccmedida[i]=0;
        
    } 
}
function lente(){
    
    if($("#chkOptico1").prop('checked')) chkOptico1 = 1; else  chkOptico1 = 0;
   
   
var id_agenda = 0;
var id_atencion = 0;
if(atencion != null){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
    id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
}
 
    datos='funcion=ingresaoptica' ;
    ruta= "../negocio/datencion.php";
    marco= "";
    datos+= '&id_agenda='+id_agenda+'&id_atencion='+id_atencion+'&receta_lejos='+recetaLejos
     +'&receta_cerca='+recetaCerca+'&receta_intermedia='+recetaIntermedia
     +'&lente_optico='+chkOptico1+'&lente_contacto='+chkContacto;
    sendatencion(marco,ruta,datos);
    
   
}
function optica(){
    
    if($("#chkOptico1").prop('checked')) chkOptico1 = 1; else  chkOptico1 = 0;
    if($("#chkContacto").prop('checked')) chkContacto = 1; else  chkContacto = 0;
    if($("#rlChk").prop('checked')) recetaLejos = 1; else  recetaLejos = 0;
    if($("#rcChk").prop('checked')) recetaCerca = 1; else  recetaCerca = 0;
    if($("#riChk").prop('checked')) recetaIntermedia = 1; else  recetaIntermedia = 0;
   
var id_agenda = 0;
var id_atencion = 0;
if(atencion != null){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
    id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
}
 
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
    recetaLejosOpcNV1 = nv1;
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
           
   
var id_agenda = 0;
var id_atencion = 0;
if(atencion != null){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
    id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
}
 
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
   }else{ // receta cerca
       EsfOD = $("#rcEsfOD").val();
        EsfOI = $("#rcEsfOI").val();
        CilOD = $("#rcCilOD").val();
        CilOI = $("#rcCilOI").val();
        EjeOD = $("#rcEjeOD").val();
        EjeOI = $("#rcEjeOI").val();
   }    
var id_agenda = 0;
var id_atencion = 0;
if(atencion != null){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
    id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
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
if(atencion != null){
    filaParametros = null;
    id_agenda = atencion.id_agenda;
    id_atencion = atencion.id_atencion;
    //alert(id_agenda);
}else{
    id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();
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
                    + recetacercaJOD + recetacercaJOI + recetacercaDisPup + vertexOD + vertexOI +recetacercaOpcNV2+ opticoOrganico + opticoVidrio + opticoPoli
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

                guardarReceta();
        });
    });
