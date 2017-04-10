<?php
  /**
  * Section =>  Newsletter
  */ 

?>

<h1><?php the_field('s3_label', 2) ?></h1>
<h2><?php the_field('s3_headline', 2) ?></h2>
<p><?php the_field('s3_paragraph', 2) ?></p>
<form>
  <input id="name" type="name" placeholder="Full name">
  <input id="email" type="email" placeholder="Email address">
  <input id="submit" type='submit'>
</form>