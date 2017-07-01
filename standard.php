<?php
// Template Name: Standard Page
get_header(); ?>

<?php while ( have_posts() ) { the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
          <div class="standard-page">
            <?php the_content(); ?> <!-- Page Content -->
          </div>
        </div><!-- .entry-content-page -->
    <?php } ?>
<?php get_footer(); ?>
