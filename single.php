<?php
/**
 * The template for displaying all single posts.
 *
 * @package Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

<div class="single_post">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8">

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>


		<?php endwhile; // end of the loop. ?>
		</div>

		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>  <!-- end of row -->
</div>  <!-- end of container -->
</div>  <!-- end of single_post -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
