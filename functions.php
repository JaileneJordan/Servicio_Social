<?php
    function conexion($bd_config){
        try{
            $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'],$bd_config['user'],$bd_config['pass']);
            return $conexion;
        }catch (PDOException $e){
            return false;
        }

    }
    function ClearDate(){
        $datos = trim($datos);
        $datos = htmlspecialchars($datos);
        $datos = filter_var($datos, FILTER_SANITIZE_STRING);
        return $datos;
    }
    function IniciarSesion($table,$conexion){
        $statement = $conexion->prepare("SELECT * FROM $table WHERE Usuario = :Usuario");
        $statement -> execute([
            ':Usuario' => $_SESSION['usuario']
        ]);
        return $statement -> fetch(PDO::FETCH_ASSOC);
    }
?>
