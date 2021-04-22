 <?php 

session_start();
include('db.php');

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];





	$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'");
	
	if (mysqli_num_rows($validar_login) > 0) {

			$_SESSION['usuario']=$usuario;
		header("Location:../web-Ragnarok-main/principal.php");
	
	


	}else{

		
		?>
		<?php
   
 include("index.html");

  ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/sweetalert2.js"></script>



  <?php

	}

	exit;

?>

	
