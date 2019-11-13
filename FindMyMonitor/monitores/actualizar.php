<?php
    include '../conexion.php';
    $id=$_REQUEST['id'];

    $sel=$con->query("SELECT * from monitores WHERE id='$id'");
    if($fila= $sel->fetch_assoc()){
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Actualizar</title>
</head>

<body>
    <form action="../monitorback/update.php" method="post">
        <input type="hidden" name="id" placeholder="Codigo" value="<?php echo $fila['id'] ?>">
        Nombre <br>
        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $fila['nombre'] ?>"> <br>
        Apellido <br>
        <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $fila['apellido'] ?>"> <br>
        Curso <br>
        <input type="text" name="curso" placeholder="Curso" value="<?php echo $fila['curso'] ?>"> <br>
        NombreMateria <br>
        <input type="text" name="nomMateria" placeholder="NombreMateria" value="<?php echo $fila['nomMateria'] ?>"> <br>
        <input type="submit" value="Enviar">
    </form> 
</body>

</html>