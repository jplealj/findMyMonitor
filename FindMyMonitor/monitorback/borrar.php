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
            location.href='../monitores/paginaM.php';    
        </script>"; 
    }else{
        //echo "<script>
            alerta('El Registro no pudo ser Eliminado','../monitores/paginaM.php');
        //    location.href='paginaM.php';    
        //</script>"; 
    }
?>