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
<title>Añadir dia</title>
</head>

<body>
    <form action="../adminback/guardarAM.php" method="post">
    <input type="hidden" name="id" placeholder="Codigo" value="<?php echo $fila['id'] ?>">

    Dia <br>
    <select name="dias">
    <OPTION value='Lunes'>Lunes</OPTION>
    <OPTION value='Martes'>Martes</OPTION>
    <OPTION value='Miercoles'>Miercoles</OPTION>
    <OPTION value='Jueves'>Jueves</OPTION>
    <OPTION value='Viernes'>Viernes</OPTION> 
    </select><br>

    
    Hora inicio <br>
    <select name="horaInicio">
    <OPTION value='06:00:00'>06:00:00</OPTION>
    <OPTION value='06:30:00'>06:30:00</OPTION>
    <OPTION value='07:00:00'>07:00:00</OPTION>
    <OPTION value='07:30:00'>07:30:00</OPTION>
    <OPTION value='08:00:00'>08:00:00</OPTION>
    <OPTION value='08:30:00'>08:30:00</OPTION>
    <OPTION value='09:00:00'>09:00:00</OPTION>
    <OPTION value='09:30:00'>09:30:00</OPTION>
    <OPTION value='10:00:00'>10:00:00</OPTION>
    <OPTION value='10:30:00'>10:30:00</OPTION>
    <OPTION value='11:00:00'>11:00:00</OPTION>
    <OPTION value='11:30:00'>11:30:00</OPTION>
    <OPTION value='12:00:00'>12:00:00</OPTION>
    <OPTION value='12:30:00'>12:30:00</OPTION>
    <OPTION value='13:00:00'>13:00:00</OPTION>
    <OPTION value='13:30:00'>13:30:00</OPTION>
    <OPTION value='14:00:00'>14:00:00</OPTION>
    <OPTION value='14:30:00'>14:30:00</OPTION>
    <OPTION value='15:00:00'>15:00:00</OPTION>
    <OPTION value='15:30:00'>15:30:00</OPTION>
    <OPTION value='16:00:00'>16:00:00</OPTION>
    <OPTION value='16:30:00'>16:30:00</OPTION>
    <OPTION value='17:00:00'>17:00:00</OPTION>
    <OPTION value='17:30:00'>17:30:00</OPTION>
    <OPTION value='18:00:00'>18:00:00</OPTION>
    <OPTION value='18:30:00'>18:30:00</OPTION>
    <OPTION value='19:00:00'>19:00:00</OPTION>
    <OPTION value='19:30:00'>19:30:00</OPTION>
    <OPTION value='20:00:00'>20:00:00</OPTION>
    </select><br>
    

    Hora final <br>
    <select name="horaFinal">
    <OPTION value='07:00:00'>07:00:00</OPTION>
    <OPTION value='07:30:00'>07:30:00</OPTION>
    <OPTION value='08:00:00'>08:00:00</OPTION>
    <OPTION value='08:30:00'>08:30:00</OPTION>
    <OPTION value='09:00:00'>09:00:00</OPTION>
    <OPTION value='09:30:00'>09:30:00</OPTION>
    <OPTION value='10:00:00'>10:00:00</OPTION>
    <OPTION value='10:30:00'>10:30:00</OPTION>
    <OPTION value='11:00:00'>11:00:00</OPTION>
    <OPTION value='11:30:00'>11:30:00</OPTION>
    <OPTION value='12:00:00'>12:00:00</OPTION>
    <OPTION value='12:30:00'>12:30:00</OPTION>
    <OPTION value='13:00:00'>13:00:00</OPTION>
    <OPTION value='13:30:00'>13:30:00</OPTION>
    <OPTION value='14:00:00'>14:00:00</OPTION>
    <OPTION value='14:30:00'>14:30:00</OPTION>
    <OPTION value='15:00:00'>15:00:00</OPTION>
    <OPTION value='15:30:00'>15:30:00</OPTION>
    <OPTION value='16:00:00'>16:00:00</OPTION>
    <OPTION value='16:30:00'>16:30:00</OPTION>
    <OPTION value='17:00:00'>17:00:00</OPTION>
    <OPTION value='17:30:00'>17:30:00</OPTION>
    <OPTION value='18:00:00'>18:00:00</OPTION>
    <OPTION value='18:30:00'>18:30:00</OPTION>
    <OPTION value='19:00:00'>19:00:00</OPTION>
    <OPTION value='19:30:00'>19:30:00</OPTION>
    <OPTION value='20:00:00'>20:00:00</OPTION>
    <OPTION value='20:30:00'>20:30:00</OPTION>
    <OPTION value='21:00:00'>21:00:00</OPTION>
    </select><br>
    <input type="submit" value="Enviar">
    </form> 
</body>

</html>