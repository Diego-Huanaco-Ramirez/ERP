<?
//include_once('php_head.php');
$modal = "Modalproducto";
 require_once('formproducto.php');
?>

<?
//include_once('../funcion/dataweb.php');


//include_once(' sesion_php.php');

    if (1) {
?> 

<!DOCTYPE html>

<html lang="es">

       <title></title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
  
      
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <link href="owlcarousel/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="owlcarousel/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        
       
        
         <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
     
         <link href="css/carrusel.css" rel="stylesheet" type="text/css"/>
         <script src="js/carrusel.js" type="text/javascript"></script>
    
   </head>
    <body onload="">
 <? // include_once('menu.php'); ?> 
 <div   class="container" style="width: 100%">
     <div class="row">
                <div id="dvcarrusel" class="col-12 col-md-6 col-lg-6 "  >   
                <?
                formcarrusel('1');
                ;
                ?> 
                </div>
            </div>
   </div> 
 
           
        
      
       </div>
   </div>           
   
              
  
    




      






    </body>
    </html>
    <?
}
?>
