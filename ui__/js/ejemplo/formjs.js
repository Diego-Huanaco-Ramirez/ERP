function hola(){
 ;//   alert($("#log").text());
}


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
     function validareje(obj) {
 

        if ($(obj).val() > 179)
        {
            $(obj).val(180);
        }
        
         if ($(obj).val() < 0 || $(obj).val() == 0)
        {
            $(obj).val(180- parseFloat($(obj).val()));
        }
        
      
     }    
 
    function validarPio() {
 

        if ($('#toPioOD').val() > 80)
        {
            $('#toPioOD').val(80);
        }
        if ($('#toPioOD').val() < 0)
        {
            $('#toPioOD').val(0);
        }
        if ($('#toPioOD').val() > 20)
            document.getElementById("toPioOD").style.backgroundColor = 'rgb(250, 88, 88)';
        else
            document.getElementById("toPioOD").style.backgroundColor = 'transparent';

        if ($('#toPioOI').val() > 80)
        {
            $('#toPioOI').val(80);
        }
        if ($('#toPioOI').val() < 0)
        {
            $('#toPioOI').val(0);
        }
        if ($('#toPioOI').val() > 20)
            document.getElementById("toPioOI").style.backgroundColor = 'rgb(250, 88, 88)';
        else
            document.getElementById("toPioOI").style.backgroundColor = 'transparent';
    }

    function validarAv() {


        if ($('#rlAvOD').val() > 1)
        {
            $('#rlAvOD').val(1);
        }

        if ($('#rlAvOD').val() < 0)
        {
            $('#rlAvOD').val(0);
        }

        if ($('#rlAvOI').val() > 1)
        {
            $('#rlAvOI').val(1);
        }

        if ($('#rlAvOI').val() < 0)
        {
            $('#rlAvOI').val(0);
        }
    }

