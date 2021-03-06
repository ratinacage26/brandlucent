<?php
/*
contact: contact
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brandlucent
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<!-- Project Inquiry-->
<?php 
get_template_part( 'template-parts/project-inquiry'); 
?>


		</main><!-- #main -->
	</div><!-- #primary -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/script-about.js' ?>"></script>  
<?php

get_footer();
