<?php session_start();
    require 'admin/config.php';
    require 'functions.php';

    if(!isset($_SESSION['usuario'])){
        header ('Location: '.RUTA.'Login.php');
    }
    $conexion = conexion($bd_config);
    $profesor = IniciarSesion('usuario',$conexion);
    if($profesor['tipo_usuario']==2){
        require 'Views/horarioProfNoProg.view.php';

    }else{
        header('Location: '.RUTA.'validar.php');
    }

?>
