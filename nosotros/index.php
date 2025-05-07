<?php include_once("../config/conexion.php"); ?>
<script>
    var BASE_URL = "<?php echo Conectar::ruta(); ?>";
    console.log("BASE_URL definida como:", BASE_URL);
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sobre Nosotros | SEMA - Expertos en Soluciones Eléctricas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="empresa de electricidad en Lima, expertos en instalaciones eléctricas, seguridad eléctrica, SEMA servicios eléctricos">
    <meta name="description"
        content="Con más de 5 años de experiencia, en SEMA brindamos soluciones eléctricas con calidad y seguridad en Lima. Conócenos más aquí.">
    <meta name="author" content="SEMA Servicios Eléctricos">
    <link rel="canonical" href="<?php echo Conectar::ruta(); ?>/nosotros">
    <?php include_once("../components/head.php") ?>
</head>

<body>
    <!-- Spinner Start -->
    <?php include_once("../components/spiner.php") ?>
    <!-- Spinner End -->

 

    <!-- Navbar Start -->
    <?php include_once("../components/navbar.php") ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <!-- Page Header Start -->
    <!-- Modifica tu Page Header así: -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" id="page-header-container">
        <!-- El video se insertará aquí mediante JavaScript -->
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">NOSOTROS</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="../">Hogar</a></li>
                    <li class="breadcrumb-item"><a class="text-white">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="nosotros">Nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!--Sobre nosotros -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/somos.png" alt=""
                            style="object-fit: cover; object-position: top;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">¿POR QUÉ ELEGIRNOS?</h6>
                            <h1 class="display-6 mb-0">¿Quiénes somos?</h1>
                        </div>
                        <p>Somos SEMA Servicios Eléctricos, una empresa con 5 años de experiencia en el mercado,
                            especializada en brindar soluciones integrales en el rubro eléctrico. Ofrecemos una amplia
                            gama de servicios y operamos en toda Lima, asegurando calidad, seguridad y eficiencia en
                            cada trabajo.</p>
                        <p class="mb-4">Actualmente, contamos con dos sedes para atenderte mejor: una en Los Olivos y
                            otra en San Miguel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- visión -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Texto a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100 vision-content">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h1 class="display-6 mb-0">Visión</h1>
                        </div>
                        <p>Ser la empresa líder en soluciones eléctricas en Lima, reconocida por nuestra innovación,
                            compromiso con la seguridad y excelencia en el servicio. Aspiramos a expandirnos y
                            consolidarnos como referentes en el sector, ofreciendo tecnología de vanguardia y
                            promoviendo un impacto positivo en la comunidad.</p>
                        <div class="">
                            <!-- Aquí puedes agregar más contenido si es necesario -->
                        </div>
                    </div>
                </div>

                <!-- Imagen a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="vision-img-container">
                        <img src="../assets/img/foto5.png" alt="Nuestra visión" class="img-fluid vision-img">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--mision -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="mission-img-container">
                        <img src="../assets/img/foto1.png" alt="Nuestra misión" class="img-fluid mission-img">
                    </div>
                </div>

                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 mission-content">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h1 class="display-6 mb-0">Misión</h1>
                        </div>
                        <p>Brindar soluciones eléctricas integrales con altos estándares de calidad, seguridad y
                            eficiencia, contribuyendo al desarrollo sostenible de nuestros clientes. Nos enfocamos en
                            ofrecer un servicio confiable y personalizado, asegurando el cumplimiento de normativas y
                            promoviendo el uso responsable de la energía.</p>
                        <div class="">
                            <!-- Aquí puedes agregar más contenido si es necesario -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Valores-->
    <style>
        /*Valores*/
        .gradient-card {
            background: linear-gradient(180deg, #42270d 0%, #995716 50%, #fa8d23 100%);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            height: 100%;
            min-height: 250px;
            /* Aumentamos la altura mínima de las tarjetas */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .gradient-card:hover {
            transform: translateY(-10px);
        }

        .value-icon {
            width: 100px;
            /* Aumentamos el tamaño de los iconos */
            height: 100px;
            /* Mantenemos la proporción cuadrada */
            margin: 25px auto;
            /* Aumentamos el margen para dar más espacio */
            object-fit: contain;
            /* Esto evita que la imagen se estire */
        }

        .gradient-card h5,
        .gradient-card p {
            color: white;
            font-size: 1.25rem;
            /* Hacemos el texto un poco más grande */
            margin-top: 15px;
            /* Añadimos más espacio sobre el título */
        }

        .card-body {
            padding: 25px 15px;
            /* Aumentamos el padding vertical */
        }

        /* Estilos para el carrusel en móvil */
        #valores-carousel .carousel-indicators {
            bottom: -40px;
        }

        #valores-carousel .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #fa8d23;
            opacity: 0.5;
        }

        #valores-carousel .carousel-indicators button.active {
            opacity: 1;
        }

        /* Para pantallas móviles, las tarjetas en el carrusel son aún más altas */
        #valores-carousel .gradient-card {
            min-height: 300px;
        }

        /* Ocultamos el carrusel en escritorio y las tarjetas normales en móvil */
        @media (min-width: 768px) {
            #valores-carousel {
                display: none;
            }
        }

        @media (max-width: 767px) {
            .desktop-cards {
                display: none;
            }

            #valores-carousel {
                padding-bottom: 50px;
                /* Espacio para los indicadores */
            }
        }

        /*end Valores*/
    </style>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <div class="border-top border-5 border-primary mx-auto mb-3" style="width: 150px;"></div>
                        <h1 class="mb-4">Nuestros Valores</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tarjetas para vista de escritorio -->
    <div class="container-xxl py-5 desktop-cards">
        <div class="row justify-content-center g-4">
            <!-- Card 1 -->
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card gradient-card">
                    <div class="card-body text-center">
                        <img src="../assets/img/one.png" alt="Valor 1" class="value-icon">
                        <h5 class="card-title mb-3">Respeto</h5>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card gradient-card">
                    <div class="card-body text-center">
                        <img src="../assets/img/two.png" alt="Valor 2" class="value-icon">
                        <h5 class="card-title mb-3">Calidad</h5>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card gradient-card">
                    <div class="card-body text-center">
                        <img src="../assets/img/there.png" alt="Valor 3" class="value-icon">
                        <h5 class="card-title mb-3">Responsabilidad</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carrusel para vista móvil -->
    <div id="valores-carousel" class="carousel slide container-fluid" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#valores-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#valores-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#valores-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8">
                        <div class="card gradient-card">
                            <div class="card-body text-center">
                                <img src="../assets/img/one.png" alt="Valor 1" class="value-icon">
                                <h5 class="card-title mb-3">Respeto</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8">
                        <div class="card gradient-card">
                            <div class="card-body text-center">
                                <img src="../assets/img/two.png" alt="Valor 2" class="value-icon">
                                <h5 class="card-title mb-3">Calidad</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8">
                        <div class="card gradient-card">
                            <div class="card-body text-center">
                                <img src="../assets/img/there.png" alt="Valor 3" class="value-icon">
                                <h5 class="card-title mb-3">Responsabilidad</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END Valores-->



    <!-- form -->
    <?php include_once("../components/form.php") ?>
    <!-- Footer Start -->
    <?php include_once("../components/footer.php") ?>
    <!-- Footer End -->

    <?php include_once("../components/btn_wspt.php") ?>

    <?php include_once("../components/script.php") ?>

    <script src="../assets/js/app.js"></script>

</body>

</html>