<?php
    include "header.php";
?>


<!DOCTYPE html>
<html lang="en">
    <body>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Productos</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Inicio</a>
                            <a href="contact.php">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2>Listado de productos</h2>
                        <p>A continuación, se presenta un listado con los productos que ofrecemos. </p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Todos</li>
                                <li data-filter=".diag">Equipamiento de Diagnóstico</li>
                                <li data-filter=".trat">Equipamiento de Tratamiento</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <!-- IMAGEN N°1: EQUIPO DE DIAGNÓSTICO (ECOGRAFOS) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item diag">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/diagnostico-1.jpg" alt="Ecógrafos">
                                    <a href="img/diagnóstico-1.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Ecógrafos</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°2: EQUIPO DE TRATAMIENTO (electroporación) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item trat">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/tratamiento-1.jpg" alt="Electroporación">
                                    <a href="img/tratamiento-1.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Electroporación</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°3: EQUIPO DE TRATAMIENTO (desfibrilador) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item trat">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/tratamiento-2.jpg" alt="Desfibrilador">
                                    <a href="img/tratamiento-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Desfibrilador</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°4: EQUIPO DE DIAGNÓSTICO (RESONADORES) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item diag">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/diagnostico-3.jpg" alt="Resonadores">
                                    <a href="img/diagnostico-3.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Resonadores</a>
                                </figure>
                            </div>
                        </div>
                         <!-- IMAGEN N°5: EQUIPO DE DIAGNÓSTICO (tensiómetros) -->
                         <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item diag">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/diagnostico-2.jpg" alt="Tensiómetros">
                                    <a href="img/diagnostico-2.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Tensiómetros</a>
                                </figure>
                            </div>
                        </div>
                        
                        <!-- IMAGEN N°6: EQUIPO DE TRATAMIENTO (electrobisturí) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item trat">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/tratamiento-3.jpg" alt="Electrobisturí">
                                    <a href="img/tratamiento-3.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Electrobisturí</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°7: EQUIPO DE TRATAMIENTO (Bomba de infusión) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item trat">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/tratamiento-4.jpg" alt="Bomba de Infusión">
                                    <a href="img/tratamiento-4.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Bombas de infusión</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°8: EQUIPO DE DIAGNÓSTICO (MONITORES) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item diag">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/diagnostico-4.jpg" alt="Monitores">
                                    <a href="img/diagnostico-4.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Monitores multiparamétricos</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°9: EQUIPO DE DIAGNÓSTICO (oxímetros) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item diag">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/diagnostico-5.jpg" alt="Oxímetros">
                                    <a href="img/diagnostico-5.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Oxímetros</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°10: EQUIPO DE TRATAMIENTO (magnetoterapia) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item trat">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/tratamiento-5.jpg" alt="Magnetoterapia">
                                    <a href="img/tratamiento-5.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Magnetoterapia</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°11: EQUIPO DE TRATAMIENTO (Máquina de Hemodiálisis) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item trat">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/tratamiento-6.jpg" alt="Máquina de Hemodiálisis">
                                    <a href="img/tratamiento-6.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Máquina de Hemodiálisis</a>
                                </figure>
                            </div>
                        </div>
                        <!-- IMAGEN N°12: EQUIPO DE DIAGNÓSTICO (equipo de RX) -->
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item diag">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="img/diagnostico-6.jpg" alt="Equipo de RX">
                                    <a href="img/diagnostico-6.jpg" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Equipo de RX</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="#">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Start -->


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
