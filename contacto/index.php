<?php include_once("../config/conexion.php"); ?>
<script>
    var BASE_URL = "<?php echo Conectar::ruta(); ?>";
    console.log("BASE_URL definida como:", BASE_URL);
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contáctanos | SEMA - Cotiza Nuestros Servicios Eléctricos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="cotizar instalación eléctrica, contacto empresa de electricidad, solicitar presupuesto eléctrico, servicio eléctrico en Lima">
    <meta name="description"
        content="Solicita una cotización de nuestros servicios eléctricos. En SEMA ofrecemos soluciones en instalación, mantenimiento y seguridad eléctrica.">
    <meta name="author" content="SEMA Servicios Eléctricos">
    <link rel="canonical" href="<?php echo Conectar::ruta(); ?>/contacto">

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
    <div class="container-fluid page-header py-5  wow fadeIn" data-wow-delay="0.1s" id="page-header-container">
        <!-- El video se insertará aquí mediante JavaScript -->
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">CONTÁCTANOS</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="../">Hogar</a></li>
                    <li class="breadcrumb-item"><a class="text-white">Páginas</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="contactanos">Contáctanos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!--Mapa-->
    <section class="bg-white w-100">
        <div class="container-xxl py-5">
            <div class="container mt-3">
                <div class="row g-5">
                    <!-- Mapa - order-2 order-lg-1 lo coloca segundo en móvil, primero en pantallas grandes -->
                    <div class="col-lg-6 wow fadeInUp order-2 order-lg-1" data-wow-delay="0.1s"
                        style="min-height: 450px;">
                        <div class="position-relative h-100">
                            <iframe id="location-map" class="position-relative w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.8184913619043!2d-77.07172133064315!3d-11.992539935340635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce597f1c471f%3A0x9ef23bb221790448!2sZeus%20850%2C%20Lima%2015301!5e0!3m2!1ses-419!2spe!4v1708562374145!5m2!1ses-419!2spe"
                                frameborder="0" style="min-height: 450px; border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>
                    </div>
                    <!-- Texto - order-1 order-lg-2 lo coloca primero en móvil, segundo en pantallas grandes -->
                    <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-wow-delay="0.5s">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">CONTÁCTANOS</h6>
                            <h1 class="display-6 mb-0 color-n">Encuentranos en nuestras 2 sedes</h1>
                        </div>
                        <p class="mb-4 color-n">Visítanos en cualquiera de nuestras sedes para atenderte personalmente.
                        </p>

                        <div class="locations">
                            <div class="location-item mb-4" onclick="updateMap('los-olivos')">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1 color-n">Sede Los Olivos</h5>
                                        <p class="mb-0 color-n">Jirón Zeus 850, Los Olivos - Lima</p>
                                    </div>
                                </div>
                            </div>

                            <div class="location-item mb-4" onclick="updateMap('san-miguel')">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-1 color-n">Sede San Miguel</h5>
                                        <p class="mb-0 color-n">Av. La Marina 2553, San Miguel - Lima</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const locations = {
            'los-olivos': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d975.8184913619043!2d-77.07172133064315!3d-11.992539935340635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce597f1c471f%3A0x9ef23bb221790448!2sZeus%20850%2C%20Lima%2015301!5e0!3m2!1ses-419!2spe!4v1708562374145!5m2!1ses-419!2spe',
            'san-miguel': 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.666261402757!2d-77.09493088825788!3d-12.077866991442392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a0faa0c2e7%3A0x7ad0651aa68d4d52!2sAv.%20La%20Marina%202553%2C%20San%20Miguel%2015086!5e0!3m2!1ses!2spe!4v1708561347498!5m2!1ses!2spe'
        };

        function updateMap(location) {
            const iframe = document.getElementById('location-map');
            iframe.src = locations[location];

            // Highlight active location
            document.querySelectorAll('.location-item').forEach(item => {
                item.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
        }

        // Ejecutar cuando el DOM esté completamente cargado
        document.addEventListener('DOMContentLoaded', function () {
            // Marcar como activa la primera ubicación por defecto
            document.querySelector('.location-item').classList.add('active');
        });
    </script>



    <!--Formulario-->
    <div class="container-fluid appointment py-5 wow fadeIn" data-wow-delay="0.1s"
        style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h1 class="display-6 text-white mb-0">Contáctate con nosotros</h1>
                    </div>
                    <p class="text-white mb-4">COTIZA NUESTROS SERVICIOS</p>
                    <form id="form_contacto">
                        <div class="row g-3 justify-content-center">
                            <!-- Inputs en una sola columna -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-0" id="f_nombre"
                                        placeholder="Nombre">
                                    <label for="f_nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-0" id="f_tel"
                                        placeholder="Número de teléfono">
                                    <label for="f_tel">Número de teléfono</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-dark border-0" id="f_email"
                                        placeholder="Correo electrónico">
                                    <label for="f_email">Correo electrónico</label>
                                </div>
                            </div>
                            <!-- Checkboxes para seleccionar los servicios -->
                            <div class="col-12">
                                <div class="form-group text-center">
                                    <label class="text-white mb-3">Elija alguno de nuestros servicios:</label>
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="medidores_luz"
                                                id="medidores_luz">
                                            <label class="form-check-label text-white" for="medidores_luz">Instalación
                                                de medidores de luz</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="alarmas_incendios"
                                                id="alarmas_incendios">
                                            <label class="form-check-label text-white"
                                                for="alarmas_incendios">Instalación de alarmas contra incendios</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="pozo_tierra"
                                                id="pozo_tierra">
                                            <label class="form-check-label text-white" for="pozo_tierra">Ejecución,
                                                medición y certificación de pozo a tierra</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="camaras_seguridad"
                                                id="camaras_seguridad">
                                            <label class="form-check-label text-white"
                                                for="camaras_seguridad">Instalación de cámaras de seguridad</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="planos" id="planos">
                                            <label class="form-check-label text-white" for="planos">Planos
                                                eléctricos,sanitarios y de arquitectura</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ingenieria"
                                                id="ingenieria">
                                            <label class="form-check-label text-white" for="ingenieria">Servicio de
                                                ingeniería</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="fugas_electricas"
                                                id="fugas_electricas">
                                            <label class="form-check-label text-white" for="fugas_electricas">Detección
                                                de fugas eléctricas</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="licencia_funcionamiento" id="licencia_funcionamiento">
                                            <label class="form-check-label text-white"
                                                for="licencia_funcionamiento">Expediente para Lic. de
                                                Funcionamiento</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="proyectos_electricos"
                                                id="proyectos_electricos">
                                            <label class="form-check-label text-white"
                                                for="proyectos_electricos">Proyectos eléctricos</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--
                           <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-dark border-0" id="f_mensaje"
                                        placeholder="Mensaje"></textarea>
                                    <label for="f_mensaje">Mensaje</label>
                                </div>
                            </div>--->
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit" id="btnEnviar">Obtener
                                    Cita</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- form   -->
    <!-- Footer Start -->
    <?php include_once("../components/footer.php") ?>
    <!-- Footer End -->

    <?php include_once("../components/btn_wspt.php") ?>

    <?php include_once("../components/script.php") ?>
    <script src="../assets/js/app.js"></script>

    <script src="contacto.js"></script>


</body>

</html>