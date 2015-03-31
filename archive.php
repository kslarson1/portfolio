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

<div class="archive_posts">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<p class="center gray-5"><?php the_field('featured_text'); ?></p>
			

			<a href="<?php the_permalink() ?>"><button class="button_ghost">View Post</button></a>

			</div>
		</div>
	</div>
</div>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
