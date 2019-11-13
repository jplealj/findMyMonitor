<?php
include '../conexion.php';
include '../alert.php';

#$con = new mysqli('localhost','root','','monitoria');

$cod = $_POST['id'];
$nom = $_POST['nombre'];
$ap = $_POST['apellido'];
$cur = $_POST['curso'];
$nomMat = $_POST['nomMateria'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$ins = $con->query("INSERT INTO monitores (id,nombre,apellido,curso,nomMateria,correo,clave) values ('$cod','$nom','$ap','$cur','$nomMat','$correo','$clave')");

if($ins){
    echo "<script>
        location.href='../monitores/login.php';    
    </script>";    
}else{
    //echo "<script>
        alerta('El Registro no pudo ser Guardado','../monitores/registro.php');
    //    location.href='registro.php';    
    //</script>"; 
}

?>