function controlInput(opc, obj) { //open modal parametros
 
    if ($("#" + filaParametros).css("background-color") == "rgb(130, 224, 170)")
        {
            $('.segundaFila :input').each(function () {
                $(this).prop('readonly', true);
            });
        }
    if ($("#" + filaParametros).css("background-color") != "rgb(130, 224, 170)")
        {
            $('.segundaFila :input').each(function () {
                $(this).prop('readonly', false);
            });
        }
    var nombre;
    var tipo_pago;   
    var edad;
    var fecha_atencion;
    limpiarReceta();    
    if(opc == 2){
       
         if( (typeof atencion === "object" || typeof atencion === 'function')  && (atencion !== 0) )
          {  
            atencion = 0;   
           // cargaragendapaciente();
          }  
        if(obj != null){ 
            if( $("#txt_id_agenda ").val().trim() == atencion.id_agenda) {
              opcion1(); 
            } 
        }else{
              console.log("error obj:sql");
         }
      
         
        if(filaParametros != null ){
         
           var id_agenda = $("#" + filaParametros).children("td:nth-child(7)").text().trim();     
                
           if( $('#txt_id_agenda').val().trim() == id_agenda){
               opcion3(0,''); 
           } 
        }else {
             cargaragendapaciente();
        }         
     
    }else if(opc == 1 || opc == 3){
  
       if( (typeof obj === "object" || typeof obj === 'function') && (obj !== null) && (obj !== 0) )
     {     
        atencion = obj;  
        opcion1(opc);
     } else
         console.log("no es objeto");
         
     
   }       
    
    function opcion1(opc){
      limpiarReceta();    
           var  nombre= atencion.nombre_paciente;
           var  tipo_pago= atencion.nombre_pago;
           var edad =  atencion.edad;
           var fecha_atencion = atencion.fecha_atencion;
           var id_atencion = atencion.id_atencion;
           var id_agenda = atencion.id_agenda;
           if(opc == 1 ){
                 cargarparametro(id_atencion,'');
                 cargarparametro2(id_atencion,'');
                 cargarparametro3(id_atencion,'');
                 cargarparametro4(id_atencion,'');
                 cargarparametro5(id_atencion,'');
            }else{
                 cargarparametro(0,id_agenda);
                 cargarparametro2(0,id_agenda);
                 cargarparametro3(0,id_agenda);
                 cargarparametro4(0,id_agenda);
                 cargarparametro5(0,id_agenda);
            }      
                 
                        if(tipo_pago == 0){
            tipo_pago = "?";
        }else
            tipo_pago = tipo_pago;
    
     $('#titlemodal').html(" " + nombre+'&nbsp;&nbsp;&nbsp;'+tipo_pago.fontcolor("blue")+'&nbsp;&nbsp;&nbsp;'+edad+'&nbsp;&nbsp;&nbsp;'+fecha_atencion) ;
   //  $('#titlemodal').html("Parámetros "+'<i class="fas fa-file-medical-alt" title="paciente"></i> '+" " + "" + nombre+' <i class="far fa-calendar-check" title="Edad paciente"></i> '+edad+' <i class="fas fa-dollar-sign" title="Tipo de pago"></i> '+tipo_pago+' <i class="fas fa-calendar-alt" title="Fecha de Atención"></i> '+fecha_atencion) ;
    }               
       
      //$('#fichapaciente').html('<i class="fas fa-file-medical-alt" title="paciente"></i> '+" " + "" + nombre+' <i class="far fa-calendar-check" title="Edad paciente"></i> '+atencion.edad+' <i class="fas fa-dollar-sign" title="Tipo de pago"></i> '+tipo_pago+' <i class="fas fa-calendar-alt" title="Fecha de Atención"></i> '+obj.fecha_atencion) ;
    }
 
   function opcion3(valor,preficha){
      limpiarReceta();
            atencion = 0;   
          if(valor == 1){
           var nombre = preficha[0].nombre_paciente+" "+preficha[0].apellido_ppaciente;
           var tipo_pago = preficha[0].nombre_pago ;
           var edad = calculaedad2(preficha[0].fecha_nacimiento,3,'');  ;  
           var  id_agenda = preficha[0].id_agenda; 
           var  fecha_atencion =   fechalatin(preficha[0].fecha_atencion);
          
          
          }else{  
            var nombre = $("#" + filaParametros).children("td:nth-child(3)").text();
            var tipo_pago = $("#" + filaParametros).children("td:nth-child(5)").text();
            var edad =  $("#" + filaParametros).children("td:nth-child(12)").text();
            var id_agenda =  $("#" + filaParametros).children("td:nth-child(7)").text();
            var fecha_atencion = $("#alternate2").val();
          }
           if(tipo_pago == 0){
            tipo_pago = "?";
           }else
            tipo_pago = tipo_pago;
        
      
            cargarparametro(0,id_agenda);
            cargarparametro2(0,id_agenda);
            cargarparametro3(0,id_agenda);
            cargarparametro4(0,id_agenda);
            cargarparametro5(0,id_agenda);
              $('#titlemodal').html(" " + nombre+'&nbsp;&nbsp;&nbsp;'+tipo_pago.fontcolor("blue")+'&nbsp;&nbsp;&nbsp;'+edad+'&nbsp;&nbsp;&nbsp;'+fecha_atencion) ;
            //   $('#titlemodal').html("Parámetros "+'<i class="fas fa-file-medical-alt" title="paciente"></i> '+" " + "" + nombre+' <i class="far fa-calendar-check" title="Edad paciente"></i> '+edad+' <i class="fas fa-dollar-sign" title="Tipo de pago"></i> '+tipo_pago+' <i class="fas fa-calendar-alt" title="Fecha de Atención"></i> '+fecha_atencion) ;
             //$('#titlemodal').html("fadsfdsfdsfad") ;   
    } 
    function cargaragendapaciente(){ //parametros
     
       id_agenda = $("#txt_id_agenda").val().trim();
     
       datos='funcion=getpaciente_agenda' ;
       ruta= "../negocio/datos.php";
       marco= "";
       
       datos+= '&id_agenda='+id_agenda;
       var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
           var myObj = JSON.parse(this.responseText);
          
        
                if (myObj != null)  {
                   preficha= myObj;
                //   console.log(myObj);
                 opcion3(1,preficha);
         
                }
            }     
         }    ;   
         xhttp.open("POST",ruta , true);
         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         xhttp.send(datos);    
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
           sendajaxCargarTabla(fecha1); //acutaliza a la fecha actual la agenda
          pacientependiente();
         // alert("1");
        
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
   function cerrar(){
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