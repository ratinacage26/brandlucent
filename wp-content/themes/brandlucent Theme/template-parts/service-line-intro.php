<?php if( have_rows('service_line_block') ): ?> 

 <section class="service-line-intro">

    <?php while( have_rows('service_line_block') ): the_row(); ?>
    	<a  href="<?php echo get_sub_field('learn_more_link') ;?>">
		    <div class="service-line-block <?php echo get_sub_field('service_color') ;?>" style="background-image: url( <?php echo get_sub_field('service_background_image');?> );">

			    	 	<div class="service-line-wrapper">
				 		<h2 class="service-title-area hideme"> <?php echo get_sub_field('service_title_area') ;?> 
				 		</h2>
				 		<h1 class="service-title hideme <?php echo get_sub_field('service_color') ;?>" > <?php echo get_sub_field('service_title') ;?> 
				 		</h1>
				 		<p class="service-description hideme"> <?php echo get_sub_field('service_description') ;?> 
				 		</p>

						<?php 
						if(get_sub_field('learn_more_text')) {
							echo '<a class="learn-more-text hideme" href="'. get_sub_field('learn_more_link') .  '"><div>' . get_sub_field('learn_more_text') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></div></a>';
							} ?> 
						</div>
		    </div>
		</a>
    <?php endwhile; ?>
 
 </section>

 
<?php endif; ?>

