<?php
  $conexion = conexion($bd_config);
  $admin = IniciarSesion('usuario',$conexion);
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
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

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
                      <li><a href="#">No Programadas</a></li>
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
                      <li><a href="#">Alta</a></li>
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
                    <img src="production/images/user.png" alt=""><?php echo $alumno['Usuario'] ?>
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
            echo "Fecha de inicio de sesión: ".date("Y/m/d");
          ?>
        </h2>
        <!-- page content

          <div class="">

              LLAMAR A LAS OTRAS PAGINAS CON PHP-->

            <div class="page-title">
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Registro de Maestros</h1>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="insertarmaestro.php" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matricula_maestro">Matricula <span class="required">*</span>
                        </label>
                        <div class="col-md-3" >
                          <input type="text" name="matricula_maestro"><br>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-3" >
                          <input type="text" name="nombre"><br>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido_paterno">Apellido Paterno <span class="required">*</span>
                        </label>
                        <div class="col-md-3" >
                          <input type="text" name="apellido_paterno"><br>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido_materno">Apellido Materno <span class="required">*</span>
                        </label>
                        <div class="col-md-3" >
                          <input type="text" name="apellido_materno"><br>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>

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
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

      <!-- Initialize datetimepicker -->
      <script>
        $('#myDatepicker').datetimepicker();

        $('#myDatepicker2').datetimepicker({
            format: 'DD.MM.YYYY'
        });

        $('#myDatepicker3').datetimepicker({
            format: 'hh:mm A'
        });

        $('#myDatepicker4').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

        $('#datetimepicker6').datetimepicker();

        $('#datetimepicker7').datetimepicker({
            useCurrent: false
        });

        $("#datetimepicker6").on("dp.change", function(e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });

        $("#datetimepicker7").on("dp.change", function(e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
      </script>
  </body>
</html>
