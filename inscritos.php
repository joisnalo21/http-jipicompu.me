<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jornadas de Desarrollo de Software</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="contenedor">
          <div class="logo"><i class="fas fa-microchip"></i> NOVA-Tech</div>
          <a href="./">Inicio</a>
          <a href="./#art1">Talleres</a>
          <a href="#">Inversión</a>
          <a href="formulario.html">Registro</a>
          <a href="inscritos.php">Inscritos</a>
        </div>
      </nav>
    </header>
    <main id="blog">
      <div class="contenedor2">
        <h2>Listado de Inscritos al evento</h2>
        <?php
          include("dll/config.php");
          include("dll/class_mysqli_7.php");

          $miconexion = new clase_mysqli7;
          $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
          $miconexion->consulta("select id, nombres, correo, dni from inscritos");
          $miconexion->verconsulta();
        ?>
      </div>  
    </main>
    <footer>
      <div class="contenedor-imagen">
        <img src="images/slider2.jpg" alt="" />
      </div>
      <nav class="navbar">
        <div class="contenedor">
          <a href="#">Inicio</a>
          <a href="#">Servicios</a>
          <a href="#">Precios</a>
          <a href="#">Compañía</a>
          <a href="#">Soporte</a>
        </div>
      </nav>
    </footer>
  </body>
</html>
