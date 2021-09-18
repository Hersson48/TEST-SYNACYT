<?php

include 'conexion.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$logros = $_POST['logros'];
$area = $_POST['area'];

$insertar = $con -> query("INSERT INTO empleados (id,Nombres,Apellidos,
telefono,direccion,fecha_nac,Logros,Area_Desemp) VALUES ('','$nombres','$apellidos',
'$telefono','$direccion','$fecha','$logros','$area')");

if($insertar){

    echo "<script>
    location.href = 'index.php';
    </script>";

}else{

    echo "Datos no ingresados";
}

?>