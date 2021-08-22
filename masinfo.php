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
    <form acction="datosinfo.php" method="POST" class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">NIT</label>
    <input type="text" class="form-control" id="validationCustom01" name="nit" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" id="validationCustom02" name="nombres" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Correo</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="correo" required>
      <div class="invalid-feedback">
        Porfavor Ingrese su Correo Electronico
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationCustom03" name="ciudad" required>
    <div class="invalid-feedback">
      Porfavor Ingrese su Ciudad
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="validationCustom03" name="sexo" required>
    <div class="invalid-feedback">
      Porfavor Ingrese su Ciudad
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Ingrese su Edad</label>
    <input type="text" class="form-control" id="validationCustom05" name="edad" required>
    <div class="invalid-feedback">
    Ingrese su Edad Exacta Porfavor
    </div>
</div>
<center>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Ingrese el Tipo de Servicio que Desea</label>
    <input type="text" class="form-control" id="validationCustom05" name="tiposervicio" required>
    <div class="invalid-feedback">
    </div>
<br>
<div class="col-md-6">
    <label for="validationCustom05" class="form-label">Ingrese el Precio del Servicio</label>
    <input type="text" class="form-control" id="validationCustom05" name="precio" required size="140">
    <div class="invalid-feedback">
    Ingrese su Edad Exacta Porfavor
    </div>
    </center>
    <center>
    <input type="submit" class="btn btn-dark" value="Enviar tus Datos" name="enviar">
    </center>
<br>
<hr>
<p style="text-align: center;"><font face="arial" size="3"> PBX: 4660-0602 - Dirección: Loma Blanca Nimajuyu, Zona 21 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀<b> Carnet: 2020-40186 - Nombre: Osmar Neftali Lopez López</b></font></p>       
</form>