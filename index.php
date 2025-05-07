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



  <!-- Navbar-->
  <?php include_once __DIR__ . "/components/navbar.php"; ?>

  <!-- Navbar End -->




  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/carousel-1.jpg" alt="Image">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Conectando el futuro</h5>
<h1 class="display-2 text-light mb-3 animated slideInDown">SotelcoGroup</h1>
<ol class="breadcrumb mb-4 pb-2">
  <li class="breadcrumb-item fs-5 text-light">Telecomunicaciones</li>
  <li class="breadcrumb-item fs-5 text-light">Sector industrial</li>
  <li class="breadcrumb-item fs-5 text-light">Sector comercial</li>
</ol>


                  </ol>
                  <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/carousel-2.jpg" alt="Image">
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5 class="text-light text-uppercase mb-3 animated slideInDown">Welcome to Apex</h5>
                  <h1 class="display-2 text-light mb-3 animated slideInDown">Professional Tiling & Painting Services</h1>
                  <ol class="breadcrumb mb-4 pb-2">
                    <li class="breadcrumb-item fs-5 text-light">Commercial</li>
                    <li class="breadcrumb-item fs-5 text-light">Residential</li>
                    <li class="breadcrumb-item fs-5 text-light">Industrial</li>
                  </ol>
                  <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->








  <!--Cars-->
  <style>
    .servicios_especiales_carousel {
      position: relative;
      width: 100%;
      overflow: hidden;
      margin-bottom: 60px;
      touch-action: pan-y;
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

    .servicios_especiales_dots {
      position: absolute;
      bottom: -40px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 12px;
      padding: 0;
      margin: 0;
      list-style: none;
      z-index: 10;
    }

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
      font-size: 18px;
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

    /* New style for centered indicators */
    .carousel-cars-indicators-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      margin-bottom: 30px;
      position: relative;
      z-index: 15;
      margin-top: -40px;
    }

    .carousel-cars-indicators {
      position: static;
      transform: none;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
    }

    .carousel-cars-indicators [data-bs-target] {
      width: 12px !important;
      height: 12px !important;
      border-radius: 50% !important;
      background-color: #e0e0e0 !important;
      margin: 0 !important;
      transition: all 0.3s ease !important;
      border: none;
      cursor: pointer;
    }

    .carousel-cars-indicators .active {
      background-color: #FB8C23 !important;
      transform: scale(1.2) !important;
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

      .servicios_especiales_carousel {
        touch-action: pan-y;
      }

      .carousel-cars-indicators-container {
        margin-top: -50px;
        /* Ajusta este valor para bajar los indicadores */
        margin-bottom: 10px;
      }

      .carousel-cars-indicators {
        position: static;
        transform: none;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
      }
    }
  </style>


  <div class="container-fluid wow fadeInUp mt-5" data-wow-delay="0.1s">
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
          <div class="servicios_especiales_slide active">
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
                        style="width: 45px; height: 45px;">
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
                        style="width: 45px; height: 45px;;">
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
                        style="width: 45px; height: 45px;">
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
 
 
      </div>
    </div>
  </div>
  <!-- New centered indicators container -->
  <div class="carousel-cars-indicators-container">
    <div class="carousel-cars-indicators">
      <button type="button" data-bs-target="#serviciosCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#serviciosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#serviciosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = document.querySelector('.servicios_especiales_carousel');
      const inner = document.querySelector('.servicios_especiales_inner');
      const slides = Array.from(document.querySelectorAll('.servicios_especiales_slide'));
      const carouselIndicators = document.querySelectorAll('.carousel-cars-indicators button');

      let currentSlide = 0;
      let autoplayInterval;
      const autoplayDuration = 7000;

      function goToSlide(slideIndex) {
        // Circular navigation
        if (slideIndex < 0) {
          slideIndex = slides.length - 1;
        } else if (slideIndex >= slides.length) {
          slideIndex = 0;
        }

        currentSlide = slideIndex;

        // Move carousel
        inner.style.transform = `translateX(-${currentSlide * 33.333}%)`;

        // Update indicators
        carouselIndicators.forEach((indicator, index) => {
          indicator.classList.toggle('active', index === currentSlide);
          indicator.setAttribute('aria-current', index === currentSlide ? 'true' : 'false');
        });
      }

      function startAutoplay() {
        autoplayInterval = setInterval(() => {
          goToSlide(currentSlide + 1);
        }, autoplayDuration);
      }

      function pauseAutoplay() {
        clearInterval(autoplayInterval);
      }

      // Add event listeners to indicators
      carouselIndicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
          goToSlide(index);
          pauseAutoplay();
          startAutoplay();
        });
      });

      // Initialize carousel
      startAutoplay();

      // Pause on hover
      carousel.addEventListener('mouseenter', pauseAutoplay);
      carousel.addEventListener('mouseleave', startAutoplay);
    });
  </script>



  <!-- Quienes somos -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-image-container position-relative h-100" style="min-height: 400px;">
            <img class="position-absolute w-100 h-100" src="assets/img/about1.png" alt="" style="object-fit: cover;">
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
            <p class="mb-5">Brindamos servicio eléctrico de calidad con garantía y profesionalismo.</p>

          </div>
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
          <div class="about-image-container position-relative h-100" style="min-height: 400px;">
            <img class="position-absolute w-100 h-100" src="assets/img/feature1.png" alt="" style="object-fit: cover; ">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Clientes -->
  <section class="seccion-clientes">
    <div class="banner-container">
      <!-- Texto superpuesto y centrado -->
      <div class="encabezado-clientes">
        <h2>Nuestros Clientes </h2>
        <h3>Son más de 1000 clientes satisfechos con nuestro servicio</h3>
      </div>
    </div>
  </section>

  <div class="contenedor-carousel-clientes">
    <div class="carousel-clientes">
      <button class="carousel-clientes-boton anterior">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path
            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </svg>
      </button>
      <div class="carousel-clientes-track">
        <!-- Aquí van los logos de tus clientes -->
        <div class="carousel-clientes-slide">
          <img src="assets/img/logo06.png" alt="Cliente 1">
        </div>
        <div class="carousel-clientes-slide">
          <img src="assets/img/logo2.png" alt="Cliente 2">
        </div>
        <div class="carousel-clientes-slide">
          <img src="assets/img/logo5.png" alt="Cliente 3">
        </div>
        <div class="carousel-clientes-slide">
          <img src="assets/img/logo4.png" alt="Cliente 4">
        </div>

      </div>
      <button class="carousel-clientes-boton siguiente">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </svg>
      </button>
    </div>
  </div>
  <style>
    /* Estilos para la sección de clientes */
    .seccion-clientes {
      width: 100%;
      overflow: hidden;
      background-color: white;
    }

    .banner-container {
      background-color: #FF7F24;
      position: relative;
      width: 100%;
      padding: 30px 0;
      text-align: center;
      overflow: hidden;
    }

    /* Diseño horizontal profesional */
    .banner-container::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: repeating-linear-gradient(to right,
          rgba(255, 255, 255, 0.1) 0px,
          rgba(255, 255, 255, 0.1) 10px,
          transparent 10px,
          transparent 30px);
      opacity: 0.6;
      z-index: 1;
    }

    .encabezado-clientes {
      position: relative;
      max-width: 100%;
      margin: 0 auto;
    }

    .encabezado-clientes h2 {
      color: white;
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 10px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }

    .encabezado-clientes h3 {
      color: white;
      font-size: 1.2rem;
      font-weight: normal;
      margin-top: 0;
      margin-bottom: 0;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    /* Estilos para el carrusel - con fondo blanco */
    .contenedor-carousel-clientes {
      padding: 60px 0;
      position: relative;
      max-width: 100%;
      margin: 0 auto;
      background-color: white;
    }

    .carousel-clientes {
      position: relative;
      overflow: hidden;
      width: 100%;
      height: 200px;
      margin: 0 auto;
      display: flex;
      align-items: center;
    }

    .carousel-clientes-track {
      display: flex;
      transition: transform 0.5s ease;
      position: relative;
      flex: 1;
      overflow: hidden;
      height: 100%;
      width: 100%;
    }

    .carousel-clientes-slide {
      flex: 0 0 25%;
      min-width: 25%;
      padding: 0 20px;
      box-sizing: border-box;
      text-align: center;
      position: relative;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .carousel-clientes-slide img {
      max-width: 100%;
      max-height: 180px;
      width: auto;
      height: auto;
      object-fit: contain;
      filter: grayscale(0);
      transition: filter 0.3s ease, transform 0.3s ease;
      display: block;
      /* Asegura que la imagen se muestre correctamente */
    }

    .carousel-clientes-slide img:hover {
      filter: grayscale(0);
      transform: scale(1.05);
    }

    .carousel-clientes-boton {
      background-color: #000000;
      color: #FFFFFF;
      border: none;
      width: 45px;
      height: 45px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease;
      z-index: 10;
      position: absolute;
    }

    .carousel-clientes-boton.anterior {
      left: 20px;
    }

    .carousel-clientes-boton.siguiente {
      right: 20px;
    }

    .carousel-clientes-boton:hover {
      background-color: #333333;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .carousel-clientes-slide {
        flex: 0 0 33.333%;
        min-width: 33.333%;
      }

      .contenedor-carousel-clientes {
        max-width: 100%;
        padding: 40px 0;
      }

      .carousel-clientes {
        height: 180px;
      }

      .carousel-clientes-slide img {
        max-height: 160px;
      }
    }

    @media (max-width: 768px) {
      .carousel-clientes-slide {
        flex: 0 0 50%;
        min-width: 50%;
      }

      .encabezado-clientes h2 {
        font-size: 2rem;
      }

      .banner-container {
        padding: 20px 0;
      }

      .carousel-clientes {
        height: 160px;
      }

      .carousel-clientes-slide img {
        max-height: 140px;
      }

      .carousel-clientes-boton {
        width: 40px;
        height: 40px;
      }
    }

    @media (max-width: 576px) {
      .carousel-clientes-slide {
        flex: 0 0 100%;
        min-width: 100%;
        box-sizing: border-box;
        padding: 0 10px;
        /* Reducido para mejor visualización en móvil */
      }

      .encabezado-clientes h2 {
        font-size: 1.8rem;
      }

      .encabezado-clientes h3 {
        font-size: 1rem;
      }

      .carousel-clientes {
        height: 140px;
      }

      .carousel-clientes-slide img {
        max-height: 120px;
        margin: 0 auto;
        /* Centrar imagen */
      }

      .contenedor-carousel-clientes {
        padding: 30px 0;
      }

      .banner-container {
        padding: 15px 0;
      }

      .carousel-clientes-boton {
        width: 35px;
        height: 35px;
      }

      .carousel-clientes-boton.anterior {
        left: 10px;
      }

      .carousel-clientes-boton.siguiente {
        right: 10px;
      }
    }
  </style>



  <!-- NUESTRO EQUIPO DE TRABAJO -->
  <div class="container-xxl py-5 mt-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h1 class="display-6 mb-0">NUESTRO EQUIPO DE TRABAJO</h1>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <p class="mb-0">Estamos conformados por un equipo de profesionales capacitados, listos para brindarte
            soluciones eléctricas seguras, eficientes y de calidad.
          </p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <img class="img-fluid" src="assets/img/sp.png" alt="">
            <div class="team-text mt-4 text-center">
              <h5>Miguel Angel Huaman Albornozo</h5>
              <span>Supervisor de obras y Proyectos</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item">
            <img class="img-fluid" src="assets/img/vts.png" alt="">
            <div class="team-text mt-4 text-center">
              <h5>Anapaula Osorio Collazos</h5>
              <span>Jefa de ventas</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item">
            <img class="img-fluid" src="assets/img/mkt.png" alt="">
            <div class="team-text mt-4 text-center">
              <h5>Francesco Flores Gasparini</h5>
              <span>Jefe del area de marketing y diseño</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





</body>


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