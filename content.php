<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php if ( is_single() ) : ?>

				<article id="post-<?php the_ID(); ?>" class="single-post cf">
          <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
					<figure><?php the_post_thumbnail(); ?></figure>
					<?php endif; ?>
					<div class="date"><span><?php the_time('d'); ?></span>/<?php the_time('m'); ?></div>
					<div class="txt">
						<header>
							<h1><?php the_title();?></h1>
						</header>
						<div class="meta-post cf">
							<?php the_terms(get_the_ID(), 'category', '<div class="info">  ', ', ', '</div>' ); ?>
							<div class="share-post">
								<h3>Share this:</h3>
								<ul>
									<li class="tweet"><a href="#">tweet</a></li>
									<li class="facebook"><a href="#">facebook</a></li>
									<li class="google"><a href="#">google</a></li>
								</ul>
							</div>
						</div>						
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
					</div>
				</article>
				
<?php else : ?>

				<article id="post-<?php the_ID(); ?>" class="news-post">
          <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
					<figure><?php the_post_thumbnail(); ?></figure>
					<?php endif; ?>
					<div class="date"><span><?php the_time('d'); ?></span>/<?php the_time('m'); ?></div>
					<div class="txt">
						<header>
							<h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
						</header>
						<?php the_terms(get_the_ID(), 'category', '<div class="info">  ', ', ', '</div>' ); ?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink();?>" title="<?php the_title();?>" class="more">Read More</a>
					</div>
				</article>
<?php endif; // is_single() ?>
<!--				
<article id="post-<?php the_ID(); ?>" class="blog-post cf">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>

		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div>
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer>
</article> #post -->
