<?php


include 'conexion.php';

$registro = $_REQUEST['id'];

$id = $con -> query("SELECT * FROM empleados WHERE id='$registro'");

if ($fila = $id -> fetch_assoc()){

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENACYT</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<br>
<h1 style="margin-left: 10px">ACTUALIZACION DE DATOS PERSONALES, ACADEMICOS, DESEMPEÑO</h1>



<div class="col-md-3" style="padding: 25px">
<form action= "update.php" method = "POST">


<div class="mb-3">
  <input value="<?php echo $fila['id'] ?>" name="id" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombres</label>
  <input value="<?php echo $fila['Nombres'] ?>" name="nombres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Nombre">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
  <input value="<?php echo $fila['Apellidos'] ?>" name="apellidos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Apellido">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefono</label>
  <input value="<?php echo $fila['telefono'] ?>" name="telefono"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Telefono">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">direccion</label>
  <input value="<?php echo $fila['direccion'] ?>" name="direccion" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Direccion">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Fecha de Nacimiento</label>
  <input value="<?php echo $fila['fecha_nac'] ?>" name="fecha" type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Logros Academico Alcanzado</label>
  <input value="<?php echo $fila['Logros'] ?>" name="logros" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir tu Logro Academico">
</div>



<select name="area" class="form-select" aria-label="Default select example">
  <option selected>Area de Desempeño</option>

   

  <option <?php if ('CC-Computacion' == $fila['Area_Desemp']) {echo 'selected';}{}
  ?>value="CC-Computacion">Ciencias de la computacion</option>
  <option <?php if ('Psicologia' == $fila['Area_Desemp']) {echo 'selected';}{}
  ?>value="Psicologia">Psicologia</option>
  <option <?php if ('CC-Economicas' == $fila['Area_Desemp']) {echo 'selected';}{}
  ?>value="CC-Economicas">Ciencias Economicas</option>
  <option <?php if ('Ingenieria' == $fila['Area_Desemp']) {echo 'selected';}{}
  ?>value="Ingenieria">Ingenieria</option>
  <option <?php if ('Telecomunicaciones' == $fila['Area_Desemp']) {echo 'selected';}{}
  ?>value="Telecomunicaciones">Telecomunicaciones</option>
  <option <?php if ('Arquitecturas' == $fila['Area_Desemp']) {echo 'selected';}{}
  ?>value="Arquitecturas">Arquitectura</option>
  <option <?php if ('CC-Juridicas' == $fila['Area_Desemp']) {echo 'selected';}{}
  ?>value="CC-Juridicas">Ciencias Juridicas</option>
  
</select><br>

<button type="submit" class="btn btn-success">Actualizar Informacion</button>

</div>
<script src="js/bootstrap.min.js"></script>
</form>
    
</body>
</html>