<?php
/**
 * Template Name: Guidelines
 *
 * @package Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


<div id="guidelines">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h1 style="font-weight: 600">Project Guidelines</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 center">
				<h3><?php the_field('guidelines_intro'); ?></h3>
			</div>
		</div>
	</div>
</div>

<div class="the_list">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
<!-- begin positive repeater -->
<?php

if( have_rows('client_positive') ): ;?>

<!-- add hire me section -->
	<div class="row">
		<div class="col-xs-12 center">
			<h3><?php the_field('hire_me_header'); ?></h3>
			<hr>
		</div>
	</div>

 	<!-- // // loop through the rows of data -->
    <?php while ( have_rows('client_positive') ) : the_row(); ?>

       <!-- show each repeater item -->
		
		<div class="list_container">
			<i class="fa fa-2x fa-plus-square-o"></i>
	        <h5 class="center"><b><?php the_sub_field('positive_item'); ?></b></h5>
	        <p><?php the_sub_field('positive_text'); ?></p>
		</div>
		
    <?php endwhile;

else :

    // no rows found

endif;
?>
<!-- end of positive repeater -->

			</div>  <!-- end of column -->
			<div class="col-xs-12 col-sm-6">

<!-- begin negative repeater -->
<?php

if( have_rows('client_negative') ): ; ?>

<!-- add hire me section -->
	<div class="row">
		<div class="col-xs-12 center">
			<h3><?php the_field('fire_me_header'); ?></h3>
			<hr>
		</div>
	</div>

 	<!-- // // loop through the rows of data -->
    <?php while ( have_rows('client_negative') ) : the_row(); ?>

       <!-- show each repeater item -->
		
		<div class="list_container">
			<i class="fa fa-2x fa-minus-square-o"></i>
	        <h5 class="center"><b><?php the_sub_field('negative_item'); ?></b></h5>
	        <p><?php the_sub_field('negative_text'); ?></p>
		</div>
		
    <?php endwhile;

else :

    // no rows found

endif;
?>
<!-- end of negative repeater -->
			</div>  <!-- end of column -->
		</div>  <!-- end of row -->
	</div>
</div>  <!-- end of =the_list -->

<div class="break">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center">
				<h3><?php the_field('guidelines_end'); ?></h3>
			</div>
		</div>
	</div>
</div>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
