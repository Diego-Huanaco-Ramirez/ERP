
function guardarid2(id) { //registrar pago
        idfila = id;
      id_agenda = parseInt($("#" + idfila).children("td:nth-child(7)").text());
       if($("#" + idfila).children("td:nth-child(9)").text() != '' && id_agenda > 0){
          $("#" + idfila).children("td:nth-child(5)").addClass('edit2') ;
          $("#" + idfila).children("td:nth-child(5)").addClass('edit2') ;
          createPopover2('.edit2', 'PAGO:');
       }
    }

    function createPopover2(item, title) {
                   
        var $pop = $(item);

        $pop.popover({
            placement: 'auto',
            title: (title || '&nbsp;') + ' <a class="close" href="#">&times;</a>',
            trigger: 'click',
            html: true,
            content: function () {
                if ($("#" + idfila).children("td:nth-child(4)").text() == "") {
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.options.positionClass = 'toast-top-left';
                    toastr.error("No ha inicado acción!");
                } else {
                    return $('#popup-content2').html();
                }
            }
        }).on('shown.bs.popover', function (e) {
            //console.log('shown triggered');
            // 'aria-describedby' is the id of the current popover
            var current_popover = '#' + $(e.target).attr('aria-describedby');
            var $cur_pop = $(current_popover);

            $cur_pop.find('.close').click(function () {
                //console.log('close triggered');
                $pop.popover('hide');
            });

            $cur_pop.find('.OK').click(function () {
              
                $pop.popover('hide');
            });
            $cur_pop.find('.LBL').click(function () {
              
              text = this.id;
               
                $("#" + idfila).children("td:nth-child(5)").text(this.innerHTML);
          
                $("#" + idfila).css("background-color", "#c6ffb3");
                   var id_agenda = $("#" + idfila).children("td:nth-child(7)").text().trim();
                $pop.popover('hide');
              
                regtipo_pago(id_agenda, text);
              
            });


        });

        //return $pop;
    }
    ;
  
    function regtipo_pago(id_agenda, tipo_pago){
         marco = "lbllast_id_agenda";
         ruta = "../negocio/datos.php";
         data = "funcion=upd_tipo_pago&id_agenda=" + id_agenda+'&tipo_pago='+tipo_pago;
     
               sendajaxpass(marco, ruta,data);
    }

    function guardarid(id) { //registrar prestacion
        idfila = id;
   
       id_agenda = parseInt($("#" + idfila).children("td:nth-child(7)").text());
       if($("#" + idfila).children("td:nth-child(9)").text() != '' && id_agenda > 0){
          $("#" + idfila).children("td:nth-child(4)").addClass('edit') ;
          $("#" + idfila).children("td:nth-child(4)").addClass('edit') ;
          createPopover('.edit', 'MOTIVO:');
       }
    }

//   registra prestacion
    function createPopover(item, title) {
             
        var $pop = $(item);

        $pop.popover({
            placement: 'auto',
            title: (title || '&nbsp;') + ' <a class="close" href="#">&times;</a>',
            trigger: 'click',
            html: true,
            content: function () {
                
                if ($("#" + idfila).children("td:nth-child(3)").text() == "") {
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.options.positionClass = 'toast-top-left';
                    toastr.error("No hay paciente");
                } else {
                    return $('#popup-content').html();
                }
            }
        }).on('shown.bs.popover', function (e) {
          //  console.log('shown triggered');
            // 'aria-describedby' is the id of the current popover
            var current_popover = '#' + $(e.target).attr('aria-describedby');
            var $cur_pop = $(current_popover);

            $cur_pop.find('.close').click(function () {
             
                $pop.popover('hide');
            });

            $cur_pop.find('.OK').click(function () {
            
                $pop.popover('hide');
            });
            $cur_pop.find('.LBL').click(function () {
         
                text = this.id;
            
               var id_agenda = $("#" + idfila).children("td:nth-child(7)").text().trim();
                $("#" + idfila).children("td:nth-child(4)").text(this.innerHTML);
                if (text == "3") {
                    $("#" + idfila).children("td:nth-child(5)").text("Sin costo");
                    $("#" + idfila).css("background-color", "#c6ffb3");
                        regtipo_pago(id_agenda, 8);
                   
                }
              
                  $pop.popover('hide');
        
                 marco = "lbllast_id_agenda";
               ruta = "../negocio/datos.php";
               data = "funcion=upd_prestacion&id_agenda=" + id_agenda+'&prestacion='+text;
     
               sendajaxpass(marco, ruta,data);

           
              
            });

        });

        //return $pop;
    }
    

