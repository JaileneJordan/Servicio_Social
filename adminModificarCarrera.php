<?php
  ModificarCarrera($_POST['id'],$_POST['nombre']);


  function ModificarCarrera($id,$nombre){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');

    echo "id: ".$id;
    echo "</br>";
    echo "nombre: ".$nombre;
    echo "</br>";
    $sqlcarreraupdate = "UPDATE carrera SET nombre='".$nombre."' WHERE id_carrera='".$id."'";
    $conn->query($sqlcarreraupdate) or die("Error al modificar los datos".mysqli_error($conn));
    //echo $sqlcarreraupdate;
    $conn->close();
    header('Location: adminregistrocarrera.php');
  }
 ?>

 <script type="text/javascript">
   alert("datos cambiados");
 </script>
