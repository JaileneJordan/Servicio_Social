<?php
    EliminarGrupo($_GET['id']);

    function EliminarGrupo($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeletegrupo = "DELETE FROM grupo WHERE id_grupo='".$id."'";
      $conn->query($sqldeletegrupo) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminregistrogrupo.php');
    }


?>
