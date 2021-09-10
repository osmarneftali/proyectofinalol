<?php
include ("basepyfinal.php")
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Contactanos</title>
    <link rel="shortcut icon" href="imag/app.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css ">
    <link rel="stylesheet" href="style.css">
  </head>
  <br><br>
  <div class="container">
    <h2>Ingrese los datos del Cliente</h2>
  </div>
  <div class="container">
    <br>
    <hr>
    <br>
    <h5></h5>
  <form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Ingresa su Primero Nombre</label>
    <input type="text" class="form-control" id="validationDefault01" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Ingresa su Segundo Nombre</label>
    <input type="text" class="form-control" id="validationDefault02" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Ingresa su Correo</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Ingresa el Servicio que Desea</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Ingresa su NIT</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Acepto Terminos
      </label>
    </div>
  </div>
  <div class="input-group">
  <span class="input-group-text">Agrega la informacion de nuestros servicios</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>  
  <center>
      <br>
    <div class="col-12">
  <a href="infoclientes.php" class="btn btn-info"><img src="imag/e.png" width="30"></a>
  </div>
  </center>
  </div>
  <br><br>
  <center>
    <div class="col-8">
    <table class="table">
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
