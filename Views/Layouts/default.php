<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>First Rush ! Good luck, have fun !</title>

    <!-- Bootstrap core CSS -->
    <link href="/PHP_Rush_MVC/Webroot/Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/PHP_Rush_MVC/Webroot/Css/shop-homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Rush MVC PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/PHP_Rush_MVC/users/redirectMain">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/PHP_Rush_MVC/users/userAdminView">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/PHP_Rush_MVC/users/controlLogin">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/PHP_Rush_MVC/users/controlregister">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

    <?php echo $content_for_layout; ?>
    
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; La Coding Academy :: 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/PHP_Rush_MVC/Vendors/js/jquery.min.js"></script>
    <script src="/PHP_Rush_MVC/Vendors/js/bootstrap.bundle.min.js"></script>

  </body>

</html>