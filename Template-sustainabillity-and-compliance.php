<?php
/**
 * Template Name: Sustainabillity-and-compliance
 */
get_header();
get_template_part('sustainabillity-template-parts/sustainability_and_compliance_section');

?>

<section class="knowMore leftOrange">
  <?php get_template_part( 'sustainabillity-template-parts/procuring_sustainabillity_section' ); ?>
</section>

<section class="knowMore">
  <?php get_template_part( 'sustainabillity-template-parts/compliance_section' ); ?>
</section>



<?php get_footer(); ?>