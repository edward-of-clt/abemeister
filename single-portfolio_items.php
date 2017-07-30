<?php
// Template Name: single-portfolio_items
get_header(); ?>
	<?php

	if ( have_posts() ) { the_post(); ?>

		 <div style="background: #fff;" class="row alignTop">

				 		<?php if(has_post_thumbnail()) { ?>
							 <div class="column medium-5 large-3"><center><img src="<?php the_post_thumbnail_url('large'); ?>"></center></div>
						 <?php } ?>
						 <?php if(has_post_thumbnail()) { ?>
							 <div class="column medium-7 large-9">
						 <?php } else { ?>
							 <div class="column small-12">
						 <?php } ?>
							 <h2><?php the_title(); ?></h2>

							 <small><?php the_time( 'F jS, Y' ); ?></small>

							  <div class="entry">
							  	<?php echo str_replace("<a ","<a target=\"_new\" ",get_the_content( '', true )); ?>
							  </div>
							</div>
			 	</div>
			 <?php
			 wp_reset_postdata();
		 }  else { ?>
			 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		 <?php } ?>


<?php get_footer(); ?>
