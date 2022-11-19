<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png">

<?php wp_head(); ?>
</head>
<body>
<div class="container">
<a href="<?php echo get_bloginfo( 'wpurl' );?>">
<h1><?php echo get_bloginfo( 'name' ); ?></h1>
</a>


<p><?php echo get_bloginfo( 'description' ); ?></p>
</div>
