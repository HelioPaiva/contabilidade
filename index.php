<?php
require_once 'control/usuario.php';
login();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Clickou</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Acessar</h1>
                  </div>
                  <?php if (!empty($_GET['login'])) {?>
                    <div class="alert alert-danger text-center" role="alert">
                      Login ou Senha incorretos!
                    </div>
                  <?php } ?>
                  <form class="user" action="index.php" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" required=""
                      placeholder="Entre com seu e-mail">
                    </div>
                    <div class="form-group">
                      <input type="password" maxlength="25" class="form-control" name="password" required="" placeholder="Entre com sua senha">
                    </div>
                    
                    <div class="form-group">
                      <div class="text-center">
                        <a class="font-weight-bold small" href="recuperar-senha.php">Esqueceu sua senha ?</a>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" name="btn" value="envio" class="btn btn-primary btn-block">Login</button>
                      <!--<a href="home.php" class="btn btn-primary btn-block">Login</a>-->
                    </div>

                    <!--
                    <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login com conta Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login com conta Facebook
                    </a>
                  -->
                </form>

                  <!--
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="#">Crie sua conta!</a>
                  </div>
                -->
                <div class="text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Login Content -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
</body>

</html>