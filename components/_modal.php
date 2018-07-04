<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."static/head.php"); ?>
    <style>
      #antiModalGeneral > .modal {
        position: relative;
        display: block;
        z-index: 1029;
      }

      #lightbox{
        background-color: transparent;
        padding: 10px;
        border-bottom: 2px solid #666;
        border-right: 2px solid #666;
        }
      #lightboxDetails{
        font-size: 0.8em;
        padding-top: 0.4em;
        } 
      #lightboxCaption{ float: left; }
      #keyboardMsg{ float: right; }

      #lightbox img{ border: none; } 
      #overlay img{ border: none; }

      .img-square {
        width: 20rem;
        height: 20rem;
        margin: 1rem auto;
        transition: all 0.5s ease-out;
      }

      .img-thumbnails {
        position: relative;
        width: 20rem;
        height: 20rem;
        margin: 1rem auto;
        background-color: #f3f3f3;
        border: 1px solid #d3d3d3;
        overflow: hidden;
      }

      .img-thumbnails img {
        width: 100%;
        position: absolute;
        margin-top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
      }
      
      @media(max-width: 1200px){
        .img-square,
        .img-thumbnails {
          width: 15rem;
          height: 15rem;
        }
      }

      @media(max-width: 992px){
        .img-square,
        .img-thumbnails {
          width: 13rem;
          height: 13rem;
        }
      }

      @media(max-width: 768px){
        .img-square,
        .img-thumbnails {
          width: 15rem;
          height: 15rem;
        }
      }
      @media(max-width: 567px){}
    </style>
  </head>
  <body>

    <?php include($prefix."static/navbar.php"); ?>

    <section class="section-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Modal</h1>
          <p class="lead mb-6">Use this component to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
        </div>

        <h3>General</h3>
        <p>Avoid using <code>.modal-header</code> &amp; <code>.modal-footer</code> unless it's necessary as it will generally interfere with the flexibility of the design.</p>
        <p>The base of Antikode modal's <code>close</code> button and the size of <code>.modal-sm</code> has also been modified.</p>
        <p>&nbsp;</p>
      </div>
      
      <div class="bg-light py-main" id="antiModalGeneral">
        <!--START: Modal General-->
        <div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body p-box">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
                <h4 class="modal-title mb-3">Modal title</h4>
                <p>Modal body text goes here.</p>
                <div class="clearfix mt-5">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--END: Modal General-->
      </div>
    </section>

    <section class="section-main">
      <div class="container container-sm">
        <h3>Full Screen</h3>
        <span class="badge badge-pill badge-warning">Mobile Only</span>
        <p>Full screen modal works well on mobile to give an illusion that the screen is changing to another page. To give that effect, use <code>.fade.fadeinup-sm-down</code> (effect will slide up only on mobile). The <code>-sm-down</code> can be removed if the fade in up effect want to be maintained on desktop.</p>
        <p>&nbsp;</p>
      </div>
      
      <div class="bg-light py-main" id="antiModalFull">
        <div class="container container-sm">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFull">Trigger Modal</button>
        </div>
        <!--Start: Carousel (Image Only)-->
        <div class="modal modal-full fade fadeinup-sm-down" id="modalFull" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body p-box">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
                <h4 class="modal-title mb-3">Modal title</h4>
                <p>Modal body text goes here.</p>
                <div class="clearfix mt-5">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Start: Carousel (Image Only)-->

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

      </div>

    </section>  

    <section class="py-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Modal Gallery</h1>
          <p class="lead mb-6">Use this component to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
        </div>
      </div>

      <div class="py-main">
        <div class="container">
          <div class="row">
              <div class="col-sm-4 mb-3">
                <a href="<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-1.jpg" data-fancybox="gallery">
                  <div style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-1.jpg) no-repeat center; background-size: cover; height: 350px;"></div>
                </a>
              </div>
              <div class="col-sm-4 mb-3">
                <a href="<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-2.jpg" data-fancybox="gallery" data-caption="Caption #2">
                  <div style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover; height: 350px;"></div>
                </a>
              </div>
              <div class="col-sm-4 mb-3">
                <a href="<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-3.jpg" data-fancybox="gallery" data-caption="Caption #3">
                  <div style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-dark-3.jpg) no-repeat center; background-size: cover; height: 350px;"></div>
                </a>
              </div>
              <div class="col-sm-4 mb-3">
                <a href="<?php echo $prefix;?>assets/img/common/bg_rectangle-light-1.jpg" data-fancybox="gallery" data-caption="Caption #4">
                  <div style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-1.jpg) no-repeat center; background-size: cover; height: 350px;"></div>
                </a>
              </div>
              <div class="col-sm-4 mb-3">
                <a href="<?php echo $prefix;?>assets/img/common/bg_rectangle-light-2.jpg" data-fancybox="gallery" data-caption="Caption #5">
                  <div style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-2.jpg) no-repeat center; background-size: cover; height: 350px;"></div>
                </a>
              </div>
              <div class="col-sm-4 mb-3">
                <a href="<?php echo $prefix;?>assets/img/common/bg_rectangle-light-3.jpeg" data-fancybox="gallery" data-caption="Caption #6">
                  <div style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-3.jpeg) no-repeat center; background-size: cover; height: 350px;"></div>
                </a>
              </div>
            </div>
        </div>
      </div>
    </section>


    <?php //include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      $(function() {
        $('#lighbox1').lighbox();
      });

    </script>

  </body>
</html>
