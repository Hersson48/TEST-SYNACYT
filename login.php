<?php
include 'conexion.php';


$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];



$query = $con -> query("SELECT * FROM empleados WHERE Nombres = '".$nombre."' and telefono = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	//header("Location: pagina.html")
	echo "<script>
    location.href = 'index.php';
    </script>";
}
else if ($nr == 0) 
{
	echo "<script>
    location.href = 'index.php';
    </script>";
}



?>