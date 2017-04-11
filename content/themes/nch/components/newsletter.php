<?php
  /**
  * Section =>  Newsletter
  */ 

?>

<h1><?php the_field('s3_label', 2) ?></h1>
<h2><?php the_field('s3_headline', 2) ?></h2>
<p><?php the_field('s3_paragraph', 2) ?></p>
<?php echo do_shortcode('[contact-form-7 id="34" title="Newsletter Signup"]'); ?>
