<?php
/**
 * Template Name: Franco Brand
 */
get_header();
$top_section = get_field('the_top_section', 219, true);
?>
<section class="knowMoreInner bigContent" style="background-image: url('<?php echo get_template_directory_uri()?>/img/knowmore_bg_inner_2_pc.png')">
  <div class="container">

    <div class="col-md-7 col-sm-12 contentCol">

      <div class="title">
        <p><?php echo $top_section['subtitle']?></p>
        <h1><span><?php echo $top_section['']?></span> <?php echo $top_section['top_title_first_part']?></h1>
      </div>
      <div class="content">
        <?php echo $top_section['the_top_content']?>
      </div>


      <?php 
      $ststistics_section = get_field('marketing_statistics', 219, true);
      ?>
      <div class="title">
        <p><?php echo $ststistics_section['subtitle'];?></p>
        <h1><span><?php echo $ststistics_section['first_part_of_title'];?></span> <?php echo $ststistics_section['rest_of_title'];?></h1>
      </div>
      <div class="content">
        <p><?php echo $ststistics_section['statistics_details'];?></p>
        <div class="statistics">
          <div class="row">
            <?php get_template_part( 'marketing_statistics' )?>
          </div>
        </div>
      </div>

    </div>

    <?php 
    $imgId = $ststistics_section['the_image_in_the_right'];
    $img =  wp_get_attachment_image_src($imgId, array('800','600'), true );
    ?>
    <div class="col-md-5 col-sm-12 shapeCol">
      <img class="img-responsive center-block" src="<?php echo $img[0];?>" alt="">
    </div>

  </div>
</section>

<section class="partners">
  <?php get_template_part("home-template-parts/partners_section"); ?>  
</section>

<?php get_footer(); ?>

<script>
  $(function () {
    $('.partners').addClass( "inner" );
  });
</script>