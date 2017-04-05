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
	<div class="mail">
		<p>Say Hello</p>
		<p>info@northcorner-haven.com</p>
		<p>803 577 9890</p>
	</div>
	<div class="social">
		<div id="face">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/face.svg'); ?>
		</div>
		<div id="insta">
			<?php echo file_get_contents($GLOBALS['url'].'/assets/insta.svg'); ?>
		</div>
	</div>
	<div class="address">
		<p>3420 Charlotte Hwy</p>
		<p>Lancaster, South Carolina</p>
		<p>29720</p>
	</div>
	<div class="copyright">
		<p>Site by <a target="_blank" alt="Site by SDCO Partners" href="http://sdcopartners.com">SDCO Parters</a></p>
	</div>
</section>

<!-- ==== Section: Border ==== -->
<div class="border" id="left"></div>
<div class="border" id="right"></div>
<div class="border" id="top"></div>
<div class="border" id="bottom"></div>

<?php wp_footer(); ?>