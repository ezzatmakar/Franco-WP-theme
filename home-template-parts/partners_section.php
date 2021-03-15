<?php 
$partnersSection = get_field('partners_section', 5, true);

$partnersSubTitle = $partnersSection['sub_title'];
$partnersTitleFirstPart = $partnersSection['the_first_part_of_title'];
$partnersRestOfTitle = $partnersSection['the_rest_of_the_title'];
$partnersDetails = $partnersSection['the_details'];

?>
<div class="container">
  <div class="col-md-8">
    <div class="title">
      <p><?php echo $partnersSubTitle; ?></p>
      <h1><span><?php echo $partnersTitleFirstPart; ?></span> <?php echo $partnersRestOfTitle; ?></h1>
    </div>
    <div class="content">
      <p><?php echo $partnersDetails; ?></p>
    </div>

  </div>
  <div class="col-md-8 shapeCol">
    <div class="content">
      <div class="owl-carousel">
        <?php
        $partnersImages = $partnersSection['partner'];
        foreach($partnersImages as $image) : 
          $imageId = $image['partner_image'];
          $attr = array('class' => 'img-responsive');
          $img = wp_get_attachment_image($imageId, array('200', '150'), false, $attr);
        ?>
          <div class="item">
          <?php echo $img; ?>
          </div>
        <?php 
        endforeach; ?>
        
      </div>
    </div>
  </div>
</div>