<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

if ($usuario=="admin" and $contraseña=="mensajes") {
    header ("location:vermensajes.php");
}
else {
    echo '<script lenguage="javascript">';
    echo 'alert("Usuario o contraseña son incorrectas")';
    echo '</script>';
}
?>