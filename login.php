<?php

$conn2 = new mysqli("localhost","root","","paginaweb");

  if($conn2 -> connect_errno)
   {
     echo "no hay conexion: (".$conn2->connect_errno.")".$conn2->connect_error;
   }

  $email = $_POST['email'];
  $contraseña = $_POST['contraseña'];

  if(isset($_POST['botonLogin']))
  {
    $queryusuario = mysqli_query($conn2, "SELECT * FROM usuarios WHERE email  = '$email'");
    $nr  = mysqli_num_rows($queryusuario);
    $buscarContraseña = mysqli_fetch_array($queryusuario);


    if (($nr == 1) && (password_verify($contraseña,$buscarContraseña['password'])))
    {
      echo "<script>alert('Inciastes Sesion Correctamente');window.location='index.html'</script>";
    }
    else
    {
      echo "<script>alert('Usuario o contraseña incorrectos');window.location='login.php'</script>";
    }
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    
    <?php require 'partials/header.php' ?>

    

    <h1>Login</h1>
 

    <span><a href="login.php"></a></span>

    <form action="login.php" method="POST">
      <input name="email" type="email" placeholder="Correo Electronico">
      <input name="contraseña" type="password" placeholder="Contraseña">
      <input type="submit" value="Iniciar Sesion" name="botonLogin">
      
    </form>
  </body>
</html>
