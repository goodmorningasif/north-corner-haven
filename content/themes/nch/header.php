<?php
/**
 * Header
 *
 * Contains header assets.
 *
 * @link NCH
 *
 * @package NCH
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<script type="text/javascript">
	document.documentElement.setAttribute("data-browser", navigator.userAgent);
</script>

<script src="//localhost:35729/livereload.js"></script>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ==== Section: Head ==== -->
<section id="head">
	<div class="head desktop" id="left">North Corner Haven</div>
	<div class="head mobile" id="left">NCH</div>
	<div class="head desktop" id="right">Established 1972</div>
	<div class="head mobile" id="right">1972</div>

</section>

<section id="header-bg">
  <div class="bg" id="pic-0"></div>
  <div class="bg" id="pic-1"></div>
  <div class="bg" id="pic-2"></div>
</section>