function eliminarAgenda(elemento)
{
bandera = true;    
fila_id = elemento.parentNode.parentNode.id;
var id_agenda = $("#" + fila_id).children("td:nth-child(7)").text().trim();
var estado_agenda = parseInt($("#" + fila_id).children("td:nth-child(8)").text().trim());
if(estado_agenda > 1 ){
  bandera=  confirm("¿Confirrma eliminar registros?") ;
}
    if (bandera){ 
        
        $("#" + fila_id).children("td:nth-child(2)").text("");
        $("#" + fila_id).children("td:nth-child(3)").text("");
        $("#" + fila_id).children("td:nth-child(3)").html("<i class='fas fa-search'>") ;
        $("#" + fila_id).children("td:nth-child(4)").text("");
        $("#" + fila_id).children("td:nth-child(5)").text("");
        $("#" + fila_id).children("td:nth-child(7)").text("");
        $("#" + fila_id).children("td:nth-child(8)").text("");
        $("#" + fila_id).children("td:nth-child(9)").text("");
        $("#" + fila_id).children("td:nth-child(11)").text("");
        $("#" + fila_id).children("td:nth-child(12)").text(""); //edad
        $("#" + fila_id).css("background-color", "transparent");
        
        $("#" + fila_id).children("td:nth-child(3)").prop("onclick",null);
        $("#" + fila_id).children("td:nth-child(2)").prop("onclick",null);
      //  $("#" + fila_id).children("td:nth-child(1)").prop("onclick",null); 
        
      //  $("#" + fila_id).children("td:nth-child(1)").remove("onclick");
        $("#" + fila_id).children("td:nth-child(2)").remove("onclick");
        $("#" + fila_id).children("td:nth-child(3)").remove("onclick");
        $("#" + fila_id).children("td:nth-child(1)").prop('style','text-align: center;');
            $("#" + fila_id).children("td:nth-child(3)").click(function () {
                    idfilaagregar = this.parentNode.id;
                     $("#ModalBusqueda").modal('show');
             });
        var btnedit= "#btnedit"+fila_id;
         var btnhistorial= "#btnhistorial"+fila_id;
         var btnficha= "#btnficha"+fila_id;
         var btneliminar= "#btneliminar"+fila_id;
          $(btnedit).attr('disabled',true);
         $(btnhistorial).attr('disabled',true);
         $(btnficha).attr('disabled',true);
         $(btneliminar).attr('disabled',true);
      
          marco = "lbllast_id_agenda";
       ruta = "../negocio/datos.php";
       data = "funcion=eliminaragenda&id_agenda=" + id_agenda+'&estado_agenda='+estado_agenda;
    
            sendajaxpass(marco, ruta,data);
    }        
}
    function buscarpacientematriz(identificador){
        var fila = '';
        var i;
      
        var rut;
        $("#btabla tr").each(function () {

        rut = $(this).children("td:nth-child(11)").text().trim();
       
           if(rut == identificador){
           
           fila =$(this).children("td:nth-child(10)").text().trim();
 
          }
          
        i++;


        });
        return fila;
    }
