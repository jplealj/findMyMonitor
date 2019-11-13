<?php
include '../conexion.php';
include '../alert.php';

$cod = $_POST['id'];
$nom = $_POST['nombre'];
$ap = $_POST['apellido'];
$cur = $_POST['curso'];
$nomMat = $_POST['nomMateria'];


$up= $con -> query("UPDATE monitores set nombre='$nom', apellido='$ap', curso='$cur', nomMateria='$nomMat'  WHERE id='$cod'");

if($up){
    echo "<script>
        location.href='../monitores/paginaM.php';    
    </script>";   
} else {
    //echo "<script>
        alerta('El Registro no pudo ser Actualizado','../monitores/paginaM.php');
    //    location.href='paginaM.php';    
    //</script>"; 
}

?>