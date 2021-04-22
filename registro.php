<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellido'];
$usuario=$_POST['txtUsuario'];
$contraseña=$_POST['txtContraseña'];
$edad=$_POST['txtEdad'];
$ciudad=$_POST['txtCiudad'];

$consulta="INSERT INTO `usuarios` (`nombre`, `apellido`, `usuario`, `contraseña`, `edad`, `ciudad`)
VALUES ('$nombre', '$apellido','$usuario', '$contraseña','$edad','$ciudad')";

//verificar correo
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
if (mysqli_num_rows($verificar_correo)>0) {
	
		?>
		<?php
   
 include("registro.html");

  ?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="js/registro1.js"></script>

  <?php
		exit();
}

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");
if ($resultado) {
	?>
		<?php
			   
		 	include("index.html");

	 	?>
			<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
			<script src="js/registro2.js"></script>
			<link rel="stylesheet" href="sweetalert2.min.css">
			

			  <?php
	}else{
				?>
				<?php
		   
		 include("registro.html");

		  ?>

		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="js/registro3.js"></script>
		<link rel="stylesheet" href="sweetalert2.min.css">
	

		  <?php
	}
	mysqli_close($conexion);

?>