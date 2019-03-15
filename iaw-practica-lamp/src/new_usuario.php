<?php
session_start();

if ($_SESSION['logincorrecto'] != 1) {
  $_SESSION['logincorrecto'] = 0;
  header('Location: login.php');
}
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Añadir un usuario</title>

 
<link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
 
    <link href="../css/album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
       
        <strong>Añadir un usuario</strong>
        <strong><a href="logout.php">Salir</a></strong>
      </a>
     
    </div>
  </div>
</header>

<main role="main">

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
    <div class="col-md-4"></div>
   
        <form action="add_usuario.php" method="post">
            <div class="form-group">
                <label for="name">Nombre del usuario</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required="required">
            </div>

            <div class="form-group">
                <label for="age">Edad</label>
                <input type="number" name="age" id="age" min="0" class="form-control" required="required" placeholder="Edad" >
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="mail" class="form-control" placeholder="Email" required="required" >
            </div>

            <div class="form-group">
              <label for="passwd">Contraseña</label>
              <input type="password" class="form-control-file" name= "passwd" id="passwd" required="required">
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Subir</button>
        </form>
    
    
    </div>
  </div>
</div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="panel_usuarios.php">Volver panel de control</a>
    </p>
    <p>Añadir usuario&copy;</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>