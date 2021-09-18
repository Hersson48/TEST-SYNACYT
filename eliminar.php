<?php
include 'conexion.php';

$id = $_REQUEST['id'];
$delete = $con -> query("DELETE FROM empleados WHERE id ='$id'");

if($delete){

    echo "<script>
    location.href = 'index.php';
    </script>";

}else{

    echo "DATOS NO SE ELIMINARON";
}