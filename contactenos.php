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
  <body>
    <br><br>
  <div class="btn-group w-100" role="group" aria-label="Basic exaple">
    <a class="btn btn-success" href="index.html" role="button">Pagina de Inicio</a>
    <a class="btn btn-danger" href="tiendas.php" role="button">Tiendas</a>
    <a class="btn btn-light" href="contactenos.php" role="button">Contactenos</a>
    <a class="btn btn-dark" href="vermensajes.php" role="button">Ver Mensajes</a>
    </div>
    <br>
    <div class="container">
    <br>
    <div class="row">
    <div class="col-4" style="color: #000000;"><h2>Contactenos</h2>
    </div>
    </div>
    </div>
    </div>
    <br>
    <form action="mensajes.php" method="POST">
    <div class="container">
    <h5>Nombres*</h5>
    <input type="text" name="nombre" placeholder="Ingrese su Nombre y Apelidos" size="140">
    <br><br>
    <h5>Telefóno/Ceular*</h5>
    <input type="text" name="telefono" placeholder="Ingrese su número de telefónico, debe contar con nada mas 8 dígitos" size="140">
    <br><br>
    <h5>Correo Electronico*</h5>
    <input type="email" name="email" placeholder="Ingrese su correo electronico" size="140">
    <br><br>
    <h5>Mensaje*</h5>
    <input type="text" name="mensaje" placeholder="Ingresa un mensaje que quiera darnos por algun problema, y con gusto te responderemos!" size="140">
    </div>
    <br><br>
    <center>
    <input type="submit" class="btn btn-dark" name="enviar">
    </center>
    </form>
