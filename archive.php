<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>

<nav class="blog_nav">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<h1 class="inline">What's New</h1>
				<?php wp_nav_menu( array( 'theme_location' => 'blog', 'menu_id' => 'blog menu' ) ); ?>
			</div>
		</div>
	</div>
</nav>

			<?php while ( have_posts() ) : the_post(); ?>

<div id="archive_posts">
<div class="container">
	<div class="row">
		<div class="col-xs-12">

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div>
	</div>
</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
