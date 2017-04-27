<?php
/**
 * Footer
 *
 * Contans footer assets.
 *
 * @link NCH
 *
 * @package NCH
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

?>


</body><!-- end -->
</html>


<!-- ==== Section: Foot ==== -->
<section id="foot">
  <div id="foot-wrap">
		<div class="mail">
			<p>Say Hello</p>
			<p>
			  <a href="mailto:info@northcorner-haven.com" alt="Email">
			    info@northcorner-haven.com
			  </a>
			</p>
			<p>
			  <a href="tel:1-803-577-9890" alt="Telephone">
			    <span class="num">803 577 9890</span>
			  </a>
			</p>
		</div>
		<div class="social">
			<div id="face">
				<a href="https://www.facebook.com/northcornerhaven" alt="Facebook" target="_blank"><?php echo file_get_contents($GLOBALS['url'].'/assets/face.svg'); ?></a>
			</div>
			<div id="insta">
				<a href="https://www.instagram.com/northcornerhaven/" alt="Instagram" target="_blank"><?php echo file_get_contents($GLOBALS['url'].'/assets/insta.svg'); ?></a>
			</div>
		</div>
		<div class="address">
			<p>
			  <a href="https://www.google.com/maps/place/3420+Charlotte+Hwy,+Lancaster,+SC+29720" 
			    alt="Map Link" target="_blank">
				  <span class="num">3420</span> Charlotte Hwy
			  </a>
			</p>
			<p>
				<a href="https://www.google.com/maps/place/3420+Charlotte+Hwy,+Lancaster,+SC+29720" 
				  alt="Map Link" target="_blank">Lancaster, South Carolina
				</a>
			</p>
			<p>
			  <a href="https://www.google.com/maps/place/3420+Charlotte+Hwy,+Lancaster,+SC+29720"
			    alt="Map Link" target="_blank">
			    <span class="num">29720</span>
			  </a>
			</p>
		</div>
		<div class="copyright">
			<p>Site by <a target="_blank" alt="Site by SDCO Partners" href="http://sdcopartners.com">SDCO Parters</a></p>
		</div>
  </div>
  <div class="dash" id="left"></div>
  <div class="dash" id="right"></div>
</section>

<!-- ==== Section: Lines  ==== -->
<section id="lines">
	<?php echo get_template_part('components/lines'); ?>
</section>

<?php wp_footer(); ?>