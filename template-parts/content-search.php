<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_books_across
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content-container row">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="col-12">
				<?php the_books_across_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
	</div>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<div class="entry-categories">
					<?php the_category( ', ' ); ?>
				</div>
				<div class="entry-date">
					<?php the_books_across_posted_on(); ?>
				</div>
				<div class="entry-comments">
					<?php comments_number( '0 comments', 'one comment', '% comments' ); ?>
				</div>
				<!-- <div class="entry-author">
					<?php the_books_across_posted_by();?>
				</div> -->
			</div>
		<?php endif; ?>
		<div class="entry-content">
			<?php
			the_excerpt(sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'the-books-across' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-books-across' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
	</header><!-- .entry-header -->

	<!-- <footer class="entry-footer">
		<?php the_books_across_entry_footer(); ?>
	</footer> -->
</article><!-- #post-<?php the_ID(); ?> -->

