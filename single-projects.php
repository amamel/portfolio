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
			<section class="page--projects">
				<div class="container-fluid">
					<div class="row start-xs">
						<div class="col-lg-7 col-md-8 col-sm-12">
							<div class="row">
								<div class="col-sm-12">
								<?php while ( have_rows( 'project' ) ) : the_row(); ?>
												<h1><?php the_sub_field('project_name'); ?></h1>
								</div>
					</div>
					<div class="post-content">
						<p><?php the_sub_field('description'); ?></p>
					</div>
				</div>

				<div class="col-sm-offset-1 col-lg-3 col-md-3 col-sm-12">
					<div class="affix-top" style="width:300px;">
						<h2 class="h6" style="color: ##5e5e5d; letter-spacing: 1px; text-transform:uppercase; font-size: .75rem;">Summary</h2>
							<?php the_sub_field('summary'); ?>

						<h2 class="h6" style="color: ##5e5e5d; letter-spacing: 1px; text-transform:uppercase; font-size: .75rem;">Deliverables</h2>
							<ul class="no-bullets fixed-case-summary">
								<?php if ( have_rows( 'deliverables' ) ) : ?>
									<?php while ( have_rows( 'deliverables' ) ) : the_row(); ?>
										<li><strong>&ndash;</strong> <?php the_sub_field('deliverable'); ?></li>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found?>
							<?php endif; ?>
						</ul>

						<h2 class="h6" style="color: ##5e5e5d; letter-spacing: 1px; text-transform:uppercase; font-size: .75rem;">Jump to</h2>
							<ul class="fixed-case-summary no-bullets">
								<?php if ( have_rows( 'jump_to' ) ) : ?>
									<?php while ( have_rows( 'jump_to' ) ) : the_row(); ?>
										<li><strong>&ndash;</strong> <a href="#<?php the_sub_field( 'link_anchor' ); ?>"><?php the_sub_field( 'title' ); ?></a></li>
									<?php endwhile; ?>
								<?php else : ?>
									<?php // no rows found ?>
								<?php endif; ?>
							</ul>
						<p><a href="#" class="go-top">Back to the top</a></p>
					</div>
				</div>
						<?php endwhile; ?>
			</div>
			</div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
