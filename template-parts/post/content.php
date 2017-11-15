<?php


?>
<section class="page--article" style="max-width:1100px; margin:0 auto;">
	<div class="container-fluid">
		<div class="row start-xs">
			<div class="col-lg-offset-2 col-lg-8 col-lg-offset-2 col-xs-12">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;

                        if ('post' === get_post_type()) : ?>

						<div class="entry-meta">
							<span class="post-date">Updated <?php the_date(); ?> in </span><?php the_category('&bull;'); ?>
						</div><!-- .entry-meta -->
						<hr />
						<?php
                        endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<h6>TLDR</h6>
						<?php
							the_excerpt();
                            the_content(sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mamel'),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                get_the_title()
                            ));
                        ?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">

					</footer><!-- .entry-footer -->
				</article><!-- #post-<?php the_ID(); ?> -->
				<a href="#" class="go-top">Back to All Posts</a>

		</div>
	</div>
</section>
