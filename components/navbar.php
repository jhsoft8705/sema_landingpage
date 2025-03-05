  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg- navbar-color-fondo">
    <a href="../" class="navbar-brand d-flex align-items-center">
      <img src="../assets/img/logo.png" alt="CEMA Logo" style="height: 100px;" class="me-2">
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-3 py-lg-0">
        <a href="../" class="nav-item nav-link active">Hogar</a>
        <a href="../nosotros" class="nav-item nav-link">Nosotros</a>
        <a href="../servicios" class="nav-item nav-link">Nuestros Servicios</a>
        <a href="../contacto" class="nav-item nav-link">Contactanos</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <script>
// Function to set active nav link based on current URL
function setActiveNavLink() {
  // Get current path
  const currentPath = window.location.pathname;
  
  // Get all nav links
  const navLinks = document.querySelectorAll('.nav-link');
  
  // Remove active class from all links
  navLinks.forEach(link => {
    link.classList.remove('active');
  });
  
  // Add active class to current path link
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || 
        (currentPath === '/' && href === '../') ||
        (href !== '../' && currentPath.includes(href.replace('../', '')))) {
      link.classList.add('active');
    }
  });
}

// Run when page loads
document.addEventListener('DOMContentLoaded', setActiveNavLink);
</script>
