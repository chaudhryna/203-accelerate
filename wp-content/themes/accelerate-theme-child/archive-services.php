<?php
/**
 * The template for displaying all services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content contact-content">
		<div class="main-content" role="main">
      <?php while ( have_posts() ) : the_post();
        $image = get_field('image');
        $size = 'full'; ?>
                
  <article class = "services">
    <h2><a href="<?php the_permalink(); ?>"
      <?php the_title(); ?></a></h2>
				  <h2><?php the_title(); ?></h2>
				  <?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>