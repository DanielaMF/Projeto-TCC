<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php 
    include_once 'conexao.php';

    if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION["login"]))
	{
        session_destroy();
      // Redireciona o visitante de volta pro login
        header("Location: login.html"); exit;
    }
?>
<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Information Together for Students</title>
    
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
    
        <!-------------------------- Página Inicial ---------------------------------->
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
                <h1><a class="navbar-brand" href="index.php">
                        I <span class="sub-log"> T </span> S
                    </a></h1>
                <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.php">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <nav class="mr-auto ml-lg-5">
                        <div class="search-bar">
                            <form class="search">
                                <input type="search" class="search__input" name="search"
                                    placeholder="Pesquisar.." onload="equalWidth()" required>
                                <span class="fa fa-search search__icon"></span>
                            </form>
                        </div>
                    </nav>
                    <!-- Outras Páginas -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Provas</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contato</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' name='log' href='logout.php'>Sair</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->

                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container py-1">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--/header-->
    <!-- main-slider -->
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5></h5>
                                        <p class="mt-4 pr-lg-4"></p>
                                        <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.php" onclick="oculta1()"> Comece
                                            <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>UNIVERSIDADES</h5>
                                        <h5>FACULDADES</h5>
                                        <p class="mt-4 pr-lg-4"></p>
                                        <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.php">Comece 
                                            <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                        <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.php">Veja 
                                            <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Aqui na I T S</h5>
                                        <p class="mt-4 pr-lg-4">iremos te facilitar a procura pelo conhecimento</p>
                                        <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.php"> Comece
                                            <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                        <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.php">Veja
                                            <span class="fa fa-chevron-right ml-2"
                                                aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                
        </div>
    </section>
    <!-- /main-slider -->
    <!-- //banner section -->
    <!-- /content-1-->
    <div class="content-1 py-5">
        <div class="container py-md-5">
            <div class="row content-1-grids">
                <div class="col-lg-4 content-1-left forms-25-info">
                    <div class="header-title">
                        <span class="sub-title">Sobre nós</span>
                        <h3 class="hny-title">Aprenda em qualquer lugar</h3>
                     
                    </div>
                </div>
                <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                    <p class="">Esse site tem a finalidade ajudar estudantes que "querem conquistar seu lugar ao por do sol", um lugar de facil acesso a estudantes.
                    </p>
                </div>
                <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                    <p class="">Idealizado no dia 4 de março pela estudante de informatica Daniela Cardoso em Criciúma, Santa Catarina.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- //content-1-->
    <!--/courses-->
    <div class="w3l-homeblog py-5" id="homeblog">
        <div class="container py-lg-5 py-md-4">
            <div class="header-title mb-3">
                <span class="sub-title">Provas</span>
                <h3 class="hny-title text-left">De 2009 até 2021</h3>
            </div>
            <div class="row top-pics ">
                <div class="col-lg-3 col-md-6 mt-5">
                    <div class="top-pic1">
                        <div class="card-body blog-details">
                            <p class="course-sub">Provas online</p>
                            <a href="services.php" class="blog-desc">ENEM
                            </a>
                            <div class="author align-items-center">
                                <img src="assets/images/livro.png" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value">1</span>. 
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5">
                    <div class="top-pic2">
                        <div class="card-body blog-details">
                            <p class="course-sub">Provas online</p>
                            <a href="services.php" class="blog-desc">UNESC
                            </a>
                            <div class="author align-items-center">
                                <img src="assets/images/livro.png" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> 0</span>. 
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5">
                    <div class="top-pic3">
                        <div class="card-body blog-details">
                            <p class="course-sub">Provas online</p>
                            <a href="services.php" class="blog-desc">UFSC
                            </a>
                            <div class="author align-items-center">
                                <img src="assets/images/livro.png" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <ul class="blog-meta">
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> 0</span>. 
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="readhny-btm text-center mx-auto mt-md-4">
                    <a class="btn btn-primary btn-style mt-md-5 mt-4" href="services.php">Leia mais <span
                            class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- middle -->
    <div class="middle py-5">
        <div class="container pt-lg-2 pb-lg-4 py-4">
            <div class="welcome-left text-center py-lg-4">
                <h3 class="hny-title">Educando Campeões de um Mundo Justo e Sustentável.</h3>
                <div class="middle-buttons pb-5">
                    <a href="about.php" class="btn btn-style btn-white mt-sm-5 mt-4 mr-2">Leia<span
                            class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                    <a href="contact.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Contato <span
                            class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- //middle -->
    <!-- stats -->
    <section class="w3_stats py-lg-0 py-5" id="stats">
        <div class="container">
            <div class="w3-stats">
                <div class="row">
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-clone"></span>
                            <div class="timer count-title count-number mt-3" data-to="0" data-speed="1500"></div>
                            <p class="count-text">Atualizações</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-smile-o"></span>
                            <div class="timer count-title count-number mt-3" data-to="0" data-speed="1500"></div>
                            <p class="count-text">Gostaram</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-5">
                        <div class="counter">
                            <span class="fa fa-users"></span>
                            <div class="timer count-title count-number mt-3" data-to="2" data-speed="1500"></div>
                            <p class="count-text">Visitas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    
    <!--/w3l-newsletter-->
    <section class="w3l-newsletter">
        <!-- /form-25-section -->
        <div class="form-25-main py-5">
            <div class="container py-lg-5">
                <div class="forms-25-info">

                    <div class="header-title mb-md-5 mt-4">
                        <span class="sub-title">Login</span>
                        <h3 class="hny-title text-left">Seja da nova geração de estudantes</h3>
                    </div>
                    <form action="#" method="post" class="signin-form mt-4 mb-2">
                        <div class="forms-gds">
                            <input type="text" name="" placeholder="Name" required />
                            <input type="email" name="" placeholder="Email" required />
                            <button class="btn btn-style btn-primary">Entrar</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-newsletter-->
    

    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.php">I T S</a>
                        </div>
                        <p>Criado no dia 4 de março pela estudante de informatica Daniela Cardoso em Criciúma, Santa Catarina.</p>
                        <div class="main-social-footer-29 mt-4">
                            <a href="https://www.instagram.com/daniela_mfc_25/?next=%2F" class="instagram"><span class="fa fa-instagram"></span></a>
                            <a href="https://www.linkedin.com/in/daniela-m-f-cardoso-0b32a8253/" class="linkedin"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                        <ul>
                            <h6 class="footer-title-29">Links</h6>
                            <li><a href="about.php">Sobre</a></li>
                            <li><a href="services.php">Provas</a></li>
                            <li><a href="contact.php">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Mais Sobre</h6>
                        <ul>
                            <li><a href="#profile">Profisão</a></li>
                            <li><a href="#help">Ajuda</a></li>
                            <li><a href="#support"> Suporte</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Contatos </h6>
                        <p><strong>Endereço:</strong> I T S, de Daniela Cardoso, Curso de informatica, SATC - SC.</p>
                        <p class="my-2"><strong>Telefone :</strong> <a href="tel:+12 23456799">+12 23456799</a></p>
                        <p><strong>Email :</strong> <a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2022 I T S. Todos os direitos reservados. Desenhado por <a
                        target="_blank">
                        Daniela</a></p>

                <div class="col-lg-4 footer-list-29">
                    <ul class="d-flex text-lg-right justify-content-center mt-lg-0 mt-3">
                        <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Politica de Privacidade</a></li>
                        <li><a href="contact.php">Contate</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            &#10548;
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->

    <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

    <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items:2,
                        nav: false,
                        loop:true
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->

</body>

</html>