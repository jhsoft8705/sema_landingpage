<!-- Navbar-->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg- navbar-color-fondo">
  <a href="<?php echo Conectar::ruta(); ?>" class="navbar-brand d-flex align-items-center">
    <img src="<?php echo Conectar::ruta(); ?>/assets/img/logo.png" alt="CEMA Logo" style="height: 100px;" class="me-2">
  </a>
  <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-3 py-lg-0">
      <a href="<?php echo Conectar::ruta(); ?>" class="nav-item nav-link" id="nav-home">Hogar</a>
      <a href="<?php echo Conectar::ruta(); ?>/nosotros" class="nav-item nav-link" id="nav-nosotros">Nosotros</a>
      <a href="<?php echo Conectar::ruta(); ?>/servicios" class="nav-item nav-link" id="nav-servicios">Nuestros
        Servicios</a>
      <a href="<?php echo Conectar::ruta(); ?>/contacto" class="nav-item nav-link" id="nav-contacto">Contactanos</a>
    </div>
  </div>
</nav>
<!-- Navbar End -->

<script>
  // Función para establecer el enlace activo basado en la URL actual
  function setActiveNavLink() {
    // Obtener la ruta actual completa
    const currentPath = window.location.pathname;
    // Convertir a minúsculas para comparación sin distinción entre mayúsculas y minúsculas
    const currentPathLower = currentPath.toLowerCase();

    // Obtener todos los enlaces de navegación
    const navLinks = document.querySelectorAll('.nav-link');

    // Primero, eliminar la clase 'active' de todos los enlaces
    navLinks.forEach(link => {
      link.classList.remove('active');
    });

    // Detectar secciones específicas
    if (currentPathLower.includes('/nosotros')) {
      document.getElementById('nav-nosotros').classList.add('active');
    }
    else if (currentPathLower.includes('/servicios')) {
      document.getElementById('nav-servicios').classList.add('active');
    }
    else if (currentPathLower.includes('/contacto')) {
      document.getElementById('nav-contacto').classList.add('active');
    }
    // Si es la página de inicio o ninguna de las otras secciones
    else if (currentPathLower === '/' ||
      currentPathLower.endsWith('/index.php') ||
      currentPathLower.endsWith('/index.html') ||
      !currentPathLower.includes('/nosotros') &&
      !currentPathLower.includes('/servicios') &&
      !currentPathLower.includes('/contacto')) {
      document.getElementById('nav-home').classList.add('active');
    }
  }

  // Ejecutar cuando la página carga
  document.addEventListener('DOMContentLoaded', setActiveNavLink);
</script>