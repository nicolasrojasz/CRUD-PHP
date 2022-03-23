<?php
include("conexion.php");
$con = conectar();
$sql = "SELECT * FROM info";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD PRUEBA</title>
</head>

<body style="padding:30px;">

    <h2 style="text-align: center; padding:0px 0px 30px 0px ">Bienvenido a este crud de prueba con PHP y Mysql</h2>

    <form action="insertar.php" method="POST" class="row g-3" style="padding:0px 0px 40px 0px;">
        <h3 style="padding:0px 0px 10px 0px;">Lista de caracteristicas de carros</h3>


        <div class="col-auto">
            <input type="text" placeholder="Dueño" name="nom_due" class="form-control">
        </div>

        <div class="col-auto">
            <input type="text" placeholder="Marca" name="marca" class="form-control">
        </div>

        <div class="col-auto">
            <input type="text" placeholder="Modelo" name="modelo" class="form-control">
        </div>

        <div class="col-auto">
            <input type="text" placeholder="Estado" name="estado" class="form-control">
        </div>

        <div class="col-auto">
            <input type="submit" value="Agregar" class="btn btn-success">
        </div>

    </form>

    <form action="index.php" method="GET" class="row g-3">

        <div class="col-auto">
            <input type="text" placeholder="Buscar ID" style="margin-bottom: 20px;" name="busca_ID" class="form-control">
        </div>

        <div class="col-auto">
            <button type="submit" name="enviar" class="btn btn-primary">Buscar/Recargar</button>
        </div>

    </form>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Dueño</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Estado</th>
                <th scope="col">Editar</th>

            </tr>
        </thead>
        <tbody>

            <?php
            if (isset($_GET['enviar'])) {
                $busqueda = $_GET['busca_ID'];
                $consulta = $con->query("SELECT * FROM info WHERE id LIKE '%$busqueda%'");
                while ($row = $consulta->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nom_due']; ?></td>
                        <td><?php echo $row['marca']; ?></td>
                        <td><?php echo $row['modelo']; ?></td>
                        <td><?php echo $row['estado']; ?></td>
                        <td scope="col">
                            <a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Editar</a>
                            <a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
            <?php
            if (isset($_GET['enviar']) == 0) {
                while ($columna = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo $columna['id'] ?></td>
                        <td><?php echo $columna['nom_due']; ?></td>
                        <td><?php echo $columna['marca']; ?></td>
                        <td><?php echo $columna['modelo']; ?></td>
                        <td><?php echo $columna['estado']; ?></td>
                        <td scope="col">
                            <a href="actualizar.php?id=<?php echo $columna['id'] ?>" class="btn btn-primary">Editar</a>
                            <a href="eliminar.php?id=<?php echo $columna['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>

    </table>

</body>

</html>