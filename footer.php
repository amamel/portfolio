<?php
?>

</div><!-- page wrapper -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<div class="row start-xs">
				<div class="col-lg-8 col-sm-6 col-xs-12 copyright">
					&copy; <?php echo date('Y'); ?> Alex Mamel. All Rights Reserved.
				</div>

				<div class="col-lg-4 col-sm-6 col-xs-12">
					<a href="<?php the_field( 'dribbble', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Dribbble">Dribbble</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php the_field( 'github', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="GitHub">GitHub</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php the_field( 'linkedin', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Linkedin">Linkedin</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/sitemap.xml" title="Site Map">Site Map</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
