<?php
/**
 Template Name: Fan-Pages Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

?>

<?php get_header(); ?>
<style>
  .navbar-default{
  	background:#161e2b !important;
  }	

</style>
<!-- SECTION: CLIENTS -->
<section id="clients" class="section clients">
	<div class="container">
		<!--section header -->
		<div class="header">
			<div class="row">
				<div class="col-xs-12">
					<h2>FAN-PAGES</h2>
					
				</div>
				<!-- End .col-xs-12 --></div>
			<!-- End .row --></div>
		<!-- End .header -->
		<!-- section header end -->
		<!-- Clients Testimonials -->
		
		<!-- End .row -->
		<!-- Clients Testimonials end-->
        
		<div class="row">
        	
			<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/1_malaysiaandroidfreelancer_befor_like.jpg" class="fancybox1" title="Malaysia Android" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/1_malaysiaandroidfreelancer_befor_like_th.jpg">
				</div>
				<!-- End .client-box --></a></div>
			<!-- End .col-xs-12 col-sm-6 .col-md-3 -->
			
			<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/CcustomChoppers.jpg" class="fancybox1" title="Ccustom Choppers" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/CcustomChoppers_th.jpg">
				</div>
				<!-- End .client-box --></a></div>
			<!-- End .col-xs-12 col-sm-6 .col-md-3 -->
			
			<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/Ebola_fanpage_new.jpg" class="fancybox1" title="Ebola" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/Ebola_fanpage_new_th.jpg">
				</div>
				<!-- End .client-box --></a></div>



<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/facebook_fan_01.jpg" class="fancybox1" title="Facebook" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/facebook_fan_01_th.jpg">
				</div>
				<!-- End .client-box --></a></div>


<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/facebook_fan.jpg" class="fancybox1" title="Facebook" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/facebook_fan_th.jpg">
				</div>
				<!-- End .client-box --></a></div>



<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/lawrencetam_FAN.jpg" class="fancybox1" title="Lawrencetam" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/lawrencetam_FAN_th.jpg">
				</div>
				<!-- End .client-box --></a>
</div>



<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/pizza_FB.jpg" class="fancybox1" title="Pizza" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/pizza_FB_th.jpg">
				</div>

				<!-- End .client-box --></a></div>


<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/QQ_FB.jpg" class="fancybox1" title="Quilting Quest" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/QQ_FB_th.jpg">
				</div>

				<!-- End .client-box --></a></div>


<div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/fan-pages/VS_FB_n.jpg" class="fancybox1" title="Virtual Solution" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/fan-pages/VS_FB_n_th.jpg">
				</div>

				<!-- End .client-box --></a></div>




		<!-- End .row --></div>
	<!-- End .container -->
</section>
<!-- SECTION: CLIENTS END-->


<?php get_footer(); ?>
<script>

jQuery(window).on('scroll', function (){   
if ($(this).scrollTop()){
    $('#main-menu').addClass('is-sticky');
  } else {
    $('#main-menu').removeClass('is-sticky');
  }
}); 	

$(document).ready(function() {
	$(".fancybox1").fancybox();
});
</script>
