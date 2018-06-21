<?php
/*
Template Name: Anspress Page
*/
get_header();

?>

<?php get_template_part( 'page-parts/ans-before-wrap' ); ?>
<?php /* Start the Loop */ 
	while ( have_posts() ) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
		<?php
			the_content();

			if ( ! $is_page_builder_used )
				wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
		?>
		</div> <!-- .entry-content -->
	</article> <!-- .et_pb_post -->
	<!-- End  Article -->
<?php endwhile; ?>

<?php get_template_part( 'page-parts/ans-after-wrap' );?>

<?php

get_footer();