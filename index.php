<?php
/**
 * Homepage
 *
 */
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title><?php echo get_bloginfo(); ?></title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		 <script src="https://use.fontawesome.com/7fc0a020a0.js"></script>
     <link href="/wp-content/themes/abemeister/css/main.css" rel="stylesheet">
   </head>
 <body>
	 <header class="fullWindow">
	   <div class="row topMenu">
	       <div class="column text-center xsmall-12">
	         <h1 class="title">Abe Herbert</h1>
	       </div>
	       <div class="column text-center xsmall-12">
	         <div class="intro">Full Stack Web Ninja, JavaScript Prodigy, React Native Guru, Server Automation Wizard</div>
	       </div>
				 <div class="column text-center xsmall-12">
<?php
  $buttons = wp_get_nav_menu_items("homepage-buttons");
  foreach($buttons as $button) {
?>
	         <a href="<?php echo get_permalink($button->ID); ?>" class="hollow button button-large">
						 <?php echo $button->post_title; ?>
					 </a>
 <?php } ?>
	       </div>
	   </div>

     <div class="row">
       <div class="column text-center xsmall-12">
         <!-- <div class="lightColor padded">Connect With Me:</div> -->
          <a class="button badge" target="_blank" href="https://github.com/edward-of-clt"><i class="fa fa-github"></i></a>
          <a class="button badge" target="_blank" href="https://www.facebook.com/edward.of.clt"><i class="fa fa-facebook"></i></a>
          <a class="button badge" target="_blank" href="https://www.twitter.com/edward_of_clt"><i class="fa fa-twitter"></i></a>
          <a class="button badge" target="_blank" href="https://www.behance.net/edward_of_clt/resume"><i class="fa fa-behance"></i></a>
       </div>
     </div>
	 </header>

<script src="/wp-content/themes/abeherbert/scripts/vide.js"></script>
<script>
$(document).ready(function() {
	$('header.fullWindow').tubular({videoId: 'rQAh3fSDHFs'}); // where idOfYourVideo is the YouTube ID. });
});
</script>
<?php get_footer(); ?>
