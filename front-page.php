<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

		  <div class="slider-home cf">
		  <figure>
		  		<?php
		  		if(has_post_thumbnail())
		  		{
		  			the_post_thumbnail('large');
		  		}
		  		?>
				<figcaption>
				  <h3>We Care About</h3>
					<h2>Every Client</h2>
				</figcaption>
			</figure>
					
			</div>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>			
			<article id="post-<?php the_ID(); ?>" class="post-home">
			  <div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
				</div>
				<?php get_sidebar(); ?>
				<div class="mab-box cf"><?php echo do_shortcode('[gmap]'); ?></div>
		  </article>
			<?php endwhile; ?>
<?php get_footer(); ?>