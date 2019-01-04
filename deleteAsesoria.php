<?php
    EliminarAsesoria($_GET['id']);

    function EliminarAsesoria($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeleteasesoria = "DELETE FROM asesoria WHERE id_asesoria='".$id."'";
      $conn->query($sqldeleteasesoria) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminprogramadas.php');
    }


?>
