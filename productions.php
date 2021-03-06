<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/css/swiper.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Productions</title>

</head>
<body>

    <?php include('./extands/navbar.php'); ?>
    
    <header class="banner-main-inpage img-parallax" data-parallax="scroll" data-image-src="./img/banner/bg.png">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="banner-title">Nos Productions</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- MOVIE app-section-wrapper w=276 h=368 -->
    <section class="movie-area movie-banner-area pt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container movie-slider py-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card bg-dark text-white movie-card">
                                    <a href="#">
                                        <img class="card-img" src="img/films/layer-1.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card bg-dark text-white movie-card">
                                    <a href="#">
                                        <img class="card-img" src="img/films/layer-2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card bg-dark text-white movie-card">
                                    <a href="#">
                                        <img class="card-img" src="img/films/layer-3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card bg-dark text-white movie-card">
                                    <a href="#">
                                        <img class="card-img" src="img/films/layer-4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card bg-dark text-white movie-card">
                                    <a href="#">
                                        <img class="card-img" src="img/films/layer-5.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END MOVIE -->

    <!-- MOVIE FILTER -->
    <section class="movie-filters-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg filter-nav navbar-light">
                <span class="navbar-brand d-lg-none" href="#">Movie filter</span>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#moviesfilter" aria-controls="moviesfilter"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="moviesfilter">
                    <ul class="navbar-nav w-100 justify-content-between mx-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link filter-item active" href="javascript:void(0)" data-filter="all">Tout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link filter-item" data-filter="long-metrages" href="javascript:void(0)">Long-Metrages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link filter-item" data-filter="court-metrage" href="javascript:void(0)">Court-Metrage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link filter-item" data-filter="telefilms" href="javascript:void(0)">Téléfilms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link filter-item" data-filter="series" href="javascript:void(0)">Séries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link filter-item" data-filter="pub-et-clip-musicaux" href="javascript:void(0)">Pub et Clip Musicaux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link filter-item" data-filter="documentaires" href="javascript:void(0)">Documentaires</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!-- ENd MOVIE FILTER-->

    <!-- YOUTUBE -->
    <section class="movieslist-area app-section-wrapper">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 mb-4 single-movie filter-block telefilms">
                    <a class="w-100" href="">
                        <img class="img-fluid" src="./img/films/layer-1.png" alt="">
                    </a>
                </div>
                <div class="col-md-3 mb-4 single-movie filter-block long-metrages">
                    <a class="w-100" href="">
                        <img class="img-fluid" src="./img/films/layer-2.png" alt="">
                    </a>
                </div>
                <div class="col-md-3 mb-4 single-movie filter-block series">
                    <a class="w-100" href="">
                        <img class="img-fluid" src="./img/films/layer-3.png" alt="">
                    </a>
                </div>
                <div class="col-md-3 mb-4 single-movie filter-block pub-et-clip-musicaux">
                    <a class="w-100" href="">
                        <img class="img-fluid" src="./img/films/layer-4.png" alt="">
                    </a>
                </div>
                <div class="col-md-3 mb-4 single-movie filter-block documentaires">
                    <a class="w-100" href="">
                        <img class="img-fluid" src="./img/films/layer-5.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- YOUTUBE -->
    <section class="youtube-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 youtube-block">
                    <h2>Suivez-nous sur <br> youtube</h2>
                </div>
                <div class="col-md-6 px-0 y-img-block d-lg-none">
                    <a href="https://m.youtube.com/channel/UCqcYWcGNANm4t0sAP8PRczw" target="_blanck">
                        <img src="./img/youtube-mobile.png" class="img-fluid y-img" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END YOUTUBE -->

    <!-- CLIENTS -->
    <section  class="clients-area app-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3 mb-md-0">
                    <h2 class="app-section-title mb-4 mb-md-0">ILS NOUS FONT CONFIANCE</h2>
                </div>
                <div class="col-md-12 px-5 px-md-2">
                    <div class="swiper-container swiper-clients">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"> <div class="client-mumber rounded-circle"> <img class="img-fluid" src="./img/clients/2m.png" alt=""> </div> </div>
                            <div class="swiper-slide"> <div class="client-mumber rounded-circle"> <img class="img-fluid" src="./img/clients/interface.png" alt=""> </div> </div>
                            <div class="swiper-slide"> <div class="client-mumber rounded-circle"> <img class="img-fluid" src="./img/clients/renault.png" alt=""> </div> </div>
                            <div class="swiper-slide"> <div class="client-mumber rounded-circle"> <img class="img-fluid" src="./img/clients/smsa.png" alt=""> </div> </div>
                            <div class="swiper-slide"> <div class="client-mumber rounded-circle"> <img class="img-fluid" src="./img/clients/snrt.png" alt=""> </div> </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="clients-nav swiper-button-next"></div>
                    <div class="clients-nav swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES -->

    <!-- FOOTER -->
    <footer class="footer-area py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 pl-md-5 text-white offset-md-1">
                    <div class="d-flex w-100 align-items-md-end align-items-center  mb-5">
                        <img src="img/logo.png" width="150px" class="mr-2" alt="">
                        <h3 class="foot-logo-text">Ciné-Scène International</h3>
                    </div>
                    <div class="foot-body mb-5">
                        <i class="fa fa-map-marker-alt mr-2" aria-hidden="true"></i> CINE SCENE INTERNATIONAL 39, Rue Lalla Yacout <br>
                            Quartier Liberté B.P. : 20080 - Casablanca - Maroc <br>
                        <i class="fas fa-phone-alt mr-2"></i> +212 (0) 522 300 060 <i class="fa fa-envelope ml-2 mr-2" aria-hidden="true"></i> contact@cinescene.ma <br>
                        <a class="text-reset mr-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="text-reset mr-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="text-reset mr-2" href=""><i class="fab fa-youtube"></i></a>
                        Suivez nous sur les réseaux sociaux <br>
                        N'hésitez pas à nous contacter
                        <a class="foot-contect" href="">ici</a>
                    </div>
                    <div class="foot-copyright mt-md-4 text-center">
                        <p class="m-md-0">Copyright CSI <i class="far fa-copyright"></i> 2020</p>
                    </div>
                </div>
                <div class="col-md map-block pr-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13294.287592673989!2d-7.6124932!3d33.5904629!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e21ce9ce5276bce!2sCin%C3%A9-Sc%C3%A8ne%20International!5e0!3m2!1sfr!2sma!4v1588526557984!5m2!1sfr!2sma" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script type="text/javascript" src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/js/swiper.min.js'></script>
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js'></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.5.0/parallax.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>