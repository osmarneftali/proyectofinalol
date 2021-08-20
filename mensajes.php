<?php 
include("basepyfinal.php");

if (isset($_POST['enviar'])) {
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    $query="INSERT INTO mensajes (nombre, telefono, correo, mensaje) VALUES ('$nombre', '$telefono', '$correo', '$mensaje')";
    $resultado=mysqli_query($conn, $query);
    if ($resultado) {
    header ('location: mensajes.php');
    }
}
?>