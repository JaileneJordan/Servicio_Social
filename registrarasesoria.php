<?php session_start();
    date_default_timezone_set('UTC');
    require 'admin/config.php';
    require 'functions.php';

    if(!isset($_SESSION['usuario'])){
        header ('Location: '.RUTA.'Login.php');
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asesorias_successfull";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $conexion = conexion($bd_config);
    $alumno = IniciarSesion('usuario',$conexion);
    if($alumno['tipo_usuario']==3){
        $alumno = IniciarSesion('usuario',$conexion);
        $materia=$_POST['materia'];
        $salon=$_POST['salon'];
        $dia=$_POST['dia'];
        $hora_inicio=$_POST['hora_inicio'];
        $matricula=$alumno['Usuario'];
        /*echo $alumno['Usuario'];
        echo "<br>$materia <br>";
        echo "$salon <br>";
        echo "$dia <br>";
        echo "$hora_inicio <br>";*/
        $hoy = date("Y.m.d");
        /*echo $hoy;
        echo "<br>";*/

        $query="SELECT * FROM asesoria WHERE id_materia=$materia AND id_aula=$salon AND id_dia=$dia AND hora_inicio='".$hora_inicio."';";
        echo "$query <br>";
        $resultado = $conn->query($query);
        $rows=$resultado->fetch_all();
        foreach($rows as $row){
            $asesoria=$row[0];
            //echo $row[0];
        }

        $queryinsert="INSERT INTO registrar_asesoria (matricula_alumno,fecha,id_asesoria) VALUES('$matricula','$hoy',$asesoria);";
        //echo "<br>";
        echo $queryinsert;
        $conn->query($queryinsert) or die("Error al ingresar los datos".mysqli_error($conn));
        $conn->close();
        header('Location: control_programadas.php');

    }else{
        header('Location: '.RUTA.'validar.php');
    }
?>
