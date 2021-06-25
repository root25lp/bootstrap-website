<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$area=$_POST['area'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$salario=$_POST['salario'];

$sql="UPDATE usuarios SET  id='$id',area='$area',nombre='$nombre',apellido='$apellido', edad='$edad', salario='$salario' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: menu.php");
    }
?>