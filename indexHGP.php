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
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Principal HGP</title>

  <!-- Incluir el CSS de Bootstrap para estilos rápidos -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <!-- Incluir tu archivo CSS personalizado después de Bootstrap -->
  <link rel="stylesheet" href="assets/css/estilo.css" />
  <!-- Incluir Font Awesome para los íconos -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Incluir tu archivo CSS personalizado después de Bootstrap -->
  <link rel="stylesheet" href="assets/css/estilo.css" />
</head>

<body>
  <!-- Barra de navegación -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#menu"
          aria-controls="menu"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
        <a class="nav-link active" href="#">Inicio</a>
      </li> -->
            <!-- Menú desplegable -->
            <li class="nav-item dropdown">
            <li class="nav-item dropdown">
              <a class="nav-link active d-flex align-items-center" href="#">
                <img
                  src="assets/imagenes/imssCompleto.png"
                  alt="Inicio"
                  style="width: 200px; height: 50px; margin-right: 10px" />
              </a>
            </li>

            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              Formatos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Formato 1</a></li>
              <li><a class="dropdown-item" href="#">Formato 2</a></li>
              <li><a class="dropdown-item" href="#">Formato 3</a></li>
            </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pendientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pasantes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cerrar sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Contenido principal -->
  <main class="container">
    <h1>PANTALLA PRINCIPAL DEL SISTEMA</h1>

    <div class="content">
      <h4>Requisiciones</h4>
      <div class="highlight">
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Folio</th>
                  <th scope="col">Actividad</th>
                  <th scope="col">Partida</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Mes a Afectar</th>
                  <th scope="col">Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>REQ001</td>
                  <td>Mantenimiento de equipo</td>
                  <td>Partida 101</td>
                  <td>2024-11-01</td>
                  <td>Noviembre</td>
                  <td>$1500.00</td>
                  <td><a href="#" class="edit-btn">Editar</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>REQ002</td>
                  <td>Compra de equipo</td>
                  <td>Partida 102</td>
                  <td>2024-11-02</td>
                  <td>Noviembre</td>
                  <td>$3200.00</td>
                  <td><a href="#" class="edit-btn">Editar</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <p>© 2024 Hospital General de Pachuca - Todos los derechos reservados</p>
  </footer>

  <!-- Incluir el JS de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>