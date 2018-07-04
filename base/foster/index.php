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
      <div class="parallax-window" data-image-src="<?php echo $prefix;?>assets/img/foster/cover-1.jpg">
        <div class="cover cover-full my-5">
  	      <div class="container justify-content-center">
  	        <div class="cover-content text-center">
  	        </div>
  	      </div>
  	    </div>
      </div>

	    <section class="py-main">
	    	<div class="container container-sm text-center">
		    	<h3 class="my-4">WELCOME TO THE FOSTER TEMPLATE</h3>
		    	<p class="small">LEARN MORE WITH OUR GETTING STARTED VIDEOS AND TEMPLATE GUIDE</p>
	    	</div>
	    </section>

	    <section class="home-type py-main">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-6">
	    				<!--START: Card Boxless-->
		          <div class="card card-boxless">
		            <img class="card-img-top card-img-square mx-auto" src="<?php echo $prefix;?>assets/img/foster/gallery-1.jpg" alt="Card image cap">
		            <div class="card-body" style="padding: 2rem;">
		              <h5 class="card-title mb-4">OUR ROOTS</h5>
		              <p class="card-text font-size-md font-weight-light mb-5">This Text Block is great for championing your mission or idea. Get visitors to click on the Button Block below by introducing yourself and talking about what you do and why. Explain how you got started and what sets your idea apart. Learn more about blocks here. Be sure to edit the button’s URL so it links to a page on your site.</p>
		              <a href="#" class="btn btn-outline-dark">Learn More</a>
		            </div>
		          </div>
		          <!--END: Card Boxless-->
	    			</div>
	    			<div class="col-sm-6">
	    				<!--START: Card Boxless-->
		          <div class="card card-boxless">
		            <img class="card-img-top card-img-square mx-auto" src="<?php echo $prefix;?>assets/img/foster/gallery-2.jpg" alt="Card image cap">
		            <div class="card-body" style="padding: 2rem;">
		              <h5 class="card-title mb-4">OUR JUICE</h5>
		              <p class="card-text font-size-md font-weight-light mb-5">Here, you can give an overview of a project or product. To get visitors interested in clicking the Button Block below, you can talk about your creative process and where they can find more of your work. Additionally, the Gallery Block above helps you engage visitors by letting you show multiple images in a slideshow.</p>
		              <a href="#" class="btn btn-outline-dark">Learn More</a>
		            </div>
		          </div>
		          <!--END: Card Boxless-->
	    			</div>
	    		</div>
	    	</div>	
	    </section>

	    <!-- parallax nantinya -->
      <div class="parallax-window" data-image-src="<?php echo $prefix;?>assets/img/foster/cover-1.jpg" style="background: linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))">
        <div class="cover cover-full my-5">
  	      <div class="container justify-content-center">
  	        <div class="cover-content text-center">
  	        	<p>OUR MISSION</p>
  	        	<h4>WRITE A BOLD MISSION STATEMENT HERE TO GET VISITORS EXCITED ABOUT YOUR PRODUCT, CAUSE, OR IDEA</h4>
  	        </div>
  	      </div>
  	    </div>
      </div>

	    <section class="py-main">
	    	<div class="container text-center">
	    		<div class="w-50 mx-auto">
			    	<h3 class="my-4">FOSTER COMES IN 3 DELICIOUS FLAVORS</h3>
			    	<p class="small my-5">For this Text Block, you can prompt visitors to click on the button below. Introduce the subject and give a brief overview of where the button will take your visitors.</p>
			    	<a href="#" class="btn btn-outline-dark">VISIT OUR SHOP</a>
	    		</div>
	    	</div>
	    </section>

	    <section class="home-gallery py-main">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-8 col-12">
	    				<div class="img-wrapper mb-20px" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-3.jpeg) no-repeat center; background-size: cover; position: relative;">
              </div>
              <div class="gallery-caption text-uppercase-custom font-size-md">orange juice</div>
	    			</div>
	    			<div class="col-sm-4 col-12">
	    				<div class="row">
	    					<div class="col-12 col-sm-12 pb-3">
	    						<div class="half-img-wrapper mb-20px" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-3.jpeg) no-repeat center; background-size: cover; position: relative;">
                  </div>
                  <div class="gallery-caption text-uppercase-custom font-size-md">carrot juice</div>
	    					</div>
	    					<div class="col-12 col-sm-12 pb-3">
	    						<div class="half-img-wrapper mb-20px" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-3.jpeg) no-repeat center; background-size: cover; position: relative;">
                  </div>
                  <div class="gallery-caption text-uppercase-custom font-size-md">vanilla chai</div>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
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
