<?php
// Template Name: Portfolio Page
get_header(); ?>
<div class="portfolio">
	<?php
	$args = array(
		'post_type' => 'portfolio_items',
	);
	$query = new WP_Query( $args );
	// print_r($query);exit;
	if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>

		 <div class="item">

			 <a href="<?php the_permalink() ?>" rel="bookmark" class="info">
				 		<?php if(has_post_thumbnail()) { ?>
							 <img src="<?php the_post_thumbnail_url('large'); ?>">
						 <?php } ?>
						 <div class="content">
							 <h2><?php the_title(); ?></h2>

							 <small><?php the_time( 'F jS, Y' ); ?></small>

							  <div class="entry">
							  	<?php the_content( '', TRUE ); ?>
							  </div>
							</div>
			 	</div></a>
			 <?php }
			 wp_reset_postdata();
		 }  else { ?>
			 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		 <?php } ?>


</div><!-- .portfolio -->
<?php get_footer(); ?>
