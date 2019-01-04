<?php
    EliminarAula($_GET['id']);

    function EliminarAula($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeleteaula = "DELETE FROM aula WHERE id_aula='".$id."'";
      $conn->query($sqldeleteaula) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminregistroaula.php');
    }


?>
