<?php
require 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
    <body>
        <div>
            <!-- Hero Start -->
            <div class="hero">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2><span>E</span>mpresa de <span>V</span>entas de</h2>
                            <h2><span>A</span>rtículos <span>B</span>iomédicos</h2>
                            <p>Empresa de Bioingeniería constituida por profesionales de experiencia inigualable para asegurar un servicio de excelente calidad. Comercialización de productos de las mejores marcas.</p>
                            <a class="btn" href="about.php">Saber más</a>
                        </div>
                        <div class="col-md-6">
                            <img src="img/bioing.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero End -->
            
            
            <!-- Sobre Nosotros Start -->
            <div class="about">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div id="video-section">
                                <!-- VIDEO DE YOUTUBE -->
                                <div class="youtube-player" data-id="jssO8-5qmag">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/9eU_ch7Q2EM" title="YouTube video player" 
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen></iframe>
                                </div>
                            
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h2 class="section-title">Sobre Nosotros</h2>
                            <p>
                                Somos la empresa de bioingeniería líder en comercialización de equipamiento médico en la región. 
                                Entre otros servicios, ofrecemos: asesoramiento, consultoría, mantenimiento, etc.
                            </p>
                            <p>
                                Nuestros profesionales están al 100% comprometidos con la misión y visión de la empresa.
                            </p>
                            <a class="btn" href="about.php">Aprender más</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container-fluid">
                    <div class="section-header">
                        <h2>Nuestros Servicios</h2>
                        <p>Ofrecemos los mejores servicios. Cuidamos a nuestros clientes.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Alquiler de Equipamiento</h3>
                                <img src="img/icon-service-1.jpg" alt="Service">
                                <p>Consulte disponibilidad de respiradores, equipos de RX, resonadores, entre otros.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Instalación y traslados</h3>
                                <img src="img/icon-service-2.jpg" alt="Service">
                                <p>Experiencia y herramientas para la correcta desintalación, traslado e instalación.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Mantenimiento preventivo</h3>
                                <img src="img/icon-service-3.jpg" alt="Service">
                                <p>Servicio programado de mantenimiento de aparatología médica.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Capacitación y Asesoramiento</h3>
                                <img src="img/icon-service-4.jpg" alt="Service">
                                <p>Brindamos las mejores soluciones para diferentes proyectos e inversiones.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Servicio Integral</h3>
                                <img src="img/icon-service-5.jpg" alt="Service">
                                <p>Servicio de mantenimiento correctivo y soporte técnico de asistencia inmediata.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Ingeniería clínica</h3>
                                <img src="img/icon-service-6.jpg" alt="Service">
                                <p>Importante para establecer una buena Planificación Estratégica.</p> 
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Calibración y control</h3>
                                <img src="img/icon-service-7.jpg" alt="Service">
                                <p>Verificación de seguridad y correcto funcionamiento de equipamiento médico.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <h3>Servicio al cliente</h3>
                                <img src="img/icon-service-8.jpg" alt="Service">
                                <p>Garantizamos servicio de calidad antes, durante y después de la compra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->

            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="section-title"><a name="pregs">Preguntas Frecuentes</a></h2>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            ¿Cuánto nos lleva instalar un equipo?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Depende del equipamiento. En general, puede tomar de 1 a 3 días según disponibilidad de personal.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            ¿Qué productos ofrecemos?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            En la pestaña <a href="productos.php">Productos</a> encontrará una lista completa de los productos que tenemos en stock. Si no tenemos stock de un producto, no lo encontrará en la página. Consulte por disponibilidad.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            ¿Cuánto dura la garantía del equipamiento?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Generalmente, un año. Varía según el equipo.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            ¿El contrato de alquiler se realiza por qué período de tiempo?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Al igual que la garantía, el mismo debe ser de un año. De ser necesario, una vez finalizado dicho perídoo se puede renovar.
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <a class="btn" href="contact.php">¡Contáctanos!</a>
                        </div>
                        <div class="col-md-6">
                            <img src="img/faqs.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->
            

            <!-- Testimonial Start -->
                <div class="testimonial">
                    <div class="container">
                        <div class="section-header">
                            <h2><a name="opinion">Opinion de los Clientes</a></h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonial-slider-nav">
                                    <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                    <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                    <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                    <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                    <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                    <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                    <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                    <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonial-slider">
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                    <div class="slider-item">
                                        <h3>Customer Name</h3>
                                        <h4>profession</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial End -->

            <!-- News Start -->
                <div class="news">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="img/news2.jpg" alt="Image">
                            </div>
                            <div class="col-md-6">
                                <h2 class="section-title"><a name="news">Ultimas novedades</a></h2>
                                <p>
                                    La Bioingeniería es una de las disciplinas más jóvenes de la ingeniería en la que los principios y herramientas de la ingeniería, la ciencia y la tecnología se aplican a los problemas presentados por la biología y la medicina.
                                    La formación del Bioingeniero comprende una sólida base en ingeniería conjugada con los conocimientos fundamentales de medicina y biología, complementados con materias específicas de aplicación de tecnología: electrónica, informática, robótica, óptica, etc., para satisfacer las demandas de la medicina y la biología.</p>
                                <p>
                                    La Bioingeniería hoy, en nuestro país, está creciendo y estableciéndose como uno de los polos de mayor desarrollo, tanto en el mercado médico-tecnológico como en el área de la investigación.
                                    La fabricación, la importación y la exportación de nueva y compleja tecnología médica, y la necesidad de normativas que rijan en todos los aspectos de la misma, hacen que la demanda de Bioingenieros se haga cada vez más relevante y que diferentes ámbitos prestadores de salud requieran de sus servicios.
                                </p>
                                <a class="btn" href="https://elpais.com/noticias/bioingenieria/">Saber más</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- News End -->


            <?php
                include "footer.php";
            ?>

   
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
