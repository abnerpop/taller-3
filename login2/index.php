<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/menu.min.css">
	<link rel="stylesheet" type="text/css" href="css/universal.min.css">
	</head>
	<body>

<form class="formulario" action="index.php" method="post">

	
<div class="form-wrap">
	<h3>Login</h3><br><br>
<label for="">Usuario</label><br>
<input type="text" name="usuario" id="usuario"value=""><br><br>
<label for="">Contrseña</label><br>
<input type="text" name="password" id="password" value=""><br><br><br>

<input type="submit" name="" id="button" value="Iniciar Session">
</div>

</form>


	</body>
</html>



<?php
 require('conexion.php');

if (isset($_POST['usuario']) and isset($_POST['password'])){
	
$username = $_POST['usuario'];
$password = $_POST['password'];

$query = "SELECT * FROM login WHERE usuario='$username' and pass='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "<script type='text/javascript'>alert('inicio de sesión exitoso')</script>";

}else{
echo "<script type='text/javascript'>alert('inserte la datos correctos')</script>";
}
}



?>