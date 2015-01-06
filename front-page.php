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
			  <aside>
				  <ul>
					  <li>
						  <figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/images/uploads/img_01.jpg" alt=" ">
								<figcaption>
								  <h3>We Care About</h3>
									<h2>Every Client</h2>
								</figcaption>
							</figure>
						</li>
						<li>
						  <figure>
							  <img src="<?php echo get_template_directory_uri(); ?>/images/uploads/img_01.jpg" alt=" ">
								<figcaption>
								  <h3>We Care About</h3>
									<h2>Every Client</h2>
								</figcaption>
							</figure>
						</li>
					</ul>
				</aside>
			</div>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>			
			<article id="post-<?php the_ID(); ?>" class="post-home">
			  <div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
				</div>
				<aside class="sidebar-list cf">
				  <div class="col">
					  <h3>Medical</h3>
						<ul>
						  <li>Cardiology</li>
						  <li>Dermatology</li>
						  <li>Gastroenterology</li>	
						  <li>General</li>
						  <li>Gerontology</li>	
						  <li>Gynaecology</li>	
						  <li>Hepatology</li>	
						  <li>Medical Oncology</li>
						</ul>
						<ul>
						  <li>Nephrology</li>
						  <li>Neurology</li>
						  <li>Ophthalmology</li>
						  <li>Paediatric</li>
						  <li>Palliative</li>
						  <li>Rehabilitation</li>
						  <li>Rheumatology</li>
						  <li>Sleep Studies</li>
						</ul>
					</div>
					
					<div class="col">
					  <h3>Surgical</h3>
						<ul>
						  <li>Bariatric</li>
						  <li>Colorectal</li>	
						  <li>Ear, Nose and Throat</li>	
						  <li>General</li>
						  <li>Gynaecological</li>	
						  <li>Oral/Maxillofacial</li>
						</ul>
						<ul>
						  <li>Major and Minor Orthopaedic</li>
						  <li>Ophthalmic</li>
						  <li>Otolaryngology</li>
						  <li>Paediatric</li>
						  <li>Plastic/Reconstructive</li>
						  <li>Urology and Vascular</li>
						</ul>
					</div>
				</aside>
				
				<div class="mab-box cf"><img src="<?php echo get_template_directory_uri(); ?>/images/uploads/map.gif" alt=" " style="display:block;"></div>
		  </article>
			<?php endwhile; ?>
<?php get_footer(); ?>