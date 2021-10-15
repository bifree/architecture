<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <!-- slick.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
  <!-- main.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Noto+Serif+JP:wght@300;400&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="">
    <div class="l-inner">
      <div class="header">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sm.png" alt="">
          <p>リフォーム、注文住宅は碧南市の大友建築</p>
        </div>
        <div class="header-nav">
          <?php 
              wp_nav_menu( array( 
              'theme_location' => 'header-nav', 
              'container' => 'nav'
              ) ); ?>
        </div>
      </div>
    </div>
  </header>