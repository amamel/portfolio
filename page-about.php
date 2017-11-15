<?php
/*
Template Name: About
*/
get_header(''); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <section class="page--intro">
      <div class="container-fluid">
        <div class="row start-xs">
          <div class="cat-container col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <ul class="no-bullets cat-filter">
              <li><h6>Elsewhere</h6></li>
              <li><a href="<?php the_field( 'instagram', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Instagram">Instagram</a></li>
              <li><a href="<?php the_field( 'linkedin', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Linkedin">Linkedin</a></li>
              <li><a href="<?php the_field( 'spotify', 'option' ); ?>" rel="noopener noreferrer" target="_blank" title="Spotify">Spotify</a></li>
            </ul>
          </div>
          <div class="col-lg-offset-1 col-lg-7 col-md-6 col-sm-6 col-xs-12">
          <h1>About</h1>
          <img src="/wp-content/uploads/2017/10/DSCF6228.jpg" style="margin-top: 30px; margin-bottom: 30px;"/>
            <p class="lead">I'm a digital craftsman based in Florida. I spec, design and build products for the web.</p>

            <p>I'm a graduate of the University of Central Florida, with a degree in Digital Media. My work involves uncovering goals, generating insights, and designing intuitive ways for people to engage with technology. I advocate for the end-user while balancing product requirements with user-needs. I am passionate about the responsive web, semantic code, typography, use of color, and hierarchy. While my focus is primarly the front-end web, I make a constant effort to learn other disciplines and become a more well-rounded craftsman. Whenever I have the opportunity, I love to travel and experience different sights and destinations in the world.</p>

            <h6>Countries Traversed</h6>
            <p>Austria, Bahamas, Bosnia and Herzegovina, Brazil, Canada, Cayman Islands, Croatia, Denmark, Dominican Republic, France, Germany, Italy, Mexico, Morocco, Netherlands, Norway, Portugal, Slovenia, Spain, Switzerland, United Kingdom, United States, Vatican City</p>
<br>
            <h6>Interests</h6>
            <ul class="no-bullets list-interests">
              <li>Traveling</li>
              <li>Health & Fitness</li>
              <li>Learning Portuguese and French</li>
              <li>Music</li>
              <li>Data Visualization</li>
            </ul>
            <br />

            <h6>Site Information</h6>
            <p>Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a>. Hosted at <a href="https://www.webfaction.com/?aid=104148">WebFaction</a>, designed and coded by me. Source code on <a href="<?php the_field( 'github', 'option' ); ?>">GitHub</a>.</p>
          </div>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>
