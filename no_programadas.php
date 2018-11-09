<?php session_start();
    require 'admin/config.php';
    require 'functions.php';

    if(!isset($_SESSION['usuario'])){
        header ('Location: '.RUTA.'Login.php');
    }
    $conexion = conexion($bd_config);
    $alumno = IniciarSesion('usuario',$conexion);
    if($alumno['tipo_usuario']==3){
        require 'Views/no_programadas.view.php';

    }else{
        header('Location: '.RUTA.'validar.php');
    }

?>
