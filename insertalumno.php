<?php

  NuevoAlumno($_POST['matricula'],$_POST['nombre'],$_POST['apellido_paterno'],$_POST['apellido_materno'],$_POST['id_grupo'],$_POST['id_carrera']);

  function NuevoAlumno($matricula,$nombre,$apellido_paterno,$apellido_materno,$id_grupo,$id_carrera){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlalumno = "INSERT INTO alumno (matricula, nombre,apellido_paterno,apellido_materno,id_grupo,id_carrera) VALUES ('".$matricula."','".$nombre."','".$apellido_paterno."','".$apellido_materno."','".$id_grupo."','".$id_carrera."')";
    $sqlusuario = "INSERT INTO usuario (Usuario, password, tipo_usuario) VALUES ('".$matricula."','".$matricula."',3)";
    $conn->query($sqlalumno) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->query($sqlusuario) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->close();
    header('Location: adminveralumnos.php');
  }


?>
