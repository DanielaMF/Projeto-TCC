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
                                    placeholder="Search for Courses.." onload="equalWidth()" required>
                                <span class="fa fa-search search__icon"></span>
                            </form>
                        </div>
                    </nav>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Provas</a>
                        </li>
                       
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.html">Contato</a>
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
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contato</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- about page about section -->
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                        <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <div class="header-title mb-md-5 mt-4">
                                <span class="sub-title">Find Us</span>
                                <h3 class="hny-title text-left">Informações adicionais </h3>
                            </div>
                            

                        </div>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Numero de telefone</h6>
                                <p><a href="tel:+(48) 99168 0379">+(48) 99168 0379</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Mande email</h6>
                                <p><a href="mailto:danielacardoso2506@gmail.com" class="mail">danielacardoso2506@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Localização</h6>
                                <p class="pr-lg-5">SATC - Criciuma </p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <div class="header-title mb-md-5 mt-4">
                                    <span class="sub-title">Contate nos </span>
                                    <h3 class="hny-title text-left">Escreva o formulário </h3>
                                </div>
                               
                            </div>
                            <form action="mailto:danielacardoso2506@gmail.com" method="post">
                                <div class="twice-two">
                                    <input type="text" class="form-control" name="nome" id="w3lName"
                                        placeholder="Nome" required="">
                                    <input type="email" class="form-control" name="email" id="w3lSender"
                                        placeholder="Email" required="">
                                </div>
                                <div class="twice">
                                    <input type="text" class="form-control" name="assunto" id="w3lSubject"
                                        placeholder="Assunto" required="">
                                </div>
                                <textarea name="w3lMessage" class="form-control" id="mensagem" placeholder="Adicional"
                                    required=""></textarea>
                                <div class="text-right">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-style mt-4">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                

            </div>
    </section>
    <!-- /contact1 -->

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
                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
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
                      <li><a href="contact.html">Contate</a></li>
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