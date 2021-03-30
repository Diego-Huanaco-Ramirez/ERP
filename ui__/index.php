<?     include_once('php_head.php');$modal = "Modalproducto";; ?>

<?


 include_once('../funcion/dataweb.php');



//session_unset(); session_destroy(); 

//echo session_id();
$bandera = true;
if($_POST['funcion'] == 'seleccionar'){
    seleccionar($_SESSION["cart_item"]);$bandera = false;
}
   
if($_POST['funcion'] == 'consultar'){
   consultar(); $bandera = false;
}
if($_POST['funcion'] == 'pedido'){
   pedido();$bandera = false;
}

if($_POST['funcion'] == 'puentes'){
   puentes($_SESSION["cart_item"]);$bandera = false;
}
if($_POST['funcion'] == 'login'){
   login();$bandera = false;
}
if($_POST['funcion'] == 'cerrar'){
   cerrar();$bandera = false;
}
if($_POST['funcion'] == 'cargarcanasta'){
   cargarcanasta();$bandera = false;
}
function cargarcanasta(){
   if(!($_POST['confirma']))
        unset($_SESSION["cart_item"]);
   
   
   $arrayproductos = json_decode($_POST['myJSON'], false); 
        if(count($arrayproductos ) > 0){
          
             for($i=0; $i < count($arrayproductos);$i++){
                 if(intval($arrayproductos[$i][3] )> 0 ){
                     $itemArray = array($arrayproductos[$i][2] ,$arrayproductos[$i][0] , $arrayproductos[$i][3] , 
                     $arrayproductos[$i][8] ,$arrayproductos[$i][4] ,$arrayproductos[$i][4] );
                    //$_SESSION["cart_item"]= $itemArray;
                    //  array_push($_SESSION["cart_item"][$n],$itemArray);
                         if(empty($_SESSION["cart_item"] )){
                             $n =0;
                         }else{
                            $n = count($_SESSION["cart_item"] );
                         }
                     $_SESSION["cart_item"][$n]=$itemArray;
                 }
             }
        }  
}
function cargarcanasta2(){
   $arrayproductos = json_decode($_POST['myJSON1'], false); 
        if(count($arrayproductos ) > 0){
          
             for($i=0; $i < count($arrayproductos);$i++){
                 if(intval($arrayproductos[$i]['canasta_cantidad_prod'] )> 0 ){
                     $itemArray = array($arrayproductos[$i]['canasta_codigo_prod'],$arrayproductos[$i]['prod_nombre'], $arrayproductos[$i]['canasta_cantidad_prod'], 
                     $arrayproductos[$i]['canasta_precio'],$arrayproductos[$i]['canasta_fecha'],$arrayproductos[$i]['canasta_hora']);
                    //$_SESSION["cart_item"]= $itemArray;
                    //  array_push($_SESSION["cart_item"][$n],$itemArray);
                         if(empty($_SESSION["cart_item"] )){
                             $n =0;
                         }else{
                            $n = count($_SESSION["cart_item"] );
                         }
                     $_SESSION["cart_item"][$n]=$itemArray;
                 }
             }
        }  
}
function seleccionar(){
  
if(intval($_POST['cantidad_producto'] )> 0 ){
     
    $itemArray = array($_POST['codigo_producto'],$_POST['nombre_producto'], $_POST['cantidad_producto'],$_POST['precio_producto'],date('Y-m-d'),date('h:m:s'));
   //$_SESSION["cart_item"]= $itemArray;
   //  array_push($_SESSION["cart_item"][$n],$itemArray);
        if(empty($_SESSION["cart_item"] )){
            $n =0;
        }else{
           $n = count($_SESSION["cart_item"] );
        }
    $_SESSION["cart_item"][$n]=$itemArray;
  }  
  
  $_POST['codigo_producto'] = "";
  $_POST['cantidad'] = "";
  
}

function cerrar(){
    unset($_SESSION["usuario"]);
    unset($_SESSION["rut"]);
    unset($_SESSION["cart_item"]);
 
    $_SESSION["usuario"]="";
    session_unset();
    session_destroy();
}
function login(){
    if(!isset($_SESSION["usuario"])){
    
        $_SESSION["usuario"] = $_POST['nombre'];
        $_SESSION["rut"] = $_POST['rut'];

        $_GET['nombre'] = "";
        $_GET['rut'] = "";

        }else{
        $_SESSION["usuario"] = $_SESSION["usuario"];
        $_SESSION["rut"] = $_SESSION["rut"];

    }
}





