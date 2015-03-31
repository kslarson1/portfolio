<?php
/**
 * @package Portfolio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-sm-offset-1">


	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title center"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php portfolio_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'portfolio' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'portfolio' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->
	<h4 class="gray-6 center"><?php the_field('company_details'); ?></h4>
	<a href="<?php the_permalink() ?>"><button class="button_ghost">View Post</button></a>
		<hr>
		<hr>
		</div>
	</div>
</div>
	
</article><!-- #post-## -->