<?php session_start();

  require 'admin/config.php';
  require 'functions.php';
  $conexion = conexion($bd_config);
  $admin = IniciarSesion('usuario',$conexion);

  $consulta = ConsultarAsesoria($_GET['id']);

  function ConsultarAsesoria($id){
    $conn=new mysqli('localhost', 'root', '', 'asesorias_successfull');
    $sentencia = "SELECT * FROM asesoria WHERE id_asesoria='".$id."'";
    $resultado = $conn->query($sentencia) or die ("Error al cargar datos".mysqli_error($conn));
    $fila = $resultado->fetch_assoc();

    return[
      $fila['id_asesoria'],
      $fila['tipo_asesoria'],
      $fila['hora_inicio'],
      $fila['hora_fin'],
      $fila['id_dia'],
      $fila['cupo'],
      $fila['id_aula'],
      $fila['id_materia'],
      $fila['id_carrera'],
      $fila['matricula_maestro']
    ];
  }

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
  <!-- iCheck -->
  <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->
  <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
                <li><a href="<?php echo RUTA.'admin.php' ?>"><i class="fa fa-home"></i>Inicio</a></li>

                  <li><a><i class="fa fa-edit"></i> Asesorias <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo RUTA.'adminregistroasesoria.php' ?>">Alta</a></li>
                      <li><a href="#">Programadas</a></li>
                      <li><a href="<?php echo RUTA.'adminasesorianoprog.php' ?>">No Programadas</a></li>
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
                  <li><a><i class="fa fa-image"></i> Administrar Carousel <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo RUTA.'admincarousel.php' ?>">Administrar</a></li>
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
              date_default_timezone_set("America/Mexico_City");
              echo "Fecha de inicio de sesion: ".date("Y/m/d");
            ?>
          </h2>
        <!-- page content

          <div class="">

              LLAMAR A LAS OTRAS PAGINAS CON PHP-->

            <div class="page-title">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Editar Asesoria</h1>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>


                    <form  data-parsley-validate class="form-horizontal form-label-left" method="POST" action="adminModificarAsesoria.php" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id" >Id Asesoria <span class="required">*</span>
                        </label>
                        <div class="col-md-3" >
                          <input type="hidden" name="id" id="id" value="<?php echo $consulta[0]; ?>">
                          <input type="text" name="id" id="id"  disabled value="<?php echo $consulta[0]; ?>"><br>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_asesoria">Tipo de Asesoria <span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                          <select class="form-control" name="tipo_asesoria">
                            <option selected ><?php echo $consulta[1]; ?></option>
                            <option value="programadas">Programada</option>
                            <option value="no_programadas">No programada</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_inicio">Hora inicio <span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                          <select class="form-control" name="hora_inicio">
                            <option selected ><?php echo $consulta[2]; ?></option>
                            <option value="07:00:00">07:00</option>
                            <option value="07:50:00">07:50</option>
                            <option value="08:40:00">08:40</option>
                            <option value="09:30:00">09:30</option>
                            <option value="10:20:00">10:20</option>
                            <option value="11:10:00">11:10</option>
                            <option value="12:00:00">12:00</option>
                            <option value="12:50:00">12:50</option>
                            <option value="14:00:00">14:00</option>
                            <option value="14:50:00">14:50</option>
                            <option value="15:40:00">15:40</option>
                            <option value="16:30:00">16:30</option>
                            <option value="17:20:00">17:20</option>
                            <option value="18:10:00">18:10</option>
                            <option value="19:00:00">19:00</option>
                            <option value="19:50:00">19:50</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hora_fin">Hora fin <span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                          <select class="form-control" name="hora_fin">
                            <option selected ><?php echo $consulta[3]; ?></option>
                            <option value="07:50:00">07:50</option>
                            <option value="08:40:00">08:40</option>
                            <option value="09:30:00">09:30</option>
                            <option value="10:20:00">10:20</option>
                            <option value="11:10:00">11:10</option>
                            <option value="12:00:00">12:00</option>
                            <option value="12:50:00">12:50</option>
                            <option value="14:00:00">14:00</option>
                            <option value="14:50:00">14:50</option>
                            <option value="15:40:00">15:40</option>
                            <option value="16:30:00">16:30</option>
                            <option value="17:20:00">17:20</option>
                            <option value="18:10:00">18:10</option>
                            <option value="19:00:00">19:00</option>
                            <option value="19:50:00">19:50</option>
                            <option value="20:40:00">20:40</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_dia">Día <span class="required">*</span>
                        </label>
                          <div class="col-md-3">
                            <select class="form-control" name="id_dia">
                              <option selected ><?php echo $consulta[4]; ?></option>
                              <?php
                                $mysqli = new mysqli('localhost', 'root', '', 'asesorias_successfull');
                                $query = $mysqli -> query ("SELECT * FROM dia");
                                while ($valores = mysqli_fetch_array($query)) {
                                  echo '<option value="'.$valores[id_dia].'">'.$valores[dia].'</option>';
                                }
                              ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cupo">Cupo <span class="required">*</span>
                          </label>
                            <div class="col-md-3" >
                              <input type="text" name="cupo" value="<?php echo $consulta[5]; ?>"><br>
                            </div>
                          </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_aula">Aula <span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                          <select class="form-control" name="id_aula">
                            <option selected ><?php echo $consulta[6]; ?></option>
                            <?php
                              $mysqli = new mysqli('localhost', 'root', '', 'asesorias_successfull');
                              $query = $mysqli -> query ("SELECT * FROM aula");
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[id_aula].'">'.$valores[nombre].'</option>';
                              }
                            ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_materia">Materia <span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                                <select class="form-control" name="id_materia">
                                  <option selected ><?php echo $consulta[7]; ?></option>
                                  <?php
                                    $mysqli = new mysqli('localhost', 'root', '', 'asesorias_successfull');
                                    $query = $mysqli -> query ("SELECT * FROM materia");
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="'.$valores[id_materia].'">'.$valores[nombre].'</option>';
                                    }
                                  ?>
                                </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_carrera">Carrera <span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                                <select class="form-control" name="id_carrera">
                                  <option selected ><?php echo $consulta[8]; ?></option>
                                  <?php
                                    $mysqli = new mysqli('localhost', 'root', '', 'asesorias_successfull');
                                    $query = $mysqli -> query ("SELECT * FROM carrera");
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="'.$valores[id_carrera].'">'.$valores[nombre].'</option>';
                                    }
                                  ?>
                                </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matricula_maestro">Maestro <span class="required">*</span>
                        </label>
                        <div class="col-md-3">
                                <select class="form-control" name="matricula_maestro">
                                  <option selected ><?php echo $consulta[9]; ?></option>
                                  <?php
                                    $mysqli = new mysqli('localhost', 'root', '', 'asesorias_successfull');
                                    $query = $mysqli -> query ("SELECT * FROM maestro");
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="'.$valores[matricula_maestro].'">'.$valores[nombre].'</option>';
                                    }
                                  ?>
                                </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary" name="guardar">Guardar Cambios</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
              <!--


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
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>
