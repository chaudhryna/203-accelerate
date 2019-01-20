<?php
/**
 * The template for displaying the about page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section class="home-page">
		<div class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="about-content">
					<?php the_content(); ?>
				</div>
				<?php endwhile; // end of the loop. ?>
		</div><!-- .site-content -->
</section>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

		<div class="intro">
				<h3><?php the_field('about-page-intro'); ?></h3>
				<p><?php the_field('about-page-description'); ?></p>
		</div>

			<div class="services">
				<div class="service1">
					<img src="<?php the_field('image1'); ?>" alt="" />
					<h3><?php the_field('title1'); ?></h3>
					<p><?php the_field('description1'); ?></p>
					</div>
				
				<div class="service2">
					<img src="<?php the_field('image2'); ?>" alt="" />
					<h3><?php the_field('title2'); ?></h3>
					<p><?php the_field('description2'); ?></p>
				</div>

				<div class="service3">
					<img src="<?php the_field('image3'); ?>" alt="" />
					<h3><?php the_field('title3'); ?></h3>
					<p><?php the_field('description3'); ?></p>
				</div>

				<div class="service4">
					<img src="<?php the_field('image4'); ?>" alt="" />
					<h3><?php the_field('title4'); ?></h3>
					<p><?php the_field('description4'); ?></p>
				</div>
			</div><!-- .services -->
		
			<div class="teaser">
					<h3><?php the_field('about-page-teaser'); ?></h3>
					<a class="button" href="contact-us">Contact Us</a>
			</div>

		</div><!-- .main-content -->

		

	</div><!-- #primary -->

<?php get_footer(); ?>
