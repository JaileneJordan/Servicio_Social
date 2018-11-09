<?php

  NuevoGrupo($_POST['id_grupo'],$_POST['descripcion']);

  function NuevoGrupo($id_grupo,$descripcion){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlgrupo = "INSERT INTO grupo (id_grupo, descripcion) VALUES ('".$id_grupo."','".$descripcion."')";
    $conn->query($sqlgrupo) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->close();
    header('Location: adminregistrogrupo.php');
  }


?>
