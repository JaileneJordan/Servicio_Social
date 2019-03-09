<?php

include "db.php";
include "class.upload.php";

/// mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




  $handle = new Upload($_FILES["image"]);
  if ($handle->uploaded) {
    $handle->Process("uploads/");
    if ($handle->processed) {
    	// usamos la funcion insert_img de la libreria db.php
    	insert_img($_POST["title"],"uploads/",$handle->file_dst_name);
      //te falta implementar el query en la badge
    /*  $query = INSERT INTO image_carousel  VALUES ("uploads/".$handle->file_dst_name."")
      $execute = mysqli_query($conexion, $query);

      if ($execute){
          //si se ejecutó el $query
          echo "CONSULTA EXITOSA";
      }else{

      }
      */
    } else {
      echo 'Error: ' . $handle->error;
    }
  } else {
    echo 'Error: ' . $handle->error;
  }
  unset($handle);
  header("Location: ../admincarousel.php");

?>
