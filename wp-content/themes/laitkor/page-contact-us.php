<?php
/**
 Template Name: Contact Us
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
	.error_message{

	border:1px solid #FF8485;
	padding:10px;
	font-size:14px;
	color:green;
	line-height:16px;
	width:300px;
}
   .success_message{
                background:#C2F797;
                border:1px solid green;
                padding:10px;
                font-size:14px;
                color:green;
                line-height:16px;
                width:300px;
                margin-bottom:10px;
}

</style>
<script>
	function validate(){
		var query_contact=document.getElementById("query_contact").value;
		var name=document.getElementById("name").value;
		var email=document.getElementById("email").value;
		var c_text=document.getElementById("c_text").value;
		var captcha_text=document.getElementById("captcha_text").value;
		if(name==""||email==""||query_contact==""){
			alert("Please enter required value");
			return false;
		}
		else if(c_text!=captcha_text){
			alert("Captcha text not match");
			return false;
		}
		else{
			return true;
		}
		
	}
</script>
<?php 
$captcha_instance = new ReallySimpleCaptcha();
//$captcha_instance->bg = array( '#00FF0' );
$word = $captcha_instance->generate_random_word();

$prefix = mt_rand();
$img=$captcha_instance->generate_image( $prefix, $word );
//correct = $captcha_instance->check( $prefix, $the_answer_from_respondent );
//$captcha_instance->remove( $prefix );

?>
<hr class="hr-bg" />

<div class="text-container">
<br>
	<div class="row"><div class="large-12 medium-12 columns"><h2>Contact us</h2></div></div><br>
	<div class="row">
    	
        <div class="large-6 medium-6 columns">
        	<img style="float:right;" src="<?php echo get_template_directory_uri();?>/images/contact.png">
        </div>
        
        <div class="large-6 medium-6 columns">
<?php	if(isset($_SESSION['Success']) && $_SESSION['Success']!='') { ?>
					<div class="success_message"><span><?php echo $_SESSION['Success']; session_unset($_SESSION['Success']); ?></span></div>
				<?php } ?>
				<?php	if(isset($_SESSION['Error']) && $_SESSION['Error']!='') { ?>
					<div class="error_message">
						<?php
							echo $_SESSION['Error'];
							session_unset($_SESSION['Error']);
						?>
					</div>
				<?php } ?>
        	<form style="width:300px; border-left:#333 solid 1px" action="" method="post">
				<p>Name (required)<br>
				<span><input type="text"  name="contactName" id="name" value="" size="40"></span> </p>
					
					
				<p>Email Address (required)<br>
				<span><input type="text"  name="email" id="email" value="" size="40"></span> </p>

				<p>Mobile Number (required)<br>
				<span><input type="text" id="mobile" pattern="(\+?\d[- .]*){7,13}" title="international, national or local phone number"  name="mobile" value="" size="15"></span> </p>
				 <input type="hidden" class="query-input" value="Server Monitoring" id="query_from" name="query_from">	
				<p>Message (required)<br>
				<span><textarea style="width: 298px; height: 169px;" name="message" id="query_contact" ></textarea></span> </p>
					
					<input type="text" width="150" class="query-var" name="captcha_text" id="captcha_text" placeholder="Captcha *">
					<img src="/wp-content/plugins/really-simple-captcha/tmp/<?php echo $img;?>"/>
					<input type="hidden" name="c_text" id="c_text" value="<?php echo $c_text;?>">
					<br/>
					<br/>

				<button class="send-button" type="submit" name="send" id="send" onsubmit="return validate();"></button>
				<input type="hidden" value="true" id="contact_us" name="contact_us">
			</form>
        </div>
        
    </div>

<hr class="hr-bg" />

    <div class="row">
        <div class="large-12 medium-12 columns">
            <div class="footer">Laitkor infosolutions Pvt. Ltd</div>
        </div>
    </div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
</body>
</html>
