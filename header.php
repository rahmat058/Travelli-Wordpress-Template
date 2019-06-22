<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <title><?php bloginfo( 'name' ); ?></title>

  <?php wp_head(); ?>
</head>

<body id="home" class="scrollspy">