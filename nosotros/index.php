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
    <meta name="keywords" content="empresa de electricidad en Lima, expertos en instalaciones eléctricas, seguridad eléctrica, SEMA servicios eléctricos">
    <meta name="description" content="Con más de 5 años de experiencia, en SEMA brindamos soluciones eléctricas con calidad y seguridad en Lima. Conócenos más aquí.">
    <meta name="author" content="SEMA Servicios Eléctricos">
    <link rel="canonical" href="<?php echo Conectar::ruta(); ?>/nosotros">
    <?php include_once("../components/head.php") ?>
</head>

<body>
    <!-- Spinner Start -->
    <?php include_once("../components/spiner.php") ?>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include_once("../components/topbar.php") ?>


    <!-- Navbar Start -->
    <?php include_once("../components/navbar.php") ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">NOSOTROS</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="../">Hogar </a></li>
                    <li class="breadcrumb-item"><a class="text-white">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="nosotros">Nosotros</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--Sobre nosotros -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/foto7.png" alt=""
                            style="object-fit: cover; border-radius: 50px;">
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                            style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">+ de 5</h1>
                                <h2 class="text-white">Años</h2>
                                <h5 class="text-white mb-0">de experiencia</h5>
                            </div>
                        </div>
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
                        <div class="border-top mt-4 pt-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Mision -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h1 class="display-6 mb-0">Visión</h1>
                        </div>
                        <p>Ser la empresa líder en soluciones eléctricas en Lima, reconocida por nuestra innovación,
                            compromiso con la seguridad y excelencia en el servicio. Aspiramos a expandirnos y
                            consolidarnos como referentes en el sector, ofreciendo tecnología de vanguardia y
                            promoviendo un impacto positivo en la comunidad.</p>
                        <div class="border-top mt-4 pt-4">
                            <!-- Aquí puedes agregar más contenido si es necesario -->
                        </div>
                    </div>
                </div>

                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/foto1.png" alt=""
                            style="object-fit: cover; border-radius: 50px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Vision -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/foto5.png" alt=""
                            style="object-fit: cover; border-radius: 50px;">
                    </div>
                </div>

                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h1 class="display-6 mb-0">Misión</h1>
                        </div>
                        <p>Brindar soluciones eléctricas integrales con altos estándares de calidad, seguridad y
                            eficiencia, contribuyendo al desarrollo sostenible de nuestros clientes. Nos enfocamos en
                            ofrecer un servicio confiable y personalizado, asegurando el cumplimiento de normativas y
                            promoviendo el uso responsable de la energía.</p>
                        <div class="border-top mt-4 pt-4">
                            <!-- Aquí puedes agregar más contenido si es necesario -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Valores-->
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
    <div class="container-xxl py-5">
        <div class="row justify-content-center g-4"> <!-- Centramos las tarjetas -->
            <!-- Card 1 -->
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100 gradient-card">
                    <div class="card-body text-center p-3"> <!-- Reducimos el padding -->
                        <img src="../assets/img/one.png" alt="Valor 1" class="value-icon">
                        <h5 class="card-title mb-3">Respeto</h5>
                        <!--<p class="card-text">Priorizamos </p>-->
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card h-100 gradient-card">
                    <div class="card-body text-center p-3"> <!-- Reducimos el padding -->
                        <img src="../assets/img/two.png" alt="Valor 2" class="value-icon">
                        <h5 class="card-title mb-3">Profesionalismo</h5>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card h-100 gradient-card">
                    <div class="card-body text-center p-3"> <!-- Reducimos el padding -->
                        <img src="../assets/img/there.png" alt="Valor 3" class="value-icon">
                        <h5 class="card-title mb-3">Compromiso</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> 
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