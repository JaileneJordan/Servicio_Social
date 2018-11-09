<?php

  NuevoAsesoria($_POST['tipo_asesoria'],$_POST['hora_inicio'],$_POST['hora_fin'],$_POST['id_dia'],$_POST['cupo'],$_POST['id_aula'],$_POST['id_materia'],$_POST['id_carrera'],$_POST['matricula_maestro']);


  function NuevoAsesoria($tipo_asesoria,$hora_inicio,$hora_fin,$id_dia,$cupo,$id_aula,$id_materia,$id_carrera,$matricula_maestro){
  
  echo "$tipo_asesoria <br>";
  /*echo "$hora_inicio<br>";
  echo "$hora_fin<br>";
  echo "$id_dia<br>";
  echo "$cupo<br>";
  echo "$id_aula<br>";
  echo "$id_materia<br>";
  echo "$id_carrera<br>";
  echo "$matricula_maestro<br>";*/

    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlasesoria = "INSERT INTO asesoria (tipo_asesoria, hora_inicio, hora_fin, id_dia, cupo, id_aula, id_materia, id_carrera, matricula_maestro)
    VALUES ('".$tipo_asesoria."','".$hora_inicio."','".$hora_fin."','".$id_dia."','".$cupo."','".$id_aula."','".$id_materia."','".$id_carrera."','".$matricula_maestro."')";

    $conn->query($sqlasesoria) or die("Error al ingresar los datos ".mysqli_error($conn));
    $conn->close();
    header('Location: adminprogramadas.php');
  }


?>
