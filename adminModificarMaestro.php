<?php
  ModificarMaestro($_POST['id'],$_POST['nombre'],$_POST['ap'],$_POST['am']);


  function ModificarMaestro($id,$nombre,$ap,$am){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');

    echo "id: ".$id;
    echo "</br>";
    echo "nombre: ".$nombre;
    echo "</br>";
    echo "apellido_paterno: ".$ap;
    echo "</br>";
    echo "apellido_materno: ".$am;
    echo "</br>";
    $sqlmaestroupdate = "UPDATE maestro SET matricula_maestro='".$id."', nombre='".$nombre."', apellido_paterno='".$ap."', apellido_materno='".$am."'  WHERE matricula_maestro='".$id."'";
    $conn->query($sqlmaestroupdate) or die("Error al modificar los datos".mysqli_error($conn));
    //echo $sqlmaestroupdate;
    $conn->close();
    header('Location: adminvermaestros.php');
  }
 ?>

 <script type="text/javascript">
   alert("datos cambiados");
 </script>
