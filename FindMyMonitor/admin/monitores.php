<?php include '../conexion.php';
    session_start();
    $id=$_SESSION['user_id'];
    $nombre=$_SESSION['nombre'];
    $apellido=$_SESSION['apellido'];
    echo("<h2>Bienvenido ".$nombre." ".$apellido.'</h2>');
    
    $sel=$con->query("SELECT * from administradores WHERE id='$id'");
    if($fila= $sel->fetch_assoc()){
    }
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="text-center">
    
<!--<body>
<form action="guardar.php" method="post">
    Codigo <br>
    <input type="text" name="id" placeholder="Codigo"> <br>
    Nombre <br>
    <input type="text" name="nombre" placeholder="Nombre"> <br>
    Apellido <br>
    <input type="text" name="apellido" placeholder="Apellido"> <br>
    Curso <br>
    <input type="text" name="curso" placeholder="Codigo del curso"> <br>
    Nombre Materia <br>
    <input type="text" name="nomMateria" placeholder="Nombre Materia"> <br>
    <input type="submit" value="Enviar">
</form>-->



<form action="buscadorNombreA.php" method="post">
    <br>
    <input type="text" name="buscar" placeholder="Buscar"> <br>
    <input type="submit" value="Buscar">
</form>


<table  class="table table-striped">
    <th> Codigo </th>
    <th> Nombre </th>
    <th> Apellido </th> 
    <th> Curso </th>
    <th> Nombre Materia </th>
    <th> Dias </th>
    <th> Hora inicio </th>
    <th> Hora final </th>
    <th></th>
    <th></th>
    <th></th>
    <?php
        $sel=$con->query("SELECT * FROM monitores INNER JOIN horario ON monitores.id=horario.id");
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

        <td><a href="diaNuevoAM.php?id=<?php echo $fila['id'] ?>">Añadir día</a></td>
        <td><a href="actualizarA.php?id=<?php echo $fila['id'] ?>">Editar</a></td> 
        <td><a href="../adminback/borrarA.php?id=<?php echo $fila['id']?>&dias=<?php echo $fila['dias']?>&horaInicio=<?php echo $fila['horaInicio']?>&horaFinal=<?php echo $fila['horaFinal']?>">Borrar</a></td>
    </tr>
    
        <?php } ?>
</table>
<form action="../adminback/logoutA.php" method="post">
<br>
    <input type="submit" value="Cerrar sesion">
</form>
</body>


</html>