<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
<section class="page--intro">
  <div class="container-fluid">
    <div class="row start-xs hero">
      <div id="container-pixie">
      <div class="col-lg-9 col-md-11 col-sm-12 col-xs-12">
          <canvas id="pixie"></canvas>
        <h6><span class="greeting">Hello</span></h6>
        <h1 class="hero-text">Designer &amp; builder of digital experiences.</h1>
          <p style="max-width:710px; margin-bottom:30px;">I’m a designer and front-end developer working at <a href="https://web.mit.edu/" rel="noopener noreferrer" target="_blank" title="Massachusetts Institute of Technology">MIT</a> in Cambridge, MA.</p>
          <p style="max-width:710px;">I specialize in crafting digital experiences by balancing product constraints and user-needs, to create interfaces that feel natural and intuitive.</p>
          </div>
      </div>
</div>
      </div>
</section>

<section id="projects" class="page--projects">
  <div class="container-fluid">
    <h2>Projects</h2>
    <ul class="row">
      <?php while (have_rows('work_cards')) : the_row(); ?>
      <li class="center-xs col-sm-6 col-xs-12 no-bullets">
            <figure>
                <?php $card_image = get_sub_field('card_image'); ?>
                <?php if ($card_image) {
    ?>
              <img src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />

<?php if ( post_password_required() ) {

  echo get_the_password_form();

} else { ?>
              <a class="hover" href="<?php the_sub_field('card_link'); ?>">
<?php } ?>
              <figcaption>
                <div class="mask">
                  <div class="text">
                    <div class="align-bottom">
                      <h4><?php the_sub_field('card_name'); ?></h4>
                    </div>
                  </div>
                </div>
              </figcaption>
            </a>
          </figure>
          <?php
} ?>
      </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<section class="page--contact">
	<div class="container-fluid">
		<div class="row center-xs">
			<div class="col-lg-7 col-md-8 col-sm-11 col-xs-12">
				<h3 style="margin-bottom: 16px;">Let's Collaborate</h3>
				<h4>Let's talk about your brand, business and project goals and create an intuitive, beautiful, and engaging product experience.</h4>
				<a href="/contact" class="c-btn">Contact</a>
			</div>
		</div>
	</div>
</section>
</main>

<?php get_footer(); ?>
