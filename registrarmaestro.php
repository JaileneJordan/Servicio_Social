<?php session_start();
    require 'admin/config.php';
    require 'functions.php';

    if(!isset($_SESSION['usuario'])){
        header ('Location: '.RUTA.'Login.php');
    }
    $conexion = conexion($bd_config);
    $alumno = IniciarSesion('usuario',$conexion);
    if($alumno['tipo_usuario']==1){
        require 'Views/registrarmaestro.view.php';

    }else{
        header('Location: '.RUTA.'validar.php');
    }

?>
