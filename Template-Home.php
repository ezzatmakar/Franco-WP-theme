<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<section class="discover">
  <?php get_template_part("home-template-parts/map_section")?>
</section>

<?php get_template_part("home-template-parts/know_more_section"); ?>

<section class="news">
  <?php get_template_part("home-template-parts/news_section"); ?>
</section>

<section class="partners">
  <?php get_template_part("home-template-parts/partners_section"); ?>  
</section>

<?php get_footer();?>