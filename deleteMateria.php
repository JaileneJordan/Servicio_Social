<?php
    EliminarMateria($_GET['id']);

    function EliminarMateria($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeletemateria = "DELETE FROM materia WHERE id_materia='".$id."'";
      $conn->query($sqldeletemateria) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminregistromaterias.php');
    }


?>
