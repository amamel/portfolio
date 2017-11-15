<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section class="page--contact">
  <div class="container-fluid">
    <div class="row start-xs">
      <div class="col-lg-7">
        <h1><span class="greeting">Hello</span></h1>
        <p class="lead">Let's talk. Send me an email <a href="mailto:<?php the_field( 'email', 'option' ); ?>" rel="nofollow" title="Email"><?php the_field( 'email', 'option' ); ?></a></p>
<br>
        <hr>

        <h6>Sometimes Newsletter</h6>

        <p>Sign up for infrequent but helpful news, articles and updates now and again.<br><small>Your email address will never be shared and you can opt-out at any time.</small></p>
        <br>

        <aside class="sidebar sidebar-optin" role="complementary">
          <div class="sidebar--optin-inner">
            <div class="sidebar--optin-wrapper center-align">
              <!-- Begin MailChimp Signup Form -->
              <div class="mc-form">
                <form action="//alexmamel.us11.list-manage.com/subscribe/post?u=3218bec38bbb66b6c674ad865&amp;id=b247e1d90e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div class="mc-signup">
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                      <input type="text" name="b_3218bec38bbb66b6c674ad865_b247e1d90e" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                      <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </div>
                   </div>
                </form>
              </div>
            </div>
          </div>
        </aside>


      </div>
    </div>
  </div>
  </div>
</section>

<?php get_footer(); ?>
