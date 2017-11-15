<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mam.el
 */

get_header(); ?>


<section class="page--categories">
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
				<?php
	// Check if there are any posts to display
		if ( have_posts() ) : ?>
			<header class="archive-header">
			<h2 class="archive-title" style="padding-bottom: 20px;"><?php single_cat_title( '', true ); ?></h2>
		<?php
	// Display optional category description
	 	if ( category_description() ) : ?>
			<div class="archive-meta"><?php echo category_description(); ?></div>
		<?php endif; ?>
	</header>

	<?php

	// The Loop
	while ( have_posts() ) : the_post(); ?>
		<div class="post-listing-archive">
			<time class="post-date"><strong><?php the_time('F, Y') ?></strong></time>
			<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
		</div>
	<?php endwhile;
	else: ?>
	<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>
	          </div>
	      </div>
	  </div>
	</section>
<?php get_footer(); ?>