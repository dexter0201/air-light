<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-10-15 14:37:51
 * @package air-light
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Air_Light;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class( 'no-js' ); ?>>
    <div id="page" class="site">

      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'air-light' ); ?></a>

      <div class="nav-container">
        <header class="site-header" role="banner">

          <?php get_template_part( 'template-parts/header/branding.php' ); ?>

          <?php get_template_part( 'template-parts/header/navigation.php'); ?>

        </header>
      </div><!-- .nav-container -->

      <div class="site-content">
