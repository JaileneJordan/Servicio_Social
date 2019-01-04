<?php
  ModificarAsesoria($_POST['id'],$_POST['tipo_asesoria'],$_POST['hora_inicio'],$_POST['hora_fin'],$_POST['id_dia'],$_POST['cupo'],$_POST['id_aula'],$_POST['id_materia'],$_POST['id_carrera'],$_POST['matricula_maestro']);


  function ModificarAsesoria($id,$tipo_asesoria,$hora_inicio,$hora_fin,$id_dia,$cupo,$id_aula,$id_materia,$id_carrera,$matricula_maestro){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');

    echo "id: ".$id;
    echo "</br>";
    echo "tipo_asesoria: ".$tipo_asesoria;
    echo "</br>";
    echo "hora_inicio: ".$hora_inicio;
    echo "</br>";
    echo "hora_fin: ".$hora_fin;
    echo "</br>";
    echo "id_dia: ".$id_dia;
    echo "</br>";
    echo "cupo: ".$cupo;
    echo "</br>";
    echo "id_aula: ".$id_aula;
    echo "</br>";
    echo "id_materia: ".$id_materia;
    echo "</br>";
    echo "id_carrera: ".$id_carrera;
    echo "</br>";
    echo "matricula_maestro: ".$matricula_maestro;
    echo "</br>";
    $sqlasesoriaupdate = "UPDATE asesoria SET tipo_asesoria='".$tipo_asesoria."',hora_inicio='".$hora_inicio."',hora_fin='".$hora_fin."',id_dia='".$id_dia."',cupo='".$cupo."',id_aula='".$id_aula."',id_materia='".$id_materia."',id_carrera='".$id_carrera."',matricula_maestro='".$matricula_maestro."' WHERE id_asesoria='".$id."'";
    $conn->query($sqlasesoriaupdate) or die("Error al modificar los datos".mysqli_error($conn));
    //echo $sqlasesoriaupdate;
    $conn->close();
    header('Location: adminprogramadas.php');
  }
 ?>

 <script type="text/javascript">
   alert("datos cambiados");
 </script>
