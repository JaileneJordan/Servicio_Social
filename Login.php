<?php session_start();
    require 'admin/config.php';
    require 'functions.php';

    $error = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['Username'];
        $password = $_POST['Password'];
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('SELECT * FROM usuario WHERE Usuario = :Usuario AND password = :password');
        $statement -> execute([
            ':Usuario' => $usuario,
            ':password' => $password
        ]);
        $resultado = $statement -> fetch();
        if($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header ('Location: '.RUTA.'validar.php');
        }else{
            $error = '<li class="error">Usuario o contraseño no son validas</li>';
        }
    }

    require 'Views/login.view.php';
?>
