<?php
/** 
 * Index
 *
 * The main template file
 *
 * @link NCH
 *
 * @package NCH
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>


<!-- ==== Section: Main ==== -->
<section id="main">
  <?php get_template_part('components/main'); ?>
</section>

<!-- ==== Section: Land ==== -->
<section id="land">
  <?php get_template_part('components/land'); ?>
</section>

<!-- ==== Section: Invited ==== -->
<section id="invited">
  <?php get_template_part('components/invited'); ?>
</section>

<!-- ==== Section: newsletter ==== -->
<section id="newsletter">
  <?php get_template_part('components/newsletter'); ?>
</section>

<!-- ==== Section: Insta ==== -->
<section id="instafeed">
  <?php get_template_part('components/insta-feed'); ?>
</section>


<?php get_footer();