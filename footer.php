<?php
?>

</div><!-- page wrapper -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<div class="row start-xs">
				<div class="col-lg-4 col-sm-6 col-xs-12 copyright">
					<p>&copy; <?php echo date('Y'); ?> Alex Mamel. All rights reserved.<br>
						Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>. Hosted at <a href="https://www.webfaction.com/?aid=104148">WebFaction</a>, designed and coded by me. Source code on <a href="<?php the_field( 'github', 'option' ); ?>">GitHub</a>.</p>
				</div>

				<div class="col-lg-offset-2 col-sm-6 col-xs-12">
					<a href="<?php the_field( 'codepen', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Codepen">Codepen</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php the_field( 'dribbble', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Dribbble">Dribbble</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php the_field( 'github', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="GitHub">GitHub</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php the_field( 'instagram', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Instagram">Instagram</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/resume" title="Resume">Resume</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="/sitemap.xml" rel="noopener noreferrer" target="_blank" title="Site Map">Site Map</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
