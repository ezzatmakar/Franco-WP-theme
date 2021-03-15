<?php 
$knowMoreSection = get_field('know_more_section', 131, true);
$theSubtitle = $knowMoreSection['the_section_subtitle'];
$theFirstPartOfTitle = $knowMoreSection['the_first_part_of_title'];
$theRestOfTitle = $knowMoreSection['the_rest_of_the_title'];
$theContent = $knowMoreSection['the_section_content'];
$SectionLogoImageId = $knowMoreSection['the_section_image'];
$attr = array('class' => 'img-responsive center-block', 'alt' => 'image');
$image = wp_get_attachment_image($SectionLogoImageId, array(500, 400), false, $attr);
?>
<div class="container">

  <div class="col-md-8 col-sm-12 contentCol sameHeight">
    <div class="title">
      <p><?php echo $theSubtitle; ?></p>
      <h1><span><?php echo $theFirstPartOfTitle; ?></span> <?php echo $theRestOfTitle; ?></h1>
    </div>
    <div class="content">
      <p><?php echo $theContent; ?></p>
    </div>
  </div>

  <div class="col-md-4 col-sm-12 shapeCol sameHeight">
    <?php echo $image; ?>
  </div>

</div>