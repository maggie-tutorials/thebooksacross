<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_books_across
 */

get_header();
?>

	<div id="primary" class="content-area content-single col-12 col-md-9">
		<main id="main" class="single-post">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single', get_post_type() );

			the_post_navigation( array(
				'prev_text'                  => __( '« Previous: %title' ),
				'next_text'                  => __( 'Next: %title »' ),
				'screen_reader_text' => __( 'Continue Reading' ),
			) );

			?>

			<?php

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
