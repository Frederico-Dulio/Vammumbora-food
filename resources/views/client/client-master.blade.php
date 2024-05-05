<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <title>KamuSumbe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('toatr.css') }}" rel="stylesheet" />
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>KamuSumbe</h1>


            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="#" class="nav-item nav-link active smoothScroll">Home</a>
                    <a href="#servico" class="nav-item nav-link smoothScroll">Serviços</a>
                    <a href="#sobre" class="nav-item nav-link smoothScroll">Sobre</a>
                    <a href="#menu" class="nav-item nav-link smoothScroll">Menu</a>

                    <a href="{{ route('client.logout') }}" class="nav-item nav-link">Sair</a>
                </div>
                <a href="#reservar" class="btn btn-primary py-2 px-4 smoothScroll">Reservar</a>
            </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Você<br>Nunca provou nada igual!</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Officia placeat doloribus magni nihil? Cumque, expedita dicta incidunt
                            delectus iste, eum officia modi distinctio deserunt repudiandae tempore vero
                            consequuntur molestias error. Incidunt nihil placeat, animi maiores distinctio illum
                            voluptatem nesciunt voluptatibus facilis quibusdam labore perferendis, natus aliquam eum
                            rerum, totam eveniet!</p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" id="servico">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>Chefes</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, dolorem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Comida de Qualidade</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, commodi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Compras e Reservas Online</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>Aberto 24/24</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, magni?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="sobre">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                 src="img/about-1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                 src="img/about-2.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                 src="img/about-3.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                 src="img/about-4.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal team-thumb wow fadeInUp"
                        data-wow-delay="0.2s">Sobre Nós</h5>
                    <h1 class="mb-4">Bem Vindo ao <i class="fa fa-utensils text-primary me-2"></i>VamBora Food
                    </h1>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet
                        quidem saepe itaque deserunt ratione.</p>
                    <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus quasi ducimus
                        maiores non totam recusandae!</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">07
                                </h1>
                                <div class="ps-4">
                                    <p class="mb-0">Anos de Experiênicas</p>
                                    <h6 class="text-uppercase mb-0">Experiênicas</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50
                                </h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0">Chefes</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Ver Mais</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Menu Start -->
    <div class="container-xxl py-5" id="menu">
        <div class="container" >
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu</h5>
                <h1 class="mb-5">Pratos Mais Requeridos</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                           href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Café da Manhã</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                           href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Especial</small>
                                <h6 class="mt-n1 mb-0">Abertura</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                           href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Amável</small>
                                <h6 class="mt-n1 mb-0">Jantar</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt=""
                                         style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hamburger De Carne</span>
                                            <span class="text-primary">5.000Kzs</span>
                                        </h5>
                                        <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo
                                            diam</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reserva Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" id="reservar">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="img/cooking.mp4" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>

            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservar</h5>
                    <h1 class="text-white mb-4">Cardapio Online</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Nome Completo" required>
                                    <label for="oame">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email"
                                           placeholder="exemplo@gmail.com" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" id="datetime"
                                           placeholder="Date & Time" data-target="#date3"
                                           data-toggle="datetimepicker" required/>
                                    <label for="datetime">Data & Hora</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control"
                                           placeholder="Date & Time" min="1" max="20" id="pessoa" required/>
                                    <label for="pessoa">Pessoas</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message"
                                                  style="height: 100px" required></textarea>
                                    <label for="message">Pedidos Especiais</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Confirmar a Reserva</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Start -->


    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Nossa Equipe</h5>
                <h1 class="mb-5">Todos os Chefes</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('Welcome/images/chef.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-0">Ana Fernandes</h5>
                        <small>Comidas Áfricana</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('Welcome/images/chef3.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-0">José Armando</h5>
                        <small>Carnes e Grelhados</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('Welcome/images/chef2.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-0">Isabela Graça</h5>
                        <small>Pizza</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Carlos Dos Reis</h5>
                        <small>Chefe de Cosinha</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testemunhos</h5>
                <h1 class="mb-5">Oque Os Nossos Clientes Dizem!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error atque dolorem, voluptatum
                        pariatur quis fugit!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                             style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Marisa Dias</h5>
                            <small>Professora</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error atque dolorem, voluptatum
                        pariatur quis fugit!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpeg"
                             style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Frederico Dulio</h5>
                            <small>Professor</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error atque dolorem, voluptatum
                        pariatur quis fugit!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpeg"
                             style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Azevaldo Caluaco</h5>
                            <small>Desenvolvedor Web</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error atque dolorem, voluptatum
                        pariatur quis fugit!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg"
                             style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Ana Maria</h5>
                            <small>Auditora</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">KamuSumbe</a>, Todos os direitos reservados.
                        Desenvolvido por<a class="border-bottom" href="https://htmlcodex.com"> Frederico
                            Dulio </a><br><br>
                        Distribuido por <a class="border-bottom" href="https://themewagon.com" target="_blank"> KamuSumbe </a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="Welcome/js/smoothscroll.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<script src="{{ asset('toastr.min.js') }}"></script>
<script src="{{ asset('toastr.js') }}"></script>

<script>
    "use strict";
    var o = "rtl" === $("html").attr("data-textdirection");
    @if (session('error'))
    toastr.error("{{ session('error') }}",
        "", {
            closeButton: !0,
            tapToDismiss: !0,
            progressBar: !0,
            rtl: o
        }
    );
    @endif
</script>

<script>
    "use strict";
    var o = "rtl" === $("html").attr("data-textdirection");
    @if (session('errorload'))
    toastr.warning("{{ session('errorload') }}",
        "", {
            closeButton: !0,
            tapToDismiss: !0,
            progressBar: !0,
            positionClass: "toast-top-left",
            rtl: o
        }
    );
    @endif
</script>

<script>
    "use strict";
    var o = "rtl" === $("html").attr("data-textdirection");
    @if (session('logout'))
    toastr.info("{{ session('logout') }}",
        "", {
            closeButton: !0,
            tapToDismiss: !0,
            progressBar: !0,
            // positionClass: "toast-top-left",
            rtl: o
        }
    );
    @endif
</script>

<script>
    "use strict";
    var o = "rtl" === $("html").attr("data-textdirection");
    @if (session('cadastrar'))
    toastr.success("{{ session('cadastrar') }}",
        "", {
            closeButton: !0,
            tapToDismiss: !0,
            progressBar: !0,
            positionClass: "toast-top-center",
            rtl: o
        }
    );
    @endif
</script>

<script>
    "use strict";
    var o = "rtl" === $("html").attr("data-textdirection");
    @if (session('errorclient'))
    toastr.warning("{{ session('errorclient') }}",
        "", {
            closeButton: !0,
            tapToDismiss: !0,
            progressBar: !0,
            positionClass: "toast-top-left",
            rtl: o
        }
    );
    @endif
</script>

</body>

</html>
