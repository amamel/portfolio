<?php


?>
<section class="page--article">
	<div class="container-fluid">
		<div class="row start-xs">
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-9 col-sm-offset-1">
					<?php while (have_rows('case_studies')) : the_row(); ?>
						<?php if (get_row_layout() == '') : ?>
							<?php if (have_rows('case_study')) : ?>
								<?php while (have_rows('case_study')) : the_row(); ?>
									<h1><?php the_sub_field('project_name'); ?></h1>
					</div>
		</div>
		<div class="post-content">
			<p><?php the_sub_field('description'); ?></p>
		</div>
	</div>

	<div class="col-sm-4 col-md-3 col-md-offset-1">
		<div id="affix" class="affix-top" style="width:300px">
			<h2 class="h6" style="text-transform:uppercase;">Summary</h2>
				<?php the_sub_field('summary'); ?>

				<h2 class="h6" style="text-transform:uppercase;">Deliverables</h2>
				<ul class="fixed-case-summary no-bullets">
				<?php if (have_rows('deliverables')) : ?>
					<?php while (have_rows('deliverables')) : the_row(); ?>
						<li><?php the_sub_field('deliverable'); ?></li>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found?>
				<?php endif; ?>
			</ul>
			<h2 class="h6" style="text-transform:uppercase;">Jump to</h2>
			<ul class="fixed-case-summary no-bullets">
			</ul>
			<p><a href="#" class="go-top">Back to the top</a></p>
		</div>
	</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found?>
		<?php endif; ?>
	<?php endif; ?>
<?php endwhile; ?>
</div>
</div>
</section>
