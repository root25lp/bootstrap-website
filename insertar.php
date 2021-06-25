<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$area=$_POST['area'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$salario=$_POST['salario'];


$sql="INSERT INTO usuarios VALUES('$id','$area','$nombre','$apellido','$edad','$salario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: menu.php");
    
}else {
}
?>