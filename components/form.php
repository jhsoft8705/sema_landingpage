    <!--  form -->
    <div id="contactanos"class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <!--<h6 class="text-white text-uppercase mb-2">Appointment</h6>--->
                        <h1 class="display-6 text-white mb-0">Contáctate con nosotros</h1>
                    </div>
                    <p class="text-white mb-0">COTIZA NUESTROS SERVICIOS</p>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <form id="form_contacto" method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-0" name="f_nombre" id="f_nombre"
                                        placeholder="Gurdian Name">
                                    <label for="f_nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-dark border-0"name="f_email" id="f_email"
                                        placeholder="Gurdian Email">
                                    <label for="gmail">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-0" name="f_tel"id="f_tel"
                                        placeholder="Child Name">
                                    <label for="cname">Número de telefóno</label>
                                </div>
                            </div>
                        
                            <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select bg-dark border-0" name="f_servicios"id="f_servicios" aria-label="Seleccionar servicio">
                                    <option selected disabled>Elija alguno de nuestros servicios</option>
                                    <option value="medidores_luz">Instalación de medidores de luz</option>
                                    <option value="alarmas_incendios">Instalación de alarmas contra incendios</option>
                                    <option value="pozo_tierra">Ejecución, medición y certificación de pozo a tierra</option>
                                    <option value="camaras_seguridad">Instalación de cámaras de seguridad</option>
                                    <option value="planos">Planos eléctricos, sanitarios y de arquitectura</option>
                                    <option value="ingenieria">Servicio de ingeniería</option>
                                    <option value="fugas_electricas">Detección de fugas eléctricas</option>
                                    <option value="licencia_funcionamiento">Expediente para Lic. de Funcionamiento</option>
                                    <option value="proyectos_electricos">Proyectos eléctricos</option>
                                </select>
                                <label for="services">Servicios</label>
                            </div>
                        </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-dark border-0" placeholder="Ingrese un Mensaje"
                                        id="f_mensaje" name="f_mensaje"style="height: 100px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Obtener Cita</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- form   -->