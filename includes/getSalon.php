<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asesorias_successfull";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $materia=$_POST['id_materia'];
    //$querym="SELECT id_aula FROM asesoria WHERE id_materia=$materia";
    $rs=$mysqli->query("SELECT id_aula FROM asesoria WHERE id_materia=$materia");
    

    $html="<option selected disabled>Elegir...</option>";
    while ($rowm=$rs->fetch_assoc()) {
    	$html.= "<option value='".$row['id_aula']."'>".$row['id_aula']."</option>";
    }
    echo $html;
?>