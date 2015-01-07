<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
<div id="secondary" class="sidebar-container" role="complementary">
		<div class="widget-area">
	<?php dynamic_sidebar( 'blog-sidebar' ); ?>
	</div>
</div>
<?php endif; ?>