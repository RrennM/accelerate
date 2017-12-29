<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>

				<nav class="social-media-navigation" role="navigation">
					<div class="social-btns">  <!-- populate or remove as many of these as you want -->
						<a href="https://twitter.com/THHood85?lang=en" class="soc-icon tw"></a>
						<a href="https://www.facebook.com/TysonHH" class="soc-icon fb"></a>
						<a href="https://www.linkedin.com/in/tyson-hood-506194107/" class="soc-icon ln"></a>
					</div>
				</nav>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
