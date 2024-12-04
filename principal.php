<!-- <?php

      session_start();

      if (!isset($_SESSION['usuario'])) {
        echo '
        <script>
            alert("FAVOR DE INICIAR SESSION");
            window.location = "index.php";
        </script>    
        
        ';
        session_destroy();
        die();
      }

      ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Principal HGP</title>
  <link rel="stylesheet" href="assets/css/barra.css" />
</head>

<body>
  <header class="header">
    <div class="logo">
      <img src="assets/imagenes/imssb_logo.png" alt="Logo del Hospital" />
    </div>
    <nav>
      <ul class="nav-links">
        <li><a href="Formatos">Formatos</a></li>
        <li><a href="Pendientes">Pendientes</a></li>
        <li><a href="Pasantes">Pasantes</a></li>
      </ul>
    </nav>
    <a href="php/cerrar_sesion.php" class="btn"><button>Cerrar Sesion</button></a>
  </header>
  <!-- Sección central del área de TIC -->
  <main class="main-content">
    <div class="center-image">
      <img
        src="assets/imagenes/principal.avif"
        alt="Soporte Técnico y Redes" />
    </div>
    <div class="info-section">
      <h1>Área de Tecnologías de la Información</h1>
      <p>
        Bienvenido al área de Tecnologías de la Información del Hospital
        General de Pachuca. Nos especializamos en brindar soporte técnico en
        redes, mantenimiento de sistemas de cómputo y soluciones informáticas
        integrales para optimizar la eficiencia operativa de nuestras
        instalaciones.
      </p>
    </div>
  </main>
</body>

</html>