?> 

<!DOCTYPE html>

<html lang="es">
    <?  include_once('head.php');; ?> 
    <? bproductos();bcliente('2');
    
             
   if($bandera){ 
    

?>
 <!--    
<head>
  <title>HOYSALUD</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="+psiquiatra,+psicologo,+neurologo,+nutricionista,+psiquiatra+iquique,+psicologo+iquique,+neurologo+iquique,nutricionista+iquique">
<meta name="keywords" content="+hoy+salud,+hoysalud,+salud,+hoysalud,+hoysalud.cl, +hoysalud.com, +hoysalud.net, +salud+iquique,+software+salud, +software+en+salud, +software+para+la+salud">
<meta name="keywords" content="+software+en+iquique, +procesos+digitales,+bpm, +erp">
<meta name="keywords" content="+teletrabajo,+procesos+digitales">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
  <style>
     
  .fakeimg1 {
    height: 159px;
    width:  100%;
    background: #aaa;
  }
   .fakeimg2 {
    height: 580px;
  width:  100%;
    background: #aaa;
  }
   .head {
    height: 150px;
    
    
  }
   .color_t1 {
    color: #ffffff;
    
    
  }
  </style>
  <style>
    

/* Variables
================================== */
/* Tables
================================== */
.Rtable {
  display: -webkit-box;
  display: flex;
  flex-wrap: wrap;
  margin: 0 0 2em 0;
  padding: 0;
}
.Rtable-cell {
  box-sizing: border-box;
  -webkit-box-flex: 1;
          flex-grow: 1;
  width: 100%;
  padding: 0.2em 1em;
  overflow: hidden;
  list-style: none;
  border: solid 2px white;
  background: rgba(56, 64, 72, 0.1);
}
.Rtable-cell > h1,
.Rtable-cell > h2,
.Rtable-cell > h3,
.Rtable-cell > h4,
.Rtable-cell > h5,
.Rtable-cell > h6 {
  margin: 0;
}
/* Table column sizing
================================== */
.Rtable--2cols > .Rtable-cell {
  width: 50%;
}
.Rtable--3cols > .Rtable-cell {
  width: 33.33%;
}
.Rtable--4cols > .Rtable-cell {
  width: 25%;
}
.Rtable--5cols > .Rtable-cell {
  width: 20%;
}
.Rtable--6cols > .Rtable-cell {
  width: 16.6%;
}
/* Page styling
================================== */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 200;
  src: url(https://fonts.gstatic.com/s/josefinsans/v15/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_DjQbMZhKg.ttf) format('truetype');
}
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 350;
  src: url(https://fonts.gstatic.com/s/josefinsans/v15/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_N_XbMZhKg.ttf) format('truetype');
}
 
h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
}
h3 {
  font-size: 1.2em;
}
h4 {
  font-size: 1em;
}
strong {
  color: #434d57;
}
/* Apply styles
================================== */
.Rtable {
  position: relative;
  top: 3px;
  left: 3px;
}
.Rtable-cell {
  margin: -3px 0 0 -3px;
  background-color: white;
  border-color: #e2e6e9;
}
/* Cell styles
================================== */
.Rtable-cell--dark {
  background-color: slategrey;
  border-color: #5a6673;
  color: white;
}
.Rtable-cell--dark > h1,
.Rtable-cell--dark > h2,
.Rtable-cell--dark > h3,
.Rtable-cell--dark > h4,
.Rtable-cell--dark > h5,
.Rtable-cell--dark > h6 {
  color: white;
}
.Rtable-cell--medium {
  background-color: #b8c0c8;
  border-color: #a9b3bc;
}
.Rtable-cell--light {
  background-color: white;
  border-color: #e2e6e9;
}
.Rtable-cell--highlight {
  background-color: lightgreen;
  border-color: #64e764;
}
.Rtable-cell--alert {
  background-color: darkorange;
  border-color: #cc7000;
  color: white;
}
.Rtable-cell--alert > h1,
.Rtable-cell--alert > h2,
.Rtable-cell--alert > h3,
.Rtable-cell--alert > h4,
.Rtable-cell--alert > h5,
.Rtable-cell--alert > h6 {
  color: white;
}
.Rtable-cell--head {
  background-color: slategrey;
  border-color: #5a6673;
  color: white;
}
.Rtable-cell--head > h1,
.Rtable-cell--head > h2,
.Rtable-cell--head > h3,
.Rtable-cell--head > h4,
.Rtable-cell--head > h5,
.Rtable-cell--head > h6 {
  color: white;
}
.Rtable-cell--foot {
  background-color: #b8c0c8;
  border-color: #a9b3bc;
}

 


 


    </style>
