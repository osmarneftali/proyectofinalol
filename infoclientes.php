<?php
include ("basepyfinal.php"); 
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Contactanos</title>
    <link rel="shortcut icon" href="imag/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="stylesheet" href="style.css">
  </head>
  <br>
  <div class="container">
  <h2>Datos sobre información enviada por los Clientes</h2>
  </div>
  <hr>
  <div class="container"> 
    <a class="btn btn-outline-warning" href="vermensajes.php" role="button">Regresar a Mensajes</a>
    </div>
    <br>
  <div class="container"> 
  <h5>Esta es la informacion de los clientes, porfavor enviales la información conforme a su correo electronico</h5>
  <h5>y mediante el Servicio que desea</h5>
  </div>
  <br>
  <div class="container">
    <h4>Responder información</h4>
  <a href="enviarinfo.php" class="btn btn-info"> <img src="imag/icon.png" width="30"></a>
  </div>
  <br>
  <center>
    <div class="col-8">
    <table class="table table-dark table-hover">
    <thead>
    <tr>
    <th scope="col">Nit</th>
    <th scope="col">Nombres</th>
    <th scope="col">Corero</th>
    <th scope="col">Ciudad</th>
    <th scope="col">Sexo</th>
    <th scope="col">Edad</th>
    <th scope="col">Precio</th>
    <th scope="col">Servicio</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM informacion";
    $resultat=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_array($resultat)){ ?>
    <tr>
    <td><?php echo $row ['nit'] ?> </td>  
    <td><?php echo $row ['nombres'] ?> </td>
    <td><?php echo $row ['correo'] ?> </td>
    <td><?php echo $row ['ciudad'] ?> </td>
    <td><?php echo $row ['sexo'] ?> </td>
    <td><?php echo $row ['edad'] ?> </td>
    <td><?php echo $row ['precio'] ?> </td>
    <td><?php echo $row ['tiposervicio'] ?> </td>
    <td>
    </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    </center>
  <br>
  <hr>
<p style="text-align: center;"><font face="arial" size="3"> PBX: 4660-0602 - Dirección: Loma Blanca Nimajuyu, Zona 21 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀<b> Carnet: 2020-40186 - Nombre: Osmar Neftali Lopez López</b></font></p>       