function agregarpac(obj,prefid){
    var rut, id_paciente, nombre_completo, edad,accion, pago,accion_label, pago_label;
    accion = 0;
    pago = 0;
    accion_label = '';
    pago_label = '';
    var motivo_atencion;
    motivo_atencion        = '';
    //objeto = true;
    
    accion_label = $("#sel_accion"+prefid+ '  option:selected').text();
    pago_label  = $("#sel_pago"+prefid+ '  option:selected').text();
    motivo_atencion  = $("#txt_motivopaciente"+prefid).val();
      
    accion = $("#sel_accion"+prefid).val();
    pago  = $("#sel_pago"+prefid).val();
    objeto = false;
 
    bandera = true;
    if(obj == null || obj == '') {  
     
      if($("#lblid_paciente"+prefid).text() != ''){
        rut = $("#txt_rut"+prefid).val().trim();  
        id_paciente = $("#lblid_paciente"+prefid).text();  
        nombre_completo = $('#txt_nombres'+prefid).val().toUpperCase() + " " + $('#txt_apellidop'+prefid).val().toUpperCase() + " " + $('#txt_apellidom'+prefid).val().toUpperCase();
        edad = $("#txt_edad"+prefid).val();  
        
      }else
         bandera = false;
       
    }else{
          
        rut = obj.rut_paciente ;
        id_paciente= obj.id_paciente;
        nombre_completo = obj.nombre_paciente + " " + obj.apellido_ppaciente + " " + obj.apellido_mpaciente;
        edad = obj.edad;
        nombre_completo = nombre_completo.toUpperCase();
      
    }    
 
     if(bandera ) {
       cierremodal(1);
       
     //  var fecha_atencion = $("#fecha_actual").text();
        var fecha_atencion = $("#alternate2").val();
 
       var hora = new Date(); 
       var hora_llegada = hora.getHours() + ":" + hora.getMinutes();
       var hora_atencion = $("#" +idfilaagregar).children("td:nth-child(1)").text();
     
       marco = "lbllast_id_agenda";
       ruta = "../negocio/datos.php";
       data = "funcion=minInsertaagenda&id_paciente=" + id_paciente +  "&fecha_atencion=" +
       fecha_atencion + "&hora_llegada=" + hora_llegada + "&hora_atencion=" + hora_atencion +
       '&accion='+accion+'&pago='+pago+'&motivo_atencion='+motivo_atencion;
 
       sendajaxpass2(marco, ruta,data,idfilaagregar,prefid);
     
       if (idfilaagregar != null ) {
                       
          var btnedit= "#btnedit"+idfilaagregar;
          var btnhistorial= "#btnhistorial"+idfilaagregar;
          var btnficha= "#btnficha"+idfilaagregar;
          var btneliminar= "#btneliminar"+idfilaagregar;
          $(btnedit).attr('disabled',false);
          $(btnhistorial).attr('disabled',false);
          $(btnficha).attr('disabled',false);
          $(btneliminar).attr('disabled',false);
                        //    $("#" + idfilaagregar).children("td:nth-child(1)").prop('style','text-align: center;');       
                            $("#" + idfilaagregar).children("td:nth-child(2)").text(hora_llegada);
                            $("#" + idfilaagregar).children("td:nth-child(3)").text(nombre_completo);
                            
                            
                            $("#" + idfilaagregar).children("td:nth-child(4)").text(accion_label);
                            $("#" + idfilaagregar).children("td:nth-child(5)").text(pago_label);
                            
                            $("#" + idfilaagregar).children("td:nth-child(9)").text(rut);
                            $("#" + idfilaagregar).children("td:nth-child(11)").text(id_paciente);
                            $("#" + idfilaagregar).children("td:nth-child(12)").text(edad);
                            $("#" + idfilaagregar).children("td:nth-child(8)").text('1');
                            if(accion_label == '' || accion_label == 'ACCION' )
                               $("#" + idfilaagregar).children("td:nth-child(4)").text('?');
                           if(pago_label == '' || pago_label == 'PAGO')
                               $("#" + idfilaagregar).children("td:nth-child(5)").text('?');
                            $("#" + idfilaagregar).css("background-color", "#b3d9ff");
                             //     $("#ModalBusqueda").modal();
                        //     $("#" + idfilaagregar).children("td:nth-child(3)").remove("onclick");
                            $("#" + idfilaagregar).children("td:nth-child(3)").prop("onclick",null);
                            $("#" + idfilaagregar).children("td:nth-child(1)").attr('style','text-align: center;');
                            
                             $("#" + idfilaagregar).children("td:nth-child(1)").attr('style','font-weight:Bold;')
                              $("#" + idfilaagregar).children("td:nth-child(2)").attr('style','font-weight:Bold;')
                                $("#" + idfilaagregar).children("td:nth-child(3)").attr('style','font-weight:Bold;')
                                  $("#" + idfilaagregar).children("td:nth-child(4)").attr('style','font-weight:Bold;')
                                    $("#" + idfilaagregar).children("td:nth-child(5)").attr('style','font-weight:Bold;')
                             // $("#" + fila_id).children("td:nth-child(1)").prop('style','text-align: center;');
                                     //onclick = function () {}
        
                       
      }
     }else{
     //   advertencia("Ya registrado en bloque horario:"+ $("#" +bandera).children("td:nth-child(1)").text());
         advertencia("Paciente no registrado: Debe grabar los datos");
         $("#btnsavepaciente"+prefid).focus(); 
      }
        if(!objeto && prefid == 2){
              
              if(id_paciente > 0){  
                var fila = idfilaagregar;
              //alert(idfilaagregar)    ;
                   //alert(parseInt($("#" + idfilaagregar).parents("tr").children("td:nth-child(11)").text()));
                 
            //   pacienteficha(fila, '',1);
               }   
       }              
}
function generapago(fila){
       
        $("#" + fila).css("background-color", "#c6ffb3");
      
 }
