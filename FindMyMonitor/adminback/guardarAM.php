<?php
include '../conexion.php';
include '../alert.php';

#$con = new mysqli('localhost','root','','monitoria');

$cod = $_POST['id'];
$dias = $_POST['dias'];
$horaI = $_POST['horaInicio'];
$horaF = $_POST['horaFinal'];

$ins = $con->query("INSERT INTO horario (id,dias,horaInicio,horaFinal) values ('$cod','$dias','$horaI','$horaF')");

if($ins){
    echo "<script>
        location.href='../admin/monitores.php';    
    </script>";    
}else{
    //echo "<script>
        alerta('El Registro no pudo ser Guardado','../admin/monitores.php');
     //   location.href='monitores.php';    
    //</script>"; 
}

?>