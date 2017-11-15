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
        <h1 class="hero-text">Designer and builder of digital experiences</h1>
          <p style="max-width:700px; margin-bottom:30px;">UX Designer from Tampa, Florida. I specialize in crafting digital experiences. I balance product constraints and user-needs to create interfaces that feel natural and intuitive.</p>
          <h5 style="margin-bottom: 200px;">
            <a href="/resume">View Resume &rarr;</a>
          </h5>
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
      <li class="center-xs col-sm-6 col-xs-12">
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
				<h4>Let's work together</h4>
				<h3>Let's talk about your business, brand and project goals. We can build something fantastic, together.</h3>
				<br/>

				<h5><a href="/contact" class="c-btn">Get started</a></h5>
			</div>
		</div>
	</div>
</section>
</main>
</div>

<?php get_footer(); ?>
