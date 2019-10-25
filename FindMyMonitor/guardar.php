<?php
include 'conexion.php';

#$con = new mysqli('localhost','root','','monitoria');

$cod = $_POST['id'];
$nom = $_POST['nombre'];
$ap = $_POST['apellido'];
$cur = $_POST['curso'];

$ins = $con->query("INSERT INTO monitores (id,nombre,apellido,curso) values ('$cod','$nom','$ap','$cur')");

if($ins){
    echo "<script>
        location.href='monitores.php';    
    </script>";    
}else{
    echo "<script>
        alert('El Registro no pudo ser Guardado');
        location.href='monitores.php';    
    </script>"; 
}

?>