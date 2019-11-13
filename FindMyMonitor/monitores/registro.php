<!-- <?php include '../conexion.php';?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
<form action="guardar.php" method="post">
    Codigo <br>
    <input type="text" name="id" placeholder="Codigo"> <br>
    Nombre <br>
    <input type="text" name="nombre" placeholder="Nombre"> <br>
    Apellido <br>
    <input type="text" name="apellido" placeholder="Apellido"> <br>
    Curso <br>
    <input type="text" name="curso" placeholder="Codigo del curso"> <br>
    Nombre Materia <br>
    <input type="text" name="nomMateria" placeholder="Nombre Materia"> <br>
    Correo <br>
    <input type="text" name="correo" placeholder="Correo"> <br>
    Clave <br>
    <input type="password" name="clave" placeholder="Clave"> <br>
    <input type="submit" value="Enviar">
</form>
</body> -->



<!DOCTYPE html>
<html >
  <head>
    <title>Registro Monitor</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="signin.css" rel="stylesheet">
  </head>   
  <body class="text-center">
    <!-- <form class="form-signin"> -->
  <h1 class="h3 mb-3 font-weight-normal">Registro Monitor</h1>

  <body>
<form action="../monitorback/guardar.php" method="post">
    Codigo <br>
    <input type="text" name="id" placeholder="Codigo"> <br>
    Nombre <br>
    <input type="text" name="nombre" placeholder="Nombre"> <br>
    Apellido <br>
    <input type="text" name="apellido" placeholder="Apellido"> <br>
    Curso <br>
    <input type="text" name="curso" placeholder="Codigo del curso"> <br>
    Nombre Materia <br>
    <input type="text" name="nomMateria" placeholder="Nombre Materia"> <br>
    Correo <br>
    <input type="text" name="correo" placeholder="Correo"> <br>
    Clave <br>
    <input type="password" name="clave" placeholder="Clave"> <br>
    <input type="submit" value="Enviar">
    </form>
    <br><br>
    <form action="login.php" method="post">
        <input type="submit" value="Volver"> <br>
    </form>
</form>
</body>
</html>