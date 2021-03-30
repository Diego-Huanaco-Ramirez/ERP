<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["rut"]);
unset($_SESSION["cart_item"]);
 
 $_SESSION["usuario"]="";
  session_unset();
session_destroy();
          	?>
<script>
    	  $("#lblusuario").text('');  
          $("#lbluserlogueado").text(''); 
 </script>
	<?      
                
?>
