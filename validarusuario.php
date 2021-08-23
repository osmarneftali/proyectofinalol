<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

if ($usuario=="admin" and $contraseña=="mensajes") {
    header ("location:vermensajes.php");
}
else {
    echo '<script lenguage="javascript">';
    echo 'alert("El usuario o contraseña son incorrectos, intentelo nuevamente")
    window.location = "iniciars.php";
    </script>';
}
?>