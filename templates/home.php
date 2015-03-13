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
				<h1>add logo</h1>
				<h4>I help companies grow through well-designed websites and media. I solve problems. Want more traffic? Sales? Revenue? Let's chat.</h4>
				<a href="#"><button class="button_ghost">about me</button></a>
			</div>
		</div>
	</div>
</div>

<div id="latest">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h1>Latest News</h1>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="project_box">
					

				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="project_box">
					
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="project_box">
					
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="project_box">
					
					
				</div>
			</div>
		</div>
	</div>
</div>

<div id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<h1>"Karl helped me stop sucking at everything so much."</h1>
				<p class="ta-right"><b>-fictional person</b></p>
			</div>
		</div>
	</div>
</div>

<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h2>Say hi</h2>
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
