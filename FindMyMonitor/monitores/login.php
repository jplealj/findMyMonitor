<!-- <!DOCTYPE html>
<html>
<head>
    <title>Find My Monitor</title>
</head>

<body>
    <form action="validacionP.php" method="POST">
        Usuario <br>
        <input type="text" name="correo" placeholder="Usuario"> <br>
        Clave <br>
        <input type="password" name="clave" placeholder="Clave"> <br>

        <input type="submit" value="Entrar"> <br>
        <a href="registro.php">Crear cuenta</a>
    </form>
    <br>
    <form action="index.php" method="post">
        <input type="submit" value="Volver"> <br>
    </form>
</body>
</html> -->


<!DOCTYPE html>
<html >
  <head>
    <title>Ingreso Monitor</title>

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
  <h1 class="h3 mb-3 font-weight-normal">Ingreso Monitor</h1>

  <form action="../monitorback/validacionP.php" method="POST">
        Usuario <br>
        <input type="text" name="correo" placeholder="Usuario"> <br>
        Clave <br>
        <input type="password" name="clave" placeholder="Clave"> <br>

        <input type="submit" value="Entrar"> <br>
        <a href="registro.php">Crear cuenta</a>
    </form>
    <br>
    <form action="../index.php" method="post">
        <input type="submit" value="Volver"> <br>
    </form>
</body>
</html>