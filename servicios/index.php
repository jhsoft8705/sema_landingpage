<?php include_once("../config/conexion.php"); ?>
<script>
    var BASE_URL = "<?php echo Conectar::ruta(); ?>";
    console.log("BASE_URL definida como:", BASE_URL);
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nuestros Servicios | SEMA - Instalaciones y Proyectos Eléctricos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="instalación de medidores de luz, pozos a tierra, cámaras de seguridad, planos eléctricos, ingeniería eléctrica, mantenimiento eléctrico">
    <meta name="description"
        content="Descubre nuestros servicios eléctricos en Lima. Instalaciones, mantenimiento, seguridad eléctrica y más. Cotiza tu servicio hoy.">
    <meta name="author" content="SEMA Servicios Eléctricos">
    <link rel="canonical" href="<?php echo Conectar::ruta(); ?>/servicios">

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
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" id="page-header-container">
        <!-- El video se insertará aquí mediante JavaScript -->
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">SERVICIOS</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="../">Hogar</a></li>
                    <li class="breadcrumb-item"><a class="text-white">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="servicios">Nuestros Servicios</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Banner -->
    <div class="banner">
        <div class="banner-text" id="counter">
            0 clientes satisfechos
        </div>
    </div>

    <!--opciones-->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Contenedor principal -->
                <div class="d-flex align-items-center justify-content-between">
                    <!-- Columna izquierda: Título y subtítulo -->
                    <div class="border-start border-5 border-primary ps-4">
                        <h2 class=" mb-0">Servicios</h2>
                        <p class="  mb-1">Te ofrecemos calidad y seguridad</p>
                    </div>


                    <!-- Columna izquierda: Título y subtítulo -->
                    <div class="border-start border-5 border-primary ps-4">
                        <h2 class="  mb-0">Portafolio</h2>
                        <a href="https://vimeo.com/user234752457" target="_blank" class="btn btn-ligth"
                            style="width:110px; background:#696667; color: aliceblue;">Ver</a>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Instalación de medidores de luz-->
    <div id="medidores-luz" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/ml1.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100  ">
                        <h1 class="display-6 mb-0 ">Instalación de medidores de luz</h1>
                        <p>El servicio de trámite de requisitos para un medidor de luz asegura un suministro eléctrico
                            legal y
                            seguro. Requisitos básicos: Documentos (Copia de DNI o RUC, título de propiedad o contrato
                            de alquiler.),
                            Infraestructura (Murete, cajuela o banco de medidores según el tipo de vivienda) y el
                            pago de derechos de conexión a la empresa eléctrica.
                        <p>
                        <p>Este servicio evita sanciones y garantiza un consumo eléctrico seguro y formal.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>
                                <!-- Botón Requerimientos -->
                                <a href="https://www.gob.pe/qu/24219-solicitar-medidor-de-luz-o-suministro?child=32915"
                                    target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Requerimientos</a>
                                <!-- Botón Descarga -->
                                <a target="_blank" href="../assets/img/Requisitos_para_medidor_de_luz.pdf"
                                    class="btn btn-sm text-gray"
                                    style="background-color: white; color: gray; border: 1px solid gray;">Descarga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Alguno de nuestros Proyectos-->
    <div class="container text-center mb-n5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <div class=" border-5 border-primary mx-auto mb-3" style="width: 150px;"></div>
                        <h1 class="mb-4">Alguno de nuestros Proyectos </h1>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!--carousel de imagenes-->
    <div class="slider-container">
        <button class="slider-button left" onclick="moveSlider(-1)">&#10094;</button>
        <div class="slider">
            <div class="slider-track">
                <img src="../assets/img/servicios_m01.png" alt="Imagen 1" onclick="openPreview(this)">
                <img src="../assets/img/servicios_m02.png" alt="Imagen 2" onclick="openPreview(this)">
                <img src="../assets/img/servicios_m03.png" alt="Imagen 3" onclick="openPreview(this)">
                <img src="../assets/img/servicios_m04.png" alt="Imagen 4" onclick="openPreview(this)">
                <img src="../assets/img/servicios_m05.png" alt="Imagen 4" onclick="openPreview(this)">

            </div>
        </div>
        <button class="slider-button right" onclick="moveSlider(1)">&#10095;</button>
    </div>
    <!-- carousel de imagenes -->
    <div id="previewOverlay" class="preview-overlay" onclick="closePreview()">
        <span class="close-btn">&times;</span>
        <img id="previewImage" class="preview-image" src="" alt="Vista previa" onclick="event.stopPropagation()">
    </div>


     

    <!-- Instalación de alarmas contra incendios -->
    <div class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Instalación de alarmas contraincendios </h1>
                        <p>El servicio de alarma contra incendio es esencial para cumplir con los requisitos de
                            seguridad exigidos por las municipalidades y obtener la licencia de funcionamiento . Estas
                            alarmas detectan de forma temprana humo, calor o fuego, garantizando la seguridad de las
                            personas y bienes en establecimiento comerciales o industriales.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contacto</a>
                                <!-- Botón Requerimientos  
                                <a href="#" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Requerimientos</a>
                         
                                <a href="#" class="btn btn-sm text-gray"
                                    style="background-color: white; color: gray; border: 1px solid gray;">Descarga</a>   -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_alarma.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!--Instalación de alarmas contra incendios -->
    <div id="instalacion-alarmas" class="slider-container">
        <button class="slider-button left" onclick="moveSlider(-1)">&#10094;</button>
        <div class="slider">
            <div class="slider-track">
                <img src="../assets/img/servicios_01.png" alt="Imagen 1" onclick="openPreview(this)">
                <img src="../assets/img/servicios_02.png" alt="Imagen 2" onclick="openPreview(this)">
                <img src="../assets/img/servicios_03.jpg" alt="Imagen 3" onclick="openPreview(this)">
                <img src="../assets/img/servicios_04.png" alt="Imagen 4" onclick="openPreview(this)">

            </div>
        </div>
        <button class="slider-button right" onclick="moveSlider(1)">&#10095;</button>
    </div>
    <!-- Instalación de alarmas contra incendios  -->
    <div id="previewOverlay" class="preview-overlay" onclick="closePreview()">
        <span class="close-btn">&times;</span>
        <img id="previewImage" class="preview-image" src="" alt="Vista previa" onclick="event.stopPropagation()">
    </div>



    <!--Instalación de camaras de seguridad-->
    <div id="instalacion-camaras" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_camara.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Instalación de cámaras de seguridad</h1>
                        <p>El servicio de instalación de cámaras de seguridad consiste en la colocación de sistemas de
                            videovigilanciaen viviendas o negocios para monitorear y proteger las instalaciones. Estas
                            cámaras ofrecen una solución efectiva para prevenir robos y aumentar la seguridad,
                            permitiendo el acceso remoto a las imágenes en tiempo real.
                        <p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- certificacion poso tierra -->
    <div id="poso-tierra" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Ejecución, medición y certificación de pozo a tierra</h1>
                        <p>El servicio de medificación y certificación de pozo a tierra garantiza que el sistema de
                            puesta a tierra de una propiedad esté funcionando correctamente. Se mide la resistencia del
                            pozo a tierra y se emite un certificado que cumple con las normativas de seguridad, siendo
                            un requisito esencial para la instalación de medidores de luz y la obtención de licencias de
                            funcionamiento.
                        </p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>
                                <!-- Botón Requerimientos  
                                <a href="#" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Requerimientos</a>
                         
                                <a href="#" class="btn btn-sm text-gray"
                                    style="background-color: white; color: gray; border: 1px solid gray;">Descarga</a>   -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_poso.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--carousel de imagenes-->
    <div class="slider-container">
        <button class="slider-button left" onclick="moveSlider(-1)">&#10094;</button>
        <div class="slider">
            <div class="slider-track">
                <img src="../assets/img/servicios_p01.png" alt="Imagen 1" onclick="openPreview(this)">
                <img src="../assets/img/servicios_p02.png" alt="Imagen 2" onclick="openPreview(this)">
                <img src="../assets/img/servicios_p03.png" alt="Imagen 3" onclick="openPreview(this)">
                <img src="../assets/img/servicios_p04.png" alt="Imagen 4" onclick="openPreview(this)">
                <img src="../assets/img/servicios_p05.png" alt="Imagen 5" onclick="openPreview(this)">

            </div>
        </div>
        <button class="slider-button right" onclick="moveSlider(1)">&#10095;</button>
    </div>
    <!-- carousel de imagenes  -->
    <div id="previewOverlay" class="preview-overlay" onclick="closePreview()">
        <span class="close-btn">&times;</span>
        <img id="previewImage" class="preview-image" src="" alt="Vista previa" onclick="event.stopPropagation()">
    </div>


    <!--Planos eléctricos, sanitarios y de arquitectura-->
    <div id="planos-electricos" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_planos.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Planos eléctricos, sanitarios y de arquitectura</h1>
                        <p>El servicio de planos eléctricos es fundamental para tramitar la solicitud de medidores de
                            luz,
                            ya que detalla el diseño y distribución de las conexiones eléctricas, cumpliendo con las
                            normativas de seguridad exigidas
                            por la empresa suministradora.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Instalaciones eléctricas-->
    <div id="instacion-electrica" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Instalaciones eléctricas</h1>
                        <p>El servicio de instalaciones eléctricas incluye la implementación y conexión segura de
                            sistemas eléctricos en viviendas, negocios o industrias. Garantiza un suministro eficiente y
                            cumple con las normativas para trámites como la solicitud de medidores de luz.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>
                                <!-- Botón Requerimientos  
                                <a href="#" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Requerimientos</a>
                         
                                <a href="#" class="btn btn-sm text-gray"
                                    style="background-color: white; color: gray; border: 1px solid gray;">Descarga</a>   -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_alarma.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--carousel de imagenes-->
    <div class="slider-container">
        <button class="slider-button left" onclick="moveSlider(-1)">&#10094;</button>
        <div class="slider">
            <div class="slider-track">
                <img src="../assets/img/servicios_e01.png" alt="Imagen 1" onclick="openPreview(this)">
                <img src="../assets/img/servicios_e02.png" alt="Imagen 2" onclick="openPreview(this)">
                <img src="../assets/img/servicios_e03.png" alt="Imagen 3" onclick="openPreview(this)">
                <img src="../assets/img/servicios_e04.png" alt="Imagen 4" onclick="openPreview(this)">

            </div>
        </div>
        <button class="slider-button right" onclick="moveSlider(1)">&#10095;</button>
    </div>
    <!-- carousel de imagenes  -->
    <div id="previewOverlay" class="preview-overlay" onclick="closePreview()">
        <span class="close-btn">&times;</span>
        <img id="previewImage" class="preview-image" src="" alt="Vista previa" onclick="event.stopPropagation()">
    </div>

    <!--Servicio de ingeniería-->
    <div id="servicio-ingenieria" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_e.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Servicio de ingeniería</h1>
                        <p>El servicio de ingeniería abarca una variedad de disciplinas técnicas, desde la planificación
                            y diseño de infraestructuras hasta la supervisión de proyectos en diferentes áreas como
                            civil, mecánica, industrial y eléctrica. Proporciona soluciones innovadoras y eficientes,
                            optimizando recursos y garantizando la seguridad y calidad en cada etapa del
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detección de fugas elécricas-->
    <div id="deteccion-fugas" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Detección de fugas elécricas</h1>
                        <p>El servicio de detdcción de fugas eléctricas consiste en identificar pérdidas de corriente en
                            el sistema eléctrico de una propiedad. Mediante herramientas especializadas, se localizan
                            las fugas para evitar riesgos de sobrecalentamiento, cortocircuito o incendios, garantizando
                            un ambiente seguro y eficiente.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>
                                <!-- Botón Requerimientos  
                                <a href="#" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Requerimientos</a>
                         
                                <a href="#" class="btn btn-sm text-gray"
                                    style="background-color: white; color: gray; border: 1px solid gray;">Descarga</a>   -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_fugas.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--carousel de imagenes-->
    <div class="slider-container">
        <button class="slider-button left" onclick="moveSlider(-1)">&#10094;</button>
        <div class="slider">
            <div class="slider-track">
                <img src="../assets/img/servicios_el01.png" alt="Imagen 1" onclick="openPreview(this)">
                <img src="../assets/img/servicios_el02.png" alt="Imagen 2" onclick="openPreview(this)">
                <img src="../assets/img/servicios_el03.png" alt="Imagen 3" onclick="openPreview(this)">
                <img src="../assets/img/servicios_el04.png" alt="Imagen 4" onclick="openPreview(this)">

            </div>
        </div>
        <button class="slider-button right" onclick="moveSlider(1)">&#10095;</button>
    </div>
    <!-- carousel de imagenes  -->
    <div id="previewOverlay" class="preview-overlay" onclick="closePreview()">
        <span class="close-btn">&times;</span>
        <img id="previewImage" class="preview-image" src="" alt="Vista previa" onclick="event.stopPropagation()">
    </div>

    <!--Expediente para Lic. de Funcionamiento-->
    <div id="exp-licencia" class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_expediente.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Expediente para Lic. de Funcionamiento</h1>
                        <p>El servicio de elaboración de expedientes para licencia de funcionamiento incluye la
                            preparación de documentos técnicos como planos eléctricos, certificados de seguridad y
                            requisitos específicos exigidos por las municipalidades. Garantiza el cumplimiento de
                            normativas para la obtención de la licencia de manera rápida y segura.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>
                                <a href="https://www.gob.pe/20961-obtener-certificado-de-inspeccion-tecnica-de-seguridad-en-edificaciones-de-riesgo-bajo-o-medio?child=13293"
                                    target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Requerimientos </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Proyectos eléctricos-->
    <div class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Proyectos eléctricos</h1>
                        <p>El servicio de proyectos eléctricos abarca el diseño, planificación e implementación de
                            sistemas eléctricos para obras nuevas o remodelaciones, asegurando eficiencia, seguridad y
                            cumplimiento de normativas. Es clave para trámites y licencias.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>
                                <!-- Botón Requerimientos  
                                <a href="#" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Requerimientos</a>
                         
                                <a href="#" class="btn btn-sm text-gray"
                                    style="background-color: white; color: gray; border: 1px solid gray;">Descarga</a>   -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_proyectose.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cuadro de cargas-->
    <div class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_cuadro.png" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Cuadro de cargas</h1>
                        <p>El cuadro de cargas es un documento técnico que detalla la distribución y capacidad de los
                            circuitos eléctricos en una propiedad. Permite calcular la demanda de energía y asegura que
                            el sistema eléctrico esté diseñado para soportar el consumo sin sobrecargar los componentes.
                            Es fundamental para la instalación y aprobación de medidores de luz.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intercomunicadores-->
    <div class="mt-5 container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Texto a la derecha -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-0">Intercomunicadores</h1>
                        <p>El servicio de instalación de intercomunicadores permite la comunicación directa y segura
                            entre diferentes áreas de una propiedad, como entre la entrada y el interior de la vivienda
                            o negocio. Es ideal para mejorar la seguridad y la comodidad, permitiendo a los usuarios
                            responder a visitas sin necesidad de abrir la puerta.</p>
                        <div class=" mt-4 pt-4">
                            <!-- Botones debajo del texto -->
                            <div class="d-flex gap-3">
                                <!-- Botón Contacto -->
                                <a href="https://wa.link/1u7qw7" target="_blank" class="btn btn-sm text-white"
                                    style="background-color: #FA8D23;">Contáctanos</a>
                                <!--
                                <a href="#" class="btn btn-sm text-gray"
                                    style="background-color: white; color: gray; border: 1px solid gray;">Descarga</a>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen a la izquierda -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-container position-relative ps-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="../assets/img/servicios_proyectose.png" alt=""
                            style="object-fit: cover;">
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
    <script src="servicio.js"></script>


</body>

</html>