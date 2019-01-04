<?php
    EliminarMaestro($_GET['id']);

    function EliminarMaestro($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeletemaestro= "DELETE FROM maestro WHERE matricula_maestro='".$id."'";
      $conn->query($sqldeletemaestro) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminvermaestros.php');
    }


?>
