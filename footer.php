<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</section>
	</div>
	
	<footer id="footer" class="cf">
		<div class="left">
		  <p>Copyright 2014: Waikiki Private Hospital</p>
		</div>
		
		<div class="right">
		  <nav class="footer-menu cf">
			  <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false ) ); ?>
			</nav>
		</div>
	</footer>
</div>

	<?php wp_footer(); ?>
</body>
</html>