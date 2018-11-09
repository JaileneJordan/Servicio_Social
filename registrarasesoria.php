<?php session_start();
    require 'admin/config.php';
    require 'functions.php';

    if(!isset($_SESSION['usuario'])){
        header ('Location: '.RUTA.'Login.php');
    }
    $conexion = conexion($bd_config);
    $alumno = IniciarSesion('usuario',$conexion);
    if($alumno['tipo_usuario']==3){
        $materia=$_POST['materia'];
        $salon=$_POST['salon'];
        $dia=$_POST['dia'];
        $hora=$_POST['hora'];

        echo "$materia";
        echo "$salon";
        echo "$dia";
        echo "$hora";

        $query="Insert into ";
        //require 'Views/alumno.view.php';

    }else{
        header('Location: '.RUTA.'validar.php');
    }
?>
