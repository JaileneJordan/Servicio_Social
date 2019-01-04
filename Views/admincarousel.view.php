<?php
  $conexion = conexion($bd_config);
  $admin = IniciarSesion('usuario',$conexion);
  include "admin/db.php";
   $images = get_imgs();
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
    <title>Administrador</title>

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
                <span>Bienvenido,</span>
                <h2><?php echo $admin['Usuario'] ?></h2>
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

                  <li><a><i class="fa fa-edit"></i> Asesorias <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo RUTA.'adminregistroasesoria.php' ?>">Alta</a></li>
                      <li><a href="<?php echo RUTA.'adminprogramadas.php' ?>">Programadas</a></li>
                      <li><a href="<?php echo RUTA.'adminasesorianoprog.php' ?>">No Programadas</a></li>
                      <li><a href="<?php echo RUTA.'adminasesoriaregistroalumno.php' ?>">Ver Alumnos Registrados</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-graduation-cap"></i> Alumnos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo RUTA.'registraralumno.php' ?>">Alta</a></li>
                      <li><a href="<?php echo RUTA.'adminveralumnos.php' ?>">Ver Alumnos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Maestros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo RUTA.'registrarmaestro.php' ?>">Alta</a></li>
                      <li><a href="<?php echo RUTA.'adminvermaestros.php' ?>">Ver Maestros</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-plus"></i> Agregar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo RUTA.'adminregistromaterias.php' ?>">Materias</a></li>
                      <li><a href="<?php echo RUTA.'adminregistrogrupo.php' ?>">Grupos</a></li>
                      <li><a href="<?php echo RUTA.'adminregistrocarrera.php' ?>">Carreras</a></li>
                      <li><a href="<?php echo RUTA.'adminregistroaula.php' ?>">Aulas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Administrar Carousel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Administrar</a></li>
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
                    <img src="production/images/user.png" alt=""><?php echo $admin['Usuario'] ?>
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
          <h1>Carrucel de Imágenes</h1>
          <div class="page-title">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h3>Subir imágen para Carrucel</h3>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="col-md-12">
                		<a href="../Servicio_Social/admin/form.php" class="btn btn-default">Agregar Imágen</a>
                		<br><br>
                		<?php if(count($images)>0):?>
                				<table class="table table-bordered">
                					<thead>
                						<th>Imagen</th>
                						<th>Texto a mostrar</th>
                						<th>
                					</thead>
                			<?php foreach($images as $img):?>
                				<tr>
                				<td><img src="<?php echo $img->folder.$img->src; ?>" style="width:240px;">				</td>
                				<td><?php echo $img->title; ?></td>
                				<td>
                				<a class="btn btn-success" href="../Servicio_Social/admin/download.php?id=<?php echo $img->id; ?>">Descargar</a>
                				<a class="btn btn-danger" href="../Servicio_Social/admin/delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
                			</td>
                				</tr>
                			<?php endforeach;?>
                    </table>
                		<?php else:?>

                			<h4 class="alert alert-warning">No hay imagenes!</h4>
                		<?php endif; ?>
                  </div>
                </div>
              </div>
             </div>

          </div>
        </div>
        <!-- footer content -->

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
