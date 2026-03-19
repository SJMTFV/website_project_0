<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="hb-site">
  <header class="hb-nav">
    <nav class="hb-nav-links">
      <?php if ( !is_front_page() ) : ?>
        <a href="<?php echo home_url('/'); ?>">Home</a>
      <?php endif; ?>
      <?php if ( !is_page('aboutme') ) : ?>
        <a href="<?php echo home_url('/aboutme/'); ?>">About Me</a>
      <?php endif; ?>
      <?php if ( !is_page('projects') ) : ?>
        <a href="<?php echo home_url('/projects/'); ?>">Projects</a>
      <?php endif; ?>
      <?php if ( !is_page('travel') ) : ?>
        <a href="<?php echo home_url('/travel/'); ?>">Travel</a>
      <?php endif; ?>
      <?php if ( !is_page('contact') ) : ?>
        <a href="<?php echo home_url('/contact/'); ?>">Contact</a>
      <?php endif; ?>
    </nav>
  </header>
