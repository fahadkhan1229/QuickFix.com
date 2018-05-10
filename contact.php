<!doctype html>
<html lang="" class="page-contact-layout-01">
<?php
include_once "head.php";
?>
<body>
<div class="site">



  <?php
  include_once "header.php";
  ?>
  <!-- /.big-title -->


  <div id="map-canvas" class="thememove-gmaps" data-address="40.7590615,-73.969231" data-height="480" data-width="100%" data-zoom_enable="" data-zoom="16" data-map_type="roadmap" data-map_style="style1"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-7 col-lg-7 message">
        <h2 class="heading-title">Send Us A Message</h2>
        <form action="mailto:info@quickfix.pk" method="post" enctype="text/plain">
          <div class="row">
            <div class="col-sm-6" style="padding-right: 5px">
              <input type="text" name="name" required="required" placeholder="Name*">
            </div>
            <div class="col-sm-6" style="padding-left: 5px">
              <input type="text" name="your-phone" value="" size="40" aria-invalid="false" placeholder="Phone">
            </div>
            <div class="col-sm-12">
              <input type="email" name="email" required="required" placeholder="Email*">
            </div>
            <div class="col-sm-12">
              <textarea name="your-message" cols="40" rows="10" aria-invalid="false" placeholder="Your message*" style="height: 110px;"></textarea>
            </div>
            <div class="col-sm-12">
              <input type="submit" value="Send Message" class="btn">
            </div>
          </div>
        </form>
      </div>
      <!-- .message -->

      <div class="col-sm-8 col-md-5 col-lg-4 col-lg-offset-1">
        <div class="call-us">
          <h3>Call us today for Any service!</h3>
          <div class="call-us_phone row">
            <div class="col-xs-2 col-sm-2">
              <div class="call-us_icon">
                <i class="fa fa-phone"></i>
              </div>
            </div>
            <div class="col-xs-10 col-sm-10">
              <div class="phone">
                <h4>0341-1111-678</h4>
                <p>info@quickfix.pk</p>
              </div>
            </div>
          </div>
          <div class="call-us_address row">
            <div class="col-xs-2 col-sm-2">
              <div class="call-us_icon">
                <i class="fa fa-home"></i>
              </div>
            </div>
            <div class="col-xs-10 col-sm-10">
              <div class="address">
                <h4>University Chowk</h4>
                <p>Bahwalpur, Pakistan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .call-us -->
    </div>
  </div>

  <section class="piece-of-us">
    <div class="container">
      <div class="row row-xs-center">
        <div class="col-md-1">
          <div class="piece-of-us_icon">
            <i class="fa fa-users"></i>
          </div>
        </div>
        <div class="col-md-8">

          <h2>Want to be a piece of us?</h2>
          <p>We give a chance for people to work in the professional environment with challenges and values. Come with us!</p>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn">Join Our Team</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /.piece-of-us -->



 <?php
  include_once 'footer.php'
 ;?>
  <!-- /.footer -->


</div>
<!-- Map-About us -->
<script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>

<script src="components/jquery/jquery.js"></script>
<script src="components/bootstrap/js/bootstrap.js"></script>
<script src="components/owl.carousel/owl.carousel.js"></script>
<script src="components/parallax.js/parallax.js"></script>
<script src="components/scrollup/jquery.scrollUp.js"></script>
<script src="components/lightgallery/js/lightgallery.js"></script>

<!-- Mobile Menu -->
<script src="components/mmenu/jquery.mmenu.min.all.js"></script>

<!-- REVOLUTION JS FILES -->
<script src="components/slider/jquery.themepunch.tools.min.js"></script>
<script src="components/slider/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="components/slider/extensions/revolution.extension.actions.min.js"></script>
<script src="components/slider/extensions/revolution.extension.carousel.min.js"></script>
<script src="components/slider/extensions/revolution.extension.kenburn.min.js"></script>
<script src="components/slider/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="components/slider/extensions/revolution.extension.migration.min.js"></script>
<script src="components/slider/extensions/revolution.extension.navigation.min.js"></script>
<script src="components/slider/extensions/revolution.extension.parallax.min.js"></script>
<script src="components/slider/extensions/revolution.extension.slideanims.min.js"></script>
<script src="components/slider/extensions/revolution.extension.video.min.js"></script>

<!-- ISOTOPE -->
<script src="components/isotope.pkgd.min.js"></script>

<!-- HOVER ISOTOPE -->
<script src="components/jquery.directional-hover.min.js"></script>

<!-- Image loaded ISOTOPE -->
<script src="components/imagesloaded.pkgd.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>
