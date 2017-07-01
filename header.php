<!DOCTYPE html>
<html>
  <head>
    <title><?php echo get_bloginfo(); ?></title>
    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/7fc0a020a0.js"></script>
    <link href="/wp-content/themes/abemeister/css/main.css" rel="stylesheet">
  </head>
<body>
<header class="regularPage">
  <div class="row topMenu">
      <div class="column text-center xsmall-12">
        <h1 class="title"><a href="<?php echo WP_HOME; ?>">Abe Herbert</a></h1>
      </div>
      <div class="column text-center xsmall-12">
        <nav>
          <?php

            $navs = get_nav_menu_locations();

            $buttons = wp_get_nav_menu_items($navs['standard-menu']);

            foreach($buttons as $button) {
          ?>
          	         <a href="<?php echo $button->url; ?>">
          						 <?php echo $button->title; ?>
          					 </a>
           <?php } ?>
         </nav>
      </div>
  </div>
</header>
