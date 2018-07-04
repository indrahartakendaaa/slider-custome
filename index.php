<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="";?>
    <?php include($prefix."static/head.php"); ?>
  </head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
  <style>
    #slider-1 .slider {
      position: relative;
    }

    #slider-1 .slick-dotted.slick-slider{
      margin-bottom: 0px;
    }

    #slider-1 .slick-dots {
      right: -30px;
      width: auto;
      top: 2px;
      bottom: auto;
      text-align: center;
      z-index: 999;
    }

    #slider-1 .slick-dots li button:before {
      font-size: 7.2px;
      line-height: 6px;
      width: 6px;
      height: 6px;
      border-radius: 100px;
      transition: all .1s ease;
    }

    #slider-1 .slick-dots li.slick-active button:before {
      box-shadow: 0px 2px 10px #aaa;
      transition: all .1s ease;
      font-size: 9.2px;
        line-height: 8px;
        width: 8px;
        height: 8px;
    }

    #slider-1 .slick-dots li {
      display: block;
      margin-bottom: 10px;
    }

    #slider-1 .slider img {
      width: 100%;
      object-fit: cover;
      height: 400px;
    }

    #slider-1 .information {
      min-height: 200px;
    }

    #slider-1 #download {
      margin-top: -160px;
    }

    #slider-horizontal-overflow {
      overflow: hidden;
    }

    #slider-horizontal-overflow img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    #slider-horizontal-overflow .responsive {
      margin-right: -200px;
    }

    .slider-for {
      position: relative;
      width: 33%;
    }
    .slider-for h3 {
      width: 100%;
      border: 3px red solid;
      height: 500px;
      bottom: 0;
      top: 0;
      z-index: 9999;
    }

    .slider-nav {
      margin-top: -500px;
    }
  </style>
  <body>

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> 

    <?php include($prefix."static/navbar.php"); ?>

    <section class="py-main" id="slider-1">
      <div class="container">
        <h2>Slider Vertical</h2>
        <h3>V.1</h3>
          <div class="slider mt-3">
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://placehold.it/96.png" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Lorem ipsum dolor sit amet elit sed do eiusmod
                    tempor ut labore et.</h2>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://via.placeholder.com/350x150" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Excepteur sint occaecat cupidatat non
                    proident sunt.</h2>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://placehold.it/96.png" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Lorem ipsum dolor sit amet elit sed do eiusmod
                    tempor ut labore et.</h2>
                    <p class="text-gray-200"> Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://via.placeholder.com/350x150" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Duis aute irure dolor in reprehenderit in voluptate velit/</h2>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-5" id="download">
            <div class="col-md-8 offset-md-4">
              <button class="btn btn-primary">Google Play</button>
              <button class="btn btn-primary">App Store</button>
            </div>
          </div>
      </div>
    </section>
    <section class="py-main" id="slider-1">
      <div class="container">
        <h3>V.2</h3>
          <div class="slider mt-3">
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://placehold.it/96.png" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Lorem ipsum dolor sit amet elit sed do eiusmod
                    tempor ut labore et.</h2>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                    <button class="btn btn-primary">Google Play</button>
                    <button class="btn btn-primary">App Store</button>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://via.placeholder.com/350x150" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Excepteur sint occaecat cupidatat non
                    proident sunt.</h2>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://placehold.it/96.png" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Lorem ipsum dolor sit amet elit sed do eiusmod
                    tempor ut labore et.</h2>
                    <p class="text-gray-200"> Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <button class="btn btn-primary">Google Play</button>
                    <button class="btn btn-primary">App Store</button>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="row row-5">
                <div class="col-md-4">
                  <img src="http://via.placeholder.com/350x150" alt="">
                </div>
                <div class="col-md-8">
                  <div class="pr-5 information">
                    <h2>Duis aute irure dolor in reprehenderit in voluptate velit/</h2>
                    <p class="text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section class="py-main mt-6" id="slider-horizontal-overflow">
      <div class="container">
        <h2>Slider Horizontal Full Width</h2>
      </div>
      <div class="row mt-3">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-9 offset-md-3">
              <div class="pl-3">
                <h2>Pay</h2>
                <p class="font-size-sm text-gray-200">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="responsive">
            <div>
              <img src="http://placehold.it/96.png" alt="">
            </div>
            <div>
              <img src="http://via.placeholder.com/350x150" alt="">
            </div>
            <div>
              <img src="http://placehold.it/96.png" alt="">
            </div>
            <div>
              <img src="http://via.placeholder.com/350x150" alt="">
            </div>
            <div>
              <img src="http://placehold.it/96.png" alt="">
            </div>
            <div>
              <img src="http://via.placeholder.com/350x150" alt="">
            </div>
            <div>
              <img src="http://placehold.it/96.png" alt="">
            </div>
            <div>
              <img src="http://via.placeholder.com/350x150" alt="">
            </div>
            <div>
              <img src="http://placehold.it/96.png" alt="">
            </div>
            <div>
              <img src="http://via.placeholder.com/350x150" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-main">
      <div class="container">
        <div class="mobile slider-for">
          <div>
            <h3>1</h3>
          </div>
          <div>
            <h3>2</h3>
          </div>
          <div>
            <h3>3</h3>
          </div>
          <div>
            <h3>4</h3>
          </div>
          <div>
            <h3>5</h3>
          </div>
        </div>
        <div class="mobile slider-nav">
          <div>
            <h3>1</h3>
          </div>
          <div>
            <h3>2</h3>
          </div>
          <div>
            <h3>3</h3>
          </div>
          <div>
            <h3>4</h3>
          </div>
          <div>
            <h3>5</h3>
          </div>
        </div>
      </div>
    </section>

  </body>

    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

    <script>
      // Navbar active state
      $('#navHome').addClass('active');

      // Animation on load
      document.addEventListener("DOMContentLoaded", function(event) {
        $(".loader").fadeOut('slow');
        $(".loader-wrapper").fadeOut("slow");
      //  $(".anim-1").addClass("animated fadeInLeft delayp10");
       // $(".anim-2").addClass("animated fadeInUp delayp12");
        //$(".anim-3").addClass("animated fadeInUp delayp14");  
      });

      $(document).ready(function() {
        // slick carousel
        $('.slider').slick({
          slidesToShow: 1,
          dots: true,
          fade: true,
          autoplay: true,
          autoplaySpeed: 1000,

        });

        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });

           $('.slider-for').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              asNavFor: '.slider-for',
              dots: true,
              focusOnSelect: true
            });

      });

    </script>

  </body>
</html>
