<?php
  $ruta="images/asesorias_np";
  $archivo=$_FILES['imagen']['tmp_name'];
  $nombreArchivo=$_FILES['imagen']['name'];
  move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
  $rutacompleta=$ruta."/".$nombreArchivo;
  echo $rutacompleta;
  echo "<img src='".$rutacompleta."'>";

  $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sqlimagen = "INSERT INTO image (title, folder, src) VALUES ('Asesorias No Programadas','".$ruta."','".$rutacompleta."')";
    $conn->query($sqlimagen) or die("Error al ingresar los datos".mysqli_error($conn));
    $conn->close();
  
  header('Location: adminasesorianoprog.php');
?>
