<?php
/**
 * Template Name: People template
**/
get_header();
?>


<section class="knowMore_people">
  <?php get_template_part( 'people-template-parts/know_more_people' );?>
</section>

<section class="knowMoreInner orange">
  <div class="container">
    <?php get_template_part('people-template-parts/working_section'); ?>
  </div>

  <div class="container">
    <?php get_template_part('people-template-parts/jobs_sections'); ?>

    <div class="col-md-6 col-sm-12 shapeCol">
    </div>
  </div>
</section>


<?php get_footer(); ?>