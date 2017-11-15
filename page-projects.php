<?php
/*
Template Name: Projects
*/
get_header(); ?>

<section class="page">
  <section class="container-fluid">
    <ul class="portfolio row">
      <?php while ( have_rows( 'work_cards' ) ) : the_row(); ?>
      <li class="col-sm-6">
        		<?php $card_image = get_sub_field( 'card_image' ); ?>
        		<?php if ( $card_image ) { ?>
        			<img src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
        		<?php } ?>

        <a href="<?php the_sub_field( 'card_link' ); ?>" class="hover">
          <div class="mask"></div>
          <div class="text">
            <div class="align-bottom">
              <h3><?php the_sub_field( 'card_name' ); ?></h3>
            </div>
          </div>
        </a>
      </li>
    <?php endwhile; ?>
    </ul>
  </section>





  </div>
</div>

<?php get_footer(); ?>
