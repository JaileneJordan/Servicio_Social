<?php
  ModificarAlumno($_POST['id'],$_POST['nombre'],$_POST['ap'],$_POST['am'],$_POST['id_grupo'],$_POST['id_carrera']);


  function ModificarAlumno($id,$nombre,$ap,$am,$id_grupo,$id_carrera){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');

    echo "id: ".$id;
    echo "</br>";
    echo "nombre: ".$nombre;
    echo "</br>";
    echo "ap: ".$ap;
    echo "</br>";
    echo "am: ".$am;
    echo "</br>";
    echo "grupo: ".$id_grupo;
    echo "</br>";
    echo "carrera: ".$id_carrera;
    echo "</br>";
    $sqlalumnoupdate = "UPDATE alumno SET matricula='".$id."', nombre='".$nombre."', apellido_paterno='".$ap."', apellido_materno='".$am."', id_grupo='".$id_grupo."', id_carrera='".$id_carrera."' WHERE matricula='".$id."'";
    $conn->query($sqlalumnoupdate) or die("Error al modificar los datos".mysqli_error($conn));
    //echo $sqlalumnoupdate;
    $conn->close();
    header('Location: adminveralumnos.php');
  }
 ?>

 <script type="text/javascript">
   alert("datos cambiados");
 </script>
