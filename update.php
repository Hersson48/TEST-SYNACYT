<?php
include 'conexion.php';


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$logros = $_POST['logros'];
$area = $_POST['area'];
$id = $_POST['id'];


$update = $con -> query("UPDATE empleados 
SET Nombres ='$nombres',
Apellidos = '$apellidos',
telefono = '$telefono'.
direccion = '$direccion',
fecha_nac = '$fecha',
Logros = '$logros',
Area_Desemp = '$area' WHERE id = '$id'");

if ($update){

    echo "<script>
    location.href = 'index.php';
    </script>";
}else{

    echo "No se pudieron actualizar los Datos";
}



?>