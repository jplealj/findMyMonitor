<?php
include '../conexion.php';
include '../alert.php';
  session_start();

//   if(isset($_SESSION['user_id'])){
//       header("location: paginaM.php");
//   }

  $usuario=$_POST['correo'];
  $clave=$_POST['clave'];

  if(!empty($usuario) && !empty($clave)){
    //   echo($usuario);
    //   echo($clave);
      $sentence = $con->query("SELECT id, correo, nombre, apellido FROM monitores WHERE correo = '$usuario' AND clave = '$clave'");
      if($sentence){
        //   echo "<script>
        //   alert('login');
        //   </script>";
          $rows = $sentence->num_rows;
          if($rows > 0){
              $row = $sentence->fetch_assoc();
              $_SESSION['user_id'] = $row['id'];
              $_SESSION['correo'] = $row['correo'];
              $_SESSION['nombre'] = $row['nombre'];
              $_SESSION['apellido'] = $row['apellido'];
              #echo ($_SESSION['user_id']);
             header("location: ../monitores/paginaM.php");
          } else {
            //   echo "datos incorrectos";

            //   echo "<script>
            // alert('Datos incorrectos');
            // location.href='login.php';    
            // </script>";
            alerta('Datos Incorrectos','../monitores/login.php'); 
          }
      } else {
          //echo "false";
          //echo "<script>
            alert('No se pudo hacer el login','../monitores/login.php');
            //location.href='login.php';    
            //</script>"; 
      }
     


  }
?>