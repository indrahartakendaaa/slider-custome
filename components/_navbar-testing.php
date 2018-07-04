<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."static/head.php"); ?>
    <style>
      .pushmenu { /*this is the nav*/
        background: #fff;
        width: 240px;
        height: 100%;
        top: 0;
        z-index: 1000;
        position:fixed;
      }

    .pushmenu h3 {
      color: #cbbfad;
      font-size: 14px;
      font-weight: bold;
      padding: 18px 20px;
      margin: 0;
      text-align: center;
      /*background: #282522;   */ 
    }

    .pushmenu a {
      display: block; /* drops the nav vertically*/
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      padding: 14px;
      text-align: center;
    }

    .navbar-brand {margin-right: 0;}

    .pushmenu a:hover {
      background: #f5f5f5;
    }

    .pushmenu a:active {
      background: #f5f5f5;
      color: #000;
    }

    .pushmenu-left {
      /*left: -240px;*/
      right: -240px;

    }

    .pushmenu-left.pushmenu-open {
      /*left: 0;*/
      right: 0;
    }

    .pushmenu-push {
      overflow-x: hidden;
      position: relative;
      /*left: 0;*/
      right: 0;
    }

    .pushmenu-push-toright {
      /*left: 240px;*/
      right: 240px;
    }

    /*Transition*/
    .pushmenu, .pushmenu-push {
      -webkit-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      transition: all 0.3s ease;  
    }

    #nav_list {
      background: url(http://www.onlywebpro.com/demo/jquery/icon_nav.png) no-repeat left top;
      cursor: pointer;
      height: 27px;
      width: 33px;
      text-indent: -99999em;
      float: right;
    }

    nav-list.active {
      background-position: -33px top;
    }

     .buttonset {
        background: #000; /*#00A287*/
        height: 53px;
        padding: 10px 20px 15px;
     }
     
    </style>
    
  </head>
  <body>

    <?php //include($prefix."static/navbar.php"); ?>

   <body class="pushmenu-push">
      <nav class="pushmenu pushmenu-left shadow">
        <a class="navbar-brand" href="<?php echo $prefix;?>index.php">
          <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-dark.svg" alt="Logo">
        </a>
        <a href="#">Home</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
      </nav>
      
      <div class="wrapper">
        <div class="main">
          <section class="buttonset">
            <div id="nav_list">Menu</div>
          </section>
          
          <section class="content py-main">
            <div class="container">
              <h1>Slideout Navigation</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolor, maxime, quaerat perspiciatis laborum itaque veritatis nam consequatur eius aliquam nisi magni nulla eaque ex optio natus, assumenda deleniti labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem veritatis, voluptates atque excepturi delectus quos dolorum illo incidunt! Est necessitatibus alias, facilis quibusdam doloremque sapiente sunt mollitia vitae iste voluptatum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque alias minus est suscipit, sed excepturi harum! Facere cumque nesciunt vitae consectetur aperiam officia vero aliquid excepturi doloribus dolorem! Illum, tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe impedit repudiandae, ipsa ex aliquid odio, possimus reprehenderit maiores id ad necessitatibus perferendis, eos labore magni esse! Praesentium magni dolore amet?
              </p>
            </div>
          </section><!-- End Content -->
      </div><!-- End Main -->
    </div><!-- End Container --> 
    </body>

    
    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      window.FontAwesomeConfig.searchPseudoElements = true;

      $(document).ready(function() {
        $menuLeft = $('.pushmenu-left');
        $nav_list = $('#nav_list');
        
        $nav_list.click(function() {
          $(this).toggleClass('active');
          $('.pushmenu-push').toggleClass('pushmenu-push-toright');
          $menuLeft.toggleClass('pushmenu-open');
        });
      });

      //navbar side menu 
      $('#navSide').click(function(){
        $('.icon-bar-1').toggleClass('animated');
        $('.icon-bar-2').toggleClass('animated');
        $('.icon-bar-3').toggleClass('animated');
      });

      // $('.menu-hamburger').click(function(){
      //   if ($(this).hasClass('open')) {
      //     $('nav-side-menu, .side-nav, .menu-hamburger').toggleClass('open');
      //   }
      // });

      // $('#menu > a').click(function(){
      //   $('.nav-side-menu, .side-nav, .menu-hamburger').toggleClass('open');
      //   alert(3);
      // })
    </script>

  </body>
</html>
