<?php
/*
team: team
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

<!-- banner-->	
<?php get_template_part( 'template-parts/banner'); ?>


<!-- bigblocks-->
<?php get_template_part( 'template-parts/big-blocks'); ?>

<!-- quote-banner-->
<?php get_template_part( 'template-parts/quote-banner'); ?>

 <!-- #team-block-->
<?php get_template_part( 'template-parts/team-block'); ?>

<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->

<div id="team-page-cover" class="black-out"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
