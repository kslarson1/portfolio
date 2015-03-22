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


<div class="break_top">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h1><?php the_field('company_name'); ?></h1>
				<hr class="hr_small">
				<h4 class="gray-6"><?php the_field('company_details'); ?></h4>
			</div>
		</div>  <!-- end of row -->
	</div>  <!-- end of container -->
</div>  <!-- end of break_top -->

<div class="container-fluid" style="padding: 0">
	<div class="work_left">
		<p><b>Project: </b><?php the_field('work_scope'); ?></p>
		<p class="gray-5"><?php the_field('work_desc'); ?></p>
		<a href="<?php the_field('page_link'); ?>" target="_blank"><button class="button_ghost">View Site</button></a>
	</div>
	<div class="work_right" style="background-image: url(<?php the_field('bg_image'); ?>)">
	</div>
</div>

<div class="work_testimonial">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h6 style="text-transform: uppercase">testimonial</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 center">
				<h2><?php the_field('testimonial_text'); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 center gray-5">
				<h4><?php the_field('testimonial_author'); ?></h4>
			</div>
		</div>
	</div>
</div>

<div class="work_screen">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<img src="<?php the_field('work_screenshot'); ?>">
			</div>
		</div>
	</div>
</div>

<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
