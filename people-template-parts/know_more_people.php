<?php 
$knowMoreSection = get_field('know_more_section', 158, true);
$knowMoreSubTitle = $knowMoreSection['subtitle'];
$knowMoreFirstPartOfTitle = $knowMoreSection['the_first_part_of_title'];
$knowMoreRestOfTitle = $knowMoreSection['the_rest_of_the_title'];
$knowMoreTheContent = $knowMoreSection['the_content'];
$knowMoreTheImageId = $knowMoreSection['the_image']; 
$knowMoreTheImage = wp_get_attachment_image_src($knowMoreTheImageId, array('600','400'), true );
?>
<div class="container">
  <div class="col-md-6 col-sm-12 contentCol sameHeight">
    <div class="title">
      <p><?php echo $knowMoreSubTitle; ?></p>
      <h1><span><?php echo $knowMoreFirstPartOfTitle; ?></span> <?php echo $knowMoreRestOfTitle; ?></h1>
    </div>
    <div class="content">
      <p><?php echo $knowMoreTheContent?></p>
    </div>
  </div>

  <div class="col-md-6 col-sm-12 shapeCol sameHeight">
    <img class="img-responsive center-block" src="<?php echo $knowMoreTheImage[0];?>" alt="">
  </div>
</div>