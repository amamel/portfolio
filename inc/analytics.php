<?php
// Google Analytics snippet from HTML5 Boilerplate
	// Cookie domain is 'auto' configured. See: http://goo.gl/VUCHKM

	define('GOOGLE_ANALYTICS_ID', 'UA-44903005-1');
	function ajm_google_analytics() { ?>
	<script>
	  <?php if (WP_ENV === 'production') : ?>
	    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	    e.src='//www.google-analytics.com/analytics.js';
	    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	  <?php else : ?>
	    function ga() {
	      console.log('GoogleAnalytics: ' + [].slice.call(arguments));
	    }
	  <?php endif; ?>
	  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>','auto');ga('send','pageview');
	</script>

	<?php }

	if (GOOGLE_ANALYTICS_ID && (WP_ENV !== 'production' || !current_user_can('manage_options'))) {
	  add_action('wp_footer', 'ajm_google_analytics', 20);
	}