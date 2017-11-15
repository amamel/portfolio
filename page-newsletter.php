<?php
/*
Template Name: Newsletter
*/
get_header(); ?>

<section class="page--cta-connect" style="margin-top:100px; ">
	<div class="container-fluid">
		<div class="row start-xs">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display: flex; flex-direction: column;">
				<h3>Newsletter</h3>
				<p>Sign up for infrequent yet helpful links and updates now and again.</p>
				<!-- Begin MailChimp Signup Form -->
				<div class="mc-form">
					<form action="//alexmamel.us11.list-manage.com/subscribe/post?u=3218bec38bbb66b6c674ad865&amp;id=b247e1d90e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div class="mc-signup">
							<label for="mce-EMAIL">Email List</label>
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_3218bec38bbb66b6c674ad865_b247e1d90e" tabindex="-1" value="">
							</div>
							<div class="clear">
								<input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
							</div>
							<small>I promise never to share your email address. Of course, you can opt out of the newsletter at any time.</small>
						 </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
