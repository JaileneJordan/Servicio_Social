<?php session_start();
    require 'admin/config.php';
    require 'functions.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['Usuario'];
        $password = $_POST['Password'];
        $rol = $_POST['ROL'];
        if($rol=='1'){
            $Admin = 1;
            $Prof = 0;
            $Alum = 0;
        }
        if($rol=='2'){
           $Admin = 0;
           $Prof = 1;
           $Alum = 0;
       }
       if($rol=='3'){
           $Admin = 0;
           $Prof = 0;
           $Alum = 1;
       }
        $error ='';

        if(empty($usuario) || empty($password) || empty($rol)){
            $error .= '<li class="error">LLene todos los campos</li>';
        }else{
            $conexion = conexion($bd_config);
            $statement = $conexion->prepare('SELECT * FROM usuario WHERE Usuario = :Usuario LIMIT 1');
            $statement ->execute([
                ':Usuario' => $usuario
            ]);
            $resultado = $statement->fetch();
            if($resultado != false){
                $error .= '<li class="error">Ya esta activada la cuenta</li>';
            }
        }

        if($error == ''){
            
            
            $conexion = conexion($bd_config);
            $statement = $conexion -> prepare('INSERT INTO usuario (id, Usuario, password, Administrador, Profesor, Alumno)
             VALUES(null, :Usuario, :Password, :Administrador, :Profesor, :Alumno)');
             
            $statement->execute([
                ':Usuario' =>$usuario,
                ':Password'=> $password,
                ':Administrador' => $Admin,
                ':Profesor' => $Prof,
                ':Alumno' => $Alum
            ]);
            header('Location: '.RUTA.'Login.php');
        }

    }

    require 'Views/registro.view.php';
?>