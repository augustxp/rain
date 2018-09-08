<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="icon" href="../../../../favicon.ico">

    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- CSS -->
    <link href="<?php bloginfo('template_url') ?>/css/normalize.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/css/landing.css" rel="stylesheet">
    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
