<?php
    EliminarImagen($_GET['id']);

    function EliminarImagen($id){
      $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
      $sqldeleteimagen = "DELETE FROM image WHERE id_image='".$id."'";
      $conn->query($sqldeleteimagen) or die("No se pueden eliminar los datos".mysqli_error($conn));
      $conn->close();
      header('Location: adminasesorianoprog.php');
    }


?>
