<?php

  $conn = new mysqli("localhost","root","","paginaweb");

  if($conn -> connect_errno)
  {
    echo "no hay conexion: (".$conn->connect_errno.")".$conn->connect_error;
  }
  
  $email = $_POST['email'];
  $contraseña = $_POST['contraseña'];
  if(isset($_POST['botonRegister']))
  {
    $pass_fuerte = password_hash($contraseña,PASSWORD_DEFAULT);
    $queryregistrar = "INSERT INTO usuarios(email,password) values ('$email','$pass_fuerte')";
  
  if(mysqli_query($conn,$queryregistrar));
  {
    echo "<script> alert('Usuario registrado : $email'); window.location='index.html'</script>";
  }
 
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>



    <h1>Registrarse</h1>
    <span><a href="registrarse.php"></a></span>

    <form action="registrarse.php" method="post">
      <input required name="email"type="email" aria-required="true" placeholder="Correo Electronico">
      <input name="contraseña" required type="password" aria-required="true" placeholder="Contraseña">
      <input name="confirmar_contraseña" required type="password" aria-required="true" placeholder="Confirmar Contraseña">
      <input type="submit" value="Registrate" name="botonRegister">
    </form>

  </body>
</html>