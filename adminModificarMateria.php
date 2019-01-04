<?php
  ModificarMateria($_POST['id'],$_POST['nombre']);


  function ModificarMateria($id,$nombre){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');

    echo "id: ".$id;
    echo "</br>";
    echo "nombre: ".$nombre;
    echo "</br>";
    $sqlmateriaupdate = "UPDATE materia SET nombre='".$nombre."' WHERE id_materia='".$id."'";
    $conn->query($sqlmateriaupdate) or die("Error al modificar los datos".mysqli_error($conn));
    echo $sqlmateriaupdate;
    $conn->close();
    header('Location: adminregistromaterias.php');
  }
 ?>

 <script type="text/javascript">
   alert("datos cambiados");
 </script>
