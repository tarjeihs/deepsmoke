<?php
  session_start();

  require_once ('steam/steamclient.php');

  $steamClient = new SteamClient();
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html" ; charset="IANAcharset">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="application-name" content="">
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="generator" content="">
  <meta name="keywords" content="">

  <meta name="robots" content="index">
  <meta name="robots" content="follow">
  <meta name="robots" content="noarchive">
  <meta name="robots" content="noodp">

  <title>
        Deepsmoke
  </title>

  <link href="resources/css/local/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="resources/css/local/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <link href="resources/css/local/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <link href="resources/css/freelancer.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Active Duty</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <?php
          if (!isset($_SESSION['STEAMCLIENT'])) { echo '<a class="navbar-brand js-scroll-trigger" href="?steam_callback_login"><img src="/resources/img/sits_01.png"/></a>'; }
          else { echo '<h2 style="color: white;" class="js-scroll-trigger">Welcome back ' . $_SESSION['STEAM']['PERSONANAME'] . '</h2>';}
        ?>
      </div>
    </nav>

    <header class="masthead bg-secondary text-white text-center">
      <div class="container">
        <!--<img class="img-fluid mb-5 d-block mx-auto" src="/resources/img/profile.png" alt="">-->
        <h1 class="text-uppercase mb-0">Deepsmoke</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">PRACTISE. IMPROVE. WIN.</h2>
      </div>
    </header>

    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Active Duty</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/resources/img/portfolio/deinferno.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/resources/img/portfolio/demirage.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/resources/img/portfolio/denuke.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/resources/img/portfolio/decbble.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/resources/img/portfolio/deoverpass.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/resources/img/portfolio/decache.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-7">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="/resources/img/portfolio/detrain.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-secondary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Deepsmoke is a free site created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#">
            <i class="fa fa-download mr-2"></i>
            Download Now!
          </a>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Us</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Deepsmoke 2018</small>
      </div>
    </div>

    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <!-- Inferno -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Inferno</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="/resources/img/portfolio/deinferno.png" alt="">
              <p class="mb-5">The map is set in a small town with European architecture. In the Global Offensive version, the presence of the Separatist faction suggests that the map is set in the Basque Country, where the real ETA separatist group operates, though signs written in Italian seen around the map suggest otherwise.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa"></i>
                Go to Inferno
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mirage -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">mirage</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="/resources/img/portfolio/demirage.png" alt="">
              <p class="mb-5">The map is themed like a Middle Eastern town, but because of its close resemblance to Moroccan style architecture, it is likely set somwere in Morocco.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa"></i>
                Go to Mirage</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Nuke -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Nuke</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="/resources/img/portfolio/denuke.png" alt="">
              <p class="mb-5">Unlike most Counter-Strike bomb defusal maps, Nuke revolves around a central structure rather than multiple lanes, with the two bombsites being overlapped on top of each other.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa"></i>
                Go to Nuke</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cobblestone -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Cobblestone</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="/resources/img/portfolio/decbble.png" alt="">
              <p class="mb-5">Cobblestone is a large-sized map, and had quite significant vertical combat in its earlier iterations. In earlier versions, it is fairly easy to take fall damage due to the high height of many of the map's drops.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa"></i>
                Go to Cobblestone</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Overpass -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Overpass</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="/resources/img/portfolio/deoverpass.png" alt="">
              <p class="mb-5">The map's setting is a canal overpass and the park built above it in Berlin, Germany. The GSG-9 must protect a stalled military shipment on a canal overpass while the Phoenix Connexion can either attack the shipment head-on or attempt to destroy the overpass itself by bombing the pillar below.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa"></i>
                Go to Overpass</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cache -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Cache</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="/resources/img/portfolio/decache.png" alt="">
              <p class="mb-5">“Surgical precision and tactical prowess are crucial to securing a hidden weapons cache beneath Chernobyl.”</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa"></i>
                Go to Cache</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Train -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-7">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Train</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="/resources/img/portfolio/detrain.png" alt="">
              <p class="mb-5">The official factions in this map is SEAL Team 6 and the Balkans. The revised version's bomb site A contains a derailed flatbed cargo car with two nuclear containers, while bomb site B contains a flatbed car with two boxed diesel train engines.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa"></i>
                Go to Train</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  <!-- Bootstrap core JavaScript -->
  <script src="resources/css/local/jquery/jquery.min.js"></script>
  <script src="resources/css/local/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="resources/css/local/jquery-easing/jquery.easing.min.js"></script>
  <script src="resources/css/local/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="resources/js/jqBootstrapValidation.js"></script>
  <script src="resources/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="resources/js/freelancer.min.js"></script>
</body>
</html>
