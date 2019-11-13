<?php include '../conexion.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Buscador</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<table class="table table-striped">
    <th> Codigo </th>
    <th> Nombre </th>
    <th> Apellido </th> 
    <th> Curso </th>
    <th> Nombre Materia </th>
    <th> Dias </th>
    <th> Hora inicio </th>
    <th> Hora final </th>

    <?php
        $buscar = $_POST['buscar'];
        $sel=$con->query("SELECT * from monitores INNER JOIN horario ON monitores.id=horario.id WHERE nombre like '%$buscar%' OR apellido like '%$buscar%' OR curso like '%$buscar%' OR nomMateria like '%$buscar%'");
        while($fila= $sel->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $fila['id'] ?></td>
        <td><?php echo $fila['nombre'] ?></td>
        <td><?php echo $fila['apellido'] ?></td>
        <td><?php echo $fila['curso'] ?></td>
        <td><?php echo $fila['nomMateria'] ?></td>
        <td><?php echo $fila['dias'] ?></td>
        <td><?php echo $fila['horaInicio'] ?></td>
        <td><?php echo $fila['horaFinal'] ?></td>

        <!--<td><a href="actualizar.php?id=<?php #echo $fila['id'] ?>">Editar</a></td>
        <td><a href="borrar.php?id=<?php #echo $fila['id'] ?>">Borrar</a></td>-->
    </tr>

        <?php } ?>
      
</table>

<form action="../admin/monitores.php">
    <input type="submit" value="Volver">
</form>

</body>


</html>