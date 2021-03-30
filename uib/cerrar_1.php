<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["rut"]);
unset($_SESSION["tipo_personal"]);
unset($_SESSION["cod_tipo_especialista"]);
 $_SESSION["usuario"]="";
  session_unset();
		session_destroy();
          	?>
	<script>
    	window.location = "inicio.php";
    </script>
	<?      
                
?>
