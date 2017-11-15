<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mam.el
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/post/content', get_post_format());

						the_post_navigation( array(
            'prev_text'                  => __( 'prev chapter: %title' ),
            'next_text'                  => __( 'next chapter: %title' ),
            'in_same_term'               => true,
            'taxonomy'                   => __( 'post_tag' ),
            'screen_reader_text' => __( 'Continue Reading' ),
        ) );

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

						if ( is_page_template( 'about.php' ) ) {
    				// about.php is used
						} else {
    				// about.php is not used
						}

        endwhile; // End of the loop.
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
