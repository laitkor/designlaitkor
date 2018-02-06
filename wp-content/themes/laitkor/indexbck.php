<?php
/**
 Template Name: Home Page
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
<style>
	#fancybox-content{


}
.img_cls{
	height:157px;
        overflow:hidden;
}
.dark-box p {
	height:125px;
}
</style>
<?php get_header(); ?>
<script>
 	$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox({'titlePosition'	: 'over'});
			$("a#example2").fancybox({'titlePosition'	: 'over'});
			$("a#example3").fancybox({'titlePosition'	: 'over'});
			$("a#example4").fancybox({'titlePosition'	: 'over'});
			$("a#example5").fancybox({'titlePosition'	: 'over'});
			$("a#example6").fancybox({'titlePosition'	: 'over'});
			$("a#example7").fancybox({'titlePosition'	: 'over'});
			$("a#example8").fancybox({'titlePosition'	: 'over'});
	});
</script>

<div class="row">
	<div class="large-12 columns">
    <a href="http://design.laitkor.com/contact-us"><input type="button" class="contact-button">
    <img src="<?php echo get_template_directory_uri();?>/images/header.png">
    </a><br><br><br><br>
    </div>
</div>

<div class="row">
	<div class="large-3 medium-3 columns">
    	<div class="dark-box-countainer">
        	<div class="dark-box">
            	<h2>Graphics</h2>
                <p>
                A good Graphics helps in developing a brand Identity and connecting better with your customers 
                </p>
		
                
                <a href="http://design.laitkor.com/logo"><input type="button" class="go-button"></a>
            </div>
        </div>
    </div>
    
    <div class="large-3 medium-3 columns">
    	<div class="dark-box-countainer">
        	<div class="dark-box">
            	<h2>Website</h2>
                <p>
                We help you create awesome website which are creative, effective and attractive helping you deliver the right message.
                </p>
                
                <a href="http://design.laitkor.com/website"><input type="button" class="go-button"></a>
            </div>
        </div>
    </div>
    
    <div class="large-3 medium-3 columns">
    	<div class="dark-box-countainer">
        	<div class="dark-box">
            	<h2>Web Apps</h2>
                <p>
                We believe a good web application should be in sync with user experience as well as design and should be kept simple yet.
                </p>
                
                <a href="http://design.laitkor.com/web-applications/"><input type="button" class="go-button"></a>
            </div>
        </div>
    </div>
    
    <div class="large-3 medium-3 columns">
    	<div class="dark-box-countainer">
        	<div class="dark-box">
            	<h2>Mobile Apps</h2>
                <p>
                A mobile application should be intuitive and attractive and deliver all the required features for which it is created
                </p>
                
                <a href="http://design.laitkor.com/mobile-applcation"><input type="button" class="go-button"></a>
            </div>
        </div>
    </div>
</div>

<hr class="hr-bg" />

<div class="row">
	<div class="large-12 medium-12 columns text-container">
    	<h2>Recent Work</h2><br>
    	<div class="row">
        	<div class="large-3 medium-3 columns img_cls">
            
		<a id="example1" href="<?php echo get_template_directory_uri();?>/images/website/CloudEgg_th.jpg" >
        <img class="img-border" src="<?php echo get_template_directory_uri();?>/images/website/CloudEgg_th.jpg" ></a>
            </div>
            <div class="large-3 medium-3 columns img_cls">
            <a id="example2" href="<?php echo get_template_directory_uri();?>/images/website/street2media.com.png" ><img class="img-border" src="<?php echo get_template_directory_uri();?>/images/website/street2media.com.png"></a>
            </div>
            <div class="large-3 medium-3 columns img_cls">
            <a id="example3" href="<?php echo get_template_directory_uri();?>/images/fan-pages/CcustomChoppers.jpg" ><img class="img-border" src="<?php echo get_template_directory_uri();?>/images/fan-pages/CcustomChoppers.jpg"></a>
            </div>
            <div class="large-3 medium-3 columns img_cls">
            <a id="example4" href="<?php echo get_template_directory_uri();?>/images/fan-pages/Ebola_fanpage_new.jpg" ><img class="img-border" src="<?php echo get_template_directory_uri();?>/images/fan-pages/Ebola_fanpage_new.jpg"></a>
            </div>
        </div>
        <br>
        <div class="row">
        	<div class="large-3 medium-3 columns img_cls">
            <a id="example5" href="<?php echo get_template_directory_uri();?>/images/logo/energy_logo_02.png" ><img class="img-border" src="<?php echo get_template_directory_uri();?>/images/logo/energy_logo_02.png"></a>
            </div>
            <div class="large-3 medium-3 columns img_cls">
            <a id="example6" href="<?php echo get_template_directory_uri();?>/images/logo/logo_knowthevenue.png" ><img class="img-border" src="<?php echo get_template_directory_uri();?>/images/logo/logo_knowthevenue.png"></a>
            </div>
            <div class="large-3 medium-3 columns img_cls">
            <a id="example7" href="<?php echo get_template_directory_uri();?>/images/mobile-application/mobilePay.jpg" ><img class="img-border" src="<?php echo get_template_directory_uri();?>/images/mobile-application/mobilePay.jpg"></a>
            </div>
            <div class="large-3 medium-3 columns img_cls">
            <a id="example8" href="<?php echo get_template_directory_uri();?>/images/mobile-application/Travel Receipts_.jpg" ><img class="img-border" src="<?php echo get_template_directory_uri();?>/images/mobile-application/Travel Receipts_.jpg"></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
