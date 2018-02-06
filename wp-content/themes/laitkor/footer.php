<!-- SECTION: CONTACT-->
<section id="contact" class="section contact">
    <div class="map-container" style="background-image:url('<?php echo get_bloginfo('template_url'); ?>/images/contacus-map.png');">
        <div class="map-embed">
            <!-- Start Google Map -->
            <div id="">
            </div>
        </div>
        <!-- End .map-embed -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-5">
                    <div class="contact-form">
                        <div class="form-header">
                            <h4>Contact Form</h4>
                        </div>

                        <!-- End .form-header -->
                        <form id="form" method="post" action="" name="contactform" style="margin-top:65px">
                            <p class="sending" id="sending" style="display:none; color:green">sending... </p>

                            <input id="name" class="input-holder" name="name" placeholder="Name" required type="text">
                            <input id="emailFrom" class="input-holder" name="emailFrom" placeholder="Email" required type="text">
                            <textarea id="message" class="input-holder" name="message" placeholder="Message" required></textarea>
                            <input type="button" id="submit" class="submit" name="submit"  value="Submit" />

                        </form>

                        <div class="mess center">
                        </div>
                    </div>
                    <!-- End .contact-form --></div>
                <!-- End .col-xs-11 .col-sm-7 .col-md-5 --></div>
            <!-- End .row --></div>
        <!-- End .container --></div>
    <!-- End .map-container -->
</section>
<!-- SECTION: CONTACT END-->
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="footer-copy">
                <p>&copy; All rights reserved © 2004-2015 | Laitkor Infosolutions Pvt. Ltd..</p>
            </div>
            <!-- End .footer-copy --></div>

        <!-- End .row --></div>
    <!-- End .container -->
</footer>
</div>
<!-- Footer End -->
<!-- Scripts
    ================================================== -->
<!-- jQuery Library -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/vendor/jquery-1.11.0.min.js"></script>
<!-- Boostrap Scripts -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!-- StyleSwitcher Scripts -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/styleswitcher.js"></script>
<!-- jQuery Plugins -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.magnific-popup.min.js"></script>
<!-- Portfolio Item Popup -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.sticky.js"></script>
<!-- Sticky Navigation bar -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.nav.js"></script>
<!-- Onepage Navigation -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.appear.js"></script>
<!-- Actions on Appear -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/smooth-scroll.js"></script>
<!-- Links Smooth Scrolling -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.countTo.js"></script>
<!-- Number Counting -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/owl.carousel.min.js"></script>
<!-- Owl Carousel -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.isotope.min.js"></script>
<!-- Portfolio Filtering -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.parallax-1.1.3.js"></script>
<!-- Parallax backgrounds -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.videoBG.js"></script>
<!-- Video Background -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/gmap3.js"></script>
<!-- GoogleMap3 Plugin -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/skrollr.js"></script>
<!-- Skrollr Plugin -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.superslides.js"></script>
<!-- SuperSliders Plugin -->
<!-- Google Maps API -->
<!--<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>-->
<!-- Contact Form Vaidator -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.ufvalidator-1.0.5.js"></script>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jQueryPlugins/jquery.form.js"></script>

<!-- Custom Javascript File -->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/main.js"></script>

<!---Javascript for fancybox-->
<script src="<?php echo get_bloginfo('template_url'); ?>/js/jquery-1.8.2.min.js"></script>
<script src="<?php echo get_bloginfo('template_url'); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<!--<script src="<?php //echo get_bloginfo('template_url'); ?>/fancybox/jquery.fancybox-1.3.4.js"></script>-->

<script type="text/javascript">
    $(window).load(function () {
      $('#loader').hide();
      $('#content').show();
    })

</script>
</body>

</html>
