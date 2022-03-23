<?php
include("conexion.php");
$con = conectar();

$id = $_POST['id'];
$dueño=$_POST['nom_due'];
$marcaC=$_POST['marca'];
$modeloC=$_POST['modelo'];
$estadoC=$_POST['estado'];

$sql = "UPDATE info SET nom_due='$dueño', marca='$marcaC', modelo = '$modeloC', estado = '$estadoC' WHERE id = '$id'";
$query = mysqli_query($con,$sql);

if ($query) {
    Header("Location: index.php");
}
