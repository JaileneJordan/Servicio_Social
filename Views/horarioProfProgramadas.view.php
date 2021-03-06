<?php
  $conexion = conexion($bd_config);
  $profesor = IniciarSesion('usuario',$conexion);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <title>Profesor</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.3.1.min"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo RUTA.'validar.php' ?>" class="site_title"><i class="fa fa-calculator"></i> <span>Ciencias Básicas</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="production/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido/a,</span>
                <h2><?php 
                $matricula=$profesor['Usuario'];
                echo $profesor['Usuario'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li><a href="<?php echo RUTA.'validar.php' ?>"><i class="fa fa-home"></i>Inicio</a></li>

                  <li><a><i class="fa fa-edit"></i> Horario <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Asesorias Programadas</a></li>
                      <li><a href="horarioProfAsesoriaNoProg.php">Asesorias No Programadas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Alumnos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="listaAlumAsesoriaProg.php">Lista Asesorias Programadas</a></li>
                      <li><a href="listaAlumAsesoriaNoProg.php">Lista Asesorias no Programadas</a></li>
                    </ul>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="production/images/user.png" alt=""><?php echo $profesor['Usuario'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo RUTA.'close.php' ?>"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="right_col" >
          <h2>
            <?php
              date_default_timezone_set("Asia/Bangkok");
              echo "Fecha de inicio de sesion: ".date("Y/m/d");
            ?>
          </h2>


        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h1>Horario de Asesorias Programadas</h1>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
 <!-- Tabla dinamica -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                       <thead>
                         <tr>
                           <th>Hora Inicio</th>
                           <th>Hora Fin</th>
                           <th>Dia</th>
                           <th>Cupo</th>
                           <th>Salon</th>
                           <th>Materia</th>
                         </tr>
                       </thead>
                       <tbody>
                         <!-- Aplicadas en las celdas (<td> o <th>) -->
                         <?PHP
                           $servername = "localhost";
                           $username = "root";
                           $password = "";
                           $dbname = "asesorias_successfull";

                           $conn = new mysqli($servername, $username, $password, $dbname);
                                 $query= 'select asesoria.hora_inicio, asesoria.hora_fin, dia.dia, asesoria.cupo, aula.nombre,  materia.nombre
                         FROM asesoria INNER JOIN dia ON asesoria.id_dia=dia.id_dia
                         INNER JOIN aula ON asesoria.id_aula=aula.id_aula
                         INNER JOIN materia ON asesoria.id_materia=materia.id_materia
                         WHERE matricula_maestro="'.$matricula.'"';
                       $resultado = $conn->query($query);
                       $rows=$resultado->fetch_all();

                       foreach($rows as $row){
                       ?>
                         <tr>
                   <?PHP
                   $row[0];?>
                             <td ><?PHP echo $row[0];?></td>
                             <td ><?PHP echo $row[1];?></td>
                             <td ><?PHP echo $row[2];?></td>
                             <td ><?PHP echo $row[3];?></td>
                             <td ><?PHP echo $row[4];?></td>
                             <td ><?PHP echo $row[5];?></td>
                 <?PHP
                 }
                                        ?>
                      </tr>
                     </tbody>
                     </table>
                   </div>
                 </div>
               </div>
         <!-- Final de tabla dinamica -->

            </div>
          </div>
        </div>
        <!-- page content

          <div class="">

              LLAMAR A LAS OTRAS PAGINAS CON PHP-->

            <div class="page-title">

            </div>

            </div>
              <!--
              </div>

         /page content -->

        <!-- footer content -->
        </div>
        <footer>
          <div class="pull-right">
              ©2018 Todos los Derechos Reservados. Ciencias Básicas-<a href="https://www.upq.mx">Universidad Politécnica de Querétaro </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>
