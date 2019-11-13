<?php
    include '../conexion.php';
    include '../alert.php';

    $id=$_REQUEST['id'];
    $dias=$_REQUEST['dias'];
    $horaI=$_REQUEST['horaInicio'];
    $horaF=$_REQUEST['horaFinal'];

    $del=$con->query("DELETE from horario WHERE horario.id='$id' AND horario.dias='$dias' AND horario.horaInicio='$horaI' AND horario.horaFinal='$horaF'");
    if ($del) {
        echo "<script>
            location.href='../admin/monitores.php';    
        </script>"; 
    }else{
        //echo "<script>
            alerta('El Registro no pudo ser Eliminado','../admin/monitores.php');
         //   location.href='monitores.php';    
        //</script>"; 
    }
?>