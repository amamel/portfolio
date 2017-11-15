<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mam.el
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="page--articles">
	      <div class="container">
	        <div class="row start-xs">
	          <div class="cat-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<ul class="no-bullets cat-filter">
						<?php wp_list_categories( array(
								'orderby'    => 'name',
								'title_li' => '<h6 class="cat-title">' . __( 'Categories', 'textdomain' ) . '</h6>'
							) ); ?>
					</ul>
	          </div>
	          <div class="col-lg-offset-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<h2>Writing</h2>
							<p>Archive of writing and notes sometimes industry related</p>
							<ul class="post-listing-archive">
								<?php
									$args = array( 'numberposts' => '-1' );
									$postslist = get_posts($args);
									$category = get_the_category();
									$firstCategory = $category[0]->cat_name;
									foreach ($postslist as $post) :  setup_postdata($post); ?>
									<li>
										<time class="post-date"><strong><?php the_date(); ?></strong></time> • <?php the_category( '&bull;' ); ?>
										<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
									</li>
								<?php endforeach; ?>
							</ul>
							<?php get_the_excerpt(); ?>
	          </div>
	      </div>
	    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
