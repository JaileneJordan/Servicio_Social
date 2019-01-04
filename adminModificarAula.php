<?php
  ModificarAula($_POST['id'],$_POST['nombre']);


  function ModificarAula($id,$nombre){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');

    echo "id: ".$id;
    echo "</br>";
    echo "nombre: ".$nombre;
    echo "</br>";
    $sqlaulaupdate = "UPDATE aula SET nombre='".$nombre."' WHERE id_aula='".$id."'";
    $conn->query($sqlaulaupdate) or die("Error al modificar los datos".mysqli_error($conn));
    //echo $sqlaulaupdate;
    $conn->close();
    header('Location: adminregistroaula.php');
  }
 ?>

 <script type="text/javascript">
   alert("datos cambiados");
 </script>
