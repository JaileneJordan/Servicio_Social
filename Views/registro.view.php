<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crear Cuenta</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
        <div>
          
                <div class="login_wrapper">
                  <div class="animate form login_form">
                    <section class="login_content">
                      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <h1>Create Account</h1>
                            <div>
                              <input type="text" name="Usuario" class="form-control" placeholder="Usuario" />
                            </div>
                            
                            <div>
                              <input type="password" name="Password" class="form-control" placeholder="Password" />
                            </div>
                            <div>
                              <select class="select2-single form-control" name="ROL">
                                <option value="">Seleccione Privilegios</option>
                                <option value="1">Administrador</option>
                                <option value="2">Profesor</option>
                                <option value="3">Alumno</option>
                              </select>
                            </div>
                            <div>
                              <?php
                                if(!empty($error)):
                              ?>
                                <ul>
                                  <?php echo $error ?>
                                </ul>
                              <?php
                                endif;
                              ?>
                              <button class="btn btn-default submit" name="submit" type="submit">Registrar</button>
                            </div>
              
                            <div class="clearfix"></div>
              
                            <div class="separator">
                              <p class="change_link">Already a member ?
                                <a href="<?php echo RUTA.'Login.php' ?>" class="to_register"> Log in </a>
                              </p>
              
                              <div class="clearfix"></div>
                              <br />
              
                              <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                              </div>
                            </div>
                      </form>
                    </section>
                  </div>
                </div>
              </div>
  </body>
</html>