function openregpaciente(fila){
       pacienteficha(fila, '',1);
    
      if($("#" + fila).children("td:nth-child(5)").text() != '?')
        $("#" + fila).css("background-color", "#c6ffb3");
       
}
 function asignarID(idfilaagregar1,lbllast_id_agenda){
  
                
     $("#" + idfilaagregar1).children("td:nth-child(7)").text(lbllast_id_agenda);
 
 }
 
function sendajaxCargarTabla(fecha) {
 
ruta = "../negocio/datos.php";
funcion = "cargaTabla";
data = "funcion=" + funcion + "&fecha=" + fecha;
       
var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var table = document.getElementById("Tmain");
        var myObj = JSON.parse(this.responseText);
      var i, j;
        limpiarTabla();
       if (myObj != null)
        {
       if (table != null) {
        for (i = 0; i < myObj.length; i++)
        { 
           
            
            for (j = 1; j < table.rows.length; j++) {
           var fila_id='';
            if (table.rows[j].cells[0].innerHTML == myObj[i]['hora'] && myObj[i]['nombre'] != null)
            {
            //   alert(table.rows[j].cells[9].innerHTML );
            table.rows[j].cells[1].innerHTML = '<b>' + myObj[i]['llegada']+'</b>';
            table.rows[j].cells[2].innerHTML = '<b>' + myObj[i]['paterno'].toUpperCase() + " " + myObj[i]['materno'].toUpperCase() + " " + myObj[i]['nombre'].toUpperCase()+'<b>';
            fila_id = table.rows[j].cells[9].innerHTML;
         //   $("#" + fila_id).children("td:nth-child(1)").prop("click",null);
          //  $("#" + fila_id).children("td:nth-child(1)").off('click');
            $("#" + fila_id).children("td:nth-child(2)").prop("click",null);
            $("#" + fila_id).children("td:nth-child(2)").off('click');
            $("#" + fila_id).children("td:nth-child(3)").prop("click",null);
            $("#" + fila_id).children("td:nth-child(3)").off('click');
            
            if(myObj[i]['nombre_prestacion'] != null)
                table.rows[j].cells[3].innerHTML = '<b>' + myObj[i]['nombre_prestacion'].toUpperCase()+'</b>';
            else{ 
                table.rows[j].cells[3].innerHTML = "?"; 
            }   
                         
            if(myObj[i]['nombre_pago'] != null)
                table.rows[j].cells[4].innerHTML = '<b>' +myObj[i]['nombre_pago']+'</b>';
            else
                table.rows[j].cells[4].innerHTML = "?";
                                    
            table.rows[j].cells[6].innerHTML = myObj[i]['id_agenda'];
            table.rows[j].cells[7].innerHTML = myObj[i]['estado'];
            table.rows[j].cells[8].innerHTML = myObj[i]['identificador'];
            table.rows[j].cells[10].innerHTML = myObj[i]['id_paciente'];
            var id_paciente = myObj[i]['id_paciente'];
            table.rows[j].cells[11].innerHTML =  calculaedad2(myObj[i]['fecha_nacimiento'], 3,'');
            $("#" + fila_id).children("td:nth-child(3)").click(function () {
           if(parseInt($(this).parents("tr").children("td:nth-child(11)").text()) > 0)
                  openpaciente(parseInt($(this).parents("tr").children("td:nth-child(11)").text()),3);
                         // obtpaciente($(this).parents("tr").children("td:nth-child(10)").text(), '', parseInt($(this).parents("tr").children("td:nth-child(11)").text()),1);
           //      $("#ModalBusqueda").modal('show');
            });
        $("#" + fila_id).children("td:nth-child(1)").click(function () {
            if(parseInt($(this).parents("tr").children("td:nth-child(11)").text()) > 0){    
             $("#collapseTwo").on('show.bs.collapse', function(){
                $(".collapseTwo").collapse('show'); 
             });    
          
            $("#collapseTwo").collapse('show');
                          obtpaciente($(this).parents("tr").children("td:nth-child(10)").text(), '', parseInt($(this).parents("tr").children("td:nth-child(11)").text()),1);
           //      $("#ModalBusqueda").modal('show');
           } 
        });
           // $("#" + fila_id).children("td:nth-child(1)").onmouseout(function () {
                  //alert('A');//  updateagenda(); 
            //}
        $("#" + fila_id).children("td:nth-child(2)").click(function () {
                 
               if(parseInt($(this).parents("tr").children("td:nth-child(11)").text()) > 0){      
                $("#collapseThree").on('show.bs.collapse', function(){
                $(".collapseThree").collapse('show'); 
                });     
               
                $("#collapseThree").collapse('show');     
                pacienteficha($(this).parents("tr").children("td:nth-child(10)").text(), '',1);
               }   
        });
             $("#" + fila_id).children("td:nth-child(1)").prop('style','text-align: center;');
          table.rows[j].style.backgroundColor = '';
            id= j-1;
            var btnedit= "#btneditfila"+id;  
            var btnhistorial= "#btnhistorialfila"+id;
            var btnficha= "#btnfichafila"+id;
            var btneliminar= "#btneliminarfila"+id;
            $(btnedit).attr('disabled',false);
            $(btnhistorial).attr('disabled',false);
            $(btnficha).attr('disabled',false);
            $(btneliminar).attr('disabled',false);
            if(myObj[i]['estado'] == 0)
                table.rows[j].style.backgroundColor = " transparent";
            if(myObj[i]['estado'] == 1)
                table.rows[j].style.backgroundColor = "#b3d9ff"; // 85%"#b3d9ff";//azul
            if(myObj[i]['estado'] == 2)
                table.rows[j].style.backgroundColor = "#c6ffb3"; //#c6ffb3";//verde
            if(myObj[i]['estado'] == 3)
                table.rows[j].style.backgroundColor = "#00cc00"; //#c6ffb3";//verde oscuro antes 79ff4d 
            if(myObj[i]['estado'] == 4)
                table.rows[j].style.backgroundColor = "#e67300";//cafe antes ffe6b3
            }

            }
        }
        }
     //  var fila = $('#txt_id_fila').val().trim();
       var  valor = "background-color:#737373 ;";
    //    $("#" + fila_id).children("td:nth-child(1)").attr("style", valor);
        } 
    }
};
        xhttp.open("POST", ruta, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(data);
    }
    function estadocolorIni2(estado){
       var color;
        if(estado == 1){
            color = '#b3d9ff'; //b3d9ff
        }else  if(estado == 2){
            color = '#c6ffb3'; //#c6ffb3
        }else if(estado == 2){
            color = '#e67300'; //#ffe6b3
        }  
        return color;
    }

