<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Nuestros Servicios</title>
    <link rel="shortcut icon" href="imag/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <br>
  <div class="btn-group w-100" role="group" aria-label="Basic exaple">
    <a class="btn btn-success" href="index.html" role="button">Pagina Inicial</a>
    <a class="btn btn-danger" href="tiendas.php" role="button">Tiendas</a>
    <a class="btn btn-light" href="contactenos.php" role="button">contactenos</a>
  </div>
  <br><br>
  <center>
    <div class="card" style="width: 17rem;">
    <img src="imag/jaja.png" class="card-img-top">
    <div class="card-body">
    <form action="validarusuario.php" method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="text" class="form-control" placeholder="&#Xf007;" name="usuario">
    </div>
        <br>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input style="font-family: 'Font Awesome 5 free'; font-weight: 700;" type="password" class="form-control" placeholder="&#Xf023;" name="contraseña">
        </div>
        <div class="mb-3 form-check">
        </div>
        <center><div class="d-grip gap-2">
        <button class="btn btn-dark" type="submit" name="enviar">Iniciar Sesion</button>
        </form>
    </div>
    </div>
    </center>