
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blogs by E-Cell</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="../vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>


    <!-- Theme Styles -->
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../css/materialize.css" rel="stylesheet" type="text/css"/>
    <link href="../css/overlay.css" rel="stylesheet" type="text/css"/>
    <link href="../css/global/global.css" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="..//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="..//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="..//favicon-16x16.png">
    <link rel="manifest" href="..//site.webmanifest">
    <link rel="mask-icon" href="..//safari-pinned-tab.svg" color="#5bbad5">

    <!-- CSS -->
  <style>
  .card {
    transition: 0.5s ease;
    cursor: pointer;
  }

  .card:hover {
    transform: scale(1.05);
  }
  .carousel-inner img{
    height: auto;
  }

  @media screen and (max-width: 480px) {
  .carousel-inner img{
    height: 400px;
  }
  }
  </style>


    <title>Cards</title>
  </head>
  <body>
  	<header>
  		<?php include 'header.php';
  		?>
  	</header>
    	      <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="view">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
              alt="First slide">
            <div class="mask rgba-black-light"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Light mask</h3>
            <p>First text</p>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
              alt="Second slide">
            <div class="mask rgba-black-strong"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Strong mask</h3>
            <p>Secondary text</p>
          </div>
        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
              alt="Third slide">
            <div class="mask rgba-black-slight"></div>
          </div>
          <div class="carousel-caption">
            <h3 class="h3-responsive">Slight mask</h3>
            <p>Third text</p>
          </div>
        </div>
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="text-primary">22 July 2020</h6>
                    <h6>Person Name</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="bd-placeholder-img card-img-top" src="img/cards.jpg" alt="">
                  <div class="card-body">
                      <h4 class="card-title">Title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <h6 class="text-primary">22 July 2020</h6>
                      <h6>Person Name</h6>
                    </div>
                  </div>
                </div>
              </div>

              </div>
          </div>
        </div>
      </div>
      <footer>
      	<?php include 'footer.php';
      	?>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="../vendor/jquery.min.js"></script>
		<script src="js/main.js"></script>
        <script type="text/javascript" src="../vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="../vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="../vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="../vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="../vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="../vendor/counterup.min.js"></script>
        <script type="text/javascript" src="../vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="../vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="../vendor/jquery.wow.min.js"></script>
        <script src="../js/cards.js"></script>
		<script src="../js/materialize.js"></script>


        <!-- General Components and Settings -->
        <script type="text/javascript" src="../js/global.min.js"></script>
        <script type="text/javascript" src="../js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="../js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="../js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="../js/components/swiper.min.js"></script>
        <script type="text/javascript" src="../js/components/counter.min.js"></script>
        <script type="text/javascript" src="../js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="../js/components/parallax.min.js"></script>
        <script type="text/javascript" src="../js/components/google-map.min.js"></script>
        <script type="text/javascript" src="../js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->
  </body>
</html>