<?php include("basepyfinal.php"); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Capacitacion 2021</title>
    <link rel="shortcut icon" href="imag/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <br><br>
  <div class="btn-group w-100" role="group" aria-label="Basic exaple">
    <a class="btn btn-success" href="index.html" role="button">Pagina Inicial</a>
    <a class="btn btn-danger" href="tiendas.php" role="button">Tiendas</a>
    <a class="btn btn-light" href="contactenos.php" role="button">Contactenos</a>
    </div>
    <br>
    <div class="container">
    <br>
    <div class="row">
    <div class="col-4" style="color: #000000;"><h2>Mensajes Recibidos</h2>
    </div>
    </div>
    </div>
    </div>
    <br><br>
    <center>
    <div class="col-8">
    <table class="table table-hover">
    <thead>
    <tr>
    <th scope="col">Numero de Mensaje</th>
    <th scope="col">Nombre</th>
    <th scope="col">Telefono/Celular</th>
    <th scope="col">Correo Electronico</th>
    <th scope="col">Mensaje</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query="SELECT * FROM mensajes";
    $resultat=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_array($resultat)){ ?>
    <tr>
    <td><?php echo $row ['nomensaje'] ?> </td>  
    <td><?php echo $row ['nombre'] ?> </td>
    <td><?php echo $row ['telefono'] ?> </td>
    <td><?php echo $row ['correo'] ?> </td>
    <td><?php echo $row ['mensaje'] ?> </td>
    <td>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    </center>
  </form>
  <br>
  <hr>
<p style="text-align: center;"><font face="arial" size="3"> PBX: 4660-0602 - Dirección: Loma Blanca Nimajuyu, Zona 21 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀<b> Carnet: 2020-40186 - Nombre: Osmar Neftali Lopez López</b></font></p>       
