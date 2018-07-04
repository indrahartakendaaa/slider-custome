<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."static/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="foster.css">
    <style>
      /*override for dropdown hover*/
      .dropdown:hover>.dropdown-menu {
        display: block;
      }
    </style>
  </head>
  <body>

			<!--START: Navbar Basic B-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-light navbar-foster mt-3">
        <div class="container">
          <!-- <div class="navbar-header"> -->
            <a class="navbar-brand navbar-brand-center" href="<?php echo $prefix;?>index.php">
              <img src="<?php echo $prefix;?>assets/img/brand/logo_antikode-dark.png" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-absolute right" type="button" data-toggle="collapse" data-target="#navbarBasicB" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-light navbar-toggler-icon"></span>
            </button>
          <!-- </div> -->

          <div class="collapse navbar-collapse justify-content-center" id="navbarBasicB" style="background-color: transparent; position: relative;">
            <ul class="navbar-nav" style="top: 3rem; position: relative;">
              <li class="nav-item active">
                <a class="nav-link" href="ourroot.php">OUR ROOTS <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ourjuice.php">OUR JUICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="stocklist.php">STOCKLISTS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  FOLLOW US
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Instagram</a>
                  <a class="dropdown-item" href="#">Facebook</a>
                  <a class="dropdown-item" href="#">Twitter</a>
                </div>
              </li>
            </ul>
            <a href="cart.php">
              <img src="../../assets/img/common/ic_cart.svg" class="cart-logo">
            </a>
          </div>
        </div>
      </nav>
      <!--END: Navbar Basic B-->
	
			<!-- parallax nantinya -->
      <div class="cover my-5" style="background: url(<?php echo $prefix;?>assets/img/foster/cover-1.jpg) no-repeat center; background-size: cover;">
	      <div class="container justify-content-center">
	        <div class="cover-content text-center">
	        </div>
	      </div>
	    </div>

	    <section class="py-main">
        <div class="container container-sm">
          <h3 class="text-uppercase-custom mb-5">our juice</h3>
          <p class="font-weight-light font-size-md ">This area is a great place for spreading your message far and wide. To motivate an audience, write content that connects them to your ideas. Tell them how they can benefit and how their involvement can benefit others. You can also take this opportunity to talk about any other aspect of your business or project.</p>
          <p class="font-weight-light font-size-md ">Creating separate pages for your story and your mission or project can add depth to your site and let visitors understand the nuances of your idea. You can also customize how visitors experience your site with style changes. These are edits to the look of your site, like fonts, colors, backgrounds, and spacing. You can make and preview style changes in the Style Editor. Each template's Style Editor has different options called "tweaks." Learn how to use this feature here.</p>
          <p class="font-weight-light font-size-md ">The following is placeholder text known as “lorem ipsum,” which is scrambled Latin used by designers to mimic real copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non ligula in ligula commodo egestas. Integer cursus egestas ex dapibus eleifend. Maecenas mi erat, condimentum ac blandit sit amet, dapibus a purus. Praesent iaculis rutrum sapien, quis congue ligula tristique vel.</p>
          <a href="" class="btn btn-md btn-outline-dark text-uppercase-custom mt-3">visit our shop</a>
        </div> 
      </section>

	    <!--START: Footer B-->
      <footer>
        <div class="footer-top py-4">
          <div class="container">
            <div class="text-center">
            	<h4>FOSTER JUICE</h4>
              <a href="#" class="text-dark d-inline-block mx-1">
                <div class="fa-2x">
                  <i class="fab fa-facebook-f" data-fa-transform="shrink-9" data-fa-mask="fas fa-circle"></i>
                </div>
              </a>
              <a href="#" class="text-dark d-inline-block mx-1">
                <div class="fa-2x">
                  <i class="fab fa-twitter" data-fa-transform="shrink-9" data-fa-mask="fas fa-circle"></i>
                </div>
              </a>
              <a href="#" class="text-dark d-inline-block mx-1">
                <div class="fa-2x">
                  <i class="fab fa-instagram" data-fa-transform="shrink-7" data-fa-mask="fas fa-circle"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="footer-bottom py-4">
          <div class="container text-center">
            <div class="d-block mb-5">
              <small class="mx-2 text-uppercase-custom">
              	<a href="#" class="text-dark">Contact</a>
              </small>
              <small class="mx-2 text-uppercase-custom">
              	<a href="#" class="text-dark">Faq</a>
              </small>
              <small class="mx-2 text-uppercase-custom">
              	<a href="" class="text-dark">Blog</a>
              </small>
            </div>
            <p>Use the Newsletter Block below to collect email addresses.</p>
            <div class="subscribe">
            	<input placeholder="Email address" class="form-control"><button class="btn btn-dark">Sign Up</button>
            </div>
            <small class="d-block mt-3 text-muted text-center">Designed by <a href="http://www.antikode.com" class="text-muted" target="_blank">Antikode</a></small>
          </div>
        </div>
      </footer>
      <!--END: Footer B-->
		


    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      // Navbar active state
      $('#navHome').addClass('active');

      // Animation on load
      $(window).on("load", function() {
        $(".loader").fadeOut();
        $(".loader-wrapper").delay(500).fadeOut("slow");
        $(".anim-1").addClass("animated fadeInUp delayp4");
        $(".anim-2").addClass("animated fadeInup delayp6");
        $(".anim-3").addClass("animated fadeInUp delayp8");
      });
    </script>

  </body>
</html>
