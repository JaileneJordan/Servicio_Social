<?php

  NuevoMaestro($_POST['matricula_maestro'],$_POST['nombre'],$_POST['apellido_paterno'],$_POST['apellido_materno']);

  function NuevoMaestro($matricula_maestro,$nombre,$apellido_paterno,$apellido_materno){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlmaestro = "INSERT INTO maestro (matricula_maestro, nombre,apellido_paterno,apellido_materno) VALUES ('".$matricula_maestro."','".$nombre."','".$apellido_paterno."','".$apellido_materno."')";
    $sqlusuario = "INSERT INTO usuario (Usuario, password, tipo_usuario) VALUES ('".$matricula_maestro."','".$matricula_maestro."',2)";
    $conn->query($sqlmaestro) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->query($sqlusuario) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->close();
    header('Location: adminvermaestros.php');
  }


?>
