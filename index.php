<?php
include 'conexion.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script> 
    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>

    <title>Hello, world!</title>
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
   
  <div class="container">
      <div><a class="btn btn-primary" href="nuevo.php" role="button"> Nuevo Registro </a></div>
      <br>
      <div><a class="btn btn-info" href="login.html" role="button"> Iniciar - Sesion. </a></div>
      <BR>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Logros Academicos</th>
      <th scope="col">Area Ocupacional</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <?php
        $mostrar = $con ->query("SELECT * FROM empleados");
        while($fila = $mostrar -> fetch_assoc()){

    ?>
    <tr>
      <th scope="row"><?php echo $fila['id']; ?></th>
      <td><?php echo $fila['Nombres']; ?></td>
      <td><?php echo $fila['Apellidos']; ?></td>
      <td><?php echo $fila['telefono']; ?></td>
      <td><?php echo $fila['direccion']; ?></td>
      <td><?php echo $fila['fecha_nac']; ?></td>
      <td><?php echo $fila['Logros']; ?></td>
      <td><?php echo $fila['Area_Desemp']; ?></td>
      <td><a class="btn btn-warning" href="actualizar.php?id=<?php echo $fila['id'] ?>">Actualizar</a></td>
      <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $fila['id'] ?>">Eliminar</a></td>
    </tr>

    <?php } ?>
        

      
    
  </tbody>
</table>
</div>

    



  </body>
</html>