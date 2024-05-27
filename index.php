
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test FullStack Developer Web</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Start Menu -->
    <nav>
        <div class="logo col-lg-2">
            <a href="#home"><img src="resources/images/svg/logo.svg" alt="Logo"></a>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-list">
            <li class="nav-item"><a href="#aboutus" class="nav-link">Nosotros</a></li>
            <li class="nav-item"><a href="#proyect" class="nav-link">Proyecto</a></li>
            <li class="nav-item"><a href="#amenities" class="nav-link">Amenidades</a></li>
            <li class="nav-item"><a href="#residences" class="nav-link">Residencias</a></li>
            <li class="nav-item d-lg-none d-md-none d-block contact"><button class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal">Contactanos</button></li>
        </ul>
        <div class="col-2 contact d-none d-lg-block d-md-block">
            <button class="btn-contact" data-bs-toggle="modal" data-bs-target="#contactModal" data-bs-whatever="@mdo">Contactanos</button>
        </div>
    </nav> 
    <!-- End Menu -->

    <!-- Start Slider -->
    <div class="col-12 d-none d-lg-block d-md-block ">
        <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="resources/images/slider/mayakaan.svg" alt="mayakaan_1">
                      
                    <div class="carousel-caption d-none d-md-block">
                        <h5>wyndham grand Mayakaan residences rivera maya</h5>
                        <p>Nuevo Modelo de negocio en la Rivera Maya, donde el lujo se fusiona con la naturaleza</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="resources/images/slider/mayakaan.svg" alt="mayakaan_2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>wyndham grand Mayakaan residences rivera maya</h5>
                        <p>Nuevo Modelo de negocio en la Rivera Maya, donde el lujo se fusiona con la naturaleza</p>
                    </div>  
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="resources/images/slider/mayakaan.svg" alt="mayakaan_3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Wyndham Grand Mayakaan Residences Rivera Maya</h5>
                        <p>Nuevo Modelo de negocio en la Rivera Maya, donde el lujo se fusiona con la naturaleza</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider -->

    <div class="col-12 d-lg-none d-md-none d-block replace-slide">
        <img src="resources/images/slider/mayakaan.svg" alt="mayakaan_1">
        <h5>wyndham grand Mayakaan residences rivera maya</h5>
        <p>Nuevo Modelo de negocio en la Rivera Maya, donde el lujo se fusiona con la naturaleza</p>
    </div>


    <!-- Start Section -->
    <div class="col-12 section_1">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-xs-12 bg-pool">
                <!-- <img src="resources/images/svg/pool.svg" alt="" class="pool-img"> -->
            </div>

            <div class="col-lg-6 col-md-6 col-xs-12 content-text-grand">
                <article>
                    <h2>WYNDHAM GRAND MAYAKAAN RESIDENCES</h2>
                    <p>
                        Es un desarrollo inmobiliario de alta gama, que preserva el ecosistema que lo rodea, donde las eco tecnologías de vanguardia convergen con nuestras lujosas residencias, con acabados de alta calidad, diseños y materiales mexicanos 100% artesanales, rodeadas de la exuberante selva de la Riviera Maya. Donde el lujo se encuentra con la naturaleza y los sentidos se conectan con el hábitat natural y a sólo 15 minutos del aeropuerto de Cancún.
                    </p>

                    <button class="btn-tour btn-tour mt-md-5">Tour Virtual</button>
                </article>
            </div>
        </div>
    </div>
    <!-- End Section -->

    <!-- Start Proyect -->
    <div class="col-12 seccion_proyect">
        <img src="resources/images/svg/seccion_proyect.svg" alt="">
    </div>
    <!-- End Proyect -->

    <!-- Start Proyect -->
    <div class="col-12 seccion_amenities">
        <img src="resources/images/svg/seccion_amenities.svg" alt="">
    </div>
    <!-- End Proyect -->

    <!-- Start Form popup --> 
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="contactModalLabel">Contactanos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="form">
                        <!-- Nombre, Apellido, Correo electrónico y Mensaje, -->
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Nombre:</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="col-form-label">Apellido:</label>
                            <input type="text" name="last_name" class="form-control" id="last-name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Correo Eletrónico:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="col-form-label">Mensaje:</label>
                            <textarea class="form-control" name="message" id="message"></textarea>
                        </div> 
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success btn-send">Enviar</button>
                        </div>
                        <div class="error-msg ">
                            <p class="msg-txt"></p>
                        </div>
                        <div class="success-msg ">
                            <p class="success-msg"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Form popup -->

    


    <!-- Start Footer -->
    <div class="col-12 content-footer">
        <footer class="py-3 my-4">
            <img src="resources/images/svg/logo.svg" class="logo_footer" alt="">
            <p class="best_spot">El mejor lugar para invertir</p>
            <p class="address">Autopista Cancún - Playa del Carmen, Km 328 Puerto Morelos, Q. Roo C.P. 77580, Méx.</p>
            <ul class="nav justify-content-center pb-3 mb-3">
                <li class="nav-item">
                    <a href="tel:+5219982588488" class="nav-link px-2 text-body-secondary">
                        <img src="resources/images/svg/icons/phone.svg" alt=""> +52 1 998 258 8488
                    </a>
                </li>
                <li class="nav-item">
                    <a href="mailto:ventas@markearcrealtos.com?subject=Reserva&body=Mayankaan" class="nav-link px-2 text-body-secondary">
                        <img src="resources/images/svg/icons/phone.svg" alt="">
                        ventas@markearcrealtos.com
                    </a>
                </li>
            </ul>
            <p class="text-center text-body-secondary border-top pt-3 copy-rg">Mayakaan © 2023 Todos los Derechos reservados</p>
        </footer>
    </div>

    <!-- End Footer --> 

    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
     
</body>
</html>

<!-- 
https://filext.com/es/online-file-viewer.html

para ver el proyecto del archivo

https://getbootstrap.com/docs/5.3/layout/grid/ -->