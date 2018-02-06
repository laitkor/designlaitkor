<?php
/**
 Template Name: Invoice Page
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
					<h2>Letterhead/Invoice</h2>
					
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
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/ideas-change-things.jpg" class="fancybox1" title="Ideas Change Things" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/ideas-change-things-th.jpg">
				</div>
				<!-- End .client-box --></a></div>
                       
                      
            <div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/the-drinks-concierge.jpg" class="fancybox1" title="The Drinks Concierge" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/the-drinks-concierge-th.jpg">
				</div>
				<!-- End .client-box --></a></div>
                              
            <div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/letterH.jpg" class="fancybox1" title="NE Tradesmen" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/letterH-th.jpg">
				</div>
				<!-- End .client-box --></a></div>
                              
            <div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/newInvoice_.jpg" class="fancybox1" title="Gandoza 3D Prints" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/newInvoice_th.jpg">
				</div>
				<!-- End .client-box --></a></div>
                                 
            <div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/Service_invoice.jpg" class="fancybox1" title="Inner View" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/Service_invoice-th.jpg">
				</div>
				<!-- End .client-box --></a></div>
                                    
            <div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/traffic80_DB.jpg" class="fancybox1" title="Web Design Beast" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/traffic80_DB-th.jpg">
				</div>
				<!-- End .client-box --></a></div>
               
               <div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/VF_invoice.jpg" class="fancybox1" title="Viceroy Films" rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/VF_invoice-th.jpg">
				</div>
				<!-- End .client-box --></a></div>
               
           
               <div class="col-xs-12 col-sm-6 col-md-3">
				<a href="<?php echo get_bloginfo('template_url');?>/images/invoice/wormenoraccount.jpg" class="fancybox1" title="Inner City Women's Ministry Internation Inc." rel="gallery2">
				<div class="client-box">
					<img alt="Client logo" src="<?php echo get_bloginfo('template_url');?>/images/invoice/wormenoraccount-th.jpg">
				</div>
				<!-- End .client-box --></a></div>
               


		<!-- End .row --></div>
	<!-- End .container -->
    </div>
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
