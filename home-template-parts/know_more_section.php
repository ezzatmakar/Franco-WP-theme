<?php 
$knowMoreSection = get_field('know_more', 5, true);
$knowMoreSubTitle = $knowMoreSection['know_more_subtitle'];
$knowMoreFirstPartOfTitle = $knowMoreSection['know_more_first_part_of_title'];
$knowMoreRestOfTitle = $knowMoreSection['know_more_the_rest_of_title'];
$knowMoreTheParagraph = $knowMoreSection['know_more_the_paragraph'];
$knowMoreTheImageId = $knowMoreSection['know_more_the_image']; 
$knowMoreTheImage = wp_get_attachment_image_src($knowMoreTheImageId, array('1000','800'), true );
?>
<section class="knowMore" style="background-image: url('<?php echo $knowMoreTheImage['0'];?>">
<div class="container">

  <div class="col-md-8 col-sm-12 contentCol sameHeight">
    <div class="title">
      <p><?php echo $knowMoreSubTitle; ?></p>
      <h1><span><?php echo $knowMoreFirstPartOfTitle; ?></span> <?php echo $knowMoreRestOfTitle; ?></h1>
    </div>
    <div class="content">
      <p><?php echo $knowMoreTheParagraph; ?></p>
      <div class="statistics">
        <div class="row">
          <?php get_template_part( 'marketing_statistics' )?>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-12 shapeCol sameHeight">
    <img class="rightShapePc" src="<?php echo get_template_directory_uri();?>/img/knowmore_bg_pc.png">
  </div>

</div>
</section>
