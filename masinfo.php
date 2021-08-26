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
    <div class="input-group">
</div>
  <div class="btn-group w-100" role="group" aria-label="Basic exaple">
    <a class="btn btn-success" href="servicios.php" role="button">Servicios</a>
    <a class="btn btn-danger" href="tiendas.php" role="button">Tiendas</a>
    <a class="btn btn-light" href="contactenos.php" role="button">contactenos</a>
  </div>
    <br>
    <center>
    <br>
    <h3>¡Llena los Campos para recibir la informacion de nuestros servicios :)!</h3>
    <hr>
    <form action="datosinfo.php" method="POST">
    <div class="container">
  <div class="row">
    <div class="col">
    <label for="floatingInput">NIT</label>
    <input type="text" class="form-control" id="floatingInput" name="nit">
    </div>
    <div class="col">
    <label for="floatingPassword">Nombre Completo</label>
    <input type="text" class="form-control" id="floatingPassword" name="nombres">
    </div>
    <div class="col">
    <label for="floatingPassword">Correo Electronico</label>
    <input type="email" class="form-control" id="floatingPassword" name="correo">
    </div>
    <div class="col">
    <label for="floatingPassword">Ciudad</label>
    <input type="text" class="form-control" id="floatingPassword" name="ciudad">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-8">
    <label for="floatingPassword">Sexo</label>
    <input type="text" class="form-control" id="floatingPassword" name="sexo">
    </div>
    <div class="col-4">
    <label for="floatingPassword">Ingrese su Edad</label>
    <input type="text" class="form-control" id="floatingPassword" name="edad">
    </div>
  </div>
  <br>
  <div class="col-4">
  <label for="floatingPassword">Ingrese el Tipo de Servicio que Desea</label>
    <input type="text" class="form-control" id="floatingPassword" name="tiposervicio">
  </div>
  </div>
  </div>
  <br>
  <div class="col-4">
  <label for="floatingPassword">Ingrese el precio del servicio</label>
    <input type="text" class="form-control" id="floatingPassword" name="precio">
  </div>
  </div>
  </div>    
    </center>
    <br>
    <center>
    <input type="submit" class="btn btn-dark" value="Enviar tus Datos" name="enviar">
    </center>
<br>
<hr>
<p style="text-align: center;"><font face="arial" size="3"> PBX: 4660-0602 - Dirección: Loma Blanca Nimajuyu, Zona 21 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀<b> Carnet: 2020-40186 - Nombre: Osmar Neftali Lopez López</b></font></p>       
</form>