<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brandlucent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<!-- blog banner -->
	<section class="blog-banner"  style="background-image: url('<?php echo get_field('blog_banner_background_image') ;?>');">
			
		<h4 class="blog-banner-title">
			<?php echo get_field('blog_banner_title') ;?>
		</h4>

		<div class="blog-banner-line"></div>

		<p class="blog-banner-text">
			<?php echo get_field('blog_banner_text') ;?>
		</p>
	
	</section>

<!-- blog content -->
	<section class="blog-content">
		<div class="blog-content-wrapper">
			<?php 
				// echo get_field('blog_content') ;
			?>		


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div>
	
	</section>

<!-- social media floater -->

	<section class="social-media blog-social-media">

	<?php 
	// echo do_shortcode('[TheChamp-Sharing style="background-color:#000;"]') ?> 

			<p><span><a href="https://www.facebook.com/brandlucent/"><i class="fa fa-facebook" aria-hidden="true"></i></a></span><span><a href="https://ca.linkedin.com/company/brandlucent"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span></p>
	</section>


<section class="other-blogs" style="background-image: url('http://localhost:8080/brandlucent/wp-content/uploads/2017/06/team-pinktexture.jpg');">
		<h1>You might also like...</h1>
		<section>
		<?php echo do_shortcode("[post_grid id='479']"); ?>
		</section>
	</section>



<section>

</section>

<!-- other-blogs section -->
<!-- 	<section class="other-blogs" style="background-image: url('<?php echo get_field('other_blogs_background_image') ;?>');">
		<h1>You might also like...</h1>

	    <div class="other-blogs-wrapper">
		    <?php while( have_rows('other_blogs') ): the_row(); ?>
		    	<a  class="other-blog" href="<?php echo get_sub_field('other_blog_link') ;?>">
				    <div class="other-blog-background-image" style="background-image: url( <?php echo get_sub_field('other_blog_background_image');?> );">
				    </div>
		 			<h2 class="other-blog-title hideme"> <?php echo get_sub_field('other_blog_title') ;?> 
		 			</h2>
				    
				</a>
		    <?php endwhile; ?>
	    </div>
	</section> -->


	<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
