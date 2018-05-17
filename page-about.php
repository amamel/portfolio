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
            <p class="lead">Currently working at <a href="https://web.mit.edu/" rel="noopener noreferrer" target="_blank" title="Massachusetts Institute of Technology">MIT</a> designing, developing, and maintaining high quality web-based marketing projects.</p>

            <p>I'm a graduate of the University of Central Florida, holding a Bachelors degree in Digital Media, Interactive Systems. My work involves uncovering goals, generating insights, and designing intuitive ways for people to engage with technology. I advocate for the end-user while balancing product requirements with user-needs.</p>
            <p>I'm mindful of the responsive web, semantic code, typography, use of color, and content hierarchy. While my focus is primarily the front-end web, I make a constant effort to learn other disciplines and believe in continual growth as a digital craftsman.</p> 
            <p>When not working, I love to travel and experience new destinations.</p>

            <h6>Destinations Visited</h6>
            <p>Austria, Bahamas, Bosnia and Herzegovina, Brazil, Canada, Cayman Islands, Croatia, Denmark, Dominican Republic, France, Germany, Italy, Mexico, Morocco, Netherlands, Norway, Portugal, Slovenia, Spain, Switzerland, United Kingdom, United States, Vatican City</p>
<br>
            <h6>Other Interests</h6>
            <ul class="no-bullets list-interests">
              <li>Fitness</li>
              <li>Learning languages</li>
              <li><a href="https://www.discogs.com/user/noalarmsnosurprises" rel="noopener noreferrer" target="_blank" title="Discogs">Vinyl records</a></li>
              <li><a href="https://nano.org/en" rel="noopener noreferrer" target="_blank" title="NANO">NANO</a>, <a href="https://origintrail.io/" rel="noopener noreferrer" target="_blank" title="TRAC">TRAC</a>, <a href="https://neo.org/" rel="noopener noreferrer" target="_blank" title="NEO">NEO</a></li>
            </ul>
          </div>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>
