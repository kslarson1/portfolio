<?php
/**
 * Template Name: Blog
 *
 * @package Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<!-- blog header -->
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

<div id="blog">
<div class="container">
	<div class="row">
		<div class="col-xs-12">

				<?php get_template_part( 'content', 'page' ); ?>

<!-- call blog posts -->
<?php $the_query = new WP_Query( 'showposts=2' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	<h1 class="center" style="margin: 0"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	<p class="center"><?php the_date(); ?></p>
	<a href="<?php the_permalink() ?>"><img src="<?php the_field('featured_image'); ?>"></a>
	<p><?php the_excerpt(__('(more…)')); ?></p>
	<a href="<?php the_permalink() ?>"><button class="button_ghost">View Post</button></a>
	<br>
	<?php echo do_shortcode('[cresta-social-share]'); ?>
	<hr>

<?php endwhile;?>

			<?php endwhile; // end of the loop. ?>
			
		</div> <!-- end of col -->
	</div>  <!-- end of row -->
</div>	<!-- end of container -->
</div>  <!-- end of =blog -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
