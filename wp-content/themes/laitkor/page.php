<?php
/**
 Template Name: Inner Page
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
<hr class="hr-bg" />

<div class="text-container">
<br><br>
	<div class="row">
    			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>
								
							<?php endwhile; ?>
        </div>


<?php get_footer(); ?>

