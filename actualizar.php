<?php
include("conexion.php");
$con = conectar();
$id = $_GET['id'];

$sql = "SELECT * FROM info WHERE id = '$id'";
$resultado = mysqli_query($con, $sql);
$columna = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container mt-5">


    <form action="update.php" method="POST" class="row g-3">
        <h3 style="padding:0px 0px 10px 0px;">Lista de caracteristicas de carros</h3>

        <div class="col-12">
            <input type="text" placeholder="Dueño" readonly="readonly" name="id" class="form-control" value="<?php echo $columna['id']; ?>">
        </div>

        <div class="col-12">
            <input type="text" placeholder="Dueño" name="nom_due" class="form-control" value="<?php echo $columna['nom_due']; ?>">
        </div>

        <div class="col-12">
            <input type="text" placeholder="Marca" name="marca" class="form-control" value="<?php echo $columna['marca']; ?>">
        </div>

        <div class="col-12">
            <input type="text" placeholder="Modelo" name="modelo" class="form-control" value="<?php echo $columna['modelo']; ?>">
        </div>

        <div class="col-12">
            <input type="text" placeholder="Estado" name="estado" class="form-control" value="<?php echo $columna['estado']; ?>">
        </div>

        <div class="col-12">
            <input type="submit" value="Actualizar" class="btn btn-success">
        </div>


    </form>
</body>

</html>