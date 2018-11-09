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
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                <span>Bienvenido/a,</span>
                <h2><?php echo $profesor['Usuario'] ?></h2>
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
                      <li><a href="horarioProfeAsesoriaProgramada.php">Asesorias Programadas</a></li>
                      <li><a href="horarioProfAsesoriaNoProg.php">Asesorias No Programadas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Alumnos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Lista Asesorias Programadas</a></li>
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
              <h1>Lista de Alumnos en Asesorias Programadas</h1>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">
              <div class="col-md-3">
                  <h2>Materia</h2>
                    <select class="form-control">
                      <option selected disabled>Elegir...</option>
                      <option>Álgebra</option>
                      <option>Calculo Diferencial</option>
                      <option>Cálculo Integral</option>
                      <option>Ecuaciones Diferenciales</option>
                    </select>
                  </div>

                  <div class="col-md-3">
                    <h2>Día</h2>
                      <select class="form-control">
                        <option selected disabled>Elegir...</option>
                        <option>Lunes</option>
                        <option>Martes</option>
                        <option>Miércoles</option>
                        <option>Jueves</option>
                        <option>Viernes</option>
                        <option>Sábado</option>
                      </select>
                  </div>

                  <div class="col-md-3">
                  <h2>Hora</h2>
                  <select class="form-control">
                    <option selected disabled>Elegir...</option>
                    <option>07:00</option>
                    <option>07:50</option>
                    <option>08:40</option>
                    <option>09:30</option>
                    <option>10:20</option>
                    <option>11:10</option>
                    <option>12:00</option>
                    <option>12:50</option>
                    <option>13:40</option>
                    <option>14:00</option>
                    <option>14:50</option>
                    <option>15:40</option>
                    <option>16:30</option>
                    <option>17:20</option>
                    <option>18:00</option>
                    <option>18:10</option>
                    <option>19:00</option>
                    <option>19:50</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <h2>Aula</h2>
                  <select class="form-control">
                    <option selected disabled>Elegir...</option>
                    <option>C203</option>
                    <option>N104</option>
                    <option>C205</option>
                    <option>C103</option>
                  </select>
                </div>
                <button type="button" class="btn btn-dark">Mostrar Lista</button>


              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">Matrícula </th>
                      <th class="column-title">Nombre </th>
                      <th class="column-title">Grupo </th>
                      <th class="column-title">Carrera </th>
                      <th class="column-title">Asistencia </th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="even pointer">
                      <td>121000040</td>
                      <td>Fabiola Jordán Martínez</td>
                      <td>S123 </td>
                      <td>Sistemas Computacionales</td>
                      <td>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="checkbox" class="icheckbox_flat-green hover checked" style="position: relative;">
                        </div>
                      </td>
                    </tr>
                    <tr class="odd pointer">
                      <td>121000039</td>
                      <td>Luis Enrique Infante Flores</td>
                      <td>S123 </td>
                      <td>Sistemas Computacionales</td>
                      <td>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="checkbox" class="icheckbox_flat-green hover checked" style="position: relative;">
                        </div>
                      </td>
                    </tr>
                    <tr class="even pointer">
                      <td>121000038</td>
                      <td>Melissa Zamora Mendoza</td>
                      <td>S123 </td>
                      <td>Sistemas Computacionales</td>
                      <td>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="checkbox" class="icheckbox_flat-green hover checked" style="position: relative;">
                        </div>
                      </td>
                    </tr>
                    <tr class="odd pointer">
                      <td>121000037</td>
                      <td>Sergio Rivas</td>
                      <td>S123 </td>
                      <td>Sistemas Computacionales</td>
                      <td>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="checkbox" class="icheckbox_flat-green hover checked" style="position: relative;">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-dark">Guardar</button>
              </div>


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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  </body>
</html>
