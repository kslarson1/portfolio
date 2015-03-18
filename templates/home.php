<?php
/**
 * Template Name: Home
 *
 * @package Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


<div id="landing">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
			<br>
			<br>
				<h1>BEAUTIFUL</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h1>INTELLIGENT</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h1>DESIGN</h1>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-xs-12 center">
				<a href="#intro"><i class="fa fa-angle-down fa-3x"></i></a>
			</div>
		</div>
	</div>
</div>

<div id="intro">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2 center">
				<h1>Drip Forward</h1>
				<h4><?php the_field('intro_text'); ?></h4>
				<a href="blog"><button class="button_ghost">about me</button></a>
			</div>
		</div>
	</div>
</div>

<div id="latest">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h1><?php the_field('latest_header'); ?></h1>
				<br>
			</div>
		</div>
		
<!-- start calling latest projects -->
<?php
//display 4 posts for category id 2 (projects)
    $args=array(
      'cat' => 2,
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 4,
      'caller_get_posts'=> 1
      );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      
<div class="col-xs-12 col-sm-6">
	<a href="<?php the_permalink() ?>" rel="bookmark">
		<div class="project_box" style="background-image: url(<?php the_field('featured_image'); ?>)">
			<div class="project_box_bottom">
				<h4><?php the_field('featured_text'); ?></h4>
			</div>
		</div>
	</a>
</div>

	<?php endwhile; }
	wp_reset_query(); ?> <!-- Restore global post data stomped by the_post(). -->
<!-- end calling latest projects -->

		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2 center">
				<h3 style="margin-top: 4em"><?php the_field('latest_text'); ?></h3>
				<br>
				<a href="blog"><button class="button_ghost">More Posts</button></a>
			</div>
		</div>

	</div>  <!-- end of container -->			
</div>  <!-- end of =latest -->

<div id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<h1><?php the_field('quote'); ?></h1>
				<p class="ta-right"><b><?php the_field('quote_author'); ?></b></p>
			</div>
		</div>
	</div>
</div>

<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h2>Say hi.</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3 center">
				<h5 class="inline">Do you have a project you want to discuss? Submit below or check out my guidelines first.</h5><a href="guidelines"><i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 center">
				<h5>303-514-0021  /  hello@dripforward.com</h5>
			</div>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="9" title="Contact Form Home"]'); ?>
	</div>
</div>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
