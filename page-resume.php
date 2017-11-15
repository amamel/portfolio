<?php
/*
Template Name: Resume
*/
get_header(); ?>

<section class="page--resume">
  <div class="container-fluid">
    <div class="row start-xs">
      <div class="col-lg-3">
        <h1 class="h6 screen-reader-text">Resume</h1>
        <ul class="no-bullets list-resume" style="margin-top:50px;">
          <li><a href="<?php the_field( 'resume', 'option' ); ?>">Resume <small>(.pdf)</small></a></li>
          <li><a href="<?php the_field( 'linkedin', 'option' ); ?>">Linkedin</a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-xs-12 ">
        <h2 class="h4"><?php the_field( 'name' ); ?></h2>
        <p class="lead">
        <?php the_field( 'intro' ); ?></p>
        <hr />
        <?php while ( have_rows( 'work_experience' ) ) : the_row(); ?>
        <div class="block-experience">
        <strong><?php the_sub_field( 'title' ); ?></strong>, <?php the_sub_field( 'company' ); ?>
          <span class="dates"><?php the_sub_field( 'from' ); ?> &ndash; <?php the_sub_field( 'to' ); ?></span><br/>
          <span class="location"><?php the_sub_field( 'location' ); ?></span>
          <?php the_sub_field( 'description' ); ?>
        </div>
        <?php endwhile; ?>
        <div class="bock-process">
          <?php the_field( 'process' ); ?>
        </div>
        <div class="block-education">
          <?php the_field( 'education_and_languages' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
