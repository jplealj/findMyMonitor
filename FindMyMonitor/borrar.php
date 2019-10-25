<?php
    include 'conexion.php';
    $id=$_REQUEST['id'];

    $del=$con->query("DELETE from monitores WHERE id='$id' ");
    if ($del) {
        echo "<script>
            location.href='monitores.php';    
        </script>"; 
    }else{
        echo "<script>
            alert('El Registro no pudo ser Eliminado');
            location.href='monitores.php';    
        </script>"; 
    }
?>