function limpiarTabla()
{
    var table = document.getElementById("Tmain");

    if (table != null) {

    for (j = 1; j < table.rows.length; j++) {

        table.rows[j].style.backgroundColor = "transparent";
        table.rows[j].cells[0].style.backgroundColor = "transparent";
        table.rows[j].cells[1].innerHTML = "";
        table.rows[j].cells[1].onmouseover = innerHTML = "";
                //table.rows[j].cells[2].innerHTML = "<i class='fas fa-search'>";
        table.rows[j].cells[2].innerHTML = "<i class='fas fa-search'>";
        table.rows[j].cells[3].innerHTML = "";
        table.rows[j].cells[4].innerHTML = "";
        table.rows[j].cells[6].innerHTML = "";
        table.rows[j].cells[7].innerHTML = "";
        table.rows[j].cells[8].innerHTML = "";
        table.rows[j].cells[11].innerHTML = ""; 
        table.rows[j].cells[10].innerHTML = "";
  //console.log(table.rows[j].cells[9].innerHTML);
        fila_id = table.rows[j].cells[9].innerHTML;
      
        $("#" + fila_id).children("td:nth-child(3)").prop("onclick",null);
        $("#" + fila_id).children("td:nth-child(2)").prop("onclick",null);
   //    $("#" + fila_id).children("td:nth-child(1)").prop("onclick",null); 
     //   $("#" + idfilaagregar).children("td:nth-child(1)").remove("onclick");
        $("#" + idfilaagregar).children("td:nth-child(2)").remove("onclick");
        $("#" + idfilaagregar).children("td:nth-child(3)").remove("onclick");
                       
        $("#" + fila_id).children("td:nth-child(3)").click(function () {
             $("#checkhide1").prop('checked', false);
                    
             idfilaagregar = this.parentNode.id;
             $("#ModalBusqueda").modal('show');
                   
             $("#ModalBusqueda").on('shown.bs.modal', function () {
                limpiarbusqueda(1);
                nuevopaciente('',2);
            });
                    
        });
            
         //  $('#livesearch1').html('');
        var btnedit= "#btnedit"+fila_id;
        var btnhistorial= "#btnhistorial"+fila_id;
        var btnficha= "#btnficha"+fila_id;
        var btneliminar= "#btneliminar"+fila_id;
        $(btnedit).attr('disabled',true);
        $(btnhistorial).attr('disabled',true);
        $(btnficha).attr('disabled',true);
        $(btneliminar).attr('disabled',true);

            }

    }
}
    
function pacientependiente(){
 
    var pendiente=0;
    var i=0;
    var msg = 'Pendiente:';  
    var estado;
    $("#btabla tr").each(function () {

        estado = $(this).children("td:nth-child(8)").text().trim();
        console.log(estado);
        if(estado != ''){
           if(parseInt(estado) < 4 && parseInt(estado) > 0  ){
              pendiente++;
           }
          
          i++; 
        }
       
           


    });
         msg= 'PENDIENTE:'+pendiente+'/'+i;
         $("#lblpendiente").text('');
         $("#lblpendiente").text(msg);
 }
