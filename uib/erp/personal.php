<?php
session_start();
require_once('../servicio/funciones_adicionales.php');
// Start the session

date_default_timezone_set('America/Santiago');
$fecha = date('d/m/Y');
if (!isset($_SESSION["usuario"])) {
    $_SESSION["usuario"] = $_GET['nombre'];
    $_SESSION["rut"] = $_GET['rut'];
    $_SESSION["tipo_personal"] = $_GET['tipo_personal'];
    $_SESSION["cod_tipo_especialista"] = $_GET['cod_tipo_especialista'];
} else {
    $_SESSION["usuario"] = $_SESSION["usuario"];
    $_SESSION["rut"] = $_SESSION["rut"];
    $_SESSION["tipo_personal"] = $_SESSION["tipo_personal"];
    $_SESSION["cod_tipo_especialista"] = $_SESSION["cod_tipo_especialista"];
}

//seguridad();
?>
<!DOCTYPE html>
<html 
    <?  include_once('head.php');; ?> 
  
<style>
    

/* Variables
================================== */
/* Tables
================================== */
.Rtable {
  display: -webkit-box;
  display: flex;
  flex-wrap: wrap;
  margin: 0 0 3em 0;
  padding: 0;
}
.Rtable-cell {
  box-sizing: border-box;
  -webkit-box-flex: 1;
          flex-grow: 1;
  width: 100%;
  padding: 0.8em 1.2em;
  overflow: hidden;
  list-style: none;
  border: solid 3px white;
  background: rgba(112, 128, 144, 0.2);
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
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/josefinsans/v15/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_DjQbMZhKg.ttf) format('truetype');
}
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/josefinsans/v15/Qw3PZQNVED7rKGKxtqIqX5E-AVSJrOCfjY46_N_XbMZhKg.ttf) format('truetype');
}
html {
  height: 100%;
  background-color: #EEE;
}
body {
  box-sizing: border-box;
  min-height: 100%;
  margin: 0 auto;
  padding: 2em;
  max-width: 800px;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 1.2em;
  background-color: white;
  border: double 3px #DDD;
  border-top: none;
  border-bottom: none;
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
 


    </style>
    </head>
        <body>
            <div class="container">
               



<h2>Cell styling</h2>

<div class="Rtable">
  <div class="Rtable-cell Rtable-cell--dark">Dark cell</div>
  <div class="Rtable-cell Rtable-cell--medium">Medium cell</div>
  <div class="Rtable-cell Rtable-cell--light">Light cell</div>
  <div class="Rtable-cell Rtable-cell--highlight">Highlight cell</div>
  <div class="Rtable-cell Rtable-cell--alert">Alert cell</div>
</div>

<h3>Example table</h3>
<div class="Rtable Rtable--3cols">

  <div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Eddard Stark</h3></div>
  <div style="order:1;" class="Rtable-cell">Has a sword named Ice</div>
  <div style="order:2;" class="Rtable-cell">No direwolf</div>
  <div style="order:3;" class="Rtable-cell Rtable-cell--foot"><strong>Lord of Winterfell</strong></div>

  <div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Jon Snow</h3></div>
  <div style="order:1;" class="Rtable-cell">Has a sword named Longclaw</div>
  <div style="order:2;" class="Rtable-cell">Direwolf: Ghost</div>
  <div style="order:3;" class="Rtable-cell Rtable-cell--foot"><strong>Knows nothing</strong></div>

  <div style="order:0;" class="Rtable-cell Rtable-cell--head"><h3>Arya Stark</h3></div>
  <div style="order:1;" class="Rtable-cell">Has a sword named Needle</div>
  <div style="order:2;" class="Rtable-cell">Direwolf: Nymeria</div>
  <div style="order:3;" class="Rtable-cell Rtable-cell--foot"><strong>No one</strong></div>

</div>


</div>


       </div>     <!-- fin container -->   
             <!-- modal comienza aca -->
             
       
        </body>
    <script>
    </script>
</html>    

 