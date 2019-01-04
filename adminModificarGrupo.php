<?php
  ModificarGrupo($_POST['id'],$_POST['descripcion']);


  function ModificarGrupo($id,$descripcion){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');

    echo "id: ".$id;
    echo "</br>";
    echo "nombre: ".$descripcion;
    echo "</br>";
    $sqlgrupoupdate = "UPDATE grupo SET id_grupo='".$descripcion."', descripcion='".$descripcion."' WHERE id_grupo='".$id."'";
    $conn->query($sqlgrupoupdate) or die("Error al modificar los datos".mysqli_error($conn));
    //echo $sqlgrupoupdate;
    $conn->close();
    header('Location: adminregistrogrupo.php');
  }
 ?>

 <script type="text/javascript">
   alert("datos cambiados");
 </script>
