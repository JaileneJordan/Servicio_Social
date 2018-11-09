<?php session_start();
    require 'admin/config.php';
    require 'functions.php';

    if(!isset($_SESSION['usuario'])){
        header ('Location: '.RUTA.'Login.php');
    }
    $conexion = conexion($bd_config);
    $admin = IniciarSesion('usuario',$conexion);
    if($admin['tipo_usuario']==1){
        require 'Views/adminvermaestros.view.php';

    }else{
        header('Location: '.RUTA.'validar.php');
    }

?>
