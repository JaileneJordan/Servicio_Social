<?php
    EliminarAlumno($_GET['id']);

    function EliminarAlumno($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeletealumno = "DELETE FROM alumno WHERE matricula='".$id."'";
      $conn->query($sqldeletealumno) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminveralumnos.php');
    }


?>
