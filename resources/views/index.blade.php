<!DOCTYPE html>
<html lang="pt-PT">

<head>

    <title>VamBora Food</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="author" content="Frederico Dulio">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('Welcome/css/bootstrap.min.css') }}">
    <link rel="sylesheet" href="{{ asset('Welcome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Welcome/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('Welcome/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('Welcome/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Welcome/css/magnific-popup.css') }}">

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <link rel="shortcut icon" href="{{ asset('Admin/img/logo.png') }}" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('Welcome/css/templatemo-style.css') }}">

    <link rel="stylesheet" href="{{ asset('Welcome/style.css') }}">

    {{-- Tela Login --}}
    <link rel="stylesheet" href="{{ asset('login/style.css') }}">

    <link href="{{ asset('toatr.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>

    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO -->
                <a href="#" class="navbar-brand">VamBoraa<span> Food </span></a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">Sobre</a></li>
                    <li><a href="#team" class="smoothScroll">Chef</a></li>
                    <li><a href="#menu" class="smoothScroll">Menu</a></li>
                    <li><a href="#contact" class="smoothScroll">Contacto</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="#" class="section-btn" id="form-open">Login</a>
                </ul>
            </div>

        </div>
    </section>

    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>FAD Coffee &amp; Restaurant</h3>
                                <h1>A nossa missão é lhe oferecer uma experiência inesquecível</h1>
                                <a href="#team" class="section-btn btn btn-default smoothScroll">Conversar com
                                    um dos nossos chefes</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Pequeno-Almoço perfeito para você</h3>
                                <h1>Também garantimos um jantar perfeito para você!</h1>
                                <a href="#menu" class="section-btn btn btn-default smoothScroll">Verificar o
                                    Menu</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Melhor Restaurante da Cidade</h3>
                                <h1>Satisfazer os teus desejos é o nosso objetivo!</h1>
                                <a href="#contact" class="section-btn btn btn-default smoothScroll">Contactar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h4>Nossa História</h4>
                            <h2>Fazendo comidas deliciosas desde 2017</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic maiores culpa
                                incidunt dicta vitae nostrum, necessitatibus repellat libero soluta suscipit
                                beatae iure cumque expedita facilis quasi accusamus reprehenderit.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure quasi id,
                                voluptatem eaque ex nulla, natus maiores blanditiis error ea similique
                                consequuntur, earum fuga labore eos voluptates cupiditate! Expedita, voluptatum!
                                <a href="#" target="_parent">FAD Coffe & Restaurant</a>. Obrigado.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="{{ asset('Welcome/images/about-image.jpg') }}" class="img-responsive"
                            alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Conversar com os nossos chefes</h2>
                        <h4>Será sempre um pazer servir você Amigo!</h4>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('Welcome/images/chef.jpg') }}" class="img-responsive" alt="">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                    <li><a href="#" class="fa fa-envelope-o"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>New Catherine</h3>
                        <p>Kitchen Officer</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('Welcome/images/chef3.jpg') }}" class="img-responsive" alt="">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-flickr"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Lindsay Perlen</h3>
                        <p>Owner &amp; Manager</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{ asset('Welcome/images/chef2.jpg') }}" class="img-responsive" alt="">
                        <div class="team-hover">
                            <div class="team-item">
                                <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-github"></a></li>
                                    <li><a href="#" class="fa fa-google"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Isabella Grace</h3>
                        <p>Pizza Specialist</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MENU-->
    <section id="menu" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Menu do Dia</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="{{ asset('Welcome/images/1.jpg') }}" class="image-popup"
                            title="American Breakfast">
                            <img src="{{ asset('Welcome/images/1.jpg') }}" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>American Breakfast</h3>
                                    <p>Tomato / Eggs / Sausage</p>
                                </div>
                                <div class="menu-price">
                                    <span>$25</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="{{ asset('Welcome/images/10.jpg') }}" class="image-popup" title="Self-made Salad">
                            <img src="{{ asset('Welcome/images/10.jpg') }}" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Self-made Salad</h3>
                                    <p>Green / Fruits / Healthy</p>
                                </div>
                                <div class="menu-price">
                                    <span>$18</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="{{ asset('Welcome/images/4.jpg') }}" class="image-popup" title="Chinese Noodle">
                            <img src="{{ asset('Welcome/images/4.jpg') }}" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Chinese Noodle</h3>
                                    <p>Pepper / Chicken / Vegetables</p>
                                </div>
                                <div class="menu-price">
                                    <span>$34</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="{{ asset('Welcome/images/q.jpg') }}" class="image-popup" title="Rice Soup">
                            <img src="{{ asset('Welcome/images/q.jpg') }}" class="img-responsive" alt="imagem">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Rice Soup</h3>
                                    <p>Green / Chicken</p>
                                </div>
                                <div class="menu-price">
                                    <span>$28</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="{{ asset('Welcome/images/11.jpg') }}" class="image-popup" title="Project title">
                            <img src="{{ asset('Welcome/images/11.jpg') }}" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Deli Burger</h3>
                                    <p>Beef / Fried Potatoes</p>
                                </div>
                                <div class="menu-price">
                                    <span>$46</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="{{ asset('Welcome/images/Da banda.jpg') }}" class="image-popup"
                            title="Project title">
                            <img src="{{ asset('Welcome/images/Da banda.jpg') }}" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Big Flat Fried</h3>
                                    <p>Pepper / Crispy</p>
                                </div>
                                <div class="menu-price">
                                    <span>$30</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- Testemunhos -->
    <section id="testimonial" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Testeunhas</h2>
                    </div>
                </div>

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat odio minus
                                repudiandae provident doloribus nam, voluptatum rerum! Porro, officiis
                                perferendis.</p>
                            <div class="tst-author">
                                <h4>Isabel Bongo</h4>
                                <span>Pharetra quam sit amet</span>
                            </div>
                        </div>

                        <div class="item">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum sunt tempora
                                distinctio earum id! Fugit doloribus qui laborum soluta explicabo.</p>
                            <div class="tst-author">
                                <h4>Felicia Elimila</h4>
                                <span>Magna nisi porta ligula</span>
                            </div>
                        </div>

                        <div class="item">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quia neque
                                possimus, officiis cumque dolorum? Soluta nulla quas eaque nam!</p>
                            <div class="tst-author">
                                <h4>Nvita Zankulo</h4>
                                <span>Vitae lacinia augue urna quis</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr>
    <!-- Contacto -->
    <section id="contact" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                    <div id="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5259.392398892639!2d13.40914459203177!3d-12.585485001818466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2sao!4v1707667249674!5m2!1spt-PT!2sao"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2>Contactar</h2>
                        </div>
                    </div>

                    <!-- CONTACT FORM -->
                    <form action="" method="POST" class="wow fadeInUp" id="contact-form" role="form"
                        data-wow-delay="0.8s">
                        @csrf
                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Menssagem enviada com sucesso.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail deve ser válido e a Menssagem com mais de 1 caracter.</h6>

                        <div class="col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="cf-name" name="name"
                                placeholder="Nome Completo">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="cf-email" name="email"
                                placeholder="Email: exemplo@gmail.com">
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" id="cf-subject" name="subject"
                                placeholder="Assunto">

                            <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Menssagem"></textarea>

                            <button type="submit" class="form-control" id="cf-submit" name="submit">Enviar
                                Menssagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('login')

    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Nossa localização</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Benguela, centro da cidade</p>
                        </address>
                    </div>
                </div>

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Reservar uma Mesa</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>+244 926 748 637 | +244 956 489 629</p>
                            <p><a href="mailto:info@company.com">vamboraafood@gmail.com</a></p>
                        </address>
                    </div>
                </div>

                <div class="col-md-4 col-sm-8">
                    <div class="footer-info footer-open-hour">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Aberto</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <div>
                                <strong>Segunda à Sexta</strong>
                                <p>7 : 00 - 22 : 00</p>
                            </div>
                            <p>Domingo: Fechado</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                    </ul>

                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p><br>dev &copy;Frederico Dulio<br>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset('Welcome/js/jquery.js') }}"></script>
    <script src="{{ asset('Welcome/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Welcome/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('Welcome/js/wow.min.js') }}"></script>
    <script src="{{ asset('Welcome/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Welcome/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Welcome/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('Welcome/js/custom.js') }}"></script>
    <script src="{{ asset('Welcome/js/script.js') }}"></script>
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

</body>

</html>
