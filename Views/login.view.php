<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

    <title>Login </title>

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
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
              <h1>Inicio de Sesión</h1>
                <div>
                    <input type="text" name="Username" class="form-control" placeholder="Usuario" required="" />
                </div>
                <div>
                    <input type="password" name="Password" class="form-control" placeholder="Contraseña" required="" />
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
                <button class="btn btn-default submit" name="submit" type="submit">Ingresar</button>
                <a class="reset_pass" href="#">¿Olvidaste tu Contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-calculator"></i> Ciencias Básicas</h1>
                  <p>©2018 Todos los Derechos Reservados. Ciencias Básicas-Universidad Politécnica de Querétaro</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
