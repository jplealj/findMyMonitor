<?php
include 'conexion.php';

$cod = $_POST['id'];
$nom = $_POST['nombre'];
$ap = $_POST['apellido'];
$cur = $_POST['curso'];

$up= $con -> query("UPDATE monitores set nombre='$nom', apellido='$ap', curso='$cur' WHERE id='$cod'");

if($up){
    echo "<script>
        location.href='monitores.php';    
    </script>";   
} else {
    echo "<script>
        alert('El Registro no pudo ser Actualizado');
        location.href='monitores.php';    
    </script>"; 
}

?>