// document.getElementById("SEL_CATG1").selectedIndex = "0"; 
 
Arreglocat=[];
function inicio(value){
    cleamcampo();
    deshabilitaprod(value);
     habilitacampo(value,0);
     limpiaprod(551);
}
  function  openmodal(modal){
 
  $("#"+modal).draggable({
    handle: ".modal-header"
  });
  }
  
  function abrirmodal(modal){
       $(modal).modal("show");
       $(modal).on('shown.bs.modal', function () {
       
    });
  }
  function closemodal(modal){
    $(modal).modal('hide');
  
}
 function selbusqueda(obj,opc){
     if($(obj).val()==1){
         $("#divcategoria"+opc).attr('hidden',true);
         $("#divgeneral1"+opc).attr('hidden',false);
            $("#divgeneral2"+opc).attr('hidden',false);
     }else{
         $("#divcategoria"+opc).attr('hidden',false);
         $("#divgeneral1"+opc).attr('hidden',true);
           $("#divgeneral2"+opc).attr('hidden',true);
     }
         
 }
function loadmatrizcat(value){
      Arreglocat =  [ [1,'SEL_CATG'+value,'CANT_CATG'+value], [2,'CANT_CATSB'+value,'CANT_CATSB'+value], [2,'CANT_CATSBSB'+value,'CANT_CATSBSB'+value]];
}
//limpiacat(1); 
 //clearglcategoria(1);
 


 var preficha=0;
    var idfila;
    var idfilaagregar;
    var filaParametros;
 
 $('#txt_nacionalidad').val("chilena");


