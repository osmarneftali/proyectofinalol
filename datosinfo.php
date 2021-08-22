<?php 
include("basepyfinal.php");

if (isset($_POST['enviardts'])) {
    $nit=$_POST['nit'];
    $nombres=$_POST['nombres'];
    $correo=$_POST['correo'];
    $ciudad=$_POST['ciudad'];
    $sexo=$_POST['sexo'];
    $edad=$_POST['edad'];
    $tiposervicio=$_POST['tiposervicio'];
    $precio=$_POST['precio'];

    $query="INSERT INTO informacion (nit, nombres, correo, ciudad, sexo, edad, tiposervicio, precio) VALUES ('$nit', '$nombres', '$correo', '$ciudad', '$sexo', '$edad', '$tiposervicio', '$precio')";
    $resultado=mysqli_query($conn,$query);
    if ($resultado) {
    header ('location:masinfo.php');
    }
}
?>