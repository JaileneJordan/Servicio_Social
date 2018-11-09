<?php session_start();
    require 'admin/config.php';
    require 'functions.php';
    //comprobar la sesion
    if(isset($_SESSION['usuario'])){
        //validar los datos
        $conexion = conexion($bd_config);
        $usuario = IniciarSesion('usuario',$conexion);
        if($usuario['tipo_usuario']==1){
            $name = '<h2>'.$usuario['Usuario'].'</h2>';
            header('Location: '.RUTA.'admin.php');
        }
        else if($usuario['tipo_usuario']==2){
            $name = '<h2>'.$usuario['Usuario'].'</h2>';
            header('Location: '.RUTA.'profesor.php');
        }
        else if($usuario['tipo_usuario']==3){
            $name = '<h2>'.$usuario['Usuario'].'</h2>';
            header('Location: '.RUTA.'alumno.php');
        }
    }else{
        header('Loaction: '.RUTA.'Login.php');
    }
?>