function cierremodal(prefijo){
    $('#ModalBusqueda').modal('hide');
  
}
function limpiarbusqueda(prefijo){
    
   $("#inputnombre"+prefijo).val("");
   $("#inputapellido"+prefijo).val("");
   $("#livesearch"+prefijo).html('');
   $("#inputapellido1").focus();

 
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
    function RegistroPaciente(e) {
        if ($("#collapseTwo").hasClass('show')) {
         
            $("#ModalBusqueda").modal("hide");
           
          
             $("#collapseTwo").hasClass('show');    
            e.stopPropagation();
   $("#inputnombre").val("");
   $("#apellido").val("");
   // document.getElementById("livesearch2").innerHTML="";
        }
    }

    function cargaFuncion(fecha) {
       nuevopaciente('','');
        limpiarfichapaciente(1); 
         bloquearfichapaciente(1);
         bloquearfichapaciente(2);
        createPopover('.edit', 'Acción');
        createPopover2('.edit2', 'Pago');
        mostraCheckbox();  //recetajs
        validarPio();
        validarAv();
        cargarTabla();
        colorTabla();       
      
           var fecha1 = $("#fecha_actual").text();
     
  
      sendajaxCargarTabla(fecha1);
  
      
    }

/*    
    $(document).ready(function()
    {
           $('#calendar').jqxCalendar('today');
    });*/
    function cargarTabla()//se carga al final de todo
    {

        var table = document.getElementById("Tmain");
        if (table != null) {
            for (var i = 1; i < table.rows.length; i++) {
//                for (var j = 0; j < prueba.length; j++) {
//
//                    if (table.rows[i].cells[0].innerHTML == prueba[j][0])
//                    {
//                        table.rows[i].cells[1].innerHTML = prueba[j][1];
//                        table.rows[i].cells[2].innerHTML = prueba[j][2];
//                        table.rows[i].cells[3].innerHTML = prueba[j][3];
//                        table.rows[i].cells[4].innerHTML = prueba[j][4];
//                    }
//
//
//                }
                table.rows[i].cells[2].onclick = function () {
                   // idfilaagregar = this.parentNode.id;
                   //  $("#ModalBusqueda").modal('show');
              
          
                    

                }
            }
        }
    }
    function colorTabla() {
        var table = document.getElementById("Tmain");
        if (table != null) {
            for (var i = 1; i < table.rows.length; i++) {


                if (table.rows[i].cells[1].innerHTML != "" && table.rows[i].cells[2].innerHTML != "" && table.rows[i].cells[3].innerHTML != "" && table.rows[i].cells[4].innerHTML != "")
                    table.rows[i].style.backgroundColor = " #82e0aa";
            }
        }
    }

    function modalDoc()
    {
        $('#Mparametros').modal();
    }
    function formatopositivo(obj){
      //  alert($(obj).val());
         if ($(obj).val() > 0)
        {
            $(obj).html('+'+$(obj).val());
        }
    }
     
 
    
    
 
   function advertenciawarning(msg){
        toastr.options.timeOut = 2000; // 1.5s
        toastr.options.positionClass = 'toast-top-left';
        toastr.warning(msg);
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
   $( function() {
    $( "#datepicker" ).datepicker({
            altField: "#alternate",
      altFormat: "DD, d MM, yy",  
         altField: "#alternate2",
      altFormat: "dd/mm/yy",  
      changeMonth: true,
      changeYear: true
      
    });
  } ); 
  
  function muestra(value){
      var from = value.split('-');
      var fecha2 = from[2]+'/'+from[1]+'/'+ from[0]; //fecha fmto latino
      alert(fecha2);
  }
  function loadagenda(fecha){
    var fechaup =  $("#alternate2").val().trim(); 
    var fromup = fechaup.split('/');
    var fecha1 = fromup[2]+'-'+fromup[1]+'-'+ fromup[0]; //fecha fmto latino   
     if(fecha == ''){
     //    alert($("#txt_fecha2").val());
     //    alert($("#alternate2").val());
         $("#txt_fecha2").val(fecha1);
          sendajaxCargarTabla($("#alternate2").val().trim());
      }else{
         var from = fecha.split('-');
        var fecha2 = from[2]+'/'+from[1]+'/'+ from[0]; //fecha fmto latino
        $("#alternate2").val(fecha2);
        sendajaxCargarTabla(fecha2);
      }
  }
  function updateagenda(){
      //  if( $("#fecha_actual").text().trim() == $("#alternate2").val().trim()){
             var fecha1 = $("#alternate2").val().trim()
      //     sendajaxCargarTabla(fecha1); //acutaliza a la fecha actual la agenda
    //      pacientependiente();
      
        
 //      }
        //  blopenpaciente= true; 
  }
  function notificacion(){
     //$( "#txt_motivo" ).val("ok");
     document.getElementById("txt_motivo").value = "fdsf";
  }
  function ocultacalendario(){
      $("#datepicker").hide();
      $("#icono").hide();
    //   $("#atencion").hide();
     //   $("#marcolistatencion").hide();
      $("#marcolistatencion").prop(' style="height: 200px;;overflow-y: auto;');
      document.getElementById("marcolistatencion").style.height = "350px"; 
  }
  
   function mostrarcalendario(){
      $("#datepicker").show();
      $("#icono").show();
       $("#atencion").show();
        $("#marcolistatencion").show();
         document.getElementById("marcolistatencion").style.height = "200px"; 
  }
  
  function esconder(){
   
    if($("#checkhide").prop('checked')){
       ocultacalendario(); 
   }else 
        mostrarcalendario();
    
  }
   function cerrar2(){
 //    var txt;
   // var r = confirm("Confirma cerrar session de: "+$("#lblusuario").text());
   // if (r == true) {
       uri = "cerrar.php"
      window.location= encodeURI(uri);
   
        
 }
function  openmodalatencion2(){
 $("#Modalatencion").draggable({
    handle: ".modal-header"
});
}
 
function  openmodalatencion3(){
 
  $("#Mparametros").draggable({
    handle: ".modal-header"
  });
  }
 
 function openmodalatencion(){
  // reset modal if it isn't visible
  if (!($('.modal.in').length)) {
    $('.modal-dialog').css({
      top: 0,
      left: 0
    });
  }
  $('#Modalatencion').modal({
    backdrop: false,
    show: true
  });

  $('.modal-dialog').draggable({
    handle: ".modal-header"
  });
 }
 
 function decimal(x) {
  return Number.parseFloat(x).toFixed(2);
}
function cierreventa(){
    alert("fdsaf");
}
function aviso(){
    alert("fdsaf");
}