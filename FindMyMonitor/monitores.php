<?php include 'conexion.php';?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
<form action="guardar.php" method="post">
    Codigo <br>
    <input type="text" name="id" placeholder="Codigo"> <br>
    Nombre <br>
    <input type="text" name="nombre" placeholder="Nombre"> <br>
    Apellido <br>
    <input type="text" name="apellido" placeholder="Apellido"> <br>
    Curso <br>
    <input type="text" name="curso" placeholder="Curso"> <br>
    <input type="submit" value="Enviar">
</form>


<table>
    <th> Codigo </th>
    <th> Nombre </th>
    <th> Apellido </th> 
    <th> Curso </th>

    <?php
        $sel=$con->query("SELECT * from monitores");
        while($fila= $sel->fetch_assoc()) {
    ?>
    <tr>
        <td><?php echo $fila['id'] ?></td>
        <td><?php echo $fila['nombre'] ?></td>
        <td><?php echo $fila['apellido'] ?></td>
        <td><?php echo $fila['curso'] ?></td>

        <td> <a href="actualizar.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
        <td><a href="borrar.php?id=<?php echo $fila['id'] ?>">Borrar</a></td>
    </tr>

        <?php } ?>
      
</table>

</body>


</html>