<?php   
    function alerta($al,$ref){
        echo "<script>
        alert('$al');
        location.href='$ref';    
        </script>";
    }
?>