</head>
<body onload=" limpiaSprod('B553', 'livesearch9','B553');">

 
<div class=" " style="margin-bottom:0;height: 20%;background:#ffffff ;  ">
 
    <div class="col-12 col-md-4 col-lg-6">
        
       <h1>TELAS TELATON</h1>
       <label id="" hidden><?  echo $_SESSION["usuario"];?> </label>
    </div>
    <div class="col-12 col-md-8 col-lg-12">
      
        <p>Telas y productos para el hogar presentes en Arica e Iquique! </p> 
        <label id="lbl_comprado"><? echo $cantidad;?></label>
     <button id="btn_comprar_tmp"  
        onclick="abrirmodal('#modalsession');consultar(); openmodal('modalsession')"     
             class="btn btn-info " title="Agregar al carro"    ><i class="fas fa-cart-arrow-down"></i></button>
             
     <button id="btn_loqueo"  
         onclick="abrirmodal('#myModallogin');openmodal('myModallogin')"     
             class="btn btn-info " title="Agregar al carro"    ><i class="far fa-user"></i></button>
             
     <button type="button" data-toggle="modal" data-target="#Modalcliente" onclick="nuevopaciente('','');  // openmodal('Modalcliente')"  class="btn btn-info" >Registrar</button><!-- fin contenido tabla modal-->
     <label id="lblusuario"> <h4 class="modal-title"><i class="fas fa-user-circle"></i><?  echo $_SESSION["usuario"].$_SESSION["cart_item"][0]['prod_nombre'];?> </h4>  </label>
     <?  if(isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== ''){  
                $hidden = '';
         }else 
                $hidden = 'hidden'; 
   
    

?> 
         <button id="btn_cerrar_sesion"  
        onclick="cerrar()"     
             class="btn btn-default " title="Cerrar sesión"  <?  echo $hidden;?>  ><i class="fas fa-user-times"></i></button>
    
         
     
     
     
    </div>
    </div>
   
    
        
 
 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">SELECCIONA>></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">INICIO</a>
      </li>
        
    </ul>
  </div>  
</nav>

<div class="container" style="width: 100%">
  <div class="row">  
    <div class="col-12 col-md-6 col-lg-8 " >
  
    <label id="lblcodigo_producto" hidden>0</label>
   <div class="row">
        <?   formprodclasifica('B553', 'B553',0,1,2);?>  
   </div> 
    
  <div class="col-sm-4 col-lg-12"  >   
      
   <div class="row">
    <div class="col-sm-4 col-lg-6">
      
      <div class="fakeimg1"> <img id="imgcategoria" src="cat1.jpg" style="width:100%;height:190px;" alt=""/></div>
    
    </div>
     
    <div class="col-sm-4 col-lg-6">
     <div class="row">  
        <input type="text" id="inputnombreproducto"   onkeyup="showResult(this.value, 3,6)" class="form-control"  placeholder="Buscar productos.." title="Digite un productos">
  
       
      </div>
     <div class="row">  
       <label id="lblnombre_producto" style="font-weight: bold;">nombre productos:</label>
       
      </div>
      <div class="row">
            <div class="col-5 col-sm-4 col-md-4  col-lg-5" >$<label id="lblprecio_producto" style="font-weight: bold;"></label></div> 
            <div class="col-4 col-sm-4 col-md-4  col-lg-4" ><input type="number" id="txtcant_productos" title="cantidad" value="1" min="1" placeholder="" class="form-control"  ></div>
            <button id="btn_comprar" onclick="adicionar()" class="btn btn-success btn-sm" title="Agregar al carro"    ><i class="fas fa-cart-plus"></i></button>
      </div>
       
    </div> 
  </div> 
 </div> 
    
    
     
    
 
    
    
    </div>
    <div class="col-12 col-md-6 col-lg-4 " >
  
       <div id="livesearch9" style="height: 300px;width:100%;overflow-y: auto;overflow-x: hidden;"></div>
    </div>
 </div>
 
 
 </div>   
    
    

    
    
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>@2020 copyright - telaton.cl    <a href="tel:+56998800961"><img src="favicon.jpg"   alt=""/>LLAMANOS !</a>  </p>
  <a href="mailto:info@telaton.cl">info@telaton.cl</a>
  
</div>
 
</body>
</html>
<?
}
?>