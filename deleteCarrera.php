<?php
    EliminarCarrera($_GET['id']);

    function EliminarCarrera($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeletecarrera = "DELETE FROM carrera WHERE id_carrera='".$id."'";
      $conn->query($sqldeletecarrera) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminregistrocarrera.php');
    }


?>
