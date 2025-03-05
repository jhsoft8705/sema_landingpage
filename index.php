<?php include_once("config/conexion.php"); ?>
<script>
  var BASE_URL = "<?php echo Conectar::ruta(); ?>";
  console.log("BASE_URL definida como:", BASE_URL);
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Servicios Eléctricos en Lima | SEMA - Calidad y Seguridad</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords"
    content="servicios eléctricos Lima, instalación eléctrica, seguridad eléctrica, mantenimiento eléctrico, ingeniería eléctrica">
  <meta name="description"
    content="SEMA ofrece soluciones eléctricas en Lima. Instalación de medidores, pozos a tierra, cámaras de seguridad y más. ¡Cotiza ahora!">
  <meta name="author" content="SEMA Servicios Eléctricos">
  <link rel="canonical" href="<?php echo Conectar::ruta(); ?>">

  <?php include_once __DIR__ . "/components/head.php"; ?>

</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->


  <!-- Topbar   -->
  <?php include_once __DIR__ . "/components/topbar.php"; ?>


  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg- navbar-color-fondo">
    <a href="" class="navbar-brand d-flex align-items-center">
      <img src="assets/img/logo.png" alt="CEMA Logo" style="height: 100px;" class="me-2">
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-3 py-lg-0">
        <a href="" class="nav-item nav-link active">Hogar</a>
        <a href="nosotros" class="nav-item nav-link">Nosotros</a>
        <a href="servicios" class="nav-item nav-link">Nuestros Servicios</a>
        <a href="contacto" class="nav-item nav-link">Contactanos</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->



  <!--CAROUSEL -->
  <style>
    .border-10 {
      border-width: 10px !important;
    }

    /* Fondo con desenfoque mejorado */
    .blur-background {
      position: relative;
      z-index: 1;
      padding: 10px;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .blur-background::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.65);
      /* Fondo más oscuro para mejor contraste */
      backdrop-filter: blur(8px);
      /* Más desenfoque para un efecto más pronunciado */
      border-radius: 8px;
      z-index: -1;
      transition: all 0.3s ease;
    }

    .blur-background:hover::before {
      background: rgba(0, 0, 0, 0.75);
      /* Efecto hover */
    }

    /* Mejoras en las animaciones */
    @keyframes fadeInLeft {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInRight {
      from {
        opacity: 0;
        transform: translateX(50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes zoomIn {
      from {
        opacity: 0;
        transform: scale(0.5);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    @keyframes bounceIn {

      from,
      20%,
      53%,
      80%,
      to {
        animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
        transform: translate3d(0, 0, 0);
      }

      40%,
      43% {
        animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        transform: translate3d(0, -30px, 0);
      }

      70% {
        animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
        transform: translate3d(0, -15px, 0);
      }

      90% {
        transform: translate3d(0, -4px, 0);
      }
    }

    /* Clases para animaciones específicas */
    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
    }

    .delay-1 {
      animation-delay: 0.2s;
    }

    .delay-2 {
      animation-delay: 0.4s;
    }

    /* Mejoras para los indicadores del carousel */
    .carousel-indicators {
      bottom: 20px;
    }

    .carousel-indicators [data-bs-target] {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.5);
      margin: 0 5px;
      transition: all 0.3s ease;
    }

    .carousel-indicators .active {
      background-color: #FB8C23;
      /* Color primario para indicador activo */
      transform: scale(1.2);
    }

    /* Mejoras para los controles del carousel */
    .carousel-control-prev,
    .carousel-control-next {
      width: 50px;
      height: 50px;
      background-color: #FB8C23;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
      opacity: 0.7;
      transition: all 0.3s ease;
      z-index: 100;
      /* Asegura que estén por encima del contenido */
    }

    .carousel-control-prev {
      left: 20px;
    }

    .carousel-control-next {
      right: 20px;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
      opacity: 1;
      background-color: #FB8C23;
    }

    /* Mejoras para las imágenes */
    .carousel-item img {
      transition: transform 8s ease;
    }

    .carousel-item.active img {
      transform: scale(1.05);
    }

    /* Ajustes responsivos para el texto y controles */
    @media (max-width: 992px) {
      .carousel-caption {
        width: 80% !important;
        right: 10% !important;
        left: 10% !important;
        text-align: center;
        bottom: 10% !important;
      }

      .blur-background {
        border-left: 5px solid #FB8C23 !important;
        padding: 15px;
      }

      .carousel-control-prev,
      .carousel-control-next {
        width: 40px;
        height: 40px;
        top: calc(50% - 60px);
        /* Ajustado para que no interfiera con el texto */
      }
    }

    @media (max-width: 768px) {
      .carousel-item img {
        height: 85vh !important;
        /* Más altura para dar espacio al texto */
      }

      .carousel-caption {
        width: 90% !important;
        bottom: 15% !important;
      }

      .carousel-caption h2 {
        font-size: 1.5rem;
      }

      .carousel-caption h4 {
        font-size: 1.2rem;
      }

      .carousel-control-prev,
      .carousel-control-next {
        width: 35px;
        height: 35px;
        top: 30%;
        /* Colocados en la parte superior para evitar el texto */
      }

      .carousel-control-prev {
        left: 10px;
      }

      .carousel-control-next {
        right: 10px;
      }
    }

    @media (max-width: 576px) {
      .carousel-caption h2 {
        font-size: 1.2rem;
      }

      .carousel-caption h4 {
        font-size: 1rem;
      }

      .carousel-caption .btn {
        padding: 0.4rem 1rem !important;
        font-size: 0.9rem;
      }

      .carousel-control-prev,
      .carousel-control-next {
        width: 30px;
        height: 30px;
        top: 25%;
      }
    }
  </style>

  <div class="container-fluid p-0 mb-4 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="assets/img/planos-lanyer 1.png" alt="Planos eléctricos"
            style="height: 70vh; object-fit: cover;">
          <div class="carousel-caption d-flex justify-content-center align-items-center"
            style="right: 5%; left: auto; width: 60%; bottom: 5%;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="border-start border-5 border-primary mb-4 blur-background">
                    <h2 class="text-light text-uppercase animated fadeInLeft">PLANOS ELÉCTRICOS, SANITARIOS</h2>
                    <h4 class="text-light mb-3 animated fadeInRight delay-1">Y de arquitectura</h4>
                    <a href="servicios/index.php#planos-electricos"
                      class="btn btn-primary py-2 px-4 animated fadeInUp delay-2">Ver Más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="w-100" src="assets/img/alarma-para-servicios.png" alt="Instalación de alarmas"
            style="height: 70vh; object-fit: cover;">
          <div class="carousel-caption d-flex justify-content-center align-items-center"
            style="right: 5%; left: auto; width: 60%; bottom: 5%;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="border-start border-5 border-primary mb-4 blur-background">
                    <h2 class="text-light text-uppercase animated fadeInUp">INSTALACIÓN DE ALARMAS</h2>
                    <h4 class="text-light mb-3 animated fadeInRight delay-1">Contra incendios</h4>
                    <a href="servicios/index.php#instalacion-alarmas"
                      class="btn btn-primary py-2 px-4 animated fadeInUp delay-2">Ver Detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <img class="w-100" src="assets/img/porta-pozo-tierra.png" alt="Medición de pozo a tierra"
            style="height: 70vh; object-fit: cover;">
          <div class="carousel-caption d-flex justify-content-center align-items-center"
            style="right: 5%; left: auto; width: 60%; bottom: 5%;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="border-start border-5 border-primary mb-4 blur-background">
                    <h2 class="text-light text-uppercase animated zoomIn">MEDICIÓN Y CERTIFICACIÓN</h2>
                    <h4 class="text-light animated fadeInRight delay-1">De pozo a tierra</h4>
                    <a href="servicios/index.php#poso-tierra"
                      class="btn btn-primary py-2 px-4 animated fadeInUp delay-2">Más Información</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>



  <!--Cars-->
  <style>
    .servicios_especiales_carousel {
      position: relative;
      width: 100%;
      overflow: hidden;
      margin-bottom: 60px;
      /* Increased for indicator space */
      touch-action: pan-y;
      /* Allow vertical scrolling but handle horizontal */
    }

    .servicios_especiales_inner {
      display: flex;
      transition: transform 0.5s ease-in-out;
      width: 300%;
    }

    .servicios_especiales_slide {
      flex: 0 0 33.333%;
      max-width: 33.333%;
      box-sizing: border-box;
    }

    /* Improved dots container positioning */
    .servicios_especiales_dots {
      position: absolute;
      bottom: -40px;
      /* Moved down for better spacing */
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 12px;
      padding: 0;
      margin: 0;
      list-style: none;
      z-index: 10;
    }

    /* Enhanced dot indicators */
    .servicios_especiales_dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: #e0e0e0;
      border: none;
      opacity: 1;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      display: block;
    }

    .servicios_especiales_dot.active {
      background-color: #FA8D23;
      transform: scale(1.3);
      box-shadow: 0 1px 5px rgba(250, 141, 35, 0.4);
    }

    .servicios_especiales_item {
      height: 100%;
      margin: 0;
      padding: 0;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .servicios_especiales_item:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .servicios_especiales_content {
      height: 100%;
      padding: 20px;
      box-sizing: border-box;
    }

    .servicios_especiales_content h5 {
      font-weight: 600;
      margin-bottom: 10px !important;
    }

    .servicios_especiales_content p {
      color: #fff !important;
      margin-bottom: 15px;
      line-height: 1.5;
    }

    .servicios_especiales_content .btn {
      border-radius: 4px;
      padding: 8px 16px;
      font-weight: 500;
      transition: background-color 0.3s ease;
      box-shadow: 0 2px 4px rgba(250, 141, 35, 0.2);
    }

    .servicios_especiales_content .btn:hover {
      background-color: #e57d18 !important;
      box-shadow: 0 3px 6px rgba(250, 141, 35, 0.3);
    }

    .color-car {
      border-top: 4px solid #FA8D23;
    }

    .servicios_especiales_nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      background-color: transparent;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      z-index: 10;
      font-size: 24px;
      color: #000;
      border: none;
      transition: all 0.3s ease;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .servicios_especiales_nav:hover {
      background-color: rgba(0, 0, 0, 0.1);
      color: #FA8D23;
    }

    .servicios_especiales_nav.prev {
      left: 10px;
    }

    .servicios_especiales_nav.next {
      right: 10px;
    }

    .row.g-5 {
      --bs-gutter-y: 1rem;
      --bs-gutter-x: 1rem;
    }

    /* Improved slide indicator with circles */
    .servicios_especiales_slide_indicator {
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      bottom: -40px;
      width: 100%;
      left: 0;
      font-weight: 500;
      height: 20px;
    }

    .servicios_especiales_slide_indicator .indicator-text {
      font-size: 14px;
      color: #666;
      margin: 0 5px;
      display: inline-block;
    }

    .slide-indicator-circles {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .indicator-circle {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background-color: #ccc;
      margin: 0 2px;
      transition: all 0.3s ease;
    }

    .indicator-circle.active {
      background-color: #FA8D23;
      transform: scale(1.5);
    }

    @media (max-width: 768px) {
      .servicios_especiales_content {
        padding: 15px;
      }

      .servicios_especiales_dot {
        width: 10px;
        height: 10px;
      }

      .servicios_especiales_nav {
        width: 30px;
        height: 30px;
        font-size: 20px;
      }

      /* Improve mobile experience */
      .servicios_especiales_carousel {
        touch-action: pan-y;
        /* Only allow vertical scrolling */
      }
    }
  </style>
  <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="servicios_especiales_carousel">
        <div class="servicios_especiales_inner">
          <!-- Primera página -->
          <div class="servicios_especiales_slide active">
            <div class="row g-5">
              <!-- Servicio 1 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexcasa.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">INSTALACIONES ELÉCTRICAS</h5>
                    <p>El servicio de instalaciones eléctricas incluye la implementación y conexión segura de sistemas
                      eléctricos en viviendas</p>
                    <a href="servicios/index.php#instacion-electrica" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
              <!-- Servicio 2 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexfuga.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">DETECCIÓN DE FUGAS ELÉCTRICAS</h5>
                    <p>El servicio de detección de fugas eléctricas consiste en identificar pérdidas de corriente en el
                      sistema eléctrico de una propiedad</p>
                    <a href="servicios/index.php#deteccion-fugas" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
              <!-- Servicio 3 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexing.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">SERVICIOS DE INGENIERÍA</h5>
                    <p>El servicio de ingeniería abarca una variedad de disciplinas técnicas, desde la planificación y
                      diseño de infraestructuras hasta la supervisión de proyectos</p>
                    <a href="servicios/index.php#servicio-ingenieria" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Segunda página -->
          <div class="servicios_especiales_slide">
            <div class="row g-5">
              <!-- Servicio 4 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexcamara.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">INSTALACIÓN DE CÁMARAS DE SEGURIDAD</h5>
                    <p>El servicio de instalación de cámaras de seguridad consiste en la colocación de sistemas de
                      videovigilancia en viviendas o negocios para mejorar la seguridad</p>
                    <a href="servicios/index.php#instalacion-camaras" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
              <!-- Servicio 5 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexlicencia.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">EXP. DE LICENCIA DE FUNCIONAMIENTO</h5>
                    <p>Instalación y mantenimiento de sistemas de energía solar fotovoltaica para residencias y empresas
                    </p>
                    <a href="servicios/index.php#exp-licencia" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
              <!-- Servicio 6 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexplanos.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">PLANOS ELÉCTRICOS, SANITARIOS Y DE ARQUITECTURA</h5>
                    <p>El servicio de planos eléctricos es fundamental para tramitar la solicitud de medidores de luz,
                      ya que detalla el sistema completo</p>
                    <a href="servicios/index.php#planos-electricos" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Tercera página -->
          <div class="servicios_especiales_slide">
            <div class="row g-5">
              <!-- Servicio 7 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexmedidores.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">INSTALACIÓN DE MEDIDORES DE LUZ</h5>
                    <p>Garantiza el cumplimiento de normativas para la obtención de la licencia de manera rápida y
                      segura para su hogar o negocio</p>
                    <a href="servicios/index.php#medidores-luz" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
              <!-- Servicio 8 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexfire.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">INSTALACIÓN DE ALARMAS CONTRA INCENDIO</h5>
                    <p>El servicio de alarmas contra incendios es esencial para cumplir con los requisitos de seguridad
                      en edificios y locales comerciales</p>
                    <a href="servicios/index.php#instalacion-alarmas" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
              <!-- Servicio 9 -->
              <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="servicios_especiales_item bg-light">
                  <div class="position-relative servicios_especiales_content color-car">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                      <img src="assets/img/indexterra.png" alt="CCTV" class="img-fluid m-0"
                        style="width: 50px; height: 50px;">
                    </div>
                    <h5 class="text-primary mb-0">MEDICIÓN Y CERTIFICACIÓN DE POZO A TIERRA</h5>
                    <p>El servicio de medición y certificación de pozo a tierra garantiza que el sistema de puesta a
                      tierra de una propiedad esté funcionando correctamente</p>
                    <a href="servicios/index.php#poso-tierra" class="btn btn-sm text-white"
                      style="background-color: #FA8D23;">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation buttons -->
        <button type="button" class="servicios_especiales_nav prev" aria-label="Anterior">&lsaquo;</button>
        <button type="button" class="servicios_especiales_nav next" aria-label="Siguiente">&rsaquo;</button>

        <!-- Enhanced indicator dots -->
        <div class="servicios_especiales_dots">
          <button type="button" class="servicios_especiales_dot active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" class="servicios_especiales_dot" aria-label="Slide 2"></button>
          <button type="button" class="servicios_especiales_dot" aria-label="Slide 3"></button>
        </div>

        <!-- Improved slide indicator with circles -->
        <div class="servicios_especiales_slide_indicator">
          <div class="indicator-text"><span id="current-slide">1</span>/<span>3</span></div>
          <div class="slide-indicator-circles">
            <div class="indicator-circle active" data-slide="0"></div>
            <div class="indicator-circle" data-slide="1"></div>
            <div class="indicator-circle" data-slide="2"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Servicios Especiales Carousel
      const carousel = document.querySelector('.servicios_especiales_carousel');
      const inner = document.querySelector('.servicios_especiales_inner');
      const slides = Array.from(document.querySelectorAll('.servicios_especiales_slide'));
      const dots = Array.from(document.querySelectorAll('.servicios_especiales_dot'));
      const prevButton = document.querySelector('.servicios_especiales_nav.prev');
      const nextButton = document.querySelector('.servicios_especiales_nav.next');
      const currentSlideIndicator = document.getElementById('current-slide');
      const indicatorCircles = Array.from(document.querySelectorAll('.indicator-circle'));

      let currentSlide = 0;
      let autoplayInterval;
      let autoplayDuration = 7000; // 7 seconds between slides
      let isTouching = false;

      // Initialize the carousel
      function initCarousel() {
        // Set initial position
        goToSlide(0);

        // Add event listeners to dots
        dots.forEach((dot, index) => {
          dot.addEventListener('click', () => {
            goToSlide(index);
            resetAutoplay();
          });
        });

        // Add event listeners to indicator circles
        indicatorCircles.forEach((circle, index) => {
          circle.addEventListener('click', () => {
            goToSlide(index);
            resetAutoplay();
          });
        });

        // Add event listeners to navigation buttons
        prevButton.addEventListener('click', () => {
          goToSlide(currentSlide - 1);
          resetAutoplay();
        });

        nextButton.addEventListener('click', () => {
          goToSlide(currentSlide + 1);
          resetAutoplay();
        });

        // Start autoplay
        startAutoplay();

        // Pause on hover or touch
        carousel.addEventListener('mouseenter', pauseAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);
        carousel.addEventListener('touchstart', () => { isTouching = true; pauseAutoplay(); });
        carousel.addEventListener('touchend', () => {
          isTouching = false;
          setTimeout(startAutoplay, 1000); // Delay restart to allow user to interact
        });

        // Touch events for mobile - improved handling
        let touchStartX = 0;
        let touchStartY = 0;
        let touchEndX = 0;
        let touchEndY = 0;

        carousel.addEventListener('touchstart', (e) => {
          touchStartX = e.touches[0].clientX;
          touchStartY = e.touches[0].clientY;
          pauseAutoplay();
        }, { passive: true });

        carousel.addEventListener('touchmove', (e) => {
          if (isTouching) {
            touchEndX = e.touches[0].clientX;
            touchEndY = e.touches[0].clientY;

            // Calculate horizontal and vertical distance
            const xDiff = touchStartX - touchEndX;
            const yDiff = touchStartY - touchEndY;

            // If horizontal swipe is dominant and significant, prevent default to avoid page scrolling
            if (Math.abs(xDiff) > Math.abs(yDiff) && Math.abs(xDiff) > 30) {
              e.preventDefault();
            }
          }
        }, { passive: false });

        carousel.addEventListener('touchend', (e) => {
          touchEndX = e.changedTouches[0].clientX;
          touchEndY = e.changedTouches[0].clientY;

          // Calculate distances
          const xDiff = touchStartX - touchEndX;
          const yDiff = touchStartY - touchEndY;

          // Only handle as swipe if horizontal movement is dominant
          if (Math.abs(xDiff) > Math.abs(yDiff) && Math.abs(xDiff) > 50) {
            if (xDiff > 0) {
              // Swipe left - next slide
              goToSlide(currentSlide + 1);
            } else {
              // Swipe right - previous slide
              goToSlide(currentSlide - 1);
            }
          }

          resetAutoplay();
          setTimeout(() => { isTouching = false; }, 100);
        }, { passive: true });

        // Add keyboard navigation for accessibility
        document.addEventListener('keydown', (e) => {
          if (e.key === 'ArrowLeft') {
            goToSlide(currentSlide - 1);
            resetAutoplay();
          } else if (e.key === 'ArrowRight') {
            goToSlide(currentSlide + 1);
            resetAutoplay();
          }
        });
      }

      // Go to specific slide
      function goToSlide(slideIndex) {
        // Handle circular navigation
        if (slideIndex < 0) {
          slideIndex = slides.length - 1;
        } else if (slideIndex >= slides.length) {
          slideIndex = 0;
        }

        // Update current slide
        currentSlide = slideIndex;

        // Move the carousel
        inner.style.transform = `translateX(-${currentSlide * 33.333}%)`;

        // Update active dot
        dots.forEach((dot, index) => {
          dot.classList.toggle('active', index === currentSlide);
          dot.setAttribute('aria-current', index === currentSlide ? 'true' : 'false');
        });

        // Update indicator circles
        indicatorCircles.forEach((circle, index) => {
          circle.classList.toggle('active', index === currentSlide);
        });

        // Update text indicator
        if (currentSlideIndicator) {
          currentSlideIndicator.textContent = currentSlide + 1;
        }
      }

      // Autoplay functions
      function startAutoplay() {
        if (!isTouching && !autoplayInterval) {
          autoplayInterval = setInterval(() => {
            goToSlide(currentSlide + 1);
          }, autoplayDuration);
        }
      }

      function pauseAutoplay() {
        clearInterval(autoplayInterval);
        autoplayInterval = null;
      }

      function resetAutoplay() {
        pauseAutoplay();
        startAutoplay();
      }

      // Initialize carousel
      initCarousel();
    });
  </script>


  <!-- Quienes somos -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-image-container position-relative ps-5 pt-5 h-100" style="min-height: 400px;">
            <img class="position-absolute w-100 h-100" src="assets/img/about1.png" alt=""
              style="object-fit: cover; border-radius: 50px;">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h1 class="display-6 mb-0">¡Soluciones únicas para residencias e industrias!</h1>
            </div>
            <p>Somos una empresa con más de 5 años de experiencia en el rubro eléctrico, comprometida con brindar
              soluciones seguras y eficientes para hogares, negocios e industrias. Ofrecemos una amplia variedad de
              servicios eléctricos, que incluyen la instalación de medidores de luz, mantenimiento y reparación de
              sistemas eléctricos, así como la medición y certificación de pozos a tierra, garantizando el cumplimiento
              de normativas vigentes.
            </p>
            <p class="mb-4">Actualmente, operamos en todos los distritos de Lima y trabajamos en conjunto con las
              concesionarias Pluz Energía y Luz del Sur. Nos destacamos por nuestra calidad, profesionalismo y atención
              personalizada, asegurando soluciones rápidas y efectivas para cada necesidad. ¡Confía en nosotros para un
              servicio eléctrico seguro y confiable!</p>
            <div class="border-top mt-4 pt-4">
              <div class="row g-4">
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Puntualidad en los servicios</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Profesionales calificados</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Servicio de calidad</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Nuestra Experiencia y Compromiso -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h1 class="display-6 mb-0">Nuestra Experiencia y Compromiso</h1>
          </div>
          <p class="mb-5">Brindamos servicio eléctrico de calidad con garantía y profesionalismo.</p>
          <div class="row gy-5 gx-4">
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">Amplia variedad de servicios eléctricos.</h6>
              </div>
              <span>Desde instalación de medidores hasta certificación de pozos a tierra, brindamos soluciones completas
                y seguras.</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">Clientes satisfechos en toda Lima</h6>
              </div>
              <span>Atendemos a hogares, negocios e industrias, garantizando eficiencia y confianza en cada
                trabajo.</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">Más de 5 años de experiencia eléctrica</h6>
              </div>
              <span>Un equipo de profesionales altamente capacitados, comprometidos con la calidad y seguridad.</span>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
              <div class="d-flex align-items-center mb-3">
                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                <h6 class="mb-0">Atención rápida y soluciones efectivas.</h6>
              </div>
              <span>Respondemos con eficiencia y profesionalismo para garantizar tu seguridad eléctrica.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="about-image-container position-relative ps-5 pt-5 h-100" style="min-height: 400px;">
            <img class="position-absolute w-100 h-100" src="assets/img/feature1.png" alt=""
              style="object-fit: cover; border-radius: 50px;">
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
             <h1 class="display-6 mb-0">NUESTRO EQUIPO DE TRABAJO</h1>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <p class="mb-0">Estamos conformados por un equipo de profesionales capacitados, listos para brindarte soluciones eléctricas seguras, eficientes y de calidad.
          </p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative">
            <img class="img-fluid" src="assets/img/sp.png" alt="">
            <div class="team-text bg-white p-4">
              <h5>Miguel Angel Huaman Albornozo</h5>
              <span>Supervisor de obras y Proyectos </span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item position-relative">
            <img class="img-fluid" src="assets/img/vts.png" alt="">
            <div class="team-text bg-white p-4">
              <h5>Anapaula Osorio Collazos</h5>
              <span>Jefa de ventas </span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item position-relative">
            <img class="img-fluid" src="assets/img/mkt.png" alt="">
            <div class="team-text bg-white p-4">
              <h5>Francesco Flores Gasparini</h5>
              <span>Jefe del area de marketing y diseño</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->


  <!-- form  -->
  <?php include_once __DIR__ . "/components/form.php"; ?>

  <!-- Footer -->
  <?php include_once __DIR__ . "/components/footer.php"; ?>

  <!--TODO: Icon WSPT -->
  <?php include_once __DIR__ . "/components/btn_wspt.php"; ?>


  <!-- Back to Top
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

 -->
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/waypoints/waypoints.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>


  <!-- Template Javascript 
  <script src="assets/js/app.js"></script>-->
  <script src="assets/js/main.js"></script>
  <script src="<?php echo Conectar::ruta(); ?>/assets/js/app.js"></script>




</body>

</html>