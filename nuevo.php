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

<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">TEST Synacyt BD-MYSQL MAS FRONTEND PHP Y LIBRERIAS JQUERY</h5>
    <span class="text-muted">Hersson Arturo Godoy Alay</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<br>

<br>
<h1 style="margin-left: 10px">INGRESAR TUS DATOS</h1>

<div class="col-md-3" style="padding: 25px">
<form action= "insertar.php" method = "POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombres</label>
  <input name="nombres" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Nombre">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
  <input name="apellidos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Apellido">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Telefono</label>
  <input name="telefono"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Telefono">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">direccion</label>
  <input name="direccion" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir Tu Direccion">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Fecha de Nacimiento</label>
  <input name="fecha" type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Logros Academico Alcanzado</label>
  <input name="logros" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribir tu Logro Academico">
</div>


<select name="area" class="form-select" aria-label="Default select example">
  <option selected>Area de Desempeño</option>
  <option value="CC-Computacion">Ciencias de la computacion</option>
  <option value="Psicologia">Psicologia</option>
  <option value="CC-Economicas">Ciencias Economicas</option>
  <option value="Ingenieria">Ingenieria</option>
  <option value="Telecomunicaciones">Telecomunicaciones</option>
  <option value="Arquitecturas">Arquitectura</option>
  <option value="CC-Juridicas">Ciencias Juridicas</option>
  
</select><br>

<button type="submit" class="btn btn-success">Guardar Informacion</button>

</div>
<script src="js/bootstrap.min.js"></script>
</form>
    
</body>
</html>