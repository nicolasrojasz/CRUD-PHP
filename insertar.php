<?php
include("conexion.php");
$con = conectar();

$dueño=$_POST['nom_due'];
$marcaC=$_POST['marca'];
$modeloC=$_POST['modelo'];
$estadoC=$_POST['estado'];

$sql = "INSERT INTO info VALUES (id,'$dueño', '$marcaC', '$modeloC','$estadoC')";

$query = mysqli_query($con, $sql);

if ($query){
    Header("Location:index.php");
}
else{
    echo "Ups No se pudo hacer el registro ";
}
