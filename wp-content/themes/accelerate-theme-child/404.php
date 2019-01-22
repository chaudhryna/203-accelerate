<?php
/**
 * The template for displaying a 404 error
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="content-area">

  <img class="girl-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/girl.jpg"/>

		<div id="content" class="site-content" role="main">

      <h1 class="error-msg">Page Not Found!</h1>
      
      <h2>This is somewhat embarrassing, isn’t it?</h2>
        
      <p>It looks like nothing was found at this location. Maybe try another link at the top of the page?</p>
          
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

    </div><!-- #content -->
  </div><!-- #primary -->
  
<?php get_footer(); ?>